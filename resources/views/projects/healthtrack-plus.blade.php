@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Header Section -->
        <header class="text-center">
            <h1 class="display-4">HealthTrack Plus</h1>
            <p class="lead">Mobile App for Healthcare</p>
        </header>

        <!-- Project Image -->
        <img src="{{ url("img/healthtrack_plus_image.jpg") }}" alt="HealthTrack Plus" class="img-fluid featured-img mt-4">

        <!-- Project Details -->
        <section class="card mt-4">
            <div class="card-body">
                <h2 class="card-title h4">Key Features</h2>
                <ul>
                    <li>Health metrics tracking</li>
                    <li>Medication remiders</li>
                    <li>Doctor appointment scheduling</li>
                    <li>Integration with wearable devices</li>
                </ul>
                <p>
                    HealthTrack Plus is your personal health companion. Seamlessly track your health metrics, receive timely medication reminders, schedule doctor appointments, and integrate your wearable devices for a holistic approach to wellness.
                </p>
            </div>

        </section>
    </div>
</div>
@endsection
