@extends('layouts.app')

@section('content')
    <!-- # intro
            ================================================== -->
    <section id="intro" class="s-intro target-section">

        <div class="row s-intro__content width-sixteen-col">
            <div class="column lg-12 s-intro__content-inner grid-block grid-16">

                <div class="s-intro__content-text">

                    <div class="s-intro__content-pretitle text-pretitle">Hello</div>
                    <h1 class="s-intro__content-title">
                        I'm {{ $homeContents['name'] }} <br>
                        a {{ $homeContents['position'] }} <br>
                    </h1>

                    <div class="s-intro__content-btns">
                        <a class="smoothscroll btn" href="#about">More About Me</a>
                        <a class="smoothscroll btn btn--stroke" href="#footer">Get In Touch</a>
                    </div> <!-- s-intro__content-btns -->

                </div> <!-- s-intro__content-text -->

            </div> <!-- s-intro__content-inner -->
        </div> <!-- s-intro__content -->

        <ul class="s-intro__social social-list">
            <li>
                <a href="https://www.facebook.com/angelgrace.peralta.96">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                        <path
                            d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                        </path>
                    </svg>
                    <span class="u-screen-reader-text">Facebook</span>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/gracious.ly_25">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                        <path
                            d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                        </path>
                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                        <path
                            d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                        </path>
                    </svg>
                    <span class="u-screen-reader-text">Instagram</span>
                </a>
            </li>
            <li>
                <a href="https://github.com/agracep25" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                        viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0C5.371 0 0 5.371 0 12c0 5.303 
                        3.438 9.8 8.205 11.387.6.111.82-.261.82-.577 
                        0-.285-.011-1.04-.017-2.04-3.338.726-4.042-1.61-4.042-1.61
                        -.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729
                        1.205.084 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.492.998
                        .108-.775.419-1.305.762-1.605-2.665-.303-5.466-1.332-5.466-5.931
                        0-1.31.469-2.381 1.236-3.221-.124-.303-.536-1.521.117-3.176
                        0 0 1.008-.322 3.301 1.23a11.52 11.52 0 0 1 3.003-.404
                        c1.018.005 2.044.138 3.003.404 2.291-1.552 
                        3.297-1.23 3.297-1.23.655 1.655.243 2.873.119 
                        3.176.77.84 1.236 1.911 1.236 3.221 
                        0 4.61-2.807 5.625-5.479 5.921.43.372.823 1.102.823 2.222
                        0 1.604-.015 2.896-.015 3.286 0 .319.216.694.825.576C20.565 21.796 
                        24 17.299 24 12c0-6.629-5.371-12-12-12z"/>
                    </svg>
                    <span class="u-screen-reader-text">GitHub</span>
                </a>
            </li>
        </ul> <!-- end s-intro__social -->

        <div class="s-intro__content-media">
            <img src="{{ asset('images/intro-bg.jpg') }}" srcset="images/intro-bg.jpg 1x, images/intro-bg.jpg 2x"
                alt="">
        </div> <!-- s-intro__content-media -->

        <div class="s-intro__scroll-down">
            <a href="#about" class="smoothscroll">
                <div class="scroll-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path
                            d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
                        </path>
                    </svg>
                </div>
                <span class="scroll-text u-screen-reader-text">Scroll Down</span>
            </a>
        </div> <!-- s-intro__scroll-down -->

    </section> <!-- end s-intro -->


    <!-- # about
            ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row s-about__content">
            <div class="column xl-12">

                <div class="section-header" data-num="01">
                    <h2 class="text-display-title">About Me.</h2>
                </div> <!-- end section-header -->

                <p class="attention-getter">
                    {!! $homeContents['about'] !!}
                </p>

                <div class="grid-list-items s-about__blocks">

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Experiences</h4>
                        <ul class="s-about__list">
                            @foreach ($workExperiences as $experience)
                                <li>
                                    {{ $experience['company'] }}
                                    <span>{{ $experience['position'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div> <!--end s-about__block -->

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Certificates</h4>

                        <ul class="s-about__list">
                            @foreach ($awards as $award)
                                <li>
                                    {{ $award['name'] }}
                                    <span>{{ $award['year'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div> <!--end s-about__block -->

                    <div class="grid-list-items__item s-about__block">
                        <h4 class="s-about__block-title">Achievements</h4>

                        <ul class="s-about__list">
                            @foreach ($skills as $skill)
                                <li>
                                    {{ $skill['name'] }}
                                    <span>{{ $skill['level'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div> <!--end s-about__block -->

                </div> <!-- grid-list-items -->

            </div> <!--end column -->
        </div> <!--end s-about__content -->

    </section> <!-- end s-about -->



    <!-- # works
            ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row">
            <div class="column xl-12">
                <div class="section-header" data-num="02">
                    <h2 class="text-display-title">Selected Works.</h2>
                </div> <!-- end section-header -->
            </div>
        </div>

        <div class="row folio-entries">

            @foreach ($projects as $key => $project)
                <div class="column entry">
                    <a href="{{ asset('images/folio/gallery/' . $project['image']) }}" class="entry__link glightbox"
                        data-glightbox="title: {{ $project['title'] }}; description: .entry__desc-{{ $key }}">
                        <div class="entry__thumb">
                            <img src="{{ asset('images/folio/' . $project['image']) }}" alt="">
                        </div>
                        <div class="entry__info">
                            <h4 class="entry__title">{{ $project['title'] }}</h4>
                            <div class="entry__cat">{{ $project['description'] }}</div>
                        </div>
                    </a>

                    <div class="glightbox-desc entry__desc-{{ $key }}">
                        <p>
                            {{ $project['details'] }}
                            <a href="{{ route('project.details', $key) }}">Project Link</a>.
                        </p>
                    </div>
                </div> <!-- entry -->
            @endforeach

        </div> <!-- folio entries -->


        <div class="row s-testimonials">
            <div class="column xl-12">

                <h3 class="s-testimonials__header">Events</h3>

                <div class="swiper-container s-testimonials__slider">

                    <div class="swiper-wrapper">

                        @foreach ($testimonials as $testimonial)
                            <div class="s-testimonials__slide swiper-slide">
                                <div>
                                    <img src="{{ asset('images/avatars/' . $testimonial['image']) }}">
                                    @if(!empty($testimonial['title']))
                                        <h6 class="s-testimonials__title" style="text-align: center; margin-top: 8px;">{{ $testimonial['title'] }}</h6>
                                    @endif
                                </div>
                            </div> <!-- end s-testimonials__slide -->
                        @endforeach

                    </div> <!-- end swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                </div> <!-- end swiper-container -->

            </div> <!-- end column -->
        </div> <!-- end s-testimonials -->

    </section> <!-- end s-works -->


    <!-- # numbers
            ================================================== -->
    <section id="numbers" class="s-numbers">
    <h3 class="s-testimonials__header">Programming language Skills</h3>
        
        <div style="display: flex; justify-content: center; gap: 90px; flex-wrap: wrap; text-align: center;">
            <!-- C++ -->
            <div>
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" 
                    alt="C++ Logo" width="100" height="100">
                <h5>C++</h5>
            </div>

            <!-- C -->
            <div>
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg" 
                    alt="C Logo" width="100" height="100">
                <h5>C</h5>
            </div>

            <!-- Python -->
            <div>
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" 
                    alt="Python Logo" width="100" height="100">
                <h5>Python</h5>
            </div>

            <!-- Java -->
            <div>
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" 
                    alt="Java Logo" width="100" height="100">
                <h5>Java</h5>
            </div>

            <!-- JavaScript -->
            <div>
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" 
                    alt="JavaScript Logo" width="100" height="100">
                <h5>JavaScript</h5>
            </div>

            <!-- PHP -->
            <div>
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" 
                    alt="PHP Logo" width="100" height="100">
                <h5>PHP</h5>
            </div>
        </div>

            <!--<div class="column counter-items__item">
                <h5>Happy Customers</h5>
                <p>
                    My customers are my biggest advocates. I have served a wide range of customers from various
                    industries and helped them achieve their goals.
                </p>
            </div>  end counter-items__item 

            <div class="column counter-items__item">
                <div class="num">
                    {{ $homeContents['projects_completed'] }}
                    <span>+</span>
                </div>
                <h5>Projects Completed</h5>
                <p>
                    I have completed a wide range of projects. I have helped many clients achieve their goals.
                </p>
            </div> 

            <div class="column counter-items__item">
                <div class="num">
                    {{ $homeContents['lines_of_code'] }}
                    <span>+</span>
                </div>
                <h5>Lines of Code</h5>
                <p>
                    I have written a lot of lines of code. I have built a wide range of websites and web
                    applications. I have also built a few mobile apps and desktop applications.
                </p>
            </div> 

            <div class="column counter-items__item">
                <div class="num">
                    {{ $homeContents['positive_feedbacks'] }}
                    <span>+</span>
                </div>
                <h5>Positive Feedback</h5>
                <p>
                    I have received a lot of positive feedback from my clients. Maximum of them are always satisfied
                    with my work.
                </p>
            </div> end counter-items__item -->

         <!-- end counter-items -->

    </section> <!-- end s-numbers -->
@endsection
