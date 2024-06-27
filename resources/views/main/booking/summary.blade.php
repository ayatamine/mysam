@extends('layouts.main')
@section('content')
    
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
                  <section style="margin-top: unset;" class="row justify-content-md-center" id="booking-start">
                      <div class="col-md-4 col-sm-12">
                          <div class="p-3">
                              <h2>ملخص الدفع</h2>
                              
                              <ol class="list-group list-group-numbered">
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">رسوم تقديم الطلب</div>
                                    </div>
                                    <span class="badge text-bg-primary rounded-pill">10 ريال</span>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                      <div class="fw-bold">رسوم الفحص الدوري</div>
                                    </div>
                                    <span class="badge text-bg-primary rounded-pill">0 ريال</span>
                                  </li>
                                </ol>
                                <h4>سوف يتم تحصيل رسوم الفحص لاحقاً عند الفحص</h4>

                              <a class="book-btn" href="/part">التالــي</a>
                          </div>
                      </div>
                      <!-- .col -->
                  </section>
              </div>

          </div>

      </section>
  </div><!-- .row -->
</div><!-- .main-container -->
@endsection