@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Header Section -->
        <header class="text-center">
            <h1 class="display-4">EduPro LearnHub</h1>
            <p class="lead">E-Learning Platform</p>
        </header>

        <!-- Project Image -->
        <img src="img/edupro_learnhub_image.jpg" alt="EduPro LearnHub" class="img-fluid featured-img mt-4">

        <!-- Project Details -->
        <section class="card mt-4">
            <div class="card-body">
                <h2 class="card-title h4">Key Features</h2>
                <ul>
                    <li>Course cration and management</li>
                    <li>Student enrollment and progress tracking</li>
                    <li>Interactive quizzes and assignments</li>
                    <li>Communication tools for instructors and students</li>
                </ul>
                <p>
                    EduPro LearnHub is your gateway to online education. Create and manage courses, enroll students, track progress with interactive quizzes and assignments, and foster collaboration with communication tools.
                </p>
            </div>

        </section>
    </div>
</div>
@endsection
