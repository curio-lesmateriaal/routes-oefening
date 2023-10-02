@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Header Section -->
        <header class="text-center">
            <h1 class="display-4">Wealthguard PRO</h1>
            <p class="lead">Financial Portfolio Tracker</p>
        </header>

        <!-- Project Image -->
        <img src="{{ url("img/wealthguard_pro_image.jpg") }}" alt="WealthGuard Pro" class="img-fluid featured-img mt-4">

        <!-- Project Details -->
        <section class="card mt-4">
            <div class="card-body">
                <h2 class="card-title h4">Key Features</h2>
                <ul>
                    <li>Real-time portfolio tracking</li>
                    <li>Investment recommendations</li>
                    <li>Interactive financial charts</li>
                    <li>Integration with financial data sources</li>
                </ul>
            </div>
            <p>
                WealthGuard Pro empowers you to take control of your finances. Track your investment portfolio in real-time, receive personalized investment recommendations, and gain insights with interactive financial charts.
            </p>
        </section>
    </div>
</div>
@endsection
