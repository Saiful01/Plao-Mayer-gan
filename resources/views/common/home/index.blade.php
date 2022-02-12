@extends('layouts.common')

@section('content')

    <!-- ts intro start -->

    <section class="ts-intro-item " style="background-color: #e5e9e6">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="intro-left-content">
                        <h1>মাযের ভাষায় ঘুম পাড়ানির গান
                            মাযের ভাষায় ঘুম পাড়ানির গান</h1>

                    </div>
                </div><!-- col end-->
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="intro-left-content">
                        <img src="/images/gum/original_large.png"  style=" width: 100%"/>

                    </div>
                </div><!-- col end-->


            </div><!-- row end-->
        </div><!-- container end-->
    </section>
    <!-- ts intro end-->
    <section class="ts-contact-form" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title text-center">
                        লিখা পাঠানোর নিয়মাবলী
                    </h2>
                    <div class="panel-group faq-item">

                        <div class="panel faq-list panel-default">
                            <ul>
                                <li>
                                    ACI PURE সুজি মায়ের ভাষায় ঘুমপাড়ানি গান অংশগ্রহণ করতে পাশের ফরমটি পূরণ করে পাঠিয়ে দিন।
                                </li>

                                <li>
                                    প্রতিদিন অংশগ্রহণ কারীদের  মধ্য থেকে ১০ জনকে বিজয়ী নির্বাচিত করা হবে। বিজয়ীদের ACI PURE সুজি পক্ষ থেকে দেওয়া হবে গিফট হ্যাম্পার।
                                </li>
                                <li>
                                    প্রথম আলো ও ACI PURE সুজি পরিবারের কোনো সদস্য এই কুইজে অংশগ্রহণ করতে পারবেন না।
                                </li>


                            </ul>


                        </div>


                    </div><!-- panel-group -->
                </div><!-- col end-->
                <div class="col-lg-6 mx-auto">
                    <h2 class="section-title text-center">

                        মায়ের ভাষায় আমাদের লিখা পাঠান
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
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                           id="radio1" onclick="yesnoCheck()">
                                                    <label class="form-check-labels" for="flexRadioDefault1">
                                                        ফেইসবুক লিংক শেয়ার
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                           id="radio2" onclick="yesnoCheck()">
                                                    <label class="form-check-labels" for="flexRadioDefault2">
                                                        আপনার স্ট্যাটাস লিখুন
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-phone" placeholder="ফেইসবুক লিংক"
                                           name="fb_link" id="fb_link_input" type="text">
                                </div>
                                <div class="form-group">
                                <textarea rows="10" class="form-control form-control-phone"
                                          placeholder="আপনার স্ট্যাটাস লিখুন...... "
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

    <section class="ts-contact-form" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title text-center">
                        মায়ের ভাষায় আমাদের পাঠানো লিখা
                    </h2>
                    <div class="elementor-widget-container">
                        <div class="row " >
                            @foreach($news as $res)
                                <div class="col-lg-4 fadeInUp mt-5">
                                    <div
                                        class="card p-2" {{--style="border: 1px solid; border-color: #9f9f9f"--}}>
                                        <div class="post-media post-image">
                                            @if($res->fb_link != null)
                                                <iframe
                                                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fvoabangla%2Fposts%2F{{$res->fb_link}}&show_text=true&width=500"
                                                    width="100%" height="300"
                                                    style="border:none;overflow:hidden"
                                                    scrolling="no" frameborder="0" allowfullscreen="true"
                                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">

                                                </iframe>
                                            @else
                                                <p>{{ Str::limit($res->status, 430) }}</p>
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
                                                       <div class="post-footer">
                                                            <a class="btn-link" data-toggle="modal" data-target="#{{$res->id}}"> Continue <i class="icon icon-arrow-right"></i></a>

                                                        </div>

                                                <!-- Modal -->
                                                <div class="modal fade" id="{{$res->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">

                                                            <div class="modal-body">
                                                                {!! $res->status !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

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
