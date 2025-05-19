@if($stream->streamTips)
    <div class="stream-tips px-3 pt-3">
        <div class="px-3">
            <div class="row">
                @foreach($stream->streamTips->reverse()->slice(0,3) as $tip)
                    <div class="col-4 px-1">
                        <div class="bg-gradient-primary text-white py-2 my-1 px-3 rounded">
                            <div class="d-flex justify-content-between">
                                <div class="align-items-center d-none d-md-flex">
                                    <div>
                                        <div class="font-weight-bold"><span>@</span>{{$tip->sender->username}} </div>
                                        <div class="small">{{__("has tipped")}}</div>
                                    </div>

                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="h4 font-weight-bolder mb-0">
                                        {{\App\Providers\SettingsServiceProvider::getWebsiteFormattedAmount($tip->decodedTaxes ? $tip->decodedTaxes->subtotal : $tip->amount)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
