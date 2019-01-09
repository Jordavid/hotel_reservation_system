@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="medium-6 columns">
        <h4>Landon Hotel App {{ $data['version'] }} </h4>
        <img class="thumbnail" src="images/attractions.jpg">
        </div>
        <div class="medium-6 large-5 columns">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
        <p>By {{$last_updated}}</p>

        <h4>Landon Hotel App {{ $data['version'] }} </h4>
        <video id="video" controls>
            <source src="videos/advertisement.mp4" type="video/mp4">
            <source src="videos/advertisement.mp4" type="video/ogg">
            Your browser does not support HTML5 video.
          </video>
        </div>
        <div class="medium-6 large-5 columns">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
        <p>By {{$last_updated}}</p>
    </div>
    </div>

@endsection