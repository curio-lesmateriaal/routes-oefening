@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Header Section -->
        <header class="text-center">
            <h1 class="display-4">BizConnect CRM</h1>
            <p class="lead">CRM System for Small Businesses</p>
        </header>

        <!-- Project Image -->
        <img src="img/bizconnect_crm_image.jpg" alt="BizConnect CRM" class="img-fluid featured-img mt-4">

        <!-- Project Details -->
        <section class="card mt-4">
            <div class="card-body">
                <h2 class="card-title h4">Key Features</h2>
                <ul>
                    <li>Customer contact management</li>
                    <li>Lead tracking and conversion</li>
                    <li>Sales pipeline visualisation</li>
                    <li>Marketing campaign automation</li>
                </ul>
                <p>
                    BizConnect CRM is the ideal tool for small businesses looking to boost customer relationships. Manage contacts, track leads, visualize your sales pipeline, and automate marketing campaigns, all in one intuitive system.
                </p>
            </div>

        </section>
    </div>
</div>
@endsection
