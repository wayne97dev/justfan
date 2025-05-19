/*
* WebRTC stream JS component
*/
"use strict";
/* global app, user, streamVars, Stream,  getCookie, stream, setCookie, LivekitClient, trans, launchToast */

var Broadcast = {
    room: null,
    localTracks: [],
    localVideo: null,
    currentVideoDeviceId: null,
    availableVideoDevices: [],
    currentAudioDeviceId: null,
    availableAudioDevices: [],
    screenSharingActive: false,
    screenShareTracks: [],

    init: function () {
        Stream.initAuxiliaryModules();
        this.loadPreferredDevicesFromCookies();

        Promise.all([
            this.populateCameraDropdown(),
            this.populateMicrophoneDropdown()
        ]).then(() => {
            this.bindEvents(); // <-- 'this' refers to Broadcast correctly here
            setTimeout(() => {
                $('#startStream').trigger('click');
            }, 300);
        });

        if (streamVars.streamOwnerId === user.user_id) {
            Stream.showChatMessageActions();
        }

    },


    bindEvents: function () {
        const self = this;

        $('#startStream').on('click', function () {
            self.startStreaming();
        });
        $('#stopStream').on('click', function () {
            self.stopStreaming();
        });
        $('#muteAudioButton').on('click', function () {
            self.toggleMuteAudio();
        });
        $('#muteVideoButton').on('click', function () {
            self.toggleMuteVideo();
        });
        $('#cameraSelect').on('change', function () {
            self.switchCamera();
        });
        $('#microphoneSelect').on('change', function () {
            self.switchMicrophone();
        });
        $('#toggleMirrorButton').on('click', function () {
            self.toggleMirror();
        });
    },

    loadPreferredDevicesFromCookies: function () {
        const camId = getCookie('broadcaster_camera_id');
        const micId = getCookie('broadcaster_microphone_id');

        if (camId) this.currentVideoDeviceId = camId;
        if (micId) this.currentAudioDeviceId = micId;

        if(app.debug) {
            // eslint-disable-next-line no-console
            console.log('Loaded device preferences from cookies:', {
                camera: camId,
                microphone: micId
            });
        }
    },

    populateCameraDropdown: function () {
        return new Promise((resolve) => {
            navigator.mediaDevices.enumerateDevices().then(devices => {
                this.availableVideoDevices = devices.filter(device => device.kind === 'videoinput');
                let options = this.availableVideoDevices.map(device =>
                    `<option value="${device.deviceId}">${device.label || 'Camera'}</option>`
                ).join('');
                $('#cameraSelect').html(options);

                const savedCameraId = getCookie('broadcaster_camera_id');
                const matchedCamera = this.availableVideoDevices.find(dev => dev.deviceId === savedCameraId);

                if (matchedCamera) {
                    $('#cameraSelect').val(savedCameraId);
                    this.currentVideoDeviceId = savedCameraId;
                } else if (this.availableVideoDevices.length > 0) {
                    this.currentVideoDeviceId = this.availableVideoDevices[0].deviceId;
                }

                resolve();
            });
        });
    },

    populateMicrophoneDropdown: function () {
        return new Promise((resolve) => {
            navigator.mediaDevices.enumerateDevices().then(devices => {
                this.availableAudioDevices = devices.filter(device => device.kind === 'audioinput');
                let options = this.availableAudioDevices.map(device =>
                    `<option value="${device.deviceId}">${device.label || 'Microphone'}</option>`
                ).join('');
                $('#microphoneSelect').html(options);

                const savedMicrophoneId = getCookie('broadcaster_microphone_id');
                const matchedMic = this.availableAudioDevices.find(dev => dev.deviceId === savedMicrophoneId);

                if (matchedMic) {
                    $('#microphoneSelect').val(savedMicrophoneId);
                    this.currentAudioDeviceId = savedMicrophoneId;
                } else if (this.availableAudioDevices.length > 0) {
                    this.currentAudioDeviceId = this.availableAudioDevices[0].deviceId;
                }

                resolve();
            });
        });
    },

    startStreaming: function () {
        const channel = 'stream_' + stream.id;
        const identity = 'broadcaster';

        $.post(app.baseUrl + '/my/streams/livekit/token', { channel, identity })
            .done((response) => {
                const { token, wsUrl } = response;
                this.room = new LivekitClient.Room({ subscribeToSelf: false });

                this.room.connect(wsUrl, token).then(() => {
                    if(app.debug) {
                        // eslint-disable-next-line no-console
                        console.log('Connected as broadcaster');
                    }
                    return LivekitClient.createLocalTracks({
                        audio: this.currentAudioDeviceId ? { deviceId: { exact: this.currentAudioDeviceId } } : true,
                        video: this.currentVideoDeviceId ? { deviceId: { exact: this.currentVideoDeviceId } } : true
                    });
                }).then(tracks => {
                    this.localTracks = [];
                    tracks.forEach(track => {
                        if (track.kind === 'video') {
                            const videoEl = track.attach();
                            videoEl.controls = false;
                            $('#local-video').empty().append(videoEl);
                            $('#placeholder').hide();
                            this.localVideo = videoEl;
                        }
                        this.room.localParticipant.publishTrack(track);
                        this.localTracks.push(track);
                    });
                    $('#startStream').addClass('d-none');
                    $('#stopStream').removeClass('d-none');
                }).catch(err => {
                    launchToast('danger', trans('Error'), "LiveKit connection error: " + err.message);
                });
            })
            .fail(err => {
                const msg = err.responseJSON?.message || 'Failed to fetch token.';
                launchToast('danger', trans('Error'), "Error fetching token: " + msg);
            });
    },

    stopStreaming: function () {
        if (!this.room) return;
        this.localTracks.forEach(track => {
            this.room.localParticipant.unpublishTrack(track);
            track.stop();
        });
        this.room.disconnect();
        this.localTracks = [];
        $('#local-video').empty();
        $('#startStream').removeClass('d-none');
        $('#stopStream').addClass('d-none');
        $('#local-video').empty();
        $('#placeholder').show();
    },

    toggleMuteAudio: function () {
        const tracks = this.localTracks.filter(t => t.kind === 'audio');
        tracks.forEach(track => {
            track.mediaStreamTrack.enabled = !track.mediaStreamTrack.enabled;
        });

        const isEnabled = tracks[0]?.mediaStreamTrack.enabled;
        const $btn = $('#muteAudioButton');

        $btn.find('ion-icon').attr('name', isEnabled ? 'mic-outline' : 'mic-off-outline');
        $btn.attr('title', isEnabled ? 'Mute Audio' : 'Unmute Audio');

        // Optional: refresh tooltip if using Bootstrap
        if ($btn.tooltip) $btn.tooltip('dispose').tooltip();
    },

    toggleMuteVideo: function () {
        const tracks = this.localTracks.filter(t => t.kind === 'video');
        tracks.forEach(track => {
            track.mediaStreamTrack.enabled = !track.mediaStreamTrack.enabled;
        });

        const isEnabled = tracks[0]?.mediaStreamTrack.enabled;
        const $btn = $('#muteVideoButton');

        $btn.find('ion-icon').attr('name', isEnabled ? 'videocam-outline' : 'videocam-off-outline');
        $btn.attr('title', isEnabled ? 'Mute Video' : 'Unmute Video');

        if ($btn.tooltip) $btn.tooltip('dispose').tooltip();
    },


    switchCamera: function () {
        if (!this.room) return;
        const id = $('#cameraSelect').val();
        this.currentVideoDeviceId = id;

        this.localTracks = this.localTracks.filter(t => {
            if (t.kind === 'video') {
                this.room.localParticipant.unpublishTrack(t);
                t.stop();
                return false;
            }
            return true;
        });

        $('#local-video').empty();

        LivekitClient.createLocalTracks({ video: { deviceId: { exact: id } }, audio: false }).then(tracks => {
            tracks.forEach(track => {
                this.localTracks.push(track);
                const videoEl = track.attach();
                videoEl.controls = false;
                $('#local-video').append(videoEl);
                this.localVideo = videoEl;
                this.room.localParticipant.publishTrack(track);
                $('#local-video').append(videoEl);
                $('#placeholder').hide();
            });
        });
    },

    switchMicrophone: function () {
        if (!this.room) return;
        const id = $('#microphoneSelect').val();
        this.currentAudioDeviceId = id;

        this.localTracks = this.localTracks.filter(t => {
            if (t.kind === 'audio') {
                this.room.localParticipant.unpublishTrack(t);
                t.stop();
                return false;
            }
            return true;
        });

        LivekitClient.createLocalTracks({ audio: { deviceId: { exact: id } } }).then(tracks => {
            tracks.forEach(track => {
                this.room.localParticipant.publishTrack(track);
                this.localTracks.push(track);
            });
        });
    },

    toggleMirror: function () {
        if (this.localVideo) {
            $(this.localVideo).toggleClass('mirror');
        }
    },

    openCameraSettingsDialog: function (){
        let dialogModal = $('#broadcaster-camera-settings-dialog');
        dialogModal.modal('show');

    },

    saveCameraSettings: function () {
        const selectedCamera = $('#cameraSelect').val();
        const selectedMicrophone = $('#microphoneSelect').val();

        // Save to cookies (for 30 days)
        setCookie('broadcaster_camera_id', selectedCamera, 30);
        setCookie('broadcaster_microphone_id', selectedMicrophone, 30);

        // Update current values
        this.currentVideoDeviceId = selectedCamera;
        this.currentAudioDeviceId = selectedMicrophone;

        // Close the modal
        $('#broadcaster-camera-settings-dialog').modal('hide');

        if(app.debug) {
            // eslint-disable-next-line no-console
            console.log('Saved device settings:', {
                camera: selectedCamera,
                microphone: selectedMicrophone
            });
        }
    }


};

// Initialize when DOM is ready
$(document).ready(function () {
    Broadcast.init();
});

// Kind of acts up
// window.addEventListener('beforeunload', function (event) {
//     if (Broadcast.room && Broadcast.room.state === 'connected') {
//         event.preventDefault();
//         event.returnValue = 'Are you sure you want to leave?';
//     }
// });
