@extends('layouts.app')

@section('app-content')

        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</h2>
                    </div>

                    <div class="row g-lg-5">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </section><!-- End About Section -->
        </main><!-- End #main -->

@endsection