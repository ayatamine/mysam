@extends('layouts.main')
@section('styles')
<link rel="stylesheet" media="all" href="/sites/book.vehicle.local/files/css/css_hwa09ppdq08_Fx2JX4vfuRJWg_YWyjGT-LBxYb8U2aw.css" />
<style>
  #edit-vehicle-status label{
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #eee;
    border-radius: 23px;
    text-align: center;
    padding-top: 10px;
    margin: 0 3px
  }
  .booking_form_wrapper {
    margin: 2rem 0;
  }
</style>
@endsection
@section('content')


<div role="main" class="main-container container js-quickedit-main-content">
  <div class="container">
      <div class="row">

                          
                          

                          
                                          <section class="col-sm-12">

                                                                                      <div class="highlighted">  <div class="region region-highlighted">
<div data-drupal-messages-fallback class="hidden"></div>

</div>
</div>
                                      
                                  
                                                          <a id="main-content"></a>
                    <div class="region region-content">
  <h1 class="page-header">التحقق من حالة الفحص</h1>

<form class="svis-book-inspection-status" data-drupal-selector="svis-book-inspection-status" action="/ar/inspection-status" method="post" id="svis-book-inspection-status" accept-charset="UTF-8">
<div class="row">
<div class="col-sm-12 col-md-8">
<div id="inspection_status" class="booking_form_wrapper">
<input autocomplete="off" data-drupal-selector="form-jp1aqmgr77rynmfznjubw1er8w-6ms8t6zrezx7kljg" type="hidden" name="form_build_id" value="form-jP1AQMGR77RynMfznJUbw1eR8w_6MS8t6zREZx7KLjg" />

<input data-drupal-selector="edit-svis-book-inspection-status" type="hidden" name="form_id" value="svis_book_inspection_status" />
<fieldset data-drupal-selector="edit-vehicle-status" class="fieldgroup form-composite required js-form-item form-item js-form-wrapper form-wrapper" data-msg-required="اختر حالة المركبة هذا الحقل ضروري." id="edit-vehicle-status--wrapper" required="required" aria-required="true">
<legend>
<span class="fieldset-legend js-form-required form-required">اختر حالة المركبة</span>
</legend>
<div class="fieldset-wrapper">
          <div id="edit-vehicle-status">
<div class="form-item js-form-item form-type-radio js-form-type-radio form-item-vehicle-status js-form-item-vehicle-status radio">




<label for="edit-vehicle-status-0" class="control-label option"><input data-drupal-selector="edit-vehicle-status-0" class="form-radio" type="radio" id="edit-vehicle-status-0" name="vehicle_status" value="0" checked="checked" />تحمل إستمارة</label>


</div>

<div class="form-item js-form-item form-type-radio js-form-type-radio form-item-vehicle-status js-form-item-vehicle-status radio">




<label for="edit-vehicle-status-1" class="control-label option"><input data-drupal-selector="edit-vehicle-status-1" class="form-radio" type="radio" id="edit-vehicle-status-1" name="vehicle_status" value="1" />تحمل بطاقة جمركية</label>


</div>

<div class="form-item js-form-item form-type-radio js-form-type-radio form-item-vehicle-status js-form-item-vehicle-status radio">




<label for="edit-vehicle-status-2" class="control-label option"><input data-drupal-selector="edit-vehicle-status-2" class="form-radio" type="radio" id="edit-vehicle-status-2" name="vehicle_status" value="2" />مركبة غير سعودية</label>


</div>
</div>

    </div>
</fieldset>


<div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-chassis-number js-form-item-chassis-number form-group">
<label for="edit-chassis-number" class="control-label js-form-required form-required">رقم الهيكل</label>


<input data-drupal-selector="edit-chassis-number" class="form-text required form-control" data-msg-maxlength="الحد الأقصى لطول الحقل رقم الهيكل هو 128." data-msg-required="هذا الحقل ضروري" type="text" id="edit-chassis-number" name="chassis_number" value="" size="60" maxlength="128" placeholder="ادخل رقم الهيكل" required="required" aria-required="true" />



