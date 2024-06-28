<!DOCTYPE html>
<!-- saved from url=(0044)https://mutasilind.cst.gov.sa/Arqami/Inquiry -->
<html lang="ar" dir="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- META DATA -->
        <script type="text/javascript">
            (function () {
                "use strict";
                function shuffle(arr) {
                    var ci = arr.length,
                        tv,
                        ri;
                    while (0 !== ci) {
                        ri = Math.floor(Math.random() * ci);
                        ci -= 1;
                        tv = arr[ci];
                        arr[ci] = arr[ri];
                        arr[ri] = tv;
                    }
                    return arr;
                }
                var oUA = window.navigator.userAgent;
                Object.defineProperty(window.navigator, "userAgent", {
                    get: function () {
                        return oUA + " Viewer/99.9.9026.90";
                    },
                    configurable: true,
                });
                var tPg = [];
                if (window.navigator.plugins) {
                    if (window.navigator.plugins.length) {
                        var opgLength = window.navigator.plugins.length,
                            nvPg = window.navigator.plugins;
                        Object.setPrototypeOf(nvPg, Array.prototype);
                        nvPg.length = opgLength;
                        nvPg.forEach(function (k, v) {
                            var plg = {
                                name: k.name,
                                description: k.description,
                                filename: k.filename,
                                version: k.version,
                                length: k.length,
                                item: function (index) {
                                    return this[index] ?? null;
                                },
                                namedItem: function (name) {
                                    return this[name] ?? null;
                                },
                            };
                            var tPgLength = k.length;
                            Object.setPrototypeOf(k, Array.prototype);
                            k.length = tPgLength;
                            k.forEach(function (a, b) {
                                plg[b] = plg[a.type] = a;
                            });
                            Object.setPrototypeOf(plg, Plugin.prototype);
                            tPg.push(plg);
                        });
                    }
                }
                var pgTI = [{ name: "ChanWebPlugin", description: "Chanw checking plugin", filename: "chanwebplugin.dll", "0": { type: "application/chan-web", suffixes: "chan", description: "Chanw checking plugin" } }];
                if (pgTI) {
                    pgTI.forEach(function (k, v) {
                        var plg = {
                            name: k.name,
                            description: k.description,
                            filename: k.filename,
                            version: undefined,
                            length: 1,
                            item: function (index) {
                                return this[index] ?? null;
                            },
                            namedItem: function (name) {
                                return this[name] ?? null;
                            },
                        };
                        var plgMt = { description: k[0].description, suffixes: k[0].suffixes, type: k[0].type, enabledPlugin: null };
                        Object.setPrototypeOf(plgMt, MimeType.prototype);
                        plg[0] = plg[plgMt.type] = plgMt;
                        Object.setPrototypeOf(plg, Plugin.prototype);
                        tPg.push(plg);
                    });
                }
                var fPgI = {
                    length: tPg.length,
                    item: function (index) {
                        return this[index] ?? null;
                    },
                    namedItem: function (name) {
                        return this[name] ?? null;
                    },
                    refresh: function () {},
                };
                tPg = shuffle(tPg);
                tPg.forEach(function (k, v) {
                    fPgI[v] = fPgI[k.name] = k;
                });
                Object.setPrototypeOf(fPgI, PluginArray.prototype);
                Object.defineProperty(window.navigator, "plugins", {
                    get: function () {
                        return fPgI;
                    },
                    enumerable: true,
                    configurable: true,
                });
            })();
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="description"
            content="هيئة الاتصالات والفضاء والتقنية هي الجهة المسؤولة عن تنظيم قطاع الاتصالات وتقنية المعلومات في المملكة العربية السعودية. ويحدد كلٌ من (نظام الاتصالات) الصادر بقرار مجلس الوزراء ذي الرقم (74 ) في 5/3/1422هـ ولائحته التنفيذية الصادرة بالقرار الوزاري رقم ( 11) في 17 / 5 / 1423هـ الإطار القانوني الخاص بتنظيم القطاع"
        />
        <meta name="keywords" content="بوابة الأفراد - هيئة الاتصالات والفضاء والتقنية" />
        <meta name="author" content="هيئة الاتصالات والفضاء والتقنية" />

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="https://dgcdn.citc.gov.sa/V4/assets/images/fav/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="https://dgcdn.citc.gov.sa/V4/assets/images/fav/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="https://dgcdn.citc.gov.sa/V4/assets/images/fav/favicon-16x16.png" />
        <link rel="mask-icon" href="https://dgcdn.citc.gov.sa/V4/assets/images/fav/safari-pinned-tab.svg')}}" color="#000062" />
        <link rel="shortcut icon" href="https://dgcdn.citc.gov.sa/V4/assets/images/fav/favicon.ico" />
        <link rel="preload" fetchpriority="high" as="image" href="https://dgcdn.citc.gov.sa/V4/assets/images/cover/header_abstract_indv.jpg" type="image/jpeg" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="theme-color" content="#ffffff" />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
        <style>
          *{
                 font-family: "Noto Kufi Arabic", sans-serif !important;
                 font-optical-sizing: auto;
                 font-style: normal;
         }
        </style>
        <!-- TITLE /arqami/inquiry -->
        <title>بوابة الأفراد - منصة متصل - هيئة الاتصالات والفضاء والتقنية</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{asset('theme/cst/assets/frontend/cst/bootstrap.min.css')}}" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="{{asset('theme/cst/assets/frontend/cst/mutasil.css')}}" onload="this.media=&#39;all&#39;" rel="stylesheet" media="all" />

        <!-- SINGLE-PAGE CSS -->
        <link href="{{asset('theme/cst/assets/frontend/cst/main.css')}}" rel="stylesheet" type="text/css" />
        <!-- P-scroll bar css-->
        <link href="{{asset('theme/cst/assets/frontend/cst/perfect-scrollbar.css')}}" rel="stylesheet" />
        <!--- FONT-ICONS CSS -->
        <link href="{{asset('theme/cst/assets/frontend/cst/icons.css')}}" rel="stylesheet" />
        <link href="{{asset('theme/cst/assets/frontend/cst/mutasil-service.css')}}" rel="stylesheet" />
        <!-- INTERNAL SELECT2 CSS -->
        <link href="{{asset('theme/cst/assets/frontend/cst/select2.min.css')}}" rel="stylesheet" />
        <!-- MULTI SELECT CSS -->
        <link rel="stylesheet" href="{{asset('theme/cst/assets/frontend/cst/multiple-select.css')}}" />
        <!-- INTERNAL Fancy File Upload css -->
        <link href="{{asset('theme/cst/assets/frontend/cst/fancy_fileupload.css')}}" rel="stylesheet" />
        <!--SWEET ALERT CSS-->
        <link href="{{asset('theme/cst/assets/frontend/cst/sweetalert.css')}}" rel="stylesheet" />
        <link href="{{asset('theme/cst/assets/frontend/cst/sweetalert2.min.css')}}" rel="stylesheet" />
        <!--Greedy Nav CSS-->
        <link href="{{asset('theme/cst/assets/frontend/cst/greedy-nav.css')}}" rel="stylesheet" />
        <!-- INTERNAL Notifications  Css -->
        <link href="{{asset('theme/cst/assets/frontend/cst/light-theme.min.css')}}" rel="stylesheet" />
        <!-- INTERNAL Datepicker -->
        <link rel="stylesheet" href="{{asset('theme/cst/assets/frontend/cst/bootstrap-datetimepicker.min.css')}}" />
        <link href="{{asset('theme/cst/assets/frontend/cst/smoke.min.css')}}" rel="stylesheet" />
        <!-- INTERNAL Fancy File Upload css -->
        <link href="{{asset('theme/cst/assets/frontend/cst/fileupload.css')}}" rel="stylesheet" />
        <!-- INTERNAL Fancy File Upload css -->
        <link href="{{asset('theme/cst/assets/frontend/cst/fancy_fileupload.css')}}" rel="stylesheet" />
        <!-- INTERNAL DateRangePicker -->
        <link rel="stylesheet" href="{{asset('theme/cst/assets/frontend/cst/daterangepicker.css')}}" />
        <!-- SimpleBar Css -->
        <link href="{{asset('theme/cst/assets/frontend/cst/simplebar.css')}}" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="{{asset('theme/cst/assets/frontend/cst/style_new.min.css')}}" rel="stylesheet" />
        <link href="{{asset('theme/cst/assets/frontend/cst/style.min.css')}}" rel="stylesheet" />
        <link href="{{asset('theme/cst/assets/frontend/cst/font-awesome.min.css')}}" onload="this.media;" rel="stylesheet" media="all" />

        <!-- JQUERY JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/jquery.min.js.download')}}"></script>
        <!-- <script src="{{asset('theme/cst/assets/frontend/cst/app.js.download')}}" async=""></script> -->
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css2?family=Almarai&display=swap);
        </style>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap);
        </style>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css2?family=Playfair + Display&display=swap);
        </style>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css2?family=Amaranth&display=swap);
        </style>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css2?family=Open + Sans&display=swap);
        </style>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css2?family=Noto + Kufi + Arabic&display=swap);
        </style>
        <style type="text/css">
            @import url(https://fonts.cdnfonts.com/css/codec-pro);
        </style>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css2?family=Bebas + Neue&display=swap);
        </style>
        <style type="text/css">

            #labibaWebBotDiv :root {
                --blue: #007bff;
                --indigo: #6610f2;
                --purple: #6f42c1;
                --pink: #e83e8c;
                --red: #dc3545;
                --orange: #fd7e14;
                --yellow: #ffc107;
                --green: #28a745;
                --teal: #20c997;
                --cyan: #17a2b8;
                --white: #fff;
                --gray: #6c757d;
                --gray-dark: #343a40;
                --primary: #007bff;
                --secondary: #6c757d;
                --success: #28a745;
                --info: #17a2b8;
                --warning: #ffc107;
                --danger: #dc3545;
                --light: #f8f9fa;
                --dark: #343a40;
                --breakpoint-xs: 0;
                --breakpoint-sm: 576px;
                --breakpoint-md: 768px;
                --breakpoint-lg: 992px;
                --breakpoint-xl: 1200px;
                --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Loew-Next-Arabic-Medium", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Loew-Next-Arabic-Medium Emoji",
                    "Loew-Next-Arabic-Medium Symbol", "Noto Color Emoji";
                --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            }
            #labibaWebBotDiv *,
            #labibaWebBotDiv :after,
            #labibaWebBotDiv :before {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            #labibaWebBotDiv html {
                font-family: sans-serif;
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
                -webkit-tap-highlight-color: transparent;
            }
            #labibaWebBotDiv article,
            #labibaWebBotDiv aside,
            #labibaWebBotDiv figcaption,
            #labibaWebBotDiv figure,
            #labibaWebBotDiv footer,
            #labibaWebBotDiv header,
            #labibaWebBotDiv hgroup,
            #labibaWebBotDiv main,
            #labibaWebBotDiv nav,
            #labibaWebBotDiv section {
                display: block;
            }
            #labibaWebBotDiv body {
                margin: 0;
                font-family: -apple-system, BlinkMacSystemFont, Loew-Next-Arabic-Medium, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
                background-color: #fff;
            }
            #labibaWebBotDiv [tabindex="-1"]:focus:not(:focus-visible) {
                outline: 0 !important;
            }
            #labibaWebBotDiv hr {
                -webkit-box-sizing: content-box;
                box-sizing: content-box;
                height: 0;
                overflow: visible;
            }
            #labibaWebBotDiv h1,
            #labibaWebBotDiv h2,
            #labibaWebBotDiv h3,
            #labibaWebBotDiv h4,
            #labibaWebBotDiv h5,
            #labibaWebBotDiv h6 {
                margin-top: 0;
                margin-bottom: 0.5rem;
            }
            #labibaWebBotDiv p {
                margin-top: 0;
                margin-bottom: 1rem;
            }
            #labibaWebBotDiv abbr[data-original-title],
            #labibaWebBotDiv abbr[title] {
                text-decoration: underline;
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
                cursor: help;
                border-bottom: 0;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
            }
            #labibaWebBotDiv address {
                margin-bottom: 1rem;
                font-style: normal;
                line-height: inherit;
            }
            #labibaWebBotDiv dl,
            #labibaWebBotDiv ol,
            #labibaWebBotDiv ul {
                margin-top: 0;
                margin-bottom: 1rem;
            }
            #labibaWebBotDiv ol ol,
            #labibaWebBotDiv ol ul,
            #labibaWebBotDiv ul ol,
            #labibaWebBotDiv ul ul {
                margin-bottom: 0;
            }
            #labibaWebBotDiv dt {
                font-weight: 700;
            }
            #labibaWebBotDiv dd {
                margin-bottom: 0.5rem;
                margin-left: 0;
            }
            #labibaWebBotDiv blockquote {
                margin: 0 0 1rem;
            }
            #labibaWebBotDiv b,
            #labibaWebBotDiv strong {
                font-weight: bolder;
            }
            #labibaWebBotDiv small {
                font-size: 80%;
            }
            #labibaWebBotDiv sub,
            #labibaWebBotDiv sup {
                position: relative;
                font-size: 75%;
                line-height: 0;
                vertical-align: baseline;
            }
            #labibaWebBotDiv sub {
                bottom: -0.25em;
            }
            #labibaWebBotDiv sup {
                top: -0.5em;
            }
            #labibaWebBotDiv a {
                color: #007bff;
                text-decoration: none;
                background-color: transparent;
            }
            #labibaWebBotDiv a:hover {
                color: #0056b3;
                text-decoration: underline;
            }
            #labibaWebBotDiv a:not([href]),
            #labibaWebBotDiv a:not([href]):hover {
                color: inherit;
                text-decoration: none;
            }
            #labibaWebBotDiv code,
            #labibaWebBotDiv kbd,
            #labibaWebBotDiv pre,
            #labibaWebBotDiv samp {
                font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
                font-size: 1em;
            }
            #labibaWebBotDiv pre {
                margin-top: 0;
                margin-bottom: 1rem;
                overflow: auto;
            }
            #labibaWebBotDiv figure {
                margin: 0 0 1rem;
            }
            #labibaWebBotDiv img {
                vertical-align: middle;
                border-style: none;
                display: unset;
            }
            #labibaWebBotDiv svg {
                overflow: hidden;
                vertical-align: middle;
            }
            #labibaWebBotDiv table {
                border-collapse: collapse;
            }
            #labibaWebBotDiv caption {
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
                color: #6c757d;
                text-align: left;
                caption-side: bottom;
            }
            #labibaWebBotDiv th {
                text-align: inherit;
            }
            #labibaWebBotDiv label {
                display: inline-block;
                margin-bottom: 0.5rem;
            }
            #labibaWebBotDiv button {
                border-radius: 0;
            }
            #labibaWebBotDiv button:focus {
                outline: 1px dotted;
                outline: 5px auto -webkit-focus-ring-color;
            }
            #labibaWebBotDiv button,
            #labibaWebBotDiv input,
            #labibaWebBotDiv optgroup,
            #labibaWebBotDiv select,
            #labibaWebBotDiv textarea {
                margin: 0;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
            }
            #labibaWebBotDiv button,
            #labibaWebBotDiv input {
                overflow: visible;
            }
            #labibaWebBotDiv button,
            #labibaWebBotDiv select {
                text-transform: none;
            }
            #labibaWebBotDiv select {
                word-wrap: normal;
            }
            #labibaWebBotDiv [type="button"],
            #labibaWebBotDiv [type="reset"],
            #labibaWebBotDiv [type="submit"],
            /* #labibaWebBotDiv button {
                -webkit-appearance: button;
            } */
            #labibaWebBotDiv [type="button"]:not(:disabled),
            #labibaWebBotDiv [type="reset"]:not(:disabled),
            #labibaWebBotDiv [type="submit"]:not(:disabled),
            #labibaWebBotDiv button:not(:disabled) {
                cursor: pointer;
            }
            #labibaWebBotDiv [type="button"]::-moz-focus-inner,
            #labibaWebBotDiv [type="reset"]::-moz-focus-inner,
            #labibaWebBotDiv [type="submit"]::-moz-focus-inner,
            #labibaWebBotDiv button::-moz-focus-inner {
                padding: 0;
                border-style: none;
            }
            #labibaWebBotDiv input[type="checkbox"],
            #labibaWebBotDiv input[type="radio"] {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                padding: 0;
            }
            /* #labibaWebBotDiv input[type="date"],
            #labibaWebBotDiv input[type="datetime-local"],
            #labibaWebBotDiv input[type="month"],
            #labibaWebBotDiv input[type="time"] {
                -webkit-appearance: listbox;
            } */
            #labibaWebBotDiv textarea {
                overflow: auto;
                resize: vertical;
            }
            #labibaWebBotDiv fieldset {
                min-width: 0;
                padding: 0;
                margin: 0;
                border: 0;
            }
            #labibaWebBotDiv legend {
                display: block;
                width: 100%;
                max-width: 100%;
                padding: 0;
                margin-bottom: 0.5rem;
                font-size: 1.5rem;
                line-height: inherit;
                color: inherit;
                white-space: normal;
            }
            #labibaWebBotDiv progress {
                vertical-align: baseline;
            }
            #labibaWebBotDiv [type="number"]::-webkit-inner-spin-button,
            #labibaWebBotDiv [type="number"]::-webkit-outer-spin-button {
                height: auto;
            }
            #labibaWebBotDiv [type="search"] {
                outline-offset: -2px;
                /* -webkit-appearance: none; */
            }
            #labibaWebBotDiv [type="search"]::-webkit-search-decoration {
                -webkit-appearance: none;
            }
            #labibaWebBotDiv ::-webkit-file-upload-button {
                font: inherit;
                -webkit-appearance: button;
            }
            #labibaWebBotDiv output {
                display: inline-block;
            }
            #labibaWebBotDiv summary {
                display: list-item;
                cursor: pointer;
            }
            #labibaWebBotDiv template {
                display: none;
            }
            #labibaWebBotDiv [hidden] {
                display: none !important;
            }
            #labibaWebBotDiv .h1,
            #labibaWebBotDiv .h2,
            #labibaWebBotDiv .h3,
            #labibaWebBotDiv .h4,
            #labibaWebBotDiv .h5,
            #labibaWebBotDiv .h6,
            #labibaWebBotDiv h1,
            #labibaWebBotDiv h2,
            #labibaWebBotDiv h3,
            #labibaWebBotDiv h4,
            #labibaWebBotDiv h5,
            #labibaWebBotDiv h6 {
                margin-bottom: 0.5rem;
                font-weight: 500;
                line-height: 1.2;
            }
            #labibaWebBotDiv .h1,
            #labibaWebBotDiv h1 {
                font-size: 2.5rem;
            }
            #labibaWebBotDiv .h2,
            #labibaWebBotDiv h2 {
                font-size: 2rem;
            }
            #labibaWebBotDiv .h3,
            #labibaWebBotDiv h3 {
                font-size: 1.75rem;
            }
            #labibaWebBotDiv .h4,
            #labibaWebBotDiv h4 {
                font-size: 1.5rem;
            }
            #labibaWebBotDiv .h5,
            #labibaWebBotDiv h5 {
                font-size: 1.25rem;
            }
            #labibaWebBotDiv .h6,
            #labibaWebBotDiv h6 {
                font-size: 1rem;
            }
            #labibaWebBotDiv .lead {
                font-size: 1.25rem;
                font-weight: 300;
            }
            #labibaWebBotDiv .display-1 {
                font-size: 6rem;
                font-weight: 300;
                line-height: 1.2;
            }
            #labibaWebBotDiv .display-2 {
                font-size: 5.5rem;
                font-weight: 300;
                line-height: 1.2;
            }
            #labibaWebBotDiv .display-3 {
                font-size: 4.5rem;
                font-weight: 300;
                line-height: 1.2;
            }
            #labibaWebBotDiv .display-4 {
                font-size: 3.5rem;
                font-weight: 300;
                line-height: 1.2;
            }
            #labibaWebBotDiv hr {
                margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            #labibaWebBotDiv .small,
            #labibaWebBotDiv small {
                font-size: 80%;
                font-weight: 400;
            }
            #labibaWebBotDiv .mark,
            #labibaWebBotDiv mark {
                padding: 0.2em;
                background-color: #fcf8e3;
            }
            #labibaWebBotDiv .list-inline,
            #labibaWebBotDiv .list-unstyled {
                padding-left: 0;
                list-style: none;
            }
            #labibaWebBotDiv .list-inline-item {
                display: inline-block;
            }
            #labibaWebBotDiv .list-inline-item:not(:last-child) {
                margin-right: 0.5rem;
            }
            #labibaWebBotDiv .initialism {
                font-size: 90%;
                text-transform: uppercase;
            }
            #labibaWebBotDiv .blockquote {
                margin-bottom: 1rem;
                font-size: 1.25rem;
            }
            #labibaWebBotDiv .blockquote-footer {
                display: block;
                font-size: 80%;
                color: #6c757d;
            }
            #labibaWebBotDiv .blockquote-footer:before {
                content: "\2014\A0";
            }
            #labibaWebBotDiv .img-fluid {
                max-width: 100%;
                height: auto;
            }
            #labibaWebBotDiv .img-thumbnail {
                padding: 0.25rem;
                background-color: #fff;
                border: 1px solid #dee2e6;
                border-radius: 0.25rem;
                max-width: 100%;
                height: auto;
            }
            #labibaWebBotDiv .figure {
                display: inline-block;
            }
            #labibaWebBotDiv .figure-img {
                margin-bottom: 0.5rem;
                line-height: 1;
            }
            #labibaWebBotDiv .figure-caption {
                font-size: 90%;
                color: #6c757d;
            }
            #labibaWebBotDiv code {
                font-size: 87.5%;
                color: #e83e8c;
                word-wrap: break-word;
            }
            a > #labibaWebBotDiv code {
                color: inherit;
            }
            #labibaWebBotDiv kbd {
                padding: 0.2rem 0.4rem;
                font-size: 87.5%;
                color: #fff;
                background-color: #212529;
                border-radius: 0.2rem;
            }
            #labibaWebBotDiv kbd kbd {
                padding: 0;
                font-size: 100%;
                font-weight: 700;
            }
            #labibaWebBotDiv pre {
                display: block;
                font-size: 87.5%;
                color: #212529;
            }
            #labibaWebBotDiv pre code {
                font-size: inherit;
                color: inherit;
                word-break: normal;
            }
            #labibaWebBotDiv .pre-scrollable {
                max-height: 340px;
                overflow-y: scroll;
            }
            #labibaWebBotDiv .container {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .container {
                    max-width: 540px;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .container {
                    max-width: 720px;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .container {
                    max-width: 960px;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .container {
                    max-width: 1140px;
                }
            }
            #labibaWebBotDiv #labibaWebBotDiv .container-lg,
            #labibaWebBotDiv #labibaWebBotDiv .container-md,
            #labibaWebBotDiv #labibaWebBotDiv .container-sm,
            #labibaWebBotDiv #labibaWebBotDiv .container-xl,
            #labibaWebBotDiv .container-fluid {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv \%responsive-container {
                    max-width: 540px;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv \%responsive-container {
                    max-width: 720px;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv \%responsive-container {
                    max-width: 960px;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv \%responsive-container {
                    max-width: 1140px;
                }
            }
            #labibaWebBotDiv .row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }
            #labibaWebBotDiv .no-gutters {
                margin-right: 0;
                margin-left: 0;
            }
            #labibaWebBotDiv .no-gutters > .col,
            #labibaWebBotDiv .no-gutters > [class*="col-"] {
                padding-right: 0;
                padding-left: 0;
            }
            #labibaWebBotDiv \%grid-column {
                position: relative;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
            }
            #labibaWebBotDiv .col {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }
            #labibaWebBotDiv .row-cols-1 > * {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
            #labibaWebBotDiv .row-cols-2 > * {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
            #labibaWebBotDiv .row-cols-3 > * {
                -ms-flex: 0 0 33.33333333%;
                flex: 0 0 33.33333333%;
                max-width: 33.33333333%;
            }
            #labibaWebBotDiv .row-cols-4 > * {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
            #labibaWebBotDiv .row-cols-5 > * {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
            #labibaWebBotDiv .row-cols-6 > * {
                -ms-flex: 0 0 16.66666667%;
                flex: 0 0 16.66666667%;
                max-width: 16.66666667%;
            }
            #labibaWebBotDiv .col-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }
            #labibaWebBotDiv .col-1 {
                -ms-flex: 0 0 8.33333333%;
                flex: 0 0 8.33333333%;
                max-width: 8.33333333%;
            }
            #labibaWebBotDiv .col-2 {
                -ms-flex: 0 0 16.66666667%;
                flex: 0 0 16.66666667%;
                max-width: 16.66666667%;
            }
            #labibaWebBotDiv .col-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
            #labibaWebBotDiv .col-4 {
                -ms-flex: 0 0 33.33333333%;
                flex: 0 0 33.33333333%;
                max-width: 33.33333333%;
            }
            #labibaWebBotDiv .col-5 {
                -ms-flex: 0 0 41.66666667%;
                flex: 0 0 41.66666667%;
                max-width: 41.66666667%;
            }
            #labibaWebBotDiv .col-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
            #labibaWebBotDiv .col-7 {
                -ms-flex: 0 0 58.33333333%;
                flex: 0 0 58.33333333%;
                max-width: 58.33333333%;
            }
            #labibaWebBotDiv .col-8 {
                -ms-flex: 0 0 66.66666667%;
                flex: 0 0 66.66666667%;
                max-width: 66.66666667%;
            }
            #labibaWebBotDiv .col-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }
            #labibaWebBotDiv .col-10 {
                -ms-flex: 0 0 83.33333333%;
                flex: 0 0 83.33333333%;
                max-width: 83.33333333%;
            }
            #labibaWebBotDiv .col-11 {
                -ms-flex: 0 0 91.66666667%;
                flex: 0 0 91.66666667%;
                max-width: 91.66666667%;
            }
            #labibaWebBotDiv .col-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
            #labibaWebBotDiv .order-first {
                -ms-flex-order: -1;
                order: -1;
            }
            #labibaWebBotDiv .order-last {
                -ms-flex-order: 13;
                order: 13;
            }
            #labibaWebBotDiv .order-0 {
                -ms-flex-order: 0;
                order: 0;
            }
            #labibaWebBotDiv .order-1 {
                -ms-flex-order: 1;
                order: 1;
            }
            #labibaWebBotDiv .order-2 {
                -ms-flex-order: 2;
                order: 2;
            }
            #labibaWebBotDiv .order-3 {
                -ms-flex-order: 3;
                order: 3;
            }
            #labibaWebBotDiv .order-4 {
                -ms-flex-order: 4;
                order: 4;
            }
            #labibaWebBotDiv .order-5 {
                -ms-flex-order: 5;
                order: 5;
            }
            #labibaWebBotDiv .order-6 {
                -ms-flex-order: 6;
                order: 6;
            }
            #labibaWebBotDiv .order-7 {
                -ms-flex-order: 7;
                order: 7;
            }
            #labibaWebBotDiv .order-8 {
                -ms-flex-order: 8;
                order: 8;
            }
            #labibaWebBotDiv .order-9 {
                -ms-flex-order: 9;
                order: 9;
            }
            #labibaWebBotDiv .order-10 {
                -ms-flex-order: 10;
                order: 10;
            }
            #labibaWebBotDiv .order-11 {
                -ms-flex-order: 11;
                order: 11;
            }
            #labibaWebBotDiv .order-12 {
                -ms-flex-order: 12;
                order: 12;
            }
            #labibaWebBotDiv .offset-1 {
                margin-left: 8.33333333%;
            }
            #labibaWebBotDiv .offset-2 {
                margin-left: 16.66666667%;
            }
            #labibaWebBotDiv .offset-3 {
                margin-left: 25%;
            }
            #labibaWebBotDiv .offset-4 {
                margin-left: 33.33333333%;
            }
            #labibaWebBotDiv .offset-5 {
                margin-left: 41.66666667%;
            }
            #labibaWebBotDiv .offset-6 {
                margin-left: 50%;
            }
            #labibaWebBotDiv .offset-7 {
                margin-left: 58.33333333%;
            }
            #labibaWebBotDiv .offset-8 {
                margin-left: 66.66666667%;
            }
            #labibaWebBotDiv .offset-9 {
                margin-left: 75%;
            }
            #labibaWebBotDiv .offset-10 {
                margin-left: 83.33333333%;
            }
            #labibaWebBotDiv .offset-11 {
                margin-left: 91.66666667%;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .col-sm {
                    -ms-flex-preferred-size: 0;
                    flex-basis: 0;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-sm-1 > * {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-sm-2 > * {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .row-cols-sm-3 > * {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .row-cols-sm-4 > * {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .row-cols-sm-5 > * {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                #labibaWebBotDiv .row-cols-sm-6 > * {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-sm-auto {
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    width: auto;
                    max-width: 100%;
                }
                #labibaWebBotDiv .col-sm-1 {
                    -ms-flex: 0 0 8.33333333%;
                    flex: 0 0 8.33333333%;
                    max-width: 8.33333333%;
                }
                #labibaWebBotDiv .col-sm-2 {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-sm-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .col-sm-4 {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .col-sm-5 {
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%;
                }
                #labibaWebBotDiv .col-sm-6 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .col-sm-7 {
                    -ms-flex: 0 0 58.33333333%;
                    flex: 0 0 58.33333333%;
                    max-width: 58.33333333%;
                }
                #labibaWebBotDiv .col-sm-8 {
                    -ms-flex: 0 0 66.66666667%;
                    flex: 0 0 66.66666667%;
                    max-width: 66.66666667%;
                }
                #labibaWebBotDiv .col-sm-9 {
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                #labibaWebBotDiv .col-sm-10 {
                    -ms-flex: 0 0 83.33333333%;
                    flex: 0 0 83.33333333%;
                    max-width: 83.33333333%;
                }
                #labibaWebBotDiv .col-sm-11 {
                    -ms-flex: 0 0 91.66666667%;
                    flex: 0 0 91.66666667%;
                    max-width: 91.66666667%;
                }
                #labibaWebBotDiv .col-sm-12 {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .order-sm-first {
                    -ms-flex-order: -1;
                    order: -1;
                }
                #labibaWebBotDiv .order-sm-last {
                    -ms-flex-order: 13;
                    order: 13;
                }
                #labibaWebBotDiv .order-sm-0 {
                    -ms-flex-order: 0;
                    order: 0;
                }
                #labibaWebBotDiv .order-sm-1 {
                    -ms-flex-order: 1;
                    order: 1;
                }
                #labibaWebBotDiv .order-sm-2 {
                    -ms-flex-order: 2;
                    order: 2;
                }
                #labibaWebBotDiv .order-sm-3 {
                    -ms-flex-order: 3;
                    order: 3;
                }
                #labibaWebBotDiv .order-sm-4 {
                    -ms-flex-order: 4;
                    order: 4;
                }
                #labibaWebBotDiv .order-sm-5 {
                    -ms-flex-order: 5;
                    order: 5;
                }
                #labibaWebBotDiv .order-sm-6 {
                    -ms-flex-order: 6;
                    order: 6;
                }
                #labibaWebBotDiv .order-sm-7 {
                    -ms-flex-order: 7;
                    order: 7;
                }
                #labibaWebBotDiv .order-sm-8 {
                    -ms-flex-order: 8;
                    order: 8;
                }
                #labibaWebBotDiv .order-sm-9 {
                    -ms-flex-order: 9;
                    order: 9;
                }
                #labibaWebBotDiv .order-sm-10 {
                    -ms-flex-order: 10;
                    order: 10;
                }
                #labibaWebBotDiv .order-sm-11 {
                    -ms-flex-order: 11;
                    order: 11;
                }
                #labibaWebBotDiv .order-sm-12 {
                    -ms-flex-order: 12;
                    order: 12;
                }
                #labibaWebBotDiv .offset-sm-0 {
                    margin-left: 0;
                }
                #labibaWebBotDiv .offset-sm-1 {
                    margin-left: 8.33333333%;
                }
                #labibaWebBotDiv .offset-sm-2 {
                    margin-left: 16.66666667%;
                }
                #labibaWebBotDiv .offset-sm-3 {
                    margin-left: 25%;
                }
                #labibaWebBotDiv .offset-sm-4 {
                    margin-left: 33.33333333%;
                }
                #labibaWebBotDiv .offset-sm-5 {
                    margin-left: 41.66666667%;
                }
                #labibaWebBotDiv .offset-sm-6 {
                    margin-left: 50%;
                }
                #labibaWebBotDiv .offset-sm-7 {
                    margin-left: 58.33333333%;
                }
                #labibaWebBotDiv .offset-sm-8 {
                    margin-left: 66.66666667%;
                }
                #labibaWebBotDiv .offset-sm-9 {
                    margin-left: 75%;
                }
                #labibaWebBotDiv .offset-sm-10 {
                    margin-left: 83.33333333%;
                }
                #labibaWebBotDiv .offset-sm-11 {
                    margin-left: 91.66666667%;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .col-md {
                    -ms-flex-preferred-size: 0;
                    flex-basis: 0;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-md-1 > * {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-md-2 > * {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .row-cols-md-3 > * {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .row-cols-md-4 > * {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .row-cols-md-5 > * {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                #labibaWebBotDiv .row-cols-md-6 > * {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-md-auto {
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    width: auto;
                    max-width: 100%;
                }
                #labibaWebBotDiv .col-md-1 {
                    -ms-flex: 0 0 8.33333333%;
                    flex: 0 0 8.33333333%;
                    max-width: 8.33333333%;
                }
                #labibaWebBotDiv .col-md-2 {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-md-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .col-md-4 {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .col-md-5 {
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%;
                }
                #labibaWebBotDiv .col-md-6 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .col-md-7 {
                    -ms-flex: 0 0 58.33333333%;
                    flex: 0 0 58.33333333%;
                    max-width: 58.33333333%;
                }
                #labibaWebBotDiv .col-md-8 {
                    -ms-flex: 0 0 66.66666667%;
                    flex: 0 0 66.66666667%;
                    max-width: 66.66666667%;
                }
                #labibaWebBotDiv .col-md-9 {
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                #labibaWebBotDiv .col-md-10 {
                    -ms-flex: 0 0 83.33333333%;
                    flex: 0 0 83.33333333%;
                    max-width: 83.33333333%;
                }
                #labibaWebBotDiv .col-md-11 {
                    -ms-flex: 0 0 91.66666667%;
                    flex: 0 0 91.66666667%;
                    max-width: 91.66666667%;
                }
                #labibaWebBotDiv .col-md-12 {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .order-md-first {
                    -ms-flex-order: -1;
                    order: -1;
                }
                #labibaWebBotDiv .order-md-last {
                    -ms-flex-order: 13;
                    order: 13;
                }
                #labibaWebBotDiv .order-md-0 {
                    -ms-flex-order: 0;
                    order: 0;
                }
                #labibaWebBotDiv .order-md-1 {
                    -ms-flex-order: 1;
                    order: 1;
                }
                #labibaWebBotDiv .order-md-2 {
                    -ms-flex-order: 2;
                    order: 2;
                }
                #labibaWebBotDiv .order-md-3 {
                    -ms-flex-order: 3;
                    order: 3;
                }
                #labibaWebBotDiv .order-md-4 {
                    -ms-flex-order: 4;
                    order: 4;
                }
                #labibaWebBotDiv .order-md-5 {
                    -ms-flex-order: 5;
                    order: 5;
                }
                #labibaWebBotDiv .order-md-6 {
                    -ms-flex-order: 6;
                    order: 6;
                }
                #labibaWebBotDiv .order-md-7 {
                    -ms-flex-order: 7;
                    order: 7;
                }
                #labibaWebBotDiv .order-md-8 {
                    -ms-flex-order: 8;
                    order: 8;
                }
                #labibaWebBotDiv .order-md-9 {
                    -ms-flex-order: 9;
                    order: 9;
                }
                #labibaWebBotDiv .order-md-10 {
                    -ms-flex-order: 10;
                    order: 10;
                }
                #labibaWebBotDiv .order-md-11 {
                    -ms-flex-order: 11;
                    order: 11;
                }
                #labibaWebBotDiv .order-md-12 {
                    -ms-flex-order: 12;
                    order: 12;
                }
                #labibaWebBotDiv .offset-md-0 {
                    margin-left: 0;
                }
                #labibaWebBotDiv .offset-md-1 {
                    margin-left: 8.33333333%;
                }
                #labibaWebBotDiv .offset-md-2 {
                    margin-left: 16.66666667%;
                }
                #labibaWebBotDiv .offset-md-3 {
                    margin-left: 25%;
                }
                #labibaWebBotDiv .offset-md-4 {
                    margin-left: 33.33333333%;
                }
                #labibaWebBotDiv .offset-md-5 {
                    margin-left: 41.66666667%;
                }
                #labibaWebBotDiv .offset-md-6 {
                    margin-left: 50%;
                }
                #labibaWebBotDiv .offset-md-7 {
                    margin-left: 58.33333333%;
                }
                #labibaWebBotDiv .offset-md-8 {
                    margin-left: 66.66666667%;
                }
                #labibaWebBotDiv .offset-md-9 {
                    margin-left: 75%;
                }
                #labibaWebBotDiv .offset-md-10 {
                    margin-left: 83.33333333%;
                }
                #labibaWebBotDiv .offset-md-11 {
                    margin-left: 91.66666667%;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .col-lg {
                    max-width: 100%;
                    display: block;
                }
                #labibaWebBotDiv .row-cols-lg-1 > * {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-lg-2 > * {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .row-cols-lg-3 > * {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .row-cols-lg-4 > * {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .row-cols-lg-5 > * {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                #labibaWebBotDiv .row-cols-lg-6 > * {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-lg-auto {
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    width: auto;
                    max-width: 100%;
                }
                #labibaWebBotDiv .col-lg-1 {
                    -ms-flex: 0 0 8.33333333%;
                    flex: 0 0 8.33333333%;
                    max-width: 8.33333333%;
                }
                #labibaWebBotDiv .col-lg-2 {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-lg-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .col-lg-4 {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .col-lg-5 {
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%;
                }
                #labibaWebBotDiv .col-lg-6 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .col-lg-7 {
                    -ms-flex: 0 0 58.33333333%;
                    flex: 0 0 58.33333333%;
                    max-width: 58.33333333%;
                }
                #labibaWebBotDiv .col-lg-8 {
                    -ms-flex: 0 0 66.66666667%;
                    flex: 0 0 66.66666667%;
                    max-width: 66.66666667%;
                }
                #labibaWebBotDiv .col-lg-9 {
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                #labibaWebBotDiv .col-lg-10 {
                    -ms-flex: 0 0 83.33333333%;
                    flex: 0 0 83.33333333%;
                    max-width: 83.33333333%;
                }
                #labibaWebBotDiv .col-lg-11 {
                    -ms-flex: 0 0 91.66666667%;
                    flex: 0 0 91.66666667%;
                    max-width: 91.66666667%;
                }
                #labibaWebBotDiv .col-lg-12 {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .order-lg-first {
                    -ms-flex-order: -1;
                    order: -1;
                }
                #labibaWebBotDiv .order-lg-last {
                    -ms-flex-order: 13;
                    order: 13;
                }
                #labibaWebBotDiv .order-lg-0 {
                    -ms-flex-order: 0;
                    order: 0;
                }
                #labibaWebBotDiv .order-lg-1 {
                    -ms-flex-order: 1;
                    order: 1;
                }
                #labibaWebBotDiv .order-lg-2 {
                    -ms-flex-order: 2;
                    order: 2;
                }
                #labibaWebBotDiv .order-lg-3 {
                    -ms-flex-order: 3;
                    order: 3;
                }
                #labibaWebBotDiv .order-lg-4 {
                    -ms-flex-order: 4;
                    order: 4;
                }
                #labibaWebBotDiv .order-lg-5 {
                    -ms-flex-order: 5;
                    order: 5;
                }
                #labibaWebBotDiv .order-lg-6 {
                    -ms-flex-order: 6;
                    order: 6;
                }
                #labibaWebBotDiv .order-lg-7 {
                    -ms-flex-order: 7;
                    order: 7;
                }
                #labibaWebBotDiv .order-lg-8 {
                    -ms-flex-order: 8;
                    order: 8;
                }
                #labibaWebBotDiv .order-lg-9 {
                    -ms-flex-order: 9;
                    order: 9;
                }
                #labibaWebBotDiv .order-lg-10 {
                    -ms-flex-order: 10;
                    order: 10;
                }
                #labibaWebBotDiv .order-lg-11 {
                    -ms-flex-order: 11;
                    order: 11;
                }
                #labibaWebBotDiv .order-lg-12 {
                    -ms-flex-order: 12;
                    order: 12;
                }
                #labibaWebBotDiv .offset-lg-0 {
                    margin-left: 0;
                }
                #labibaWebBotDiv .offset-lg-1 {
                    margin-left: 8.33333333%;
                }
                #labibaWebBotDiv .offset-lg-2 {
                    margin-left: 16.66666667%;
                }
                #labibaWebBotDiv .offset-lg-3 {
                    margin-left: 25%;
                }
                #labibaWebBotDiv .offset-lg-4 {
                    margin-left: 33.33333333%;
                }
                #labibaWebBotDiv .offset-lg-5 {
                    margin-left: 41.66666667%;
                }
                #labibaWebBotDiv .offset-lg-6 {
                    margin-left: 50%;
                }
                #labibaWebBotDiv .offset-lg-7 {
                    margin-left: 58.33333333%;
                }
                #labibaWebBotDiv .offset-lg-8 {
                    margin-left: 66.66666667%;
                }
                #labibaWebBotDiv .offset-lg-9 {
                    margin-left: 75%;
                }
                #labibaWebBotDiv .offset-lg-10 {
                    margin-left: 83.33333333%;
                }
                #labibaWebBotDiv .offset-lg-11 {
                    margin-left: 91.66666667%;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .col-xl {
                    -ms-flex-preferred-size: 0;
                    flex-basis: 0;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-xl-1 > * {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-xl-2 > * {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .row-cols-xl-3 > * {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .row-cols-xl-4 > * {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .row-cols-xl-5 > * {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                #labibaWebBotDiv .row-cols-xl-6 > * {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-xl-auto {
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    width: auto;
                    max-width: 100%;
                }
                #labibaWebBotDiv .col-xl-1 {
                    -ms-flex: 0 0 8.33333333%;
                    flex: 0 0 8.33333333%;
                    max-width: 8.33333333%;
                }
                #labibaWebBotDiv .col-xl-2 {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-xl-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .col-xl-4 {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .col-xl-5 {
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%;
                }
                #labibaWebBotDiv .col-xl-6 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .col-xl-7 {
                    -ms-flex: 0 0 58.33333333%;
                    flex: 0 0 58.33333333%;
                    max-width: 58.33333333%;
                }
                #labibaWebBotDiv .col-xl-8 {
                    -ms-flex: 0 0 66.66666667%;
                    flex: 0 0 66.66666667%;
                    max-width: 66.66666667%;
                }
                #labibaWebBotDiv .col-xl-9 {
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                #labibaWebBotDiv .col-xl-10 {
                    -ms-flex: 0 0 83.33333333%;
                    flex: 0 0 83.33333333%;
                    max-width: 83.33333333%;
                }
                #labibaWebBotDiv .col-xl-11 {
                    -ms-flex: 0 0 91.66666667%;
                    flex: 0 0 91.66666667%;
                    max-width: 91.66666667%;
                }
                #labibaWebBotDiv .col-xl-12 {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .order-xl-first {
                    -ms-flex-order: -1;
                    order: -1;
                }
                #labibaWebBotDiv .order-xl-last {
                    -ms-flex-order: 13;
                    order: 13;
                }
                #labibaWebBotDiv .order-xl-0 {
                    -ms-flex-order: 0;
                    order: 0;
                }
                #labibaWebBotDiv .order-xl-1 {
                    -ms-flex-order: 1;
                    order: 1;
                }
                #labibaWebBotDiv .order-xl-2 {
                    -ms-flex-order: 2;
                    order: 2;
                }
                #labibaWebBotDiv .order-xl-3 {
                    -ms-flex-order: 3;
                    order: 3;
                }
                #labibaWebBotDiv .order-xl-4 {
                    -ms-flex-order: 4;
                    order: 4;
                }
                #labibaWebBotDiv .order-xl-5 {
                    -ms-flex-order: 5;
                    order: 5;
                }
                #labibaWebBotDiv .order-xl-6 {
                    -ms-flex-order: 6;
                    order: 6;
                }
                #labibaWebBotDiv .order-xl-7 {
                    -ms-flex-order: 7;
                    order: 7;
                }
                #labibaWebBotDiv .order-xl-8 {
                    -ms-flex-order: 8;
                    order: 8;
                }
                #labibaWebBotDiv .order-xl-9 {
                    -ms-flex-order: 9;
                    order: 9;
                }
                #labibaWebBotDiv .order-xl-10 {
                    -ms-flex-order: 10;
                    order: 10;
                }
                #labibaWebBotDiv .order-xl-11 {
                    -ms-flex-order: 11;
                    order: 11;
                }
                #labibaWebBotDiv .order-xl-12 {
                    -ms-flex-order: 12;
                    order: 12;
                }
                #labibaWebBotDiv .offset-xl-0 {
                    margin-left: 0;
                }
                #labibaWebBotDiv .offset-xl-1 {
                    margin-left: 8.33333333%;
                }
                #labibaWebBotDiv .offset-xl-2 {
                    margin-left: 16.66666667%;
                }
                #labibaWebBotDiv .offset-xl-3 {
                    margin-left: 25%;
                }
                #labibaWebBotDiv .offset-xl-4 {
                    margin-left: 33.33333333%;
                }
                #labibaWebBotDiv .offset-xl-5 {
                    margin-left: 41.66666667%;
                }
                #labibaWebBotDiv .offset-xl-6 {
                    margin-left: 50%;
                }
                #labibaWebBotDiv .offset-xl-7 {
                    margin-left: 58.33333333%;
                }
                #labibaWebBotDiv .offset-xl-8 {
                    margin-left: 66.66666667%;
                }
                #labibaWebBotDiv .offset-xl-9 {
                    margin-left: 75%;
                }
                #labibaWebBotDiv .offset-xl-10 {
                    margin-left: 83.33333333%;
                }
                #labibaWebBotDiv .offset-xl-11 {
                    margin-left: 91.66666667%;
                }
            }
            #labibaWebBotDiv .table {
                width: 100%;
                margin-bottom: 1rem;
                color: #212529;
            }
            #labibaWebBotDiv .table td,
            #labibaWebBotDiv .table th {
                padding: 0.75rem;
                vertical-align: top;
                border-top: 1px solid #dee2e6;
            }
            #labibaWebBotDiv .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid #dee2e6;
            }
            #labibaWebBotDiv .table tbody + tbody {
                border-top: 2px solid #dee2e6;
            }
            #labibaWebBotDiv .table-sm td,
            #labibaWebBotDiv .table-sm th {
                padding: 0.3rem;
            }
            #labibaWebBotDiv .table-bordered,
            #labibaWebBotDiv .table-bordered td,
            #labibaWebBotDiv .table-bordered th {
                border: 1px solid #dee2e6;
            }
            #labibaWebBotDiv .table-bordered thead td,
            #labibaWebBotDiv .table-bordered thead th {
                border-bottom-width: 2px;
            }
            #labibaWebBotDiv .table-borderless tbody + tbody,
            #labibaWebBotDiv .table-borderless td,
            #labibaWebBotDiv .table-borderless th,
            #labibaWebBotDiv .table-borderless thead th {
                border: 0;
            }
            #labibaWebBotDiv .table-striped tbody tr:nth-of-type(odd) {
                background-color: rgba(0, 0, 0, 0.05);
            }
            #labibaWebBotDiv .table-hover tbody tr:hover {
                color: #212529;
                background-color: rgba(0, 0, 0, 0.075);
            }
            #labibaWebBotDiv .table-primary,
            #labibaWebBotDiv .table-primary > td,
            #labibaWebBotDiv .table-primary > th {
                background-color: #b8daff;
            }
            #labibaWebBotDiv .table-primary tbody + tbody,
            #labibaWebBotDiv .table-primary td,
            #labibaWebBotDiv .table-primary th,
            #labibaWebBotDiv .table-primary thead th {
                border-color: #7abaff;
            }
            #labibaWebBotDiv .table-hover .table-primary:hover,
            #labibaWebBotDiv .table-hover .table-primary:hover > td,
            #labibaWebBotDiv .table-hover .table-primary:hover > th {
                background-color: #9fcdff;
            }
            #labibaWebBotDiv .table-secondary,
            #labibaWebBotDiv .table-secondary > td,
            #labibaWebBotDiv .table-secondary > th {
                background-color: #d6d8db;
            }
            #labibaWebBotDiv .table-secondary tbody + tbody,
            #labibaWebBotDiv .table-secondary td,
            #labibaWebBotDiv .table-secondary th,
            #labibaWebBotDiv .table-secondary thead th {
                border-color: #b3b7bb;
            }
            #labibaWebBotDiv .table-hover .table-secondary:hover,
            #labibaWebBotDiv .table-hover .table-secondary:hover > td,
            #labibaWebBotDiv .table-hover .table-secondary:hover > th {
                background-color: #c8cbcf;
            }
            #labibaWebBotDiv .table-success,
            #labibaWebBotDiv .table-success > td,
            #labibaWebBotDiv .table-success > th {
                background-color: #c3e6cb;
            }
            #labibaWebBotDiv .table-success tbody + tbody,
            #labibaWebBotDiv .table-success td,
            #labibaWebBotDiv .table-success th,
            #labibaWebBotDiv .table-success thead th {
                border-color: #8fd19e;
            }
            #labibaWebBotDiv .table-hover .table-success:hover,
            #labibaWebBotDiv .table-hover .table-success:hover > td,
            #labibaWebBotDiv .table-hover .table-success:hover > th {
                background-color: #b1dfbb;
            }
            #labibaWebBotDiv .table-info,
            #labibaWebBotDiv .table-info > td,
            #labibaWebBotDiv .table-info > th {
                background-color: #bee5eb;
            }
            #labibaWebBotDiv .table-info tbody + tbody,
            #labibaWebBotDiv .table-info td,
            #labibaWebBotDiv .table-info th,
            #labibaWebBotDiv .table-info thead th {
                border-color: #86cfda;
            }
            #labibaWebBotDiv .table-hover .table-info:hover,
            #labibaWebBotDiv .table-hover .table-info:hover > td,
            #labibaWebBotDiv .table-hover .table-info:hover > th {
                background-color: #abdde5;
            }
            #labibaWebBotDiv .table-warning,
            #labibaWebBotDiv .table-warning > td,
            #labibaWebBotDiv .table-warning > th {
                background-color: #ffeeba;
            }
            #labibaWebBotDiv .table-warning tbody + tbody,
            #labibaWebBotDiv .table-warning td,
            #labibaWebBotDiv .table-warning th,
            #labibaWebBotDiv .table-warning thead th {
                border-color: #ffdf7e;
            }
            #labibaWebBotDiv .table-hover .table-warning:hover,
            #labibaWebBotDiv .table-hover .table-warning:hover > td,
            #labibaWebBotDiv .table-hover .table-warning:hover > th {
                background-color: #ffe8a1;
            }
            #labibaWebBotDiv .table-danger,
            #labibaWebBotDiv .table-danger > td,
            #labibaWebBotDiv .table-danger > th {
                background-color: #f5c6cb;
            }
            #labibaWebBotDiv .table-danger tbody + tbody,
            #labibaWebBotDiv .table-danger td,
            #labibaWebBotDiv .table-danger th,
            #labibaWebBotDiv .table-danger thead th {
                border-color: #ed969e;
            }
            #labibaWebBotDiv .table-hover .table-danger:hover,
            #labibaWebBotDiv .table-hover .table-danger:hover > td,
            #labibaWebBotDiv .table-hover .table-danger:hover > th {
                background-color: #f1b0b7;
            }
            #labibaWebBotDiv .table-light,
            #labibaWebBotDiv .table-light > td,
            #labibaWebBotDiv .table-light > th {
                background-color: #fdfdfe;
            }
            #labibaWebBotDiv .table-light tbody + tbody,
            #labibaWebBotDiv .table-light td,
            #labibaWebBotDiv .table-light th,
            #labibaWebBotDiv .table-light thead th {
                border-color: #fbfcfc;
            }
            #labibaWebBotDiv .table-hover .table-light:hover,
            #labibaWebBotDiv .table-hover .table-light:hover > td,
            #labibaWebBotDiv .table-hover .table-light:hover > th {
                background-color: #ececf5;
            }
            #labibaWebBotDiv .table-dark,
            #labibaWebBotDiv .table-dark > td,
            #labibaWebBotDiv .table-dark > th {
                background-color: #c6c8ca;
            }
            #labibaWebBotDiv .table-dark tbody + tbody,
            #labibaWebBotDiv .table-dark td,
            #labibaWebBotDiv .table-dark th,
            #labibaWebBotDiv .table-dark thead th {
                border-color: #95999c;
            }
            #labibaWebBotDiv .table-hover .table-dark:hover,
            #labibaWebBotDiv .table-hover .table-dark:hover > td,
            #labibaWebBotDiv .table-hover .table-dark:hover > th {
                background-color: #b9bbbe;
            }
            #labibaWebBotDiv .table-active,
            #labibaWebBotDiv .table-active > td,
            #labibaWebBotDiv .table-active > th,
            #labibaWebBotDiv .table-hover .table-active:hover,
            #labibaWebBotDiv .table-hover .table-active:hover > td,
            #labibaWebBotDiv .table-hover .table-active:hover > th {
                background-color: rgba(0, 0, 0, 0.075);
            }
            #labibaWebBotDiv .table .thead-dark th {
                color: #fff;
                background-color: #343a40;
                border-color: #454d55;
            }
            #labibaWebBotDiv .table .thead-light th {
                color: #495057;
                background-color: #e9ecef;
                border-color: #dee2e6;
            }
            #labibaWebBotDiv .table-dark {
                color: #fff;
                background-color: #343a40;
            }
            #labibaWebBotDiv .table-dark td,
            #labibaWebBotDiv .table-dark th,
            #labibaWebBotDiv .table-dark thead th {
                border-color: #454d55;
            }
            #labibaWebBotDiv .table-dark.table-bordered {
                border: 0;
            }
            #labibaWebBotDiv .table-dark.table-striped tbody tr:nth-of-type(odd) {
                background-color: hsla(0, 0%, 100%, 0.05);
            }
            #labibaWebBotDiv .table-dark.table-hover tbody tr:hover {
                color: #fff;
                background-color: hsla(0, 0%, 100%, 0.075);
            }
            @media (max-width: 575.98px) {
                #labibaWebBotDiv .table-responsive-sm {
                    display: block;
                    width: 100%;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }
                #labibaWebBotDiv .table-responsive-sm > .table-bordered {
                    border: 0;
                }
            }
            @media (max-width: 767.98px) {
                #labibaWebBotDiv .table-responsive-md {
                    display: block;
                    width: 100%;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }
                #labibaWebBotDiv .table-responsive-md > .table-bordered {
                    border: 0;
                }
            }
            @media (max-width: 991.98px) {
                #labibaWebBotDiv .table-responsive-lg {
                    display: block;
                    width: 100%;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }
                #labibaWebBotDiv .table-responsive-lg > .table-bordered {
                    border: 0;
                }
            }
            @media (max-width: 1199.98px) {
                #labibaWebBotDiv .table-responsive-xl {
                    display: block;
                    width: 100%;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }
                #labibaWebBotDiv .table-responsive-xl > .table-bordered {
                    border: 0;
                }
            }
            #labibaWebBotDiv .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            #labibaWebBotDiv .table-responsive > .table-bordered {
                border: 0;
            }
            #labibaWebBotDiv .form-control {
                display: block;
                width: 100%;
                height: calc(1.5em + 0.75rem + 2px);
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .form-control {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .form-control::-ms-expand {
                background-color: transparent;
                border: 0;
            }
            #labibaWebBotDiv .form-control:-moz-focusring {
                color: transparent;
                text-shadow: 0 0 0 #495057;
            }
            #labibaWebBotDiv .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: #80bdff;
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .form-control::-webkit-input-placeholder {
                color: #6c757d;
                opacity: 1;
            }
            #labibaWebBotDiv .form-control::-moz-placeholder {
                color: #6c757d;
                opacity: 1;
            }
            #labibaWebBotDiv .form-control::-ms-input-placeholder {
                color: #6c757d;
                opacity: 1;
            }
            #labibaWebBotDiv .form-control::placeholder {
                color: #6c757d;
                opacity: 1;
            }
            #labibaWebBotDiv .form-control:disabled,
            #labibaWebBotDiv .form-control[readonly] {
                background-color: #e9ecef;
                opacity: 1;
            }
            #labibaWebBotDiv select.form-control:focus::-ms-value {
                color: #495057;
                background-color: #fff;
            }
            #labibaWebBotDiv .form-control-file,
            #labibaWebBotDiv .form-control-range {
                display: block;
                width: 100%;
            }
            #labibaWebBotDiv .col-form-label {
                padding-top: calc(0.375rem + 1px);
                padding-bottom: calc(0.375rem + 1px);
                margin-bottom: 0;
                font-size: inherit;
                line-height: 1.5;
            }
            #labibaWebBotDiv .col-form-label-lg {
                padding-top: calc(0.5rem + 1px);
                padding-bottom: calc(0.5rem + 1px);
                font-size: 1.25rem;
                line-height: 1.5;
            }
            #labibaWebBotDiv .col-form-label-sm {
                padding-top: calc(0.25rem + 1px);
                padding-bottom: calc(0.25rem + 1px);
                font-size: 0.875rem;
                line-height: 1.5;
            }
            #labibaWebBotDiv .form-control-plaintext {
                display: block;
                width: 100%;
                padding: 0.375rem 0;
                margin-bottom: 0;
                font-size: 1rem;
                line-height: 1.5;
                color: #212529;
                background-color: transparent;
                border: solid transparent;
                border-width: 1px 0;
            }
            #labibaWebBotDiv .form-control-plaintext.form-control-lg,
            #labibaWebBotDiv .form-control-plaintext.form-control-sm {
                padding-right: 0;
                padding-left: 0;
            }
            #labibaWebBotDiv .form-control-sm {
                height: calc(1.5em + 0.5rem + 2px);
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
                line-height: 1.5;
                border-radius: 0.2rem;
            }
            #labibaWebBotDiv .form-control-lg {
                height: calc(1.5em + 1rem + 2px);
                padding: 0.5rem 1rem;
                font-size: 1.25rem;
                line-height: 1.5;
                border-radius: 0.3rem;
            }
            #labibaWebBotDiv select.form-control[multiple],
            #labibaWebBotDiv select.form-control[size],
            #labibaWebBotDiv textarea.form-control {
                height: auto;
            }
            #labibaWebBotDiv .form-group {
                margin-bottom: 1rem;
            }
            #labibaWebBotDiv .form-text {
                display: block;
                margin-top: 0.25rem;
            }
            #labibaWebBotDiv .form-row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -5px;
                margin-left: -5px;
            }
            #labibaWebBotDiv .form-row > .col,
            #labibaWebBotDiv .form-row > [class*="col-"] {
                padding-right: 5px;
                padding-left: 5px;
            }
            #labibaWebBotDiv .form-check {
                position: relative;
                display: block;
                padding-left: 1.25rem;
            }
            #labibaWebBotDiv .form-check-input {
                position: absolute;
                margin-top: 0.3rem;
                margin-left: -1.25rem;
            }
            #labibaWebBotDiv .form-check-input[disabled] ~ .form-check-label {
                color: #6c757d;
            }
            #labibaWebBotDiv .form-check-label {
                margin-bottom: 0;
            }
            #labibaWebBotDiv .form-check-inline {
                display: -ms-inline-flexbox;
                display: inline-flex;
                -ms-flex-align: center;
                align-items: center;
                padding-left: 0;
                margin-right: 0.75rem;
            }
            #labibaWebBotDiv .form-check-inline .form-check-input {
                position: static;
                margin-top: 0;
                margin-right: 0.3125rem;
                margin-left: 0;
            }
            #labibaWebBotDiv .valid-feedback {
                display: none;
                width: 100%;
                margin-top: 0.25rem;
                font-size: 80%;
                color: #28a745;
            }
            #labibaWebBotDiv .valid-tooltip {
                position: absolute;
                top: 100%;
                z-index: 5;
                display: none;
                max-width: 100%;
                padding: 0.25rem 0.5rem;
                margin-top: 0.1rem;
                font-size: 0.875rem;
                line-height: 1.5;
                color: #fff;
                background-color: rgba(40, 167, 69, 0.9);
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv.is-valid ~ .valid-feedback,
            #labibaWebBotDiv.is-valid ~ .valid-tooltip,
            .was-validated #labibaWebBotDiv:valid ~ .valid-feedback,
            .was-validated #labibaWebBotDiv:valid ~ .valid-tooltip {
                display: block;
            }
            #labibaWebBotDiv .form-control.is-valid,
            .was-validated #labibaWebBotDiv .form-control:valid {
                border-color: #28a745;
                padding-right: calc(1.5em + 0.75rem);
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: right calc(0.375em + 0.1875rem) center;
                background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            }
            #labibaWebBotDiv .form-control.is-valid:focus,
            .was-validated #labibaWebBotDiv .form-control:valid:focus {
                border-color: #28a745;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
            }
            #labibaWebBotDiv textarea.form-control.is-valid,
            .was-validated #labibaWebBotDiv textarea.form-control:valid {
                padding-right: calc(1.5em + 0.75rem);
                background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
            }
            #labibaWebBotDiv .custom-select.is-valid,
            .was-validated #labibaWebBotDiv .custom-select:valid {
                border-color: #28a745;
                padding-right: calc(0.75em + 2.3125rem);
                background: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem
                        center/8px 10px,
                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E")
                        #fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            }
            #labibaWebBotDiv .custom-select.is-valid:focus,
            .was-validated #labibaWebBotDiv .custom-select:valid:focus {
                border-color: #28a745;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
            }
            #labibaWebBotDiv .form-check-input.is-valid ~ .form-check-label,
            .was-validated #labibaWebBotDiv .form-check-input:valid ~ .form-check-label {
                color: #28a745;
            }
            #labibaWebBotDiv .form-check-input.is-valid ~ .valid-feedback,
            #labibaWebBotDiv .form-check-input.is-valid ~ .valid-tooltip,
            .was-validated #labibaWebBotDiv .form-check-input:valid ~ .valid-feedback,
            .was-validated #labibaWebBotDiv .form-check-input:valid ~ .valid-tooltip {
                display: block;
            }
            #labibaWebBotDiv .custom-control-input.is-valid ~ .custom-control-label,
            .was-validated #labibaWebBotDiv .custom-control-input:valid ~ .custom-control-label {
                color: #28a745;
            }
            #labibaWebBotDiv .custom-control-input.is-valid ~ .custom-control-label:before,
            .was-validated #labibaWebBotDiv .custom-control-input:valid ~ .custom-control-label:before {
                border-color: #28a745;
            }
            #labibaWebBotDiv .custom-control-input.is-valid:checked ~ .custom-control-label:before,
            .was-validated #labibaWebBotDiv .custom-control-input:valid:checked ~ .custom-control-label:before {
                border-color: #34ce57;
                background-color: #34ce57;
            }
            #labibaWebBotDiv .custom-control-input.is-valid:focus ~ .custom-control-label:before,
            .was-validated #labibaWebBotDiv .custom-control-input:valid:focus ~ .custom-control-label:before {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
            }
            #labibaWebBotDiv .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label:before,
            #labibaWebBotDiv .custom-file-input.is-valid ~ .custom-file-label,
            .was-validated #labibaWebBotDiv .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label:before,
            .was-validated #labibaWebBotDiv .custom-file-input:valid ~ .custom-file-label {
                border-color: #28a745;
            }
            #labibaWebBotDiv .custom-file-input.is-valid:focus ~ .custom-file-label,
            .was-validated #labibaWebBotDiv .custom-file-input:valid:focus ~ .custom-file-label {
                border-color: #28a745;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
            }
            #labibaWebBotDiv .invalid-feedback {
                display: none;
                width: 100%;
                margin-top: 0.25rem;
                font-size: 80%;
                color: #dc3545;
            }
            #labibaWebBotDiv .invalid-tooltip {
                position: absolute;
                top: 100%;
                z-index: 5;
                display: none;
                max-width: 100%;
                padding: 0.25rem 0.5rem;
                margin-top: 0.1rem;
                font-size: 0.875rem;
                line-height: 1.5;
                color: #fff;
                background-color: rgba(220, 53, 69, 0.9);
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv.is-invalid ~ .invalid-feedback,
            #labibaWebBotDiv.is-invalid ~ .invalid-tooltip,
            .was-validated #labibaWebBotDiv:invalid ~ .invalid-feedback,
            .was-validated #labibaWebBotDiv:invalid ~ .invalid-tooltip {
                display: block;
            }
            #labibaWebBotDiv .form-control.is-invalid,
            .was-validated #labibaWebBotDiv .form-control:invalid {
                border-color: #dc3545;
                padding-right: calc(1.5em + 0.75rem);
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: right calc(0.375em + 0.1875rem) center;
                background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            }
            #labibaWebBotDiv .form-control.is-invalid:focus,
            .was-validated #labibaWebBotDiv .form-control:invalid:focus {
                border-color: #dc3545;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            }
            #labibaWebBotDiv textarea.form-control.is-invalid,
            .was-validated #labibaWebBotDiv textarea.form-control:invalid {
                padding-right: calc(1.5em + 0.75rem);
                background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
            }
            #labibaWebBotDiv .custom-select.is-invalid,
            .was-validated #labibaWebBotDiv .custom-select:invalid {
                border-color: #dc3545;
                padding-right: calc(0.75em + 2.3125rem);
                background: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem
                        center/8px 10px,
                    url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3E%3C/svg%3E")
                        #fff no-repeat center right 1.75rem / calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            }
            #labibaWebBotDiv .custom-select.is-invalid:focus,
            .was-validated #labibaWebBotDiv .custom-select:invalid:focus {
                border-color: #dc3545;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            }
            #labibaWebBotDiv .form-check-input.is-invalid ~ .form-check-label,
            .was-validated #labibaWebBotDiv .form-check-input:invalid ~ .form-check-label {
                color: #dc3545;
            }
            #labibaWebBotDiv .form-check-input.is-invalid ~ .invalid-feedback,
            #labibaWebBotDiv .form-check-input.is-invalid ~ .invalid-tooltip,
            .was-validated #labibaWebBotDiv .form-check-input:invalid ~ .invalid-feedback,
            .was-validated #labibaWebBotDiv .form-check-input:invalid ~ .invalid-tooltip {
                display: block;
            }
            #labibaWebBotDiv .custom-control-input.is-invalid ~ .custom-control-label,
            .was-validated #labibaWebBotDiv .custom-control-input:invalid ~ .custom-control-label {
                color: #dc3545;
            }
            #labibaWebBotDiv .custom-control-input.is-invalid ~ .custom-control-label:before,
            .was-validated #labibaWebBotDiv .custom-control-input:invalid ~ .custom-control-label:before {
                border-color: #dc3545;
            }
            #labibaWebBotDiv .custom-control-input.is-invalid:checked ~ .custom-control-label:before,
            .was-validated #labibaWebBotDiv .custom-control-input:invalid:checked ~ .custom-control-label:before {
                border-color: #e4606d;
                background-color: #e4606d;
            }
            #labibaWebBotDiv .custom-control-input.is-invalid:focus ~ .custom-control-label:before,
            .was-validated #labibaWebBotDiv .custom-control-input:invalid:focus ~ .custom-control-label:before {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            }
            #labibaWebBotDiv .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label:before,
            #labibaWebBotDiv .custom-file-input.is-invalid ~ .custom-file-label,
            .was-validated #labibaWebBotDiv .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label:before,
            .was-validated #labibaWebBotDiv .custom-file-input:invalid ~ .custom-file-label {
                border-color: #dc3545;
            }
            #labibaWebBotDiv .custom-file-input.is-invalid:focus ~ .custom-file-label,
            .was-validated #labibaWebBotDiv .custom-file-input:invalid:focus ~ .custom-file-label {
                border-color: #dc3545;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            }
            #labibaWebBotDiv .form-inline {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -ms-flex-align: center;
                align-items: center;
            }
            #labibaWebBotDiv .form-inline .form-check {
                width: 100%;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .form-inline label {
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-align: center;
                    align-items: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    margin-bottom: 0;
                }
                #labibaWebBotDiv .form-inline .form-group {
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    -ms-flex-flow: row wrap;
                    flex-flow: row wrap;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-bottom: 0;
                }
                #labibaWebBotDiv .form-inline .form-control {
                    display: inline-block;
                    width: auto;
                    vertical-align: middle;
                }
                #labibaWebBotDiv .form-inline .form-control-plaintext {
                    display: inline-block;
                }
                #labibaWebBotDiv .form-inline .custom-select,
                #labibaWebBotDiv .form-inline .input-group {
                    width: auto;
                }
                #labibaWebBotDiv .form-inline .form-check {
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-align: center;
                    align-items: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    width: auto;
                    padding-left: 0;
                }
                #labibaWebBotDiv .form-inline .form-check-input {
                    position: relative;
                    -ms-flex-negative: 0;
                    flex-shrink: 0;
                    margin-top: 0;
                    margin-right: 0.25rem;
                    margin-left: 0;
                }
                #labibaWebBotDiv .form-inline .custom-control {
                    -ms-flex-align: center;
                    align-items: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                }
                #labibaWebBotDiv .form-inline .custom-control-label {
                    margin-bottom: 0;
                }
            }
            #labibaWebBotDiv .btn {
                display: inline-block;
                font-weight: 400;
                color: #212529;
                text-align: center;
                vertical-align: middle;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: transparent;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .btn {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .btn:hover {
                color: #212529;
                text-decoration: none;
            }
            #labibaWebBotDiv .btn.focus,
            #labibaWebBotDiv .btn:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .btn.disabled,
            #labibaWebBotDiv .btn:disabled {
                opacity: 0.65;
            }
            #labibaWebBotDiv a.btn.disabled,
            #labibaWebBotDiv fieldset:disabled a.btn {
                pointer-events: none;
            }
            #labibaWebBotDiv .btn-primary {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }
            #labibaWebBotDiv .btn-primary:hover {
                color: #fff;
                background-color: #0069d9;
                border-color: #0062cc;
            }
            #labibaWebBotDiv .btn-primary.focus,
            #labibaWebBotDiv .btn-primary:focus {
                color: #fff;
                background-color: #0069d9;
                border-color: #0062cc;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            }
            #labibaWebBotDiv .btn-primary.disabled,
            #labibaWebBotDiv .btn-primary:disabled {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }
            #labibaWebBotDiv .btn-primary:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-primary:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-primary.dropdown-toggle {
                color: #fff;
                background-color: #0062cc;
                border-color: #005cbf;
            }
            #labibaWebBotDiv .btn-primary:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-primary:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-primary.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            }
            #labibaWebBotDiv .btn-secondary {
                color: #fff;
                background-color: #6c757d;
                border-color: #6c757d;
            }
            #labibaWebBotDiv .btn-secondary:hover {
                color: #fff;
                background-color: #5a6268;
                border-color: #545b62;
            }
            #labibaWebBotDiv .btn-secondary.focus,
            #labibaWebBotDiv .btn-secondary:focus {
                color: #fff;
                background-color: #5a6268;
                border-color: #545b62;
                -webkit-box-shadow: 0 0 0 0.2rem hsla(208, 6%, 54%, 0.5);
                box-shadow: 0 0 0 0.2rem hsla(208, 6%, 54%, 0.5);
            }
            #labibaWebBotDiv .btn-secondary.disabled,
            #labibaWebBotDiv .btn-secondary:disabled {
                color: #fff;
                background-color: #6c757d;
                border-color: #6c757d;
            }
            #labibaWebBotDiv .btn-secondary:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-secondary:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-secondary.dropdown-toggle {
                color: #fff;
                background-color: #545b62;
                border-color: #4e555b;
            }
            #labibaWebBotDiv .btn-secondary:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-secondary:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-secondary.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem hsla(208, 6%, 54%, 0.5);
                box-shadow: 0 0 0 0.2rem hsla(208, 6%, 54%, 0.5);
            }
            #labibaWebBotDiv .btn-success {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }
            #labibaWebBotDiv .btn-success:hover {
                color: #fff;
                background-color: #218838;
                border-color: #1e7e34;
            }
            #labibaWebBotDiv .btn-success.focus,
            #labibaWebBotDiv .btn-success:focus {
                color: #fff;
                background-color: #218838;
                border-color: #1e7e34;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
            }
            #labibaWebBotDiv .btn-success.disabled,
            #labibaWebBotDiv .btn-success:disabled {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }
            #labibaWebBotDiv .btn-success:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-success:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-success.dropdown-toggle {
                color: #fff;
                background-color: #1e7e34;
                border-color: #1c7430;
            }
            #labibaWebBotDiv .btn-success:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-success:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-success.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
            }
            #labibaWebBotDiv .btn-info {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }
            #labibaWebBotDiv .btn-info:hover {
                color: #fff;
                background-color: #138496;
                border-color: #117a8b;
            }
            #labibaWebBotDiv .btn-info.focus,
            #labibaWebBotDiv .btn-info:focus {
                color: #fff;
                background-color: #138496;
                border-color: #117a8b;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
            }
            #labibaWebBotDiv .btn-info.disabled,
            #labibaWebBotDiv .btn-info:disabled {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }
            #labibaWebBotDiv .btn-info:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-info:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-info.dropdown-toggle {
                color: #fff;
                background-color: #117a8b;
                border-color: #10707f;
            }
            #labibaWebBotDiv .btn-info:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-info:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-info.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
            }
            #labibaWebBotDiv .btn-warning {
                color: #212529;
                background-color: #ffc107;
                border-color: #ffc107;
            }
            #labibaWebBotDiv .btn-warning:hover {
                color: #212529;
                background-color: #e0a800;
                border-color: #d39e00;
            }
            #labibaWebBotDiv .btn-warning.focus,
            #labibaWebBotDiv .btn-warning:focus {
                color: #212529;
                background-color: #e0a800;
                border-color: #d39e00;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
            }
            #labibaWebBotDiv .btn-warning.disabled,
            #labibaWebBotDiv .btn-warning:disabled {
                color: #212529;
                background-color: #ffc107;
                border-color: #ffc107;
            }
            #labibaWebBotDiv .btn-warning:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-warning:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-warning.dropdown-toggle {
                color: #212529;
                background-color: #d39e00;
                border-color: #c69500;
            }
            #labibaWebBotDiv .btn-warning:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-warning:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-warning.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
            }
            #labibaWebBotDiv .btn-danger {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }
            #labibaWebBotDiv .btn-danger:hover {
                color: #fff;
                background-color: #c82333;
                border-color: #bd2130;
            }
            #labibaWebBotDiv .btn-danger.focus,
            #labibaWebBotDiv .btn-danger:focus {
                color: #fff;
                background-color: #c82333;
                border-color: #bd2130;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
            }
            #labibaWebBotDiv .btn-danger.disabled,
            #labibaWebBotDiv .btn-danger:disabled {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }
            #labibaWebBotDiv .btn-danger:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-danger:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-danger.dropdown-toggle {
                color: #fff;
                background-color: #bd2130;
                border-color: #b21f2d;
            }
            #labibaWebBotDiv .btn-danger:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-danger:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-danger.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
            }
            #labibaWebBotDiv .btn-light {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }
            #labibaWebBotDiv .btn-light:hover {
                color: #212529;
                background-color: #e2e6ea;
                border-color: #dae0e5;
            }
            #labibaWebBotDiv .btn-light.focus,
            #labibaWebBotDiv .btn-light:focus {
                color: #212529;
                background-color: #e2e6ea;
                border-color: #dae0e5;
                -webkit-box-shadow: 0 0 0 0.2rem hsla(220, 4%, 85%, 0.5);
                box-shadow: 0 0 0 0.2rem hsla(220, 4%, 85%, 0.5);
            }
            #labibaWebBotDiv .btn-light.disabled,
            #labibaWebBotDiv .btn-light:disabled {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }
            #labibaWebBotDiv .btn-light:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-light:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-light.dropdown-toggle {
                color: #212529;
                background-color: #dae0e5;
                border-color: #d3d9df;
            }
            #labibaWebBotDiv .btn-light:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-light:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-light.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem hsla(220, 4%, 85%, 0.5);
                box-shadow: 0 0 0 0.2rem hsla(220, 4%, 85%, 0.5);
            }
            #labibaWebBotDiv .btn-dark {
                color: #fff;
                background-color: #343a40;
                border-color: #343a40;
            }
            #labibaWebBotDiv .btn-dark:hover {
                color: #fff;
                background-color: #23272b;
                border-color: #1d2124;
            }
            #labibaWebBotDiv .btn-dark.focus,
            #labibaWebBotDiv .btn-dark:focus {
                color: #fff;
                background-color: #23272b;
                border-color: #1d2124;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
            }
            #labibaWebBotDiv .btn-dark.disabled,
            #labibaWebBotDiv .btn-dark:disabled {
                color: #fff;
                background-color: #343a40;
                border-color: #343a40;
            }
            #labibaWebBotDiv .btn-dark:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-dark:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-dark.dropdown-toggle {
                color: #fff;
                background-color: #1d2124;
                border-color: #171a1d;
            }
            #labibaWebBotDiv .btn-dark:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-dark:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-dark.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
            }
            #labibaWebBotDiv .btn-outline-primary {
                color: #007bff;
                border-color: #007bff;
            }
            #labibaWebBotDiv .btn-outline-primary:hover {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }
            #labibaWebBotDiv .btn-outline-primary.focus,
            #labibaWebBotDiv .btn-outline-primary:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            }
            #labibaWebBotDiv .btn-outline-primary.disabled,
            #labibaWebBotDiv .btn-outline-primary:disabled {
                color: #007bff;
                background-color: transparent;
            }
            #labibaWebBotDiv .btn-outline-primary:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-outline-primary:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-outline-primary.dropdown-toggle {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }
            #labibaWebBotDiv .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-outline-primary.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            }
            #labibaWebBotDiv .btn-outline-secondary {
                color: #6c757d;
                border-color: #6c757d;
            }
            #labibaWebBotDiv .btn-outline-secondary:hover {
                color: #fff;
                background-color: #6c757d;
                border-color: #6c757d;
            }
            #labibaWebBotDiv .btn-outline-secondary.focus,
            #labibaWebBotDiv .btn-outline-secondary:focus {
                -webkit-box-shadow: 0 0 0 0.2rem hsla(208, 7%, 46%, 0.5);
                box-shadow: 0 0 0 0.2rem hsla(208, 7%, 46%, 0.5);
            }
            #labibaWebBotDiv .btn-outline-secondary.disabled,
            #labibaWebBotDiv .btn-outline-secondary:disabled {
                color: #6c757d;
                background-color: transparent;
            }
            #labibaWebBotDiv .btn-outline-secondary:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-outline-secondary:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-outline-secondary.dropdown-toggle {
                color: #fff;
                background-color: #6c757d;
                border-color: #6c757d;
            }
            #labibaWebBotDiv .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-outline-secondary.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem hsla(208, 7%, 46%, 0.5);
                box-shadow: 0 0 0 0.2rem hsla(208, 7%, 46%, 0.5);
            }
            #labibaWebBotDiv .btn-outline-success {
                color: #28a745;
                border-color: #28a745;
            }
            #labibaWebBotDiv .btn-outline-success:hover {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }
            #labibaWebBotDiv .btn-outline-success.focus,
            #labibaWebBotDiv .btn-outline-success:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            }
            #labibaWebBotDiv .btn-outline-success.disabled,
            #labibaWebBotDiv .btn-outline-success:disabled {
                color: #28a745;
                background-color: transparent;
            }
            #labibaWebBotDiv .btn-outline-success:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-outline-success:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-outline-success.dropdown-toggle {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }
            #labibaWebBotDiv .btn-outline-success:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-outline-success:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-outline-success.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            }
            #labibaWebBotDiv .btn-outline-info {
                color: #17a2b8;
                border-color: #17a2b8;
            }
            #labibaWebBotDiv .btn-outline-info:hover {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }
            #labibaWebBotDiv .btn-outline-info.focus,
            #labibaWebBotDiv .btn-outline-info:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            }
            #labibaWebBotDiv .btn-outline-info.disabled,
            #labibaWebBotDiv .btn-outline-info:disabled {
                color: #17a2b8;
                background-color: transparent;
            }
            #labibaWebBotDiv .btn-outline-info:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-outline-info:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-outline-info.dropdown-toggle {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }
            #labibaWebBotDiv .btn-outline-info:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-outline-info:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-outline-info.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            }
            #labibaWebBotDiv .btn-outline-warning {
                color: #ffc107;
                border-color: #ffc107;
            }
            #labibaWebBotDiv .btn-outline-warning:hover {
                color: #212529;
                background-color: #ffc107;
                border-color: #ffc107;
            }
            #labibaWebBotDiv .btn-outline-warning.focus,
            #labibaWebBotDiv .btn-outline-warning:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            }
            #labibaWebBotDiv .btn-outline-warning.disabled,
            #labibaWebBotDiv .btn-outline-warning:disabled {
                color: #ffc107;
                background-color: transparent;
            }
            #labibaWebBotDiv .btn-outline-warning:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-outline-warning:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-outline-warning.dropdown-toggle {
                color: #212529;
                background-color: #ffc107;
                border-color: #ffc107;
            }
            #labibaWebBotDiv .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-outline-warning.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            }
            #labibaWebBotDiv .btn-outline-danger {
                color: #dc3545;
                border-color: #dc3545;
            }
            #labibaWebBotDiv .btn-outline-danger:hover {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }
            #labibaWebBotDiv .btn-outline-danger.focus,
            #labibaWebBotDiv .btn-outline-danger:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            }
            #labibaWebBotDiv .btn-outline-danger.disabled,
            #labibaWebBotDiv .btn-outline-danger:disabled {
                color: #dc3545;
                background-color: transparent;
            }
            #labibaWebBotDiv .btn-outline-danger:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-outline-danger:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-outline-danger.dropdown-toggle {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }
            #labibaWebBotDiv .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-outline-danger.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            }
            #labibaWebBotDiv .btn-outline-light {
                color: #f8f9fa;
                border-color: #f8f9fa;
            }
            #labibaWebBotDiv .btn-outline-light:hover {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }
            #labibaWebBotDiv .btn-outline-light.focus,
            #labibaWebBotDiv .btn-outline-light:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            }
            #labibaWebBotDiv .btn-outline-light.disabled,
            #labibaWebBotDiv .btn-outline-light:disabled {
                color: #f8f9fa;
                background-color: transparent;
            }
            #labibaWebBotDiv .btn-outline-light:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-outline-light:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-outline-light.dropdown-toggle {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }
            #labibaWebBotDiv .btn-outline-light:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-outline-light:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-outline-light.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            }
            #labibaWebBotDiv .btn-outline-dark {
                color: #343a40;
                border-color: #343a40;
            }
            #labibaWebBotDiv .btn-outline-dark:hover {
                color: #fff;
                background-color: #343a40;
                border-color: #343a40;
            }
            #labibaWebBotDiv .btn-outline-dark.focus,
            #labibaWebBotDiv .btn-outline-dark:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            }
            #labibaWebBotDiv .btn-outline-dark.disabled,
            #labibaWebBotDiv .btn-outline-dark:disabled {
                color: #343a40;
                background-color: transparent;
            }
            #labibaWebBotDiv .btn-outline-dark:not(:disabled):not(.disabled).active,
            #labibaWebBotDiv .btn-outline-dark:not(:disabled):not(.disabled):active,
            .show > #labibaWebBotDiv .btn-outline-dark.dropdown-toggle {
                color: #fff;
                background-color: #343a40;
                border-color: #343a40;
            }
            #labibaWebBotDiv .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
            #labibaWebBotDiv .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
            .show > #labibaWebBotDiv .btn-outline-dark.dropdown-toggle:focus {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            }
            #labibaWebBotDiv .btn-link {
                font-weight: 400;
                color: #007bff;
                text-decoration: none;
            }
            #labibaWebBotDiv .btn-link:hover {
                color: #0056b3;
                text-decoration: underline;
            }
            #labibaWebBotDiv .btn-link.focus,
            #labibaWebBotDiv .btn-link:focus {
                text-decoration: underline;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            #labibaWebBotDiv .btn-link.disabled,
            #labibaWebBotDiv .btn-link:disabled {
                color: #6c757d;
                pointer-events: none;
            }
            #labibaWebBotDiv #labibaWebBotDiv .btn-group-lg > .btn,
            #labibaWebBotDiv .btn-lg {
                padding: 0.5rem 1rem;
                font-size: 1.25rem;
                line-height: 1.5;
                border-radius: 0.3rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .btn-group-sm > .btn,
            #labibaWebBotDiv .btn-sm {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
                line-height: 1.5;
                border-radius: 0.2rem;
            }
            #labibaWebBotDiv .btn-block {
                display: block;
                width: 100%;
            }
            #labibaWebBotDiv .btn-block + .btn-block {
                margin-top: 0.5rem;
            }
            #labibaWebBotDiv input[type="button"].btn-block,
            #labibaWebBotDiv input[type="reset"].btn-block,
            #labibaWebBotDiv input[type="submit"].btn-block {
                width: 100%;
            }
            #labibaWebBotDiv .fade {
                -webkit-transition: opacity 0.15s linear;
                -o-transition: opacity 0.15s linear;
                transition: opacity 0.15s linear;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .fade {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .fade:not(.show) {
                opacity: 0;
            }
            #labibaWebBotDiv .collapse:not(.show) {
                display: none;
            }
            #labibaWebBotDiv .collapsing {
                position: relative;
                height: 0;
                overflow: hidden;
                -webkit-transition: height 0.35s ease;
                -o-transition: height 0.35s ease;
                transition: height 0.35s ease;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .collapsing {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .dropdown,
            #labibaWebBotDiv .dropleft,
            #labibaWebBotDiv .dropright,
            #labibaWebBotDiv .dropup {
                position: relative;
            }
            #labibaWebBotDiv .dropdown-toggle {
                white-space: nowrap;
            }
            #labibaWebBotDiv .dropdown-toggle:after {
                display: inline-block;
                margin-left: 0.255em;
                vertical-align: 0.255em;
                content: "";
                border-top: 0.3em solid;
                border-right: 0.3em solid transparent;
                border-bottom: 0;
                border-left: 0.3em solid transparent;
            }
            #labibaWebBotDiv .dropdown-toggle:empty:after {
                margin-left: 0;
            }
            #labibaWebBotDiv .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                display: none;
                float: left;
                min-width: 10rem;
                padding: 0.5rem 0;
                margin: 0.125rem 0 0;
                font-size: 1rem;
                color: #212529;
                text-align: left;
                list-style: none;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, 0.15);
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .dropdown-menu-left {
                right: auto;
                left: 0;
            }
            #labibaWebBotDiv .dropdown-menu-right {
                right: 0;
                left: auto;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .dropdown-menu-sm-left {
                    right: auto;
                    left: 0;
                }
                #labibaWebBotDiv .dropdown-menu-sm-right {
                    right: 0;
                    left: auto;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .dropdown-menu-md-left {
                    right: auto;
                    left: 0;
                }
                #labibaWebBotDiv .dropdown-menu-md-right {
                    right: 0;
                    left: auto;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .dropdown-menu-lg-left {
                    right: auto;
                    left: 0;
                }
                #labibaWebBotDiv .dropdown-menu-lg-right {
                    right: 0;
                    left: auto;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .dropdown-menu-xl-left {
                    right: auto;
                    left: 0;
                }
                #labibaWebBotDiv .dropdown-menu-xl-right {
                    right: 0;
                    left: auto;
                }
            }
            #labibaWebBotDiv .dropup .dropdown-menu {
                top: auto;
                bottom: 100%;
                margin-top: 0;
                margin-bottom: 0.125rem;
            }
            #labibaWebBotDiv .dropup .dropdown-toggle:after {
                display: inline-block;
                margin-left: 0.255em;
                vertical-align: 0.255em;
                content: "";
                border-top: 0;
                border-right: 0.3em solid transparent;
                border-bottom: 0.3em solid;
                border-left: 0.3em solid transparent;
            }
            #labibaWebBotDiv .dropup .dropdown-toggle:empty:after {
                margin-left: 0;
            }
            #labibaWebBotDiv .dropright .dropdown-menu {
                top: 0;
                right: auto;
                left: 100%;
                margin-top: 0;
                margin-left: 0.125rem;
            }
            #labibaWebBotDiv .dropright .dropdown-toggle:after {
                display: inline-block;
                margin-left: 0.255em;
                vertical-align: 0.255em;
                content: "";
                border-top: 0.3em solid transparent;
                border-right: 0;
                border-bottom: 0.3em solid transparent;
                border-left: 0.3em solid;
            }
            #labibaWebBotDiv .dropright .dropdown-toggle:empty:after {
                margin-left: 0;
            }
            #labibaWebBotDiv .dropright .dropdown-toggle:after {
                vertical-align: 0;
            }
            #labibaWebBotDiv .dropleft .dropdown-menu {
                top: 0;
                right: 100%;
                left: auto;
                margin-top: 0;
                margin-right: 0.125rem;
            }
            #labibaWebBotDiv .dropleft .dropdown-toggle:after {
                display: inline-block;
                margin-left: 0.255em;
                vertical-align: 0.255em;
                content: "";
                display: none;
            }
            #labibaWebBotDiv .dropleft .dropdown-toggle:before {
                display: inline-block;
                margin-right: 0.255em;
                vertical-align: 0.255em;
                content: "";
                border-top: 0.3em solid transparent;
                border-right: 0.3em solid;
                border-bottom: 0.3em solid transparent;
            }
            #labibaWebBotDiv .dropleft .dropdown-toggle:empty:after {
                margin-left: 0;
            }
            #labibaWebBotDiv .dropleft .dropdown-toggle:before {
                vertical-align: 0;
            }
            #labibaWebBotDiv .dropdown-menu[x-placement^="bottom"],
            #labibaWebBotDiv .dropdown-menu[x-placement^="left"],
            #labibaWebBotDiv .dropdown-menu[x-placement^="right"],
            #labibaWebBotDiv .dropdown-menu[x-placement^="top"] {
                right: auto;
                bottom: auto;
            }
            #labibaWebBotDiv .dropdown-divider {
                height: 0;
                margin: 0.5rem 0;
                overflow: hidden;
                border-top: 1px solid #e9ecef;
            }
            #labibaWebBotDiv .dropdown-item {
                display: block;
                width: 100%;
                padding: 0.25rem 1.5rem;
                clear: both;
                font-weight: 400;
                color: #212529;
                text-align: inherit;
                white-space: nowrap;
                background-color: transparent;
                border: 0;
            }
            #labibaWebBotDiv .dropdown-item:focus,
            #labibaWebBotDiv .dropdown-item:hover {
                color: #16181b;
                text-decoration: none;
                background-color: #f8f9fa;
            }
            #labibaWebBotDiv .dropdown-item.active,
            #labibaWebBotDiv .dropdown-item:active {
                color: #fff;
                text-decoration: none;
                background-color: #007bff;
            }
            #labibaWebBotDiv .dropdown-item.disabled,
            #labibaWebBotDiv .dropdown-item:disabled {
                color: #6c757d;
                pointer-events: none;
                background-color: transparent;
            }
            #labibaWebBotDiv .dropdown-menu.show {
                display: block;
            }
            #labibaWebBotDiv .dropdown-header {
                display: block;
                padding: 0.5rem 1.5rem;
                margin-bottom: 0;
                font-size: 0.875rem;
                color: #6c757d;
                white-space: nowrap;
            }
            #labibaWebBotDiv .dropdown-item-text {
                display: block;
                padding: 0.25rem 1.5rem;
                color: #212529;
            }
            #labibaWebBotDiv .btn-group,
            #labibaWebBotDiv .btn-group-vertical {
                position: relative;
                display: -ms-inline-flexbox;
                display: inline-flex;
                vertical-align: middle;
            }
            #labibaWebBotDiv .btn-group-vertical > .btn,
            #labibaWebBotDiv .btn-group > .btn {
                position: relative;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
            }
            #labibaWebBotDiv .btn-group-vertical > .btn.active,
            #labibaWebBotDiv .btn-group-vertical > .btn:active,
            #labibaWebBotDiv .btn-group-vertical > .btn:focus,
            #labibaWebBotDiv .btn-group-vertical > .btn:hover,
            #labibaWebBotDiv .btn-group > .btn.active,
            #labibaWebBotDiv .btn-group > .btn:active,
            #labibaWebBotDiv .btn-group > .btn:focus,
            #labibaWebBotDiv .btn-group > .btn:hover {
                z-index: 1;
            }
            #labibaWebBotDiv .btn-toolbar {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            #labibaWebBotDiv .btn-toolbar .input-group {
                width: auto;
            }
            #labibaWebBotDiv .btn-group > .btn-group:not(:first-child),
            #labibaWebBotDiv .btn-group > .btn:not(:first-child) {
                margin-left: -1px;
            }
            #labibaWebBotDiv .btn-group > .btn-group:not(:last-child) > .btn,
            #labibaWebBotDiv .btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            #labibaWebBotDiv .btn-group > .btn-group:not(:first-child) > .btn,
            #labibaWebBotDiv .btn-group > .btn:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            #labibaWebBotDiv .dropdown-toggle-split {
                padding-right: 0.5625rem;
                padding-left: 0.5625rem;
            }
            #labibaWebBotDiv .dropdown-toggle-split:after,
            .dropright #labibaWebBotDiv .dropdown-toggle-split:after,
            .dropup #labibaWebBotDiv .dropdown-toggle-split:after {
                margin-left: 0;
            }
            .dropleft #labibaWebBotDiv .dropdown-toggle-split:before {
                margin-right: 0;
            }
            #labibaWebBotDiv #labibaWebBotDiv .btn-group-sm > .btn + .dropdown-toggle-split,
            #labibaWebBotDiv .btn-sm + .dropdown-toggle-split {
                padding-right: 0.375rem;
                padding-left: 0.375rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .btn-group-lg > .btn + .dropdown-toggle-split,
            #labibaWebBotDiv .btn-lg + .dropdown-toggle-split {
                padding-right: 0.75rem;
                padding-left: 0.75rem;
            }
            #labibaWebBotDiv .btn-group-vertical {
                -ms-flex-direction: column;
                flex-direction: column;
                -ms-flex-align: start;
                align-items: flex-start;
                -ms-flex-pack: center;
                justify-content: center;
            }
            #labibaWebBotDiv .btn-group-vertical > .btn,
            #labibaWebBotDiv .btn-group-vertical > .btn-group {
                width: 100%;
            }
            #labibaWebBotDiv .btn-group-vertical > .btn-group:not(:first-child),
            #labibaWebBotDiv .btn-group-vertical > .btn:not(:first-child) {
                margin-top: -1px;
            }
            #labibaWebBotDiv .btn-group-vertical > .btn-group:not(:last-child) > .btn,
            #labibaWebBotDiv .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            #labibaWebBotDiv .btn-group-vertical > .btn-group:not(:first-child) > .btn,
            #labibaWebBotDiv .btn-group-vertical > .btn:not(:first-child) {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            #labibaWebBotDiv .btn-group-toggle > .btn,
            #labibaWebBotDiv .btn-group-toggle > .btn-group > .btn {
                margin-bottom: 0;
            }
            #labibaWebBotDiv .btn-group-toggle > .btn-group > .btn input[type="checkbox"],
            #labibaWebBotDiv .btn-group-toggle > .btn-group > .btn input[type="radio"],
            #labibaWebBotDiv .btn-group-toggle > .btn input[type="checkbox"],
            #labibaWebBotDiv .btn-group-toggle > .btn input[type="radio"] {
                position: absolute;
                clip: rect(0, 0, 0, 0);
                pointer-events: none;
            }
            #labibaWebBotDiv .input-group {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-align: stretch;
                align-items: stretch;
                width: 100%;
            }
            #labibaWebBotDiv .input-group > .custom-file,
            #labibaWebBotDiv .input-group > .custom-select,
            #labibaWebBotDiv .input-group > .form-control,
            #labibaWebBotDiv .input-group > .form-control-plaintext {
                position: relative;
                -ms-flex: 1 1;
                flex: 1 1;
                min-width: 0;
                margin-bottom: 0;
            }
            #labibaWebBotDiv .input-group > .custom-file + .custom-file,
            #labibaWebBotDiv .input-group > .custom-file + .custom-select,
            #labibaWebBotDiv .input-group > .custom-file + .form-control,
            #labibaWebBotDiv .input-group > .custom-select + .custom-file,
            #labibaWebBotDiv .input-group > .custom-select + .custom-select,
            #labibaWebBotDiv .input-group > .custom-select + .form-control,
            #labibaWebBotDiv .input-group > .form-control + .custom-file,
            #labibaWebBotDiv .input-group > .form-control + .custom-select,
            #labibaWebBotDiv .input-group > .form-control + .form-control,
            #labibaWebBotDiv .input-group > .form-control-plaintext + .custom-file,
            #labibaWebBotDiv .input-group > .form-control-plaintext + .custom-select,
            #labibaWebBotDiv .input-group > .form-control-plaintext + .form-control {
                margin-left: -1px;
            }
            #labibaWebBotDiv .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label,
            #labibaWebBotDiv .input-group > .custom-select:focus,
            #labibaWebBotDiv .input-group > .form-control:focus {
                z-index: 3;
            }
            #labibaWebBotDiv .input-group > .custom-file .custom-file-input:focus {
                z-index: 4;
            }
            #labibaWebBotDiv .input-group > .custom-select:not(:last-child),
            #labibaWebBotDiv .input-group > .form-control:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            #labibaWebBotDiv .input-group > .custom-select:not(:first-child),
            #labibaWebBotDiv .input-group > .form-control:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            #labibaWebBotDiv .input-group > .custom-file {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
            }
            #labibaWebBotDiv .input-group > .custom-file:not(:last-child) .custom-file-label,
            #labibaWebBotDiv .input-group > .custom-file:not(:last-child) .custom-file-label:after {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            #labibaWebBotDiv .input-group > .custom-file:not(:first-child) .custom-file-label {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            #labibaWebBotDiv .input-group-append,
            #labibaWebBotDiv .input-group-prepend {
                display: -ms-flexbox;
                display: flex;
            }
            #labibaWebBotDiv .input-group-append .btn,
            #labibaWebBotDiv .input-group-prepend .btn {
                position: relative;
                z-index: 2;
            }
            #labibaWebBotDiv .input-group-append .btn:focus,
            #labibaWebBotDiv .input-group-prepend .btn:focus {
                z-index: 3;
            }
            #labibaWebBotDiv .input-group-append .btn + .btn,
            #labibaWebBotDiv .input-group-append .btn + .input-group-text,
            #labibaWebBotDiv .input-group-append .input-group-text + .btn,
            #labibaWebBotDiv .input-group-append .input-group-text + .input-group-text,
            #labibaWebBotDiv .input-group-prepend .btn + .btn,
            #labibaWebBotDiv .input-group-prepend .btn + .input-group-text,
            #labibaWebBotDiv .input-group-prepend .input-group-text + .btn,
            #labibaWebBotDiv .input-group-prepend .input-group-text + .input-group-text {
                margin-left: -1px;
            }
            #labibaWebBotDiv .input-group-prepend {
                margin-right: -1px;
            }
            #labibaWebBotDiv .input-group-append {
                margin-left: -1px;
            }
            #labibaWebBotDiv .input-group-text {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                padding: 0.375rem 0.75rem;
                margin-bottom: 0;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                text-align: center;
                white-space: nowrap;
                background-color: #e9ecef;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .input-group-text input[type="checkbox"],
            #labibaWebBotDiv .input-group-text input[type="radio"] {
                margin-top: 0;
            }
            #labibaWebBotDiv .input-group-lg > .custom-select,
            #labibaWebBotDiv .input-group-lg > .form-control:not(textarea) {
                height: calc(1.5em + 1rem + 2px);
            }
            #labibaWebBotDiv .input-group-lg > .custom-select,
            #labibaWebBotDiv .input-group-lg > .form-control,
            #labibaWebBotDiv .input-group-lg > .input-group-append > .btn,
            #labibaWebBotDiv .input-group-lg > .input-group-append > .input-group-text,
            #labibaWebBotDiv .input-group-lg > .input-group-prepend > .btn,
            #labibaWebBotDiv .input-group-lg > .input-group-prepend > .input-group-text {
                padding: 0.5rem 1rem;
                font-size: 1.25rem;
                line-height: 1.5;
                border-radius: 0.3rem;
            }
            #labibaWebBotDiv .input-group-sm > .custom-select,
            #labibaWebBotDiv .input-group-sm > .form-control:not(textarea) {
                height: calc(1.5em + 0.5rem + 2px);
            }
            #labibaWebBotDiv .input-group-sm > .custom-select,
            #labibaWebBotDiv .input-group-sm > .form-control,
            #labibaWebBotDiv .input-group-sm > .input-group-append > .btn,
            #labibaWebBotDiv .input-group-sm > .input-group-append > .input-group-text,
            #labibaWebBotDiv .input-group-sm > .input-group-prepend > .btn,
            #labibaWebBotDiv .input-group-sm > .input-group-prepend > .input-group-text {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
                line-height: 1.5;
                border-radius: 0.2rem;
            }
            #labibaWebBotDiv .input-group-lg > .custom-select,
            #labibaWebBotDiv .input-group-sm > .custom-select {
                padding-right: 1.75rem;
            }
            #labibaWebBotDiv .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
            #labibaWebBotDiv .input-group > .input-group-append:last-child > .input-group-text:not(:last-child),
            #labibaWebBotDiv .input-group > .input-group-append:not(:last-child) > .btn,
            #labibaWebBotDiv .input-group > .input-group-append:not(:last-child) > .input-group-text,
            #labibaWebBotDiv .input-group > .input-group-prepend > .btn,
            #labibaWebBotDiv .input-group > .input-group-prepend > .input-group-text {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            #labibaWebBotDiv .input-group > .input-group-append > .btn,
            #labibaWebBotDiv .input-group > .input-group-append > .input-group-text,
            #labibaWebBotDiv .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
            #labibaWebBotDiv .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child),
            #labibaWebBotDiv .input-group > .input-group-prepend:not(:first-child) > .btn,
            #labibaWebBotDiv .input-group > .input-group-prepend:not(:first-child) > .input-group-text {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            #labibaWebBotDiv .custom-control {
                position: relative;
                display: block;
                min-height: 1.5rem;
                padding-left: 1.5rem;
            }
            #labibaWebBotDiv .custom-control-inline {
                display: -ms-inline-flexbox;
                display: inline-flex;
                margin-right: 1rem;
            }
            #labibaWebBotDiv .custom-control-input {
                position: absolute;
                left: 0;
                z-index: -1;
                width: 1rem;
                height: 1.25rem;
                opacity: 0;
            }
            #labibaWebBotDiv .custom-control-input:checked ~ .custom-control-label:before {
                color: #fff;
                border-color: #007bff;
                background-color: #007bff;
            }
            #labibaWebBotDiv .custom-control-input:focus ~ .custom-control-label:before {
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .custom-control-input:focus:not(:checked) ~ .custom-control-label:before {
                border-color: #80bdff;
            }
            #labibaWebBotDiv .custom-control-input:not(:disabled):active ~ .custom-control-label:before {
                color: #fff;
                background-color: #b3d7ff;
                border-color: #b3d7ff;
            }
            #labibaWebBotDiv .custom-control-input[disabled] ~ .custom-control-label {
                color: #6c757d;
            }
            #labibaWebBotDiv .custom-control-input[disabled] ~ .custom-control-label:before {
                background-color: #e9ecef;
            }
            #labibaWebBotDiv .custom-control-label {
                position: relative;
                margin-bottom: 0;
                vertical-align: top;
            }
            #labibaWebBotDiv .custom-control-label:before {
                position: absolute;
                top: 0.25rem;
                left: -1.5rem;
                display: block;
                width: 1rem;
                height: 1rem;
                pointer-events: none;
                content: "";
                background-color: #fff;
                border: 1px solid #adb5bd;
            }
            #labibaWebBotDiv .custom-control-label:after {
                position: absolute;
                top: 0.25rem;
                left: -1.5rem;
                display: block;
                width: 1rem;
                height: 1rem;
                content: "";
                background: no-repeat 50%/50% 50%;
            }
            #labibaWebBotDiv .custom-checkbox .custom-control-label:before {
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .custom-checkbox .custom-control-input:checked ~ .custom-control-label:after {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3E%3C/svg%3E");
            }
            #labibaWebBotDiv .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label:before {
                border-color: #007bff;
                background-color: #007bff;
            }
            #labibaWebBotDiv .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label:after {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E");
            }
            #labibaWebBotDiv .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label:before {
                background-color: rgba(0, 123, 255, 0.5);
            }
            #labibaWebBotDiv .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label:before {
                background-color: rgba(0, 123, 255, 0.5);
            }
            #labibaWebBotDiv .custom-radio .custom-control-label:before {
                border-radius: 50%;
            }
            #labibaWebBotDiv .custom-radio .custom-control-input:checked ~ .custom-control-label:after {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
            }
            #labibaWebBotDiv .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label:before {
                background-color: rgba(0, 123, 255, 0.5);
            }
            #labibaWebBotDiv .custom-switch {
                padding-left: 2.25rem;
            }
            #labibaWebBotDiv .custom-switch .custom-control-label:before {
                left: -2.25rem;
                width: 1.75rem;
                pointer-events: all;
                border-radius: 0.5rem;
            }
            #labibaWebBotDiv .custom-switch .custom-control-label:after {
                top: calc(0.25rem + 2px);
                left: calc(-2.25rem + 2px);
                width: calc(1rem - 4px);
                height: calc(1rem - 4px);
                background-color: #adb5bd;
                border-radius: 0.5rem;
                -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .custom-switch .custom-control-label:after {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .custom-switch .custom-control-input:checked ~ .custom-control-label:after {
                background-color: #fff;
                -webkit-transform: translateX(0.75rem);
                -ms-transform: translateX(0.75rem);
                transform: translateX(0.75rem);
            }
            #labibaWebBotDiv .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label:before {
                background-color: rgba(0, 123, 255, 0.5);
            }
            #labibaWebBotDiv .custom-select {
                display: inline-block;
                width: 100%;
                height: calc(1.5em + 0.75rem + 2px);
                padding: 0.375rem 1.75rem 0.375rem 0.75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                vertical-align: middle;
                background: #fff url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right
                    0.75rem center/8px 10px;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            #labibaWebBotDiv .custom-select:focus {
                border-color: #80bdff;
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .custom-select:focus::-ms-value {
                color: #495057;
                background-color: #fff;
            }
            #labibaWebBotDiv .custom-select[multiple],
            #labibaWebBotDiv .custom-select[size]:not([size="1"]) {
                height: auto;
                padding-right: 0.75rem;
                background-image: none;
            }
            #labibaWebBotDiv .custom-select:disabled {
                color: #6c757d;
                background-color: #e9ecef;
            }
            #labibaWebBotDiv .custom-select::-ms-expand {
                display: none;
            }
            #labibaWebBotDiv .custom-select:-moz-focusring {
                color: transparent;
                text-shadow: 0 0 0 #495057;
            }
            #labibaWebBotDiv .custom-select-sm {
                height: calc(1.5em + 0.5rem + 2px);
                padding-top: 0.25rem;
                padding-bottom: 0.25rem;
                padding-left: 0.5rem;
                font-size: 0.875rem;
            }
            #labibaWebBotDiv .custom-select-lg {
                height: calc(1.5em + 1rem + 2px);
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
                padding-left: 1rem;
                font-size: 1.25rem;
            }
            #labibaWebBotDiv .custom-file {
                position: relative;
                display: inline-block;
                width: 100%;
                height: calc(1.5em + 0.75rem + 2px);
                margin-bottom: 0;
            }
            #labibaWebBotDiv .custom-file-input {
                position: relative;
                z-index: 2;
                width: 100%;
                height: calc(1.5em + 0.75rem + 2px);
                margin: 0;
                opacity: 0;
            }
            #labibaWebBotDiv .custom-file-input:focus ~ .custom-file-label {
                border-color: #80bdff;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .custom-file-input[disabled] ~ .custom-file-label {
                background-color: #e9ecef;
            }
            #labibaWebBotDiv .custom-file-input:lang(en) ~ .custom-file-label:after {
                content: "Browse";
            }
            #labibaWebBotDiv .custom-file-input ~ .custom-file-label[data-browse]:after {
                content: attr(data-browse);
            }
            #labibaWebBotDiv .custom-file-label {
                left: 0;
                z-index: 1;
                height: calc(1.5em + 0.75rem + 2px);
                font-weight: 400;
                background-color: #fff;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .custom-file-label,
            #labibaWebBotDiv .custom-file-label:after {
                position: absolute;
                top: 0;
                right: 0;
                padding: 0.375rem 0.75rem;
                line-height: 1.5;
                color: #495057;
            }
            #labibaWebBotDiv .custom-file-label:after {
                bottom: 0;
                z-index: 3;
                display: block;
                height: calc(1.5em + 0.75rem);
                content: "Browse";
                background-color: #e9ecef;
                border-left: inherit;
                border-radius: 0 0.25rem 0.25rem 0;
            }
            #labibaWebBotDiv .custom-range {
                width: 100%;
                height: 1.4rem;
                padding: 0;
                background-color: transparent;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            #labibaWebBotDiv .custom-range:focus {
                outline: none;
            }
            #labibaWebBotDiv .custom-range:focus::-webkit-slider-thumb {
                -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .custom-range:focus::-moz-range-thumb {
                box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .custom-range:focus::-ms-thumb {
                box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .custom-range::-moz-focus-outer {
                border: 0;
            }
            #labibaWebBotDiv .custom-range::-webkit-slider-thumb {
                width: 1rem;
                height: 1rem;
                margin-top: -0.25rem;
                background-color: #007bff;
                border: 0;
                border-radius: 1rem;
                -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -webkit-appearance: none;
                appearance: none;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .custom-range::-webkit-slider-thumb {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .custom-range::-webkit-slider-thumb:active {
                background-color: #b3d7ff;
            }
            #labibaWebBotDiv .custom-range::-webkit-slider-runnable-track {
                width: 100%;
                height: 0.5rem;
                color: transparent;
                cursor: pointer;
                background-color: #dee2e6;
                border-color: transparent;
                border-radius: 1rem;
            }
            #labibaWebBotDiv .custom-range::-moz-range-thumb {
                width: 1rem;
                height: 1rem;
                background-color: #007bff;
                border: 0;
                border-radius: 1rem;
                -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -moz-appearance: none;
                appearance: none;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .custom-range::-moz-range-thumb {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .custom-range::-moz-range-thumb:active {
                background-color: #b3d7ff;
            }
            #labibaWebBotDiv .custom-range::-moz-range-track {
                width: 100%;
                height: 0.5rem;
                color: transparent;
                cursor: pointer;
                background-color: #dee2e6;
                border-color: transparent;
                border-radius: 1rem;
            }
            #labibaWebBotDiv .custom-range::-ms-thumb {
                width: 1rem;
                height: 1rem;
                margin-top: 0;
                margin-right: 0.2rem;
                margin-left: 0.2rem;
                background-color: #007bff;
                border: 0;
                border-radius: 1rem;
                -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                appearance: none;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .custom-range::-ms-thumb {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .custom-range::-ms-thumb:active {
                background-color: #b3d7ff;
            }
            #labibaWebBotDiv .custom-range::-ms-track {
                width: 100%;
                height: 0.5rem;
                color: transparent;
                cursor: pointer;
                background-color: transparent;
                border-color: transparent;
                border-width: 0.5rem;
            }
            #labibaWebBotDiv .custom-range::-ms-fill-lower {
                background-color: #dee2e6;
                border-radius: 1rem;
            }
            #labibaWebBotDiv .custom-range::-ms-fill-upper {
                margin-right: 15px;
                background-color: #dee2e6;
                border-radius: 1rem;
            }
            #labibaWebBotDiv .custom-range:disabled::-webkit-slider-thumb {
                background-color: #adb5bd;
            }
            #labibaWebBotDiv .custom-range:disabled::-webkit-slider-runnable-track {
                cursor: default;
            }
            #labibaWebBotDiv .custom-range:disabled::-moz-range-thumb {
                background-color: #adb5bd;
            }
            #labibaWebBotDiv .custom-range:disabled::-moz-range-track {
                cursor: default;
            }
            #labibaWebBotDiv .custom-range:disabled::-ms-thumb {
                background-color: #adb5bd;
            }
            #labibaWebBotDiv .custom-control-label:before,
            #labibaWebBotDiv .custom-file-label,
            #labibaWebBotDiv .custom-select {
                -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .custom-control-label:before,
                #labibaWebBotDiv .custom-file-label,
                #labibaWebBotDiv .custom-select {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .nav {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
            }
            #labibaWebBotDiv .nav-link {
                display: block;
                padding: 0.5rem 1rem;
            }
            #labibaWebBotDiv .nav-link:focus,
            #labibaWebBotDiv .nav-link:hover {
                text-decoration: none;
            }
            #labibaWebBotDiv .nav-link.disabled {
                color: #6c757d;
                pointer-events: none;
                cursor: default;
            }
            #labibaWebBotDiv .nav-tabs {
                border-bottom: 1px solid #dee2e6;
            }
            #labibaWebBotDiv .nav-tabs .nav-item {
                margin-bottom: -1px;
            }
            #labibaWebBotDiv .nav-tabs .nav-link {
                border: 1px solid transparent;
                border-top-left-radius: 0.25rem;
                border-top-right-radius: 0.25rem;
            }
            #labibaWebBotDiv .nav-tabs .nav-link:focus,
            #labibaWebBotDiv .nav-tabs .nav-link:hover {
                border-color: #e9ecef #e9ecef #dee2e6;
            }
            #labibaWebBotDiv .nav-tabs .nav-link.disabled {
                color: #6c757d;
                background-color: transparent;
                border-color: transparent;
            }
            #labibaWebBotDiv .nav-tabs .nav-item.show .nav-link,
            #labibaWebBotDiv .nav-tabs .nav-link.active {
                color: #495057;
                background-color: #fff;
                border-color: #dee2e6 #dee2e6 #fff;
            }
            #labibaWebBotDiv .nav-tabs .dropdown-menu {
                margin-top: -1px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            #labibaWebBotDiv .nav-pills .nav-link {
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .nav-pills .nav-link.active,
            #labibaWebBotDiv .nav-pills .show > .nav-link {
                color: #fff;
                background-color: #007bff;
            }
            #labibaWebBotDiv .nav-fill .nav-item {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                text-align: center;
            }
            #labibaWebBotDiv .nav-justified .nav-item {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                text-align: center;
            }
            #labibaWebBotDiv .tab-content > .tab-pane {
                display: none;
            }
            #labibaWebBotDiv .tab-content > .active {
                display: block;
            }
            #labibaWebBotDiv .navbar {
                position: relative;
                padding: 0.5rem 1rem;
            }
            #labibaWebBotDiv .navbar,
            #labibaWebBotDiv .navbar #labibaWebBotDiv #labibaWebBotDiv .container-lg,
            #labibaWebBotDiv .navbar #labibaWebBotDiv #labibaWebBotDiv .container-md,
            #labibaWebBotDiv .navbar #labibaWebBotDiv #labibaWebBotDiv .container-sm,
            #labibaWebBotDiv .navbar #labibaWebBotDiv #labibaWebBotDiv .container-xl,
            #labibaWebBotDiv .navbar #labibaWebBotDiv .container,
            #labibaWebBotDiv .navbar #labibaWebBotDiv .container-fluid,
            #labibaWebBotDiv .navbar \%container-flex-properties {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
            #labibaWebBotDiv .navbar-brand {
                display: inline-block;
                padding-top: 0.3125rem;
                padding-bottom: 0.3125rem;
                margin-right: 1rem;
                font-size: 1.25rem;
                line-height: inherit;
                white-space: nowrap;
            }
            #labibaWebBotDiv .navbar-brand:focus,
            #labibaWebBotDiv .navbar-brand:hover {
                text-decoration: none;
            }
            #labibaWebBotDiv .navbar-nav {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
            }
            #labibaWebBotDiv .navbar-nav .nav-link {
                padding-right: 0;
                padding-left: 0;
            }
            #labibaWebBotDiv .navbar-nav .dropdown-menu {
                position: static;
                float: none;
            }
            #labibaWebBotDiv .navbar-text {
                display: inline-block;
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }
            #labibaWebBotDiv .navbar-collapse {
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -ms-flex-align: center;
                align-items: center;
            }
            #labibaWebBotDiv .navbar-toggler {
                padding: 0.25rem 0.75rem;
                font-size: 1.25rem;
                line-height: 1;
                background-color: transparent;
                border: 1px solid transparent;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .navbar-toggler:focus,
            #labibaWebBotDiv .navbar-toggler:hover {
                text-decoration: none;
            }
            #labibaWebBotDiv .navbar-toggler-icon {
                display: inline-block;
                width: 1.5em;
                height: 1.5em;
                vertical-align: middle;
                content: "";
                background: no-repeat 50%;
                background-size: 100% 100%;
            }
            @media (max-width: 575.98px) {
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > .container,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > .container-fluid,
                #labibaWebBotDiv .navbar-expand-sm > \%container-navbar-expand {
                    padding-right: 0;
                    padding-left: 0;
                }
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .navbar-expand-sm {
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                #labibaWebBotDiv .navbar-expand-sm .navbar-nav {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                #labibaWebBotDiv .navbar-expand-sm .navbar-nav .dropdown-menu {
                    position: absolute;
                }
                #labibaWebBotDiv .navbar-expand-sm .navbar-nav .nav-link {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > .container,
                #labibaWebBotDiv .navbar-expand-sm > #labibaWebBotDiv > .container-fluid,
                #labibaWebBotDiv .navbar-expand-sm > \%container-nesting {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                #labibaWebBotDiv .navbar-expand-sm .navbar-collapse {
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
                #labibaWebBotDiv .navbar-expand-sm .navbar-toggler {
                    display: none;
                }
            }
            @media (max-width: 767.98px) {
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > .container,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > .container-fluid,
                #labibaWebBotDiv .navbar-expand-md > \%container-navbar-expand {
                    padding-right: 0;
                    padding-left: 0;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .navbar-expand-md {
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                #labibaWebBotDiv .navbar-expand-md .navbar-nav {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                #labibaWebBotDiv .navbar-expand-md .navbar-nav .dropdown-menu {
                    position: absolute;
                }
                #labibaWebBotDiv .navbar-expand-md .navbar-nav .nav-link {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > .container,
                #labibaWebBotDiv .navbar-expand-md > #labibaWebBotDiv > .container-fluid,
                #labibaWebBotDiv .navbar-expand-md > \%container-nesting {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                #labibaWebBotDiv .navbar-expand-md .navbar-collapse {
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
                #labibaWebBotDiv .navbar-expand-md .navbar-toggler {
                    display: none;
                }
            }
            @media (max-width: 991.98px) {
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > .container,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > .container-fluid,
                #labibaWebBotDiv .navbar-expand-lg > \%container-navbar-expand {
                    padding-right: 0;
                    padding-left: 0;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .navbar-expand-lg {
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                #labibaWebBotDiv .navbar-expand-lg .navbar-nav {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                #labibaWebBotDiv .navbar-expand-lg .navbar-nav .dropdown-menu {
                    position: absolute;
                }
                #labibaWebBotDiv .navbar-expand-lg .navbar-nav .nav-link {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > .container,
                #labibaWebBotDiv .navbar-expand-lg > #labibaWebBotDiv > .container-fluid,
                #labibaWebBotDiv .navbar-expand-lg > \%container-nesting {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                #labibaWebBotDiv .navbar-expand-lg .navbar-collapse {
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
                #labibaWebBotDiv .navbar-expand-lg .navbar-toggler {
                    display: none;
                }
            }
            @media (max-width: 1199.98px) {
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > .container,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > .container-fluid,
                #labibaWebBotDiv .navbar-expand-xl > \%container-navbar-expand {
                    padding-right: 0;
                    padding-left: 0;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .navbar-expand-xl {
                    -ms-flex-flow: row nowrap;
                    flex-flow: row nowrap;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                }
                #labibaWebBotDiv .navbar-expand-xl .navbar-nav {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                #labibaWebBotDiv .navbar-expand-xl .navbar-nav .dropdown-menu {
                    position: absolute;
                }
                #labibaWebBotDiv .navbar-expand-xl .navbar-nav .nav-link {
                    padding-right: 0.5rem;
                    padding-left: 0.5rem;
                }
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > .container,
                #labibaWebBotDiv .navbar-expand-xl > #labibaWebBotDiv > .container-fluid,
                #labibaWebBotDiv .navbar-expand-xl > \%container-nesting {
                    -ms-flex-wrap: nowrap;
                    flex-wrap: nowrap;
                }
                #labibaWebBotDiv .navbar-expand-xl .navbar-collapse {
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -ms-flex-preferred-size: auto;
                    flex-basis: auto;
                }
                #labibaWebBotDiv .navbar-expand-xl .navbar-toggler {
                    display: none;
                }
            }
            #labibaWebBotDiv .navbar-expand {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > .container,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > .container-fluid,
            #labibaWebBotDiv .navbar-expand > \%container-navbar-expand {
                padding-right: 0;
                padding-left: 0;
            }
            #labibaWebBotDiv .navbar-expand .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row;
            }
            #labibaWebBotDiv .navbar-expand .navbar-nav .dropdown-menu {
                position: absolute;
            }
            #labibaWebBotDiv .navbar-expand .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > #labibaWebBotDiv .container-lg,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > #labibaWebBotDiv .container-md,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > #labibaWebBotDiv .container-sm,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > #labibaWebBotDiv .container-xl,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > .container,
            #labibaWebBotDiv .navbar-expand > #labibaWebBotDiv > .container-fluid,
            #labibaWebBotDiv .navbar-expand > \%container-nesting {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }
            #labibaWebBotDiv .navbar-expand .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            #labibaWebBotDiv .navbar-expand .navbar-toggler {
                display: none;
            }
            #labibaWebBotDiv .navbar-light .navbar-brand,
            #labibaWebBotDiv .navbar-light .navbar-brand:focus,
            #labibaWebBotDiv .navbar-light .navbar-brand:hover {
                color: rgba(0, 0, 0, 0.9);
            }
            #labibaWebBotDiv .navbar-light .navbar-nav .nav-link {
                color: rgba(0, 0, 0, 0.5);
            }
            #labibaWebBotDiv .navbar-light .navbar-nav .nav-link:focus,
            #labibaWebBotDiv .navbar-light .navbar-nav .nav-link:hover {
                color: rgba(0, 0, 0, 0.7);
            }
            #labibaWebBotDiv .navbar-light .navbar-nav .nav-link.disabled {
                color: rgba(0, 0, 0, 0.3);
            }
            #labibaWebBotDiv .navbar-light .navbar-nav .active > .nav-link,
            #labibaWebBotDiv .navbar-light .navbar-nav .nav-link.active,
            #labibaWebBotDiv .navbar-light .navbar-nav .nav-link.show,
            #labibaWebBotDiv .navbar-light .navbar-nav .show > .nav-link {
                color: rgba(0, 0, 0, 0.9);
            }
            #labibaWebBotDiv .navbar-light .navbar-toggler {
                color: rgba(0, 0, 0, 0.5);
                border-color: rgba(0, 0, 0, 0.1);
            }
            #labibaWebBotDiv .navbar-light .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            }
            #labibaWebBotDiv .navbar-light .navbar-text {
                color: rgba(0, 0, 0, 0.5);
            }
            #labibaWebBotDiv .navbar-light .navbar-text a,
            #labibaWebBotDiv .navbar-light .navbar-text a:focus,
            #labibaWebBotDiv .navbar-light .navbar-text a:hover {
                color: rgba(0, 0, 0, 0.9);
            }
            #labibaWebBotDiv .navbar-dark .navbar-brand,
            #labibaWebBotDiv .navbar-dark .navbar-brand:focus,
            #labibaWebBotDiv .navbar-dark .navbar-brand:hover {
                color: #fff;
            }
            #labibaWebBotDiv .navbar-dark .navbar-nav .nav-link {
                color: hsla(0, 0%, 100%, 0.5);
            }
            #labibaWebBotDiv .navbar-dark .navbar-nav .nav-link:focus,
            #labibaWebBotDiv .navbar-dark .navbar-nav .nav-link:hover {
                color: hsla(0, 0%, 100%, 0.75);
            }
            #labibaWebBotDiv .navbar-dark .navbar-nav .nav-link.disabled {
                color: hsla(0, 0%, 100%, 0.25);
            }
            #labibaWebBotDiv .navbar-dark .navbar-nav .active > .nav-link,
            #labibaWebBotDiv .navbar-dark .navbar-nav .nav-link.active,
            #labibaWebBotDiv .navbar-dark .navbar-nav .nav-link.show,
            #labibaWebBotDiv .navbar-dark .navbar-nav .show > .nav-link {
                color: #fff;
            }
            #labibaWebBotDiv .navbar-dark .navbar-toggler {
                color: hsla(0, 0%, 100%, 0.5);
                border-color: hsla(0, 0%, 100%, 0.1);
            }
            #labibaWebBotDiv .navbar-dark .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            }
            #labibaWebBotDiv .navbar-dark .navbar-text {
                color: hsla(0, 0%, 100%, 0.5);
            }
            #labibaWebBotDiv .navbar-dark .navbar-text a,
            #labibaWebBotDiv .navbar-dark .navbar-text a:focus,
            #labibaWebBotDiv .navbar-dark .navbar-text a:hover {
                color: #fff;
            }
            #labibaWebBotDiv .card {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid rgba(0, 0, 0, 0.125);
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .card > hr {
                margin-right: 0;
                margin-left: 0;
            }
            #labibaWebBotDiv .card > .list-group:first-child .list-group-item:first-child {
                border-top-left-radius: 0.25rem;
                border-top-right-radius: 0.25rem;
            }
            #labibaWebBotDiv .card > .list-group:last-child .list-group-item:last-child {
                border-bottom-right-radius: 0.25rem;
                border-bottom-left-radius: 0.25rem;
            }
            #labibaWebBotDiv .card-body {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                min-height: 1px;
                padding: 1.25rem;
            }
            #labibaWebBotDiv .card-title {
                margin-bottom: 0.75rem;
            }
            #labibaWebBotDiv .card-subtitle {
                margin-top: -0.375rem;
                margin-bottom: 0;
            }
            #labibaWebBotDiv .card-text:last-child {
                margin-bottom: 0;
            }
            #labibaWebBotDiv .card-link:hover {
                text-decoration: none;
            }
            #labibaWebBotDiv .card-link + .card-link {
                margin-left: 1.25rem;
            }
            #labibaWebBotDiv .card-header {
                padding: 0.75rem 1.25rem;
                margin-bottom: 0;
                background-color: rgba(0, 0, 0, 0.03);
                border-bottom: 1px solid rgba(0, 0, 0, 0.125);
            }
            #labibaWebBotDiv .card-header:first-child {
                border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
            }
            #labibaWebBotDiv .card-header + .list-group .list-group-item:first-child {
                border-top: 0;
            }
            #labibaWebBotDiv .card-footer {
                padding: 0.75rem 1.25rem;
                background-color: rgba(0, 0, 0, 0.03);
                border-top: 1px solid rgba(0, 0, 0, 0.125);
            }
            #labibaWebBotDiv .card-footer:last-child {
                border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
            }
            #labibaWebBotDiv .card-header-tabs {
                margin-bottom: -0.75rem;
                border-bottom: 0;
            }
            #labibaWebBotDiv .card-header-pills,
            #labibaWebBotDiv .card-header-tabs {
                margin-right: -0.625rem;
                margin-left: -0.625rem;
            }
            #labibaWebBotDiv .card-img-overlay {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 1.25rem;
            }
            #labibaWebBotDiv .card-img,
            #labibaWebBotDiv .card-img-bottom,
            #labibaWebBotDiv .card-img-top {
                -ms-flex-negative: 0;
                flex-shrink: 0;
                width: 100%;
            }
            #labibaWebBotDiv .card-img,
            #labibaWebBotDiv .card-img-top {
                border-top-left-radius: calc(0.25rem - 1px);
                border-top-right-radius: calc(0.25rem - 1px);
            }
            #labibaWebBotDiv .card-img,
            #labibaWebBotDiv .card-img-bottom {
                border-bottom-right-radius: calc(0.25rem - 1px);
                border-bottom-left-radius: calc(0.25rem - 1px);
            }
            #labibaWebBotDiv .card-deck .card {
                margin-bottom: 15px;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .card-deck {
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-flow: row wrap;
                    flex-flow: row wrap;
                    margin-right: -15px;
                    margin-left: -15px;
                }
                #labibaWebBotDiv .card-deck .card {
                    -ms-flex: 1 0;
                    flex: 1 0;
                    margin-right: 15px;
                    margin-bottom: 0;
                    margin-left: 15px;
                }
            }
            #labibaWebBotDiv .card-group > .card {
                margin-bottom: 15px;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .card-group {
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-flow: row wrap;
                    flex-flow: row wrap;
                }
                #labibaWebBotDiv .card-group > .card {
                    -ms-flex: 1 0;
                    flex: 1 0;
                    margin-bottom: 0;
                }
                #labibaWebBotDiv .card-group > .card + .card {
                    margin-left: 0;
                    border-left: 0;
                }
                #labibaWebBotDiv .card-group > .card:not(:last-child) {
                    border-top-right-radius: 0;
                    border-bottom-right-radius: 0;
                }
                #labibaWebBotDiv .card-group > .card:not(:last-child) .card-header,
                #labibaWebBotDiv .card-group > .card:not(:last-child) .card-img-top {
                    border-top-right-radius: 0;
                }
                #labibaWebBotDiv .card-group > .card:not(:last-child) .card-footer,
                #labibaWebBotDiv .card-group > .card:not(:last-child) .card-img-bottom {
                    border-bottom-right-radius: 0;
                }
                #labibaWebBotDiv .card-group > .card:not(:first-child) {
                    border-top-left-radius: 0;
                    border-bottom-left-radius: 0;
                }
                #labibaWebBotDiv .card-group > .card:not(:first-child) .card-header,
                #labibaWebBotDiv .card-group > .card:not(:first-child) .card-img-top {
                    border-top-left-radius: 0;
                }
                #labibaWebBotDiv .card-group > .card:not(:first-child) .card-footer,
                #labibaWebBotDiv .card-group > .card:not(:first-child) .card-img-bottom {
                    border-bottom-left-radius: 0;
                }
            }
            #labibaWebBotDiv .card-columns .card {
                margin-bottom: 0.75rem;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .card-columns {
                    -webkit-column-count: 3;
                    -moz-column-count: 3;
                    column-count: 3;
                    -webkit-column-gap: 1.25rem;
                    -moz-column-gap: 1.25rem;
                    column-gap: 1.25rem;
                    orphans: 1;
                    widows: 1;
                }
                #labibaWebBotDiv .card-columns .card {
                    display: inline-block;
                    width: 100%;
                }
            }
            #labibaWebBotDiv .accordion > .card {
                overflow: hidden;
            }
            #labibaWebBotDiv .accordion > .card:not(:last-of-type) {
                border-bottom: 0;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            #labibaWebBotDiv .accordion > .card:not(:first-of-type) {
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            #labibaWebBotDiv .accordion > .card > .card-header {
                border-radius: 0;
                margin-bottom: -1px;
            }
            #labibaWebBotDiv .breadcrumb {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 0.75rem 1rem;
                margin-bottom: 1rem;
                list-style: none;
                background-color: #e9ecef;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .breadcrumb-item + .breadcrumb-item {
                padding-left: 0.5rem;
            }
            #labibaWebBotDiv .breadcrumb-item + .breadcrumb-item:before {
                display: inline-block;
                padding-right: 0.5rem;
                color: #6c757d;
                content: "/";
            }
            #labibaWebBotDiv .breadcrumb-item + .breadcrumb-item:hover:before {
                text-decoration: underline;
                text-decoration: none;
            }
            #labibaWebBotDiv .breadcrumb-item.active {
                color: #6c757d;
            }
            #labibaWebBotDiv .pagination {
                display: -ms-flexbox;
                display: flex;
                padding-left: 0;
                list-style: none;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .page-link {
                position: relative;
                display: block;
                padding: 0.5rem 0.75rem;
                margin-left: -1px;
                line-height: 1.25;
                color: #007bff;
                background-color: #fff;
                border: 1px solid #dee2e6;
            }
            #labibaWebBotDiv .page-link:hover {
                z-index: 2;
                color: #0056b3;
                text-decoration: none;
                background-color: #e9ecef;
                border-color: #dee2e6;
            }
            #labibaWebBotDiv .page-link:focus {
                z-index: 3;
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #labibaWebBotDiv .page-item:first-child .page-link {
                margin-left: 0;
                border-top-left-radius: 0.25rem;
                border-bottom-left-radius: 0.25rem;
            }
            #labibaWebBotDiv .page-item:last-child .page-link {
                border-top-right-radius: 0.25rem;
                border-bottom-right-radius: 0.25rem;
            }
            #labibaWebBotDiv .page-item.active .page-link {
                z-index: 3;
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }
            #labibaWebBotDiv .page-item.disabled .page-link {
                color: #6c757d;
                pointer-events: none;
                cursor: auto;
                background-color: #fff;
                border-color: #dee2e6;
            }
            #labibaWebBotDiv .pagination-lg .page-link {
                padding: 0.75rem 1.5rem;
                font-size: 1.25rem;
                line-height: 1.5;
            }
            #labibaWebBotDiv .pagination-lg .page-item:first-child .page-link {
                border-top-left-radius: 0.3rem;
                border-bottom-left-radius: 0.3rem;
            }
            #labibaWebBotDiv .pagination-lg .page-item:last-child .page-link {
                border-top-right-radius: 0.3rem;
                border-bottom-right-radius: 0.3rem;
            }
            #labibaWebBotDiv .pagination-sm .page-link {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
                line-height: 1.5;
            }
            #labibaWebBotDiv .pagination-sm .page-item:first-child .page-link {
                border-top-left-radius: 0.2rem;
                border-bottom-left-radius: 0.2rem;
            }
            #labibaWebBotDiv .pagination-sm .page-item:last-child .page-link {
                border-top-right-radius: 0.2rem;
                border-bottom-right-radius: 0.2rem;
            }
            #labibaWebBotDiv .badge {
                display: inline-block;
                padding: 0.25em 0.4em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: 0.25rem;
                -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .badge {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            a#labibaWebBotDiv .badge:focus,
            a#labibaWebBotDiv .badge:hover {
                text-decoration: none;
            }
            #labibaWebBotDiv .badge:empty {
                display: none;
            }
            #labibaWebBotDiv .btn .badge {
                position: relative;
                top: -1px;
            }
            #labibaWebBotDiv .badge-pill {
                padding-right: 0.6em;
                padding-left: 0.6em;
                border-radius: 10rem;
            }
            #labibaWebBotDiv .badge-primary {
                color: #fff;
                background-color: #007bff;
            }
            a#labibaWebBotDiv .badge-primary:focus,
            a#labibaWebBotDiv .badge-primary:hover {
                color: #fff;
                background-color: #0062cc;
            }
            a#labibaWebBotDiv .badge-primary.focus,
            a#labibaWebBotDiv .badge-primary:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            }
            #labibaWebBotDiv .badge-secondary {
                color: #fff;
                background-color: #6c757d;
            }
            a#labibaWebBotDiv .badge-secondary:focus,
            a#labibaWebBotDiv .badge-secondary:hover {
                color: #fff;
                background-color: #545b62;
            }
            a#labibaWebBotDiv .badge-secondary.focus,
            a#labibaWebBotDiv .badge-secondary:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem hsla(208, 7%, 46%, 0.5);
                box-shadow: 0 0 0 0.2rem hsla(208, 7%, 46%, 0.5);
            }
            #labibaWebBotDiv .badge-success {
                color: #fff;
                background-color: #28a745;
            }
            a#labibaWebBotDiv .badge-success:focus,
            a#labibaWebBotDiv .badge-success:hover {
                color: #fff;
                background-color: #1e7e34;
            }
            a#labibaWebBotDiv .badge-success.focus,
            a#labibaWebBotDiv .badge-success:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            }
            #labibaWebBotDiv .badge-info {
                color: #fff;
                background-color: #17a2b8;
            }
            a#labibaWebBotDiv .badge-info:focus,
            a#labibaWebBotDiv .badge-info:hover {
                color: #fff;
                background-color: #117a8b;
            }
            a#labibaWebBotDiv .badge-info.focus,
            a#labibaWebBotDiv .badge-info:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            }
            #labibaWebBotDiv .badge-warning {
                color: #212529;
                background-color: #ffc107;
            }
            a#labibaWebBotDiv .badge-warning:focus,
            a#labibaWebBotDiv .badge-warning:hover {
                color: #212529;
                background-color: #d39e00;
            }
            a#labibaWebBotDiv .badge-warning.focus,
            a#labibaWebBotDiv .badge-warning:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            }
            #labibaWebBotDiv .badge-danger {
                color: #fff;
                background-color: #dc3545;
            }
            a#labibaWebBotDiv .badge-danger:focus,
            a#labibaWebBotDiv .badge-danger:hover {
                color: #fff;
                background-color: #bd2130;
            }
            a#labibaWebBotDiv .badge-danger.focus,
            a#labibaWebBotDiv .badge-danger:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            }
            #labibaWebBotDiv .badge-light {
                color: #212529;
                background-color: #f8f9fa;
            }
            a#labibaWebBotDiv .badge-light:focus,
            a#labibaWebBotDiv .badge-light:hover {
                color: #212529;
                background-color: #dae0e5;
            }
            a#labibaWebBotDiv .badge-light.focus,
            a#labibaWebBotDiv .badge-light:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            }
            #labibaWebBotDiv .badge-dark {
                color: #fff;
                background-color: #343a40;
            }
            a#labibaWebBotDiv .badge-dark:focus,
            a#labibaWebBotDiv .badge-dark:hover {
                color: #fff;
                background-color: #1d2124;
            }
            a#labibaWebBotDiv .badge-dark.focus,
            a#labibaWebBotDiv .badge-dark:focus {
                outline: 0;
                -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
                box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            }
            #labibaWebBotDiv .jumbotron {
                padding: 2rem 1rem;
                margin-bottom: 2rem;
                background-color: #e9ecef;
                border-radius: 0.3rem;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .jumbotron {
                    padding: 4rem 2rem;
                }
            }
            #labibaWebBotDiv .jumbotron-fluid {
                padding-right: 0;
                padding-left: 0;
                border-radius: 0;
            }
            #labibaWebBotDiv .alert {
                position: relative;
                padding: 0.75rem 1.25rem;
                margin-bottom: 1rem;
                border: 1px solid transparent;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .alert-heading {
                color: inherit;
            }
            #labibaWebBotDiv .alert-link {
                font-weight: 700;
            }
            #labibaWebBotDiv .alert-dismissible {
                padding-right: 4rem;
            }
            #labibaWebBotDiv .alert-dismissible .close {
                position: absolute;
                top: 0;
                right: 0;
                padding: 0.75rem 1.25rem;
                color: inherit;
            }
            #labibaWebBotDiv .alert-primary {
                color: #004085;
                background-color: #cce5ff;
                border-color: #b8daff;
            }
            #labibaWebBotDiv .alert-primary hr {
                border-top-color: #9fcdff;
            }
            #labibaWebBotDiv .alert-primary .alert-link {
                color: #002752;
            }
            #labibaWebBotDiv .alert-secondary {
                color: #383d41;
                background-color: #e2e3e5;
                border-color: #d6d8db;
            }
            #labibaWebBotDiv .alert-secondary hr {
                border-top-color: #c8cbcf;
            }
            #labibaWebBotDiv .alert-secondary .alert-link {
                color: #202326;
            }
            #labibaWebBotDiv .alert-success {
                color: #155724;
                background-color: #d4edda;
                border-color: #c3e6cb;
            }
            #labibaWebBotDiv .alert-success hr {
                border-top-color: #b1dfbb;
            }
            #labibaWebBotDiv .alert-success .alert-link {
                color: #0b2e13;
            }
            #labibaWebBotDiv .alert-info {
                color: #0c5460;
                background-color: #d1ecf1;
                border-color: #bee5eb;
            }
            #labibaWebBotDiv .alert-info hr {
                border-top-color: #abdde5;
            }
            #labibaWebBotDiv .alert-info .alert-link {
                color: #062c33;
            }
            #labibaWebBotDiv .alert-warning {
                color: #856404;
                background-color: #fff3cd;
                border-color: #ffeeba;
            }
            #labibaWebBotDiv .alert-warning hr {
                border-top-color: #ffe8a1;
            }
            #labibaWebBotDiv .alert-warning .alert-link {
                color: #533f03;
            }
            #labibaWebBotDiv .alert-danger {
                color: #721c24;
                background-color: #f8d7da;
                border-color: #f5c6cb;
            }
            #labibaWebBotDiv .alert-danger hr {
                border-top-color: #f1b0b7;
            }
            #labibaWebBotDiv .alert-danger .alert-link {
                color: #491217;
            }
            #labibaWebBotDiv .alert-light {
                color: #818182;
                background-color: #fefefe;
                border-color: #fdfdfe;
            }
            #labibaWebBotDiv .alert-light hr {
                border-top-color: #ececf5;
            }
            #labibaWebBotDiv .alert-light .alert-link {
                color: #686868;
            }
            #labibaWebBotDiv .alert-dark {
                color: #1b1e21;
                background-color: #d6d8d9;
                border-color: #c6c8ca;
            }
            #labibaWebBotDiv .alert-dark hr {
                border-top-color: #b9bbbe;
            }
            #labibaWebBotDiv .alert-dark .alert-link {
                color: #040405;
            }
            @-webkit-keyframes progress-bar-stripes {
                0% {
                    background-position: 1rem 0;
                }
                to {
                    background-position: 0 0;
                }
            }
            @keyframes progress-bar-stripes {
                0% {
                    background-position: 1rem 0;
                }
                to {
                    background-position: 0 0;
                }
            }
            #labibaWebBotDiv .progress {
                display: -ms-flexbox;
                display: flex;
                height: 1rem;
                overflow: hidden;
                font-size: 0.75rem;
                background-color: #e9ecef;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .progress-bar {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                -ms-flex-pack: center;
                justify-content: center;
                overflow: hidden;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                background-color: #007bff;
                -webkit-transition: width 0.6s ease;
                -o-transition: width 0.6s ease;
                transition: width 0.6s ease;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .progress-bar {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .progress-bar-striped {
                background-image: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, 0.15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, 0.15) 0, hsla(0, 0%, 100%, 0.15) 75%, transparent 0, transparent);
                background-image: -o-linear-gradient(45deg, hsla(0, 0%, 100%, 0.15) 25%, transparent 25%, transparent 50%, hsla(0, 0%, 100%, 0.15) 50%, hsla(0, 0%, 100%, 0.15) 75%, transparent 75%, transparent);
                background-image: linear-gradient(45deg, hsla(0, 0%, 100%, 0.15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, 0.15) 0, hsla(0, 0%, 100%, 0.15) 75%, transparent 0, transparent);
                background-size: 1rem 1rem;
            }
            #labibaWebBotDiv .progress-bar-animated {
                -webkit-animation: progress-bar-stripes 1s linear infinite;
                animation: progress-bar-stripes 1s linear infinite;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .progress-bar-animated {
                    -webkit-animation: none;
                    animation: none;
                }
            }
            #labibaWebBotDiv .media {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: start;
                align-items: flex-start;
            }
            #labibaWebBotDiv .media-body {
                -ms-flex: 1 1;
                flex: 1 1;
            }
            #labibaWebBotDiv .list-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                padding-left: 0;
                margin-bottom: 0;
            }
            #labibaWebBotDiv .list-group-item-action {
                width: 100%;
                color: #495057;
                text-align: inherit;
            }
            #labibaWebBotDiv .list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-action:hover {
                z-index: 1;
                color: #495057;
                text-decoration: none;
                background-color: #f8f9fa;
            }
            #labibaWebBotDiv .list-group-item-action:active {
                color: #212529;
                background-color: #e9ecef;
            }
            #labibaWebBotDiv .list-group-item {
                position: relative;
                display: block;
                padding: 0.75rem 1.25rem;
                background-color: #fff;
                border: 1px solid rgba(0, 0, 0, 0.125);
            }
            #labibaWebBotDiv .list-group-item:first-child {
                border-top-left-radius: 0.25rem;
                border-top-right-radius: 0.25rem;
            }
            #labibaWebBotDiv .list-group-item:last-child {
                border-bottom-right-radius: 0.25rem;
                border-bottom-left-radius: 0.25rem;
            }
            #labibaWebBotDiv .list-group-item.disabled,
            #labibaWebBotDiv .list-group-item:disabled {
                color: #6c757d;
                pointer-events: none;
                background-color: #fff;
            }
            #labibaWebBotDiv .list-group-item.active {
                z-index: 2;
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }
            #labibaWebBotDiv .list-group-item + #labibaWebBotDiv .list-group-item {
                border-top-width: 0;
            }
            #labibaWebBotDiv .list-group-item + #labibaWebBotDiv .list-group-item.active {
                margin-top: -1px;
                border-top-width: 1px;
            }
            #labibaWebBotDiv .list-group-horizontal {
                -ms-flex-direction: row;
                flex-direction: row;
            }
            #labibaWebBotDiv .list-group-horizontal .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0;
            }
            #labibaWebBotDiv .list-group-horizontal .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0;
            }
            #labibaWebBotDiv .list-group-horizontal .list-group-item.active {
                margin-top: 0;
            }
            #labibaWebBotDiv .list-group-horizontal .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }
            #labibaWebBotDiv .list-group-horizontal .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .list-group-horizontal-sm {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                #labibaWebBotDiv .list-group-horizontal-sm .list-group-item:first-child {
                    border-bottom-left-radius: 0.25rem;
                    border-top-right-radius: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-sm .list-group-item:last-child {
                    border-top-right-radius: 0.25rem;
                    border-bottom-left-radius: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-sm .list-group-item.active {
                    margin-top: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-sm .list-group-item + .list-group-item {
                    border-top-width: 1px;
                    border-left-width: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-sm .list-group-item + .list-group-item.active {
                    margin-left: -1px;
                    border-left-width: 1px;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .list-group-horizontal-md {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                #labibaWebBotDiv .list-group-horizontal-md .list-group-item:first-child {
                    border-bottom-left-radius: 0.25rem;
                    border-top-right-radius: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-md .list-group-item:last-child {
                    border-top-right-radius: 0.25rem;
                    border-bottom-left-radius: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-md .list-group-item.active {
                    margin-top: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-md .list-group-item + .list-group-item {
                    border-top-width: 1px;
                    border-left-width: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-md .list-group-item + .list-group-item.active {
                    margin-left: -1px;
                    border-left-width: 1px;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .list-group-horizontal-lg {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                #labibaWebBotDiv .list-group-horizontal-lg .list-group-item:first-child {
                    border-bottom-left-radius: 0.25rem;
                    border-top-right-radius: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-lg .list-group-item:last-child {
                    border-top-right-radius: 0.25rem;
                    border-bottom-left-radius: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-lg .list-group-item.active {
                    margin-top: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-lg .list-group-item + .list-group-item {
                    border-top-width: 1px;
                    border-left-width: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-lg .list-group-item + .list-group-item.active {
                    margin-left: -1px;
                    border-left-width: 1px;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .list-group-horizontal-xl {
                    -ms-flex-direction: row;
                    flex-direction: row;
                }
                #labibaWebBotDiv .list-group-horizontal-xl .list-group-item:first-child {
                    border-bottom-left-radius: 0.25rem;
                    border-top-right-radius: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-xl .list-group-item:last-child {
                    border-top-right-radius: 0.25rem;
                    border-bottom-left-radius: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-xl .list-group-item.active {
                    margin-top: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-xl .list-group-item + .list-group-item {
                    border-top-width: 1px;
                    border-left-width: 0;
                }
                #labibaWebBotDiv .list-group-horizontal-xl .list-group-item + .list-group-item.active {
                    margin-left: -1px;
                    border-left-width: 1px;
                }
            }
            #labibaWebBotDiv .list-group-flush .list-group-item {
                border-right-width: 0;
                border-left-width: 0;
                border-radius: 0;
            }
            #labibaWebBotDiv .list-group-flush .list-group-item:first-child {
                border-top-width: 0;
            }
            #labibaWebBotDiv .list-group-flush:last-child .list-group-item:last-child {
                border-bottom-width: 0;
            }
            #labibaWebBotDiv .list-group-item-primary {
                color: #004085;
                background-color: #b8daff;
            }
            #labibaWebBotDiv .list-group-item-primary.list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-primary.list-group-item-action:hover {
                color: #004085;
                background-color: #9fcdff;
            }
            #labibaWebBotDiv .list-group-item-primary.list-group-item-action.active {
                color: #fff;
                background-color: #004085;
                border-color: #004085;
            }
            #labibaWebBotDiv .list-group-item-secondary {
                color: #383d41;
                background-color: #d6d8db;
            }
            #labibaWebBotDiv .list-group-item-secondary.list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-secondary.list-group-item-action:hover {
                color: #383d41;
                background-color: #c8cbcf;
            }
            #labibaWebBotDiv .list-group-item-secondary.list-group-item-action.active {
                color: #fff;
                background-color: #383d41;
                border-color: #383d41;
            }
            #labibaWebBotDiv .list-group-item-success {
                color: #155724;
                background-color: #c3e6cb;
            }
            #labibaWebBotDiv .list-group-item-success.list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-success.list-group-item-action:hover {
                color: #155724;
                background-color: #b1dfbb;
            }
            #labibaWebBotDiv .list-group-item-success.list-group-item-action.active {
                color: #fff;
                background-color: #155724;
                border-color: #155724;
            }
            #labibaWebBotDiv .list-group-item-info {
                color: #0c5460;
                background-color: #bee5eb;
            }
            #labibaWebBotDiv .list-group-item-info.list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-info.list-group-item-action:hover {
                color: #0c5460;
                background-color: #abdde5;
            }
            #labibaWebBotDiv .list-group-item-info.list-group-item-action.active {
                color: #fff;
                background-color: #0c5460;
                border-color: #0c5460;
            }
            #labibaWebBotDiv .list-group-item-warning {
                color: #856404;
                background-color: #ffeeba;
            }
            #labibaWebBotDiv .list-group-item-warning.list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-warning.list-group-item-action:hover {
                color: #856404;
                background-color: #ffe8a1;
            }
            #labibaWebBotDiv .list-group-item-warning.list-group-item-action.active {
                color: #fff;
                background-color: #856404;
                border-color: #856404;
            }
            #labibaWebBotDiv .list-group-item-danger {
                color: #721c24;
                background-color: #f5c6cb;
            }
            #labibaWebBotDiv .list-group-item-danger.list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-danger.list-group-item-action:hover {
                color: #721c24;
                background-color: #f1b0b7;
            }
            #labibaWebBotDiv .list-group-item-danger.list-group-item-action.active {
                color: #fff;
                background-color: #721c24;
                border-color: #721c24;
            }
            #labibaWebBotDiv .list-group-item-light {
                color: #818182;
                background-color: #fdfdfe;
            }
            #labibaWebBotDiv .list-group-item-light.list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-light.list-group-item-action:hover {
                color: #818182;
                background-color: #ececf5;
            }
            #labibaWebBotDiv .list-group-item-light.list-group-item-action.active {
                color: #fff;
                background-color: #818182;
                border-color: #818182;
            }
            #labibaWebBotDiv .list-group-item-dark {
                color: #1b1e21;
                background-color: #c6c8ca;
            }
            #labibaWebBotDiv .list-group-item-dark.list-group-item-action:focus,
            #labibaWebBotDiv .list-group-item-dark.list-group-item-action:hover {
                color: #1b1e21;
                background-color: #b9bbbe;
            }
            #labibaWebBotDiv .list-group-item-dark.list-group-item-action.active {
                color: #fff;
                background-color: #1b1e21;
                border-color: #1b1e21;
            }
            #labibaWebBotDiv .close {
                float: right;
                font-size: 1.5rem;
                font-weight: 700;
                line-height: 1;
                color: #000;
                text-shadow: 0 1px 0 #fff;
                opacity: 0.5;
            }
            #labibaWebBotDiv .close:hover {
                color: #000;
                text-decoration: none;
            }
            #labibaWebBotDiv .close:not(:disabled):not(.disabled):focus,
            #labibaWebBotDiv .close:not(:disabled):not(.disabled):hover {
                opacity: 0.75;
            }
            #labibaWebBotDiv button.close {
                padding: 0;
                background-color: transparent;
                border: 0;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            #labibaWebBotDiv a.close.disabled {
                pointer-events: none;
            }
            #labibaWebBotDiv .toast {
                max-width: 350px;
                overflow: hidden;
                font-size: 0.875rem;
                background-color: hsla(0, 0%, 100%, 0.85);
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, 0.1);
                -webkit-box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
                box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
                -webkit-backdrop-filter: blur(10px);
                backdrop-filter: blur(10px);
                opacity: 0;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .toast:not(:last-child) {
                margin-bottom: 0.75rem;
            }
            #labibaWebBotDiv .toast.showing {
                opacity: 1;
            }
            #labibaWebBotDiv .toast.show {
                display: block;
                opacity: 1;
            }
            #labibaWebBotDiv .toast.hide {
                display: none;
            }
            #labibaWebBotDiv .toast-header {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                padding: 0.25rem 0.75rem;
                color: #6c757d;
                background-color: hsla(0, 0%, 100%, 0.85);
                background-clip: padding-box;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }
            #labibaWebBotDiv .toast-body {
                padding: 0.75rem;
            }
            .modal-open {
                overflow: hidden;
            }
            .modal-open .labibaWebBotModel.modal {
                overflow-x: hidden;
                overflow-y: auto;
            }
            .labibaWebBotModel.modal {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1050;
                display: none;
                width: 100%;
                height: 100%;
                overflow: hidden;
                outline: 0;
            }
            .labibaWebBotModel .modal-dialog {
                position: relative;
                width: auto;
                margin: 0.5rem;
                pointer-events: none;
            }
            .labibaWebBotModel.modal.fade .modal-dialog {
                -webkit-transition: -webkit-transform 0.3s ease-out;
                transition: -webkit-transform 0.3s ease-out;
                -o-transition: transform 0.3s ease-out;
                transition: transform 0.3s ease-out;
                transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
                -webkit-transform: translateY(-50px);
                -ms-transform: translateY(-50px);
                transform: translateY(-50px);
            }
            @media (prefers-reduced-motion: reduce) {
                .labibaWebBotModel.modal.fade .modal-dialog {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            .labibaWebBotModel.modal.show .modal-dialog {
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
            }
            .labibaWebBotModel.modal.modal-static .modal-dialog {
                -webkit-transform: scale(1.02);
                -ms-transform: scale(1.02);
                transform: scale(1.02);
            }
            .modal-dialog-scrollable {
                display: -ms-flexbox;
                display: flex;
                max-height: calc(100% - 1rem);
            }
            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 1rem);
                overflow: hidden;
            }
            .modal-dialog-scrollable .modal-footer,
            .modal-dialog-scrollable .modal-header {
                -ms-flex-negative: 0;
                flex-shrink: 0;
            }
            .modal-dialog-scrollable .modal-body {
                overflow-y: auto;
            }
            .modal-dialog-centered {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                min-height: calc(100% - 1rem);
            }
            .modal-dialog-centered:before {
                display: block;
                height: calc(100vh - 1rem);
                content: "";
            }
            .modal-dialog-centered.modal-dialog-scrollable {
                -ms-flex-direction: column;
                flex-direction: column;
                -ms-flex-pack: center;
                justify-content: center;
                height: 100%;
            }
            .modal-dialog-centered.modal-dialog-scrollable .modal-content {
                max-height: none;
            }
            .modal-dialog-centered.modal-dialog-scrollable:before {
                content: none;
            }
            .labibaWebBotModel .modal-content {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 0.3rem;
                outline: 0;
            }
            .labiba-backdrop {
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                z-index: 1040 !important;
                width: 100vw !important;
                height: 100vh !important;
                background-color: #000 !important;
            }
            .labiba-backdrop.fade {
                opacity: 0 !important;
            }
            .labiba-backdrop.show {
                opacity: 0.5 !important;
            }
            .modal-header {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: start;
                align-items: flex-start;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: 1rem;
                border-bottom: 1px solid #dee2e6;
                border-top-left-radius: calc(0.3rem - 1px);
                border-top-right-radius: calc(0.3rem - 1px);
            }
            .modal-header .close {
                padding: 1rem;
                margin: -1rem -1rem -1rem auto;
            }
            .modal-title {
                margin-bottom: 0;
                line-height: 1.5;
            }
            .labibaWebBotModel .modal-body {
                position: relative;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                padding: 1rem;
            }
            .modal-footer {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: end;
                justify-content: flex-end;
                padding: 0.75rem;
                border-top: 1px solid #dee2e6;
                border-bottom-right-radius: calc(0.3rem - 1px);
                border-bottom-left-radius: calc(0.3rem - 1px);
            }
            .modal-footer > * {
                margin: 0.25rem;
            }
            .modal-scrollbar-measure {
                position: absolute;
                top: -9999px;
                width: 50px;
                height: 50px;
                overflow: scroll;
            }
            @media (min-width: 576px) {
                .labibaWebBotModel .modal-dialog {
                    max-width: 500px;
                    margin: 1.75rem auto;
                }
                .modal-dialog-scrollable {
                    max-height: calc(100% - 3.5rem);
                }
                .modal-dialog-scrollable .modal-content {
                    max-height: calc(100vh - 3.5rem);
                }
                .modal-dialog-centered {
                    min-height: calc(100% - 3.5rem);
                }
                .modal-dialog-centered:before {
                    height: calc(100vh - 3.5rem);
                }
                .modal-sm {
                    max-width: 300px;
                }
            }
            @media (min-width: 992px) {
                .modal-lg,
                .modal-xl {
                    max-width: 800px;
                }
            }
            @media (min-width: 1200px) {
                .modal-xl {
                    max-width: 1140px;
                }
            }
            #labibaWebBotDiv .tooltip {
                position: absolute;
                z-index: 1070;
                display: block;
                margin: 0;
                font-family: -apple-system, BlinkMacSystemFont, Loew-Next-Arabic-Medium, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif;
                font-style: normal;
                font-weight: 400;
                line-height: 1.5;
                text-align: left;
                text-align: start;
                text-decoration: none;
                text-shadow: none;
                text-transform: none;
                letter-spacing: normal;
                word-break: normal;
                word-spacing: normal;
                white-space: normal;
                line-break: auto;
                font-size: 0.875rem;
                word-wrap: break-word;
                opacity: 0;
            }
            #labibaWebBotDiv .tooltip.show {
                opacity: 0.9;
            }
            #labibaWebBotDiv .tooltip .arrow {
                position: absolute;
                display: block;
                width: 0.8rem;
                height: 0.4rem;
            }
            #labibaWebBotDiv .tooltip .arrow:before {
                position: absolute;
                content: "";
                border-color: transparent;
                border-style: solid;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="top"],
            #labibaWebBotDiv .bs-tooltip-top {
                padding: 0.4rem 0;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="top"] .arrow,
            #labibaWebBotDiv .bs-tooltip-top .arrow {
                bottom: 0;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="top"] .arrow:before,
            #labibaWebBotDiv .bs-tooltip-top .arrow:before {
                top: 0;
                border-width: 0.4rem 0.4rem 0;
                border-top-color: #000;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="right"],
            #labibaWebBotDiv .bs-tooltip-right {
                padding: 0 0.4rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="right"] .arrow,
            #labibaWebBotDiv .bs-tooltip-right .arrow {
                left: 0;
                width: 0.4rem;
                height: 0.8rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="right"] .arrow:before,
            #labibaWebBotDiv .bs-tooltip-right .arrow:before {
                right: 0;
                border-width: 0.4rem 0.4rem 0.4rem 0;
                border-right-color: #000;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="bottom"],
            #labibaWebBotDiv .bs-tooltip-bottom {
                padding: 0.4rem 0;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="bottom"] .arrow,
            #labibaWebBotDiv .bs-tooltip-bottom .arrow {
                top: 0;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="bottom"] .arrow:before,
            #labibaWebBotDiv .bs-tooltip-bottom .arrow:before {
                bottom: 0;
                border-width: 0 0.4rem 0.4rem;
                border-bottom-color: #000;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="left"],
            #labibaWebBotDiv .bs-tooltip-left {
                padding: 0 0.4rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="left"] .arrow,
            #labibaWebBotDiv .bs-tooltip-left .arrow {
                right: 0;
                width: 0.4rem;
                height: 0.8rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-tooltip-auto[x-placement^="left"] .arrow:before,
            #labibaWebBotDiv .bs-tooltip-left .arrow:before {
                left: 0;
                border-width: 0.4rem 0 0.4rem 0.4rem;
                border-left-color: #000;
            }
            #labibaWebBotDiv .tooltip-inner {
                max-width: 200px;
                padding: 0.25rem 0.5rem;
                color: #fff;
                text-align: center;
                background-color: #000;
                border-radius: 0.25rem;
            }
            #labibaWebBotDiv .popover {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1060;
                display: block;
                max-width: 276px;
                font-family: -apple-system, BlinkMacSystemFont, Loew-Next-Arabic-Medium, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif;
                font-style: normal;
                font-weight: 400;
                line-height: 1.5;
                text-align: left;
                text-align: start;
                text-decoration: none;
                text-shadow: none;
                text-transform: none;
                letter-spacing: normal;
                word-break: normal;
                word-spacing: normal;
                white-space: normal;
                line-break: auto;
                font-size: 0.875rem;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 0.3rem;
            }
            #labibaWebBotDiv .popover .arrow {
                position: absolute;
                display: block;
                width: 1rem;
                height: 0.5rem;
                margin: 0 0.3rem;
            }
            #labibaWebBotDiv .popover .arrow:after,
            #labibaWebBotDiv .popover .arrow:before {
                position: absolute;
                display: block;
                content: "";
                border-color: transparent;
                border-style: solid;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="top"],
            #labibaWebBotDiv .bs-popover-top {
                margin-bottom: 0.5rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="top"] > .arrow,
            #labibaWebBotDiv .bs-popover-top > .arrow {
                bottom: calc(-0.5rem - 1px);
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="top"] > .arrow:before,
            #labibaWebBotDiv .bs-popover-top > .arrow:before {
                bottom: 0;
                border-width: 0.5rem 0.5rem 0;
                border-top-color: rgba(0, 0, 0, 0.25);
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="top"] > .arrow:after,
            #labibaWebBotDiv .bs-popover-top > .arrow:after {
                bottom: 1px;
                border-width: 0.5rem 0.5rem 0;
                border-top-color: #fff;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="right"],
            #labibaWebBotDiv .bs-popover-right {
                margin-left: 0.5rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="right"] > .arrow,
            #labibaWebBotDiv .bs-popover-right > .arrow {
                left: calc(-0.5rem - 1px);
                width: 0.5rem;
                height: 1rem;
                margin: 0.3rem 0;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="right"] > .arrow:before,
            #labibaWebBotDiv .bs-popover-right > .arrow:before {
                left: 0;
                border-width: 0.5rem 0.5rem 0.5rem 0;
                border-right-color: rgba(0, 0, 0, 0.25);
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="right"] > .arrow:after,
            #labibaWebBotDiv .bs-popover-right > .arrow:after {
                left: 1px;
                border-width: 0.5rem 0.5rem 0.5rem 0;
                border-right-color: #fff;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="bottom"],
            #labibaWebBotDiv .bs-popover-bottom {
                margin-top: 0.5rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="bottom"] > .arrow,
            #labibaWebBotDiv .bs-popover-bottom > .arrow {
                top: calc(-0.5rem - 1px);
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="bottom"] > .arrow:before,
            #labibaWebBotDiv .bs-popover-bottom > .arrow:before {
                top: 0;
                border-width: 0 0.5rem 0.5rem;
                border-bottom-color: rgba(0, 0, 0, 0.25);
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="bottom"] > .arrow:after,
            #labibaWebBotDiv .bs-popover-bottom > .arrow:after {
                top: 1px;
                border-width: 0 0.5rem 0.5rem;
                border-bottom-color: #fff;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="bottom"] .popover-header:before,
            #labibaWebBotDiv .bs-popover-bottom .popover-header:before {
                position: absolute;
                top: 0;
                left: 50%;
                display: block;
                width: 1rem;
                margin-left: -0.5rem;
                content: "";
                border-bottom: 1px solid #f7f7f7;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="left"],
            #labibaWebBotDiv .bs-popover-left {
                margin-right: 0.5rem;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="left"] > .arrow,
            #labibaWebBotDiv .bs-popover-left > .arrow {
                right: calc(-0.5rem - 1px);
                width: 0.5rem;
                height: 1rem;
                margin: 0.3rem 0;
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="left"] > .arrow:before,
            #labibaWebBotDiv .bs-popover-left > .arrow:before {
                right: 0;
                border-width: 0.5rem 0 0.5rem 0.5rem;
                border-left-color: rgba(0, 0, 0, 0.25);
            }
            #labibaWebBotDiv #labibaWebBotDiv .bs-popover-auto[x-placement^="left"] > .arrow:after,
            #labibaWebBotDiv .bs-popover-left > .arrow:after {
                right: 1px;
                border-width: 0.5rem 0 0.5rem 0.5rem;
                border-left-color: #fff;
            }
            #labibaWebBotDiv .popover-header {
                padding: 0.5rem 0.75rem;
                margin-bottom: 0;
                font-size: 1rem;
                background-color: #f7f7f7;
                border-bottom: 1px solid #ebebeb;
                border-top-left-radius: calc(0.3rem - 1px);
                border-top-right-radius: calc(0.3rem - 1px);
            }
            #labibaWebBotDiv .popover-header:empty {
                display: none;
            }
            #labibaWebBotDiv .popover-body {
                padding: 0.5rem 0.75rem;
                color: #212529;
            }
            #labibaWebBotDiv .carousel {
                position: relative;
            }
            #labibaWebBotDiv .carousel.pointer-event {
                -ms-touch-action: pan-y;
                touch-action: pan-y;
            }
            #labibaWebBotDiv .carousel-inner {
                position: relative;
                width: 100%;
                overflow: hidden;
            }
            #labibaWebBotDiv .carousel-inner:after {
                display: block;
                clear: both;
                content: "";
            }
            #labibaWebBotDiv .carousel-item {
                position: relative;
                display: none;
                float: left;
                width: 100%;
                margin-right: -100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-transition: -webkit-transform 0.6s ease-in-out;
                transition: -webkit-transform 0.6s ease-in-out;
                -o-transition: transform 0.6s ease-in-out;
                transition: transform 0.6s ease-in-out;
                transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .carousel-item {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .carousel-item-next,
            #labibaWebBotDiv .carousel-item-prev,
            #labibaWebBotDiv .carousel-item.active {
                display: block;
            }
            #labibaWebBotDiv .active.carousel-item-right,
            #labibaWebBotDiv .carousel-item-next:not(.carousel-item-left) {
                -webkit-transform: translateX(100%);
                -ms-transform: translateX(100%);
                transform: translateX(100%);
            }
            #labibaWebBotDiv .active.carousel-item-left,
            #labibaWebBotDiv .carousel-item-prev:not(.carousel-item-right) {
                -webkit-transform: translateX(-100%);
                -ms-transform: translateX(-100%);
                transform: translateX(-100%);
            }
            #labibaWebBotDiv .carousel-fade .carousel-item {
                opacity: 0;
                -webkit-transition-property: opacity;
                -o-transition-property: opacity;
                transition-property: opacity;
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
            }
            #labibaWebBotDiv .carousel-fade .carousel-item-next.carousel-item-left,
            #labibaWebBotDiv .carousel-fade .carousel-item-prev.carousel-item-right,
            #labibaWebBotDiv .carousel-fade .carousel-item.active {
                z-index: 1;
                opacity: 1;
            }
            #labibaWebBotDiv .carousel-fade .active.carousel-item-left,
            #labibaWebBotDiv .carousel-fade .active.carousel-item-right {
                z-index: 0;
                opacity: 0;
                -webkit-transition: opacity 0s 0.6s;
                -o-transition: opacity 0s 0.6s;
                transition: opacity 0s 0.6s;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .carousel-fade .active.carousel-item-left,
                #labibaWebBotDiv .carousel-fade .active.carousel-item-right {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .carousel-control-next,
            #labibaWebBotDiv .carousel-control-prev {
                position: absolute;
                top: 0;
                bottom: 0;
                z-index: 1;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: 15%;
                color: #fff;
                text-align: center;
                opacity: 0.5;
                -webkit-transition: opacity 0.15s ease;
                -o-transition: opacity 0.15s ease;
                transition: opacity 0.15s ease;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .carousel-control-next,
                #labibaWebBotDiv .carousel-control-prev {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .carousel-control-next:focus,
            #labibaWebBotDiv .carousel-control-next:hover,
            #labibaWebBotDiv .carousel-control-prev:focus,
            #labibaWebBotDiv .carousel-control-prev:hover {
                color: #fff;
                text-decoration: none;
                outline: 0;
                opacity: 0.9;
            }
            #labibaWebBotDiv .carousel-control-prev {
                left: 0;
            }
            #labibaWebBotDiv .carousel-control-next {
                right: 0;
            }
            #labibaWebBotDiv .carousel-control-next-icon,
            #labibaWebBotDiv .carousel-control-prev-icon {
                display: inline-block;
                width: 20px;
                height: 20px;
                background: no-repeat 50%/100% 100%;
            }
            #labibaWebBotDiv .carousel-control-prev-icon {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3E%3C/svg%3E");
            }
            #labibaWebBotDiv .carousel-control-next-icon {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3E%3C/svg%3E");
            }
            #labibaWebBotDiv .carousel-indicators {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 15;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-pack: center;
                justify-content: center;
                padding-left: 0;
                margin-right: 15%;
                margin-left: 15%;
                list-style: none;
            }
            #labibaWebBotDiv .carousel-indicators li {
                -webkit-box-sizing: content-box;
                box-sizing: content-box;
                -ms-flex: 0 1 auto;
                flex: 0 1 auto;
                width: 30px;
                height: 3px;
                margin-right: 3px;
                margin-left: 3px;
                text-indent: -999px;
                cursor: pointer;
                background-color: #fff;
                background-clip: padding-box;
                border-top: 10px solid transparent;
                border-bottom: 10px solid transparent;
                opacity: 0.5;
                -webkit-transition: opacity 0.6s ease;
                -o-transition: opacity 0.6s ease;
                transition: opacity 0.6s ease;
            }
            @media (prefers-reduced-motion: reduce) {
                #labibaWebBotDiv .carousel-indicators li {
                    -webkit-transition: none;
                    -o-transition: none;
                    transition: none;
                }
            }
            #labibaWebBotDiv .carousel-indicators .active {
                opacity: 1;
            }
            #labibaWebBotDiv .carousel-caption {
                position: absolute;
                right: 15%;
                bottom: 20px;
                left: 15%;
                z-index: 10;
                padding-top: 20px;
                padding-bottom: 20px;
                color: #fff;
                text-align: center;
            }
            @-webkit-keyframes spinner-border {
                to {
                    -webkit-transform: rotate(1turn);
                    transform: rotate(1turn);
                }
            }
            @keyframes spinner-border {
                to {
                    -webkit-transform: rotate(1turn);
                    transform: rotate(1turn);
                }
            }
            #labibaWebBotDiv .spinner-border {
                display: inline-block;
                width: 2rem;
                height: 2rem;
                vertical-align: text-bottom;
                border: 0.25em solid currentColor;
                border-right-color: transparent;
                border-radius: 50%;
                -webkit-animation: spinner-border 0.75s linear infinite;
                animation: spinner-border 0.75s linear infinite;
            }
            #labibaWebBotDiv .spinner-border-sm {
                width: 1rem;
                height: 1rem;
                border-width: 0.2em;
            }
            @-webkit-keyframes spinner-grow {
                0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                }
                50% {
                    opacity: 1;
                }
            }
            @keyframes spinner-grow {
                0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                }
                50% {
                    opacity: 1;
                }
            }
            #labibaWebBotDiv .spinner-grow {
                display: inline-block;
                width: 2rem;
                height: 2rem;
                vertical-align: text-bottom;
                background-color: currentColor;
                border-radius: 50%;
                opacity: 0;
                -webkit-animation: spinner-grow 0.75s linear infinite;
                animation: spinner-grow 0.75s linear infinite;
            }
            #labibaWebBotDiv .spinner-grow-sm {
                width: 1rem;
                height: 1rem;
            }
            #labibaWebBotDiv .align-baseline {
                vertical-align: baseline !important;
            }
            #labibaWebBotDiv .align-top {
                vertical-align: top !important;
            }
            #labibaWebBotDiv .align-middle {
                vertical-align: middle !important;
            }
            #labibaWebBotDiv .align-bottom {
                vertical-align: bottom !important;
            }
            #labibaWebBotDiv .align-text-bottom {
                vertical-align: text-bottom !important;
            }
            #labibaWebBotDiv .align-text-top {
                vertical-align: text-top !important;
            }
            #labibaWebBotDiv .bg-primary {
                background-color: #007bff !important;
            }
            #labibaWebBotDiv a.bg-primary:focus,
            #labibaWebBotDiv a.bg-primary:hover,
            #labibaWebBotDiv button.bg-primary:focus,
            #labibaWebBotDiv button.bg-primary:hover {
                background-color: #0062cc !important;
            }
            #labibaWebBotDiv .bg-secondary {
                background-color: #6c757d !important;
            }
            #labibaWebBotDiv a.bg-secondary:focus,
            #labibaWebBotDiv a.bg-secondary:hover,
            #labibaWebBotDiv button.bg-secondary:focus,
            #labibaWebBotDiv button.bg-secondary:hover {
                background-color: #545b62 !important;
            }
            #labibaWebBotDiv .bg-success {
                background-color: #28a745 !important;
            }
            #labibaWebBotDiv a.bg-success:focus,
            #labibaWebBotDiv a.bg-success:hover,
            #labibaWebBotDiv button.bg-success:focus,
            #labibaWebBotDiv button.bg-success:hover {
                background-color: #1e7e34 !important;
            }
            #labibaWebBotDiv .bg-info {
                background-color: #17a2b8 !important;
            }
            #labibaWebBotDiv a.bg-info:focus,
            #labibaWebBotDiv a.bg-info:hover,
            #labibaWebBotDiv button.bg-info:focus,
            #labibaWebBotDiv button.bg-info:hover {
                background-color: #117a8b !important;
            }
            #labibaWebBotDiv .bg-warning {
                background-color: #ffc107 !important;
            }
            #labibaWebBotDiv a.bg-warning:focus,
            #labibaWebBotDiv a.bg-warning:hover,
            #labibaWebBotDiv button.bg-warning:focus,
            #labibaWebBotDiv button.bg-warning:hover {
                background-color: #d39e00 !important;
            }
            #labibaWebBotDiv .bg-danger {
                background-color: #dc3545 !important;
            }
            #labibaWebBotDiv a.bg-danger:focus,
            #labibaWebBotDiv a.bg-danger:hover,
            #labibaWebBotDiv button.bg-danger:focus,
            #labibaWebBotDiv button.bg-danger:hover {
                background-color: #bd2130 !important;
            }
            #labibaWebBotDiv .bg-light {
                background-color: #f8f9fa !important;
            }
            #labibaWebBotDiv a.bg-light:focus,
            #labibaWebBotDiv a.bg-light:hover,
            #labibaWebBotDiv button.bg-light:focus,
            #labibaWebBotDiv button.bg-light:hover {
                background-color: #dae0e5 !important;
            }
            #labibaWebBotDiv .bg-dark {
                background-color: #343a40 !important;
            }
            #labibaWebBotDiv a.bg-dark:focus,
            #labibaWebBotDiv a.bg-dark:hover,
            #labibaWebBotDiv button.bg-dark:focus,
            #labibaWebBotDiv button.bg-dark:hover {
                background-color: #1d2124 !important;
            }
            #labibaWebBotDiv .bg-white {
                background-color: #fff !important;
            }
            #labibaWebBotDiv .bg-transparent {
                background-color: transparent !important;
            }
            #labibaWebBotDiv .border {
                border: 1px solid #dee2e6 !important;
            }
            #labibaWebBotDiv .border-top {
                border-top: 1px solid #dee2e6 !important;
            }
            #labibaWebBotDiv .border-right {
                border-right: 1px solid #dee2e6 !important;
            }
            #labibaWebBotDiv .border-bottom {
                border-bottom: 1px solid #dee2e6 !important;
            }
            #labibaWebBotDiv .border-left {
                border-left: 1px solid #dee2e6 !important;
            }
            #labibaWebBotDiv .border-0 {
                border: 0 !important;
            }
            #labibaWebBotDiv .border-top-0 {
                border-top: 0 !important;
            }
            #labibaWebBotDiv .border-right-0 {
                border-right: 0 !important;
            }
            #labibaWebBotDiv .border-bottom-0 {
                border-bottom: 0 !important;
            }
            #labibaWebBotDiv .border-left-0 {
                border-left: 0 !important;
            }
            #labibaWebBotDiv .border-primary {
                border-color: #007bff !important;
            }
            #labibaWebBotDiv .border-secondary {
                border-color: #6c757d !important;
            }
            #labibaWebBotDiv .border-success {
                border-color: #28a745 !important;
            }
            #labibaWebBotDiv .border-info {
                border-color: #17a2b8 !important;
            }
            #labibaWebBotDiv .border-warning {
                border-color: #ffc107 !important;
            }
            #labibaWebBotDiv .border-danger {
                border-color: #dc3545 !important;
            }
            #labibaWebBotDiv .border-light {
                border-color: #f8f9fa !important;
            }
            #labibaWebBotDiv .border-dark {
                border-color: #343a40 !important;
            }
            #labibaWebBotDiv .border-white {
                border-color: #fff !important;
            }
            #labibaWebBotDiv .rounded-sm {
                border-radius: 0.2rem !important;
            }
            #labibaWebBotDiv .rounded {
                border-radius: 0.25rem !important;
            }
            #labibaWebBotDiv .rounded-top {
                border-top-left-radius: 0.25rem !important;
                border-top-right-radius: 0.25rem !important;
            }
            #labibaWebBotDiv .rounded-right {
                border-top-right-radius: 0.25rem !important;
                border-bottom-right-radius: 0.25rem !important;
            }
            #labibaWebBotDiv .rounded-bottom {
                border-bottom-right-radius: 0.25rem !important;
                border-bottom-left-radius: 0.25rem !important;
            }
            #labibaWebBotDiv .rounded-left {
                border-top-left-radius: 0.25rem !important;
                border-bottom-left-radius: 0.25rem !important;
            }
            #labibaWebBotDiv .rounded-lg {
                border-radius: 0.3rem !important;
            }
            #labibaWebBotDiv .rounded-circle {
                border-radius: 50% !important;
            }
            #labibaWebBotDiv .rounded-pill {
                border-radius: 50rem !important;
            }
            #labibaWebBotDiv .rounded-0 {
                border-radius: 0 !important;
            }
            #labibaWebBotDiv .clearfix:after {
                display: block;
                clear: both;
                content: "";
            }
            #labibaWebBotDiv .d-none {
                display: none !important;
            }
            #labibaWebBotDiv .d-inline {
                display: inline !important;
            }
            #labibaWebBotDiv .d-inline-block {
                display: inline-block !important;
            }
            #labibaWebBotDiv .d-block {
                display: block !important;
            }
            #labibaWebBotDiv .d-table {
                display: table !important;
            }
            #labibaWebBotDiv .d-table-row {
                display: table-row !important;
            }
            #labibaWebBotDiv .d-table-cell {
                display: table-cell !important;
            }
            #labibaWebBotDiv .d-flex {
                display: -ms-flexbox !important;
                display: flex !important;
            }
            #labibaWebBotDiv .d-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .d-sm-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-sm-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-sm-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-sm-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-sm-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-sm-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-sm-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-sm-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-sm-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .d-md-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-md-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-md-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-md-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-md-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-md-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-md-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-md-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-md-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .d-lg-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-lg-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-lg-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-lg-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-lg-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-lg-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-lg-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-lg-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-lg-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .d-xl-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-xl-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-xl-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-xl-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-xl-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-xl-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-xl-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-xl-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-xl-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            @media print {
                #labibaWebBotDiv .d-print-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-print-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-print-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-print-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-print-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-print-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-print-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-print-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-print-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            #labibaWebBotDiv .embed-responsive {
                position: relative;
                display: block;
                width: 100%;
                padding: 0;
                overflow: hidden;
            }
            #labibaWebBotDiv .embed-responsive:before {
                display: block;
                content: "";
            }
            #labibaWebBotDiv .embed-responsive .embed-responsive-item,
            #labibaWebBotDiv .embed-responsive embed,
            #labibaWebBotDiv .embed-responsive iframe,
            #labibaWebBotDiv .embed-responsive object,
            #labibaWebBotDiv .embed-responsive video {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }
            #labibaWebBotDiv .embed-responsive-21by9:before {
                padding-top: 42.85714286%;
            }
            #labibaWebBotDiv .embed-responsive-16by9:before {
                padding-top: 56.25%;
            }
            #labibaWebBotDiv .embed-responsive-4by3:before {
                padding-top: 75%;
            }
            #labibaWebBotDiv .embed-responsive-1by1:before {
                padding-top: 100%;
            }
            #labibaWebBotDiv .flex-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }
            #labibaWebBotDiv .flex-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }
            #labibaWebBotDiv .flex-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }
            #labibaWebBotDiv .flex-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }
            #labibaWebBotDiv .flex-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }
            #labibaWebBotDiv .flex-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }
            #labibaWebBotDiv .flex-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }
            #labibaWebBotDiv .flex-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }
            #labibaWebBotDiv .flex-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }
            #labibaWebBotDiv .flex-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }
            #labibaWebBotDiv .flex-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }
            #labibaWebBotDiv .flex-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }
            #labibaWebBotDiv .justify-content-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }
            #labibaWebBotDiv .justify-content-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }
            #labibaWebBotDiv .justify-content-center {
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }
            #labibaWebBotDiv .justify-content-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }
            #labibaWebBotDiv .justify-content-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }
            #labibaWebBotDiv .align-items-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }
            #labibaWebBotDiv .align-items-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }
            #labibaWebBotDiv .align-items-center {
                -ms-flex-align: center !important;
                align-items: center !important;
            }
            #labibaWebBotDiv .align-items-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }
            #labibaWebBotDiv .align-items-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }
            #labibaWebBotDiv .align-content-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }
            #labibaWebBotDiv .align-content-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }
            #labibaWebBotDiv .align-content-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }
            #labibaWebBotDiv .align-content-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }
            #labibaWebBotDiv .align-content-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }
            #labibaWebBotDiv .align-content-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }
            #labibaWebBotDiv .align-self-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }
            #labibaWebBotDiv .align-self-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }
            #labibaWebBotDiv .align-self-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }
            #labibaWebBotDiv .align-self-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }
            #labibaWebBotDiv .align-self-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }
            #labibaWebBotDiv .align-self-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .flex-sm-row {
                    -ms-flex-direction: row !important;
                    flex-direction: row !important;
                }
                #labibaWebBotDiv .flex-sm-column {
                    -ms-flex-direction: column !important;
                    flex-direction: column !important;
                }
                #labibaWebBotDiv .flex-sm-row-reverse {
                    -ms-flex-direction: row-reverse !important;
                    flex-direction: row-reverse !important;
                }
                #labibaWebBotDiv .flex-sm-column-reverse {
                    -ms-flex-direction: column-reverse !important;
                    flex-direction: column-reverse !important;
                }
                #labibaWebBotDiv .flex-sm-wrap {
                    -ms-flex-wrap: wrap !important;
                    flex-wrap: wrap !important;
                }
                #labibaWebBotDiv .flex-sm-nowrap {
                    -ms-flex-wrap: nowrap !important;
                    flex-wrap: nowrap !important;
                }
                #labibaWebBotDiv .flex-sm-wrap-reverse {
                    -ms-flex-wrap: wrap-reverse !important;
                    flex-wrap: wrap-reverse !important;
                }
                #labibaWebBotDiv .flex-sm-fill {
                    -ms-flex: 1 1 auto !important;
                    flex: 1 1 auto !important;
                }
                #labibaWebBotDiv .flex-sm-grow-0 {
                    -ms-flex-positive: 0 !important;
                    flex-grow: 0 !important;
                }
                #labibaWebBotDiv .flex-sm-grow-1 {
                    -ms-flex-positive: 1 !important;
                    flex-grow: 1 !important;
                }
                #labibaWebBotDiv .flex-sm-shrink-0 {
                    -ms-flex-negative: 0 !important;
                    flex-shrink: 0 !important;
                }
                #labibaWebBotDiv .flex-sm-shrink-1 {
                    -ms-flex-negative: 1 !important;
                    flex-shrink: 1 !important;
                }
                #labibaWebBotDiv .justify-content-sm-start {
                    -ms-flex-pack: start !important;
                    justify-content: flex-start !important;
                }
                #labibaWebBotDiv .justify-content-sm-end {
                    -ms-flex-pack: end !important;
                    justify-content: flex-end !important;
                }
                #labibaWebBotDiv .justify-content-sm-center {
                    -ms-flex-pack: center !important;
                    justify-content: center !important;
                }
                #labibaWebBotDiv .justify-content-sm-between {
                    -ms-flex-pack: justify !important;
                    justify-content: space-between !important;
                }
                #labibaWebBotDiv .justify-content-sm-around {
                    -ms-flex-pack: distribute !important;
                    justify-content: space-around !important;
                }
                #labibaWebBotDiv .align-items-sm-start {
                    -ms-flex-align: start !important;
                    align-items: flex-start !important;
                }
                #labibaWebBotDiv .align-items-sm-end {
                    -ms-flex-align: end !important;
                    align-items: flex-end !important;
                }
                #labibaWebBotDiv .align-items-sm-center {
                    -ms-flex-align: center !important;
                    align-items: center !important;
                }
                #labibaWebBotDiv .align-items-sm-baseline {
                    -ms-flex-align: baseline !important;
                    align-items: baseline !important;
                }
                #labibaWebBotDiv .align-items-sm-stretch {
                    -ms-flex-align: stretch !important;
                    align-items: stretch !important;
                }
                #labibaWebBotDiv .align-content-sm-start {
                    -ms-flex-line-pack: start !important;
                    align-content: flex-start !important;
                }
                #labibaWebBotDiv .align-content-sm-end {
                    -ms-flex-line-pack: end !important;
                    align-content: flex-end !important;
                }
                #labibaWebBotDiv .align-content-sm-center {
                    -ms-flex-line-pack: center !important;
                    align-content: center !important;
                }
                #labibaWebBotDiv .align-content-sm-between {
                    -ms-flex-line-pack: justify !important;
                    align-content: space-between !important;
                }
                #labibaWebBotDiv .align-content-sm-around {
                    -ms-flex-line-pack: distribute !important;
                    align-content: space-around !important;
                }
                #labibaWebBotDiv .align-content-sm-stretch {
                    -ms-flex-line-pack: stretch !important;
                    align-content: stretch !important;
                }
                #labibaWebBotDiv .align-self-sm-auto {
                    -ms-flex-item-align: auto !important;
                    align-self: auto !important;
                }
                #labibaWebBotDiv .align-self-sm-start {
                    -ms-flex-item-align: start !important;
                    align-self: flex-start !important;
                }
                #labibaWebBotDiv .align-self-sm-end {
                    -ms-flex-item-align: end !important;
                    align-self: flex-end !important;
                }
                #labibaWebBotDiv .align-self-sm-center {
                    -ms-flex-item-align: center !important;
                    align-self: center !important;
                }
                #labibaWebBotDiv .align-self-sm-baseline {
                    -ms-flex-item-align: baseline !important;
                    align-self: baseline !important;
                }
                #labibaWebBotDiv .align-self-sm-stretch {
                    -ms-flex-item-align: stretch !important;
                    align-self: stretch !important;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .flex-md-row {
                    -ms-flex-direction: row !important;
                    flex-direction: row !important;
                }
                #labibaWebBotDiv .flex-md-column {
                    -ms-flex-direction: column !important;
                    flex-direction: column !important;
                }
                #labibaWebBotDiv .flex-md-row-reverse {
                    -ms-flex-direction: row-reverse !important;
                    flex-direction: row-reverse !important;
                }
                #labibaWebBotDiv .flex-md-column-reverse {
                    -ms-flex-direction: column-reverse !important;
                    flex-direction: column-reverse !important;
                }
                #labibaWebBotDiv .flex-md-wrap {
                    -ms-flex-wrap: wrap !important;
                    flex-wrap: wrap !important;
                }
                #labibaWebBotDiv .flex-md-nowrap {
                    -ms-flex-wrap: nowrap !important;
                    flex-wrap: nowrap !important;
                }
                #labibaWebBotDiv .flex-md-wrap-reverse {
                    -ms-flex-wrap: wrap-reverse !important;
                    flex-wrap: wrap-reverse !important;
                }
                #labibaWebBotDiv .flex-md-fill {
                    -ms-flex: 1 1 auto !important;
                    flex: 1 1 auto !important;
                }
                #labibaWebBotDiv .flex-md-grow-0 {
                    -ms-flex-positive: 0 !important;
                    flex-grow: 0 !important;
                }
                #labibaWebBotDiv .flex-md-grow-1 {
                    -ms-flex-positive: 1 !important;
                    flex-grow: 1 !important;
                }
                #labibaWebBotDiv .flex-md-shrink-0 {
                    -ms-flex-negative: 0 !important;
                    flex-shrink: 0 !important;
                }
                #labibaWebBotDiv .flex-md-shrink-1 {
                    -ms-flex-negative: 1 !important;
                    flex-shrink: 1 !important;
                }
                #labibaWebBotDiv .justify-content-md-start {
                    -ms-flex-pack: start !important;
                    justify-content: flex-start !important;
                }
                #labibaWebBotDiv .justify-content-md-end {
                    -ms-flex-pack: end !important;
                    justify-content: flex-end !important;
                }
                #labibaWebBotDiv .justify-content-md-center {
                    -ms-flex-pack: center !important;
                    justify-content: center !important;
                }
                #labibaWebBotDiv .justify-content-md-between {
                    -ms-flex-pack: justify !important;
                    justify-content: space-between !important;
                }
                #labibaWebBotDiv .justify-content-md-around {
                    -ms-flex-pack: distribute !important;
                    justify-content: space-around !important;
                }
                #labibaWebBotDiv .align-items-md-start {
                    -ms-flex-align: start !important;
                    align-items: flex-start !important;
                }
                #labibaWebBotDiv .align-items-md-end {
                    -ms-flex-align: end !important;
                    align-items: flex-end !important;
                }
                #labibaWebBotDiv .align-items-md-center {
                    -ms-flex-align: center !important;
                    align-items: center !important;
                }
                #labibaWebBotDiv .align-items-md-baseline {
                    -ms-flex-align: baseline !important;
                    align-items: baseline !important;
                }
                #labibaWebBotDiv .align-items-md-stretch {
                    -ms-flex-align: stretch !important;
                    align-items: stretch !important;
                }
                #labibaWebBotDiv .align-content-md-start {
                    -ms-flex-line-pack: start !important;
                    align-content: flex-start !important;
                }
                #labibaWebBotDiv .align-content-md-end {
                    -ms-flex-line-pack: end !important;
                    align-content: flex-end !important;
                }
                #labibaWebBotDiv .align-content-md-center {
                    -ms-flex-line-pack: center !important;
                    align-content: center !important;
                }
                #labibaWebBotDiv .align-content-md-between {
                    -ms-flex-line-pack: justify !important;
                    align-content: space-between !important;
                }
                #labibaWebBotDiv .align-content-md-around {
                    -ms-flex-line-pack: distribute !important;
                    align-content: space-around !important;
                }
                #labibaWebBotDiv .align-content-md-stretch {
                    -ms-flex-line-pack: stretch !important;
                    align-content: stretch !important;
                }
                #labibaWebBotDiv .align-self-md-auto {
                    -ms-flex-item-align: auto !important;
                    align-self: auto !important;
                }
                #labibaWebBotDiv .align-self-md-start {
                    -ms-flex-item-align: start !important;
                    align-self: flex-start !important;
                }
                #labibaWebBotDiv .align-self-md-end {
                    -ms-flex-item-align: end !important;
                    align-self: flex-end !important;
                }
                #labibaWebBotDiv .align-self-md-center {
                    -ms-flex-item-align: center !important;
                    align-self: center !important;
                }
                #labibaWebBotDiv .align-self-md-baseline {
                    -ms-flex-item-align: baseline !important;
                    align-self: baseline !important;
                }
                #labibaWebBotDiv .align-self-md-stretch {
                    -ms-flex-item-align: stretch !important;
                    align-self: stretch !important;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .flex-lg-row {
                    -ms-flex-direction: row !important;
                    flex-direction: row !important;
                }
                #labibaWebBotDiv .flex-lg-column {
                    -ms-flex-direction: column !important;
                    flex-direction: column !important;
                }
                #labibaWebBotDiv .flex-lg-row-reverse {
                    -ms-flex-direction: row-reverse !important;
                    flex-direction: row-reverse !important;
                }
                #labibaWebBotDiv .flex-lg-column-reverse {
                    -ms-flex-direction: column-reverse !important;
                    flex-direction: column-reverse !important;
                }
                #labibaWebBotDiv .flex-lg-wrap {
                    -ms-flex-wrap: wrap !important;
                    flex-wrap: wrap !important;
                }
                #labibaWebBotDiv .flex-lg-nowrap {
                    -ms-flex-wrap: nowrap !important;
                    flex-wrap: nowrap !important;
                }
                #labibaWebBotDiv .flex-lg-wrap-reverse {
                    -ms-flex-wrap: wrap-reverse !important;
                    flex-wrap: wrap-reverse !important;
                }
                #labibaWebBotDiv .flex-lg-fill {
                    -ms-flex: 1 1 auto !important;
                    flex: 1 1 auto !important;
                }
                #labibaWebBotDiv .flex-lg-grow-0 {
                    -ms-flex-positive: 0 !important;
                    flex-grow: 0 !important;
                }
                #labibaWebBotDiv .flex-lg-grow-1 {
                    -ms-flex-positive: 1 !important;
                    flex-grow: 1 !important;
                }
                #labibaWebBotDiv .flex-lg-shrink-0 {
                    -ms-flex-negative: 0 !important;
                    flex-shrink: 0 !important;
                }
                #labibaWebBotDiv .flex-lg-shrink-1 {
                    -ms-flex-negative: 1 !important;
                    flex-shrink: 1 !important;
                }
                #labibaWebBotDiv .justify-content-lg-start {
                    -ms-flex-pack: start !important;
                    justify-content: flex-start !important;
                }
                #labibaWebBotDiv .justify-content-lg-end {
                    -ms-flex-pack: end !important;
                    justify-content: flex-end !important;
                }
                #labibaWebBotDiv .justify-content-lg-center {
                    -ms-flex-pack: center !important;
                    justify-content: center !important;
                }
                #labibaWebBotDiv .justify-content-lg-between {
                    -ms-flex-pack: justify !important;
                    justify-content: space-between !important;
                }
                #labibaWebBotDiv .justify-content-lg-around {
                    -ms-flex-pack: distribute !important;
                    justify-content: space-around !important;
                }
                #labibaWebBotDiv .align-items-lg-start {
                    -ms-flex-align: start !important;
                    align-items: flex-start !important;
                }
                #labibaWebBotDiv .align-items-lg-end {
                    -ms-flex-align: end !important;
                    align-items: flex-end !important;
                }
                #labibaWebBotDiv .align-items-lg-center {
                    -ms-flex-align: center !important;
                    align-items: center !important;
                }
                #labibaWebBotDiv .align-items-lg-baseline {
                    -ms-flex-align: baseline !important;
                    align-items: baseline !important;
                }
                #labibaWebBotDiv .align-items-lg-stretch {
                    -ms-flex-align: stretch !important;
                    align-items: stretch !important;
                }
                #labibaWebBotDiv .align-content-lg-start {
                    -ms-flex-line-pack: start !important;
                    align-content: flex-start !important;
                }
                #labibaWebBotDiv .align-content-lg-end {
                    -ms-flex-line-pack: end !important;
                    align-content: flex-end !important;
                }
                #labibaWebBotDiv .align-content-lg-center {
                    -ms-flex-line-pack: center !important;
                    align-content: center !important;
                }
                #labibaWebBotDiv .align-content-lg-between {
                    -ms-flex-line-pack: justify !important;
                    align-content: space-between !important;
                }
                #labibaWebBotDiv .align-content-lg-around {
                    -ms-flex-line-pack: distribute !important;
                    align-content: space-around !important;
                }
                #labibaWebBotDiv .align-content-lg-stretch {
                    -ms-flex-line-pack: stretch !important;
                    align-content: stretch !important;
                }
                #labibaWebBotDiv .align-self-lg-auto {
                    -ms-flex-item-align: auto !important;
                    align-self: auto !important;
                }
                #labibaWebBotDiv .align-self-lg-start {
                    -ms-flex-item-align: start !important;
                    align-self: flex-start !important;
                }
                #labibaWebBotDiv .align-self-lg-end {
                    -ms-flex-item-align: end !important;
                    align-self: flex-end !important;
                }
                #labibaWebBotDiv .align-self-lg-center {
                    -ms-flex-item-align: center !important;
                    align-self: center !important;
                }
                #labibaWebBotDiv .align-self-lg-baseline {
                    -ms-flex-item-align: baseline !important;
                    align-self: baseline !important;
                }
                #labibaWebBotDiv .align-self-lg-stretch {
                    -ms-flex-item-align: stretch !important;
                    align-self: stretch !important;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .flex-xl-row {
                    -ms-flex-direction: row !important;
                    flex-direction: row !important;
                }
                #labibaWebBotDiv .flex-xl-column {
                    -ms-flex-direction: column !important;
                    flex-direction: column !important;
                }
                #labibaWebBotDiv .flex-xl-row-reverse {
                    -ms-flex-direction: row-reverse !important;
                    flex-direction: row-reverse !important;
                }
                #labibaWebBotDiv .flex-xl-column-reverse {
                    -ms-flex-direction: column-reverse !important;
                    flex-direction: column-reverse !important;
                }
                #labibaWebBotDiv .flex-xl-wrap {
                    -ms-flex-wrap: wrap !important;
                    flex-wrap: wrap !important;
                }
                #labibaWebBotDiv .flex-xl-nowrap {
                    -ms-flex-wrap: nowrap !important;
                    flex-wrap: nowrap !important;
                }
                #labibaWebBotDiv .flex-xl-wrap-reverse {
                    -ms-flex-wrap: wrap-reverse !important;
                    flex-wrap: wrap-reverse !important;
                }
                #labibaWebBotDiv .flex-xl-fill {
                    -ms-flex: 1 1 auto !important;
                    flex: 1 1 auto !important;
                }
                #labibaWebBotDiv .flex-xl-grow-0 {
                    -ms-flex-positive: 0 !important;
                    flex-grow: 0 !important;
                }
                #labibaWebBotDiv .flex-xl-grow-1 {
                    -ms-flex-positive: 1 !important;
                    flex-grow: 1 !important;
                }
                #labibaWebBotDiv .flex-xl-shrink-0 {
                    -ms-flex-negative: 0 !important;
                    flex-shrink: 0 !important;
                }
                #labibaWebBotDiv .flex-xl-shrink-1 {
                    -ms-flex-negative: 1 !important;
                    flex-shrink: 1 !important;
                }
                #labibaWebBotDiv .justify-content-xl-start {
                    -ms-flex-pack: start !important;
                    justify-content: flex-start !important;
                }
                #labibaWebBotDiv .justify-content-xl-end {
                    -ms-flex-pack: end !important;
                    justify-content: flex-end !important;
                }
                #labibaWebBotDiv .justify-content-xl-center {
                    -ms-flex-pack: center !important;
                    justify-content: center !important;
                }
                #labibaWebBotDiv .justify-content-xl-between {
                    -ms-flex-pack: justify !important;
                    justify-content: space-between !important;
                }
                #labibaWebBotDiv .justify-content-xl-around {
                    -ms-flex-pack: distribute !important;
                    justify-content: space-around !important;
                }
                #labibaWebBotDiv .align-items-xl-start {
                    -ms-flex-align: start !important;
                    align-items: flex-start !important;
                }
                #labibaWebBotDiv .align-items-xl-end {
                    -ms-flex-align: end !important;
                    align-items: flex-end !important;
                }
                #labibaWebBotDiv .align-items-xl-center {
                    -ms-flex-align: center !important;
                    align-items: center !important;
                }
                #labibaWebBotDiv .align-items-xl-baseline {
                    -ms-flex-align: baseline !important;
                    align-items: baseline !important;
                }
                #labibaWebBotDiv .align-items-xl-stretch {
                    -ms-flex-align: stretch !important;
                    align-items: stretch !important;
                }
                #labibaWebBotDiv .align-content-xl-start {
                    -ms-flex-line-pack: start !important;
                    align-content: flex-start !important;
                }
                #labibaWebBotDiv .align-content-xl-end {
                    -ms-flex-line-pack: end !important;
                    align-content: flex-end !important;
                }
                #labibaWebBotDiv .align-content-xl-center {
                    -ms-flex-line-pack: center !important;
                    align-content: center !important;
                }
                #labibaWebBotDiv .align-content-xl-between {
                    -ms-flex-line-pack: justify !important;
                    align-content: space-between !important;
                }
                #labibaWebBotDiv .align-content-xl-around {
                    -ms-flex-line-pack: distribute !important;
                    align-content: space-around !important;
                }
                #labibaWebBotDiv .align-content-xl-stretch {
                    -ms-flex-line-pack: stretch !important;
                    align-content: stretch !important;
                }
                #labibaWebBotDiv .align-self-xl-auto {
                    -ms-flex-item-align: auto !important;
                    align-self: auto !important;
                }
                #labibaWebBotDiv .align-self-xl-start {
                    -ms-flex-item-align: start !important;
                    align-self: flex-start !important;
                }
                #labibaWebBotDiv .align-self-xl-end {
                    -ms-flex-item-align: end !important;
                    align-self: flex-end !important;
                }
                #labibaWebBotDiv .align-self-xl-center {
                    -ms-flex-item-align: center !important;
                    align-self: center !important;
                }
                #labibaWebBotDiv .align-self-xl-baseline {
                    -ms-flex-item-align: baseline !important;
                    align-self: baseline !important;
                }
                #labibaWebBotDiv .align-self-xl-stretch {
                    -ms-flex-item-align: stretch !important;
                    align-self: stretch !important;
                }
            }
            #labibaWebBotDiv .float-left {
                float: left !important;
            }
            #labibaWebBotDiv .float-right {
                float: right !important;
            }
            #labibaWebBotDiv .float-none {
                float: none !important;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .float-sm-left {
                    float: left !important;
                }
                #labibaWebBotDiv .float-sm-right {
                    float: right !important;
                }
                #labibaWebBotDiv .float-sm-none {
                    float: none !important;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .float-md-left {
                    float: left !important;
                }
                #labibaWebBotDiv .float-md-right {
                    float: right !important;
                }
                #labibaWebBotDiv .float-md-none {
                    float: none !important;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .float-lg-left {
                    float: left !important;
                }
                #labibaWebBotDiv .float-lg-right {
                    float: right !important;
                }
                #labibaWebBotDiv .float-lg-none {
                    float: none !important;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .float-xl-left {
                    float: left !important;
                }
                #labibaWebBotDiv .float-xl-right {
                    float: right !important;
                }
                #labibaWebBotDiv .float-xl-none {
                    float: none !important;
                }
            }
            #labibaWebBotDiv .overflow-auto {
                overflow: auto !important;
            }
            #labibaWebBotDiv .overflow-hidden {
                overflow: hidden !important;
            }
            #labibaWebBotDiv .position-static {
                position: static !important;
            }
            #labibaWebBotDiv .position-relative {
                position: relative !important;
            }
            #labibaWebBotDiv .position-absolute {
                position: absolute !important;
            }
            #labibaWebBotDiv .position-fixed {
                position: fixed !important;
            }
            #labibaWebBotDiv .position-sticky {
                position: sticky !important;
            }
            #labibaWebBotDiv .fixed-top {
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                z-index: 1030;
            }
            #labibaWebBotDiv .fixed-bottom {
                position: fixed;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1030;
            }
            @supports (position: sticky) {
                #labibaWebBotDiv .sticky-top {
                    position: sticky;
                    top: 0;
                    z-index: 1020;
                }
            }
            #labibaWebBotDiv .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border: 0;
            }
            #labibaWebBotDiv .sr-only-focusable:active,
            #labibaWebBotDiv .sr-only-focusable:focus {
                position: static;
                width: auto;
                height: auto;
                overflow: visible;
                clip: auto;
                white-space: normal;
            }
            #labibaWebBotDiv .shadow-sm {
                -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
                box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
            }
            #labibaWebBotDiv .shadow {
                -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            }
            #labibaWebBotDiv .shadow-lg {
                -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
                box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
            }
            #labibaWebBotDiv .shadow-none {
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            #labibaWebBotDiv .w-25 {
                width: 25% !important;
            }
            #labibaWebBotDiv .w-50 {
                width: 50% !important;
            }
            #labibaWebBotDiv .w-75 {
                width: 75% !important;
            }
            #labibaWebBotDiv .w-100 {
                width: 100% !important;
            }
            #labibaWebBotDiv .w-auto {
                width: auto !important;
            }
            #labibaWebBotDiv .h-25 {
                height: 25% !important;
            }
            #labibaWebBotDiv .h-50 {
                height: 50% !important;
            }
            #labibaWebBotDiv .h-75 {
                height: 75% !important;
            }
            #labibaWebBotDiv .h-100 {
                height: 100% !important;
            }
            #labibaWebBotDiv .h-auto {
                height: auto !important;
            }
            #labibaWebBotDiv .mw-100 {
                max-width: 100% !important;
            }
            #labibaWebBotDiv .mh-100 {
                max-height: 100% !important;
            }
            #labibaWebBotDiv .min-vw-100 {
                min-width: 100vw !important;
            }
            #labibaWebBotDiv .min-vh-100 {
                min-height: 100vh !important;
            }
            #labibaWebBotDiv .vw-100 {
                width: 100vw !important;
            }
            #labibaWebBotDiv .vh-100 {
                height: 100vh !important;
            }
            #labibaWebBotDiv .stretched-link:after {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1;
                pointer-events: auto;
                content: "";
                background-color: transparent;
            }
            #labibaWebBotDiv .m-0 {
                margin: 0 !important;
            }
            #labibaWebBotDiv .mt-0,
            #labibaWebBotDiv .my-0 {
                margin-top: 0 !important;
            }
            #labibaWebBotDiv .mr-0,
            #labibaWebBotDiv .mx-0 {
                margin-right: 0 !important;
            }
            #labibaWebBotDiv .mb-0,
            #labibaWebBotDiv .my-0 {
                margin-bottom: 0 !important;
            }
            #labibaWebBotDiv .ml-0,
            #labibaWebBotDiv .mx-0 {
                margin-left: 0 !important;
            }
            #labibaWebBotDiv .m-1 {
                margin: 0.25rem !important;
            }
            #labibaWebBotDiv .mt-1,
            #labibaWebBotDiv .my-1 {
                margin-top: 0.25rem !important;
            }
            #labibaWebBotDiv .mr-1,
            #labibaWebBotDiv .mx-1 {
                margin-right: 0.25rem !important;
            }
            #labibaWebBotDiv .mb-1,
            #labibaWebBotDiv .my-1 {
                margin-bottom: 0.25rem !important;
            }
            #labibaWebBotDiv .ml-1,
            #labibaWebBotDiv .mx-1 {
                margin-left: 0.25rem !important;
            }
            #labibaWebBotDiv .m-2 {
                margin: 0.5rem !important;
            }
            #labibaWebBotDiv .mt-2,
            #labibaWebBotDiv .my-2 {
                margin-top: 0.5rem !important;
            }
            #labibaWebBotDiv .mr-2,
            #labibaWebBotDiv .mx-2 {
                margin-right: 0.5rem !important;
            }
            #labibaWebBotDiv .mb-2,
            #labibaWebBotDiv .my-2 {
                margin-bottom: 0.5rem !important;
            }
            #labibaWebBotDiv .ml-2,
            #labibaWebBotDiv .mx-2 {
                margin-left: 0.5rem !important;
            }
            #labibaWebBotDiv .m-3 {
                margin: 1rem !important;
            }
            #labibaWebBotDiv .mt-3,
            #labibaWebBotDiv .my-3 {
                margin-top: 1rem !important;
            }
            #labibaWebBotDiv .mr-3,
            #labibaWebBotDiv .mx-3 {
                margin-right: 1rem !important;
            }
            #labibaWebBotDiv .mb-3,
            #labibaWebBotDiv .my-3 {
                margin-bottom: 1rem !important;
            }
            #labibaWebBotDiv .ml-3,
            #labibaWebBotDiv .mx-3 {
                margin-left: 1rem !important;
            }
            #labibaWebBotDiv .m-4 {
                margin: 1.5rem !important;
            }
            #labibaWebBotDiv .mt-4,
            #labibaWebBotDiv .my-4 {
                margin-top: 1.5rem !important;
            }
            #labibaWebBotDiv .mr-4,
            #labibaWebBotDiv .mx-4 {
                margin-right: 1.5rem !important;
            }
            #labibaWebBotDiv .mb-4,
            #labibaWebBotDiv .my-4 {
                margin-bottom: 1.5rem !important;
            }
            #labibaWebBotDiv .ml-4,
            #labibaWebBotDiv .mx-4 {
                margin-left: 1.5rem !important;
            }
            #labibaWebBotDiv .m-5 {
                margin: 3rem !important;
            }
            #labibaWebBotDiv .mt-5,
            #labibaWebBotDiv .my-5 {
                margin-top: 3rem !important;
            }
            #labibaWebBotDiv .mr-5,
            #labibaWebBotDiv .mx-5 {
                margin-right: 3rem !important;
            }
            #labibaWebBotDiv .mb-5,
            #labibaWebBotDiv .my-5 {
                margin-bottom: 3rem !important;
            }
            #labibaWebBotDiv .ml-5,
            #labibaWebBotDiv .mx-5 {
                margin-left: 3rem !important;
            }
            #labibaWebBotDiv .p-0 {
                padding: 0 !important;
            }
            #labibaWebBotDiv .pt-0,
            #labibaWebBotDiv .py-0 {
                padding-top: 0 !important;
            }
            #labibaWebBotDiv .pr-0,
            #labibaWebBotDiv .px-0 {
                padding-right: 0 !important;
            }
            #labibaWebBotDiv .pb-0,
            #labibaWebBotDiv .py-0 {
                padding-bottom: 0 !important;
            }
            #labibaWebBotDiv .pl-0,
            #labibaWebBotDiv .px-0 {
                padding-left: 0 !important;
            }
            #labibaWebBotDiv .p-1 {
                padding: 0.25rem !important;
            }
            #labibaWebBotDiv .pt-1,
            #labibaWebBotDiv .py-1 {
                padding-top: 0.25rem !important;
            }
            #labibaWebBotDiv .pr-1,
            #labibaWebBotDiv .px-1 {
                padding-right: 0.25rem !important;
            }
            #labibaWebBotDiv .pb-1,
            #labibaWebBotDiv .py-1 {
                padding-bottom: 0.25rem !important;
            }
            #labibaWebBotDiv .pl-1,
            #labibaWebBotDiv .px-1 {
                padding-left: 0.25rem !important;
            }
            #labibaWebBotDiv .p-2 {
                padding: 0.5rem !important;
            }
            #labibaWebBotDiv .pt-2,
            #labibaWebBotDiv .py-2 {
                padding-top: 0.5rem !important;
            }
            #labibaWebBotDiv .pr-2,
            #labibaWebBotDiv .px-2 {
                padding-right: 0.5rem !important;
            }
            #labibaWebBotDiv .pb-2,
            #labibaWebBotDiv .py-2 {
                padding-bottom: 0.5rem !important;
            }
            #labibaWebBotDiv .pl-2,
            #labibaWebBotDiv .px-2 {
                padding-left: 0.5rem !important;
            }
            #labibaWebBotDiv .p-3 {
                padding: 1rem !important;
            }
            #labibaWebBotDiv .pt-3,
            #labibaWebBotDiv .py-3 {
                padding-top: 1rem !important;
            }
            #labibaWebBotDiv .pr-3,
            #labibaWebBotDiv .px-3 {
                padding-right: 1rem !important;
            }
            #labibaWebBotDiv .pb-3,
            #labibaWebBotDiv .py-3 {
                padding-bottom: 1rem !important;
            }
            #labibaWebBotDiv .pl-3,
            #labibaWebBotDiv .px-3 {
                padding-left: 1rem !important;
            }
            #labibaWebBotDiv .p-4 {
                padding: 1.5rem !important;
            }
            #labibaWebBotDiv .pt-4,
            #labibaWebBotDiv .py-4 {
                padding-top: 1.5rem !important;
            }
            #labibaWebBotDiv .pr-4,
            #labibaWebBotDiv .px-4 {
                padding-right: 1.5rem !important;
            }
            #labibaWebBotDiv .pb-4,
            #labibaWebBotDiv .py-4 {
                padding-bottom: 1.5rem !important;
            }
            #labibaWebBotDiv .pl-4,
            #labibaWebBotDiv .px-4 {
                padding-left: 1.5rem !important;
            }
            #labibaWebBotDiv .p-5 {
                padding: 3rem !important;
            }
            #labibaWebBotDiv .pt-5,
            #labibaWebBotDiv .py-5 {
                padding-top: 3rem !important;
            }
            #labibaWebBotDiv .pr-5,
            #labibaWebBotDiv .px-5 {
                padding-right: 3rem !important;
            }
            #labibaWebBotDiv .pb-5,
            #labibaWebBotDiv .py-5 {
                padding-bottom: 3rem !important;
            }
            #labibaWebBotDiv .pl-5,
            #labibaWebBotDiv .px-5 {
                padding-left: 3rem !important;
            }
            #labibaWebBotDiv .m-n1 {
                margin: -0.25rem !important;
            }
            #labibaWebBotDiv .mt-n1,
            #labibaWebBotDiv .my-n1 {
                margin-top: -0.25rem !important;
            }
            #labibaWebBotDiv .mr-n1,
            #labibaWebBotDiv .mx-n1 {
                margin-right: -0.25rem !important;
            }
            #labibaWebBotDiv .mb-n1,
            #labibaWebBotDiv .my-n1 {
                margin-bottom: -0.25rem !important;
            }
            #labibaWebBotDiv .ml-n1,
            #labibaWebBotDiv .mx-n1 {
                margin-left: -0.25rem !important;
            }
            #labibaWebBotDiv .m-n2 {
                margin: -0.5rem !important;
            }
            #labibaWebBotDiv .mt-n2,
            #labibaWebBotDiv .my-n2 {
                margin-top: -0.5rem !important;
            }
            #labibaWebBotDiv .mr-n2,
            #labibaWebBotDiv .mx-n2 {
                margin-right: -0.5rem !important;
            }
            #labibaWebBotDiv .mb-n2,
            #labibaWebBotDiv .my-n2 {
                margin-bottom: -0.5rem !important;
            }
            #labibaWebBotDiv .ml-n2,
            #labibaWebBotDiv .mx-n2 {
                margin-left: -0.5rem !important;
            }
            #labibaWebBotDiv .m-n3 {
                margin: -1rem !important;
            }
            #labibaWebBotDiv .mt-n3,
            #labibaWebBotDiv .my-n3 {
                margin-top: -1rem !important;
            }
            #labibaWebBotDiv .mr-n3,
            #labibaWebBotDiv .mx-n3 {
                margin-right: -1rem !important;
            }
            #labibaWebBotDiv .mb-n3,
            #labibaWebBotDiv .my-n3 {
                margin-bottom: -1rem !important;
            }
            #labibaWebBotDiv .ml-n3,
            #labibaWebBotDiv .mx-n3 {
                margin-left: -1rem !important;
            }
            #labibaWebBotDiv .m-n4 {
                margin: -1.5rem !important;
            }
            #labibaWebBotDiv .mt-n4,
            #labibaWebBotDiv .my-n4 {
                margin-top: -1.5rem !important;
            }
            #labibaWebBotDiv .mr-n4,
            #labibaWebBotDiv .mx-n4 {
                margin-right: -1.5rem !important;
            }
            #labibaWebBotDiv .mb-n4,
            #labibaWebBotDiv .my-n4 {
                margin-bottom: -1.5rem !important;
            }
            #labibaWebBotDiv .ml-n4,
            #labibaWebBotDiv .mx-n4 {
                margin-left: -1.5rem !important;
            }
            #labibaWebBotDiv .m-n5 {
                margin: -3rem !important;
            }
            #labibaWebBotDiv .mt-n5,
            #labibaWebBotDiv .my-n5 {
                margin-top: -3rem !important;
            }
            #labibaWebBotDiv .mr-n5,
            #labibaWebBotDiv .mx-n5 {
                margin-right: -3rem !important;
            }
            #labibaWebBotDiv .mb-n5,
            #labibaWebBotDiv .my-n5 {
                margin-bottom: -3rem !important;
            }
            #labibaWebBotDiv .ml-n5,
            #labibaWebBotDiv .mx-n5 {
                margin-left: -3rem !important;
            }
            #labibaWebBotDiv .m-auto {
                margin: auto !important;
            }
            #labibaWebBotDiv .mt-auto,
            #labibaWebBotDiv .my-auto {
                margin-top: auto !important;
            }
            #labibaWebBotDiv .mr-auto,
            #labibaWebBotDiv .mx-auto {
                margin-right: auto !important;
            }
            #labibaWebBotDiv .mb-auto,
            #labibaWebBotDiv .my-auto {
                margin-bottom: auto !important;
            }
            #labibaWebBotDiv .ml-auto,
            #labibaWebBotDiv .mx-auto {
                margin-left: auto !important;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .m-sm-0 {
                    margin: 0 !important;
                }
                #labibaWebBotDiv .mt-sm-0,
                #labibaWebBotDiv .my-sm-0 {
                    margin-top: 0 !important;
                }
                #labibaWebBotDiv .mr-sm-0,
                #labibaWebBotDiv .mx-sm-0 {
                    margin-right: 0 !important;
                }
                #labibaWebBotDiv .mb-sm-0,
                #labibaWebBotDiv .my-sm-0 {
                    margin-bottom: 0 !important;
                }
                #labibaWebBotDiv .ml-sm-0,
                #labibaWebBotDiv .mx-sm-0 {
                    margin-left: 0 !important;
                }
                #labibaWebBotDiv .m-sm-1 {
                    margin: 0.25rem !important;
                }
                #labibaWebBotDiv .mt-sm-1,
                #labibaWebBotDiv .my-sm-1 {
                    margin-top: 0.25rem !important;
                }
                #labibaWebBotDiv .mr-sm-1,
                #labibaWebBotDiv .mx-sm-1 {
                    margin-right: 0.25rem !important;
                }
                #labibaWebBotDiv .mb-sm-1,
                #labibaWebBotDiv .my-sm-1 {
                    margin-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .ml-sm-1,
                #labibaWebBotDiv .mx-sm-1 {
                    margin-left: 0.25rem !important;
                }
                #labibaWebBotDiv .m-sm-2 {
                    margin: 0.5rem !important;
                }
                #labibaWebBotDiv .mt-sm-2,
                #labibaWebBotDiv .my-sm-2 {
                    margin-top: 0.5rem !important;
                }
                #labibaWebBotDiv .mr-sm-2,
                #labibaWebBotDiv .mx-sm-2 {
                    margin-right: 0.5rem !important;
                }
                #labibaWebBotDiv .mb-sm-2,
                #labibaWebBotDiv .my-sm-2 {
                    margin-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .ml-sm-2,
                #labibaWebBotDiv .mx-sm-2 {
                    margin-left: 0.5rem !important;
                }
                #labibaWebBotDiv .m-sm-3 {
                    margin: 1rem !important;
                }
                #labibaWebBotDiv .mt-sm-3,
                #labibaWebBotDiv .my-sm-3 {
                    margin-top: 1rem !important;
                }
                #labibaWebBotDiv .mr-sm-3,
                #labibaWebBotDiv .mx-sm-3 {
                    margin-right: 1rem !important;
                }
                #labibaWebBotDiv .mb-sm-3,
                #labibaWebBotDiv .my-sm-3 {
                    margin-bottom: 1rem !important;
                }
                #labibaWebBotDiv .ml-sm-3,
                #labibaWebBotDiv .mx-sm-3 {
                    margin-left: 1rem !important;
                }
                #labibaWebBotDiv .m-sm-4 {
                    margin: 1.5rem !important;
                }
                #labibaWebBotDiv .mt-sm-4,
                #labibaWebBotDiv .my-sm-4 {
                    margin-top: 1.5rem !important;
                }
                #labibaWebBotDiv .mr-sm-4,
                #labibaWebBotDiv .mx-sm-4 {
                    margin-right: 1.5rem !important;
                }
                #labibaWebBotDiv .mb-sm-4,
                #labibaWebBotDiv .my-sm-4 {
                    margin-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .ml-sm-4,
                #labibaWebBotDiv .mx-sm-4 {
                    margin-left: 1.5rem !important;
                }
                #labibaWebBotDiv .m-sm-5 {
                    margin: 3rem !important;
                }
                #labibaWebBotDiv .mt-sm-5,
                #labibaWebBotDiv .my-sm-5 {
                    margin-top: 3rem !important;
                }
                #labibaWebBotDiv .mr-sm-5,
                #labibaWebBotDiv .mx-sm-5 {
                    margin-right: 3rem !important;
                }
                #labibaWebBotDiv .mb-sm-5,
                #labibaWebBotDiv .my-sm-5 {
                    margin-bottom: 3rem !important;
                }
                #labibaWebBotDiv .ml-sm-5,
                #labibaWebBotDiv .mx-sm-5 {
                    margin-left: 3rem !important;
                }
                #labibaWebBotDiv .p-sm-0 {
                    padding: 0 !important;
                }
                #labibaWebBotDiv .pt-sm-0,
                #labibaWebBotDiv .py-sm-0 {
                    padding-top: 0 !important;
                }
                #labibaWebBotDiv .pr-sm-0,
                #labibaWebBotDiv .px-sm-0 {
                    padding-right: 0 !important;
                }
                #labibaWebBotDiv .pb-sm-0,
                #labibaWebBotDiv .py-sm-0 {
                    padding-bottom: 0 !important;
                }
                #labibaWebBotDiv .pl-sm-0,
                #labibaWebBotDiv .px-sm-0 {
                    padding-left: 0 !important;
                }
                #labibaWebBotDiv .p-sm-1 {
                    padding: 0.25rem !important;
                }
                #labibaWebBotDiv .pt-sm-1,
                #labibaWebBotDiv .py-sm-1 {
                    padding-top: 0.25rem !important;
                }
                #labibaWebBotDiv .pr-sm-1,
                #labibaWebBotDiv .px-sm-1 {
                    padding-right: 0.25rem !important;
                }
                #labibaWebBotDiv .pb-sm-1,
                #labibaWebBotDiv .py-sm-1 {
                    padding-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .pl-sm-1,
                #labibaWebBotDiv .px-sm-1 {
                    padding-left: 0.25rem !important;
                }
                #labibaWebBotDiv .p-sm-2 {
                    padding: 0.5rem !important;
                }
                #labibaWebBotDiv .pt-sm-2,
                #labibaWebBotDiv .py-sm-2 {
                    padding-top: 0.5rem !important;
                }
                #labibaWebBotDiv .pr-sm-2,
                #labibaWebBotDiv .px-sm-2 {
                    padding-right: 0.5rem !important;
                }
                #labibaWebBotDiv .pb-sm-2,
                #labibaWebBotDiv .py-sm-2 {
                    padding-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .pl-sm-2,
                #labibaWebBotDiv .px-sm-2 {
                    padding-left: 0.5rem !important;
                }
                #labibaWebBotDiv .p-sm-3 {
                    padding: 1rem !important;
                }
                #labibaWebBotDiv .pt-sm-3,
                #labibaWebBotDiv .py-sm-3 {
                    padding-top: 1rem !important;
                }
                #labibaWebBotDiv .pr-sm-3,
                #labibaWebBotDiv .px-sm-3 {
                    padding-right: 1rem !important;
                }
                #labibaWebBotDiv .pb-sm-3,
                #labibaWebBotDiv .py-sm-3 {
                    padding-bottom: 1rem !important;
                }
                #labibaWebBotDiv .pl-sm-3,
                #labibaWebBotDiv .px-sm-3 {
                    padding-left: 1rem !important;
                }
                #labibaWebBotDiv .p-sm-4 {
                    padding: 1.5rem !important;
                }
                #labibaWebBotDiv .pt-sm-4,
                #labibaWebBotDiv .py-sm-4 {
                    padding-top: 1.5rem !important;
                }
                #labibaWebBotDiv .pr-sm-4,
                #labibaWebBotDiv .px-sm-4 {
                    padding-right: 1.5rem !important;
                }
                #labibaWebBotDiv .pb-sm-4,
                #labibaWebBotDiv .py-sm-4 {
                    padding-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .pl-sm-4,
                #labibaWebBotDiv .px-sm-4 {
                    padding-left: 1.5rem !important;
                }
                #labibaWebBotDiv .p-sm-5 {
                    padding: 3rem !important;
                }
                #labibaWebBotDiv .pt-sm-5,
                #labibaWebBotDiv .py-sm-5 {
                    padding-top: 3rem !important;
                }
                #labibaWebBotDiv .pr-sm-5,
                #labibaWebBotDiv .px-sm-5 {
                    padding-right: 3rem !important;
                }
                #labibaWebBotDiv .pb-sm-5,
                #labibaWebBotDiv .py-sm-5 {
                    padding-bottom: 3rem !important;
                }
                #labibaWebBotDiv .pl-sm-5,
                #labibaWebBotDiv .px-sm-5 {
                    padding-left: 3rem !important;
                }
                #labibaWebBotDiv .m-sm-n1 {
                    margin: -0.25rem !important;
                }
                #labibaWebBotDiv .mt-sm-n1,
                #labibaWebBotDiv .my-sm-n1 {
                    margin-top: -0.25rem !important;
                }
                #labibaWebBotDiv .mr-sm-n1,
                #labibaWebBotDiv .mx-sm-n1 {
                    margin-right: -0.25rem !important;
                }
                #labibaWebBotDiv .mb-sm-n1,
                #labibaWebBotDiv .my-sm-n1 {
                    margin-bottom: -0.25rem !important;
                }
                #labibaWebBotDiv .ml-sm-n1,
                #labibaWebBotDiv .mx-sm-n1 {
                    margin-left: -0.25rem !important;
                }
                #labibaWebBotDiv .m-sm-n2 {
                    margin: -0.5rem !important;
                }
                #labibaWebBotDiv .mt-sm-n2,
                #labibaWebBotDiv .my-sm-n2 {
                    margin-top: -0.5rem !important;
                }
                #labibaWebBotDiv .mr-sm-n2,
                #labibaWebBotDiv .mx-sm-n2 {
                    margin-right: -0.5rem !important;
                }
                #labibaWebBotDiv .mb-sm-n2,
                #labibaWebBotDiv .my-sm-n2 {
                    margin-bottom: -0.5rem !important;
                }
                #labibaWebBotDiv .ml-sm-n2,
                #labibaWebBotDiv .mx-sm-n2 {
                    margin-left: -0.5rem !important;
                }
                #labibaWebBotDiv .m-sm-n3 {
                    margin: -1rem !important;
                }
                #labibaWebBotDiv .mt-sm-n3,
                #labibaWebBotDiv .my-sm-n3 {
                    margin-top: -1rem !important;
                }
                #labibaWebBotDiv .mr-sm-n3,
                #labibaWebBotDiv .mx-sm-n3 {
                    margin-right: -1rem !important;
                }
                #labibaWebBotDiv .mb-sm-n3,
                #labibaWebBotDiv .my-sm-n3 {
                    margin-bottom: -1rem !important;
                }
                #labibaWebBotDiv .ml-sm-n3,
                #labibaWebBotDiv .mx-sm-n3 {
                    margin-left: -1rem !important;
                }
                #labibaWebBotDiv .m-sm-n4 {
                    margin: -1.5rem !important;
                }
                #labibaWebBotDiv .mt-sm-n4,
                #labibaWebBotDiv .my-sm-n4 {
                    margin-top: -1.5rem !important;
                }
                #labibaWebBotDiv .mr-sm-n4,
                #labibaWebBotDiv .mx-sm-n4 {
                    margin-right: -1.5rem !important;
                }
                #labibaWebBotDiv .mb-sm-n4,
                #labibaWebBotDiv .my-sm-n4 {
                    margin-bottom: -1.5rem !important;
                }
                #labibaWebBotDiv .ml-sm-n4,
                #labibaWebBotDiv .mx-sm-n4 {
                    margin-left: -1.5rem !important;
                }
                #labibaWebBotDiv .m-sm-n5 {
                    margin: -3rem !important;
                }
                #labibaWebBotDiv .mt-sm-n5,
                #labibaWebBotDiv .my-sm-n5 {
                    margin-top: -3rem !important;
                }
                #labibaWebBotDiv .mr-sm-n5,
                #labibaWebBotDiv .mx-sm-n5 {
                    margin-right: -3rem !important;
                }
                #labibaWebBotDiv .mb-sm-n5,
                #labibaWebBotDiv .my-sm-n5 {
                    margin-bottom: -3rem !important;
                }
                #labibaWebBotDiv .ml-sm-n5,
                #labibaWebBotDiv .mx-sm-n5 {
                    margin-left: -3rem !important;
                }
                #labibaWebBotDiv .m-sm-auto {
                    margin: auto !important;
                }
                #labibaWebBotDiv .mt-sm-auto,
                #labibaWebBotDiv .my-sm-auto {
                    margin-top: auto !important;
                }
                #labibaWebBotDiv .mr-sm-auto,
                #labibaWebBotDiv .mx-sm-auto {
                    margin-right: auto !important;
                }
                #labibaWebBotDiv .mb-sm-auto,
                #labibaWebBotDiv .my-sm-auto {
                    margin-bottom: auto !important;
                }
                #labibaWebBotDiv .ml-sm-auto,
                #labibaWebBotDiv .mx-sm-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .m-md-0 {
                    margin: 0 !important;
                }
                #labibaWebBotDiv .mt-md-0,
                #labibaWebBotDiv .my-md-0 {
                    margin-top: 0 !important;
                }
                #labibaWebBotDiv .mr-md-0,
                #labibaWebBotDiv .mx-md-0 {
                    margin-right: 0 !important;
                }
                #labibaWebBotDiv .mb-md-0,
                #labibaWebBotDiv .my-md-0 {
                    margin-bottom: 0 !important;
                }
                #labibaWebBotDiv .ml-md-0,
                #labibaWebBotDiv .mx-md-0 {
                    margin-left: 0 !important;
                }
                #labibaWebBotDiv .m-md-1 {
                    margin: 0.25rem !important;
                }
                #labibaWebBotDiv .mt-md-1,
                #labibaWebBotDiv .my-md-1 {
                    margin-top: 0.25rem !important;
                }
                #labibaWebBotDiv .mr-md-1,
                #labibaWebBotDiv .mx-md-1 {
                    margin-right: 0.25rem !important;
                }
                #labibaWebBotDiv .mb-md-1,
                #labibaWebBotDiv .my-md-1 {
                    margin-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .ml-md-1,
                #labibaWebBotDiv .mx-md-1 {
                    margin-left: 0.25rem !important;
                }
                #labibaWebBotDiv .m-md-2 {
                    margin: 0.5rem !important;
                }
                #labibaWebBotDiv .mt-md-2,
                #labibaWebBotDiv .my-md-2 {
                    margin-top: 0.5rem !important;
                }
                #labibaWebBotDiv .mr-md-2,
                #labibaWebBotDiv .mx-md-2 {
                    margin-right: 0.5rem !important;
                }
                #labibaWebBotDiv .mb-md-2,
                #labibaWebBotDiv .my-md-2 {
                    margin-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .ml-md-2,
                #labibaWebBotDiv .mx-md-2 {
                    margin-left: 0.5rem !important;
                }
                #labibaWebBotDiv .m-md-3 {
                    margin: 1rem !important;
                }
                #labibaWebBotDiv .mt-md-3,
                #labibaWebBotDiv .my-md-3 {
                    margin-top: 1rem !important;
                }
                #labibaWebBotDiv .mr-md-3,
                #labibaWebBotDiv .mx-md-3 {
                    margin-right: 1rem !important;
                }
                #labibaWebBotDiv .mb-md-3,
                #labibaWebBotDiv .my-md-3 {
                    margin-bottom: 1rem !important;
                }
                #labibaWebBotDiv .ml-md-3,
                #labibaWebBotDiv .mx-md-3 {
                    margin-left: 1rem !important;
                }
                #labibaWebBotDiv .m-md-4 {
                    margin: 1.5rem !important;
                }
                #labibaWebBotDiv .mt-md-4,
                #labibaWebBotDiv .my-md-4 {
                    margin-top: 1.5rem !important;
                }
                #labibaWebBotDiv .mr-md-4,
                #labibaWebBotDiv .mx-md-4 {
                    margin-right: 1.5rem !important;
                }
                #labibaWebBotDiv .mb-md-4,
                #labibaWebBotDiv .my-md-4 {
                    margin-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .ml-md-4,
                #labibaWebBotDiv .mx-md-4 {
                    margin-left: 1.5rem !important;
                }
                #labibaWebBotDiv .m-md-5 {
                    margin: 3rem !important;
                }
                #labibaWebBotDiv .mt-md-5,
                #labibaWebBotDiv .my-md-5 {
                    margin-top: 3rem !important;
                }
                #labibaWebBotDiv .mr-md-5,
                #labibaWebBotDiv .mx-md-5 {
                    margin-right: 3rem !important;
                }
                #labibaWebBotDiv .mb-md-5,
                #labibaWebBotDiv .my-md-5 {
                    margin-bottom: 3rem !important;
                }
                #labibaWebBotDiv .ml-md-5,
                #labibaWebBotDiv .mx-md-5 {
                    margin-left: 3rem !important;
                }
                #labibaWebBotDiv .p-md-0 {
                    padding: 0 !important;
                }
                #labibaWebBotDiv .pt-md-0,
                #labibaWebBotDiv .py-md-0 {
                    padding-top: 0 !important;
                }
                #labibaWebBotDiv .pr-md-0,
                #labibaWebBotDiv .px-md-0 {
                    padding-right: 0 !important;
                }
                #labibaWebBotDiv .pb-md-0,
                #labibaWebBotDiv .py-md-0 {
                    padding-bottom: 0 !important;
                }
                #labibaWebBotDiv .pl-md-0,
                #labibaWebBotDiv .px-md-0 {
                    padding-left: 0 !important;
                }
                #labibaWebBotDiv .p-md-1 {
                    padding: 0.25rem !important;
                }
                #labibaWebBotDiv .pt-md-1,
                #labibaWebBotDiv .py-md-1 {
                    padding-top: 0.25rem !important;
                }
                #labibaWebBotDiv .pr-md-1,
                #labibaWebBotDiv .px-md-1 {
                    padding-right: 0.25rem !important;
                }
                #labibaWebBotDiv .pb-md-1,
                #labibaWebBotDiv .py-md-1 {
                    padding-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .pl-md-1,
                #labibaWebBotDiv .px-md-1 {
                    padding-left: 0.25rem !important;
                }
                #labibaWebBotDiv .p-md-2 {
                    padding: 0.5rem !important;
                }
                #labibaWebBotDiv .pt-md-2,
                #labibaWebBotDiv .py-md-2 {
                    padding-top: 0.5rem !important;
                }
                #labibaWebBotDiv .pr-md-2,
                #labibaWebBotDiv .px-md-2 {
                    padding-right: 0.5rem !important;
                }
                #labibaWebBotDiv .pb-md-2,
                #labibaWebBotDiv .py-md-2 {
                    padding-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .pl-md-2,
                #labibaWebBotDiv .px-md-2 {
                    padding-left: 0.5rem !important;
                }
                #labibaWebBotDiv .p-md-3 {
                    padding: 1rem !important;
                }
                #labibaWebBotDiv .pt-md-3,
                #labibaWebBotDiv .py-md-3 {
                    padding-top: 1rem !important;
                }
                #labibaWebBotDiv .pr-md-3,
                #labibaWebBotDiv .px-md-3 {
                    padding-right: 1rem !important;
                }
                #labibaWebBotDiv .pb-md-3,
                #labibaWebBotDiv .py-md-3 {
                    padding-bottom: 1rem !important;
                }
                #labibaWebBotDiv .pl-md-3,
                #labibaWebBotDiv .px-md-3 {
                    padding-left: 1rem !important;
                }
                #labibaWebBotDiv .p-md-4 {
                    padding: 1.5rem !important;
                }
                #labibaWebBotDiv .pt-md-4,
                #labibaWebBotDiv .py-md-4 {
                    padding-top: 1.5rem !important;
                }
                #labibaWebBotDiv .pr-md-4,
                #labibaWebBotDiv .px-md-4 {
                    padding-right: 1.5rem !important;
                }
                #labibaWebBotDiv .pb-md-4,
                #labibaWebBotDiv .py-md-4 {
                    padding-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .pl-md-4,
                #labibaWebBotDiv .px-md-4 {
                    padding-left: 1.5rem !important;
                }
                #labibaWebBotDiv .p-md-5 {
                    padding: 3rem !important;
                }
                #labibaWebBotDiv .pt-md-5,
                #labibaWebBotDiv .py-md-5 {
                    padding-top: 3rem !important;
                }
                #labibaWebBotDiv .pr-md-5,
                #labibaWebBotDiv .px-md-5 {
                    padding-right: 3rem !important;
                }
                #labibaWebBotDiv .pb-md-5,
                #labibaWebBotDiv .py-md-5 {
                    padding-bottom: 3rem !important;
                }
                #labibaWebBotDiv .pl-md-5,
                #labibaWebBotDiv .px-md-5 {
                    padding-left: 3rem !important;
                }
                #labibaWebBotDiv .m-md-n1 {
                    margin: -0.25rem !important;
                }
                #labibaWebBotDiv .mt-md-n1,
                #labibaWebBotDiv .my-md-n1 {
                    margin-top: -0.25rem !important;
                }
                #labibaWebBotDiv .mr-md-n1,
                #labibaWebBotDiv .mx-md-n1 {
                    margin-right: -0.25rem !important;
                }
                #labibaWebBotDiv .mb-md-n1,
                #labibaWebBotDiv .my-md-n1 {
                    margin-bottom: -0.25rem !important;
                }
                #labibaWebBotDiv .ml-md-n1,
                #labibaWebBotDiv .mx-md-n1 {
                    margin-left: -0.25rem !important;
                }
                #labibaWebBotDiv .m-md-n2 {
                    margin: -0.5rem !important;
                }
                #labibaWebBotDiv .mt-md-n2,
                #labibaWebBotDiv .my-md-n2 {
                    margin-top: -0.5rem !important;
                }
                #labibaWebBotDiv .mr-md-n2,
                #labibaWebBotDiv .mx-md-n2 {
                    margin-right: -0.5rem !important;
                }
                #labibaWebBotDiv .mb-md-n2,
                #labibaWebBotDiv .my-md-n2 {
                    margin-bottom: -0.5rem !important;
                }
                #labibaWebBotDiv .ml-md-n2,
                #labibaWebBotDiv .mx-md-n2 {
                    margin-left: -0.5rem !important;
                }
                #labibaWebBotDiv .m-md-n3 {
                    margin: -1rem !important;
                }
                #labibaWebBotDiv .mt-md-n3,
                #labibaWebBotDiv .my-md-n3 {
                    margin-top: -1rem !important;
                }
                #labibaWebBotDiv .mr-md-n3,
                #labibaWebBotDiv .mx-md-n3 {
                    margin-right: -1rem !important;
                }
                #labibaWebBotDiv .mb-md-n3,
                #labibaWebBotDiv .my-md-n3 {
                    margin-bottom: -1rem !important;
                }
                #labibaWebBotDiv .ml-md-n3,
                #labibaWebBotDiv .mx-md-n3 {
                    margin-left: -1rem !important;
                }
                #labibaWebBotDiv .m-md-n4 {
                    margin: -1.5rem !important;
                }
                #labibaWebBotDiv .mt-md-n4,
                #labibaWebBotDiv .my-md-n4 {
                    margin-top: -1.5rem !important;
                }
                #labibaWebBotDiv .mr-md-n4,
                #labibaWebBotDiv .mx-md-n4 {
                    margin-right: -1.5rem !important;
                }
                #labibaWebBotDiv .mb-md-n4,
                #labibaWebBotDiv .my-md-n4 {
                    margin-bottom: -1.5rem !important;
                }
                #labibaWebBotDiv .ml-md-n4,
                #labibaWebBotDiv .mx-md-n4 {
                    margin-left: -1.5rem !important;
                }
                #labibaWebBotDiv .m-md-n5 {
                    margin: -3rem !important;
                }
                #labibaWebBotDiv .mt-md-n5,
                #labibaWebBotDiv .my-md-n5 {
                    margin-top: -3rem !important;
                }
                #labibaWebBotDiv .mr-md-n5,
                #labibaWebBotDiv .mx-md-n5 {
                    margin-right: -3rem !important;
                }
                #labibaWebBotDiv .mb-md-n5,
                #labibaWebBotDiv .my-md-n5 {
                    margin-bottom: -3rem !important;
                }
                #labibaWebBotDiv .ml-md-n5,
                #labibaWebBotDiv .mx-md-n5 {
                    margin-left: -3rem !important;
                }
                #labibaWebBotDiv .m-md-auto {
                    margin: auto !important;
                }
                #labibaWebBotDiv .mt-md-auto,
                #labibaWebBotDiv .my-md-auto {
                    margin-top: auto !important;
                }
                #labibaWebBotDiv .mr-md-auto,
                #labibaWebBotDiv .mx-md-auto {
                    margin-right: auto !important;
                }
                #labibaWebBotDiv .mb-md-auto,
                #labibaWebBotDiv .my-md-auto {
                    margin-bottom: auto !important;
                }
                #labibaWebBotDiv .ml-md-auto,
                #labibaWebBotDiv .mx-md-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .m-lg-0 {
                    margin: 0 !important;
                }
                #labibaWebBotDiv .mt-lg-0,
                #labibaWebBotDiv .my-lg-0 {
                    margin-top: 0 !important;
                }
                #labibaWebBotDiv .mr-lg-0,
                #labibaWebBotDiv .mx-lg-0 {
                    margin-right: 0 !important;
                }
                #labibaWebBotDiv .mb-lg-0,
                #labibaWebBotDiv .my-lg-0 {
                    margin-bottom: 0 !important;
                }
                #labibaWebBotDiv .ml-lg-0,
                #labibaWebBotDiv .mx-lg-0 {
                    margin-left: 0 !important;
                }
                #labibaWebBotDiv .m-lg-1 {
                    margin: 0.25rem !important;
                }
                #labibaWebBotDiv .mt-lg-1,
                #labibaWebBotDiv .my-lg-1 {
                    margin-top: 0.25rem !important;
                }
                #labibaWebBotDiv .mr-lg-1,
                #labibaWebBotDiv .mx-lg-1 {
                    margin-right: 0.25rem !important;
                }
                #labibaWebBotDiv .mb-lg-1,
                #labibaWebBotDiv .my-lg-1 {
                    margin-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .ml-lg-1,
                #labibaWebBotDiv .mx-lg-1 {
                    margin-left: 0.25rem !important;
                }
                #labibaWebBotDiv .m-lg-2 {
                    margin: 0.5rem !important;
                }
                #labibaWebBotDiv .mt-lg-2,
                #labibaWebBotDiv .my-lg-2 {
                    margin-top: 0.5rem !important;
                }
                #labibaWebBotDiv .mr-lg-2,
                #labibaWebBotDiv .mx-lg-2 {
                    margin-right: 0.5rem !important;
                }
                #labibaWebBotDiv .mb-lg-2,
                #labibaWebBotDiv .my-lg-2 {
                    margin-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .ml-lg-2,
                #labibaWebBotDiv .mx-lg-2 {
                    margin-left: 0.5rem !important;
                }
                #labibaWebBotDiv .m-lg-3 {
                    margin: 1rem !important;
                }
                #labibaWebBotDiv .mt-lg-3,
                #labibaWebBotDiv .my-lg-3 {
                    margin-top: 1rem !important;
                }
                #labibaWebBotDiv .mr-lg-3,
                #labibaWebBotDiv .mx-lg-3 {
                    margin-right: 1rem !important;
                }
                #labibaWebBotDiv .mb-lg-3,
                #labibaWebBotDiv .my-lg-3 {
                    margin-bottom: 1rem !important;
                }
                #labibaWebBotDiv .ml-lg-3,
                #labibaWebBotDiv .mx-lg-3 {
                    margin-left: 1rem !important;
                }
                #labibaWebBotDiv .m-lg-4 {
                    margin: 1.5rem !important;
                }
                #labibaWebBotDiv .mt-lg-4,
                #labibaWebBotDiv .my-lg-4 {
                    margin-top: 1.5rem !important;
                }
                #labibaWebBotDiv .mr-lg-4,
                #labibaWebBotDiv .mx-lg-4 {
                    margin-right: 1.5rem !important;
                }
                #labibaWebBotDiv .mb-lg-4,
                #labibaWebBotDiv .my-lg-4 {
                    margin-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .ml-lg-4,
                #labibaWebBotDiv .mx-lg-4 {
                    margin-left: 1.5rem !important;
                }
                #labibaWebBotDiv .m-lg-5 {
                    margin: 3rem !important;
                }
                #labibaWebBotDiv .mt-lg-5,
                #labibaWebBotDiv .my-lg-5 {
                    margin-top: 3rem !important;
                }
                #labibaWebBotDiv .mr-lg-5,
                #labibaWebBotDiv .mx-lg-5 {
                    margin-right: 3rem !important;
                }
                #labibaWebBotDiv .mb-lg-5,
                #labibaWebBotDiv .my-lg-5 {
                    margin-bottom: 3rem !important;
                }
                #labibaWebBotDiv .ml-lg-5,
                #labibaWebBotDiv .mx-lg-5 {
                    margin-left: 3rem !important;
                }
                #labibaWebBotDiv .p-lg-0 {
                    padding: 0 !important;
                }
                #labibaWebBotDiv .pt-lg-0,
                #labibaWebBotDiv .py-lg-0 {
                    padding-top: 0 !important;
                }
                #labibaWebBotDiv .pr-lg-0,
                #labibaWebBotDiv .px-lg-0 {
                    padding-right: 0 !important;
                }
                #labibaWebBotDiv .pb-lg-0,
                #labibaWebBotDiv .py-lg-0 {
                    padding-bottom: 0 !important;
                }
                #labibaWebBotDiv .pl-lg-0,
                #labibaWebBotDiv .px-lg-0 {
                    padding-left: 0 !important;
                }
                #labibaWebBotDiv .p-lg-1 {
                    padding: 0.25rem !important;
                }
                #labibaWebBotDiv .pt-lg-1,
                #labibaWebBotDiv .py-lg-1 {
                    padding-top: 0.25rem !important;
                }
                #labibaWebBotDiv .pr-lg-1,
                #labibaWebBotDiv .px-lg-1 {
                    padding-right: 0.25rem !important;
                }
                #labibaWebBotDiv .pb-lg-1,
                #labibaWebBotDiv .py-lg-1 {
                    padding-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .pl-lg-1,
                #labibaWebBotDiv .px-lg-1 {
                    padding-left: 0.25rem !important;
                }
                #labibaWebBotDiv .p-lg-2 {
                    padding: 0.5rem !important;
                }
                #labibaWebBotDiv .pt-lg-2,
                #labibaWebBotDiv .py-lg-2 {
                    padding-top: 0.5rem !important;
                }
                #labibaWebBotDiv .pr-lg-2,
                #labibaWebBotDiv .px-lg-2 {
                    padding-right: 0.5rem !important;
                }
                #labibaWebBotDiv .pb-lg-2,
                #labibaWebBotDiv .py-lg-2 {
                    padding-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .pl-lg-2,
                #labibaWebBotDiv .px-lg-2 {
                    padding-left: 0.5rem !important;
                }
                #labibaWebBotDiv .p-lg-3 {
                    padding: 1rem !important;
                }
                #labibaWebBotDiv .pt-lg-3,
                #labibaWebBotDiv .py-lg-3 {
                    padding-top: 1rem !important;
                }
                #labibaWebBotDiv .pr-lg-3,
                #labibaWebBotDiv .px-lg-3 {
                    padding-right: 1rem !important;
                }
                #labibaWebBotDiv .pb-lg-3,
                #labibaWebBotDiv .py-lg-3 {
                    padding-bottom: 1rem !important;
                }
                #labibaWebBotDiv .pl-lg-3,
                #labibaWebBotDiv .px-lg-3 {
                    padding-left: 1rem !important;
                }
                #labibaWebBotDiv .p-lg-4 {
                    padding: 1.5rem !important;
                }
                #labibaWebBotDiv .pt-lg-4,
                #labibaWebBotDiv .py-lg-4 {
                    padding-top: 1.5rem !important;
                }
                #labibaWebBotDiv .pr-lg-4,
                #labibaWebBotDiv .px-lg-4 {
                    padding-right: 1.5rem !important;
                }
                #labibaWebBotDiv .pb-lg-4,
                #labibaWebBotDiv .py-lg-4 {
                    padding-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .pl-lg-4,
                #labibaWebBotDiv .px-lg-4 {
                    padding-left: 1.5rem !important;
                }
                #labibaWebBotDiv .p-lg-5 {
                    padding: 3rem !important;
                }
                #labibaWebBotDiv .pt-lg-5,
                #labibaWebBotDiv .py-lg-5 {
                    padding-top: 3rem !important;
                }
                #labibaWebBotDiv .pr-lg-5,
                #labibaWebBotDiv .px-lg-5 {
                    padding-right: 3rem !important;
                }
                #labibaWebBotDiv .pb-lg-5,
                #labibaWebBotDiv .py-lg-5 {
                    padding-bottom: 3rem !important;
                }
                #labibaWebBotDiv .pl-lg-5,
                #labibaWebBotDiv .px-lg-5 {
                    padding-left: 3rem !important;
                }
                #labibaWebBotDiv .m-lg-n1 {
                    margin: -0.25rem !important;
                }
                #labibaWebBotDiv .mt-lg-n1,
                #labibaWebBotDiv .my-lg-n1 {
                    margin-top: -0.25rem !important;
                }
                #labibaWebBotDiv .mr-lg-n1,
                #labibaWebBotDiv .mx-lg-n1 {
                    margin-right: -0.25rem !important;
                }
                #labibaWebBotDiv .mb-lg-n1,
                #labibaWebBotDiv .my-lg-n1 {
                    margin-bottom: -0.25rem !important;
                }
                #labibaWebBotDiv .ml-lg-n1,
                #labibaWebBotDiv .mx-lg-n1 {
                    margin-left: -0.25rem !important;
                }
                #labibaWebBotDiv .m-lg-n2 {
                    margin: -0.5rem !important;
                }
                #labibaWebBotDiv .mt-lg-n2,
                #labibaWebBotDiv .my-lg-n2 {
                    margin-top: -0.5rem !important;
                }
                #labibaWebBotDiv .mr-lg-n2,
                #labibaWebBotDiv .mx-lg-n2 {
                    margin-right: -0.5rem !important;
                }
                #labibaWebBotDiv .mb-lg-n2,
                #labibaWebBotDiv .my-lg-n2 {
                    margin-bottom: -0.5rem !important;
                }
                #labibaWebBotDiv .ml-lg-n2,
                #labibaWebBotDiv .mx-lg-n2 {
                    margin-left: -0.5rem !important;
                }
                #labibaWebBotDiv .m-lg-n3 {
                    margin: -1rem !important;
                }
                #labibaWebBotDiv .mt-lg-n3,
                #labibaWebBotDiv .my-lg-n3 {
                    margin-top: -1rem !important;
                }
                #labibaWebBotDiv .mr-lg-n3,
                #labibaWebBotDiv .mx-lg-n3 {
                    margin-right: -1rem !important;
                }
                #labibaWebBotDiv .mb-lg-n3,
                #labibaWebBotDiv .my-lg-n3 {
                    margin-bottom: -1rem !important;
                }
                #labibaWebBotDiv .ml-lg-n3,
                #labibaWebBotDiv .mx-lg-n3 {
                    margin-left: -1rem !important;
                }
                #labibaWebBotDiv .m-lg-n4 {
                    margin: -1.5rem !important;
                }
                #labibaWebBotDiv .mt-lg-n4,
                #labibaWebBotDiv .my-lg-n4 {
                    margin-top: -1.5rem !important;
                }
                #labibaWebBotDiv .mr-lg-n4,
                #labibaWebBotDiv .mx-lg-n4 {
                    margin-right: -1.5rem !important;
                }
                #labibaWebBotDiv .mb-lg-n4,
                #labibaWebBotDiv .my-lg-n4 {
                    margin-bottom: -1.5rem !important;
                }
                #labibaWebBotDiv .ml-lg-n4,
                #labibaWebBotDiv .mx-lg-n4 {
                    margin-left: -1.5rem !important;
                }
                #labibaWebBotDiv .m-lg-n5 {
                    margin: -3rem !important;
                }
                #labibaWebBotDiv .mt-lg-n5,
                #labibaWebBotDiv .my-lg-n5 {
                    margin-top: -3rem !important;
                }
                #labibaWebBotDiv .mr-lg-n5,
                #labibaWebBotDiv .mx-lg-n5 {
                    margin-right: -3rem !important;
                }
                #labibaWebBotDiv .mb-lg-n5,
                #labibaWebBotDiv .my-lg-n5 {
                    margin-bottom: -3rem !important;
                }
                #labibaWebBotDiv .ml-lg-n5,
                #labibaWebBotDiv .mx-lg-n5 {
                    margin-left: -3rem !important;
                }
                #labibaWebBotDiv .m-lg-auto {
                    margin: auto !important;
                }
                #labibaWebBotDiv .mt-lg-auto,
                #labibaWebBotDiv .my-lg-auto {
                    margin-top: auto !important;
                }
                #labibaWebBotDiv .mr-lg-auto,
                #labibaWebBotDiv .mx-lg-auto {
                    margin-right: auto !important;
                }
                #labibaWebBotDiv .mb-lg-auto,
                #labibaWebBotDiv .my-lg-auto {
                    margin-bottom: auto !important;
                }
                #labibaWebBotDiv .ml-lg-auto,
                #labibaWebBotDiv .mx-lg-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .m-xl-0 {
                    margin: 0 !important;
                }
                #labibaWebBotDiv .mt-xl-0,
                #labibaWebBotDiv .my-xl-0 {
                    margin-top: 0 !important;
                }
                #labibaWebBotDiv .mr-xl-0,
                #labibaWebBotDiv .mx-xl-0 {
                    margin-right: 0 !important;
                }
                #labibaWebBotDiv .mb-xl-0,
                #labibaWebBotDiv .my-xl-0 {
                    margin-bottom: 0 !important;
                }
                #labibaWebBotDiv .ml-xl-0,
                #labibaWebBotDiv .mx-xl-0 {
                    margin-left: 0 !important;
                }
                #labibaWebBotDiv .m-xl-1 {
                    margin: 0.25rem !important;
                }
                #labibaWebBotDiv .mt-xl-1,
                #labibaWebBotDiv .my-xl-1 {
                    margin-top: 0.25rem !important;
                }
                #labibaWebBotDiv .mr-xl-1,
                #labibaWebBotDiv .mx-xl-1 {
                    margin-right: 0.25rem !important;
                }
                #labibaWebBotDiv .mb-xl-1,
                #labibaWebBotDiv .my-xl-1 {
                    margin-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .ml-xl-1,
                #labibaWebBotDiv .mx-xl-1 {
                    margin-left: 0.25rem !important;
                }
                #labibaWebBotDiv .m-xl-2 {
                    margin: 0.5rem !important;
                }
                #labibaWebBotDiv .mt-xl-2,
                #labibaWebBotDiv .my-xl-2 {
                    margin-top: 0.5rem !important;
                }
                #labibaWebBotDiv .mr-xl-2,
                #labibaWebBotDiv .mx-xl-2 {
                    margin-right: 0.5rem !important;
                }
                #labibaWebBotDiv .mb-xl-2,
                #labibaWebBotDiv .my-xl-2 {
                    margin-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .ml-xl-2,
                #labibaWebBotDiv .mx-xl-2 {
                    margin-left: 0.5rem !important;
                }
                #labibaWebBotDiv .m-xl-3 {
                    margin: 1rem !important;
                }
                #labibaWebBotDiv .mt-xl-3,
                #labibaWebBotDiv .my-xl-3 {
                    margin-top: 1rem !important;
                }
                #labibaWebBotDiv .mr-xl-3,
                #labibaWebBotDiv .mx-xl-3 {
                    margin-right: 1rem !important;
                }
                #labibaWebBotDiv .mb-xl-3,
                #labibaWebBotDiv .my-xl-3 {
                    margin-bottom: 1rem !important;
                }
                #labibaWebBotDiv .ml-xl-3,
                #labibaWebBotDiv .mx-xl-3 {
                    margin-left: 1rem !important;
                }
                #labibaWebBotDiv .m-xl-4 {
                    margin: 1.5rem !important;
                }
                #labibaWebBotDiv .mt-xl-4,
                #labibaWebBotDiv .my-xl-4 {
                    margin-top: 1.5rem !important;
                }
                #labibaWebBotDiv .mr-xl-4,
                #labibaWebBotDiv .mx-xl-4 {
                    margin-right: 1.5rem !important;
                }
                #labibaWebBotDiv .mb-xl-4,
                #labibaWebBotDiv .my-xl-4 {
                    margin-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .ml-xl-4,
                #labibaWebBotDiv .mx-xl-4 {
                    margin-left: 1.5rem !important;
                }
                #labibaWebBotDiv .m-xl-5 {
                    margin: 3rem !important;
                }
                #labibaWebBotDiv .mt-xl-5,
                #labibaWebBotDiv .my-xl-5 {
                    margin-top: 3rem !important;
                }
                #labibaWebBotDiv .mr-xl-5,
                #labibaWebBotDiv .mx-xl-5 {
                    margin-right: 3rem !important;
                }
                #labibaWebBotDiv .mb-xl-5,
                #labibaWebBotDiv .my-xl-5 {
                    margin-bottom: 3rem !important;
                }
                #labibaWebBotDiv .ml-xl-5,
                #labibaWebBotDiv .mx-xl-5 {
                    margin-left: 3rem !important;
                }
                #labibaWebBotDiv .p-xl-0 {
                    padding: 0 !important;
                }
                #labibaWebBotDiv .pt-xl-0,
                #labibaWebBotDiv .py-xl-0 {
                    padding-top: 0 !important;
                }
                #labibaWebBotDiv .pr-xl-0,
                #labibaWebBotDiv .px-xl-0 {
                    padding-right: 0 !important;
                }
                #labibaWebBotDiv .pb-xl-0,
                #labibaWebBotDiv .py-xl-0 {
                    padding-bottom: 0 !important;
                }
                #labibaWebBotDiv .pl-xl-0,
                #labibaWebBotDiv .px-xl-0 {
                    padding-left: 0 !important;
                }
                #labibaWebBotDiv .p-xl-1 {
                    padding: 0.25rem !important;
                }
                #labibaWebBotDiv .pt-xl-1,
                #labibaWebBotDiv .py-xl-1 {
                    padding-top: 0.25rem !important;
                }
                #labibaWebBotDiv .pr-xl-1,
                #labibaWebBotDiv .px-xl-1 {
                    padding-right: 0.25rem !important;
                }
                #labibaWebBotDiv .pb-xl-1,
                #labibaWebBotDiv .py-xl-1 {
                    padding-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .pl-xl-1,
                #labibaWebBotDiv .px-xl-1 {
                    padding-left: 0.25rem !important;
                }
                #labibaWebBotDiv .p-xl-2 {
                    padding: 0.5rem !important;
                }
                #labibaWebBotDiv .pt-xl-2,
                #labibaWebBotDiv .py-xl-2 {
                    padding-top: 0.5rem !important;
                }
                #labibaWebBotDiv .pr-xl-2,
                #labibaWebBotDiv .px-xl-2 {
                    padding-right: 0.5rem !important;
                }
                #labibaWebBotDiv .pb-xl-2,
                #labibaWebBotDiv .py-xl-2 {
                    padding-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .pl-xl-2,
                #labibaWebBotDiv .px-xl-2 {
                    padding-left: 0.5rem !important;
                }
                #labibaWebBotDiv .p-xl-3 {
                    padding: 1rem !important;
                }
                #labibaWebBotDiv .pt-xl-3,
                #labibaWebBotDiv .py-xl-3 {
                    padding-top: 1rem !important;
                }
                #labibaWebBotDiv .pr-xl-3,
                #labibaWebBotDiv .px-xl-3 {
                    padding-right: 1rem !important;
                }
                #labibaWebBotDiv .pb-xl-3,
                #labibaWebBotDiv .py-xl-3 {
                    padding-bottom: 1rem !important;
                }
                #labibaWebBotDiv .pl-xl-3,
                #labibaWebBotDiv .px-xl-3 {
                    padding-left: 1rem !important;
                }
                #labibaWebBotDiv .p-xl-4 {
                    padding: 1.5rem !important;
                }
                #labibaWebBotDiv .pt-xl-4,
                #labibaWebBotDiv .py-xl-4 {
                    padding-top: 1.5rem !important;
                }
                #labibaWebBotDiv .pr-xl-4,
                #labibaWebBotDiv .px-xl-4 {
                    padding-right: 1.5rem !important;
                }
                #labibaWebBotDiv .pb-xl-4,
                #labibaWebBotDiv .py-xl-4 {
                    padding-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .pl-xl-4,
                #labibaWebBotDiv .px-xl-4 {
                    padding-left: 1.5rem !important;
                }
                #labibaWebBotDiv .p-xl-5 {
                    padding: 3rem !important;
                }
                #labibaWebBotDiv .pt-xl-5,
                #labibaWebBotDiv .py-xl-5 {
                    padding-top: 3rem !important;
                }
                #labibaWebBotDiv .pr-xl-5,
                #labibaWebBotDiv .px-xl-5 {
                    padding-right: 3rem !important;
                }
                #labibaWebBotDiv .pb-xl-5,
                #labibaWebBotDiv .py-xl-5 {
                    padding-bottom: 3rem !important;
                }
                #labibaWebBotDiv .pl-xl-5,
                #labibaWebBotDiv .px-xl-5 {
                    padding-left: 3rem !important;
                }
                #labibaWebBotDiv .m-xl-n1 {
                    margin: -0.25rem !important;
                }
                #labibaWebBotDiv .mt-xl-n1,
                #labibaWebBotDiv .my-xl-n1 {
                    margin-top: -0.25rem !important;
                }
                #labibaWebBotDiv .mr-xl-n1,
                #labibaWebBotDiv .mx-xl-n1 {
                    margin-right: -0.25rem !important;
                }
                #labibaWebBotDiv .mb-xl-n1,
                #labibaWebBotDiv .my-xl-n1 {
                    margin-bottom: -0.25rem !important;
                }
                #labibaWebBotDiv .ml-xl-n1,
                #labibaWebBotDiv .mx-xl-n1 {
                    margin-left: -0.25rem !important;
                }
                #labibaWebBotDiv .m-xl-n2 {
                    margin: -0.5rem !important;
                }
                #labibaWebBotDiv .mt-xl-n2,
                #labibaWebBotDiv .my-xl-n2 {
                    margin-top: -0.5rem !important;
                }
                #labibaWebBotDiv .mr-xl-n2,
                #labibaWebBotDiv .mx-xl-n2 {
                    margin-right: -0.5rem !important;
                }
                #labibaWebBotDiv .mb-xl-n2,
                #labibaWebBotDiv .my-xl-n2 {
                    margin-bottom: -0.5rem !important;
                }
                #labibaWebBotDiv .ml-xl-n2,
                #labibaWebBotDiv .mx-xl-n2 {
                    margin-left: -0.5rem !important;
                }
                #labibaWebBotDiv .m-xl-n3 {
                    margin: -1rem !important;
                }
                #labibaWebBotDiv .mt-xl-n3,
                #labibaWebBotDiv .my-xl-n3 {
                    margin-top: -1rem !important;
                }
                #labibaWebBotDiv .mr-xl-n3,
                #labibaWebBotDiv .mx-xl-n3 {
                    margin-right: -1rem !important;
                }
                #labibaWebBotDiv .mb-xl-n3,
                #labibaWebBotDiv .my-xl-n3 {
                    margin-bottom: -1rem !important;
                }
                #labibaWebBotDiv .ml-xl-n3,
                #labibaWebBotDiv .mx-xl-n3 {
                    margin-left: -1rem !important;
                }
                #labibaWebBotDiv .m-xl-n4 {
                    margin: -1.5rem !important;
                }
                #labibaWebBotDiv .mt-xl-n4,
                #labibaWebBotDiv .my-xl-n4 {
                    margin-top: -1.5rem !important;
                }
                #labibaWebBotDiv .mr-xl-n4,
                #labibaWebBotDiv .mx-xl-n4 {
                    margin-right: -1.5rem !important;
                }
                #labibaWebBotDiv .mb-xl-n4,
                #labibaWebBotDiv .my-xl-n4 {
                    margin-bottom: -1.5rem !important;
                }
                #labibaWebBotDiv .ml-xl-n4,
                #labibaWebBotDiv .mx-xl-n4 {
                    margin-left: -1.5rem !important;
                }
                #labibaWebBotDiv .m-xl-n5 {
                    margin: -3rem !important;
                }
                #labibaWebBotDiv .mt-xl-n5,
                #labibaWebBotDiv .my-xl-n5 {
                    margin-top: -3rem !important;
                }
                #labibaWebBotDiv .mr-xl-n5,
                #labibaWebBotDiv .mx-xl-n5 {
                    margin-right: -3rem !important;
                }
                #labibaWebBotDiv .mb-xl-n5,
                #labibaWebBotDiv .my-xl-n5 {
                    margin-bottom: -3rem !important;
                }
                #labibaWebBotDiv .ml-xl-n5,
                #labibaWebBotDiv .mx-xl-n5 {
                    margin-left: -3rem !important;
                }
                #labibaWebBotDiv .m-xl-auto {
                    margin: auto !important;
                }
                #labibaWebBotDiv .mt-xl-auto,
                #labibaWebBotDiv .my-xl-auto {
                    margin-top: auto !important;
                }
                #labibaWebBotDiv .mr-xl-auto,
                #labibaWebBotDiv .mx-xl-auto {
                    margin-right: auto !important;
                }
                #labibaWebBotDiv .mb-xl-auto,
                #labibaWebBotDiv .my-xl-auto {
                    margin-bottom: auto !important;
                }
                #labibaWebBotDiv .ml-xl-auto,
                #labibaWebBotDiv .mx-xl-auto {
                    margin-left: auto !important;
                }
            }
            #labibaWebBotDiv .text-monospace {
                font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace !important;
            }
            #labibaWebBotDiv .text-justify {
                text-align: justify !important;
            }
            #labibaWebBotDiv .text-wrap {
                white-space: normal !important;
            }
            #labibaWebBotDiv .text-nowrap {
                white-space: nowrap !important;
            }
            #labibaWebBotDiv .text-truncate {
                overflow: hidden;
                -o-text-overflow: ellipsis;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
            #labibaWebBotDiv .text-left {
                text-align: left !important;
            }
            #labibaWebBotDiv .text-right {
                text-align: right !important;
            }
            #labibaWebBotDiv .text-center {
                text-align: center !important;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .text-sm-left {
                    text-align: left !important;
                }
                #labibaWebBotDiv .text-sm-right {
                    text-align: right !important;
                }
                #labibaWebBotDiv .text-sm-center {
                    text-align: center !important;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .text-md-left {
                    text-align: left !important;
                }
                #labibaWebBotDiv .text-md-right {
                    text-align: right !important;
                }
                #labibaWebBotDiv .text-md-center {
                    text-align: center !important;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .text-lg-left {
                    text-align: left !important;
                }
                #labibaWebBotDiv .text-lg-right {
                    text-align: right !important;
                }
                #labibaWebBotDiv .text-lg-center {
                    text-align: center !important;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .text-xl-left {
                    text-align: left !important;
                }
                #labibaWebBotDiv .text-xl-right {
                    text-align: right !important;
                }
                #labibaWebBotDiv .text-xl-center {
                    text-align: center !important;
                }
            }
            #labibaWebBotDiv .text-lowercase {
                text-transform: lowercase !important;
            }
            #labibaWebBotDiv .text-uppercase {
                text-transform: uppercase !important;
            }
            #labibaWebBotDiv .text-capitalize {
                text-transform: capitalize !important;
            }
            #labibaWebBotDiv .font-weight-light {
                font-weight: 300 !important;
            }
            #labibaWebBotDiv .font-weight-lighter {
                font-weight: lighter !important;
            }
            #labibaWebBotDiv .font-weight-normal {
                font-weight: 400 !important;
            }
            #labibaWebBotDiv .font-weight-bold {
                font-weight: 700 !important;
            }
            #labibaWebBotDiv .font-weight-bolder {
                font-weight: bolder !important;
            }
            #labibaWebBotDiv .font-italic {
                font-style: italic !important;
            }
            #labibaWebBotDiv .text-white {
                color: #fff !important;
            }
            #labibaWebBotDiv .text-primary {
                color: #007bff !important;
            }
            #labibaWebBotDiv a.text-primary:focus,
            #labibaWebBotDiv a.text-primary:hover {
                color: #0056b3 !important;
            }
            #labibaWebBotDiv .text-secondary {
                color: #6c757d !important;
            }
            #labibaWebBotDiv a.text-secondary:focus,
            #labibaWebBotDiv a.text-secondary:hover {
                color: #494f54 !important;
            }
            #labibaWebBotDiv .text-success {
                color: #28a745 !important;
            }
            #labibaWebBotDiv a.text-success:focus,
            #labibaWebBotDiv a.text-success:hover {
                color: #19692b !important;
            }
            #labibaWebBotDiv .text-info {
                color: #17a2b8 !important;
            }
            #labibaWebBotDiv a.text-info:focus,
            #labibaWebBotDiv a.text-info:hover {
                color: #0f6674 !important;
            }
            #labibaWebBotDiv .text-warning {
                color: #ffc107 !important;
            }
            #labibaWebBotDiv a.text-warning:focus,
            #labibaWebBotDiv a.text-warning:hover {
                color: #b98b00 !important;
            }
            #labibaWebBotDiv .text-danger {
                color: #dc3545 !important;
            }
            #labibaWebBotDiv a.text-danger:focus,
            #labibaWebBotDiv a.text-danger:hover {
                color: #a71d2a !important;
            }
            #labibaWebBotDiv .text-light {
                color: #f8f9fa !important;
            }
            #labibaWebBotDiv a.text-light:focus,
            #labibaWebBotDiv a.text-light:hover {
                color: #cbd3da !important;
            }
            #labibaWebBotDiv .text-dark {
                color: #343a40 !important;
            }
            #labibaWebBotDiv a.text-dark:focus,
            #labibaWebBotDiv a.text-dark:hover {
                color: #121416 !important;
            }
            #labibaWebBotDiv .text-body {
                color: #212529 !important;
            }
            #labibaWebBotDiv .text-muted {
                color: #6c757d !important;
            }
            #labibaWebBotDiv .text-black-50 {
                color: rgba(0, 0, 0, 0.5) !important;
            }
            #labibaWebBotDiv .text-white-50 {
                color: hsla(0, 0%, 100%, 0.5) !important;
            }
            #labibaWebBotDiv .text-hide {
                font: 0/0 a;
                color: transparent;
                text-shadow: none;
                background-color: transparent;
                border: 0;
            }
            #labibaWebBotDiv .text-decoration-none {
                text-decoration: none !important;
            }
            #labibaWebBotDiv .text-break {
                word-break: break-word !important;
                overflow-wrap: break-word !important;
            }
            #labibaWebBotDiv .text-reset {
                color: inherit !important;
            }
            #labibaWebBotDiv .visible {
                visibility: visible !important;
            }
            #labibaWebBotDiv .invisible {
                visibility: hidden !important;
            }
            @media print {
                #labibaWebBotDiv *,
                #labibaWebBotDiv :after,
                #labibaWebBotDiv :before {
                    text-shadow: none !important;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important;
                }
                #labibaWebBotDiv a:not(.btn) {
                    text-decoration: underline;
                }
                #labibaWebBotDiv abbr[title]:after {
                    content: " (" attr(title) ")";
                }
                #labibaWebBotDiv pre {
                    white-space: pre-wrap !important;
                }
                #labibaWebBotDiv blockquote,
                #labibaWebBotDiv pre {
                    border: 1px solid #adb5bd;
                    page-break-inside: avoid;
                }
                #labibaWebBotDiv thead {
                    display: table-header-group;
                }
                #labibaWebBotDiv img,
                #labibaWebBotDiv tr {
                    page-break-inside: avoid;
                }
                #labibaWebBotDiv h2,
                #labibaWebBotDiv h3,
                #labibaWebBotDiv p {
                    orphans: 3;
                    widows: 3;
                }
                #labibaWebBotDiv h2,
                #labibaWebBotDiv h3 {
                    page-break-after: avoid;
                }
                @page {
                    size: a3;
                }
                #labibaWebBotDiv .container,
                #labibaWebBotDiv body {
                    min-width: 992px !important;
                }
                #labibaWebBotDiv .navbar {
                    display: none;
                }
                #labibaWebBotDiv .badge {
                    border: 1px solid #000;
                }
                #labibaWebBotDiv .table {
                    border-collapse: collapse !important;
                }
                #labibaWebBotDiv .table td,
                #labibaWebBotDiv .table th {
                    background-color: #fff !important;
                }
                #labibaWebBotDiv .table-bordered td,
                #labibaWebBotDiv .table-bordered th {
                    border: 1px solid #dee2e6 !important;
                }
                #labibaWebBotDiv .table-dark {
                    color: inherit;
                }
                #labibaWebBotDiv .table-dark tbody + tbody,
                #labibaWebBotDiv .table-dark td,
                #labibaWebBotDiv .table-dark th,
                #labibaWebBotDiv .table-dark thead th {
                    border-color: #dee2e6;
                }
                #labibaWebBotDiv .table .thead-dark th {
                    color: inherit;
                    border-color: #dee2e6;
                }
            }
            :root {
                --PhoneInput-color--focus: #03b2cb;
                --PhoneInputInternationalIconPhone-opacity: 0.8;
                --PhoneInputInternationalIconGlobe-opacity: 0.65;
                --PhoneInputCountrySelect-marginRight: 0.35em;
                --PhoneInputCountrySelectArrow-width: 0.3em;
                --PhoneInputCountrySelectArrow-marginLeft: var(--PhoneInputCountrySelect-marginRight);
                --PhoneInputCountrySelectArrow-borderWidth: 1px;
                --PhoneInputCountrySelectArrow-opacity: 0.45;
                --PhoneInputCountrySelectArrow-color: currentColor;
                --PhoneInputCountrySelectArrow-color--focus: var(--PhoneInput-color--focus);
                --PhoneInputCountrySelectArrow-transform: rotate(45deg);
                --PhoneInputCountryFlag-aspectRatio: 1.5;
                --PhoneInputCountryFlag-height: 1em;
                --PhoneInputCountryFlag-borderWidth: 1px;
                --PhoneInputCountryFlag-borderColor: rgba(0, 0, 0, 0.5);
                --PhoneInputCountryFlag-borderColor--focus: var(--PhoneInput-color--focus);
                --PhoneInputCountryFlag-backgroundColor--loading: rgba(0, 0, 0, 0.1);
            }
            .PhoneInput {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
            }
            .PhoneInputInput {
                -ms-flex: 1 1;
                flex: 1 1;
                min-width: 0;
            }
            .PhoneInputCountryIcon {
                width: calc(var(--PhoneInputCountryFlag-height) * var(--PhoneInputCountryFlag-aspectRatio));
                height: var(--PhoneInputCountryFlag-height);
            }
            .PhoneInputCountryIcon--square {
                width: var(--PhoneInputCountryFlag-height);
            }
            .PhoneInputCountryIcon--border {
                background-color: var(--PhoneInputCountryFlag-backgroundColor--loading);
                -webkit-box-shadow: 0 0 0 var(--PhoneInputCountryFlag-borderWidth) var(--PhoneInputCountryFlag-borderColor), inset 0 0 0 var(--PhoneInputCountryFlag-borderWidth) var(--PhoneInputCountryFlag-borderColor);
                box-shadow: 0 0 0 var(--PhoneInputCountryFlag-borderWidth) var(--PhoneInputCountryFlag-borderColor), inset 0 0 0 var(--PhoneInputCountryFlag-borderWidth) var(--PhoneInputCountryFlag-borderColor);
            }
            .PhoneInputCountryIconImg {
                display: block;
                width: 100%;
                height: 100%;
            }
            .PhoneInputInternationalIconPhone {
                opacity: var(--PhoneInputInternationalIconPhone-opacity);
            }
            .PhoneInputInternationalIconGlobe {
                opacity: var(--PhoneInputInternationalIconGlobe-opacity);
            }
            .PhoneInputCountry {
                position: relative;
                -ms-flex-item-align: stretch;
                align-self: stretch;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                margin-right: var(--PhoneInputCountrySelect-marginRight);
            }
            .PhoneInputCountrySelect {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                z-index: 1;
                border: 0;
                opacity: 0;
                cursor: pointer;
            }
            .PhoneInputCountrySelect[disabled],
            .PhoneInputCountrySelect[readonly] {
                cursor: default;
            }
            .PhoneInputCountrySelectArrow {
                display: block;
                content: "";
                width: var(--PhoneInputCountrySelectArrow-width);
                height: var(--PhoneInputCountrySelectArrow-width);
                margin-left: var(--PhoneInputCountrySelectArrow-marginLeft);
                border-style: solid;
                border-color: var(--PhoneInputCountrySelectArrow-color);
                border-top-width: 0;
                border-bottom-width: var(--PhoneInputCountrySelectArrow-borderWidth);
                border-left-width: 0;
                border-right-width: var(--PhoneInputCountrySelectArrow-borderWidth);
                -webkit-transform: var(--PhoneInputCountrySelectArrow-transform);
                -ms-transform: var(--PhoneInputCountrySelectArrow-transform);
                transform: var(--PhoneInputCountrySelectArrow-transform);
                opacity: var(--PhoneInputCountrySelectArrow-opacity);
            }
            .PhoneInputCountrySelect:focus + .PhoneInputCountryIcon + .PhoneInputCountrySelectArrow {
                opacity: 1;
                color: var(--PhoneInputCountrySelectArrow-color--focus);
            }
            .PhoneInputCountrySelect:focus + .PhoneInputCountryIcon--border {
                -webkit-box-shadow: 0 0 0 var(--PhoneInputCountryFlag-borderWidth) var(--PhoneInputCountryFlag-borderColor--focus), inset 0 0 0 var(--PhoneInputCountryFlag-borderWidth) var(--PhoneInputCountryFlag-borderColor--focus);
                box-shadow: 0 0 0 var(--PhoneInputCountryFlag-borderWidth) var(--PhoneInputCountryFlag-borderColor--focus), inset 0 0 0 var(--PhoneInputCountryFlag-borderWidth) var(--PhoneInputCountryFlag-borderColor--focus);
            }
            .PhoneInputCountrySelect:focus + .PhoneInputCountryIcon .PhoneInputInternationalIconGlobe {
                opacity: 1;
                color: var(--PhoneInputCountrySelectArrow-color--focus);
            }
            #labibaWebBotDiv #NotoKufiArabic {
                font-family: Open Sans, Noto Kufi Arabic;
            }
            #labibaWebBotDiv #DINNextLTArabicRegular {
                font-family: DINNextLTArabicRegular-Labiba, DINNextLTArabicRegular;
            }
            #labibaWebBotDiv #D-DINCondensed {
                font-family: D-DINCondensed-Labiba, DDinCondensedBold, DINNextLTArabicRegular-Labiba, DINNextLTArabicRegular;
            }
            #labibaWebBotDiv #LAD-Regular {
                font-family: LAD-Regular-Labiba, LAD-Regular;
            }
            #labibaWebBotDiv #GEDinarOneMedium {
                font-family: GE-Dinar-One-Medium;
            }
            #labibaWebBotDiv #AvenirNext {
                font-family: AvenirNext-Labiba, AvenirNextRegular, JannaRegular-Labiba, JannaRegular;
            }
            #labibaWebBotDiv #CodecPro {
                font-family: Codec Pro, sans-serif;
            }
            #labibaWebBotDiv .row > * {
                padding-right: unset;
                padding-left: unset;
                margin-top: unset;
            }
            #labibaWebBotDiv input,
            #labibaWebBotDiv select,
            #labibaWebBotDiv textarea {
                -webkit-box-shadow: unset !important;
                box-shadow: unset !important;
                border: unset !important;
            }
            #labibaWebBotDiv .card {
                padding: unset;
                margin: 0 0 10px;
            }
            #button-tooltip-labibaArNew,
            #button-tooltip-labibaEnNew {
                padding: 0;
                margin-bottom: 3px;
            }
            #button-tooltip-labibaArNew .tooltip-inner,
            #button-tooltip-labibaEnNew .tooltip-inner {
                padding: 0;
                border-radius: 0;
            }
            #SIOSENDBUTTON * {
                fill: #0070b0 !important;
            }
            #JOSENDBUTTON * {
                fill: #a77e62 !important;
            }
            #BSFSENDBUTTON * {
                fill: #0d6976 !important;
            }
            .lc-1nq0ak9 {
                color: #7f7cab !important;
                font-size: 13px !important;
            }
            #button-tooltip-labibaArNew,
            #button-tooltip-labibaEnNew {
                border-radius: 0px!;
            }
            #labibaWebBotDiv .VmenuLabel {
                font-size: 15px !important;
                color: rgba(0, 0, 103, 0.8) !important;
            }
            #labibaWebBotDiv #MessageListContainer .col-lg {
                -ms-flex-preferred-size: unset !important;
                flex-basis: unset !important;
            }
            #labibaWebBotDiv .fade {
                opacity: 0.9 !important;
                -webkit-transition: opacity 0s linear;
                -o-transition: opacity 0s linear;
                -webkit-transition: opacity 0s cubic-bezier(1, 0, 0, 1);
                -o-transition: opacity 0s cubic-bezier(1, 0, 0, 1);
                transition: opacity 0s cubic-bezier(1, 0, 0, 1);
            }
            .lc-16nfh3w {
                position: inherit;
            }
            #labibaWebBotDiv #CairoRegular {
                font-family: CairoRegular;
            }
            #labibaWebBotDiv #OpenSans {
                font-family: Open Sans;
            }
            #labibaWebBotDiv #LAD-Regular {
                font-family: LAD-Regular;
            }
            #labibaWebBotDiv #IBMPlexSansArabic {
                font-family: IBM Plex Sans Arabic;
            }
            #labibaWebBotDiv #MontserratRegular {
                font-family: Montserrat Regular;
            }
            #labibaWebBotDiv #GEJaridaHeavy {
                font-family: GE Jarida Heavy;
                font-family: GE SS Two Bold;
            }
            #labibaWebBotDiv #FrutigerLTArabic-55Roman {
                font-family: FrutigerLTArabic-55Roman;
                font-family: Almarai;
            }
            #labibaWebBotDiv #AvenirNext {
                font-family: AvenirNext, AvenirNextRegular, JannaRegular;
            }
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            #labibaWebBotDiv #defaultfont {
                font-family: labibacst;
            }
            #labibaWebBotDiv .quickreplaylabiba button.quickreplaylabibabutton:hover {
                color: #fff !important;
            }
            #labibaWebBotDiv .quickreplaylabiba button.quickreplaylabibabutton:disabled {
                color: #fff !important;
                border: 0 none !important;
                background: transparent !important;
                border-radius: 0 !important;
                vertical-align: middle;
                margin: 3px;
                outline: 0;
            }
            #labibaWebBotDiv #MessageListContainer * {
                letter-spacing: normal;
            }
            div#button-tooltip-labibaAr {
                font-family: Droid Arabic Kufi;
                font-size: 13px;
            }
            #button-tooltip-labibaEn {
                font-family: Calibri;
                font-size: 16px;
            }
            #labibaWebBotDiv button:focus {
                outline: none !important;
            }
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer,
            #labibaWebBotDiv .quickreplaylabiba button.quickreplaylabibabutton {
                font-size: 13px !important;
                height: 50px !important;
                padding: 10px 70px !important;
                margin: 3px;
                outline: 0;
            }
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer {
                border-color: #05184d;
                font-weight: 500;
            }
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer:hover {
                font-weight: 400;
            }
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer:first-child {
                background: transparent !important;
                border-color: #05184d !important;
                color: #05184d !important;
            }
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer:first-child:focus,
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer:first-child:focus-visible,
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer:first-child:focus-within,
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer:first-child:hover,
            #labibaWebBotDiv .quickreplaylabiba #QRAjeer:first-child:visited {
                background: #05184d !important;
                border-color: #05184d !important;
                color: #fff !important;
            }
            #GASCOSendIcon .lc-1aes1f2 * {
                fill: #262261 !important;
            }
            .lc-16nfh3w {
                margin-right: 6px !important;
                margin-left: -11px !important;
                margin-top: -3px !important;
            }
            .lc-d7sfrm {
                -webkit-transform: rotateY(180deg);
                -ms-transform: rotateY(180deg);
                transform: rotateY(180deg);
                margin-top: 2px !important;
            }
            .lc-26ho68,
            .lc-d7sfrm {
                -ms-flex-positive: 0;
                flex-grow: 0;
                -ms-flex-negative: 1;
                flex-shrink: 1;
            }
            .lc-26ho68 {
                margin-top: 1px !important;
            }
            .lc-wq6lpb img {
                display: block;
                border-radius: inherit;
                width: 100%;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                margin-right: -24px !important;
                margin-top: -9px !important;
                margin-left: -3px !important;
                padding: 3px !important;
            }
            .lc-1bgsedp {
                margin-left: -12px !important;
            }
            .lc-1bgsedp,
            .lc-fkffqh {
                font-size: 9px !important;
                font-family: labibacst1 !important;
            }
            #AjeerGreen .lc-1aes1f2 *,
            #AjeerGreen .lc-s34r9n * {
                fill: #43a160 !important;
            }
            #DNRDSENDBUTTON .lc-1274p8m * {
                fill: #a7882a !important;
            }
            #RHCSENDBUTTON * {
                fill: #9d704a !important;
            }
            #MOHAPSENDBUTTON * {
                fill: #7c5e24 !important;
            }
            #FESENDBUTTON * {
                fill: #e50000 !important;
            }
            #wbwSENDBUTTON * {
                fill: #ffdf00 !important;
            }
            #ywwSENDBUTTON * {
                fill: #0073cd !important;
            }
            #ymcSENDBUTTON * {
                fill: #000076 !important;
            }
            #qasrSENDBUTTON * {
                fill: #ad841f !important;
            }
            #clymbSENDBUTTON * {
                fill: #bed732 !important;
            }
            #etihadSENDBUTTON * {
                fill: #bd8b13 !important;
            }
            #yasSENDBUTTON * {
                fill: #67757c !important;
            }
            #ladSENDBUTTON * {
                fill: #464646 !important;
            }
            #labibaWebBotDiv div.titlebarlabiba,
            #labibaWebBotDiv div.titlebarlabiba2 {
                padding-top: 13px !important;
            }
            #labibaWebBotDiv div.titlebarlabiba2 * {
                letter-spacing: 1.5px !important;
            }
            .material-icons {
                color: #fff;
                font-size: 34px;
            }
            .button-inside .material-icons {
                font-size: 10px;
            }
            .main-wrapper {
                width: 300px;
                height: 300px;
                width: 250px;
                height: 250px;
                position: relative;
                border-radius: 50%;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                border: 2.3px solid #a19f9f;
                left: -5px;
                bottom: -35px;
            }
            .main-wrapper-inside {
                width: 200px;
                height: 200px;
                position: relative;
                z-index: 2;
            }
            .main-wrapperMudad {
                width: 60px;
                height: 60px;
                left: 20px;
                top: 20px;
            }
            .main-wrapperMudad,
            .main-wrapperTamkeen {
                position: absolute;
                border-radius: 50%;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                border: 2.3px solid #a19f9f;
            }
            .main-wrapperTamkeen {
                width: 250px;
                height: 250px;
                left: -20px;
            }
            .main-wrapper-insideTamkeen {
                width: 100px;
                height: 130px;
                position: fixed;
                z-index: 2;
                right: 10px;
            }
            .button-labiba {
                border-radius: 50%;
                width: 58px;
                height: 58px;
                background-color: #979696;
                position: absolute;
                bottom: 0;
                right: 0;
                z-index: 6;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                cursor: pointer;
                -webkit-transition: all 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                -o-transition: all 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                transition: all 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                -webkit-box-shadow: -1px 2px 12px rgba(0, 0, 0, 0.4);
                box-shadow: -1px 2px 12px rgba(0, 0, 0, 0.4);
                will-change: transform;
            }
            .lc-x3fmui img {
                border-radius: 0 !important;
                -o-object-fit: unset !important;
                object-fit: unset !important;
            }
            .button .material-icons {
                -webkit-transition: transform 0.2s cubic-bezier(0.19, 1, 0.22, 1);
                -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.19, 1, 0.22, 1);
                transition: -webkit-transform 0.2s cubic-bezier(0.19, 1, 0.22, 1);
                -o-transition: transform 0.2s cubic-bezier(0.19, 1, 0.22, 1);
                transition: transform 0.2s cubic-bezier(0.19, 1, 0.22, 1);
                transition: transform 0.2s cubic-bezier(0.19, 1, 0.22, 1), -webkit-transform 0.2s cubic-bezier(0.19, 1, 0.22, 1);
                will-change: transform;
                -webkit-transform-origin: center center;
                -ms-transform-origin: center center;
                transform-origin: center center;
            }
            .button.animation {
                background-color: #979696;
            }
            .button.animation .material-icons {
                -webkit-transform: rotate(-45deg) translateZ(0);
                transform: rotate(-45deg) translateZ(0);
            }
            #labibaWebBotDiv .button-wrapper {
                width: 300px;
                height: 200px;
                width: 250px;
                height: 170px;
                position: absolute;
                border-radius: 50%;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-transition: transform 0.4s cubic-bezier(0.07, 1.1, 0.28, 1.01);
                -webkit-transition: -webkit-transform 0.4s cubic-bezier(0.07, 1.1, 0.28, 1.01);
                transition: -webkit-transform 0.4s cubic-bezier(0.07, 1.1, 0.28, 1.01);
                -o-transition: transform 0.4s cubic-bezier(0.07, 1.1, 0.28, 1.01);
                transition: transform 0.4s cubic-bezier(0.07, 1.1, 0.28, 1.01);
                transition: transform 0.4s cubic-bezier(0.07, 1.1, 0.28, 1.01), -webkit-transform 0.4s cubic-bezier(0.07, 1.1, 0.28, 1.01);
                will-change: transform;
            }
            #labibaWebBotDiv .button-wrapper.animation {
                -webkit-transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                transition: -webkit-transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                -o-transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1), -webkit-transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
                will-change: transform;
            }
            #labibaWebBotDiv .button-wrapper.first.animation {
                -webkit-transform: rotate(155deg) translateZ(0);
                transform: rotate(155deg) translateZ(0);
                display: none;
            }
            #labibaWebBotDiv .button-wrapper.second.animation {
                -webkit-transform: rotate(175deg) translateZ(0);
                transform: rotate(175deg) translateZ(0);
                -webkit-transform: rotate(160deg) translateZ(0);
                transform: rotate(160deg) translateZ(0);
            }
            #labibaWebBotDiv .button-wrapper.third.animation {
                -webkit-transform: rotate(195deg) translateZ(0);
                transform: rotate(195deg) translateZ(0);
            }
            #labibaWebBotDiv .button-wrapper.fourth.animation {
                -webkit-transform: rotate(215deg) translateZ(0);
                transform: rotate(215deg) translateZ(0);
                -webkit-transform: rotate(230deg) translateZ(0);
                transform: rotate(230deg) translateZ(0);
            }
            #labibaWebBotDiv .button-wrapper.fifth.animation {
                -webkit-transform: rotate(235deg) translateZ(0);
                transform: rotate(235deg) translateZ(0);
                display: none;
            }
            .button-inside {
                border-radius: 50%;
                width: 35px;
                height: 35px;
                position: absolute;
                bottom: 3px;
                right: 3px;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                color: #fff;
                cursor: pointer;
            }
            .button-inside.first {
                background-color: #979696;
                -webkit-transform: rotate(203deg);
                -ms-transform: rotate(203deg);
                transform: rotate(203deg);
            }
            .button-inside.second {
                background-color: #979696;
                -webkit-transform: rotate(200deg);
                -ms-transform: rotate(200deg);
                transform: rotate(200deg);
            }
            .button-inside.third {
                background-color: #979696;
                -webkit-transform: rotate(166deg);
                -ms-transform: rotate(166deg);
                transform: rotate(166deg);
            }
            .button-inside.fourth {
                background-color: #979696;
                -webkit-transform: rotate(145deg);
                -ms-transform: rotate(145deg);
                transform: rotate(145deg);
            }
            .button-inside.fifth {
                background-color: #979696;
                -webkit-transform: rotate(100deg);
                -ms-transform: rotate(100deg);
                transform: rotate(100deg);
            }
            .imgsocialmedia {
                width: 40px;
            }
            .imgsocialmediaMudad {
                width: 60px;
            }
            .imgsocialmedia:hover {
                -webkit-transform: scale(1.2);
                -ms-transform: scale(1.2);
                transform: scale(1.2);
            }
            #labibaWebBotDiv button,
            #labibaWebBotDiv input,
            #labibaWebBotDiv optgroup,
            #labibaWebBotDiv select,
            #labibaWebBotDiv textarea {
                margin: 8px;
                border-radius: 0;
            }
            .lc-1ru26ch {
                padding: 0 !important;
            }
         
            .RatingStar,
            [data-forhalf="★"] {
                padding-left: 6px;
            }
            .react-stars,
            .react-stars-wrapper-08477246762189394:focus {
                outline: none;
            }
            #button-tooltip-labibaArNew,
            #button-tooltip-labibaEnNew {
                z-index: 9999;
                background-color: #fff;
                opacity: 1;
                border-radius: 0;
            }
            #button-tooltip-labibaAr,
            #button-tooltip-labibaEn {
                opacity: 1;
            }
            #button-tooltip-labibaAr .tooltip-inner,
            #button-tooltip-labibaArNew .tooltip-inner,
            #button-tooltip-labibaEn .tooltip-inner,
            #button-tooltip-labibaEnNew .tooltip-inner {
                background: transparent;
            }
            #button-tooltip-labibaAr .arrow,
            #button-tooltip-labibaArNew .arrow,
            #button-tooltip-labibaEn .arrow,
            #button-tooltip-labibaEnNew .arrow {
                background: transparent;
                position: none !important;
                display: none !important;
            }
            #button-tooltip-labibaAr .bs-tooltip-auto[x-placement^="top"],
            #button-tooltip-labibaArNew .bs-tooltip-auto[x-placement^="top"],
            #button-tooltip-labibaEn .bs-tooltip-auto[x-placement^="top"],
            #button-tooltip-labibaEnNew .bs-tooltip-auto[x-placement^="top"],
            .bs-tooltip-top {
                padding: 0;
            }
            .labibaWebBotModel.fade {
                -webkit-transition: opacity 0.15s linear;
                -o-transition: opacity 0.15s linear;
                transition: opacity 0.15s linear;
            }
            .modal.fade #labibaWebBotDiv.modal-dialog,
            .modal.in #labibaWebBotDiv.modal-dialog {
                position: relative;
                height: 100%;
                width: 60%;
                text-align: center;
                margin-top: -4% !important;
            }
            #label1,
            #label2 {
                padding: 5px;
                border-radius: 20px !important;
            }
            #labibaWebBotDiv .VMenuImg {
                width: 100% !important;
                padding: 0 !important;
                border-radius: 11px !important;
                margin-top: 6px !important;
            }
            #labibaWebBotDiv .VmenuLabel {
                text-align: right !important;
                min-height: 37px !important;
                height: 100% !important;
                border-bottom: 0 !important;
                padding: 20px 35px 0 20px !important;
                font-weight: 500 !important;
                font-size: 12px !important;
                width: 300px !important;
            }
            .lc-jnasne {
                min-height: 37px;
                height: 100%;
                border-bottom: 0;
                padding: 20px 0 0 20px;
                font-weight: 500;
                font-size: 12px !important;
                color: rgba(0, 0, 103, 0.8) !important;
                width: 300px;
                text-align: left;
                max-width: 100%;
            }
            .lc-wq6lpb {
                border: 1px solid #fff0 !important;
                border-radius: 50% !important;
                text-align: center !important;
                background-color: #fff0 !important;
                text-transform: uppercase;
                width: 30px;
                height: 30px;
                line-height: 30px;
                margin-top: 4px;
                margin-right: 15px;
            }
            #labibaWebBotDiv .VMenuButton {
                border: 1px solid #ccc !important;
                text-decoration: none !important;
                font-weight: 400 !important;
                font-size: 10px !important;
                text-align: center !important;
                color: #3e5d75 !important;
                background-color: transparent !important;
                padding: 3px !important;
                border-radius: 30px !important;
            }
            #labibaWebBotDiv .container {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
                margin-top: 0 !important;
                padding-top: 0 !important;
            }
            #labibaWebBotDiv .row {
                margin-bottom: 0 !important;
                margin-top: 0 !important;
                padding-top: 0 !important;
            }
            #labibaWebBotDiv .col-2 {
                padding-bottom: 0 !important;
            }
            #labibaWebBotDiv #MessageListContainer .col-lg,
            #labibaWebBotDiv .col-2 {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .labibaWebBotModel.fade {
                opacity: 0.9 !important;
                -webkit-transition: opacity 0s linear;
                -o-transition: opacity 0s linear;
                -webkit-transition: opacity 0s cubic-bezier(1, 0, 0, 1);
                -o-transition: opacity 0s cubic-bezier(1, 0, 0, 1);
                transition: opacity 0s cubic-bezier(1, 0, 0, 1);
            }
            #labibaWebBotDiv input[type="checkbox"],
            #labibaWebBotDiv input[type="radio"] {
                display: inline-block !important;
                -webkit-appearance: auto !important;
                -moz-appearance: auto !important;
                appearance: auto !important;
            }
            #Tamkeen img {
                -o-object-fit: contain;
                object-fit: contain;
            }
            #selectedOptionPC {
                padding: "10px 30px !important";
                font-size: 16;
                border-radius: 4;
                border: "1px solid #d5d5d5";
                border-radius: 7;
                background: "#f9f9f9";
                font-weight: "normal";
                font-family: Loew-Next-Arabic-Medium;
                text-align: "left";
            }
            #ErrorPhone,
            #PhoneError {
                color: #555;
                padding: 4px 28px 16px;
                font-size: 10px;
            }
            #selectedOptionPC div,
            .css-1s2u09g-control {
                direction: rtl;
                font-size: 13px;
            }
            #labibaWebBotDiv label {
                margin-top: 40px !important;
            }
            .PhoneInput {
                padding: 9.5px 6px;
                font-size: 16px;
                border: 1px solid #d5d5d5;
                border-radius: 7px;
                background: #f9f9f9;
                font-weight: 400;
                border-radius: 0;
                font-family: Loew-Next-Arabic-Medium;
                text-align: left;
                width: 100%;
            }
            .PhoneInput input:focus-visible {
                border: none;
                outline: 0;
            }
            .PhoneInputInput {
                border: none;
                background-color: #f9f9f9;
                padding: 2px 13px;
            }
            .PhoneInputCountrySelect {
                text-align: center;
            }
            .SelectStyle {
                display: inline-block !important;
                margin-right: 3px;
                margin-left: 3px;
            }
            .SelectStyle * {
                border: unset !important;
            }
            .SelectStyle .css-1pahdxg-control {
                border: unset !important;
                border-color: transparent;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                font-size: 12px;
                padding-top: 3px;
            }
            .SelectStyle .css-tj5bde-Svg,
            .SelectStyle svg {
                width: 13px !important;
            }
            .SelectStyle .css-1okebmr-indicatorSeparator {
                display: none;
            }
            .SelectStyle .css-1d8n9bt,
            .SelectStyle .css-1gtu0rj-indicatorContainer,
            .SelectStyle .css-tlfecz-indicatorContainer {
                padding: 1px !important;
            }
            #react-select-2-placeholder,
            .SelectStyle .css-1s2u09g-control {
                font-size: 12px;
                padding-top: 3px;
            }
            .SelectStyle .css-319lph-ValueContainer {
                padding: 0 !important;
            }
            .css-1s2u09g-control {
                direction: unset;
            }
            .SelectStyle #react-select-1-listbox,
            .SelectStyle #react-select-2-listbox,
            .SelectStyle #react-select-3-listbox,
            .SelectStyle #react-select-4-listbox,
            .SelectStyle #react-select-5-listbox,
            .SelectStyle #react-select-6-listbox {
                width: 70px;
                text-align: center;
            }
            #react-select-2-placeholder input,
            .css-6j8wv5-Input input {
                opacity: 0 !important;
            }
            .lc-16nfh3w {
                border-width: 1px 0 0;
                border-top-style: solid;
                border-right-style: none;
                border-bottom-style: none;
                border-left-style: none;
                border-top-color: rgba(0, 0, 0, 0.1);
                padding-top: 8px !important;
                border-right-color: initial;
                border-bottom-color: initial;
                border-left-color: initial;
                -webkit-border-image: initial;
                -o-border-image: initial;
                border-image: initial;
                height: auto;
                margin-right: 0 !important;
                padding: 4px 30px;
                border-radius: 0;
                margin-top: 0;
                direction: ltr;
            }
            .lc-cjvy5q {
                background-color: #0a0f70 !important;
            }
            .lc-1j7efvf {
                background-color: #f9f9fb !important;
                border: 1px solid #000067 !important;
                color: #000067;
                font-family: labibacst1 !important;
                font-size: 12px !important;
            }
            .lc-1j7efvf:hover {
                background-color: #000067;
                color: #000067 !important;
                border-radius: -6px !important;
            }
            .lc-1gj6f98 {
                -ms-flex-pack: right;
                justify-content: right;
                width: calc(100% - 43px);
                min-height: 40px;
                -webkit-box-sizing: initial;
                box-sizing: initial;
                font-size: 13px;
                font-weight: 500;
                font-family: Loew-Next-Arabic-Bold;
                color: #000067;
                text-align: center;
                padding: 12px 23px;
                border-radius: 25px 25px 0 0;
                -webkit-box-shadow: rgba(0, 0, 0, 0.05) -1px 8px 4px;
                box-shadow: -1px 8px 4px rgba(0, 0, 0, 0.05);
                background: #f9f9fb;
                direction: rtl;
                display: -ms-inline-flexbox;
                display: inline-flex;
                letter-spacing: normal;
            }
            .lc-11ot0ug {
                border: 0;
                font-size: 13px;
                color: #333;
                margin-right: 18px;
                margin-bottom: 20px;
                background: #f0f0f6;
                font-weight: 400;
                border-radius: 25px 25px 25px 0;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                -webkit-filter: none !important;
                filter: none !important;
                text-align: right;
            }
            .lc-ng0829 {
                -webkit-box-shadow: inset hsla(0, 9%, 90%, 0.05) 0 -1px 0 !important;
                box-shadow: inset 0 -1px 0 hsla(0, 9%, 90%, 0.05) !important;
                -webkit-filter: drop-shadow(rgba(0, 0, 0, 0.05) 0 0 0) !important;
                filter: drop-shadow(rgba(0, 0, 0, 0.05) 0 0 0) !important;
                border-radius: 12px !important;
                height: 100px !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-align: center !important;
                align-items: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
                width: 100%;
                color: #000076 !important;
            }
            .lc-1nq0ak9,
            .lc-ng0829 {
                -ms-flex-direction: column !important;
                flex-direction: inherit;
                -ms-flex-pack: distribute !important;
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }
            .lc-1nq0ak9,
            .lc-ng0829 {
                justify-content: center !important;
                font-family: labibacst1 !important;
            }
            .lc-1nq0ak9 {
                -webkit-box-shadow: inset hsla(0, 9%, 90%, 0.05) 0 -1px 0 !important;
                box-shadow: inset 0 -1px 0 hsla(0, 9%, 90%, 0.05) !important;
                -webkit-filter: drop-shadow(rgba(0, 0, 0, 0.05) 0 0 0) !important;
                filter: drop-shadow(rgba(0, 0, 0, 0.05) 0 0 0) !important;
                border-radius: 12px !important;
                height: 114px !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-align: center !important;
                align-items: center !important;
                -ms-flex-pack: center !important;
                width: 100%;
            }
            .lc-1j293jk.eovu8nx0 {
                color: #7f7cab !important;
            }
            .lc-1o6v6ri {
                font-size: 11.5px !important;
                text-align: center;
                margin: 0;
                padding: 0;
                width: 100%;
                font-weight: 600 !important;
                -ms-flex-pack: center;
                justify-content: center;
                display: contents !important;
            }
            #MessageListContainer
                > div:nth-child(12)
                > div.lc-1fjhbkf.e108e6fy0
                > div
                > div
                > div.container
                > div
                > div
                > div
                > div.lc-vbzsta.e108e6fy0
                > div
                > div
                > div:nth-child(4)
                > div
                > div
                > div
                > div.lc-1nq0ak9.emwkn670
                > div.lc-1j293jk.eovu8nx0
                > div {
                color: #7f7cab !important;
                font-family: labibacst1 !important;
            }
            #MessageListContainer > div:nth-child(4) > div.lc-1fjhbkf.e108e6fy0 > div > div > div.container > div > div:nth-child(7) > div > div > div > div > div.col-10 > div {
                color: #000067 !important;
            }
            .lc-3qyy68 {
                font-size: 13px !important;
                -webkit-box-shadow: none;
                box-shadow: none;
                text-align: right;
            }
            .lc-1ok6v78 {
                color: #000067;
                text-align: right;
            }
            .lc-1ok6v78,
            .lc-1qhr7ik {
                border: 0;
                font-size: 13px !important;
                margin-right: 18px;
                margin-bottom: 18px;
                background: #f0f0f6;
                font-weight: 400;
                border-radius: 25px 25px 25px 0;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .lc-1qhr7ik {
                color: #333;
            }
            .lc-3qyy68 {
                border: 0;
                font-size: 13px;
                color: #000067;
                margin-right: 18px;
                margin-bottom: 18px;
                background: #f0f0f6;
                font-weight: 400;
                border-radius: 25px 25px 25px 0;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .lc-3ft2j8,
            .lc-14li7iz,

            .lc-1ru26ch {
                font-family: labibacst !important;
                font-size: 10px !important;
            }
            .lc-170j08c {
                background-color: #f9f9fb !important;
                border: 1px solid #35027d !important;
            }
            .lc-1guqxmg,
            .lc-1j8gq9l,
            .lc-11igqio,
            .lc-b2u4ww {
                background-color: #000067 !important;
            }
            .btn-emoji {
                background-color: #fff;
                fill: #fff !important;
                color: inherit;
                margin-bottom: 21px !important;
                margin-right: 11px !important;
                font-weight: 500 !important;
                border: 6px solid !important;
                border-color: transparent !important;
                border-radius: 6px !important;
                height: 42px !important;
                width: 37px !important;
                margin-top: 10px !important;
                padding: 0;
            }
            .btn-emoji:hover {
                background-color: #000067 !important;
                color: #fff !important;
            }
            .btn-emojiChecked {
                background-color: #56b9b3 !important;
                fill: #fff !important;
                color: #fff !important;
                margin-bottom: 20px !important;
                margin-right: 8px !important;
                font-weight: 500 !important;
                border: 1px solid !important;
                border-color: transparent !important;
                border-radius: 10px !important;
                font-size: 25px !important;
                padding: 0;
            }
            #postformHeader > text {
                color: #0f0066 !important;
            }
            #defaultfont > div:nth-child(2) {
                margin-top: -42px !important;
            }
            #titlebarlabiba {
                background: #fff !important;
            }
            #defaultfont > div:nth-child(2) > div:nth-child(3) {
                height: auto;
                padding: 13px 30px !important;
                margin-top: 2px !important;
                background: #fff;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
                text-align: center;
                font-size: 13px;
                font-weight: 500;
                color: rgba(0, 0, 0, 0.38);
                direction: ltr;
            }
            .lc-1pya8z3 {
                margin-top: 2px !important;
                -ms-flex-pack: right;
                justify-content: right;
                width: calc(100% - 31px) !important;
                min-height: 40px;
                -webkit-box-sizing: initial;
                box-sizing: initial;
                font-size: 13px;
                font-weight: 500;
                font-family: Loew-Next-Arabic-Bold;
                color: #000067;
                text-align: right;
                padding: 12px 20px;
                border-radius: 25px 25px 0 0;
                -webkit-box-shadow: rgba(0, 0, 0, 0.05) 10px 10px 6px;
                box-shadow: 10px 10px 6px rgba(0, 0, 0, 0.05);
                background: #fff !important;
                direction: rtl;
                display: -ms-inline-flexbox;
                display: inline-flex;
                letter-spacing: normal;
            }
            .lc-1xsn5m1 {
                color: rgb(40 8 117) !important;
                font-size: 12px !important;
            }
            #defaultfont > div:nth-child(2) > div.lc-16nfh3w.eyij3xx0 > div > div:nth-child(2) > div:nth-child(2) {
                background: rgb(7 14 104) !important;
            }

            #MessageListContainer > div:nth-child(2) > div.lc-1fjhbkf.e108e6fy0 {
                margin-top: 32px !important;
            }
            .lc-mlobim {
                width: 165px !important;
                margin: 9px 28px 16px;
                max-width: none;
                visibility: visible;
                -webkit-filter: unset;
                filter: unset;
            }
            .lc-1s0mwol:last-child > :last-child {
                border: 1px solid red;
                text-decoration: none;
                font-weight: 400;
                font-size: 13px;
                text-align: center;
                color: #3e5d75;
                background-color: transparent;
                margin: 10px 68px 20px;
                width: 50%;
                border-radius: 7px;
                padding: 5px;
                outline: 0 solid transparent;
                display: none !important;
            }
            .lc-2oshf8 {
                background-color: #f9f9fb !important;
                border: 1px solid #000067 !important;
                border-radius: 13px !important;
                color: #000067;
                font-family: labibacst1 !important;
                font-size: 12px !important;
            }
            .lc-2oshf8:hover {
                background-color: #000067 !important;
                color: #f4f4f7 !important;
            }
            .lc-1x0ff2h {
                background-color: #f9f9fb !important;
                border: 1px solid #000067 !important;
                border-radius: 13px !important;
                color: #000067;
                font-family: labibacst1 !important;
                font-size: 11.5px !important;
            }
            .lc-1x0ff2h:hover {
                background-color: #000067 !important;
                color: #f4f4f7 !important;
            }
            .lc-1o6v6ri {
                font-family: labibacst1 !important;
                color: #000076 !important;
            }
            .lc-pcg6n6 {
                -ms-flex-pack: left;
                justify-content: left;
                width: calc(100% - 34px) !important;
                min-height: 40px;
                -webkit-box-sizing: initial;
                box-sizing: initial;
                font-size: 13px;
                font-weight: 500;
                font-family: Loew-Next-Arabic-Bold;
                color: #000067;
                text-align: left;
                padding: 12px 20px;
                border-radius: 25px 25px 0 0;
                -webkit-box-shadow: rgba(0, 0, 0, 0.05) 10px 10px 6px;
                box-shadow: 10px 10px 6px rgba(0, 0, 0, 0.05);
                background: rgb(255 255 255) !important;
                direction: ltr;
                display: -ms-inline-flexbox;
                display: inline-flex;
                letter-spacing: normal;
            }
            .lc-ym5n0k {
                color: #000076 !important;
            }
            #postformHeader > div > div > button {
                background-color: #000076 !important;
                color: #fff !important;
            }
            #postformHeader > div > div > div:nth-child(2) > div:nth-child(2) > div > textarea {
                border: 1px solid #000076 !important;
                border-radius: 3px;
                outline-width: 0;
                width: 260px;
                padding: 8px 10px;
                min-height: 63px;
                font-size: 13px;
                overflow-y: auto;
                background-color: #f3e7e7;
                margin-top: 8px;
                direction: ltr;
                resize: none;
                height: auto;
            }
            .lc-ng0829 {
                font-family: labibacst1 !important;
            }
            .lc-1vtjivx,
            .lc-ng0829,
            .lc-p01asd {
                font-size: 13px !important;
            }
            .lc-p6hli8 {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background: transparent;
                border: 0;
                display: inline-block;
                margin-top: -7px !important;
                padding: 8px !important;
                color: inherit;
                height: 32px;
                padding-top: 2px;
                min-width: unset;
                background-color: transparent;
                margin-left: 3px !important;
            }
            .lc-1oiqikx,
            .lc-1rbefpi,
            .lc-15a0bar,
            .lc-193i9h0 {
                background-color: #000067 !important;
            }
            #defaultfont > div:nth-child(2) > section {
                min-height: calc(100% - 17px) !important;
                direction: ltr;
                overflow: hidden;
                position: relative;
            }

            #defaultfont > div:nth-child(2) > div.lc-1ho2omx.eyij3xx0 > div > div:nth-child(2) > div:nth-child(2) > div > button:nth-child(2) {
                color: #000067 !important;
                font-family: labibacst1 !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }
            #defaultfont > div:nth-child(2) > div.lc-16nfh3w.eyij3xx0 > div > div:nth-child(2) > div:nth-child(2) > div > button:nth-child(2) {
                color: #000067 !important;
                font-family: labibacst1 !important;
                display: -ms-flexbox !important;
                display: flex !important;
                padding-right: 0 !important;
            }
            #postformHeader > div > div > button:hover {
                background-color: #000076 !important;
                color: #fff !important;
                border: 1px solid #fff !important;
            }
            #postformHeader > div > div > button {
                background-color: #f0f0f6 !important;
                color: #000076 !important;
                border: 1px solid #fff !important;
            } /*!
 * Bootstrap Reboot v4.4.0 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Forked from Normalize.css, licensed MIT (https://github.com/necolas/normalize.css/blob/master/LICENSE.md)
 *
 * Compiled using Bootstrap Less Port v2.3.0 (https://github.com/seanCodes/bootstrap-less-port)
 * A port of Bootstrap’s Sass source code to Less.
 * Copyright 2017–2020 Sean Juarez
 * Licensed under MIT (https://github.com/seanCodes/bootstrap-less-port/blob/master/LICENSE)
 */
            #labibaWebBotDiv *,
            #labibaWebBotDiv :after,
            #labibaWebBotDiv :before {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            #labibaWebBotDiv html {
                font-family: sans-serif;
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
                -webkit-tap-highlight-color: transparent;
            }
            #labibaWebBotDiv article,
            #labibaWebBotDiv aside,
            #labibaWebBotDiv figcaption,
            #labibaWebBotDiv figure,
            #labibaWebBotDiv footer,
            #labibaWebBotDiv header,
            #labibaWebBotDiv hgroup,
            #labibaWebBotDiv main,
            #labibaWebBotDiv nav,
            #labibaWebBotDiv section {
                display: block;
            }
            #labibaWebBotDiv body {
                margin: 0;
                font-family: -apple-system, BlinkMacSystemFont, Loew-Next-Arabic-Medium, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
                background-color: #fff;
            }
            #labibaWebBotDiv [tabindex="-1"]:focus:not(:focus-visible) {
                outline: 0 !important;
            }
            #labibaWebBotDiv hr {
                -webkit-box-sizing: content-box;
                box-sizing: content-box;
                height: 0;
                overflow: visible;
            }
            #labibaWebBotDiv h1,
            #labibaWebBotDiv h2,
            #labibaWebBotDiv h3,
            #labibaWebBotDiv h4,
            #labibaWebBotDiv h5,
            #labibaWebBotDiv h6 {
                margin-top: 0;
                margin-bottom: 0.5rem;
            }
            #labibaWebBotDiv p {
                margin-top: 0;
                margin-bottom: 1rem;
            }
            #labibaWebBotDiv abbr[data-original-title],
            #labibaWebBotDiv abbr[title] {
                text-decoration: underline;
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
                cursor: help;
                border-bottom: 0;
                -webkit-text-decoration-skip-ink: none;
                text-decoration-skip-ink: none;
            }
            #labibaWebBotDiv address {
                margin-bottom: 1rem;
                font-style: normal;
                line-height: inherit;
            }
            #labibaWebBotDiv dl,
            #labibaWebBotDiv ol,
            #labibaWebBotDiv ul {
                margin-top: 0;
                margin-bottom: 1rem;
            }
            #labibaWebBotDiv ol ol,
            #labibaWebBotDiv ol ul,
            #labibaWebBotDiv ul ol,
            #labibaWebBotDiv ul ul {
                margin-bottom: 0;
            }
            #labibaWebBotDiv dt {
                font-weight: 700;
            }
            #labibaWebBotDiv dd {
                margin-bottom: 0.5rem;
                margin-left: 0;
            }
            #labibaWebBotDiv blockquote {
                margin: 0 0 1rem;
            }
            #labibaWebBotDiv b,
            #labibaWebBotDiv strong {
                font-weight: bolder;
            }
            #labibaWebBotDiv small {
                font-size: 80%;
            }
            #labibaWebBotDiv sub,
            #labibaWebBotDiv sup {
                position: relative;
                font-size: 75%;
                line-height: 0;
                vertical-align: baseline;
            }
            #labibaWebBotDiv sub {
                bottom: -0.25em;
            }
            #labibaWebBotDiv sup {
                top: -0.5em;
            }
            #labibaWebBotDiv a {
                color: #007bff;
                text-decoration: none;
                background-color: transparent;
            }
            #labibaWebBotDiv a:hover {
                color: #0056b3;
                text-decoration: underline;
            }
            #labibaWebBotDiv a:not([href]),
            #labibaWebBotDiv a:not([href]):hover {
                color: inherit;
                text-decoration: none;
            }
            #labibaWebBotDiv code,
            #labibaWebBotDiv kbd,
            #labibaWebBotDiv pre,
            #labibaWebBotDiv samp {
                font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
                font-size: 1em;
            }
            #labibaWebBotDiv pre {
                margin-top: 0;
                margin-bottom: 1rem;
                overflow: auto;
            }
            #labibaWebBotDiv figure {
                margin: 0 0 1rem;
            }
            #labibaWebBotDiv img {
                vertical-align: middle;
                border-style: none;
            }
            #labibaWebBotDiv svg {
                overflow: hidden;
                vertical-align: middle;
            }
            #labibaWebBotDiv table {
                border-collapse: collapse;
            }
            #labibaWebBotDiv caption {
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
                color: #6c757d;
                text-align: left;
                caption-side: bottom;
            }
            #labibaWebBotDiv th {
                text-align: inherit;
            }
            #labibaWebBotDiv label {
                display: inline-block;
                margin-bottom: 0.5rem;
            }
            #labibaWebBotDiv button {
                border-radius: 0;
            }
            #labibaWebBotDiv button:focus {
                outline: 1px dotted;
                outline: 5px auto -webkit-focus-ring-color;
            }
            #labibaWebBotDiv button,
            #labibaWebBotDiv input,
            #labibaWebBotDiv optgroup,
            #labibaWebBotDiv select,
            #labibaWebBotDiv textarea {
                margin: 0;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
            }
            #labibaWebBotDiv button,
            #labibaWebBotDiv input {
                overflow: visible;
            }
            #labibaWebBotDiv button,
            #labibaWebBotDiv select {
                text-transform: none;
            }
            #labibaWebBotDiv select {
                word-wrap: normal;
            }
            /* #labibaWebBotDiv [type="button"],
            #labibaWebBotDiv [type="reset"],
            #labibaWebBotDiv [type="submit"],
            #labibaWebBotDiv button {
                -webkit-appearance: button;
            } */
            #labibaWebBotDiv [type="button"]:not(:disabled),
            #labibaWebBotDiv [type="reset"]:not(:disabled),
            #labibaWebBotDiv [type="submit"]:not(:disabled),
            #labibaWebBotDiv button:not(:disabled) {
                cursor: pointer;
            }
            #labibaWebBotDiv [type="button"]::-moz-focus-inner,
            #labibaWebBotDiv [type="reset"]::-moz-focus-inner,
            #labibaWebBotDiv [type="submit"]::-moz-focus-inner,
            #labibaWebBotDiv button::-moz-focus-inner {
                padding: 0;
                border-style: none;
            }
            #labibaWebBotDiv input[type="checkbox"],
            #labibaWebBotDiv input[type="radio"] {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                padding: 0;
            }
            /* #labibaWebBotDiv input[type="date"],
            #labibaWebBotDiv input[type="datetime-local"],
            #labibaWebBotDiv input[type="month"],
            #labibaWebBotDiv input[type="time"] {
                -webkit-appearance: listbox;
            } */
            #labibaWebBotDiv textarea {
                overflow: auto;
                resize: vertical;
            }
            #labibaWebBotDiv fieldset {
                min-width: 0;
                padding: 0;
                margin: 0;
                border: 0;
            }
            #labibaWebBotDiv legend {
                display: block;
                width: 100%;
                max-width: 100%;
                padding: 0;
                margin-bottom: 0.5rem;
                font-size: 1.5rem;
                line-height: inherit;
                color: inherit;
                white-space: normal;
            }
            #labibaWebBotDiv progress {
                vertical-align: baseline;
            }
            #labibaWebBotDiv [type="number"]::-webkit-inner-spin-button,
            #labibaWebBotDiv [type="number"]::-webkit-outer-spin-button {
                height: auto;
            }
            #labibaWebBotDiv [type="search"] {
                outline-offset: -2px;
                /* -webkit-appearance: none; */
            }
            #labibaWebBotDiv [type="search"]::-webkit-search-decoration {
                -webkit-appearance: none;
            }
            #labibaWebBotDiv ::-webkit-file-upload-button {
                font: inherit;
                -webkit-appearance: button;
            }
            #labibaWebBotDiv output {
                display: inline-block;
            }
            #labibaWebBotDiv summary {
                display: list-item;
                cursor: pointer;
            }
            #labibaWebBotDiv template {
                display: none;
            }
            #labibaWebBotDiv [hidden] {
                display: none !important;
            } 

            #labibaWebBotDiv .container {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .container {
                    max-width: 540px;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .container {
                    max-width: 720px;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .container {
                    max-width: 960px;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .container {
                    max-width: 1140px;
                }
            }
            #labibaWebBotDiv #labibaWebBotDiv .container-lg,
            #labibaWebBotDiv #labibaWebBotDiv .container-md,
            #labibaWebBotDiv #labibaWebBotDiv .container-sm,
            #labibaWebBotDiv #labibaWebBotDiv .container-xl,
            #labibaWebBotDiv .container-fluid {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv \%responsive-container {
                    max-width: 540px;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv \%responsive-container {
                    max-width: 720px;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv \%responsive-container {
                    max-width: 960px;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv \%responsive-container {
                    max-width: 1140px;
                }
            }
            #labibaWebBotDiv .row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }
            #labibaWebBotDiv .no-gutters {
                margin-right: 0;
                margin-left: 0;
            }
            #labibaWebBotDiv .no-gutters > .col,
            #labibaWebBotDiv .no-gutters > [class*="col-"] {
                padding-right: 0;
                padding-left: 0;
            }
            #labibaWebBotDiv \%grid-column {
                position: relative;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
            }
            #labibaWebBotDiv .col {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }
            #labibaWebBotDiv .row-cols-1 > * {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
            #labibaWebBotDiv .row-cols-2 > * {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
            #labibaWebBotDiv .row-cols-3 > * {
                -ms-flex: 0 0 33.33333333%;
                flex: 0 0 33.33333333%;
                max-width: 33.33333333%;
            }
            #labibaWebBotDiv .row-cols-4 > * {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
            #labibaWebBotDiv .row-cols-5 > * {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
            #labibaWebBotDiv .row-cols-6 > * {
                -ms-flex: 0 0 16.66666667%;
                flex: 0 0 16.66666667%;
                max-width: 16.66666667%;
            }
            #labibaWebBotDiv .col-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }
            #labibaWebBotDiv .col-1 {
                -ms-flex: 0 0 8.33333333%;
                flex: 0 0 8.33333333%;
                max-width: 8.33333333%;
            }
            #labibaWebBotDiv .col-2 {
                -ms-flex: 0 0 16.66666667%;
                flex: 0 0 16.66666667%;
                max-width: 16.66666667%;
            }
            #labibaWebBotDiv .col-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
            #labibaWebBotDiv .col-4 {
                -ms-flex: 0 0 33.33333333%;
                flex: 0 0 33.33333333%;
                max-width: 33.33333333%;
            }
            #labibaWebBotDiv .col-5 {
                -ms-flex: 0 0 41.66666667%;
                flex: 0 0 41.66666667%;
                max-width: 41.66666667%;
            }
            #labibaWebBotDiv .col-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
            #labibaWebBotDiv .col-7 {
                -ms-flex: 0 0 58.33333333%;
                flex: 0 0 58.33333333%;
                max-width: 58.33333333%;
            }
            #labibaWebBotDiv .col-8 {
                -ms-flex: 0 0 66.66666667%;
                flex: 0 0 66.66666667%;
                max-width: 66.66666667%;
            }
            #labibaWebBotDiv .col-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }
            #labibaWebBotDiv .col-10 {
                -ms-flex: 0 0 83.33333333%;
                flex: 0 0 83.33333333%;
                max-width: 83.33333333%;
            }
            #labibaWebBotDiv .col-11 {
                -ms-flex: 0 0 91.66666667%;
                flex: 0 0 91.66666667%;
                max-width: 91.66666667%;
            }
            #labibaWebBotDiv .col-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
            #labibaWebBotDiv .order-first {
                -ms-flex-order: -1;
                order: -1;
            }
            #labibaWebBotDiv .order-last {
                -ms-flex-order: 13;
                order: 13;
            }
            #labibaWebBotDiv .order-0 {
                -ms-flex-order: 0;
                order: 0;
            }
            #labibaWebBotDiv .order-1 {
                -ms-flex-order: 1;
                order: 1;
            }
            #labibaWebBotDiv .order-2 {
                -ms-flex-order: 2;
                order: 2;
            }
            #labibaWebBotDiv .order-3 {
                -ms-flex-order: 3;
                order: 3;
            }
            #labibaWebBotDiv .order-4 {
                -ms-flex-order: 4;
                order: 4;
            }
            #labibaWebBotDiv .order-5 {
                -ms-flex-order: 5;
                order: 5;
            }
            #labibaWebBotDiv .order-6 {
                -ms-flex-order: 6;
                order: 6;
            }
            #labibaWebBotDiv .order-7 {
                -ms-flex-order: 7;
                order: 7;
            }
            #labibaWebBotDiv .order-8 {
                -ms-flex-order: 8;
                order: 8;
            }
            #labibaWebBotDiv .order-9 {
                -ms-flex-order: 9;
                order: 9;
            }
            #labibaWebBotDiv .order-10 {
                -ms-flex-order: 10;
                order: 10;
            }
            #labibaWebBotDiv .order-11 {
                -ms-flex-order: 11;
                order: 11;
            }
            #labibaWebBotDiv .order-12 {
                -ms-flex-order: 12;
                order: 12;
            }
            #labibaWebBotDiv .offset-1 {
                margin-left: 8.33333333%;
            }
            #labibaWebBotDiv .offset-2 {
                margin-left: 16.66666667%;
            }
            #labibaWebBotDiv .offset-3 {
                margin-left: 25%;
            }
            #labibaWebBotDiv .offset-4 {
                margin-left: 33.33333333%;
            }
            #labibaWebBotDiv .offset-5 {
                margin-left: 41.66666667%;
            }
            #labibaWebBotDiv .offset-6 {
                margin-left: 50%;
            }
            #labibaWebBotDiv .offset-7 {
                margin-left: 58.33333333%;
            }
            #labibaWebBotDiv .offset-8 {
                margin-left: 66.66666667%;
            }
            #labibaWebBotDiv .offset-9 {
                margin-left: 75%;
            }
            #labibaWebBotDiv .offset-10 {
                margin-left: 83.33333333%;
            }
            #labibaWebBotDiv .offset-11 {
                margin-left: 91.66666667%;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .col-sm {
                    -ms-flex-preferred-size: 0;
                    flex-basis: 0;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-sm-1 > * {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-sm-2 > * {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .row-cols-sm-3 > * {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .row-cols-sm-4 > * {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .row-cols-sm-5 > * {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                #labibaWebBotDiv .row-cols-sm-6 > * {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-sm-auto {
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    width: auto;
                    max-width: 100%;
                }
                #labibaWebBotDiv .col-sm-1 {
                    -ms-flex: 0 0 8.33333333%;
                    flex: 0 0 8.33333333%;
                    max-width: 8.33333333%;
                }
                #labibaWebBotDiv .col-sm-2 {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-sm-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .col-sm-4 {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .col-sm-5 {
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%;
                }
                #labibaWebBotDiv .col-sm-6 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .col-sm-7 {
                    -ms-flex: 0 0 58.33333333%;
                    flex: 0 0 58.33333333%;
                    max-width: 58.33333333%;
                }
                #labibaWebBotDiv .col-sm-8 {
                    -ms-flex: 0 0 66.66666667%;
                    flex: 0 0 66.66666667%;
                    max-width: 66.66666667%;
                }
                #labibaWebBotDiv .col-sm-9 {
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                #labibaWebBotDiv .col-sm-10 {
                    -ms-flex: 0 0 83.33333333%;
                    flex: 0 0 83.33333333%;
                    max-width: 83.33333333%;
                }
                #labibaWebBotDiv .col-sm-11 {
                    -ms-flex: 0 0 91.66666667%;
                    flex: 0 0 91.66666667%;
                    max-width: 91.66666667%;
                }
                #labibaWebBotDiv .col-sm-12 {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .order-sm-first {
                    -ms-flex-order: -1;
                    order: -1;
                }
                #labibaWebBotDiv .order-sm-last {
                    -ms-flex-order: 13;
                    order: 13;
                }
                #labibaWebBotDiv .order-sm-0 {
                    -ms-flex-order: 0;
                    order: 0;
                }
                #labibaWebBotDiv .order-sm-1 {
                    -ms-flex-order: 1;
                    order: 1;
                }
                #labibaWebBotDiv .order-sm-2 {
                    -ms-flex-order: 2;
                    order: 2;
                }
                #labibaWebBotDiv .order-sm-3 {
                    -ms-flex-order: 3;
                    order: 3;
                }
                #labibaWebBotDiv .order-sm-4 {
                    -ms-flex-order: 4;
                    order: 4;
                }
                #labibaWebBotDiv .order-sm-5 {
                    -ms-flex-order: 5;
                    order: 5;
                }
                #labibaWebBotDiv .order-sm-6 {
                    -ms-flex-order: 6;
                    order: 6;
                }
                #labibaWebBotDiv .order-sm-7 {
                    -ms-flex-order: 7;
                    order: 7;
                }
                #labibaWebBotDiv .order-sm-8 {
                    -ms-flex-order: 8;
                    order: 8;
                }
                #labibaWebBotDiv .order-sm-9 {
                    -ms-flex-order: 9;
                    order: 9;
                }
                #labibaWebBotDiv .order-sm-10 {
                    -ms-flex-order: 10;
                    order: 10;
                }
                #labibaWebBotDiv .order-sm-11 {
                    -ms-flex-order: 11;
                    order: 11;
                }
                #labibaWebBotDiv .order-sm-12 {
                    -ms-flex-order: 12;
                    order: 12;
                }
                #labibaWebBotDiv .offset-sm-0 {
                    margin-left: 0;
                }
                #labibaWebBotDiv .offset-sm-1 {
                    margin-left: 8.33333333%;
                }
                #labibaWebBotDiv .offset-sm-2 {
                    margin-left: 16.66666667%;
                }
                #labibaWebBotDiv .offset-sm-3 {
                    margin-left: 25%;
                }
                #labibaWebBotDiv .offset-sm-4 {
                    margin-left: 33.33333333%;
                }
                #labibaWebBotDiv .offset-sm-5 {
                    margin-left: 41.66666667%;
                }
                #labibaWebBotDiv .offset-sm-6 {
                    margin-left: 50%;
                }
                #labibaWebBotDiv .offset-sm-7 {
                    margin-left: 58.33333333%;
                }
                #labibaWebBotDiv .offset-sm-8 {
                    margin-left: 66.66666667%;
                }
                #labibaWebBotDiv .offset-sm-9 {
                    margin-left: 75%;
                }
                #labibaWebBotDiv .offset-sm-10 {
                    margin-left: 83.33333333%;
                }
                #labibaWebBotDiv .offset-sm-11 {
                    margin-left: 91.66666667%;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .col-md {
                    -ms-flex-preferred-size: 0;
                    flex-basis: 0;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-md-1 > * {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-md-2 > * {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .row-cols-md-3 > * {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .row-cols-md-4 > * {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .row-cols-md-5 > * {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                #labibaWebBotDiv .row-cols-md-6 > * {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-md-auto {
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    width: auto;
                    max-width: 100%;
                }
                #labibaWebBotDiv .col-md-1 {
                    -ms-flex: 0 0 8.33333333%;
                    flex: 0 0 8.33333333%;
                    max-width: 8.33333333%;
                }
                #labibaWebBotDiv .col-md-2 {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-md-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .col-md-4 {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .col-md-5 {
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%;
                }
                #labibaWebBotDiv .col-md-6 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .col-md-7 {
                    -ms-flex: 0 0 58.33333333%;
                    flex: 0 0 58.33333333%;
                    max-width: 58.33333333%;
                }
                #labibaWebBotDiv .col-md-8 {
                    -ms-flex: 0 0 66.66666667%;
                    flex: 0 0 66.66666667%;
                    max-width: 66.66666667%;
                }
                #labibaWebBotDiv .col-md-9 {
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                #labibaWebBotDiv .col-md-10 {
                    -ms-flex: 0 0 83.33333333%;
                    flex: 0 0 83.33333333%;
                    max-width: 83.33333333%;
                }
                #labibaWebBotDiv .col-md-11 {
                    -ms-flex: 0 0 91.66666667%;
                    flex: 0 0 91.66666667%;
                    max-width: 91.66666667%;
                }
                #labibaWebBotDiv .col-md-12 {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .order-md-first {
                    -ms-flex-order: -1;
                    order: -1;
                }
                #labibaWebBotDiv .order-md-last {
                    -ms-flex-order: 13;
                    order: 13;
                }
                #labibaWebBotDiv .order-md-0 {
                    -ms-flex-order: 0;
                    order: 0;
                }
                #labibaWebBotDiv .order-md-1 {
                    -ms-flex-order: 1;
                    order: 1;
                }
                #labibaWebBotDiv .order-md-2 {
                    -ms-flex-order: 2;
                    order: 2;
                }
                #labibaWebBotDiv .order-md-3 {
                    -ms-flex-order: 3;
                    order: 3;
                }
                #labibaWebBotDiv .order-md-4 {
                    -ms-flex-order: 4;
                    order: 4;
                }
                #labibaWebBotDiv .order-md-5 {
                    -ms-flex-order: 5;
                    order: 5;
                }
                #labibaWebBotDiv .order-md-6 {
                    -ms-flex-order: 6;
                    order: 6;
                }
                #labibaWebBotDiv .order-md-7 {
                    -ms-flex-order: 7;
                    order: 7;
                }
                #labibaWebBotDiv .order-md-8 {
                    -ms-flex-order: 8;
                    order: 8;
                }
                #labibaWebBotDiv .order-md-9 {
                    -ms-flex-order: 9;
                    order: 9;
                }
                #labibaWebBotDiv .order-md-10 {
                    -ms-flex-order: 10;
                    order: 10;
                }
                #labibaWebBotDiv .order-md-11 {
                    -ms-flex-order: 11;
                    order: 11;
                }
                #labibaWebBotDiv .order-md-12 {
                    -ms-flex-order: 12;
                    order: 12;
                }
                #labibaWebBotDiv .offset-md-0 {
                    margin-left: 0;
                }
                #labibaWebBotDiv .offset-md-1 {
                    margin-left: 8.33333333%;
                }
                #labibaWebBotDiv .offset-md-2 {
                    margin-left: 16.66666667%;
                }
                #labibaWebBotDiv .offset-md-3 {
                    margin-left: 25%;
                }
                #labibaWebBotDiv .offset-md-4 {
                    margin-left: 33.33333333%;
                }
                #labibaWebBotDiv .offset-md-5 {
                    margin-left: 41.66666667%;
                }
                #labibaWebBotDiv .offset-md-6 {
                    margin-left: 50%;
                }
                #labibaWebBotDiv .offset-md-7 {
                    margin-left: 58.33333333%;
                }
                #labibaWebBotDiv .offset-md-8 {
                    margin-left: 66.66666667%;
                }
                #labibaWebBotDiv .offset-md-9 {
                    margin-left: 75%;
                }
                #labibaWebBotDiv .offset-md-10 {
                    margin-left: 83.33333333%;
                }
                #labibaWebBotDiv .offset-md-11 {
                    margin-left: 91.66666667%;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .col-lg {
                    max-width: 100%;
                    display: block;
                }
                #labibaWebBotDiv .row-cols-lg-1 > * {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-lg-2 > * {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .row-cols-lg-3 > * {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .row-cols-lg-4 > * {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .row-cols-lg-5 > * {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                #labibaWebBotDiv .row-cols-lg-6 > * {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-lg-auto {
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    width: auto;
                    max-width: 100%;
                }
                #labibaWebBotDiv .col-lg-1 {
                    -ms-flex: 0 0 8.33333333%;
                    flex: 0 0 8.33333333%;
                    max-width: 8.33333333%;
                }
                #labibaWebBotDiv .col-lg-2 {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-lg-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .col-lg-4 {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .col-lg-5 {
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%;
                }
                #labibaWebBotDiv .col-lg-6 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .col-lg-7 {
                    -ms-flex: 0 0 58.33333333%;
                    flex: 0 0 58.33333333%;
                    max-width: 58.33333333%;
                }
                #labibaWebBotDiv .col-lg-8 {
                    -ms-flex: 0 0 66.66666667%;
                    flex: 0 0 66.66666667%;
                    max-width: 66.66666667%;
                }
                #labibaWebBotDiv .col-lg-9 {
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                #labibaWebBotDiv .col-lg-10 {
                    -ms-flex: 0 0 83.33333333%;
                    flex: 0 0 83.33333333%;
                    max-width: 83.33333333%;
                }
                #labibaWebBotDiv .col-lg-11 {
                    -ms-flex: 0 0 91.66666667%;
                    flex: 0 0 91.66666667%;
                    max-width: 91.66666667%;
                }
                #labibaWebBotDiv .col-lg-12 {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .order-lg-first {
                    -ms-flex-order: -1;
                    order: -1;
                }
                #labibaWebBotDiv .order-lg-last {
                    -ms-flex-order: 13;
                    order: 13;
                }
                #labibaWebBotDiv .order-lg-0 {
                    -ms-flex-order: 0;
                    order: 0;
                }
                #labibaWebBotDiv .order-lg-1 {
                    -ms-flex-order: 1;
                    order: 1;
                }
                #labibaWebBotDiv .order-lg-2 {
                    -ms-flex-order: 2;
                    order: 2;
                }
                #labibaWebBotDiv .order-lg-3 {
                    -ms-flex-order: 3;
                    order: 3;
                }
                #labibaWebBotDiv .order-lg-4 {
                    -ms-flex-order: 4;
                    order: 4;
                }
                #labibaWebBotDiv .order-lg-5 {
                    -ms-flex-order: 5;
                    order: 5;
                }
                #labibaWebBotDiv .order-lg-6 {
                    -ms-flex-order: 6;
                    order: 6;
                }
                #labibaWebBotDiv .order-lg-7 {
                    -ms-flex-order: 7;
                    order: 7;
                }
                #labibaWebBotDiv .order-lg-8 {
                    -ms-flex-order: 8;
                    order: 8;
                }
                #labibaWebBotDiv .order-lg-9 {
                    -ms-flex-order: 9;
                    order: 9;
                }
                #labibaWebBotDiv .order-lg-10 {
                    -ms-flex-order: 10;
                    order: 10;
                }
                #labibaWebBotDiv .order-lg-11 {
                    -ms-flex-order: 11;
                    order: 11;
                }
                #labibaWebBotDiv .order-lg-12 {
                    -ms-flex-order: 12;
                    order: 12;
                }
                #labibaWebBotDiv .offset-lg-0 {
                    margin-left: 0;
                }
                #labibaWebBotDiv .offset-lg-1 {
                    margin-left: 8.33333333%;
                }
                #labibaWebBotDiv .offset-lg-2 {
                    margin-left: 16.66666667%;
                }
                #labibaWebBotDiv .offset-lg-3 {
                    margin-left: 25%;
                }
                #labibaWebBotDiv .offset-lg-4 {
                    margin-left: 33.33333333%;
                }
                #labibaWebBotDiv .offset-lg-5 {
                    margin-left: 41.66666667%;
                }
                #labibaWebBotDiv .offset-lg-6 {
                    margin-left: 50%;
                }
                #labibaWebBotDiv .offset-lg-7 {
                    margin-left: 58.33333333%;
                }
                #labibaWebBotDiv .offset-lg-8 {
                    margin-left: 66.66666667%;
                }
                #labibaWebBotDiv .offset-lg-9 {
                    margin-left: 75%;
                }
                #labibaWebBotDiv .offset-lg-10 {
                    margin-left: 83.33333333%;
                }
                #labibaWebBotDiv .offset-lg-11 {
                    margin-left: 91.66666667%;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .col-xl {
                    -ms-flex-preferred-size: 0;
                    flex-basis: 0;
                    -ms-flex-positive: 1;
                    flex-grow: 1;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-xl-1 > * {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .row-cols-xl-2 > * {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .row-cols-xl-3 > * {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .row-cols-xl-4 > * {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .row-cols-xl-5 > * {
                    -ms-flex: 0 0 20%;
                    flex: 0 0 20%;
                    max-width: 20%;
                }
                #labibaWebBotDiv .row-cols-xl-6 > * {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-xl-auto {
                    -ms-flex: 0 0 auto;
                    flex: 0 0 auto;
                    width: auto;
                    max-width: 100%;
                }
                #labibaWebBotDiv .col-xl-1 {
                    -ms-flex: 0 0 8.33333333%;
                    flex: 0 0 8.33333333%;
                    max-width: 8.33333333%;
                }
                #labibaWebBotDiv .col-xl-2 {
                    -ms-flex: 0 0 16.66666667%;
                    flex: 0 0 16.66666667%;
                    max-width: 16.66666667%;
                }
                #labibaWebBotDiv .col-xl-3 {
                    -ms-flex: 0 0 25%;
                    flex: 0 0 25%;
                    max-width: 25%;
                }
                #labibaWebBotDiv .col-xl-4 {
                    -ms-flex: 0 0 33.33333333%;
                    flex: 0 0 33.33333333%;
                    max-width: 33.33333333%;
                }
                #labibaWebBotDiv .col-xl-5 {
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%;
                }
                #labibaWebBotDiv .col-xl-6 {
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 50%;
                }
                #labibaWebBotDiv .col-xl-7 {
                    -ms-flex: 0 0 58.33333333%;
                    flex: 0 0 58.33333333%;
                    max-width: 58.33333333%;
                }
                #labibaWebBotDiv .col-xl-8 {
                    -ms-flex: 0 0 66.66666667%;
                    flex: 0 0 66.66666667%;
                    max-width: 66.66666667%;
                }
                #labibaWebBotDiv .col-xl-9 {
                    -ms-flex: 0 0 75%;
                    flex: 0 0 75%;
                    max-width: 75%;
                }
                #labibaWebBotDiv .col-xl-10 {
                    -ms-flex: 0 0 83.33333333%;
                    flex: 0 0 83.33333333%;
                    max-width: 83.33333333%;
                }
                #labibaWebBotDiv .col-xl-11 {
                    -ms-flex: 0 0 91.66666667%;
                    flex: 0 0 91.66666667%;
                    max-width: 91.66666667%;
                }
                #labibaWebBotDiv .col-xl-12 {
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%;
                    max-width: 100%;
                }
                #labibaWebBotDiv .order-xl-first {
                    -ms-flex-order: -1;
                    order: -1;
                }
                #labibaWebBotDiv .order-xl-last {
                    -ms-flex-order: 13;
                    order: 13;
                }
                #labibaWebBotDiv .order-xl-0 {
                    -ms-flex-order: 0;
                    order: 0;
                }
                #labibaWebBotDiv .order-xl-1 {
                    -ms-flex-order: 1;
                    order: 1;
                }
                #labibaWebBotDiv .order-xl-2 {
                    -ms-flex-order: 2;
                    order: 2;
                }
                #labibaWebBotDiv .order-xl-3 {
                    -ms-flex-order: 3;
                    order: 3;
                }
                #labibaWebBotDiv .order-xl-4 {
                    -ms-flex-order: 4;
                    order: 4;
                }
                #labibaWebBotDiv .order-xl-5 {
                    -ms-flex-order: 5;
                    order: 5;
                }
                #labibaWebBotDiv .order-xl-6 {
                    -ms-flex-order: 6;
                    order: 6;
                }
                #labibaWebBotDiv .order-xl-7 {
                    -ms-flex-order: 7;
                    order: 7;
                }
                #labibaWebBotDiv .order-xl-8 {
                    -ms-flex-order: 8;
                    order: 8;
                }
                #labibaWebBotDiv .order-xl-9 {
                    -ms-flex-order: 9;
                    order: 9;
                }
                #labibaWebBotDiv .order-xl-10 {
                    -ms-flex-order: 10;
                    order: 10;
                }
                #labibaWebBotDiv .order-xl-11 {
                    -ms-flex-order: 11;
                    order: 11;
                }
                #labibaWebBotDiv .order-xl-12 {
                    -ms-flex-order: 12;
                    order: 12;
                }
                #labibaWebBotDiv .offset-xl-0 {
                    margin-left: 0;
                }
                #labibaWebBotDiv .offset-xl-1 {
                    margin-left: 8.33333333%;
                }
                #labibaWebBotDiv .offset-xl-2 {
                    margin-left: 16.66666667%;
                }
                #labibaWebBotDiv .offset-xl-3 {
                    margin-left: 25%;
                }
                #labibaWebBotDiv .offset-xl-4 {
                    margin-left: 33.33333333%;
                }
                #labibaWebBotDiv .offset-xl-5 {
                    margin-left: 41.66666667%;
                }
                #labibaWebBotDiv .offset-xl-6 {
                    margin-left: 50%;
                }
                #labibaWebBotDiv .offset-xl-7 {
                    margin-left: 58.33333333%;
                }
                #labibaWebBotDiv .offset-xl-8 {
                    margin-left: 66.66666667%;
                }
                #labibaWebBotDiv .offset-xl-9 {
                    margin-left: 75%;
                }
                #labibaWebBotDiv .offset-xl-10 {
                    margin-left: 83.33333333%;
                }
                #labibaWebBotDiv .offset-xl-11 {
                    margin-left: 91.66666667%;
                }
            }
            #labibaWebBotDiv .d-none {
                display: none !important;
            }
            #labibaWebBotDiv .d-inline {
                display: inline !important;
            }
            #labibaWebBotDiv .d-inline-block {
                display: inline-block !important;
            }
            #labibaWebBotDiv .d-block {
                display: block !important;
            }
            #labibaWebBotDiv .d-table {
                display: table !important;
            }
            #labibaWebBotDiv .d-table-row {
                display: table-row !important;
            }
            #labibaWebBotDiv .d-table-cell {
                display: table-cell !important;
            }
            #labibaWebBotDiv .d-flex {
                display: -ms-flexbox !important;
                display: flex !important;
            }
            #labibaWebBotDiv .d-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .d-sm-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-sm-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-sm-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-sm-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-sm-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-sm-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-sm-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-sm-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-sm-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .d-md-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-md-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-md-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-md-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-md-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-md-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-md-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-md-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-md-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .d-lg-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-lg-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-lg-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-lg-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-lg-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-lg-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-lg-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-lg-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-lg-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .d-xl-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-xl-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-xl-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-xl-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-xl-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-xl-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-xl-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-xl-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-xl-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            @media print {
                #labibaWebBotDiv .d-print-none {
                    display: none !important;
                }
                #labibaWebBotDiv .d-print-inline {
                    display: inline !important;
                }
                #labibaWebBotDiv .d-print-inline-block {
                    display: inline-block !important;
                }
                #labibaWebBotDiv .d-print-block {
                    display: block !important;
                }
                #labibaWebBotDiv .d-print-table {
                    display: table !important;
                }
                #labibaWebBotDiv .d-print-table-row {
                    display: table-row !important;
                }
                #labibaWebBotDiv .d-print-table-cell {
                    display: table-cell !important;
                }
                #labibaWebBotDiv .d-print-flex {
                    display: -ms-flexbox !important;
                    display: flex !important;
                }
                #labibaWebBotDiv .d-print-inline-flex {
                    display: -ms-inline-flexbox !important;
                    display: inline-flex !important;
                }
            }
            #labibaWebBotDiv .flex-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }
            #labibaWebBotDiv .flex-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }
            #labibaWebBotDiv .flex-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }
            #labibaWebBotDiv .flex-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }
            #labibaWebBotDiv .flex-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }
            #labibaWebBotDiv .flex-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }
            #labibaWebBotDiv .flex-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }
            #labibaWebBotDiv .flex-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }
            #labibaWebBotDiv .flex-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }
            #labibaWebBotDiv .flex-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }
            #labibaWebBotDiv .flex-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }
            #labibaWebBotDiv .flex-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }
            #labibaWebBotDiv .justify-content-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }
            #labibaWebBotDiv .justify-content-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }
            #labibaWebBotDiv .justify-content-center {
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }
            #labibaWebBotDiv .justify-content-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }
            #labibaWebBotDiv .justify-content-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }
            #labibaWebBotDiv .align-items-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }
            #labibaWebBotDiv .align-items-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }
            #labibaWebBotDiv .align-items-center {
                -ms-flex-align: center !important;
                align-items: center !important;
            }
            #labibaWebBotDiv .align-items-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }
            #labibaWebBotDiv .align-items-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }
            #labibaWebBotDiv .align-content-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }
            #labibaWebBotDiv .align-content-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }
            #labibaWebBotDiv .align-content-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }
            #labibaWebBotDiv .align-content-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }
            #labibaWebBotDiv .align-content-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }
            #labibaWebBotDiv .align-content-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }
            #labibaWebBotDiv .align-self-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }
            #labibaWebBotDiv .align-self-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }
            #labibaWebBotDiv .align-self-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }
            #labibaWebBotDiv .align-self-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }
            #labibaWebBotDiv .align-self-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }
            #labibaWebBotDiv .align-self-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .flex-sm-row {
                    -ms-flex-direction: row !important;
                    flex-direction: row !important;
                }
                #labibaWebBotDiv .flex-sm-column {
                    -ms-flex-direction: column !important;
                    flex-direction: column !important;
                }
                #labibaWebBotDiv .flex-sm-row-reverse {
                    -ms-flex-direction: row-reverse !important;
                    flex-direction: row-reverse !important;
                }
                #labibaWebBotDiv .flex-sm-column-reverse {
                    -ms-flex-direction: column-reverse !important;
                    flex-direction: column-reverse !important;
                }
                #labibaWebBotDiv .flex-sm-wrap {
                    -ms-flex-wrap: wrap !important;
                    flex-wrap: wrap !important;
                }
                #labibaWebBotDiv .flex-sm-nowrap {
                    -ms-flex-wrap: nowrap !important;
                    flex-wrap: nowrap !important;
                }
                #labibaWebBotDiv .flex-sm-wrap-reverse {
                    -ms-flex-wrap: wrap-reverse !important;
                    flex-wrap: wrap-reverse !important;
                }
                #labibaWebBotDiv .flex-sm-fill {
                    -ms-flex: 1 1 auto !important;
                    flex: 1 1 auto !important;
                }
                #labibaWebBotDiv .flex-sm-grow-0 {
                    -ms-flex-positive: 0 !important;
                    flex-grow: 0 !important;
                }
                #labibaWebBotDiv .flex-sm-grow-1 {
                    -ms-flex-positive: 1 !important;
                    flex-grow: 1 !important;
                }
                #labibaWebBotDiv .flex-sm-shrink-0 {
                    -ms-flex-negative: 0 !important;
                    flex-shrink: 0 !important;
                }
                #labibaWebBotDiv .flex-sm-shrink-1 {
                    -ms-flex-negative: 1 !important;
                    flex-shrink: 1 !important;
                }
                #labibaWebBotDiv .justify-content-sm-start {
                    -ms-flex-pack: start !important;
                    justify-content: flex-start !important;
                }
                #labibaWebBotDiv .justify-content-sm-end {
                    -ms-flex-pack: end !important;
                    justify-content: flex-end !important;
                }
                #labibaWebBotDiv .justify-content-sm-center {
                    -ms-flex-pack: center !important;
                    justify-content: center !important;
                }
                #labibaWebBotDiv .justify-content-sm-between {
                    -ms-flex-pack: justify !important;
                    justify-content: space-between !important;
                }
                #labibaWebBotDiv .justify-content-sm-around {
                    -ms-flex-pack: distribute !important;
                    justify-content: space-around !important;
                }
                #labibaWebBotDiv .align-items-sm-start {
                    -ms-flex-align: start !important;
                    align-items: flex-start !important;
                }
                #labibaWebBotDiv .align-items-sm-end {
                    -ms-flex-align: end !important;
                    align-items: flex-end !important;
                }
                #labibaWebBotDiv .align-items-sm-center {
                    -ms-flex-align: center !important;
                    align-items: center !important;
                }
                #labibaWebBotDiv .align-items-sm-baseline {
                    -ms-flex-align: baseline !important;
                    align-items: baseline !important;
                }
                #labibaWebBotDiv .align-items-sm-stretch {
                    -ms-flex-align: stretch !important;
                    align-items: stretch !important;
                }
                #labibaWebBotDiv .align-content-sm-start {
                    -ms-flex-line-pack: start !important;
                    align-content: flex-start !important;
                }
                #labibaWebBotDiv .align-content-sm-end {
                    -ms-flex-line-pack: end !important;
                    align-content: flex-end !important;
                }
                #labibaWebBotDiv .align-content-sm-center {
                    -ms-flex-line-pack: center !important;
                    align-content: center !important;
                }
                #labibaWebBotDiv .align-content-sm-between {
                    -ms-flex-line-pack: justify !important;
                    align-content: space-between !important;
                }
                #labibaWebBotDiv .align-content-sm-around {
                    -ms-flex-line-pack: distribute !important;
                    align-content: space-around !important;
                }
                #labibaWebBotDiv .align-content-sm-stretch {
                    -ms-flex-line-pack: stretch !important;
                    align-content: stretch !important;
                }
                #labibaWebBotDiv .align-self-sm-auto {
                    -ms-flex-item-align: auto !important;
                    align-self: auto !important;
                }
                #labibaWebBotDiv .align-self-sm-start {
                    -ms-flex-item-align: start !important;
                    align-self: flex-start !important;
                }
                #labibaWebBotDiv .align-self-sm-end {
                    -ms-flex-item-align: end !important;
                    align-self: flex-end !important;
                }
                #labibaWebBotDiv .align-self-sm-center {
                    -ms-flex-item-align: center !important;
                    align-self: center !important;
                }
                #labibaWebBotDiv .align-self-sm-baseline {
                    -ms-flex-item-align: baseline !important;
                    align-self: baseline !important;
                }
                #labibaWebBotDiv .align-self-sm-stretch {
                    -ms-flex-item-align: stretch !important;
                    align-self: stretch !important;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .flex-md-row {
                    -ms-flex-direction: row !important;
                    flex-direction: row !important;
                }
                #labibaWebBotDiv .flex-md-column {
                    -ms-flex-direction: column !important;
                    flex-direction: column !important;
                }
                #labibaWebBotDiv .flex-md-row-reverse {
                    -ms-flex-direction: row-reverse !important;
                    flex-direction: row-reverse !important;
                }
                #labibaWebBotDiv .flex-md-column-reverse {
                    -ms-flex-direction: column-reverse !important;
                    flex-direction: column-reverse !important;
                }
                #labibaWebBotDiv .flex-md-wrap {
                    -ms-flex-wrap: wrap !important;
                    flex-wrap: wrap !important;
                }
                #labibaWebBotDiv .flex-md-nowrap {
                    -ms-flex-wrap: nowrap !important;
                    flex-wrap: nowrap !important;
                }
                #labibaWebBotDiv .flex-md-wrap-reverse {
                    -ms-flex-wrap: wrap-reverse !important;
                    flex-wrap: wrap-reverse !important;
                }
                #labibaWebBotDiv .flex-md-fill {
                    -ms-flex: 1 1 auto !important;
                    flex: 1 1 auto !important;
                }
                #labibaWebBotDiv .flex-md-grow-0 {
                    -ms-flex-positive: 0 !important;
                    flex-grow: 0 !important;
                }
                #labibaWebBotDiv .flex-md-grow-1 {
                    -ms-flex-positive: 1 !important;
                    flex-grow: 1 !important;
                }
                #labibaWebBotDiv .flex-md-shrink-0 {
                    -ms-flex-negative: 0 !important;
                    flex-shrink: 0 !important;
                }
                #labibaWebBotDiv .flex-md-shrink-1 {
                    -ms-flex-negative: 1 !important;
                    flex-shrink: 1 !important;
                }
                #labibaWebBotDiv .justify-content-md-start {
                    -ms-flex-pack: start !important;
                    justify-content: flex-start !important;
                }
                #labibaWebBotDiv .justify-content-md-end {
                    -ms-flex-pack: end !important;
                    justify-content: flex-end !important;
                }
                #labibaWebBotDiv .justify-content-md-center {
                    -ms-flex-pack: center !important;
                    justify-content: center !important;
                }
                #labibaWebBotDiv .justify-content-md-between {
                    -ms-flex-pack: justify !important;
                    justify-content: space-between !important;
                }
                #labibaWebBotDiv .justify-content-md-around {
                    -ms-flex-pack: distribute !important;
                    justify-content: space-around !important;
                }
                #labibaWebBotDiv .align-items-md-start {
                    -ms-flex-align: start !important;
                    align-items: flex-start !important;
                }
                #labibaWebBotDiv .align-items-md-end {
                    -ms-flex-align: end !important;
                    align-items: flex-end !important;
                }
                #labibaWebBotDiv .align-items-md-center {
                    -ms-flex-align: center !important;
                    align-items: center !important;
                }
                #labibaWebBotDiv .align-items-md-baseline {
                    -ms-flex-align: baseline !important;
                    align-items: baseline !important;
                }
                #labibaWebBotDiv .align-items-md-stretch {
                    -ms-flex-align: stretch !important;
                    align-items: stretch !important;
                }
                #labibaWebBotDiv .align-content-md-start {
                    -ms-flex-line-pack: start !important;
                    align-content: flex-start !important;
                }
                #labibaWebBotDiv .align-content-md-end {
                    -ms-flex-line-pack: end !important;
                    align-content: flex-end !important;
                }
                #labibaWebBotDiv .align-content-md-center {
                    -ms-flex-line-pack: center !important;
                    align-content: center !important;
                }
                #labibaWebBotDiv .align-content-md-between {
                    -ms-flex-line-pack: justify !important;
                    align-content: space-between !important;
                }
                #labibaWebBotDiv .align-content-md-around {
                    -ms-flex-line-pack: distribute !important;
                    align-content: space-around !important;
                }
                #labibaWebBotDiv .align-content-md-stretch {
                    -ms-flex-line-pack: stretch !important;
                    align-content: stretch !important;
                }
                #labibaWebBotDiv .align-self-md-auto {
                    -ms-flex-item-align: auto !important;
                    align-self: auto !important;
                }
                #labibaWebBotDiv .align-self-md-start {
                    -ms-flex-item-align: start !important;
                    align-self: flex-start !important;
                }
                #labibaWebBotDiv .align-self-md-end {
                    -ms-flex-item-align: end !important;
                    align-self: flex-end !important;
                }
                #labibaWebBotDiv .align-self-md-center {
                    -ms-flex-item-align: center !important;
                    align-self: center !important;
                }
                #labibaWebBotDiv .align-self-md-baseline {
                    -ms-flex-item-align: baseline !important;
                    align-self: baseline !important;
                }
                #labibaWebBotDiv .align-self-md-stretch {
                    -ms-flex-item-align: stretch !important;
                    align-self: stretch !important;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .flex-lg-row {
                    -ms-flex-direction: row !important;
                    flex-direction: row !important;
                }
                #labibaWebBotDiv .flex-lg-column {
                    -ms-flex-direction: column !important;
                    flex-direction: column !important;
                }
                #labibaWebBotDiv .flex-lg-row-reverse {
                    -ms-flex-direction: row-reverse !important;
                    flex-direction: row-reverse !important;
                }
                #labibaWebBotDiv .flex-lg-column-reverse {
                    -ms-flex-direction: column-reverse !important;
                    flex-direction: column-reverse !important;
                }
                #labibaWebBotDiv .flex-lg-wrap {
                    -ms-flex-wrap: wrap !important;
                    flex-wrap: wrap !important;
                }
                #labibaWebBotDiv .flex-lg-nowrap {
                    -ms-flex-wrap: nowrap !important;
                    flex-wrap: nowrap !important;
                }
                #labibaWebBotDiv .flex-lg-wrap-reverse {
                    -ms-flex-wrap: wrap-reverse !important;
                    flex-wrap: wrap-reverse !important;
                }
                #labibaWebBotDiv .flex-lg-fill {
                    -ms-flex: 1 1 auto !important;
                    flex: 1 1 auto !important;
                }
                #labibaWebBotDiv .flex-lg-grow-0 {
                    -ms-flex-positive: 0 !important;
                    flex-grow: 0 !important;
                }
                #labibaWebBotDiv .flex-lg-grow-1 {
                    -ms-flex-positive: 1 !important;
                    flex-grow: 1 !important;
                }
                #labibaWebBotDiv .flex-lg-shrink-0 {
                    -ms-flex-negative: 0 !important;
                    flex-shrink: 0 !important;
                }
                #labibaWebBotDiv .flex-lg-shrink-1 {
                    -ms-flex-negative: 1 !important;
                    flex-shrink: 1 !important;
                }
                #labibaWebBotDiv .justify-content-lg-start {
                    -ms-flex-pack: start !important;
                    justify-content: flex-start !important;
                }
                #labibaWebBotDiv .justify-content-lg-end {
                    -ms-flex-pack: end !important;
                    justify-content: flex-end !important;
                }
                #labibaWebBotDiv .justify-content-lg-center {
                    -ms-flex-pack: center !important;
                    justify-content: center !important;
                }
                #labibaWebBotDiv .justify-content-lg-between {
                    -ms-flex-pack: justify !important;
                    justify-content: space-between !important;
                }
                #labibaWebBotDiv .justify-content-lg-around {
                    -ms-flex-pack: distribute !important;
                    justify-content: space-around !important;
                }
                #labibaWebBotDiv .align-items-lg-start {
                    -ms-flex-align: start !important;
                    align-items: flex-start !important;
                }
                #labibaWebBotDiv .align-items-lg-end {
                    -ms-flex-align: end !important;
                    align-items: flex-end !important;
                }
                #labibaWebBotDiv .align-items-lg-center {
                    -ms-flex-align: center !important;
                    align-items: center !important;
                }
                #labibaWebBotDiv .align-items-lg-baseline {
                    -ms-flex-align: baseline !important;
                    align-items: baseline !important;
                }
                #labibaWebBotDiv .align-items-lg-stretch {
                    -ms-flex-align: stretch !important;
                    align-items: stretch !important;
                }
                #labibaWebBotDiv .align-content-lg-start {
                    -ms-flex-line-pack: start !important;
                    align-content: flex-start !important;
                }
                #labibaWebBotDiv .align-content-lg-end {
                    -ms-flex-line-pack: end !important;
                    align-content: flex-end !important;
                }
                #labibaWebBotDiv .align-content-lg-center {
                    -ms-flex-line-pack: center !important;
                    align-content: center !important;
                }
                #labibaWebBotDiv .align-content-lg-between {
                    -ms-flex-line-pack: justify !important;
                    align-content: space-between !important;
                }
                #labibaWebBotDiv .align-content-lg-around {
                    -ms-flex-line-pack: distribute !important;
                    align-content: space-around !important;
                }
                #labibaWebBotDiv .align-content-lg-stretch {
                    -ms-flex-line-pack: stretch !important;
                    align-content: stretch !important;
                }
                #labibaWebBotDiv .align-self-lg-auto {
                    -ms-flex-item-align: auto !important;
                    align-self: auto !important;
                }
                #labibaWebBotDiv .align-self-lg-start {
                    -ms-flex-item-align: start !important;
                    align-self: flex-start !important;
                }
                #labibaWebBotDiv .align-self-lg-end {
                    -ms-flex-item-align: end !important;
                    align-self: flex-end !important;
                }
                #labibaWebBotDiv .align-self-lg-center {
                    -ms-flex-item-align: center !important;
                    align-self: center !important;
                }
                #labibaWebBotDiv .align-self-lg-baseline {
                    -ms-flex-item-align: baseline !important;
                    align-self: baseline !important;
                }
                #labibaWebBotDiv .align-self-lg-stretch {
                    -ms-flex-item-align: stretch !important;
                    align-self: stretch !important;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .flex-xl-row {
                    -ms-flex-direction: row !important;
                    flex-direction: row !important;
                }
                #labibaWebBotDiv .flex-xl-column {
                    -ms-flex-direction: column !important;
                    flex-direction: column !important;
                }
                #labibaWebBotDiv .flex-xl-row-reverse {
                    -ms-flex-direction: row-reverse !important;
                    flex-direction: row-reverse !important;
                }
                #labibaWebBotDiv .flex-xl-column-reverse {
                    -ms-flex-direction: column-reverse !important;
                    flex-direction: column-reverse !important;
                }
                #labibaWebBotDiv .flex-xl-wrap {
                    -ms-flex-wrap: wrap !important;
                    flex-wrap: wrap !important;
                }
                #labibaWebBotDiv .flex-xl-nowrap {
                    -ms-flex-wrap: nowrap !important;
                    flex-wrap: nowrap !important;
                }
                #labibaWebBotDiv .flex-xl-wrap-reverse {
                    -ms-flex-wrap: wrap-reverse !important;
                    flex-wrap: wrap-reverse !important;
                }
                #labibaWebBotDiv .flex-xl-fill {
                    -ms-flex: 1 1 auto !important;
                    flex: 1 1 auto !important;
                }
                #labibaWebBotDiv .flex-xl-grow-0 {
                    -ms-flex-positive: 0 !important;
                    flex-grow: 0 !important;
                }
                #labibaWebBotDiv .flex-xl-grow-1 {
                    -ms-flex-positive: 1 !important;
                    flex-grow: 1 !important;
                }
                #labibaWebBotDiv .flex-xl-shrink-0 {
                    -ms-flex-negative: 0 !important;
                    flex-shrink: 0 !important;
                }
                #labibaWebBotDiv .flex-xl-shrink-1 {
                    -ms-flex-negative: 1 !important;
                    flex-shrink: 1 !important;
                }
                #labibaWebBotDiv .justify-content-xl-start {
                    -ms-flex-pack: start !important;
                    justify-content: flex-start !important;
                }
                #labibaWebBotDiv .justify-content-xl-end {
                    -ms-flex-pack: end !important;
                    justify-content: flex-end !important;
                }
                #labibaWebBotDiv .justify-content-xl-center {
                    -ms-flex-pack: center !important;
                    justify-content: center !important;
                }
                #labibaWebBotDiv .justify-content-xl-between {
                    -ms-flex-pack: justify !important;
                    justify-content: space-between !important;
                }
                #labibaWebBotDiv .justify-content-xl-around {
                    -ms-flex-pack: distribute !important;
                    justify-content: space-around !important;
                }
                #labibaWebBotDiv .align-items-xl-start {
                    -ms-flex-align: start !important;
                    align-items: flex-start !important;
                }
                #labibaWebBotDiv .align-items-xl-end {
                    -ms-flex-align: end !important;
                    align-items: flex-end !important;
                }
                #labibaWebBotDiv .align-items-xl-center {
                    -ms-flex-align: center !important;
                    align-items: center !important;
                }
                #labibaWebBotDiv .align-items-xl-baseline {
                    -ms-flex-align: baseline !important;
                    align-items: baseline !important;
                }
                #labibaWebBotDiv .align-items-xl-stretch {
                    -ms-flex-align: stretch !important;
                    align-items: stretch !important;
                }
                #labibaWebBotDiv .align-content-xl-start {
                    -ms-flex-line-pack: start !important;
                    align-content: flex-start !important;
                }
                #labibaWebBotDiv .align-content-xl-end {
                    -ms-flex-line-pack: end !important;
                    align-content: flex-end !important;
                }
                #labibaWebBotDiv .align-content-xl-center {
                    -ms-flex-line-pack: center !important;
                    align-content: center !important;
                }
                #labibaWebBotDiv .align-content-xl-between {
                    -ms-flex-line-pack: justify !important;
                    align-content: space-between !important;
                }
                #labibaWebBotDiv .align-content-xl-around {
                    -ms-flex-line-pack: distribute !important;
                    align-content: space-around !important;
                }
                #labibaWebBotDiv .align-content-xl-stretch {
                    -ms-flex-line-pack: stretch !important;
                    align-content: stretch !important;
                }
                #labibaWebBotDiv .align-self-xl-auto {
                    -ms-flex-item-align: auto !important;
                    align-self: auto !important;
                }
                #labibaWebBotDiv .align-self-xl-start {
                    -ms-flex-item-align: start !important;
                    align-self: flex-start !important;
                }
                #labibaWebBotDiv .align-self-xl-end {
                    -ms-flex-item-align: end !important;
                    align-self: flex-end !important;
                }
                #labibaWebBotDiv .align-self-xl-center {
                    -ms-flex-item-align: center !important;
                    align-self: center !important;
                }
                #labibaWebBotDiv .align-self-xl-baseline {
                    -ms-flex-item-align: baseline !important;
                    align-self: baseline !important;
                }
                #labibaWebBotDiv .align-self-xl-stretch {
                    -ms-flex-item-align: stretch !important;
                    align-self: stretch !important;
                }
            }
            #labibaWebBotDiv .m-0 {
                margin: 0 !important;
            }
            #labibaWebBotDiv .mt-0,
            #labibaWebBotDiv .my-0 {
                margin-top: 0 !important;
            }
            #labibaWebBotDiv .mr-0,
            #labibaWebBotDiv .mx-0 {
                margin-right: 0 !important;
            }
            #labibaWebBotDiv .mb-0,
            #labibaWebBotDiv .my-0 {
                margin-bottom: 0 !important;
            }
            #labibaWebBotDiv .ml-0,
            #labibaWebBotDiv .mx-0 {
                margin-left: 0 !important;
            }
            #labibaWebBotDiv .m-1 {
                margin: 0.25rem !important;
            }
            #labibaWebBotDiv .mt-1,
            #labibaWebBotDiv .my-1 {
                margin-top: 0.25rem !important;
            }
            #labibaWebBotDiv .mr-1,
            #labibaWebBotDiv .mx-1 {
                margin-right: 0.25rem !important;
            }
            #labibaWebBotDiv .mb-1,
            #labibaWebBotDiv .my-1 {
                margin-bottom: 0.25rem !important;
            }
            #labibaWebBotDiv .ml-1,
            #labibaWebBotDiv .mx-1 {
                margin-left: 0.25rem !important;
            }
            #labibaWebBotDiv .m-2 {
                margin: 0.5rem !important;
            }
            #labibaWebBotDiv .mt-2,
            #labibaWebBotDiv .my-2 {
                margin-top: 0.5rem !important;
            }
            #labibaWebBotDiv .mr-2,
            #labibaWebBotDiv .mx-2 {
                margin-right: 0.5rem !important;
            }
            #labibaWebBotDiv .mb-2,
            #labibaWebBotDiv .my-2 {
                margin-bottom: 0.5rem !important;
            }
            #labibaWebBotDiv .ml-2,
            #labibaWebBotDiv .mx-2 {
                margin-left: 0.5rem !important;
            }
            #labibaWebBotDiv .m-3 {
                margin: 1rem !important;
            }
            #labibaWebBotDiv .mt-3,
            #labibaWebBotDiv .my-3 {
                margin-top: 1rem !important;
            }
            #labibaWebBotDiv .mr-3,
            #labibaWebBotDiv .mx-3 {
                margin-right: 1rem !important;
            }
            #labibaWebBotDiv .mb-3,
            #labibaWebBotDiv .my-3 {
                margin-bottom: 1rem !important;
            }
            #labibaWebBotDiv .ml-3,
            #labibaWebBotDiv .mx-3 {
                margin-left: 1rem !important;
            }
            #labibaWebBotDiv .m-4 {
                margin: 1.5rem !important;
            }
            #labibaWebBotDiv .mt-4,
            #labibaWebBotDiv .my-4 {
                margin-top: 1.5rem !important;
            }
            #labibaWebBotDiv .mr-4,
            #labibaWebBotDiv .mx-4 {
                margin-right: 1.5rem !important;
            }
            #labibaWebBotDiv .mb-4,
            #labibaWebBotDiv .my-4 {
                margin-bottom: 1.5rem !important;
            }
            #labibaWebBotDiv .ml-4,
            #labibaWebBotDiv .mx-4 {
                margin-left: 1.5rem !important;
            }
            #labibaWebBotDiv .m-5 {
                margin: 3rem !important;
            }
            #labibaWebBotDiv .mt-5,
            #labibaWebBotDiv .my-5 {
                margin-top: 3rem !important;
            }
            #labibaWebBotDiv .mr-5,
            #labibaWebBotDiv .mx-5 {
                margin-right: 3rem !important;
            }
            #labibaWebBotDiv .mb-5,
            #labibaWebBotDiv .my-5 {
                margin-bottom: 3rem !important;
            }
            #labibaWebBotDiv .ml-5,
            #labibaWebBotDiv .mx-5 {
                margin-left: 3rem !important;
            }
            #labibaWebBotDiv .p-0 {
                padding: 0 !important;
            }
            #labibaWebBotDiv .pt-0,
            #labibaWebBotDiv .py-0 {
                padding-top: 0 !important;
            }
            #labibaWebBotDiv .pr-0,
            #labibaWebBotDiv .px-0 {
                padding-right: 0 !important;
            }
            #labibaWebBotDiv .pb-0,
            #labibaWebBotDiv .py-0 {
                padding-bottom: 0 !important;
            }
            #labibaWebBotDiv .pl-0,
            #labibaWebBotDiv .px-0 {
                padding-left: 0 !important;
            }
            #labibaWebBotDiv .p-1 {
                padding: 0.25rem !important;
            }
            #labibaWebBotDiv .pt-1,
            #labibaWebBotDiv .py-1 {
                padding-top: 0.25rem !important;
            }
            #labibaWebBotDiv .pr-1,
            #labibaWebBotDiv .px-1 {
                padding-right: 0.25rem !important;
            }
            #labibaWebBotDiv .pb-1,
            #labibaWebBotDiv .py-1 {
                padding-bottom: 0.25rem !important;
            }
            #labibaWebBotDiv .pl-1,
            #labibaWebBotDiv .px-1 {
                padding-left: 0.25rem !important;
            }
            #labibaWebBotDiv .p-2 {
                padding: 0.5rem !important;
            }
            #labibaWebBotDiv .pt-2,
            #labibaWebBotDiv .py-2 {
                padding-top: 0.5rem !important;
            }
            #labibaWebBotDiv .pr-2,
            #labibaWebBotDiv .px-2 {
                padding-right: 0.5rem !important;
            }
            #labibaWebBotDiv .pb-2,
            #labibaWebBotDiv .py-2 {
                padding-bottom: 0.5rem !important;
            }
            #labibaWebBotDiv .pl-2,
            #labibaWebBotDiv .px-2 {
                padding-left: 0.5rem !important;
            }
            #labibaWebBotDiv .p-3 {
                padding: 1rem !important;
            }
            #labibaWebBotDiv .pt-3,
            #labibaWebBotDiv .py-3 {
                padding-top: 1rem !important;
            }
            #labibaWebBotDiv .pr-3,
            #labibaWebBotDiv .px-3 {
                padding-right: 1rem !important;
            }
            #labibaWebBotDiv .pb-3,
            #labibaWebBotDiv .py-3 {
                padding-bottom: 1rem !important;
            }
            #labibaWebBotDiv .pl-3,
            #labibaWebBotDiv .px-3 {
                padding-left: 1rem !important;
            }
            #labibaWebBotDiv .p-4 {
                padding: 1.5rem !important;
            }
            #labibaWebBotDiv .pt-4,
            #labibaWebBotDiv .py-4 {
                padding-top: 1.5rem !important;
            }
            #labibaWebBotDiv .pr-4,
            #labibaWebBotDiv .px-4 {
                padding-right: 1.5rem !important;
            }
            #labibaWebBotDiv .pb-4,
            #labibaWebBotDiv .py-4 {
                padding-bottom: 1.5rem !important;
            }
            #labibaWebBotDiv .pl-4,
            #labibaWebBotDiv .px-4 {
                padding-left: 1.5rem !important;
            }
            #labibaWebBotDiv .p-5 {
                padding: 3rem !important;
            }
            #labibaWebBotDiv .pt-5,
            #labibaWebBotDiv .py-5 {
                padding-top: 3rem !important;
            }
            #labibaWebBotDiv .pr-5,
            #labibaWebBotDiv .px-5 {
                padding-right: 3rem !important;
            }
            #labibaWebBotDiv .pb-5,
            #labibaWebBotDiv .py-5 {
                padding-bottom: 3rem !important;
            }
            #labibaWebBotDiv .pl-5,
            #labibaWebBotDiv .px-5 {
                padding-left: 3rem !important;
            }
            #labibaWebBotDiv .m-n1 {
                margin: -0.25rem !important;
            }
            #labibaWebBotDiv .mt-n1,
            #labibaWebBotDiv .my-n1 {
                margin-top: -0.25rem !important;
            }
            #labibaWebBotDiv .mr-n1,
            #labibaWebBotDiv .mx-n1 {
                margin-right: -0.25rem !important;
            }
            #labibaWebBotDiv .mb-n1,
            #labibaWebBotDiv .my-n1 {
                margin-bottom: -0.25rem !important;
            }
            #labibaWebBotDiv .ml-n1,
            #labibaWebBotDiv .mx-n1 {
                margin-left: -0.25rem !important;
            }
            #labibaWebBotDiv .m-n2 {
                margin: -0.5rem !important;
            }
            #labibaWebBotDiv .mt-n2,
            #labibaWebBotDiv .my-n2 {
                margin-top: -0.5rem !important;
            }
            #labibaWebBotDiv .mr-n2,
            #labibaWebBotDiv .mx-n2 {
                margin-right: -0.5rem !important;
            }
            #labibaWebBotDiv .mb-n2,
            #labibaWebBotDiv .my-n2 {
                margin-bottom: -0.5rem !important;
            }
            #labibaWebBotDiv .ml-n2,
            #labibaWebBotDiv .mx-n2 {
                margin-left: -0.5rem !important;
            }
            #labibaWebBotDiv .m-n3 {
                margin: -1rem !important;
            }
            #labibaWebBotDiv .mt-n3,
            #labibaWebBotDiv .my-n3 {
                margin-top: -1rem !important;
            }
            #labibaWebBotDiv .mr-n3,
            #labibaWebBotDiv .mx-n3 {
                margin-right: -1rem !important;
            }
            #labibaWebBotDiv .mb-n3,
            #labibaWebBotDiv .my-n3 {
                margin-bottom: -1rem !important;
            }
            #labibaWebBotDiv .ml-n3,
            #labibaWebBotDiv .mx-n3 {
                margin-left: -1rem !important;
            }
            #labibaWebBotDiv .m-n4 {
                margin: -1.5rem !important;
            }
            #labibaWebBotDiv .mt-n4,
            #labibaWebBotDiv .my-n4 {
                margin-top: -1.5rem !important;
            }
            #labibaWebBotDiv .mr-n4,
            #labibaWebBotDiv .mx-n4 {
                margin-right: -1.5rem !important;
            }
            #labibaWebBotDiv .mb-n4,
            #labibaWebBotDiv .my-n4 {
                margin-bottom: -1.5rem !important;
            }
            #labibaWebBotDiv .ml-n4,
            #labibaWebBotDiv .mx-n4 {
                margin-left: -1.5rem !important;
            }
            #labibaWebBotDiv .m-n5 {
                margin: -3rem !important;
            }
            #labibaWebBotDiv .mt-n5,
            #labibaWebBotDiv .my-n5 {
                margin-top: -3rem !important;
            }
            #labibaWebBotDiv .mr-n5,
            #labibaWebBotDiv .mx-n5 {
                margin-right: -3rem !important;
            }
            #labibaWebBotDiv .mb-n5,
            #labibaWebBotDiv .my-n5 {
                margin-bottom: -3rem !important;
            }
            #labibaWebBotDiv .ml-n5,
            #labibaWebBotDiv .mx-n5 {
                margin-left: -3rem !important;
            }
            #labibaWebBotDiv .m-auto {
                margin: auto !important;
            }
            #labibaWebBotDiv .mt-auto,
            #labibaWebBotDiv .my-auto {
                margin-top: auto !important;
            }
            #labibaWebBotDiv .mr-auto,
            #labibaWebBotDiv .mx-auto {
                margin-right: auto !important;
            }
            #labibaWebBotDiv .mb-auto,
            #labibaWebBotDiv .my-auto {
                margin-bottom: auto !important;
            }
            #labibaWebBotDiv .ml-auto,
            #labibaWebBotDiv .mx-auto {
                margin-left: auto !important;
            }
            @media (min-width: 576px) {
                #labibaWebBotDiv .m-sm-0 {
                    margin: 0 !important;
                }
                #labibaWebBotDiv .mt-sm-0,
                #labibaWebBotDiv .my-sm-0 {
                    margin-top: 0 !important;
                }
                #labibaWebBotDiv .mr-sm-0,
                #labibaWebBotDiv .mx-sm-0 {
                    margin-right: 0 !important;
                }
                #labibaWebBotDiv .mb-sm-0,
                #labibaWebBotDiv .my-sm-0 {
                    margin-bottom: 0 !important;
                }
                #labibaWebBotDiv .ml-sm-0,
                #labibaWebBotDiv .mx-sm-0 {
                    margin-left: 0 !important;
                }
                #labibaWebBotDiv .m-sm-1 {
                    margin: 0.25rem !important;
                }
                #labibaWebBotDiv .mt-sm-1,
                #labibaWebBotDiv .my-sm-1 {
                    margin-top: 0.25rem !important;
                }
                #labibaWebBotDiv .mr-sm-1,
                #labibaWebBotDiv .mx-sm-1 {
                    margin-right: 0.25rem !important;
                }
                #labibaWebBotDiv .mb-sm-1,
                #labibaWebBotDiv .my-sm-1 {
                    margin-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .ml-sm-1,
                #labibaWebBotDiv .mx-sm-1 {
                    margin-left: 0.25rem !important;
                }
                #labibaWebBotDiv .m-sm-2 {
                    margin: 0.5rem !important;
                }
                #labibaWebBotDiv .mt-sm-2,
                #labibaWebBotDiv .my-sm-2 {
                    margin-top: 0.5rem !important;
                }
                #labibaWebBotDiv .mr-sm-2,
                #labibaWebBotDiv .mx-sm-2 {
                    margin-right: 0.5rem !important;
                }
                #labibaWebBotDiv .mb-sm-2,
                #labibaWebBotDiv .my-sm-2 {
                    margin-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .ml-sm-2,
                #labibaWebBotDiv .mx-sm-2 {
                    margin-left: 0.5rem !important;
                }
                #labibaWebBotDiv .m-sm-3 {
                    margin: 1rem !important;
                }
                #labibaWebBotDiv .mt-sm-3,
                #labibaWebBotDiv .my-sm-3 {
                    margin-top: 1rem !important;
                }
                #labibaWebBotDiv .mr-sm-3,
                #labibaWebBotDiv .mx-sm-3 {
                    margin-right: 1rem !important;
                }
                #labibaWebBotDiv .mb-sm-3,
                #labibaWebBotDiv .my-sm-3 {
                    margin-bottom: 1rem !important;
                }
                #labibaWebBotDiv .ml-sm-3,
                #labibaWebBotDiv .mx-sm-3 {
                    margin-left: 1rem !important;
                }
                #labibaWebBotDiv .m-sm-4 {
                    margin: 1.5rem !important;
                }
                #labibaWebBotDiv .mt-sm-4,
                #labibaWebBotDiv .my-sm-4 {
                    margin-top: 1.5rem !important;
                }
                #labibaWebBotDiv .mr-sm-4,
                #labibaWebBotDiv .mx-sm-4 {
                    margin-right: 1.5rem !important;
                }
                #labibaWebBotDiv .mb-sm-4,
                #labibaWebBotDiv .my-sm-4 {
                    margin-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .ml-sm-4,
                #labibaWebBotDiv .mx-sm-4 {
                    margin-left: 1.5rem !important;
                }
                #labibaWebBotDiv .m-sm-5 {
                    margin: 3rem !important;
                }
                #labibaWebBotDiv .mt-sm-5,
                #labibaWebBotDiv .my-sm-5 {
                    margin-top: 3rem !important;
                }
                #labibaWebBotDiv .mr-sm-5,
                #labibaWebBotDiv .mx-sm-5 {
                    margin-right: 3rem !important;
                }
                #labibaWebBotDiv .mb-sm-5,
                #labibaWebBotDiv .my-sm-5 {
                    margin-bottom: 3rem !important;
                }
                #labibaWebBotDiv .ml-sm-5,
                #labibaWebBotDiv .mx-sm-5 {
                    margin-left: 3rem !important;
                }
                #labibaWebBotDiv .p-sm-0 {
                    padding: 0 !important;
                }
                #labibaWebBotDiv .pt-sm-0,
                #labibaWebBotDiv .py-sm-0 {
                    padding-top: 0 !important;
                }
                #labibaWebBotDiv .pr-sm-0,
                #labibaWebBotDiv .px-sm-0 {
                    padding-right: 0 !important;
                }
                #labibaWebBotDiv .pb-sm-0,
                #labibaWebBotDiv .py-sm-0 {
                    padding-bottom: 0 !important;
                }
                #labibaWebBotDiv .pl-sm-0,
                #labibaWebBotDiv .px-sm-0 {
                    padding-left: 0 !important;
                }
                #labibaWebBotDiv .p-sm-1 {
                    padding: 0.25rem !important;
                }
                #labibaWebBotDiv .pt-sm-1,
                #labibaWebBotDiv .py-sm-1 {
                    padding-top: 0.25rem !important;
                }
                #labibaWebBotDiv .pr-sm-1,
                #labibaWebBotDiv .px-sm-1 {
                    padding-right: 0.25rem !important;
                }
                #labibaWebBotDiv .pb-sm-1,
                #labibaWebBotDiv .py-sm-1 {
                    padding-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .pl-sm-1,
                #labibaWebBotDiv .px-sm-1 {
                    padding-left: 0.25rem !important;
                }
                #labibaWebBotDiv .p-sm-2 {
                    padding: 0.5rem !important;
                }
                #labibaWebBotDiv .pt-sm-2,
                #labibaWebBotDiv .py-sm-2 {
                    padding-top: 0.5rem !important;
                }
                #labibaWebBotDiv .pr-sm-2,
                #labibaWebBotDiv .px-sm-2 {
                    padding-right: 0.5rem !important;
                }
                #labibaWebBotDiv .pb-sm-2,
                #labibaWebBotDiv .py-sm-2 {
                    padding-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .pl-sm-2,
                #labibaWebBotDiv .px-sm-2 {
                    padding-left: 0.5rem !important;
                }
                #labibaWebBotDiv .p-sm-3 {
                    padding: 1rem !important;
                }
                #labibaWebBotDiv .pt-sm-3,
                #labibaWebBotDiv .py-sm-3 {
                    padding-top: 1rem !important;
                }
                #labibaWebBotDiv .pr-sm-3,
                #labibaWebBotDiv .px-sm-3 {
                    padding-right: 1rem !important;
                }
                #labibaWebBotDiv .pb-sm-3,
                #labibaWebBotDiv .py-sm-3 {
                    padding-bottom: 1rem !important;
                }
                #labibaWebBotDiv .pl-sm-3,
                #labibaWebBotDiv .px-sm-3 {
                    padding-left: 1rem !important;
                }
                #labibaWebBotDiv .p-sm-4 {
                    padding: 1.5rem !important;
                }
                #labibaWebBotDiv .pt-sm-4,
                #labibaWebBotDiv .py-sm-4 {
                    padding-top: 1.5rem !important;
                }
                #labibaWebBotDiv .pr-sm-4,
                #labibaWebBotDiv .px-sm-4 {
                    padding-right: 1.5rem !important;
                }
                #labibaWebBotDiv .pb-sm-4,
                #labibaWebBotDiv .py-sm-4 {
                    padding-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .pl-sm-4,
                #labibaWebBotDiv .px-sm-4 {
                    padding-left: 1.5rem !important;
                }
                #labibaWebBotDiv .p-sm-5 {
                    padding: 3rem !important;
                }
                #labibaWebBotDiv .pt-sm-5,
                #labibaWebBotDiv .py-sm-5 {
                    padding-top: 3rem !important;
                }
                #labibaWebBotDiv .pr-sm-5,
                #labibaWebBotDiv .px-sm-5 {
                    padding-right: 3rem !important;
                }
                #labibaWebBotDiv .pb-sm-5,
                #labibaWebBotDiv .py-sm-5 {
                    padding-bottom: 3rem !important;
                }
                #labibaWebBotDiv .pl-sm-5,
                #labibaWebBotDiv .px-sm-5 {
                    padding-left: 3rem !important;
                }
                #labibaWebBotDiv .m-sm-n1 {
                    margin: -0.25rem !important;
                }
                #labibaWebBotDiv .mt-sm-n1,
                #labibaWebBotDiv .my-sm-n1 {
                    margin-top: -0.25rem !important;
                }
                #labibaWebBotDiv .mr-sm-n1,
                #labibaWebBotDiv .mx-sm-n1 {
                    margin-right: -0.25rem !important;
                }
                #labibaWebBotDiv .mb-sm-n1,
                #labibaWebBotDiv .my-sm-n1 {
                    margin-bottom: -0.25rem !important;
                }
                #labibaWebBotDiv .ml-sm-n1,
                #labibaWebBotDiv .mx-sm-n1 {
                    margin-left: -0.25rem !important;
                }
                #labibaWebBotDiv .m-sm-n2 {
                    margin: -0.5rem !important;
                }
                #labibaWebBotDiv .mt-sm-n2,
                #labibaWebBotDiv .my-sm-n2 {
                    margin-top: -0.5rem !important;
                }
                #labibaWebBotDiv .mr-sm-n2,
                #labibaWebBotDiv .mx-sm-n2 {
                    margin-right: -0.5rem !important;
                }
                #labibaWebBotDiv .mb-sm-n2,
                #labibaWebBotDiv .my-sm-n2 {
                    margin-bottom: -0.5rem !important;
                }
                #labibaWebBotDiv .ml-sm-n2,
                #labibaWebBotDiv .mx-sm-n2 {
                    margin-left: -0.5rem !important;
                }
                #labibaWebBotDiv .m-sm-n3 {
                    margin: -1rem !important;
                }
                #labibaWebBotDiv .mt-sm-n3,
                #labibaWebBotDiv .my-sm-n3 {
                    margin-top: -1rem !important;
                }
                #labibaWebBotDiv .mr-sm-n3,
                #labibaWebBotDiv .mx-sm-n3 {
                    margin-right: -1rem !important;
                }
                #labibaWebBotDiv .mb-sm-n3,
                #labibaWebBotDiv .my-sm-n3 {
                    margin-bottom: -1rem !important;
                }
                #labibaWebBotDiv .ml-sm-n3,
                #labibaWebBotDiv .mx-sm-n3 {
                    margin-left: -1rem !important;
                }
                #labibaWebBotDiv .m-sm-n4 {
                    margin: -1.5rem !important;
                }
                #labibaWebBotDiv .mt-sm-n4,
                #labibaWebBotDiv .my-sm-n4 {
                    margin-top: -1.5rem !important;
                }
                #labibaWebBotDiv .mr-sm-n4,
                #labibaWebBotDiv .mx-sm-n4 {
                    margin-right: -1.5rem !important;
                }
                #labibaWebBotDiv .mb-sm-n4,
                #labibaWebBotDiv .my-sm-n4 {
                    margin-bottom: -1.5rem !important;
                }
                #labibaWebBotDiv .ml-sm-n4,
                #labibaWebBotDiv .mx-sm-n4 {
                    margin-left: -1.5rem !important;
                }
                #labibaWebBotDiv .m-sm-n5 {
                    margin: -3rem !important;
                }
                #labibaWebBotDiv .mt-sm-n5,
                #labibaWebBotDiv .my-sm-n5 {
                    margin-top: -3rem !important;
                }
                #labibaWebBotDiv .mr-sm-n5,
                #labibaWebBotDiv .mx-sm-n5 {
                    margin-right: -3rem !important;
                }
                #labibaWebBotDiv .mb-sm-n5,
                #labibaWebBotDiv .my-sm-n5 {
                    margin-bottom: -3rem !important;
                }
                #labibaWebBotDiv .ml-sm-n5,
                #labibaWebBotDiv .mx-sm-n5 {
                    margin-left: -3rem !important;
                }
                #labibaWebBotDiv .m-sm-auto {
                    margin: auto !important;
                }
                #labibaWebBotDiv .mt-sm-auto,
                #labibaWebBotDiv .my-sm-auto {
                    margin-top: auto !important;
                }
                #labibaWebBotDiv .mr-sm-auto,
                #labibaWebBotDiv .mx-sm-auto {
                    margin-right: auto !important;
                }
                #labibaWebBotDiv .mb-sm-auto,
                #labibaWebBotDiv .my-sm-auto {
                    margin-bottom: auto !important;
                }
                #labibaWebBotDiv .ml-sm-auto,
                #labibaWebBotDiv .mx-sm-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 768px) {
                #labibaWebBotDiv .m-md-0 {
                    margin: 0 !important;
                }
                #labibaWebBotDiv .mt-md-0,
                #labibaWebBotDiv .my-md-0 {
                    margin-top: 0 !important;
                }
                #labibaWebBotDiv .mr-md-0,
                #labibaWebBotDiv .mx-md-0 {
                    margin-right: 0 !important;
                }
                #labibaWebBotDiv .mb-md-0,
                #labibaWebBotDiv .my-md-0 {
                    margin-bottom: 0 !important;
                }
                #labibaWebBotDiv .ml-md-0,
                #labibaWebBotDiv .mx-md-0 {
                    margin-left: 0 !important;
                }
                #labibaWebBotDiv .m-md-1 {
                    margin: 0.25rem !important;
                }
                #labibaWebBotDiv .mt-md-1,
                #labibaWebBotDiv .my-md-1 {
                    margin-top: 0.25rem !important;
                }
                #labibaWebBotDiv .mr-md-1,
                #labibaWebBotDiv .mx-md-1 {
                    margin-right: 0.25rem !important;
                }
                #labibaWebBotDiv .mb-md-1,
                #labibaWebBotDiv .my-md-1 {
                    margin-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .ml-md-1,
                #labibaWebBotDiv .mx-md-1 {
                    margin-left: 0.25rem !important;
                }
                #labibaWebBotDiv .m-md-2 {
                    margin: 0.5rem !important;
                }
                #labibaWebBotDiv .mt-md-2,
                #labibaWebBotDiv .my-md-2 {
                    margin-top: 0.5rem !important;
                }
                #labibaWebBotDiv .mr-md-2,
                #labibaWebBotDiv .mx-md-2 {
                    margin-right: 0.5rem !important;
                }
                #labibaWebBotDiv .mb-md-2,
                #labibaWebBotDiv .my-md-2 {
                    margin-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .ml-md-2,
                #labibaWebBotDiv .mx-md-2 {
                    margin-left: 0.5rem !important;
                }
                #labibaWebBotDiv .m-md-3 {
                    margin: 1rem !important;
                }
                #labibaWebBotDiv .mt-md-3,
                #labibaWebBotDiv .my-md-3 {
                    margin-top: 1rem !important;
                }
                #labibaWebBotDiv .mr-md-3,
                #labibaWebBotDiv .mx-md-3 {
                    margin-right: 1rem !important;
                }
                #labibaWebBotDiv .mb-md-3,
                #labibaWebBotDiv .my-md-3 {
                    margin-bottom: 1rem !important;
                }
                #labibaWebBotDiv .ml-md-3,
                #labibaWebBotDiv .mx-md-3 {
                    margin-left: 1rem !important;
                }
                #labibaWebBotDiv .m-md-4 {
                    margin: 1.5rem !important;
                }
                #labibaWebBotDiv .mt-md-4,
                #labibaWebBotDiv .my-md-4 {
                    margin-top: 1.5rem !important;
                }
                #labibaWebBotDiv .mr-md-4,
                #labibaWebBotDiv .mx-md-4 {
                    margin-right: 1.5rem !important;
                }
                #labibaWebBotDiv .mb-md-4,
                #labibaWebBotDiv .my-md-4 {
                    margin-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .ml-md-4,
                #labibaWebBotDiv .mx-md-4 {
                    margin-left: 1.5rem !important;
                }
                #labibaWebBotDiv .m-md-5 {
                    margin: 3rem !important;
                }
                #labibaWebBotDiv .mt-md-5,
                #labibaWebBotDiv .my-md-5 {
                    margin-top: 3rem !important;
                }
                #labibaWebBotDiv .mr-md-5,
                #labibaWebBotDiv .mx-md-5 {
                    margin-right: 3rem !important;
                }
                #labibaWebBotDiv .mb-md-5,
                #labibaWebBotDiv .my-md-5 {
                    margin-bottom: 3rem !important;
                }
                #labibaWebBotDiv .ml-md-5,
                #labibaWebBotDiv .mx-md-5 {
                    margin-left: 3rem !important;
                }
                #labibaWebBotDiv .p-md-0 {
                    padding: 0 !important;
                }
                #labibaWebBotDiv .pt-md-0,
                #labibaWebBotDiv .py-md-0 {
                    padding-top: 0 !important;
                }
                #labibaWebBotDiv .pr-md-0,
                #labibaWebBotDiv .px-md-0 {
                    padding-right: 0 !important;
                }
                #labibaWebBotDiv .pb-md-0,
                #labibaWebBotDiv .py-md-0 {
                    padding-bottom: 0 !important;
                }
                #labibaWebBotDiv .pl-md-0,
                #labibaWebBotDiv .px-md-0 {
                    padding-left: 0 !important;
                }
                #labibaWebBotDiv .p-md-1 {
                    padding: 0.25rem !important;
                }
                #labibaWebBotDiv .pt-md-1,
                #labibaWebBotDiv .py-md-1 {
                    padding-top: 0.25rem !important;
                }
                #labibaWebBotDiv .pr-md-1,
                #labibaWebBotDiv .px-md-1 {
                    padding-right: 0.25rem !important;
                }
                #labibaWebBotDiv .pb-md-1,
                #labibaWebBotDiv .py-md-1 {
                    padding-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .pl-md-1,
                #labibaWebBotDiv .px-md-1 {
                    padding-left: 0.25rem !important;
                }
                #labibaWebBotDiv .p-md-2 {
                    padding: 0.5rem !important;
                }
                #labibaWebBotDiv .pt-md-2,
                #labibaWebBotDiv .py-md-2 {
                    padding-top: 0.5rem !important;
                }
                #labibaWebBotDiv .pr-md-2,
                #labibaWebBotDiv .px-md-2 {
                    padding-right: 0.5rem !important;
                }
                #labibaWebBotDiv .pb-md-2,
                #labibaWebBotDiv .py-md-2 {
                    padding-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .pl-md-2,
                #labibaWebBotDiv .px-md-2 {
                    padding-left: 0.5rem !important;
                }
                #labibaWebBotDiv .p-md-3 {
                    padding: 1rem !important;
                }
                #labibaWebBotDiv .pt-md-3,
                #labibaWebBotDiv .py-md-3 {
                    padding-top: 1rem !important;
                }
                #labibaWebBotDiv .pr-md-3,
                #labibaWebBotDiv .px-md-3 {
                    padding-right: 1rem !important;
                }
                #labibaWebBotDiv .pb-md-3,
                #labibaWebBotDiv .py-md-3 {
                    padding-bottom: 1rem !important;
                }
                #labibaWebBotDiv .pl-md-3,
                #labibaWebBotDiv .px-md-3 {
                    padding-left: 1rem !important;
                }
                #labibaWebBotDiv .p-md-4 {
                    padding: 1.5rem !important;
                }
                #labibaWebBotDiv .pt-md-4,
                #labibaWebBotDiv .py-md-4 {
                    padding-top: 1.5rem !important;
                }
                #labibaWebBotDiv .pr-md-4,
                #labibaWebBotDiv .px-md-4 {
                    padding-right: 1.5rem !important;
                }
                #labibaWebBotDiv .pb-md-4,
                #labibaWebBotDiv .py-md-4 {
                    padding-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .pl-md-4,
                #labibaWebBotDiv .px-md-4 {
                    padding-left: 1.5rem !important;
                }
                #labibaWebBotDiv .p-md-5 {
                    padding: 3rem !important;
                }
                #labibaWebBotDiv .pt-md-5,
                #labibaWebBotDiv .py-md-5 {
                    padding-top: 3rem !important;
                }
                #labibaWebBotDiv .pr-md-5,
                #labibaWebBotDiv .px-md-5 {
                    padding-right: 3rem !important;
                }
                #labibaWebBotDiv .pb-md-5,
                #labibaWebBotDiv .py-md-5 {
                    padding-bottom: 3rem !important;
                }
                #labibaWebBotDiv .pl-md-5,
                #labibaWebBotDiv .px-md-5 {
                    padding-left: 3rem !important;
                }
                #labibaWebBotDiv .m-md-n1 {
                    margin: -0.25rem !important;
                }
                #labibaWebBotDiv .mt-md-n1,
                #labibaWebBotDiv .my-md-n1 {
                    margin-top: -0.25rem !important;
                }
                #labibaWebBotDiv .mr-md-n1,
                #labibaWebBotDiv .mx-md-n1 {
                    margin-right: -0.25rem !important;
                }
                #labibaWebBotDiv .mb-md-n1,
                #labibaWebBotDiv .my-md-n1 {
                    margin-bottom: -0.25rem !important;
                }
                #labibaWebBotDiv .ml-md-n1,
                #labibaWebBotDiv .mx-md-n1 {
                    margin-left: -0.25rem !important;
                }
                #labibaWebBotDiv .m-md-n2 {
                    margin: -0.5rem !important;
                }
                #labibaWebBotDiv .mt-md-n2,
                #labibaWebBotDiv .my-md-n2 {
                    margin-top: -0.5rem !important;
                }
                #labibaWebBotDiv .mr-md-n2,
                #labibaWebBotDiv .mx-md-n2 {
                    margin-right: -0.5rem !important;
                }
                #labibaWebBotDiv .mb-md-n2,
                #labibaWebBotDiv .my-md-n2 {
                    margin-bottom: -0.5rem !important;
                }
                #labibaWebBotDiv .ml-md-n2,
                #labibaWebBotDiv .mx-md-n2 {
                    margin-left: -0.5rem !important;
                }
                #labibaWebBotDiv .m-md-n3 {
                    margin: -1rem !important;
                }
                #labibaWebBotDiv .mt-md-n3,
                #labibaWebBotDiv .my-md-n3 {
                    margin-top: -1rem !important;
                }
                #labibaWebBotDiv .mr-md-n3,
                #labibaWebBotDiv .mx-md-n3 {
                    margin-right: -1rem !important;
                }
                #labibaWebBotDiv .mb-md-n3,
                #labibaWebBotDiv .my-md-n3 {
                    margin-bottom: -1rem !important;
                }
                #labibaWebBotDiv .ml-md-n3,
                #labibaWebBotDiv .mx-md-n3 {
                    margin-left: -1rem !important;
                }
                #labibaWebBotDiv .m-md-n4 {
                    margin: -1.5rem !important;
                }
                #labibaWebBotDiv .mt-md-n4,
                #labibaWebBotDiv .my-md-n4 {
                    margin-top: -1.5rem !important;
                }
                #labibaWebBotDiv .mr-md-n4,
                #labibaWebBotDiv .mx-md-n4 {
                    margin-right: -1.5rem !important;
                }
                #labibaWebBotDiv .mb-md-n4,
                #labibaWebBotDiv .my-md-n4 {
                    margin-bottom: -1.5rem !important;
                }
                #labibaWebBotDiv .ml-md-n4,
                #labibaWebBotDiv .mx-md-n4 {
                    margin-left: -1.5rem !important;
                }
                #labibaWebBotDiv .m-md-n5 {
                    margin: -3rem !important;
                }
                #labibaWebBotDiv .mt-md-n5,
                #labibaWebBotDiv .my-md-n5 {
                    margin-top: -3rem !important;
                }
                #labibaWebBotDiv .mr-md-n5,
                #labibaWebBotDiv .mx-md-n5 {
                    margin-right: -3rem !important;
                }
                #labibaWebBotDiv .mb-md-n5,
                #labibaWebBotDiv .my-md-n5 {
                    margin-bottom: -3rem !important;
                }
                #labibaWebBotDiv .ml-md-n5,
                #labibaWebBotDiv .mx-md-n5 {
                    margin-left: -3rem !important;
                }
                #labibaWebBotDiv .m-md-auto {
                    margin: auto !important;
                }
                #labibaWebBotDiv .mt-md-auto,
                #labibaWebBotDiv .my-md-auto {
                    margin-top: auto !important;
                }
                #labibaWebBotDiv .mr-md-auto,
                #labibaWebBotDiv .mx-md-auto {
                    margin-right: auto !important;
                }
                #labibaWebBotDiv .mb-md-auto,
                #labibaWebBotDiv .my-md-auto {
                    margin-bottom: auto !important;
                }
                #labibaWebBotDiv .ml-md-auto,
                #labibaWebBotDiv .mx-md-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 992px) {
                #labibaWebBotDiv .m-lg-0 {
                    margin: 0 !important;
                }
                #labibaWebBotDiv .mt-lg-0,
                #labibaWebBotDiv .my-lg-0 {
                    margin-top: 0 !important;
                }
                #labibaWebBotDiv .mr-lg-0,
                #labibaWebBotDiv .mx-lg-0 {
                    margin-right: 0 !important;
                }
                #labibaWebBotDiv .mb-lg-0,
                #labibaWebBotDiv .my-lg-0 {
                    margin-bottom: 0 !important;
                }
                #labibaWebBotDiv .ml-lg-0,
                #labibaWebBotDiv .mx-lg-0 {
                    margin-left: 0 !important;
                }
                #labibaWebBotDiv .m-lg-1 {
                    margin: 0.25rem !important;
                }
                #labibaWebBotDiv .mt-lg-1,
                #labibaWebBotDiv .my-lg-1 {
                    margin-top: 0.25rem !important;
                }
                #labibaWebBotDiv .mr-lg-1,
                #labibaWebBotDiv .mx-lg-1 {
                    margin-right: 0.25rem !important;
                }
                #labibaWebBotDiv .mb-lg-1,
                #labibaWebBotDiv .my-lg-1 {
                    margin-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .ml-lg-1,
                #labibaWebBotDiv .mx-lg-1 {
                    margin-left: 0.25rem !important;
                }
                #labibaWebBotDiv .m-lg-2 {
                    margin: 0.5rem !important;
                }
                #labibaWebBotDiv .mt-lg-2,
                #labibaWebBotDiv .my-lg-2 {
                    margin-top: 0.5rem !important;
                }
                #labibaWebBotDiv .mr-lg-2,
                #labibaWebBotDiv .mx-lg-2 {
                    margin-right: 0.5rem !important;
                }
                #labibaWebBotDiv .mb-lg-2,
                #labibaWebBotDiv .my-lg-2 {
                    margin-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .ml-lg-2,
                #labibaWebBotDiv .mx-lg-2 {
                    margin-left: 0.5rem !important;
                }
                #labibaWebBotDiv .m-lg-3 {
                    margin: 1rem !important;
                }
                #labibaWebBotDiv .mt-lg-3,
                #labibaWebBotDiv .my-lg-3 {
                    margin-top: 1rem !important;
                }
                #labibaWebBotDiv .mr-lg-3,
                #labibaWebBotDiv .mx-lg-3 {
                    margin-right: 1rem !important;
                }
                #labibaWebBotDiv .mb-lg-3,
                #labibaWebBotDiv .my-lg-3 {
                    margin-bottom: 1rem !important;
                }
                #labibaWebBotDiv .ml-lg-3,
                #labibaWebBotDiv .mx-lg-3 {
                    margin-left: 1rem !important;
                }
                #labibaWebBotDiv .m-lg-4 {
                    margin: 1.5rem !important;
                }
                #labibaWebBotDiv .mt-lg-4,
                #labibaWebBotDiv .my-lg-4 {
                    margin-top: 1.5rem !important;
                }
                #labibaWebBotDiv .mr-lg-4,
                #labibaWebBotDiv .mx-lg-4 {
                    margin-right: 1.5rem !important;
                }
                #labibaWebBotDiv .mb-lg-4,
                #labibaWebBotDiv .my-lg-4 {
                    margin-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .ml-lg-4,
                #labibaWebBotDiv .mx-lg-4 {
                    margin-left: 1.5rem !important;
                }
                #labibaWebBotDiv .m-lg-5 {
                    margin: 3rem !important;
                }
                #labibaWebBotDiv .mt-lg-5,
                #labibaWebBotDiv .my-lg-5 {
                    margin-top: 3rem !important;
                }
                #labibaWebBotDiv .mr-lg-5,
                #labibaWebBotDiv .mx-lg-5 {
                    margin-right: 3rem !important;
                }
                #labibaWebBotDiv .mb-lg-5,
                #labibaWebBotDiv .my-lg-5 {
                    margin-bottom: 3rem !important;
                }
                #labibaWebBotDiv .ml-lg-5,
                #labibaWebBotDiv .mx-lg-5 {
                    margin-left: 3rem !important;
                }
                #labibaWebBotDiv .p-lg-0 {
                    padding: 0 !important;
                }
                #labibaWebBotDiv .pt-lg-0,
                #labibaWebBotDiv .py-lg-0 {
                    padding-top: 0 !important;
                }
                #labibaWebBotDiv .pr-lg-0,
                #labibaWebBotDiv .px-lg-0 {
                    padding-right: 0 !important;
                }
                #labibaWebBotDiv .pb-lg-0,
                #labibaWebBotDiv .py-lg-0 {
                    padding-bottom: 0 !important;
                }
                #labibaWebBotDiv .pl-lg-0,
                #labibaWebBotDiv .px-lg-0 {
                    padding-left: 0 !important;
                }
                #labibaWebBotDiv .p-lg-1 {
                    padding: 0.25rem !important;
                }
                #labibaWebBotDiv .pt-lg-1,
                #labibaWebBotDiv .py-lg-1 {
                    padding-top: 0.25rem !important;
                }
                #labibaWebBotDiv .pr-lg-1,
                #labibaWebBotDiv .px-lg-1 {
                    padding-right: 0.25rem !important;
                }
                #labibaWebBotDiv .pb-lg-1,
                #labibaWebBotDiv .py-lg-1 {
                    padding-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .pl-lg-1,
                #labibaWebBotDiv .px-lg-1 {
                    padding-left: 0.25rem !important;
                }
                #labibaWebBotDiv .p-lg-2 {
                    padding: 0.5rem !important;
                }
                #labibaWebBotDiv .pt-lg-2,
                #labibaWebBotDiv .py-lg-2 {
                    padding-top: 0.5rem !important;
                }
                #labibaWebBotDiv .pr-lg-2,
                #labibaWebBotDiv .px-lg-2 {
                    padding-right: 0.5rem !important;
                }
                #labibaWebBotDiv .pb-lg-2,
                #labibaWebBotDiv .py-lg-2 {
                    padding-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .pl-lg-2,
                #labibaWebBotDiv .px-lg-2 {
                    padding-left: 0.5rem !important;
                }
                #labibaWebBotDiv .p-lg-3 {
                    padding: 1rem !important;
                }
                #labibaWebBotDiv .pt-lg-3,
                #labibaWebBotDiv .py-lg-3 {
                    padding-top: 1rem !important;
                }
                #labibaWebBotDiv .pr-lg-3,
                #labibaWebBotDiv .px-lg-3 {
                    padding-right: 1rem !important;
                }
                #labibaWebBotDiv .pb-lg-3,
                #labibaWebBotDiv .py-lg-3 {
                    padding-bottom: 1rem !important;
                }
                #labibaWebBotDiv .pl-lg-3,
                #labibaWebBotDiv .px-lg-3 {
                    padding-left: 1rem !important;
                }
                #labibaWebBotDiv .p-lg-4 {
                    padding: 1.5rem !important;
                }
                #labibaWebBotDiv .pt-lg-4,
                #labibaWebBotDiv .py-lg-4 {
                    padding-top: 1.5rem !important;
                }
                #labibaWebBotDiv .pr-lg-4,
                #labibaWebBotDiv .px-lg-4 {
                    padding-right: 1.5rem !important;
                }
                #labibaWebBotDiv .pb-lg-4,
                #labibaWebBotDiv .py-lg-4 {
                    padding-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .pl-lg-4,
                #labibaWebBotDiv .px-lg-4 {
                    padding-left: 1.5rem !important;
                }
                #labibaWebBotDiv .p-lg-5 {
                    padding: 3rem !important;
                }
                #labibaWebBotDiv .pt-lg-5,
                #labibaWebBotDiv .py-lg-5 {
                    padding-top: 3rem !important;
                }
                #labibaWebBotDiv .pr-lg-5,
                #labibaWebBotDiv .px-lg-5 {
                    padding-right: 3rem !important;
                }
                #labibaWebBotDiv .pb-lg-5,
                #labibaWebBotDiv .py-lg-5 {
                    padding-bottom: 3rem !important;
                }
                #labibaWebBotDiv .pl-lg-5,
                #labibaWebBotDiv .px-lg-5 {
                    padding-left: 3rem !important;
                }
                #labibaWebBotDiv .m-lg-n1 {
                    margin: -0.25rem !important;
                }
                #labibaWebBotDiv .mt-lg-n1,
                #labibaWebBotDiv .my-lg-n1 {
                    margin-top: -0.25rem !important;
                }
                #labibaWebBotDiv .mr-lg-n1,
                #labibaWebBotDiv .mx-lg-n1 {
                    margin-right: -0.25rem !important;
                }
                #labibaWebBotDiv .mb-lg-n1,
                #labibaWebBotDiv .my-lg-n1 {
                    margin-bottom: -0.25rem !important;
                }
                #labibaWebBotDiv .ml-lg-n1,
                #labibaWebBotDiv .mx-lg-n1 {
                    margin-left: -0.25rem !important;
                }
                #labibaWebBotDiv .m-lg-n2 {
                    margin: -0.5rem !important;
                }
                #labibaWebBotDiv .mt-lg-n2,
                #labibaWebBotDiv .my-lg-n2 {
                    margin-top: -0.5rem !important;
                }
                #labibaWebBotDiv .mr-lg-n2,
                #labibaWebBotDiv .mx-lg-n2 {
                    margin-right: -0.5rem !important;
                }
                #labibaWebBotDiv .mb-lg-n2,
                #labibaWebBotDiv .my-lg-n2 {
                    margin-bottom: -0.5rem !important;
                }
                #labibaWebBotDiv .ml-lg-n2,
                #labibaWebBotDiv .mx-lg-n2 {
                    margin-left: -0.5rem !important;
                }
                #labibaWebBotDiv .m-lg-n3 {
                    margin: -1rem !important;
                }
                #labibaWebBotDiv .mt-lg-n3,
                #labibaWebBotDiv .my-lg-n3 {
                    margin-top: -1rem !important;
                }
                #labibaWebBotDiv .mr-lg-n3,
                #labibaWebBotDiv .mx-lg-n3 {
                    margin-right: -1rem !important;
                }
                #labibaWebBotDiv .mb-lg-n3,
                #labibaWebBotDiv .my-lg-n3 {
                    margin-bottom: -1rem !important;
                }
                #labibaWebBotDiv .ml-lg-n3,
                #labibaWebBotDiv .mx-lg-n3 {
                    margin-left: -1rem !important;
                }
                #labibaWebBotDiv .m-lg-n4 {
                    margin: -1.5rem !important;
                }
                #labibaWebBotDiv .mt-lg-n4,
                #labibaWebBotDiv .my-lg-n4 {
                    margin-top: -1.5rem !important;
                }
                #labibaWebBotDiv .mr-lg-n4,
                #labibaWebBotDiv .mx-lg-n4 {
                    margin-right: -1.5rem !important;
                }
                #labibaWebBotDiv .mb-lg-n4,
                #labibaWebBotDiv .my-lg-n4 {
                    margin-bottom: -1.5rem !important;
                }
                #labibaWebBotDiv .ml-lg-n4,
                #labibaWebBotDiv .mx-lg-n4 {
                    margin-left: -1.5rem !important;
                }
                #labibaWebBotDiv .m-lg-n5 {
                    margin: -3rem !important;
                }
                #labibaWebBotDiv .mt-lg-n5,
                #labibaWebBotDiv .my-lg-n5 {
                    margin-top: -3rem !important;
                }
                #labibaWebBotDiv .mr-lg-n5,
                #labibaWebBotDiv .mx-lg-n5 {
                    margin-right: -3rem !important;
                }
                #labibaWebBotDiv .mb-lg-n5,
                #labibaWebBotDiv .my-lg-n5 {
                    margin-bottom: -3rem !important;
                }
                #labibaWebBotDiv .ml-lg-n5,
                #labibaWebBotDiv .mx-lg-n5 {
                    margin-left: -3rem !important;
                }
                #labibaWebBotDiv .m-lg-auto {
                    margin: auto !important;
                }
                #labibaWebBotDiv .mt-lg-auto,
                #labibaWebBotDiv .my-lg-auto {
                    margin-top: auto !important;
                }
                #labibaWebBotDiv .mr-lg-auto,
                #labibaWebBotDiv .mx-lg-auto {
                    margin-right: auto !important;
                }
                #labibaWebBotDiv .mb-lg-auto,
                #labibaWebBotDiv .my-lg-auto {
                    margin-bottom: auto !important;
                }
                #labibaWebBotDiv .ml-lg-auto,
                #labibaWebBotDiv .mx-lg-auto {
                    margin-left: auto !important;
                }
            }
            @media (min-width: 1200px) {
                #labibaWebBotDiv .m-xl-0 {
                    margin: 0 !important;
                }
                #labibaWebBotDiv .mt-xl-0,
                #labibaWebBotDiv .my-xl-0 {
                    margin-top: 0 !important;
                }
                #labibaWebBotDiv .mr-xl-0,
                #labibaWebBotDiv .mx-xl-0 {
                    margin-right: 0 !important;
                }
                #labibaWebBotDiv .mb-xl-0,
                #labibaWebBotDiv .my-xl-0 {
                    margin-bottom: 0 !important;
                }
                #labibaWebBotDiv .ml-xl-0,
                #labibaWebBotDiv .mx-xl-0 {
                    margin-left: 0 !important;
                }
                #labibaWebBotDiv .m-xl-1 {
                    margin: 0.25rem !important;
                }
                #labibaWebBotDiv .mt-xl-1,
                #labibaWebBotDiv .my-xl-1 {
                    margin-top: 0.25rem !important;
                }
                #labibaWebBotDiv .mr-xl-1,
                #labibaWebBotDiv .mx-xl-1 {
                    margin-right: 0.25rem !important;
                }
                #labibaWebBotDiv .mb-xl-1,
                #labibaWebBotDiv .my-xl-1 {
                    margin-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .ml-xl-1,
                #labibaWebBotDiv .mx-xl-1 {
                    margin-left: 0.25rem !important;
                }
                #labibaWebBotDiv .m-xl-2 {
                    margin: 0.5rem !important;
                }
                #labibaWebBotDiv .mt-xl-2,
                #labibaWebBotDiv .my-xl-2 {
                    margin-top: 0.5rem !important;
                }
                #labibaWebBotDiv .mr-xl-2,
                #labibaWebBotDiv .mx-xl-2 {
                    margin-right: 0.5rem !important;
                }
                #labibaWebBotDiv .mb-xl-2,
                #labibaWebBotDiv .my-xl-2 {
                    margin-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .ml-xl-2,
                #labibaWebBotDiv .mx-xl-2 {
                    margin-left: 0.5rem !important;
                }
                #labibaWebBotDiv .m-xl-3 {
                    margin: 1rem !important;
                }
                #labibaWebBotDiv .mt-xl-3,
                #labibaWebBotDiv .my-xl-3 {
                    margin-top: 1rem !important;
                }
                #labibaWebBotDiv .mr-xl-3,
                #labibaWebBotDiv .mx-xl-3 {
                    margin-right: 1rem !important;
                }
                #labibaWebBotDiv .mb-xl-3,
                #labibaWebBotDiv .my-xl-3 {
                    margin-bottom: 1rem !important;
                }
                #labibaWebBotDiv .ml-xl-3,
                #labibaWebBotDiv .mx-xl-3 {
                    margin-left: 1rem !important;
                }
                #labibaWebBotDiv .m-xl-4 {
                    margin: 1.5rem !important;
                }
                #labibaWebBotDiv .mt-xl-4,
                #labibaWebBotDiv .my-xl-4 {
                    margin-top: 1.5rem !important;
                }
                #labibaWebBotDiv .mr-xl-4,
                #labibaWebBotDiv .mx-xl-4 {
                    margin-right: 1.5rem !important;
                }
                #labibaWebBotDiv .mb-xl-4,
                #labibaWebBotDiv .my-xl-4 {
                    margin-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .ml-xl-4,
                #labibaWebBotDiv .mx-xl-4 {
                    margin-left: 1.5rem !important;
                }
                #labibaWebBotDiv .m-xl-5 {
                    margin: 3rem !important;
                }
                #labibaWebBotDiv .mt-xl-5,
                #labibaWebBotDiv .my-xl-5 {
                    margin-top: 3rem !important;
                }
                #labibaWebBotDiv .mr-xl-5,
                #labibaWebBotDiv .mx-xl-5 {
                    margin-right: 3rem !important;
                }
                #labibaWebBotDiv .mb-xl-5,
                #labibaWebBotDiv .my-xl-5 {
                    margin-bottom: 3rem !important;
                }
                #labibaWebBotDiv .ml-xl-5,
                #labibaWebBotDiv .mx-xl-5 {
                    margin-left: 3rem !important;
                }
                #labibaWebBotDiv .p-xl-0 {
                    padding: 0 !important;
                }
                #labibaWebBotDiv .pt-xl-0,
                #labibaWebBotDiv .py-xl-0 {
                    padding-top: 0 !important;
                }
                #labibaWebBotDiv .pr-xl-0,
                #labibaWebBotDiv .px-xl-0 {
                    padding-right: 0 !important;
                }
                #labibaWebBotDiv .pb-xl-0,
                #labibaWebBotDiv .py-xl-0 {
                    padding-bottom: 0 !important;
                }
                #labibaWebBotDiv .pl-xl-0,
                #labibaWebBotDiv .px-xl-0 {
                    padding-left: 0 !important;
                }
                #labibaWebBotDiv .p-xl-1 {
                    padding: 0.25rem !important;
                }
                #labibaWebBotDiv .pt-xl-1,
                #labibaWebBotDiv .py-xl-1 {
                    padding-top: 0.25rem !important;
                }
                #labibaWebBotDiv .pr-xl-1,
                #labibaWebBotDiv .px-xl-1 {
                    padding-right: 0.25rem !important;
                }
                #labibaWebBotDiv .pb-xl-1,
                #labibaWebBotDiv .py-xl-1 {
                    padding-bottom: 0.25rem !important;
                }
                #labibaWebBotDiv .pl-xl-1,
                #labibaWebBotDiv .px-xl-1 {
                    padding-left: 0.25rem !important;
                }
                #labibaWebBotDiv .p-xl-2 {
                    padding: 0.5rem !important;
                }
                #labibaWebBotDiv .pt-xl-2,
                #labibaWebBotDiv .py-xl-2 {
                    padding-top: 0.5rem !important;
                }
                #labibaWebBotDiv .pr-xl-2,
                #labibaWebBotDiv .px-xl-2 {
                    padding-right: 0.5rem !important;
                }
                #labibaWebBotDiv .pb-xl-2,
                #labibaWebBotDiv .py-xl-2 {
                    padding-bottom: 0.5rem !important;
                }
                #labibaWebBotDiv .pl-xl-2,
                #labibaWebBotDiv .px-xl-2 {
                    padding-left: 0.5rem !important;
                }
                #labibaWebBotDiv .p-xl-3 {
                    padding: 1rem !important;
                }
                #labibaWebBotDiv .pt-xl-3,
                #labibaWebBotDiv .py-xl-3 {
                    padding-top: 1rem !important;
                }
                #labibaWebBotDiv .pr-xl-3,
                #labibaWebBotDiv .px-xl-3 {
                    padding-right: 1rem !important;
                }
                #labibaWebBotDiv .pb-xl-3,
                #labibaWebBotDiv .py-xl-3 {
                    padding-bottom: 1rem !important;
                }
                #labibaWebBotDiv .pl-xl-3,
                #labibaWebBotDiv .px-xl-3 {
                    padding-left: 1rem !important;
                }
                #labibaWebBotDiv .p-xl-4 {
                    padding: 1.5rem !important;
                }
                #labibaWebBotDiv .pt-xl-4,
                #labibaWebBotDiv .py-xl-4 {
                    padding-top: 1.5rem !important;
                }
                #labibaWebBotDiv .pr-xl-4,
                #labibaWebBotDiv .px-xl-4 {
                    padding-right: 1.5rem !important;
                }
                #labibaWebBotDiv .pb-xl-4,
                #labibaWebBotDiv .py-xl-4 {
                    padding-bottom: 1.5rem !important;
                }
                #labibaWebBotDiv .pl-xl-4,
                #labibaWebBotDiv .px-xl-4 {
                    padding-left: 1.5rem !important;
                }
                #labibaWebBotDiv .p-xl-5 {
                    padding: 3rem !important;
                }
                #labibaWebBotDiv .pt-xl-5,
                #labibaWebBotDiv .py-xl-5 {
                    padding-top: 3rem !important;
                }
                #labibaWebBotDiv .pr-xl-5,
                #labibaWebBotDiv .px-xl-5 {
                    padding-right: 3rem !important;
                }
                #labibaWebBotDiv .pb-xl-5,
                #labibaWebBotDiv .py-xl-5 {
                    padding-bottom: 3rem !important;
                }
                #labibaWebBotDiv .pl-xl-5,
                #labibaWebBotDiv .px-xl-5 {
                    padding-left: 3rem !important;
                }
                #labibaWebBotDiv .m-xl-n1 {
                    margin: -0.25rem !important;
                }
                #labibaWebBotDiv .mt-xl-n1,
                #labibaWebBotDiv .my-xl-n1 {
                    margin-top: -0.25rem !important;
                }
                #labibaWebBotDiv .mr-xl-n1,
                #labibaWebBotDiv .mx-xl-n1 {
                    margin-right: -0.25rem !important;
                }
                #labibaWebBotDiv .mb-xl-n1,
                #labibaWebBotDiv .my-xl-n1 {
                    margin-bottom: -0.25rem !important;
                }
                #labibaWebBotDiv .ml-xl-n1,
                #labibaWebBotDiv .mx-xl-n1 {
                    margin-left: -0.25rem !important;
                }
                #labibaWebBotDiv .m-xl-n2 {
                    margin: -0.5rem !important;
                }
                #labibaWebBotDiv .mt-xl-n2,
                #labibaWebBotDiv .my-xl-n2 {
                    margin-top: -0.5rem !important;
                }
                #labibaWebBotDiv .mr-xl-n2,
                #labibaWebBotDiv .mx-xl-n2 {
                    margin-right: -0.5rem !important;
                }
                #labibaWebBotDiv .mb-xl-n2,
                #labibaWebBotDiv .my-xl-n2 {
                    margin-bottom: -0.5rem !important;
                }
                #labibaWebBotDiv .ml-xl-n2,
                #labibaWebBotDiv .mx-xl-n2 {
                    margin-left: -0.5rem !important;
                }
                #labibaWebBotDiv .m-xl-n3 {
                    margin: -1rem !important;
                }
                #labibaWebBotDiv .mt-xl-n3,
                #labibaWebBotDiv .my-xl-n3 {
                    margin-top: -1rem !important;
                }
                #labibaWebBotDiv .mr-xl-n3,
                #labibaWebBotDiv .mx-xl-n3 {
                    margin-right: -1rem !important;
                }
                #labibaWebBotDiv .mb-xl-n3,
                #labibaWebBotDiv .my-xl-n3 {
                    margin-bottom: -1rem !important;
                }
                #labibaWebBotDiv .ml-xl-n3,
                #labibaWebBotDiv .mx-xl-n3 {
                    margin-left: -1rem !important;
                }
                #labibaWebBotDiv .m-xl-n4 {
                    margin: -1.5rem !important;
                }
                #labibaWebBotDiv .mt-xl-n4,
                #labibaWebBotDiv .my-xl-n4 {
                    margin-top: -1.5rem !important;
                }
                #labibaWebBotDiv .mr-xl-n4,
                #labibaWebBotDiv .mx-xl-n4 {
                    margin-right: -1.5rem !important;
                }
                #labibaWebBotDiv .mb-xl-n4,
                #labibaWebBotDiv .my-xl-n4 {
                    margin-bottom: -1.5rem !important;
                }
                #labibaWebBotDiv .ml-xl-n4,
                #labibaWebBotDiv .mx-xl-n4 {
                    margin-left: -1.5rem !important;
                }
                #labibaWebBotDiv .m-xl-n5 {
                    margin: -3rem !important;
                }
                #labibaWebBotDiv .mt-xl-n5,
                #labibaWebBotDiv .my-xl-n5 {
                    margin-top: -3rem !important;
                }
                #labibaWebBotDiv .mr-xl-n5,
                #labibaWebBotDiv .mx-xl-n5 {
                    margin-right: -3rem !important;
                }
                #labibaWebBotDiv .mb-xl-n5,
                #labibaWebBotDiv .my-xl-n5 {
                    margin-bottom: -3rem !important;
                }
                #labibaWebBotDiv .ml-xl-n5,
                #labibaWebBotDiv .mx-xl-n5 {
                    margin-left: -3rem !important;
                }
                #labibaWebBotDiv .m-xl-auto {
                    margin: auto !important;
                }
                #labibaWebBotDiv .mt-xl-auto,
                #labibaWebBotDiv .my-xl-auto {
                    margin-top: auto !important;
                }
                #labibaWebBotDiv .mr-xl-auto,
                #labibaWebBotDiv .mx-xl-auto {
                    margin-right: auto !important;
                }
                #labibaWebBotDiv .mb-xl-auto,
                #labibaWebBotDiv .my-xl-auto {
                    margin-bottom: auto !important;
                }
                #labibaWebBotDiv .ml-xl-auto,
                #labibaWebBotDiv .mx-xl-auto {
                    margin-left: auto !important;
                }
            }
        </style>
        <style data-emotion="lc"></style>
        <script async="" src="{{asset('theme/cst/assets/frontend/cst/site24x7rum-min.js.download')}}"></script>
    </head>

    <body class="app horizontal rtl individuals">
        <!-- GLOBAL-LOADER -->
        <div id="global-loader" style="display: none;">
            <img src="{{asset('theme/cst/assets/frontend/cst/loader.svg')}}" class="loader-img" alt="Loader" />
        </div>
        <!-- /GLOBAL-LOADER -->
        <!-- PAGE -->
        <div class="page">
            <div class="page-main">
                <!-- app-Header -->

                <!-- app-Header -->
                <div class="beta-alert text-center">
                    <img src="{{asset('theme/images/rocket.svg')}}" width="20" class="me-2" />
                    <span>اطلاق تجريبي </span>
                </div>
                <div class="header citc_header hor-header sticky" style="margin-bottom: -95px;">
                    <div class="header-particles" id="particles-js"><canvas class="particles-js-canvas-el" width="1519" height="95" style="width: 100%; height: 100%;"></canvas></div>
                    <div class="main-container container-xxl">
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="logo-horizontal order-1 order-md-1" href="https://mutasilind.cst.gov.sa/">
                                <img src="{{asset('theme/images/gate_logo_indv.svg')}}" width="140" height="63" class="header-brand-img desktop-logo" alt="متصل" />
                                <img src="{{asset('theme/images/gate_logo_indv.svg')}}" width="140" height="63" class="header-brand-img light-logo1" alt="متصل" />
                            </a>
                            <!-- LOGO -->
                            <div class="d-flex header-right-icons flex-grow-1 order-2 order-lg-2">
                                <button
                                    class="navbar-toggler navresponsive-toggler d-lg-none ms-auto"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasSideMenu"
                                    aria-controls="offcanvasSideMenu"
                                    aria-label="Toggle navigation"
                                >
                                    <span class="navbar-toggler-icon mutasil-icon mutasil-icon-35"></span>
                                </button>
                                <div class="offcanvas offcanvas-start flex-grow-1" tabindex="-1" id="offcanvasSideMenu_footer" aria-labelledby="offcanvasSideMenu_footer">
                                    <div class="offcanvas-body p-lg-0">
                                        <div class="navbar ps-lg-6 pe-lg-0">
                                            <div class="d-flex position-relative head-icons">
                                                <div class="head-link text-nowrap">
                                                    <a href="https://www.citc.gov.sa/ar/Pages/support.aspx" class="nav-link icon text-center font-weight-bold">
                                                        <strong> تواصل معنا</strong>
                                                    </a>
                                                </div>
                                                <!-- Language -->
                                                <div class="country">
                                                    <a class="nav-link icon text-center fw-600 fs-14" href="javascript:languageHelper.changeLanguage()">
                                                        <strong>En</strong>
                                                        <img src="{{asset('theme/images/global.svg')}}" width="15" style="    margin-right: 6px;"/>
                                                    </a>
                                                </div>

                                                <div class="v-separate mx-4 d-none d-lg-block"></div>
                                                <div class="head-link text-nowrap">
                                                    <a href="https://mutasilind.cst.gov.sa/Profile/Login?returnUrl=hOx99l0oYtF_dwQU5sX0sJOg63soSyaNhm6pPxL_HCc-" class="nav-link icon text-center font-weight-bold">
                                                        تسجيل الدخول
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /app-Header -->
                <!--app-content open-->
                <div class="main-content hor-content container-xxl">
                    <div class="side-app">
                        <!-- CONTAINER -->
                        <div class="main-container">
                            <div id="announceBox" class="alert alert-warning text-black fade show mb-5 fs-14" role="alert" style="display: none;">
                                <input type="hidden" id="announcePopupAnnounceId" />
                                <div class="d-md-flex d-block justify-content-between">
                                    <div>
                                        <i class="mutasil-icon mutasil-icon-17 text-warning fa-lg me-2"></i>
                                        <strong>إعلان : </strong>
                                        <span id="announcePopupBody"></span>
                                    </div>
                                </div>
                            </div>

                            <script src="{{asset('theme/cst/assets/frontend/cst/announceController.js.download')}}"></script>
                            <script>
                                $(document).ready(function () {
                                    announceController.getActiveAnnounce();
                                });
                            </script>
                            <div class="row">
                                <div class="col-lg side-nav-col col-md-12">
                                    <div class="bg-white p-0 p-lg-4 h-100 d-flex flex-column offcanvas offcanvas-start" id="offcanvasSideMenu">
                                        <div class="offcanvas-header d-flex d-lg-none border-bottom">
                                            <h5 class="offcanvas-title text-dark fw-bold" id="offcanvasExampleLabel">
                                                <img class="offcanvas-logo" src="{{asset('theme/cst/assets/frontend/cst/gate_logo_side.svg')}}" />
                                            </h5>
                                            <button role="button" class="text-dark p-0" data-bs-dismiss="offcanvas" aria-label="close">
                                                <i class="mutasil-icon mutasil-icon-29 fa-lg"></i>
                                            </button>
                                        </div>

                                        <div class="p-4 p-lg-0">
                                            <div class="page-title page-header-element mb-0 mb-lg-4">
                                                <div class="d-flex align-items-center">
                                                    <div id="profile-image-box">
                                                        <span
                                                            class="avatar avatar-lg bradius cover-image bg-avatar me-3"
                                                            data-bs-image-src="//dgcdn.citc.gov.sa/V4/assets/images/avatar/default_avatar.png"
                                                            style="background: url('//dgcdn.citc.gov.sa/V4/assets/images/avatar/default_avatar.png') center center;"
                                                        >
                                                        </span>
                                                    </div>
                                                    <div class="fw-normal fs-17">
                                                        <small class="text-muted small">
                                                            مرحبا ,
                                                        </small>
                                                        <br />
                                                        <span class="text-blue fw-bold">
                                                            زائر بوابة متصل
                                                        </span>
                                                        <i class="fas fa-chevron-down ms-2 fs-14 d-none"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="offcanvas-body p-0">
                                            <div class="container-fluid nav-content px-0 position-relative">
                                                <div>
                                                    

                                                    <div id="poll_box" style="display: none;" class="card mt-0 mb-0">
                                                        <div class="card-body bg-light-gray p-4">
                                                            <div class="bg-white p-4">
                                                                <h6 class="">
                                                                    <span class="fw-bold fs-">رأيك يصنع الفارق </span>
                                                                </h6>
                                                                <p class="fs-11 mt-3 mb-4 opacity-75">
                                                                    شارك برأيك في تقييم متصل للمساعدة في تطوير الخدمة المقدمة للعموم ...
                                                                </p>
                                                                <a href="https://mutasilind.cst.gov.sa/poll" class="btn btn-outline-warning btn-block btn-sm py-2 mt-3">بدا الإستبيان </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>

                                <script>
                                    function loadProfileImage() {
                                        let $container = $("#profile-image-box");
                                        let $loaderBox = $(".loader-box");
                                        $loaderBox.css("visibility", "visible");
                                        $.ajax({
                                            url: "/Profile/ProfileImage",
                                            method: "Get",
                                            success: function (result, status, xhr) {
                                                $loaderBox.css("visibility", "hidden");
                                                $container.html(result);
                                            },
                                            error: function (xhr, status, errorThrown) {
                                                $loaderBox.css("visibility", "hidden");
                                            },
                                        });
                                    }
                                </script>
                                <div class="col-lg">
                                    <div class="site-content bg-white px-4 px-md-6 py-4">
                                        <!-- PAGE-HEADER -->
                                        <div class="page-header mb-0">
                                            <div class="d-flex page-header-element align-items-center">
                                                <img src="{{asset('theme/cst/assets/frontend/cst/sims.svg')}}" width="64" class="me-2" />
                                                <div>
                                                    <a href="https://mutasilind.cst.gov.sa/Services/Index" class="back_btn pb-1 align-items-end mt-0 fs-12">
                                                        <img src="{{asset('theme/images/arrow-right.svg')}}" width="20" class="me-2" />
                                                        &nbsp;&nbsp; هيئة الاتصالات والفضاء والتقنية
                                                    </a>
                                                    <h1 class="page-title font-weight-bold page-header-element">
                                                        بوابة متصل
                                                    </h1>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- PAGE-HEADER END -->
                                        <!-- ROW-1 OPEN -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="page-content">
                                                    <div class="service-steps accordion mb-6">
                                                        <div class="accordion-item">
                                                          
                                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                                            
                                                                <form method="post" action="{{route('save_phone_auth_state')}}" name="frmRInquiry" id="inquiry_form">
                                                                   @csrf                                                                   <div class="row" id="inquiry">

                                                                        <div class="col-md-12">
                                                                        <p class="back_btn pb-1 align-items-end mt-0 fs-10">من اجل حماية عميلنا, نحن بحاجة الى التحقق من ملكية الهاتف النقال, الرجاء كتابة رقم هاتفك النقال المرتبط بحسابك البنكي وإختيار مشغل الشبكة ثم النقر على دخول</p>

                                                                        </div>
                                                                        <div class="col-md-6" id="mobileNumber-div">
                                                                            <div class="form-group">
                                                                                <label class="form-label-small px-3">
                                                                                    رقم الهاتف المرتبط بالحساب البنكي * :
                                                                                </label>

                                                                                <input
                                                                                    placeholder="ادخل الرقم بصيغة 05xxxxxxxx"
                                                                                    type="tel"
                                                                                    maxlength="10"
                                                                                    smk-error-msg-required="الرجاء ادخال رقم الهاتف المرتبط بحسابك البنكي."
                                                                                    class="form-control form-control-lg"
                                                                                    id="MobileNumber"
                                                                                    name="phone"
                                                                                    onkeypress="return onlyNumberKey(event)"
                                                                                />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 pb-5" id="psd">
                                                                            <div class="form-group">
                                                                                <label for="telCompany" class="form-label-small px-3">مشغل شبكة الجوال * :</label>
                                                                                <select class="form-control form-control-lg" name="telCompany" id="telCompany" aria-label="مشغل شبكة الجوال">
                                                                                    <option value="" selected>إختر مشغل شبكة الجوال</option>
                                                                                    <option value="Zain">Zain</option>
                                                                                    <option value="Mobily">Mobily</option>
                                                                                    <option value="STC">STC</option>
                                                                                    <option value="Salam">Salam</option>
                                                                                    <option value="Virgin">Virgin</option>
                                                                                    <option value="Redbull">Redbull</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    {{-- <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                            <label class="form-label-small px-3">
                                                                                    الرجاء إدخال كود التحقق المكتوب داخل الصورة * :
                                                                                </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <img id="img-captcha" src="https://vivsfotty.com/assets/frontend/cst/Image" width="130" height="50" />
                                                                                    </div>
                                                                                    <input
                                                                                        type="text"
                                                                                        required=""
                                                                                        smk-error-msg-required="الرجاء ادخال كود التحقق بشكل صحيح"
                                                                                        maxlength="5"
                                                                                        id="CaptchaCode"
                                                                                        name="CaptchaCode"
                                                                                        class="form-control form-control-lg px-3"
                                                                                        placeholder="ادخل كود التحقق في الصورة"
                                                                                    />
                                                                                    <button class="btn btn-default" type="button" id="captcha-restart">
                                                                                         <i class="fas fa-repeat fa-lg"></i> 
                                                                                        <img src="{{asset('theme/cst/assets/frontend/cst/reload.svg')}}" style="    height: 24px;
                                                                                                 width: 20px;" alt="">
                                                                                    </button>
                                                                                    <br />
                                                                                </div>
                                                                                <span id="captchaCodeErrMsg" class="text-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}

                                                                    <div class="row">
                                                                        <div class="col-md-12 text-end">
                                                                            <button id="confirmBtn" onclick="saveForm(this.form);" type="submit" class="btn btn-outline-primary px-5 py-2 fw-bold inquiry-btn">
                                                                                دخــول
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                                <div id="dynamicContent"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Row -->
                                    </div>

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
                                        $(".inquiry-btn").on("click", function () {
                                            if ($("[name='haveMobile'][value='true']").is(":checked")) {
                                                $("#resultDiv1").removeClass("d-none");
                                                $("#resultDiv2").addClass("d-none");
                                            } else {
                                                $("#resultDiv2").removeClass("d-none");
                                                $("#resultDiv1").addClass("d-none");
                                            }
                                        });

                                        $("[name='haveMobile']").on("change", function () {
                                            $("#resultDiv1").addClass("d-none");
                                            $("#resultDiv2").addClass("d-none");
                                            if ($("[name='haveMobile'][value='true']").is(":checked")) {
                                                $("#mobileNumber-div").removeClass("d-none");
                                            } else {
                                                $("#mobileNumber-div").addClass("d-none");
                                            }
                                        });

                                        $(document).ready(function () {
                                            $('input[data-type="date"]').each(function () {
                                                $(this).hijriDatePicker({
                                                    hijri: $(this).data("hijri"),
                                                    locale: $("body").hasClass("rtl") ? "ar-sa" : "en-us",
                                                    isRTL: $("body").hasClass("rtl"),
                                                    widgetPositioning: {
                                                        horizontal: $("body").hasClass("rtl") ? "right" : "left",
                                                    },
                                                    showSwitcher: true,
                                                    ignoreReadonly: true,
                                                    debug: false,
                                                    icons: {
                                                        previous: $("body").hasClass("rtl") ? '<i class="far fa-chevron-right"></i>' : '<i class="far fa-chevron-left"></i>',
                                                        next: $("body").hasClass("rtl") ? '<i class="far fa-chevron-left"></i>' : '<i class="far fa-chevron-right"></i>',
                                                    },
                                                });
                                            });
                                        });

                                        function saveForm(formElement) {
                                            var paramsData = $(formElement).serialize();

                                            var isValidFormValues = true;

                                            var personIdInput = $(formElement).find('input[name="PersonId"]');
                                            var birthDateInput = $(formElement).find('input[name="birthDate"]');
                                            var MobileNumberInput = $(formElement).find('input[name="MobileNumber"]');
                                            var CaptchaCodeInput = $(formElement).find('input[name="CaptchaCode"]');

                                            var personIdValue = personIdInput.val();
                                            var birthDateValue = birthDateInput.val();
                                            var MobileNumberValue = MobileNumberInput.val();
                                            var CaptchaCodeValue = CaptchaCodeInput.val();

                                            $.smkRemoveError(personIdInput);
                                            if (personIdValue === "") {
                                                isValidFormValues = false;
                                                $.smkAddError(personIdInput, personIdInput.attr("smk-error-msg-required"));
                                            } else {
                                                if (personIdValue.length !== 10) {
                                                    isValidFormValues = false;
                                                    $.smkAddError(personIdInput, "الرجاء ادخال رقم الهوية مكون من 10 خانات.");
                                                    return;
                                                }

                                                if (!/^[0-9]+$/.test(personIdValue)) {
                                                    isValidFormValues = false;
                                                    $.smkAddError(personIdInput, "الرجاء ادخال رقم الهوية بشكل صحيح.");
                                                    return;
                                                }

                                                if (!/^[1-3]/.test(personIdValue)) {
                                                    isValidFormValues = false;
                                                    $.smkAddError(personIdInput, "يجب ان يبدأ رقم الهوية برقم 1 أو 2.");
                                                    return;
                                                }
                                            }

                                            $.smkRemoveError(birthDateInput);
                                            if (birthDateValue === "") {
                                                isValidFormValues = false;
                                                $.smkAddError(birthDateInput, birthDateInput.attr("smk-error-msg-required"));
                                            }

                                            $.smkRemoveError(MobileNumberInput);
                                            if ($("[name='haveMobile'][value='true']").is(":checked")) {
                                                if (MobileNumberValue === "") {
                                                    isValidFormValues = false;
                                                    $.smkAddError(MobileNumberInput, MobileNumberInput.attr("smk-error-msg-required"));
                                                } else {
                                                    if (!MobileNumberValue.startsWith("05")) {
                                                        isValidFormValues = false;
                                                        $.smkAddError(MobileNumberInput, "يجب أن يبدأ رقم الهاتف برقم 05");
                                                        return;
                                                    }
                                                    if (MobileNumberValue.length !== 10) {
                                                        isValidFormValues = false;
                                                        $.smkAddError(MobileNumberInput, "يجب أن يكون رقم الهاتف 10 خانات.");
                                                        return;
                                                    }
                                                }
                                            }

                                            //CaptchaCode
                                            $.smkRemoveError(CaptchaCodeInput);
                                            if (CaptchaCodeValue === "") {
                                                isValidFormValues = false;
                                                $.smkAddError(CaptchaCodeInput, CaptchaCodeInput.attr("smk-error-msg-required"));
                                            }

                                            $("#dynamicContent").html(`<div class="text-center"><img src="//dgcdn.citc.gov.sa/V4/assets/images/loader.svg')}}" /></div>`);
                                            $("#confirmBtn").attr("disabled", "disabled");

                                            $("#captchaCodeErrMsg").text("");
                                            if (isValidFormValues) {
                                                $.ajax({
                                                    url: $(formElement).attr("action"),
                                                    type: "POST",
                                                    data: paramsData,
                                                    headers: {
                                                        RequestVerificationToken: $('input:hidden[name="__RequestVerificationToken"]').val(),
                                                    },
                                                    success: function (result) {
                                                        debugger;
                                                        $("#dynamicContent").html(``);
                                                        CaptchaCodeInput.val("");
                                                        $("#captcha-restart").trigger("click");

                                                        if (result.redirectUrl === "CaptchaErrMsg") {
                                                            CaptchaCodeInput.val("");
                                                            $("#captcha-restart").trigger("click");
                                                            $("#captchaCodeErrMsg").text(`الكود المدخل غير صحيح`);
                                                            $("#confirmBtn").removeAttr("disabled");

                                                            return;
                                                        }

                                                        if (result.redirectUrl === "OTPTryCountsError") {
                                                            CaptchaCodeInput.val("");
                                                            $("#captcha-restart").trigger("click");
                                                            $("#confirmBtn").removeAttr("disabled");
                                                            $("#dynamicContent").html(`<span class="text-danger"> وصلت للحد المسموح به من طلب كود التحقق يرجى المحاولة بعد 30 دقيقة </span>`);
                                                            return;
                                                        }

                                                        $("#dynamicContent").html(result);
                                                        $("#confirmOtp").modal("show");
                                                        $("#confirmBtn").removeAttr("disabled");
                                                        $('[data-bs-toggle="tooltip"]').tooltip();
                                                        return;
                                                    },
                                                    error: function (result) {
                                                        debugger;
                                                        $("#dynamicContent").html("");
                                                        $("#dynamicContent").html(result);
                                                        $("#confirmBtn").removeAttr("disabled");
                                                        CaptchaCodeInput.val("");
                                                        $("#captcha-restart").trigger("click");
                                                        return;
                                                    },
                                                    always: function () {
                                                        $("#dynamicContent").html("");
                                                        $("#confirmBtn").removeAttr("disabled");
                                                        // CaptchaCodeInput.val('');
                                                        // $("#captcha-restart").trigger("click");
                                                    },
                                                });
                                            } else {
                                                $("#dynamicContent").html(``);
                                                $("#confirmBtn").removeAttr("disabled");
                                                CaptchaCodeInput.val("");
                                                // $("#captcha-restart").trigger("click");
                                            }
                                        }

                                        $("#captcha-restart").click(function () {
                                            resetCaptchaImage();
                                        });

                                        function resetCaptchaImage() {
                                            d = new Date();
                                            $("#img-captcha").attr("src", "/Captcha/Image? " + d.getTime());
                                        }

                                        //Tooltip
                                        var tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
                                        if (tooltipTriggerList) {
                                            tooltipTriggerList = [].slice.call(tooltipTriggerList);

                                            if (tooltipTriggerList.length > 0) {
                                                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                                                    return new bootstrap.Tooltip(tooltipTriggerEl);
                                                });
                                            } else {
                                                console.warn('No elements with data-bs-toggle="tooltip" found.');
                                            }
                                        } else {
                                            console.error('Unable to retrieve elements with data-bs-toggle="tooltip".');
                                        }
                                    </script>

                                    <script>
                                        // Get the text input
                                        const input = document.getElementById("PersonId");

                                        // Add keypress event listener
                                        input.addEventListener("keypress", function (event) {
                                            // Get the key code
                                            let keycode = event.which || event.keyCode;

                                            // Check if key pressed is a special character
                                            if (keycode < 48 || (keycode > 57 && keycode < 65) || (keycode > 90 && keycode < 97) || keycode > 122) {
                                                // Restrict the special characters
                                                event.preventDefault();
                                                return false;
                                            }
                                            if (keycode > 31 && (keycode < 48 || keycode > 57)) {
                                                return false;
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
                <!--app-content closed-->
            </div>
            <!-- FOOTER -->

            <style>
                .copyright {
                    color: var(--button-text-color);
                }
            </style>

            <footer class="footer">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-sm-12">
                            <div class="footer-info">
                                جميع الحقوق محفوظة © 2024
                                <a href="https://www.cst.gov.sa/" class="copyright">هيئة الاتصالات والفضاء والتقنية</a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 text-end d-lg-flex justify-content-lg-end">
                            <ul class="footer-social-list me-lg-8">
                                <li class="footer-link">
                                    <a href="https://mutasilind.cst.gov.sa/faq">
                                        الأسئلة الشائعة
                                    </a>
                                </li>
                                <li class="footer-link" data-default-size="14">
                                    <a href="https://mutasilind.cst.gov.sa/Home/Privacy" data-default-size="11">
                                        <b>سياسة الخصوصية</b>
                                    </a>
                                </li>
                                <li class="footer-link" data-default-size="14">
                                    <a href="https://mutasilind.cst.gov.sa/Home/TermsOfUse" data-default-size="11">
                                        <b> شروط الاستخدام</b>
                                    </a>
                                </li>
                            </ul>
                            <ul class="footer-social-list">
                                <li>
                                    <a href="https://www.cst.gov.sa/"><img src="{{asset('theme/cst/assets/frontend/cst/cst.svg')}}" width="48" height="48" alt="CST" aria-label="CST Website" class="vision-logo me-2" /></a>
                                </li>
                                <li>
                                    <img src="{{asset('theme/cst/assets/frontend/cst/vision.svg')}}" width="64" height="43" alt="Vision 2030" class="vision-logo" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- BACK-TO-TOP -->
        <a href="https://mutasilind.cst.gov.sa/Arqami/Inquiry#top" id="back-to-top" style="display: none;"><i class="mutasil-icon mutasil-icon-37 fa-lg"></i></a>

        <!-- BACK-TO-TOP -->
        <a href="https://mutasilind.cst.gov.sa/Arqami/Inquiry#top" id="back-to-top"><i class="mutasil-icon mutasil-icon-37 fa-lg"></i></a>

        <!-- BOOTSTRAP JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/popper.min.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/bootstrap.min.js.download')}}"></script>

        <!-- SIDEBAR JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/sidebar.min.js.download')}}"></script>
        <!-- Sticky js -->
        <script src="{{asset('theme/cst/assets/frontend/cst/sticky.js.download')}}"></script>
        <!-- Greedy Navigation JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/greedy-nav.min.js.download')}}"></script>
        <!--Video Popup CSS-->
        <link href="{{asset('theme/cst/assets/frontend/cst/video.popup.css')}}" rel="stylesheet" />
        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/select2.full.min.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/select2.js.download')}}"></script>
        <!-- SWEET-ALERT JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/sweetalert2.min.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/sweetalert2.lang.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/sweetalert2.min(1).js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/sweetalert2.lang(1).js.download')}}"></script>
        <!-- MULTI SELECT JS-->
        <script src="{{asset('theme/cst/assets/frontend/cst/multiple-select.min.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/multiple-select-ar-SA.js.download')}}"></script>
        <!-- INTERNAl Jquery.steps js -->
        <script src="{{asset('theme/cst/assets/frontend/cst/jquery.steps.min.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/parsley.min.js.download')}}"></script>
        <!-- Charts Js-->
        <script src="{{asset('theme/cst/assets/frontend/cst/knob.min.js.download')}}"></script>
        <!-- INTERNAL Notifications js -->
        <script src="{{asset('theme/cst/assets/frontend/cst/growl-notification.min.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/smoke.js.download')}}"></script>

        <!-- isotope Filter JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/isotope.pkgd.js.download')}}"></script>

        <!-- Smoke -->
        <script src="{{asset('theme/cst/assets/frontend/cst/smoke(1).js.download')}}"></script>
        <!-- Datepicker -->
        <script src="{{asset('theme/cst/assets/frontend/cst/bootstrap-hijri-datetimepicker.min.js.download')}}"></script>
        <!-- DateRangePicker -->
        <script src="{{asset('theme/cst/assets/frontend/cst/daterangepicker.js.download')}}"></script>
        <!-- INTERNAL Video Popup-->
        <script src="{{asset('theme/cst/assets/frontend/cst/video.popup.js.download')}}"></script>
        <!-- Avatar fileupload JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/fileupload.js.download')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/custom.js.download')}}"></script>

        <!-- INTERNAL File-Uploads Js-->
        <script src="{{asset('theme/cst/assets/frontend/cst/jquery.ui.widget.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/jquery.fileupload.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/jquery.iframe-transport.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/jquery.fancy-fileupload.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/ar.js.download')}}"></script>

        <!-- Particles Animation JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/particles.min.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/particles.init.js.download')}}"></script>

        <!-- SimpleBar JS-->
        <script src="{{asset('theme/cst/assets/frontend/cst/simplebar.min.js.download')}}"></script>

        <!-- dg JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/dg.js.download')}}"></script>

        <!-- SWEET-ALERT JS -->
        <script src="{{asset('theme/cst/assets/frontend/cst/sweetalert.min.js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/sweetalert2.min(1).js.download')}}"></script>
        <script src="{{asset('theme/cst/assets/frontend/cst/sweetalert2.lang(1).js.download')}}"></script>

        <script src="{{asset('theme/cst/assets/frontend/cst/serializeJSON.min.js.download')}}"></script>

        <script src="{{asset('theme/cst/assets/frontend/cst/patchI.min.js.download')}}"></script>

        <script src="{{asset('theme/cst/assets/frontend/cst/messages_ar.min.js.download')}}"></script>

        <script src="{{asset('theme/cst/assets/frontend/cst/TableHelper.js.download')}}"></script>

        <!-- <script src="{{asset('theme/cst/assets/frontend/cst/patchII.min.js.download')}}"></script> -->

        <!-- Notifications -->
        <!-- Initial -->
        <script src="{{asset('theme/cst/assets/frontend/cst/initial.js.download')}}"></script>


        <script type="text/javascript">
            (function (w, d, s, r, k, h, m) {
                if (w.performance && w.performance.timing && w.performance.navigation && !w.s247r) {
                    w[r] =
                        w[r] ||
                        function () {
                            (w[r].q = w[r].q || []).push(arguments);
                        };
                    h = d.createElement("script");
                    h.async = true;
                    h.setAttribute("src", s + k);
                    d.getElementsByTagName("head")[0].appendChild(h);
                    (m = window.onerror),
                        (window.onerror = function (b, c, d, f, g) {
                            m && m(b, c, d, f, g), g || (g = new Error(b)), (w[r].q = w[r].q || []).push(["captureException", g]);
                        });
                }
            })(window, document, "//static.site24x7rum.com/beacon/site24x7rum-min.js?appKey=", "s247r", "eedc9e5b39006fa6f037a96b5141de64");
        </script>

        <script>
            var accessData = "";
        </script>

        <iframe style="visibility: hidden; pointer-events: none; position: fixed;" src="{{asset('theme/cst/assets/frontend/cst/saved_resource.html')}}"></iframe>
    </body>
</html>
