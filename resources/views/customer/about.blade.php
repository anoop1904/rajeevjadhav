@extends('front_master')
@section('title', 'Rajeev Jadhav | Homepage')
@section('bc', 'About Us')
@section('link', '')
@section('content')
@include('customer.include.breadcrumb')
<section class="about-Container-con mt-5">
    <div class="container">
        <div class="section-heading wow fadeInUp">
            <h2>Meet Your Manifestation Coach</h2>
        </div>

        <div class="about-section">
            <div class="row wow fadeInUp">
                <div class="col-lg-5">
                    <img src="{{asset('public/front/images/Rajiv-Aurora.jpg')}}" class="img-fluid"/>
                </div>
                <div class="col-lg-7">
                    <p>Rajiv Jadhav is an award-winning brand-consumer interaction and engagement strategist who has spent the majority of his career as a senior executive helping Fortune500 companies and brands achieve their customer acquisition goals by leveraging pathbreaking innovation and bold experimentation.</p>
                    <p>Rajiv currently serves on the Board of Advisors of several organizations in the Americas, Europe and Africa, including Government entities like The Republic of Malawi (Africa), The United National Congress (Trinidad & Tobago), and, Nassau County Government (Long Island, New York). Rajiv also had the distinct honor of being a keynote speaker at the United Nations – Feb 14, 2020.</p>

                    <ul class="list-unstyled mb-3">
                        <li>If you have a business idea but feel overwhelmed on how to start – you want to speak to Rajiv.</li>
                        <li>If you want to grow your business – you want to speak to Rajiv.</li>
                        <li>If you want to land your dream job straight out of school or from your existing job – you want to speak to Rajiv.</li>
                        <li>If you want to become an Influencer on LinkedIn – you want to speak to Rajiv.</li>
                    </ul>
                    <div class="text-right"><a href="{{url('/contact')}}" class="btn btn-primary">Work With Me</a></div>
                </div>
            </div>
        </div>

        <div class="about-video mt-5 shadow-sm">
            <iframe class="elementor-video-iframe" allowfullscreen="" title="youtube Video Player" src="https://www.youtube.com/embed/KyU8L9Y195k?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
        </div>
        

    </div>
</section>




<section class="fearturedin wow fadeInUp">
    <div class="container">
        <h4 class="text-center">Featured In</h4>
       <div class="featured-slider owl-carousel">
        <div class="item text-center">
            <div class="featured-box">
                <img src="{{asset('public/front/images/joyridesmall.png')}}"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="{{asset('public/front/images/linewstransSmall.png')}}"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="{{asset('public/front/images/toasttvtransamLL.png')}}"/>
            </div>
        </div>
        <div class="item text-center">
            <div class="featured-box">
                <img src="{{asset('public/front/images/wymtranssmall.png')}}"/>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection