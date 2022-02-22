@extends('layouts.common')

@section('content')
    <style>
        .panel-group p {
            color: black;
        }

        .list-style {
            list-style-type: square;
        }

        .ts-intro-item {
            padding: 0px 0 0px;
        }

        .ts-contact {
            padding: 5px !important;

        }

        .page-item.active .page-link {
            z-index: 2;
            color: #fff;
            background-color: #055CA7;
            border-color: #055CA7;
        }
    </style>

    <!-- ts intro start -->

    <section class="ts-intro-item "
             style="background-color: #A2D9ED; background-image: linear-gradient(to right, #A2D9ED , #F6F6F6);">
        <div class="container">
            <div class="row">
                <div class="desktop col-lg-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="intro-left-content">
                        <img src="/images/hero_image_desktop.jpg" style=" width: 100%"/>

                    </div>
                </div><!-- col end-->
                <div class=" mobile col-lg-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="intro-left-content">
                        <img src="/images/hero_image_mobile.jpg" style=" width: 100%"/>

                    </div>
                </div><!-- col end-->


            </div><!-- row end-->
        </div><!-- container end-->
    </section>
    <!-- ts intro end-->

    @if(\Carbon\Carbon::now() > "2022-02-22 23:59:59")
        <section>
            <div class="container">
                <h2 class="section-title text-center">
                    বিশেষ নোটিশ
                </h2>
                <div class="panel-group faq-item">
                    <p>এসিআই পিউর সুজি ও প্রথম আলোর বিশেষ আয়োজন "মায়ের ভাষায় ঘুমপাড়ানি গান"-এ অংশগ্রহণের জন্য সকলকে ধন্যবাদ।
                        ২৮ ফেব্রুয়ারি ২০২২ বিজয়ী ঘোষণা করা হবে। বিজয়ী জানতে চোখ রাখুন ghumparani.com এবং প্রথম আলোর ফেসবুক
                        পেজে।</p>
                </div>

            </div>


        </section>
    @else
        <section class="ts-contact-form desktop " id="apply">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="section-title text-center">
                            অংশগ্রহণের নিয়মাবলী
                        </h2>
                        <div class="panel-group faq-item">
                            <p>ঘুমপাড়ানি ছড়া বা গান আমাদের বাংলা ভাষার ঐতিহ্য। এখন হয়তো শিশুদের মুঠোফোনে অন্য ভাষার গান
                                শুনিয়ে ঘুম পাড়াই, যেটা আমাদের এই ঐতিহ্যকে হুমকির মুখে ফেলছে। তাই আসুন, বহুকাল ধরে চলে
                                আসা
                                আমাদের এই ঘুমপাড়ানি গানের ঐতিহ্য বাঁচিয়ে রাখি।</p>

                            <p>অংশগ্রহণের নিয়মাবলী—</p>

                            <div class="panel faq-list panel-default">
                                <ul class="list-style">
                                    <li class="line"> আপনার সন্তানকে আপনি যে বাংলা গান বা ছড়া শুনিয়ে ঘুম
                                        পাড়ান, সেই মুহূর্তের ভিডিও পাঠান।
                                        ভিডিও আপনার ফেসবুক প্রোফাইলে পাবলিক করে <span
                                            class="text-info">#GhumParaniGaan</span> ও
                                        <span class="text-info">#ACIPure_Suji</span>
                                        হ্যাশট্যাগগুলো দিয়ে পাবলিশ করুন। ভিডিও পাবলিশের পর ভিডিও পোস্টের লিংকটি নিবন্ধন
                                        ফর্মে নাম ও ফোন নম্বরসহ জমা দিতে হবে।
                                    </li>
                                    <li class="line"> আপনি যখন ছোট ছিলেন, আপনাকে যে গান বা ছড়া শুনিয়ে ঘুম
                                        পাড়ানো হতো, সেই স্মৃতিও লিখে
                                        <span class="text-info">#GhumParaniGaan</span> ও <span class="text-info">#ACIPure_Suji</span>
                                        হ্যাশট্যাগগুলো দিয়ে নাম ও ফোন নম্বরসহ
                                        জমা দিতে হবে।
                                    </li>
                                    <li> অংশগ্রহণকারীদের মধ্য থেকে লটারির মাধ্যমে নির্বাচিত ১০
                                        জন বিজয়ীর জন্য থাকবে আকর্ষণীয়
                                        উপহার।
                                    </li>
                                    <li> লেখা ও ভিডিও পাঠানোর শেষ সময় ২২ ফেব্রুয়ারি ২০২২।</li>
                                    <li> অংশগ্রহণকারীদের সংগৃহীত তথ্য প্রথম আলো ও এসিআই
                                        যোগাযোগের জন্য ব্যবহার করতে পারবে।
                                    </li>
                                    <li> এই আয়োজনসংক্রান্ত নিয়মাবলি প্রথম আলো সংরক্ষণ করে। সব
                                        ক্ষেত্রে প্রথম আলোর সিদ্ধান্তই
                                        চূড়ান্ত।
                                    </li>
                                </ul>


                            </div>


                        </div><!-- panel-group -->
                    </div><!-- col end-->
                    <div class="col-lg-6 mx-auto">
                        <h2 class="section-title text-center">

                            আপনার ভিডিও বা লেখা পাঠান
                        </h2>
                        <div class="col-lg-12 mx-auto">

                            <form class="form" action="/applicant/submit" method="POST">
                                @csrf


                                <div class="contestant-info" id="contestant-info">
                                    <div class="form-group">
                                        <input class="form-control form-control-name" placeholder="নাম" name="name"
                                               id="f-name" type="text" required="">

                                    </div>

                                    <div class="form-group">
                                        <input class="form-control form-control-phone" placeholder="ফোন নাম্বার "
                                               name="phone" id="phone" type="phone" required="">
                                    </div>
                                    <div class="check">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="flexRadioDefault"
                                                               id="radio1" onclick="yesnoCheck()" checked>
                                                        <label class="form-check-labels" for="flexRadioDefault1">
                                                            ফেসবুক ভিডিও লিংক
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="flexRadioDefault"
                                                               id="radio2" onclick="yesnoCheck()">
                                                        <label class="form-check-labels" for="flexRadioDefault2">
                                                            স্মৃতিকথা
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-phone" placeholder="ফেসবুক ভিডিও লিংক"
                                               name="fb_link" id="fb_link_input" type="text">
                                    </div>
                                    <div class="form-group">
                                <textarea rows="10" class="form-control form-control-phone"
                                          placeholder="স্মৃতিকথা........ "
                                          name="status" id="msg_input" type="text"></textarea>
                                    </div>


                                </div>

                                <button type="submit" class="btn btn-primary btn-block">জমা দিন</button>

                            </form>
                        </div>
                    </div><!-- col end-->
                </div>

            </div>

        </section>
        <section class="ts-contact-form mobile" id="apply">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <h2 class="section-title text-center">

                            আপনার ভিডিও বা লেখা পাঠান
                        </h2>
                        <div class="col-lg-12 mx-auto">

                            <form class="form" action="/applicant/submit" method="POST">
                                @csrf


                                <div class="contestant-info" id="contestant-info">
                                    <div class="form-group">
                                        <input class="form-control form-control-name" placeholder="নাম" name="name"
                                               id="f-name" type="text" required="">

                                    </div>

                                    <div class="form-group">
                                        <input class="form-control form-control-phone" placeholder="ফোন নাম্বার "
                                               name="phone" id="phone" type="phone" required="">
                                    </div>
                                    <div class="check">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="flexRadioDefault"
                                                               id="radio1" onclick="yesnoCheck()" checked>
                                                        <label class="form-check-labels" for="flexRadioDefault1">
                                                            ফেসবুক ভিডিও লিংক
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="flexRadioDefault"
                                                               id="radio2" onclick="yesnoCheck()">
                                                        <label class="form-check-labels" for="flexRadioDefault2">
                                                            স্মৃতিকথা
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-phone" placeholder="ফেসবুক ভিডিও লিংক"
                                               name="fb_link" id="fb_link_input" type="text">
                                    </div>
                                    <div class="form-group">
                                <textarea rows="10" class="form-control form-control-phone"
                                          placeholder="স্মৃতিকথা........ "
                                          name="status" id="msg_input" type="text"></textarea>
                                    </div>


                                </div>

                                <button type="submit" class="btn btn-primary btn-block">জমা দিন</button>

                            </form>
                        </div>
                    </div><!-- col end-->
                    <div class="col-lg-6">
                        <h2 class="section-title text-center">
                            অংশগ্রহণের নিয়মাবলী
                        </h2>
                        <div class="panel-group faq-item">
                            <p>ঘুমপাড়ানি ছড়া বা গান আমাদের বাংলা ভাষার ঐতিহ্য। এখন হয়তো শিশুদের মুঠোফোনে অন্য ভাষার গান
                                শুনিয়ে ঘুম পাড়াই, যেটা আমাদের এই ঐতিহ্যকে হুমকির মুখে ফেলছে। তাই আসুন, বহুকাল ধরে চলে
                                আসা
                                আমাদের এই ঘুমপাড়ানি গানের ঐতিহ্য বাঁচিয়ে রাখি।</p>

                            <p>অংশগ্রহণের নিয়মাবলী—</p>

                            <div class="panel faq-list panel-default">
                                <ul>
                                    <li class="line"> আপনার সন্তানকে আপনি যে বাংলা গান বা ছড়া শুনিয়ে ঘুম
                                        পাড়ান, সেই মুহূর্তের ভিডিও পাঠান।
                                        ভিডিও আপনার ফেসবুক প্রোফাইলে পাবলিক করে <span
                                            class="text-info">#GhumParaniGaan</span> ও
                                        <span class="text-info">#ACIPure_Suji</span>
                                        হ্যাশট্যাগগুলো দিয়ে পাবলিশ করুন। ভিডিও পাবলিশের পর ভিডিও পোস্টের লিংকটি নিবন্ধন
                                        ফর্মে নাম ও ফোন নম্বরসহ জমা দিতে হবে।
                                    </li>
                                    <li class="line"> আপনি যখন ছোট ছিলেন, আপনাকে যে গান বা ছড়া শুনিয়ে ঘুম
                                        পাড়ানো হতো, সেই স্মৃতিও লিখে
                                        <span class="text-info">#GhumParaniGaan</span> ও <span class="text-info">#ACIPure_Suji</span>
                                        হ্যাশট্যাগগুলো দিয়ে নাম ও ফোন নম্বরসহ
                                        জমা দিতে হবে।
                                    </li>
                                    <li> অংশগ্রহণকারীদের মধ্য থেকে লটারির মাধ্যমে নির্বাচিত ১০
                                        জন বিজয়ীর জন্য থাকবে আকর্ষণীয়
                                        উপহার।
                                    </li>
                                    <li> লেখা ও ভিডিও পাঠানোর শেষ সময় ২২ ফেব্রুয়ারি ২০২২।</li>
                                    <li> অংশগ্রহণকারীদের সংগৃহীত তথ্য প্রথম আলো ও এসিআই
                                        যোগাযোগের জন্য ব্যবহার করতে পারবে।
                                    </li>
                                    <li> এই আয়োজনসংক্রান্ত নিয়মাবলি প্রথম আলো সংরক্ষণ করে। সব
                                        ক্ষেত্রে প্রথম আলোর সিদ্ধান্তই
                                        চূড়ান্ত।
                                    </li>
                                </ul>


                            </div>


                        </div><!-- panel-group -->
                    </div><!-- col end-->

                </div>

            </div>

        </section>
    @endif

    <section class="desktop">
        <div class="container">

            <center>
                <a href="https://www.facebook.com/watch/?extid=CL-UNK-UNK-UNK-AN_GK0T-GK1C&v=681556196131202"
                   target="_blank">
                    <img src="/images/ad_banner_desktop.gif" width="100%" alt="banner">
                </a>


            </center>


        </div>
    </section>
    <section class="mobile">
        <div class="container">
            <center>
                <a href="https://www.facebook.com/watch/?extid=CL-UNK-UNK-UNK-AN_GK0T-GK1C&v=681556196131202"
                   target="_blank">
                    <img src="/images/ad_banner_mobile.gif" width="100%" alt="banner">
                </a>

            </center>
        </div>
    </section>

    <section class="ts-contact" style="background-color: #f8f8f8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title text-center">
                        গ্যালারি
                    </h2>
                    <div class="elementor-widget-container">
                        <div class="row ">
                            @foreach($news as $res)
                                <div class="col-lg-6 fadeInUp mt-5">
                                    <div
                                        class="card p-2" {{--style="border: 1px solid; border-color: #9f9f9f"--}}>
                                        <div class="post-media post-image">

                                            @if($res->fb_link != null)
                                                @if (str_contains( $res->fb_link,  'iframe'))
                                                    <div style="width: 540px!important;">
                                                        {!! $res->fb_link !!}
                                                    </div>
                                                @else
                                                    {{--  <iframe src="http://www.facebook.com/video/embed?video_id=10152463995718183" frameborder="0" width="100%" height="100%">--}}

                                                    <iframe
                                                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fvoabangla%2Fposts%2F{{$res->fb_link}}&show_text=true&width=100%"
                                                        width="100%" height="250px"
                                                        style="border:none;overflow:hidden"
                                                        scrolling="no" frameborder="0" allowfullscreen="true"
                                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">

                                                    </iframe>
                                                @endif
                                            @else
                                                <p style="height: 200px">{{ Str::limit($res->status, 300) }}</p>
                                            @endif
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                                  <span class="post-author">
                                                   <i class="icon icon-user"></i>
                                                   <a href=""> {{$res->name}}</a>
                                                   </span>
                                                <span class="post-meta-date">
                                                    <i class="icon icon-calendar"></i>
                                                      {{getDateFormat($res->created_at)}}
                                                   </span>
                                            </div>
                                            @if($res->fb_link == null)
                                                <div class="post-footer " style="cursor: pointer">
                                                    <a class="btn-link  " data-toggle="modal"
                                                       data-target="#{{$res->id}}">
                                                        Continue <i class="icon icon-arrow-right"></i></a>

                                                </div>

                                                <!-- Modal -->
                                                <div class="modal fade" id="{{$res->id}}" tabindex="-1"
                                                     role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">

                                                            <div class="modal-body">
                                                                {!! $res->status !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn-sm btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <!-- post-body end -->
                                    </div>
                                    <!-- post end-->
                                </div>
                            @endforeach
                            <div class="m-3">
                                {{ $news->appends(Request::except('page'))->links("pagination::bootstrap-4") }}
                            </div>


                        </div> <!-- row end -->
                    </div>
                </div><!-- col end-->

            </div>

        </div>

    </section>








    <script type="text/javascript">
        window.onload = function () {
            document.getElementById('fb_link_input').style.display = 'block';
            document.getElementById('msg_input').style.display = 'none';
        }

        function yesnoCheck() {
            if (document.getElementById('radio1').checked) {
                document.getElementById('fb_link_input').style.display = 'block';
                document.getElementById('msg_input').style.display = 'none';
            }
            if (document.getElementById('radio2').checked) {
                document.getElementById('msg_input').style.display = 'block';
                document.getElementById('fb_link_input').style.display = 'none';
            }

        }

    </script>



@endsection
