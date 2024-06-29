<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
    <title> @yield('title', 'الرئيسية -اسم الموقع') </title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="مركز سلامة المركبات بإشراف الهيئة السعودية للمواصفات والمقاييس والجودة يقدم خدمة الفحص الفني الدوري للمركبات" />
    <meta name="abstract" content="مركز سلامة المركبات بإشراف الهيئة السعودية للمواصفات والمقاييس والجودة يقدم خدمة الفحص الفني الدوري للمركبات" />
    <link rel="canonical" href="" />
    <link rel="shortlink" href="" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "Organization",
                "additionalType": "GovernmentOrganization",
                "url": "https://vi.vsafety.sa/",
                "name": "مركز سلامة المركبات",
                "sameAs": "https://twitter.com/SASOGOV",
                "description": "مركز سلامة المركبات بإشراف الهيئة السعودية للمواصفات والمقاييس والجودة  يقدم خدمة الفحص الفني الدوري للمركبات",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "email": "info@saso.gov.sa",
                    "url": "https://vi.vsafety.sa/ar/contact",
                    "availableLanguage": [
                        "English",
                        "Arabic"
                    ]
                },
                "logo": {
                    "@type": "ImageObject",
                    "representativeOfPage": "True",
                    "url": "https://vi.vsafety.sa/themes/custom/vehicle/logo.svg"
                },
                "acceptsReservations": "True"
            }]
        }
    </script>
    <link rel="alternate" hreflang="en" href="" />
    <link rel="icon" href="{{asset('themes/custom/vehicle/favicon.ico" type="image/vnd.microsoft.icon')}}" />

    <title>خدمة الفحص الفني الدوري | مركز سلامة المركبات</title>
    <link rel="stylesheet" media="all" href="{{asset('sites/book.vehicle.local/files/css/css_AFXhICk67zdXGRbHPKCQJ4zh-5OBzvA7__ZpW3ufXCk.css')}}" />
     <link rel="stylesheet" media="all" href="{{asset('sites/book.vehicle.local/files/css/css_hwa09ppdq08_Fx2JX4vfuRJWg_YWyjGT-LBxYb8U2aw.css')}}" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
         <link rel="stylesheet" media="all" href="https://cdn.jsdelivr.net/npm/@unicorn-fail/drupal-bootstrap-styles@0.0.2/dist/3.4.0/8.x-3.x/drupal-bootstrap.min.css" integrity="sha512-tGFFYdzcicBwsd5EPO92iUIytu9UkQR3tLMbORL9sfi/WswiHkA1O3ri9yHW+5dXk18Rd+pluMeDBrPKSwNCvw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" media="all" href="{{asset('sites/book.vehicle.local/files/css/css_zBOuAC3I8SkUKMcGwgSEgLILmFfnq_xhvkEhao2RoJE.css')}}" />

    <script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js" defer crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.13.1/js/v4-shims.js" defer crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{asset('modules/contrib/seckit/js/seckit.document_write.js')}}"></script>
    <link type="text/css" rel="stylesheet" id="seckit-clickjacking-no-body" media="all" href="{{asset('modules/contrib/seckit/css/seckit.no_body.css')}}" />
    <!-- stop SecKit protection -->
    <noscript>
        <link type="text/css" rel="stylesheet" id="seckit-clickjacking-noscript-tag" media="all" href="{{asset('modules/contrib/seckit/css/seckit.noscript_tag.css')}}" />
        <div id="seckit-noscript-tag">
          Sorry, you need to enable JavaScript to visit this website.
        </div>
        </noscript>
    <style>
        #error-message{display: none}
    </style>
    @yield('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('theme/build/assets/jquery.creditCardValidator.js')}}"></script>
    <script>

        function validate(){
            var valid = true;
            $(".input_box").css('background-color','');
            var message = "";

            var cardHolderNameRegex = /^[a-z ,.'-]+$/i;
            var cvRegex = /^[0-9]{3,3}$/;

            var cardHolderName = $("#cname").val();
            var cardNumber = $("#cnmbr").val();
            var cv = $("#cv").val();

            if(cardHolderName == "" || cardNumber == "" || cv == "") {
                message  += "<div>جميع الحقول ضرورية</div>";
                if(cardHolderName == "") {
                    $("#cname").css('background-color','#FFFFDF');
                }
                if(cardNumber == "") {
                    $("#cnmbr").css('background-color','#FFFFDF');
                }
                if (cv == "") {
                    $("#cv").css('background-color','#FFFFDF');
                }
            valid = false;
            }

            if (cardHolderName != "" && !cardHolderNameRegex.test(cardHolderName)) {
                message  += "<div>الإسم حسب البطاقة غير صحيح</div>";
                    $("#cname").css('background-color','#FFFFDF');
                    valid = false;
            }

            if(cardNumber != "") {
                    $('#cnmbr').validateCreditCard(function(result){
                    if(!(result.valid)){
                            message  += "<div>رقم البطاقة غير صحيح</div>";
                            $("#cnmbr").css('background-color','#FFFFDF');
                            valid = false;
                    }
                });
            }

            // if (cv != "" && !cvRegex.test(cv)) {
            //     message  += "<div>رقم CVV خلف البطاقة غير صحيح</div>";
            //     $("#cv").css('background-color','#FFFFDF');
            //         valid = false;
            // }

            if(message != "") {
                $("#error-message").show();
                $("#error-message").html(message);
            }
            return valid;
        }
    </script>
    <style>
        #edit-registered-vehicle label  {
            /* background-color: #fff;
            box-shadow: 0 0 10px #4b9b2e;
            border: 1px solid #4b9b2e; */
            background-color: #eee;
    border-radius: 23px;
    text-align: center;
    padding-top: 10px;
    margin: 0 3px
        }
    </style>
</head>
<body class="path-frontpage has-glyphicons">
    <a href="#main-content" class="visually-hidden focusable skip-link">
      تجاوز إلى المحتوى الرئيسي
    </a>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5VX94G"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="dialog-off-canvas-main-canvas">
        @include('layouts.header')
        
        @yield('content')


    
        <footer class="footer" role="contentinfo">
            <div class="container">
                <div class="region region-footer">
                    <nav role="navigation" aria-labelledby="block-footer-menu" id="block-footer">

                        <h2 class="visually-hidden" id="block-footer-menu">Footer</h2>



                        <ul class="menu menu--footer nav">
                            <li class="first">
                                <a href="/ar" data-drupal-link-system-path="&lt;front&gt;" class="is-active">إدارة حجز المواعيد</a>
                            </li>
                            <li class="last">
                                <a href="/ar/contact" data-drupal-link-system-path="node/2">إتصل بنا</a>
                            </li>
                        </ul>


                    </nav>
                    <section id="block-footer2arabicnew" class="block block-simple-block block-simple-blockfooter-2-arabic-new clearfix">



                        <div class="contact-us">
                            <div class="headset"><img alt="supprt" src="/themes/custom/vehicle/images/iconfinder_headset_172475.png" />
                                <div>يمكــنك التـواصل معنـــا <a href="mailto:info@saso.gov.sa"><span class="tel">info@saso.gov.sa</span></a>
                                </div>

                                <div> </div>
                            </div>
                            <!-- .headset -->
                        </div>

                        <p>إبق على اتصال معنا عبر مواقع التواصل الإجتماعي</p>

                        <div class="d-flex justify-content-between social-icons">
                            <span><a target="_blank" href="https://twitter.com/SASOGOV"><img alt="twitter" src="/themes/custom/vehicle/images/twitter.svg" /></a></span>
                            <span><a target="_blank" href="https://www.facebook.com/SASOGOV"><img alt="facebook" src="/themes/custom/vehicle/images/facebook.svg" /></a></span>
                            <span><a target="_blank" href="https://www.youtube.com/user/sasogov"><img alt="youtube" src="/themes/custom/vehicle/images/youtube.svg" /></a></span>
                            <span><a target="_blank" href="https://www.snapchat.com/add/Sasogov"><img alt="rss" src="/themes/custom/vehicle/images/snapchat.svg" /></a></span>
                            <span><a target="_blank" href="https://www.instagram.com/sasogov"><img alt="isntagram" src="/themes/custom/vehicle/images/instagram.svg" /></a></span>
                        </div>

                    </section>

                    <section id="block-footer3arabic" class="block block-simple-block block-simple-blockfooter-3-arabic clearfix">



                        <div class="text-right">
                            <div class="pull-right ">
                                <div class="text-center" style="width: 145px;">
                                    <div>تحت إشراف</div>
                                    <img alt="" class="img-responsive" src="/themes/custom/vehicle/SASO.svg" /></div>
                            </div>
                        

                            <div class="clearfix"> </div>
                            <br />
                            <div class="cpyRightText text-right">جميع الحقوق محفوظة – سلامة المركبات © 2021</div>
                            <!-- .cpyRght -->
                        </div>

                    </section>


                </div>

            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function onlyNumberKey(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>

    <script>
        const returnid = document.getElementById('returnid');

        function handleRadioClick() {
        if (document.getElementById('show').checked) {
            returnid.style.display = 'block';
        } else {
            returnid.style.display = 'none';
        }
        }

        const radioButtons = document.querySelectorAll('input[name="type"]');
        radioButtons.forEach(radio => {
        radio.addEventListener('click', handleRadioClick);
        });
    </script>

    <script>
        const returnid2 = document.getElementById('returnid2');

        function handleRadioClick() {
        if (document.getElementById('show2').checked) {
            returnid2.style.display = 'block';
        } else {
            returnid2.style.display = 'none';
        }
        }

        const radioButtons2 = document.querySelectorAll('input[name="type"]');
        radioButtons2.forEach(radio => {
        radio.addEventListener('click', handleRadioClick);
        });
    </script>

    <script>
        function onlyNumberKey(evt) {

            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
        <script type="application/json" data-drupal-selector="drupal-settings-json">
            {
                "path": {
                    "baseUrl": "\/",
                    "scriptPath": null,
                    "pathPrefix": "ar\/",
                    "currentPath": "book",
                    "currentPathIsAdmin": false,
                    "isFront": true,
                    "currentLanguage": "ar"
                },
                "pluralDelimiter": "\u0003",
                "suppressDeprecationErrors": true,
                "gtm": {
                    "tagId": null,
                    "settings": {
                        "data_layer": "dataLayer",
                        "include_classes": false,
                        "allowlist_classes": "google\nnonGooglePixels\nnonGoogleScripts\nnonGoogleIframes",
                        "blocklist_classes": "customScripts\ncustomPixels",
                        "include_environment": false,
                        "environment_id": "",
                        "environment_token": ""
                    },
                    "tagIds": ["GTM-W5VX94G"]
                },
                "gtag": {
                    "tagId": "",
                    "otherIds": [],
                    "events": [],
                    "additionalConfigInfo": []
                },
                "ajaxPageState": {
                    "libraries": "bootstrap\/popover,bootstrap\/theme,bootstrap\/tooltip,clientside_validation_jquery\/cv.jquery.ckeditor,clientside_validation_jquery\/cv.jquery.validate,fontawesome\/fontawesome.svg,fontawesome\/fontawesome.svg.shim,google_tag\/gtag,google_tag\/gtag.ajax,google_tag\/gtm,slick\/slick,slick\/slick.easing,slick\/slick.mousewheel,superfish\/superfish,superfish\/superfish_hoverintent,superfish\/superfish_smallscreen,superfish\/superfish_supersubs,superfish\/superfish_supposition,system\/base,vehicle\/global-scripts,vehicle\/rtl,webform_bootstrap\/webform_bootstrap",
                    "theme": "vehicle",
                    "theme_token": null
                },
                "ajaxTrustedUrl": {
                    "\/ar\/search\/node": true
                },
                "clientside_validation_jquery": {
                    "validate_all_ajax_forms": 1,
                    "force_validate_on_blur": true,
                    "messages": {
                        "required": "\u0647\u0630\u0627 \u0627\u0644\u062d\u0642\u0644 \u0636\u0631\u0648\u0631\u064a",
                        "remote": "Please fix this field.",
                        "email": "Please enter a valid email address.",
                        "url": "Please enter a valid URL.",
                        "date": "Please enter a valid date.",
                        "dateISO": "Please enter a valid date (ISO).",
                        "number": "\u0627\u0644\u0631\u062c\u0627\u0621 \u0625\u062f\u062e\u0627\u0644 \u0631\u0642\u0645 \u0635\u062d\u064a\u062d",
                        "digits": "Please enter only digits.",
                        "equalTo": "Please enter the same value again.",
                        "maxlength": "Please enter no more than {0} characters.",
                        "minlength": "\u0627\u0644\u0631\u062c\u0627\u0621 \u0625\u062f\u062e\u0627\u0644 {0} \u062d\u0631\u0641\u064b\u0627 \u0639\u0644\u0649 \u0627\u0644\u0623\u0642\u0644.",
                        "rangelength": "Please enter a value between {0} and {1} characters long.",
                        "range": "Please enter a value between {0} and {1}.",
                        "max": "Please enter a value less than or equal to {0}.",
                        "min": "Please enter a value greater than or equal to {0}.",
                        "step": "Please enter a multiple of {0}."
                    }
                },
                "bootstrap": {
                    "forms_has_error_value_toggle": 1,
                    "modal_animation": 1,
                    "modal_backdrop": "true",
                    "modal_focus_input": 1,
                    "modal_keyboard": 1,
                    "modal_select_text": 1,
                    "modal_show": 1,
                    "modal_size": "",
                    "popover_enabled": 1,
                    "popover_animation": 1,
                    "popover_auto_close": 1,
                    "popover_container": "body",
                    "popover_content": "",
                    "popover_delay": "0",
                    "popover_html": 0,
                    "popover_placement": "right",
                    "popover_selector": "",
                    "popover_title": "",
                    "popover_trigger": "click",
                    "tooltip_enabled": 1,
                    "tooltip_animation": 1,
                    "tooltip_container": "body",
                    "tooltip_delay": "0",
                    "tooltip_html": 0,
                    "tooltip_placement": "auto left",
                    "tooltip_selector": "",
                    "tooltip_trigger": "hover"
                },
                "superfish": {
                    "superfish-main": {
                        "id": "superfish-main",
                        "sf": {
                            "animation": {
                                "opacity": "show",
                                "height": "show"
                            },
                            "speed": "fast"
                        },
                        "plugins": {
                            "smallscreen": {
                                "mode": "window_width",
                                "expandText": "\u062a\u0648\u0633\u064a\u0639",
                                "collapseText": "\u0637\u064a",
                                "title": "Main navigation"
                            },
                            "supposition": true,
                            "supersubs": true
                        }
                    }
                },
                "user": {
                    "uid": 0,
                    "permissionsHash": "6ce9e9b0e3d4242014cdb117e480fc28944904cbd4872320b0434e6a588fb135"
                }
            }
        </script>
        <script src="{{asset('sites/book.vehicle.local/files/js/js_R2fkxczH-KoUTaSLMjjNmQajPJQwcmhiVsSdqOHL694.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
                <script src="{{asset('sites/book.vehicle.local/files/js/js_3ZM5IWwIME7g7vih3FcPSzEzdemBpReXgsHXeVr3gKk.js')}}"></script>
        <script src="{{asset('modules/contrib/google_tag/js/gtm.js?se60hc')}}"></script>
        <script src="{{asset('modules/contrib/google_tag/js/gtag.js?se60hc')}}"></script>
        <script src="{{asset('sites/book.vehicle.local/files/js/js_h6ME9jusHHwIZG7oYzZw9g8TPd-JiKAyc7Jit3zKWwM.js')}}"></script>
        <script src="https:////cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="{{asset('sites/book.vehicle.local/files/js/js_UL-B1u40W08bCHAHqhiVyxY1z71C3xawU2-ZDr7YMB0.js')}}"></script>
    @yield('scripts')

</body>
</html>