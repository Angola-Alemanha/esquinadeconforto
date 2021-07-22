@extends('template.app')
@section('title', 'Home - Brand')
@section('home', 'current')
@section('content')
    <section class="portfolio-block block-intro">
        <div class="container">
            <div class="about-me">
                <p>Hello! I am <strong>John Smith</strong>. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque vero possimus, hic a amet vitae corporis neque veritatis minima molestiae, id debitis, dolor fugiat beatae soluta vel accusantium voluptates ad.</p>
            </div>
        </div>
        <section class="portfolio-block mobile-app">
            <div class="container align-items-center">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-5 text">
                        <h3>Mobile App</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui. Quisque ac dolor cursus, volutpat nisl vel, porttitor eros.</p>
                    </div>
                    <div class="col"><img src="{{ asset('assets/img/jesus.jpg') }}"></div>
                </div>
            </div>
        </section>
    </section>
    <section class="portfolio-block skills"></section>
@endsection
