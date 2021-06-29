@extends('Layout.masterlayout')
@section('content')
<div class="event" style="background-color:#F2F4F4;">
    <div class="container" >
        <div class="row" style="padding-bottom:10px;">
            <div class="col-lg-8">
                <div class="mb-3">
                @if($Events->image)
                    <?php if (file_exists("../public".$Events->image)){ ?>
                        <div class="osahan-slider-item" style="background-color:#fff;">
                            <img src="{{asset($Events->image)}}" style="height:400px;box-shadow:none !important;object-fit:contain;" class="img-fluid mx-auto shadow-sm rounded" alt="Responsive image">
                        </div>
                    <?php } else{ ?>
                        <div class="osahan-slider-item" style="background-color:#fff;">
                            <img src="{{asset('/B0eS.gif')}}" style="height:400px;box-shadow:none !important;object-fit:contain;" class="img-fluid mx-auto shadow-sm rounded" alt="Responsive image">
                        </div>
                    <?php } ?>
                @else
                    <div class="osahan-slider-item" style="background-color:#fff;">
                        <img src="{{asset('/B0eS.gif')}}" style="height:400px;box-shadow:none !important;object-fit:contain;" class="img-fluid mx-auto shadow-sm rounded" alt="Responsive image">
                    </div>
                @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-4 bg-white rounded shadow-sm" >
                    <div class="pt-0">
                    <h2 class="font-weight-bold">{{$Events->event_name}}</h2>
                    <p class="font-weight-light text-dark m-0 d-flex align-items-center">
                        @if($Events->eventType == "1")
                            Target Money : <b class="h6 text-dark m-0"> BDT {{$Events->targetMoney}} </b>
                        @elseif($Events->eventType == "2")
                            Vanue : <b class="h6 text-dark m-0"> {{$Events->venue}} </b>
                        @endif
                    </p>
                    </div>
                    
                    <div class="details">
                    <div class="pt-3">
                        <p class="font-weight-bold mb-2">Info</p>
                        <p class="text-muted small mb-0"><b>Contact: {{$Events->contact}}</b></p>
                        <p class="text-muted small mb-0"><b>Target Date: {{ date("d M, Y",strtotime($Events->targetDate))}}</b></p><br>
                        @if($Events->eventType == "1")
                        <a href="{{ URL::to('/example2/'.base64_encode($Events->id).'/'.base64_encode($Events->orgId)) }}" class="btn btn-primary">Donate Now</a>
                        @elseif($Events->eventType == "2")
                        <a href="#" class="btn btn-primary">Apply Now</a>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom:30px;">
            <div class="col-lg-8">
                <div class="mb-3">
                
                    <div class="osahan-slider-item">
                    <h5 style="text-align: justify;">{{$Events->details}}</h5>
                    </div>
                </div>
                <br>
                @if($Events->eventType == "1")
                <a style="width: 80%;" href="{{ URL::to('/example2/'.base64_encode($Events->id).'/'.base64_encode($Events->orgId)) }}" class="btn btn-primary">Donate Now</a>
                @elseif($Events->eventType == "2")
                <a href="#" style="width: 80%;" class="btn btn-primary">Apply Now</a>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <div class="pt-3">
                    @if($Events->eventType == "1")
                        <p class="font-weight-bold text-dark">Total Collect: {{$totalCollect}}</p>
                        <p class="font-weight-bold mb-2">Last Transition List</p>
                        @foreach($trnsList as $key => $list)
                            @if($list->visibleType=="2")
                            <p class="text-muted small mb-0"><b>Amount: {{$list->amount}} -> HIDE INFO </b></p>
                            @else
                            <p class="text-muted small mb-0"><b>Amount: {{$list->amount}} -> {{$list->name}} </b></p>
                            @endif
                        @endforeach
                    @elseif($Events->eventType == "2")
                        <p class="font-weight-bold text-dark">Total Apply: {{$totalVApply}}</p>
                        <p class="font-weight-bold mb-2">Last Apply List</p>
                        @foreach($volunteersList as $key => $voluntrList)
                            <p class="text-muted small mb-0"><b>Name: {{$voluntrList->user_name}} </b></p>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection