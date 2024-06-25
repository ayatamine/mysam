@extends('layouts.main')
@section('content')


<section class="container mb-5">
    <div role="main" class="main-container js-quickedit-main-content">
        <div class="row">





            <section class="col-sm-12">

                <div class="highlighted">
                    <div class="region region-highlighted">
                        <div data-drupal-messages-fallback class="hidden"></div>

                    </div>
                </div>


                <a id="main-content"></a>
                <div class="region region-content">
                    <h1 class="page-header">حجز موعد</h1>

                    <style>
                        body.path-frontpage .main-container {
                            margin-bottom: 0 !important;
                            background-color: #f1f4f8;
                        }

                        body.path-frontpage .main-container {
                            width: 100%;
                        }
                    </style>
                    <div class="container book-menu-page">
                        <section class="row" id="booking-start">
                            <div class="col-md-8 col-sm-12">
                                <img alt="Vehicle Safety Center" class="img-responsive" src="/modules/custom/svis_book/images/intro-ar.png" />
                            </div>
                            <!-- .col -->
                            <div class="col-md-4 col-sm-12">
                                <div id="book-menu">
                                    <h2>خدمة الفحص الفني الدوري</h2>
                                    <h4>يمكنك حجز موعد جديد أو تعديل أو إلغاء موعدك</h4>
                                    <a class="book-btn" href="/ar/book/apply">حجز موعد</a>
                                    <a class="edit-btn" href="/ar/book/edit">تعديل موعد</a>
                                    <a class="delete-btn" href="/ar/book/cancel">إلغاء موعد</a>
                                </div>
                            </div>
                            <!-- .col -->
                        </section>
                    </div>

                    <section id="block-mobileappbanner" class="block block-simple-block block-simple-blockmobile-app-banner clearfix">



                        <div id="app-banner">
                            <div class="container">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h2>يمكنك تحميل التطبيق الأن</h2>

                                        <p>يمكنك حجز موعد الفحص عن طريق التطبيق سلامة المركبات </p>
                                    </div>

                                    <div><a href="https://play.google.com/store/apps/details?id=com.isoft.saso" target="_blank"><img alt="تطبيق سلامة السيارة على الجوال" src="/themes/custom/vehicle/images/path8777.png" /></a> <a href="https://apps.apple.com/app/id1614137306"
                                            target="_blank"> <img alt="تطبيق سلامة السيارة على الجوال" src="/themes/custom/vehicle/images/path8845.png" /></a></div>
                                </div>
                            </div>
                            <!-- .container -->
                        </div>
                        <!-- #app-banner -->
                    </section>


                </div>

            </section>
        </div>
        <!-- .row -->
    </div>
</section>

@endsection