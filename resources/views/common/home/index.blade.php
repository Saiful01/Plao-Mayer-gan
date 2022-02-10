@extends('layouts.common')

@section('content')
    <!-- ts intro start -->

    <section class="ts-intro-item section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="intro-left-content">
                        <h2 class="column-title">
                            প্রতিযোগিতায় অংশ নিন
                        </h2>
                        <p>
                            সেলফি প্রতিযোগিতা এবং পিকচার প্রতিযোগিতায় অংশ নিতে ডানপাশের পছন্দের বাটনে ক্লিক করুন
                        </p>

                    </div>
                </div><!-- col end-->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <div class="single-intro-text mb-10">
                                <a href="/selfie-contest">
                                    <img src="/images/vision_new.jpg" class="img-thumbnail" style=" width: 100%"/>
                                    <h3 class="ts-title text-center">সেলফি কন্টেস্ট</h3>
                                </a>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                            <div class="single-intro-text mb-10">
                                <a href="/photo-contest">
                                    <img src="/images/1.png" class="img-thumbnail" style="width: 100%"/>
                                    <h3 class="ts-title text-center">পিকচার কুইজ </h3>
                                </a>
                            </div><!-- single intro text end-->

                        </div><!-- col end-->

                    </div>
                </div><!-- col end-->

            </div><!-- row end-->
        </div><!-- container end-->
    </section>
    <!-- ts intro end-->
@endsection
