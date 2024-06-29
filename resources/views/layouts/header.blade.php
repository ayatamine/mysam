<div> 
    <div class="v-bg text-center">
        منصة حجز مواعيد الفحص الفني الدوري الجديدة
    
        <a href="https://pti.saso.gov.sa/apt/" class="btn btn-v">جرب الآن &larr;</a>
    </div>
    <div id="new-book-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <img src="/themes/custom/vehicle/logo.png" />
                    <br/>
                    <h3 class="modal-title v-text"> النسخة الجديدة متاحة الآن</h3>
                    <br/>
                    <p></p>
                    <br/>
                    <a href="https://pti.saso.gov.sa/apt/" class="vehicle-btn">جرب الآن </a>
                    <br/>
                    <br/>
                    <button type="button" class="btn btn-link text-muted" data-dismiss="modal">إغلاق النافذة</button>
                </div>
            </div>
    
        </div>
    </div>
    
    <header class="navbar navbar-default container" id="navbar" role="banner">
        <!-- header-->
        <div class="header">
            <div class="navbar-header logos">
                <div class="region region-navigation">
                    <a class="logo navbar-btn" href="/ar" title="الرئيسية" rel="home">
                    <img class="img-responsive" src="/themes/custom/vehicle/logo.svg" alt="الرئيسية" height="60"/>
                    </a>
                    <p class="navbar-text">خدمة الفحص الفني الدوري</p>
    
                </div>
    
            </div>
            <!-- .navbar-header -->
            <div class="search-languageBar">
                <div class="region region-navigation-side">
                    <div class="search-block-form block block-search block-search-form-block" data-drupal-selector="search-block-form" id="block-searchform" role="search">
    
    
                        <form action="/ar/search/node" method="get" id="search-block-form" accept-charset="UTF-8">
    
                            <div class="form-item js-form-item form-type-search js-form-type-search form-item-keys js-form-item-keys form-no-label form-group">
                                <label for="edit-keys" class="control-label sr-only">بحث</label>
    
    
                                <div class="input-group"><input title="أدخل المصطلحات التي ترغب في البحث عنها." data-drupal-selector="edit-keys" class="form-search form-control" placeholder="بحث" data-msg-maxlength="الحد الأقصى لطول الحقل بحث هو 128." type="search" id="edit-keys"
                                        name="keys" value="" size="15" maxlength="128" data-toggle="tooltip" /><span class="input-group-btn"><button type="submit" value="بحث" class="button js-form-submit form-submit btn-primary btn icon-only" name=""><span class="sr-only">بحث</span>
                                    <span
                                        class="icon glyphicon glyphicon-search" aria-hidden="true"></span>
                                        </button>
                                        </span>
                                </div>
    
    
    
                            </div>
                            <div class="form-actions form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-actions" id="edit-actions"></div>
    
                        </form>
    
                    </div>
                    <section class="language-switcher-language-url block block-language block-language-blocklanguage-interface clearfix" id="block-languageswitcher" role="navigation">
    
    
    
                        <ul class="links">
                            <li hreflang="en" data-drupal-link-system-path="book" class="en"><a href="/en/book" class="language-link" hreflang="en" data-drupal-link-system-path="book">English</a></li>
                        </ul>
                    </section>
    
    
                </div>
    
            </div>
            <!-- .navbar-header-side -->
        </div>
    
    </header>
    
    <div class="navigation-menu">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
    
        <div id="navbar-collapse" class="navbar-collapse collapse">
            <div class="container">
                <div class="region region-navigation-collapsible">
                    <nav role="navigation" aria-labelledby="block-mainnavigation-2-menu" id="block-mainnavigation-2">
                        <h2 class="sr-only" id="block-mainnavigation-2-menu">Main navigation</h2>
    
    
                        <ul class="menu menu--main nav navbar-nav">
                            <li class="active  first  @if(Request::segment(1) =='') active-trail @endif" >
                                <a href="{{route('home')}}" class="is-active  @if(Request::segment(1) =='') active-trail @endif" >الرئيسية</a>
                            </li>
                            <li class="@if(Request::segment(1) =='inspection-criteria') active-trail @endif">
                                <a href="{{route('inspection_criteria')}}" >بنود الفحص الفني الدوري</a>
                            </li>
                            <li class="@if(in_array(Request::segment(2),['apply','part','summary','auth','verification'])) active-trail @endif">
                                <a href="{{route('booking_apply')}}" >حجز موعد</a>
                            </li>
                            <li class="@if(Request::segment(2) =='edit') active-trail @endif">
                                <a href="{{route('booking_edit')}}" >تعديل موعد</a>
                            </li>
                            <li class="@if(Request::segment(2) =='cancel') active-trail @endif">
                                <a href="{{route('booking_cancel')}}" >إلغاء موعد</a>
                            </li>
                            <li class="@if(Request::segment(1) =='inspection-status') active-trail @endif">
                                <a href="{{route('inspection_status')}}" >التحقق من حالة الفحص</a>
                            </li>
                            <li class="last @if(Request::segment(1) =='contact') active-trail @endif">
                                <a href="{{route('contact')}}" >إتصل بنا</a>
                            </li>
                        </ul>
    
    
                    </nav>
                    <section id="block-mainnavigation" class="block block-superfish block-superfishmain clearfix">
    
    
    
    
                        <ul id="superfish-main" class="menu sf-menu sf-main sf-horizontal sf-style-none rtl">
    
                            <li id="main-standardfront-page" class="sf-depth-1 sf-no-children @if(Request::segment(1) =='') active-trail @endif" ><a href="{{route('home')}}" class="sf-depth-1">الرئيسية</a></li>
                            <li id="main-menu-link-content43f4faa5-8f64-40a4-9d92-daf11fa92967" class="sf-depth-1 sf-no-children @if(Request::segment(1) =='inspection-criteria') active-trail @endif"><a href="{{route('inspection_criteria')}}" class="sf-depth-1">بنود الفحص الفني الدوري</a></li>
                            <li id="main-menu-link-content0ab33c7e-4fbb-41c1-a220-1ea519e11de2" class="sf-depth-1 sf-no-children @if(in_array(Request::segment(2),['apply','part','summary','auth','verification'])) active-trail @endif"><a href="{{route('booking_apply')}}" class="sf-depth-1">حجز موعد</a></li>
                            <li id="main-menu-link-content5d57090d-7dc2-4c6d-a906-082f5fc8b69d" class="sf-depth-1 sf-no-children @if(Request::segment(2) =='edit') active-trail @endif"><a href="{{route('booking_edit')}}" class="sf-depth-1">تعديل موعد</a></li>
                            <li id="main-menu-link-content911cf031-449e-44ec-a609-3f4c4640d4ad" class="sf-depth-1 sf-no-children @if(Request::segment(2) =='cancel') active-trail @endif"><a href="{{route('booking_cancel')}}" class="sf-depth-1">إلغاء موعد</a></li>
                            <li id="main-menu-link-content3581e2c9-5c83-40e5-b70e-217a0fcfce0b" class="sf-depth-1 sf-no-children @if(Request::segment(1) =='inspection-status') active-trail @endif"><a href="{{route('inspection_status')}}" class="sf-depth-1">التحقق من حالة الفحص</a></li>
                            <li id="main-menu-link-contenta2d67960-5a32-4389-8290-4ee1ac39e568" class="sf-depth-1 sf-no-children @if(Request::segment(1) =='contact') active-trail @endif"><a href="{{route('contact')}}" class="sf-depth-1">إتصل بنا</a></li>
                        </ul>
    
                    </section>
    
    
                </div>
    
            </div>
        </div>
    
    
    </div>
</div>