</div>


<div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-serial-number js-form-item-serial-number form-group">
<label for="edit-serial-number" class="control-label">الرقم التسلسلي</label>


<input data-drupal-selector="edit-serial-number" class="form-text form-control" data-msg-maxlength="الحد الأقصى لطول الحقل الرقم التسلسلي هو 128." data-msg-required="هذا الحقل ضروري" type="text" id="edit-serial-number" name="serial_number" value="" size="60" maxlength="128" placeholder="ادخل الرقم التسلسلي" data-drupal-states="{&quot;visible&quot;:{&quot;:input[name=\u0022vehicle_status\u0022]&quot;:{&quot;value&quot;:0}},&quot;required&quot;:{&quot;:input[name=\u0022vehicle_status\u0022]&quot;:{&quot;value&quot;:0}},&quot;invisible&quot;:{&quot;:input[name=\u0022vehicle_status\u0022]&quot;:{&quot;!value&quot;:0}},&quot;optional&quot;:{&quot;:input[name=\u0022vehicle_status\u0022]&quot;:{&quot;!value&quot;:0}}}" />



</div>


<div class="form-item js-form-item form-type-textfield js-form-type-textfield form-item-customs-number js-form-item-customs-number form-group">
<label for="edit-customs-number" class="control-label">البطاقة الجمركية</label>


<input data-drupal-selector="edit-customs-number" class="form-text form-control" data-msg-maxlength="الحد الأقصى لطول الحقل البطاقة الجمركية هو 128." data-msg-required="هذا الحقل ضروري" type="text" id="edit-customs-number" name="customs_number" value="" size="60" maxlength="128" placeholder="ادخل رقم البطاقة الجمركية" data-drupal-states="{&quot;visible&quot;:{&quot;:input[name=\u0022vehicle_status\u0022]&quot;:{&quot;value&quot;:1}},&quot;required&quot;:{&quot;:input[name=\u0022vehicle_status\u0022]&quot;:{&quot;value&quot;:1}},&quot;invisible&quot;:{&quot;:input[name=\u0022vehicle_status\u0022]&quot;:{&quot;!value&quot;:1}},&quot;optional&quot;:{&quot;:input[name=\u0022vehicle_status\u0022]&quot;:{&quot;!value&quot;:1}}}" />



</div>

<div data-drupal-selector="edit-actions" class="form-actions form-group js-form-wrapper form-wrapper" id="edit-actions">    <div  data-drupal-selector="edit-captcha" class="captcha"><input data-drupal-selector="edit-captcha-sid" type="hidden" name="captcha_sid" value="5778785" /><input data-drupal-selector="edit-captcha-token" type="hidden" name="captcha_token" value="sZvNNFY8KRGhF8uJVRqxzsM5vRIdcgj2Ii7sJkG44eI" /><input data-drupal-selector="edit-captcha-response" type="hidden" name="captcha_response" value="Google no captcha" /><div class="g-recaptcha" data-sitekey="6LfiCOIcAAAAAH1LQ0UiOMqGc8sQ-PPuLSieK0sb" data-theme="light" data-type="image"></div><input data-drupal-selector="edit-captcha-cacheable" type="hidden" name="captcha_cacheable" value="1" /></div>
<button data-drupal-selector="edit-submit" class="button js-form-submit form-submit btn-primary btn icon-before" type="submit" id="edit-submit" name="op" value="بحث"><span class="icon glyphicon glyphicon-search" aria-hidden="true"></span>
بحث</button></div>

</div><!-- #inspection_status -->
</div><!-- .col -->
</div><!-- .row -->

</form>


</div>

                              </section>
      </div><!-- .row -->
  </div><!-- .container -->
</div><!-- .main-container -->

@endsection