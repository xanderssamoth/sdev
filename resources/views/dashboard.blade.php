@extends('layouts.app')

@section('app-content')

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center">
            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                <h1>Admin SDEV</h1>
                <p>Gestion des <span class="typed" data-typed-items="messages, projets, membres de l'équipe"></span></p>
            </div>
        </section><!-- End Hero -->

        <main id="main" class="ms-0">
            <!-- ======= Message Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Messages récents</h2>
                    </div>

                    <div class="row g-lg-5">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </section><!-- End Message Section -->

            <!-- ======= Project Section ======= -->
            <section id="about" class="about bg-light">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Projets récents</h2>
                    </div>

                    <div class="row g-lg-5">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </section><!-- End Project Section -->

            <!-- ======= Team Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Membres récents</h2>
                    </div>

                    <div class="row g-lg-5">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </section><!-- End Team Section -->
        </main><!-- End #main -->

@endsection