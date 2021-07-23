@extends('front_master')

@section('title', 'Rajeev Jadhav | Homepage')

@section('content')



<div class="container">

    <div class="row">

        <div class="col-12">       
            @if (session()->get('service_type') == 1)  
            <div class="calendly-inline-widget" data-url="https://calendly.com/yourfutureisbright" style="min-width:320px;height:630px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            @else
            <iframe id="ycbmiframeresults-coaching" style="width: 100%; height: 1000px; border: 0px; background-color: transparent;" src="https://results-coaching.youcanbook.me/?noframe=true&amp;skipHeaderFooter=true" frameborder="0"></iframe>
            @endif
            @php
                // session()->forget('service_type');
            @endphp
        </div>

    </div>

</div>



@endsection