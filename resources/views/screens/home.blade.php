@extends('layouts.layout')

@section('title')
    Home
@endsection
@section('contents')

    <!-- Hero Section -->
    <section id="hero" class="hero  dark-background">

        <img src="{{asset('assets/img/profile_hero_bg.JPG')}}" alt="" data-aos="fade-in" class="img-fluid">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h2>ABHIJITH SP</h2>
            <p>I'm a <span class="typed"
                           data-typed-items="Flutter Developer,Laravel Developer,FullStack Developer"></span><span
                    class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                    class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
        </div>

    </section><!-- /Hero Section -->

@endsection
