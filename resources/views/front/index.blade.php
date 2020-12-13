@extends('front.layout.app')
@section('content')
    <section id="particles-js"  class="hero-wrap"  data-stellar-background-ratio="0.3">
        <div class="slide-box" id="index">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate d-flex align-items-end">
                        <div class="text">
                            @if($headSection)
                                <h1 class="mb-4">{{$headSection->title}}</h1>
                                <p style="font-size: 18px;">
                                   {{$headSection->description}}
                                </p>
                            @else
                                <h1 class="mb-4"> شركة تطوير برمجيات وحلول تقنية مخصصة</h1>
                                <p style="font-size: 18px;">
                                    ديفيست هنا لإدخالك في اللعبة ولتغيير جميع القواعد وتحويل رؤيتك إلى حقيقة،
                                    أيًا كان ما تحتاج إليه لتحويل عملك أو فكرتك إلى شيء كبير، فلدينا فريق عمل مناسب لك ولفكرتك ولدينا كل المعرفة الكافية لتخصصك،
                                    دعنا نبدأ معك رحلتك الرقمية، وندخل اللعبة سويًا، لنواجه تحدياتك بالنيابة عنك.
                                </p>
                            @endif


                            <div class="d-flex meta">
                                <div class=""><p class="mb-0"><a href="#about" class="btn btn-primary py-3 px-2 px-md-4 slider-button">@lang('index.read more about us')</a></p></div>
                                <a href="#contact" class="d-flex align-items-center button-link slider-button">
                                    <div class=""><p class="mb-0"><a href="#contact" class="btn btn-primary py-3 px-2 px-md-4">@lang('index.contact us')</a></p></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div >
    </div>
    <div class="clearfix"></div>
    @if($infoSection)
        <section class="ftco-section ftco-portfolio about" id="about">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">{{$infoSection->sub_title}}</span>
                    <h2 class="mb-2">{{$infoSection->title}}</h2>
                </div>
            </div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 portfolio-wrap">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5 img js-fullheight" style="background-image: url({{asset('images').'/' . $infoSection->photo_who_are_we}});">
                            </div>
                            <div class="col-md-7">
                                <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
                                    <div class="desc">
                                        <div >
                                            <h3 class="mb-4">{{$infoSection->who_are_we_title}}</h3>
                                        </div>
                                        <div class="absolute">
                                            <p>
                                                {{$infoSection->description_who_are_we}}
                                            </p>
                                            <p><a href="#our-work" class="custom-btn">مجالات العمل</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 portfolio-wrap">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-5 order-md-last img js-fullheight" style="background-image: url({{asset('images').'/' . $infoSection->photo_how_we_work}});">
                            </div>
                            <div class="col-md-7">
                                <div class="text pt-5 pr-md-5 ftco-animate">
                                    <div class="px-4 px-lg-4">
                                        <div class="desc text-md-right">
                                            <div class="">

                                                <h3 class="mb-4">{{$infoSection->how_we_work_title}}</h3>
                                            </div>
                                            <div class="absolute">
                                                <p>
                                                    {{$infoSection->description_how_we_work}}
                                                </p>
                                                <p><a href="#our-work" class="custom-btn">مجالات العمل</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <hr>
    <section class="our-work" id="our-work">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>خدماتنا</h2>
                </div>
            </div>
            <div class="row">
                @if($services)
                    @foreach($services as $serv)
                        <div class="col-md-4 col-sm-6">
                            <div class="our-work-information ">
                                <div class="icon d-flex justify-content-center align-items-center projects-box">
                                    <i class="{{$serv->section_icon}}"></i>

                                </div>
                                <div class="plan-box text-center">
                                    <h3>{{$serv->title}}</h3>
                                    <div class="information-box">
                                        <p class="catch">
                                            {{$serv->description}}
                                        </p>
                                        @isset($serv->description_hidden)
                                        <p class="text-box ">
                                            {{$serv->description_hidden}}
                                        </p>
                                        <div class="see-more btn btn-info">@lang('work.see more')</div>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endif
                </div>
        </div>
    </section>
    <!-- <hr> -->
    <!-- <section class="ftco-section" id="projects">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">المجالات والصناعات التي نعمل حالياً على تطوير برمجيات متقدمة لدعمها وحل مشكلاتها</span>
                <h2>مشاريعنا</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="block-7 scale-box">
                    <div class="img" style="background-image: url({{asset('assests/front//images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2 text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>نظام المنتسبين</li>
                            <li><p>Advanced and Modern E-commerce platform that helps sellers connect with marketers and affiliates people that have the ability to reach buyers easily by their selling channels</p></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7 scale-box">
                    <div class="img" style="background-image: url({{asset('assests/front//images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2  text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>منصة التجارة الالكترونية</li>
                            <li><p>E-Commerce Project, we'll publish more info at the right time</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="block-7 scale-box">
                    <div class="img" style="background-image: url({{asset('assests/front//images/soon.jpg')}});"></div>
                    <div class="p-4">
                        <ul class="pricing-text mb-2  text-center">
                            <li><span class="fa fa-check-circle mr-2"></span>مشروع تجارة إلكترونية</li>
                            <li><p>E-commerce Project that will help merchants and small-to-medium stores to start selling online!</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
    <!-- <div class="clearfix"></div> -->
    <!-- <section class="ftco-section testimony-section bg-light " id="testmonails">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">@lang('testi.testimonial')</span>
                <h2 class="mb-3">@lang('testi.Customers says')</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_1.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_2.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_3.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_1.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url({{asset('assests/front//images/person_2.jpg')}})"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
    <div class="clearfix"></div>
    <hr>
    {{--begin Our support--}}
    <section class="our-supports" id="supports">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">شركاءنا فى النجاح</span>
                    <h2 class="mb-3">شركائنا</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Set up your HTML -->
                    <div class="carousel-support owl-carousel">
                        @if($prants)
                            @foreach($prants as $prant)
                                <div class="item marsol"><img src="{{asset('images').'/' . $prant->photo}}" alt=""> </div>
                            @endforeach
                        @else
                            <div class="item mcit"><img src="{{asset('assests/front/images/supports/mars.png')}}" alt=""> </div>
                            <div class="item altafrah"><img src="{{asset('assests/front/images/supports/hunger.png')}}" alt=""> </div>
                            <div class="item saudi"><img src="{{asset('assests/front/images/supports/elctra.png')}}" alt=""> </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--End Our support--}}
    <hr>
    <div class="clearfix"></div>
    <section class="contact" id="contact">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">@lang('contact.contact us')</h2>
                <span class="subheading">@lang('contact.Leave us a message and we will get back to you ASAP')</span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    @include('front.messages.session')
                    <form method="POST" action="{{route('message')}}" class="bg-light p-5 contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control name" placeholder="@lang('contact.your name')" required maxlength="100">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-danger error">@lang('contact.This field must be more than five characters')</div>
                                    <div class="alert alert-danger more-than">@lang('contact.This field must be no longer than thirty characters') </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control email" placeholder="@lang('contact.your email')" required maxlength="100">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-danger error">@lang('contact.This field must be more than five characters')</div>
                                    <div class="alert alert-danger more-than">@lang('contact.This field must be no longer than thirty characters') </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control subject" placeholder="@lang('contact.the subject')" required maxlength="100">
                                    @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-danger error">@lang('contact.This field must be more than five characters')</div>
                                    <div class="alert alert-danger more-than">@lang('contact.This field must be no longer than thirty characters') </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control phone" placeholder="@lang('contact.phone')" required  onKeyPress="if(this.value.length==19) return false;">
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-danger error">@lang('contact.This field must be more than five characters')</div>
                                    <div class="alert alert-danger more-than">@lang('contact.This field must be no longer than thirty characters') </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea required name="message" id=""  cols="30" rows="5" class="form-control messages" minlength="15" maxlength="500" placeholder="@lang('contact.the message')"></textarea>
                            @error('messages')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="alert alert-danger error">@lang('contact.This field must be more than five characters')</div>
                            <div class="alert alert-danger more-than">@lang('contact.This field must be no longer than thirty characters') </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="submit btn btn-danger py-2 px-5 message"><i class="fas fa-arrow-left"></i> @lang('contact.send the message') </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-12 text-right">
                    <p class="text-right text-box">@lang('contact.or contact us at')</p>
                    <a class="box-info ">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="socail-icon-box">
                                        <i class="fas fa-envelope fa-2x"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="box">
                                        <p>@lang('contact.email'): </p>
                                        <p>info@devest.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="box-info ">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="socail-icon-box">
                                        <i class="fab fa-facebook-f "></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="box">
                                        <p>@lang('contact.facebook')</p>
                                        <p>info@devest.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="box-info ">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="socail-icon-box">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="box">
                                        <p>@lang('contact.phone')</p>
                                        <p class="phone">@if($settings){{$settings->phone}} @endif   </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
