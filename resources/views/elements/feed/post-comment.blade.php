<div class="post-comment d-flex flex-row mb-3" data-commentID="{{$comment->id}}">

    <div class="">
        <img class="rounded-circle" src="{{$comment->author->avatar}}">
    </div>

    <div class="pl-3 w-100 post-comment-content">
        <div class="d-flex flex-row justify-content-between">
            <div class="text-bold d-flex align-items-center"><a href="{{route('profile',['username'=>$comment->author->username])}}" class="text-dark-r">{{$comment->author->username}}</a>
                @if($comment->author->email_verified_at && $comment->author->birthdate && ($comment->author->verification && $comment->author->verification->status == 'verified'))
                    <span data-toggle="tooltip" data-placement="top" title="{{__('Verified user')}}">
                        @include('elements.icon',['icon'=>'checkmark-circle-outline','centered'=>true,'classes'=>'ml-1 text-primary'])
                    </span>
                @endif
            </div>
            <div class="position-absolute separator">
                <div class="d-flex">

                    @if(Auth::user()->id == $comment->author->id)
                        <span class="ml-1 h-pill h-pill-primary rounded react-button" data-toggle="tooltip" data-placement="top" title="{{__("Edit")}}" onclick="Post.showEditCommentInterface({{$comment->post->id}},{{$comment->id}})">
                             @include('elements.icon',['icon'=>'create-outline'])
                        </span>
                        <span class="ml-1 h-pill h-pill-primary rounded react-button" data-toggle="tooltip" data-placement="top" title="{{__("Delete")}}" onclick="Post.showDeleteCommentDialog({{$comment->post->id}},{{$comment->id}})">
                             @include('elements.icon',['icon'=>'trash-outline'])
                        </span>
                    @else
                        <span class="h-pill h-pill-primary rounded react-button {{PostsHelper::didUserReact($comment->reactions) ? 'active' : ''}}" data-toggle="tooltip" data-placement="top" title="{{__("Like")}}" onclick="Post.reactTo('comment',{{$comment->id}})">
                         @include('elements.icon',['icon'=>'heart-outline'])
                    </span>
                    @endif
                </div>

            </div>
        </div>
        <div>
            <div class="">
                <div class="text-break comment-content">{{$comment->message}}</div>
            </div>
            <div class="d-flex text-muted">
                <div class="d-flex align-items-center">
                    @if($comment->updated_at->notEqualTo($comment->created_at))
                    <div data-toggle="tooltip" data-placement="bottom" title="{{__("Edited at") }} {{$comment->updated_at->format('g:i A')}}">
                        {{$comment->created_at->format('g:i A')}}
                    </div>
                    @else
                        {{$comment->created_at->format('g:i A')}}
                    @endif
                </div>
                <div class="ml-2">
                    <span class="comment-reactions-label-count">{{count($comment->reactions)}}</span>
                    <span class="comment-reactions-label">{{trans_choice('likes',count($comment->reactions))}}</span>
                </div>
                <div class="ml-2"><a href="javascript:void(0)" onclick="Post.addReplyUser('{{$comment->author->username}}')" class="text-muted">{{__('Reply')}}</a></div>
            </div>
        </div>
    </div>

    <div class="pl-3 w-100 post-comment-edit d-none">
        <div class="d-flex flex-row justify-content-between">
            <div class="w-100 pr-2">
                <div class="edit-post-comment-area">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="input-group w-100">
                            <textarea name="message" class="form-control comment-textarea comment-text edit-comment-textarea" placeholder="{{__('Write a message..')}}"  onkeyup="textAreaAdjust(this)">{{$comment->message}}</textarea>
                            <span class="invalid-feedback pl-2 text-bold" role="alert"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="d-flex mt-2">
                    <span class="ml-1 h-pill h-pill-primary rounded react-button save-comment-edit-button" data-toggle="tooltip" data-placement="top" title="{{__("Save")}}" onclick="Post.saveEditedComment({{$comment->post->id}},{{$comment->id}})">
                         @include('elements.icon',['icon'=>'checkmark-outline'])
                    </span>
                    <span class="ml-1 h-pill h-pill-primary rounded react-button" data-toggle="tooltip" data-placement="top" title="{{__("Cancel")}}" onclick="Post.cancelEditCommentInterface()">
                         @include('elements.icon',['icon'=>'close-outline'])
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>
