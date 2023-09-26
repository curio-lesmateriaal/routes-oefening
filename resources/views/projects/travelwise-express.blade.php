@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Header Section -->
        <header class="text-center">
            <h1 class="display-4">TravelWise Express</h1>
            <p class="lead">Travel Booking Portal</p>
        </header>

        <!-- Project Image -->
        <img src="img/travelwise_express_image.jpg" alt="TravelWise Express" class="img-fluid featured-img mt-4">

        <!-- Project Details -->
        <section class="card mt-4">
            <div class="card-body">
                <h2 class="card-title h4">Key Features</h2>
                <ul>
                    <li>Flight, hotel, and rental car search and booking</li>
                    <li>Travel itinerary planning</li>
                    <li>Real-time travel alerts and updates</li>
                    <li>User reviews and recommendations</li>
                </ul>
            </div>
            <p>
                TravelWise Express makes travel planning a breeze. Search and book flights, hotels, and rental cars with ease, create detailed travel itineraries, stay informed with real-time travel updates, and discover user-rated recommendations.
            </p>
        </section>
    </div>
</div>
@endsection
