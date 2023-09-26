@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Header Section -->
        <header class="text-center">
            <h1 class="display-4">StockMasters</h1>
            <p class="lead">Inventory Management System</p>
        </header>

        <!-- Project Image -->
        <img src="img/stockmasters_image.jpg" alt="StockMasters" class="img-fluid featured-img mt-4">

        <!-- Project Details -->
        <section class="card mt-4">
            <div class="card-body">
                <h2 class="card-title h4">Key Features</h2>
                <ul>
                    <li>Stock level trading</li>
                    <li>Supplier management</li>
                    <li>Sales and purchase order processing</li>
                    <li>Reporting and analytics for inventory optimization</li>
                </ul>
            </div>
            <p>
                StockMasters streamlines your inventory management process. Keep a close eye on stock levels, manage suppliers, process sales and purchase orders effortlessly, and optimize your inventory with insightful analytics.
            </p>
        </section>
    </div>
</div>
@endsection
