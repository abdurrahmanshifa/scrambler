@extends('layouts.index')
@section('content')
<main>
    <!-- Hero Area Start-->
    <div class="slider-area">
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <h1>Word Scrambler by Abdurrahman Shifa </h1>
                            <p>Word scrambler is a word guessing game. User will be given a scrambled word by the application, and then he/she will try to guess the correct word. Score will be given for every correct answer, and will be deducted for every wrong answer.</p>
                        </div>
                        <a href="{{ route('play',['id' => '5']) }}" class="btn" style="width: 100%;">
                        <i class="fas fa-play-circle"></i> Play
                        </a>
                        <div class="single-domain pt-30 pb-30">
                            <ul>
                                <li>
                                    <a href="{{ route('play',['id' => '5']) }}">
                                        <span>5</span> <p>Letter Words</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('play',['id' => '6']) }}">
                                        <span>6</span> <p>Letter Words</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('play',['id' => '7']) }}">
                                        <span>7</span> <p>Letter Words</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('play',['id' => '8']) }}">
                                        <span>8</span> <p>Letter Words</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('play',['id' => '9']) }}">
                                        <span>9</span> <p>Letter Words</p>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- Domain List  End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero Area End-->
    <!--? Pricing Card Start -->
    <section class="load-balancing  pt-top section-bg2" data-background="{{ asset('img/gallery/section_bg01.png') }}" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-10 ">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-90">
                        <h2>Word Scramble Game</h2>
                        <p>Word Scramble Finder is your handy tool for successfully unscramble word puzzles. Once you've entered the available letters, Word Scramble finder will quickly reveal a variety of words that will fit into the spaces on offer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Instant Activation</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Fully Redundant</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Powerful Automation</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Powerful Automation</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>High Performance</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Dedicated Support</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End 2-->
</main>
@endsection