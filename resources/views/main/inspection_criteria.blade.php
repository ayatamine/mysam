@extends('layouts.main')
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
    <h1 class="page-header">بنود الفحص الفني الدوري</h1>

<div id="inspection-criteria">
<div class="panel panel-default">
<div class="panel-heading panel-heading-nav">
  <ul class="nav nav-tabs">
    <li role="presentation" class="active">
      <a href="#external" aria-controls="external" role="tab" data-toggle="tab">فحص اجزاء المركبة الخارجية</a>
    </li>
    <li role="presentation">
      <a href="#internal" aria-controls="internal" role="tab" data-toggle="tab">فحص اجزاء المركبة السفلية</a>
    </li>
  </ul>
</div>
<div class="panel-body">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="external">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj1">
              لون المركبة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj1" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                اللون الأساسي للمركبة بدأ بالتلاشي (البهتان) بسبب العوامل الجوية مما يؤثر على المظهر العام للمركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الدهان الذاتي غير المهني للمركبة باستخدام الفرشاة أو باستخدام علب الرش اليدوية
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم مطابقة لون المركبة الأساسي لما هو مذكور في وثيقة المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                المركبة تحمل أكثر من لون بينما اللون السائد غير مذكور في وثيقة المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj5">
              الرقم المميز للمركبة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj5" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود عبث (تزوير) للرقم المميز للمركبة المحفور من المصنع
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الرقم المميز للمركبة المدون في الاستمارة لا يطابق الرقم الأصلي المحفور علي جسم المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الرقم المميز للمركبة المحفور علي جسم المركبة غير قابل للقراءة بوضوح.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الرقم المميز للمركبة المحفور على جســـم المركبة غير موجود أو تم تغطيته بالكامل بسبب التعديل على جسم المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj9">
              اللوحات المعدنية للمركبة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj9" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                يمكن قبول لوحة واحدة إذا قام المراجع بإبراز خطاب يفيد بأن اللوحة المفقودة تحت التصنيع.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                اللوحة غير مقروءة أو مرئية من مسافة 20 متر
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                اللوحة غير مقروءة بسب طمس بعض الحروف أو الأرقام أو بسبب العوامل الجوية مما يؤدي إلى فقدان المادة العاكسة
                لسطح اللوحة أو أرقامها وحروفها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إحدي اللوحتين أو كليهما غير مثبتة بإحكام نتيجة ارتخاء المسامير المثبتة لها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إحدى لوحات المركبة أو كليهما مفقودة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                اللوحة غير أصلية أو تم تصنيعها من جهة غير معتمدة (مثل اللوحات البلاستيكية، أو المعدنية، أو الخشبية)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أي خطأ في أرقام أو حروف أو لون اللوحة بحيث لا تتطابق مع وثيقة المركبة وصنفها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj16">
              نقاط تثبيت جسم المركبة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj16" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان أحد البراغي أو الصواميل أو عوارض التثبيت
              </td>
              <td>
                للشاحنات
              </td>
            </tr>
            <tr>
              <td>
                وجود مناطق لحام ضعيفة حول مناطق التثبيت
              </td>
              <td>
                للشاحنات
              </td>
            </tr>
            <tr>
              <td>
                وجود إضافات لترقيع جسم المركبة غير محددة من قبل الشركة المصنعة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود ميلان لأحد الجوانب بمقدمة المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود عوارض أو قواطع مفصولة أو غير
                مثبتة أو صواميل غير ثابتة (مرتخية).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تشقق أو انفصال الجزء المطاطي
                لقواعد مخمد الصدمات (المساعد.)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تشققات أو كسور في الهيكل الداخلي للمركبة
                حول مناطق تثبيت الجسور والقواطع.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj23">
              مجموعة الاسطوانة الرئيسية
              للفرامل وخزان سائل الفرامل
            </button>
          </h4>
        </div>
        <div id="CriteriaObj23" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود تسريب لزيت الفرامل من الاسطوانة الرئيسية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                غطاء علبة سائل الفرامل مفقودة أو تم استبداله بغطاء غير مناسب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تعديل في خطوط الاسطوانة الرئيسية للفرامل أو تركيبتها الأساسية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استبدال الأنابيب الأصلية لأسطوانة الفرامل بأخرى نحاسية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                اسطوانة الفرامل الرئيسية غير ثابتة أو مرتخية التثبيت
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود أي تهريب للهواء في وصلات الفرامل الهوائية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنابيب الفرامل ملتوية أو مضروبة مما يعيق حركة السائل بداخلها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنابيب أو وصلات الفرامل متآكلة من الصدأ.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تلف الوصلات الكهربائية لنظام مانع الانغلاق ABS.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                المؤازر الرئيسي للأسطوانة الرئيسية للفرامل لا يعمل أو لا يستجيب للضغط على دواسة الفرامل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مستوى سائل الفرامل بالخزان أقل من الحد الأدنى المحدد من قبل الشركة الصانعة والمبين على الخزان.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj34">
              أسلاك التوصيل الكهربائي
              الرئيسية (النظام الكهربائي)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj34" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                استخدام بطارية كبيرة الحجم وغير مناسبة للقاعدة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مربط البطارية مفقود أو غير مناسب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب مرتخي لبادئ الحركة (السلف)
              </td>
              <td>
                الحافلات المتوسطة والكبيرة
              </td>
            </tr>
            <tr>
              <td>
                أسلاك التوصيل الأرضي عارية وغير معزولة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب غير ثابت (مرتخي) للأجزاء الكهربائية مثل منظم الجهد أو صندوق الفيوزات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                انهيار قاعدة البطارية مما يؤدي إلى انخلاعها من مكانها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                شقوق في جسم البطارية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                بادئ الحركة (السلف) يصدر أصوات اً ولا يعشق جيدا أو لا يدير المحرك بسبب ضعف البطارية
              </td>
              <td>
                الحافلات المتوسطة والكبيرة
              </td>
            </tr>
            <tr>
              <td>
                ارتخاء قاعدة تثبيت البطارية مما يسبب حركتها وعدم ثباتها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                حدوث شرارة من الأجزاء الكهربائية ( ملف الإشعال ، صندوق الفيوزات).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj44">
              الأنوار الأمامية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj44" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                النور الأمامي مفقود كلياً
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استخدام لمبات ملونة للأنوار الأمامية (أصفر أو غيره)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب أنوار أمامية غير متماثلة من حيث الشكل والحجم والموضع مقارنة بالطرف الآخر ( الأيمن والأيسر ).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود فرق واضح في السطوع وشدة الإضاءة لأحد الأنوار مقارنة بالطرف الآخر
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب غطاء أو شبك يحجب النور أو جزء منه أو يخفض قدرة النور.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تثبيت الأنوار الأمامية بطريقة مقلوبة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                زجاجة النور مكسورة (خرق يزيد قطره عن 3 مم) أو كسر طولي أو عرضي يزيد عن 50 % من الطول أو العرض
                القياسي للنور.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                العاكسة الداخلية للنور باهتة أو متسخة نتيجة وجود الماء أو التراب أو الصدأ بما يزيد عن 50 % من
                مساحة النور الداخلية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب عواكس داخلية للنور من ورق القصدير أو دهان العاكسة الداخلية للتغطية أو إخفاء الصدأ.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الأنوار الأمامية غير موزونة التوجيه بسبب ارتخاء قاعدتها أو خلل ذراع التوجيه.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                السطح الخارجي لزجاج الأنوار باهتاً أو محبباً نتيجة تأثره بالأتربة والرمال بحيث لا يمكن رؤية
                اللمبات أو العواكس الداخلية للنور.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أحد الأنوار أو كليهما لا يعمل سواء للنور العالي أو المنخفض.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أغطية الأنوار الأمامية لا تفتح أو تفتح جزئياً. (ينطبق على الأنوار المزودة بأغطية تفتح
                أوتوماتيكياً).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                توصيل خاطئ لدائرة النور الأمامي مع أجزاء أخرى
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تغطية زجاج الانوار الأمامية بلاصق ملون يمكن إزلته بسهوله.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj59">
              أنوار الضباب
            </button>
          </h4>
        </div>
        <div id="CriteriaObj59" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                ألوانها متعددة غير اللون الأبيض والأصفر.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                زجاج الأنوار الإضافية مكسور.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إحدى الأنوار الإضافية أو كلاهما لا تعمل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj62">
              أنوار الانتظار
            </button>
          </h4>
        </div>
        <div id="CriteriaObj62" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                أنوار الانتظار مفقودة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                زجاجة نور الوقوف مكسورة بمساحة لا تقل عن 6 سم مربع بما يؤدي إلى رؤية اللمبة الداخلية بشكل
                واضح.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إحدى أنوار الانتظار أو كلاهما لا تعمل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الانتظار تؤشر مع الإشارة أو مع المؤشرات التحذيرية الأربعة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj66">
              أنوار الإشارات الأمامية والجانبية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj66" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان أحد أطراف الإشارات الأمامية أو الجانبية كلياً.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الزجاجة الخارجية لأنوار الإشارة الأمامية ليست برتقالية (ويمكن قبول الزجاجة البيضاء إذا كان
                لون اللمبات الداخلية برتقاليا).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                معدل ومضة أنوار الإشارة بطيء (أقل من 30 ومضة بالدقيقة) .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود غطاء خارجي أو دعامات تعيق رؤية أنوار الإشارة بوضوح (أكثر من 50 % من مساحة الإشارة
                مغطاة).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                نور الإشارة المنبعث ضعيف بسبب وجود التراب أو الغبار داخل أنوار الإشارة أو بسبب دهان يدوي
                لزجاجة الإشارة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                زجاجة أنوار الإشارة مثبتة بطريقة مقلوبة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود فراغات في التثبيت بين أنوار الإشارة وجسم المركبة ينتج عنه شعاع نور ابيض مما يسمح بدخول
                الغبار والماء إلى السطح الداخلي للإشارة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسر وفقدان لجزء من زجاج الإشارة بما يزيد عن 6 سم مربع من مساحة الإشارة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب أنوار الإشارة مرتخي وغير ثابت بسبب فقدان مسامير التثبيت.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                غطاء الإشارات الخارجي باهت اللون نتيجة تعرضه للشمس.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الإشارة لا تعمل كلياً على أحد أو كلا الجانبين.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الإشارة الأمامية الجانبية الإضافية لا تعمل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj78">
              أنوار التوقف المفاجئ
              (التحذير من وجود خطر)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj78" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان أحد أطراف الإشارات الأمامية أو الخلفية كلياً.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الزجاجة الخارجية لأنوار الإشارة الأمامية ليست برتقالية (ويمكن قبول الزجاجة البيضاء إذا كان
                لون اللمبات الداخلية برتقاليا).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                معدل ومضة أنوار الإشارة بطيء (أقل من 30 ومضة بالدقيقة) .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود غطاء خارجي أو دعامات تعيق رؤية أنوار الإشارة بوضوح (أكثر من 50 % من مساحة الإشارة
                مغطاة).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                نور الإشارة المنبعث ضعيف بسبب وجود التراب أو الغبار داخل أنوار الإشارة أو بسبب دهان يدوي
                لزجاجة الإشارة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                زجاجة أنوار الإشارة مثبتة بطريقة مقلوبة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود فراغات في التثبيت بين أنوار الإشارة وجسم المركبة ينتج عنه شعاع نور ابيض مما يسمح
                بدخول الغبار والماء إلى السطح الداخلي للإشارة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسر وفقدان لجزء من زجاج الإشارة بما يزيد عن 6 سم مربع، وبما يزيد عن 10 سم مربع
                للإشارة الخلفية من مساحة الإشارة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب أنوار الإشارة مرتخي وغير ثابت بسبب فقدان مسامير التثبيت.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                غطاء الإشارات الخارجي باهت اللون نتيجة تعرضه للشمس.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الإشارة لا تعمل كلياً على أحد أو كلا الجانبين.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj89">
              أداة التنبيه الصوتي للمركبة (البوق)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj89" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                أداة التنبيه الصوتية (البوق) مفقودة كلياً أو لاتعمل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مفتاح تشغيل أداة التنبيه الصوتية (البوق) لا يعمل بسهولة ويحتاج إلى الضغط والشدة ليستجيب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أداة التنبيه الصوتية (البوق) سائباً أو عدم أدائه بطريقة جيدة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استخدام بوق يعطي أصواتاً ليست مصنفة لاستخدام المركبات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عمل توصيلات أو تعديلات إضافية تؤدي إلى تشغيل أداة التنبيه الصوتية (البوق) باستخدام مفتاح
                بديل وذلك بعد إلغاء المفتاح الأصلي للبوق.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عمل البوق ضعيف وغير مسموع جيدا أو يتأثر بصوت ماكينة المركبة عند الضغط عليه .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj95">
              زجاج المركبة ( الزجاج الأمامي ، الزجاج الخلفي ، زجاج النوافذ)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj95" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان أي جزء من زجاج المركبة ( الزجاج الأمامي ، الزجاج الخلفي ، زجاج النوافذ).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استخدام زجاج من نوعية غير معتمدة (غير آمن) وذلك وفقاً للمواصفات المطبقة لزجاج
                المركبات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استبدال الزجاج المكسور بمواد غير معتمدة مثل البلاستيك أو الخشب أو شرائح الحديد.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب زجاج المركبة بشكل غير ثابت
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسور أو شقوق أو ثقوب أو ضربة حجر في الزجاج الأمامي .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسور أو شقوق أو ثقوب أو ضربة حجر في الزجاج الخلفي
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تشوه الرؤيا الأمامية بسبب وجود فقاعات حرارية في الزجاج الأمامي.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عيوب في الزجاج الأمامي تؤثر على الرؤيا ناتجة عن الترميل أو الخدوش
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj103">
              مساحات و غسيل الزجاج الأمامي والخلفي
            </button>
          </h4>
        </div>
        <div id="CriteriaObj103" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان أحد أجزاء المساحات
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                انحناء أو اعوجاج ذراع المساحة مما يؤدي إلى عدم تلامس الشفرات بشكل تام مع سطح الزجاج.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                المساحات لا تعمل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم توقف المساحات عند توقيفها من المفتاح المخصص.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تلف في الأجزاء المعدنية لماسكات الشفرات أو الأذرع.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود عائق يؤدي إلى عدم اكتمال شوط المساحة عند التشغيل مما يؤثر على رؤية السائق.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الشفرات التالفة (تمزق المطاط الماسح بالشفرة).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان خزان سائل غسيل الزجاج.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مساحات الزجاج لا تعمل .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj112">
              التظليل والتعتيم للزجاج الأمامي والخلفي وزجاج الأبواب
            </button>
          </h4>
        </div>
        <div id="CriteriaObj112" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تركيب تظليل أو ملصقات معتمة أو تعتيم غير مصرح بها للمركبات
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب تظليل أو ملصقات معتمة غير مصرح بها تؤثر على وضوح الرؤيا من الأسطح الزجاجية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj114">
              مرايا الرؤية الجانبية والمرآة الداخلية للرؤيا الخلفية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj114" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان إحدى المرايا الجانبية أو كليهما لأي نوع من المركبات بغض النظر عن موديل
                المركبة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود شرخ أو كسور في سطح إحدى المرايا الجانبية أو كليهما أو مرآة الرؤيا الداخلية
                مما يؤدي إلى ثنائية الصورة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تشويه أو تعتيم بسطح المرآة الجانبية يؤدي إلى عدم وضوح الرؤيا الخلفية أو
                الجانبية
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم تثبيت أي جزء من أجزاء مرايا الرؤية بطريقة جيدة مما يؤدي إلى الاهتزاز أثناء
                حركة المركبة بحيث لا تثبت على وضع معين أو لا تبقى في مكان محدد بعد ضبطها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم إمكانية تثبيت المرآة الداخلية للرؤيا الخلفية مما يعيق الرؤية إلى الخلف على
                جميع الطرق وبمسافة لا تقل عن60 متر .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj119">
              العاكسات الخلفية والجانبية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj119" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                عدم وجود عاكسات للحافلات والشاحنات التي يزيد عرضها على ( 2.1 ) متر بعدد واحدة
                على لأقل على كل جانب وعلى المؤخرة.
              </td>
              <td>
                الشاحنات والحافلات المتوسطة والكبيرة
              </td>
            </tr>
            <tr>
              <td>
                عاكسات الحافلة أو الشاحنة غير مرئية من مسافة 20 متر.
              </td>
              <td>
                الشاحنات والحافلات المتوسطة والكبيرة
              </td>
            </tr>
            <tr>
              <td>
                عاكسات الشاحنة أو الحافلة مكسورة أو لا تعكس.
              </td>
              <td>
                الشاحنات والحافلات المتوسطة والكبيرة
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj122">
              الأبواب ومفصلاتها وغطاء المحرك وغطاء الصندوق الخلفي و فتحة السقف (إن وجدت)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj122" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان أو إزالة أحد الأجزاء الرئيسية المكونة لجسم المركبة والتي تؤثر على
                تماسكها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان أو كسر أو تعديل على أحد مقابض الأبواب بحيث يصعب إحكام غلقها أو سهولة
                فتحها أو فقدان قفل المفتاح.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم مقدرة مزلاج غطاء المحرك على إحكام غلق الغطاء وبقاؤه في حالة إغلاق تام.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم كفاءة عمل مزلاج أمان غطاء المحرك أو المزلاج الثانوي بطريقة سليمة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                كسر أو نقص أو عدم ضبط أحد أجزاء فتح مزلاج غطاء المحرك بحيث يتعذر فتح وغلق
                الغطاء بسهولة وأمان.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تلف أو تآكل الأبواب بسبب الصدأ ، تلف أو تأكل أحد مفصلات الأبواب مما يؤدي إلى
                وجود حركة حرة (خلوص) في الباب عند الغلق أو الفتح.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تلف أو تآكل الأبواب بسبب الصدأ ، تلف أو تأكل أحد مفصلات الأبواب مما يؤدي إلى
                وجود حركة حرة (خلوص) في الباب عند الغلق أو الفتح.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                كسر أو شقوق في فتحة السقف (للمركبات المزودة بها) مما يؤدي إلى تسرب الماء إلى
                داخل المركبة أو عدم إمكانية قفلها إن كانت مفتوحة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم إمكانية قفل أو فتح أحد الأبواب أو غطاء المحرك أو غطاء الصندوق الخلفي
              </td>
              <td>
                مركبات الركوب
              </td>
            </tr>
            <tr>
              <td>
                النوافذ الأمامية لا تفتح أو لا تقفل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                قفل باب الطوارئ الخارجي لا يفتح أو يمكن فتحه فجأة بدون تأثير قوة عليه
              </td>
              <td>
                الحافلات الكبيرة
              </td>
            </tr>
            <tr>
              <td>
                مقبض رفع وتنزيل النافذة اليدوية مفقود
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj134">
              الإطارات
            </button>
          </h4>
        </div>
        <div id="CriteriaObj134" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                الإطارات المثبتة على نفس المحور مختلفة من حيث المقاس (ويشمل ذلك العرض
                والارتفاع) أو مختلفة من حيث التصميم (التصميم القطري أو الشعاعي).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مقاس الإطارات المثبتة على المحور الخلفي أكبر من مقاس الإطارات المثبتة على
                المحور الأمامي بنسبة تزيد عن 15 % ما لم يكون تصميم المركبة الأصلي بهذا
                الشكل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استخدام إطارات ذات معامل حمل لا يتناسب وزن المحور مع الحمولة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استخدام إطارات ذات رمز سرعة لا تتناسب مع السرعة القصوى الموصى بها للمركبة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تجديد الإطارات (إعادة تصنيع أو تلبيس) للإطارات غير القابلة للتجديد.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود إصلاح مقطعي (رقعة تيوبلس) في جدار الإطار.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                بروز الإطارات من جسم المركبة عن حافة الرفرف الأمامي.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الإطار الاحتياطي تالف أو غير موجود أو ضغط الهواء منخفض أو مختلف المقاس أو
                بغير موقعه.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو تلف الإطارات ويشمل ذلك المسح والقطع والتحبيل والتشقق.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الإطارات الرملية أو إطارات البالون المصنوعة من النايلون (Nylon)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj144">
              العجلات وصواميلها
            </button>
          </h4>
        </div>
        <div id="CriteriaObj144" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                مسامير وصواميل العجلات مفقودة أو قصيرة أو تالفة لأي من العجلات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                العجلات مختلفة في التصميم أو مادة التصنيع على أي من المحاور باستثناء
                العجلات ذات التصميم المزدوج (إطارين لنفس العجلة).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                انبعاج أو التواء أو كسر أو إعادة لحام لأي جزء من العجلة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استطالة (توسع) ثقوب لأي من مسامير وصواميل العجلة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب ملحقات بارزة على مركز العجلة تؤثر على المشاة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مسامير أو صواميل العجلات مرتخية لأي من العجلات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj150">
              مؤشرات لوحة القيادة (مؤشرات الطبلون)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj150" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود كسور تمنع التشغيل أو استقرار التشغيل بمفتاح الأنوار الامامية أو
                مفتاح اشارات الانعطاف/الدوران أو مفتاح الأنوار التحذيرية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود خلل في عمل مؤشر قياس ضغط الهواء (لمبة التحذير) وعدم تجاوبها
                للتشغيل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان أو وجود خلل في مؤشر عداد السرعة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                توصيل خاطئ ( التماس) يؤثر على عمل الأجزاء الأخرى بما فيها التبديل بين
                المفاتيح
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj154">
              الماكينة (المحرك) وسيور الماكينة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj154" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                أي تعديل في نوعية الماكينة من بنزين إلى ديزل أو العكس أو من ماكينة
                ذات سعة صغيرة إلى ماكينة ذات سعة أكبر وبالعكس.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أي فقدان أو تلف أو تشقق في سيور ماكينة حافلات النقل العام المتوسطة
                والكبيرة ويشمل ذلك سيور مروحة التبريد أو سيور المولد أو سيور مضخة
                الدركسيون أو بادئ الحركة.
              </td>
              <td>
                حافلات النقل العام المتوسطة والكبيرة فقط
              </td>
            </tr>
            <tr>
              <td>
                أي إزالة لخراطيم وليات الهواء الموصولة مع نظام الكربوريترأو مع نظام
                الحقن بهدف التأثير على نتيجة اختبار غازات العادم.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أي إزالة لفلتر الهواء بهدف التأثير على نتيجة اختبار غازات العادم
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj158">
              الأنوار الخلفية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj158" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                أحد جوانب النور الخلفي أو كلاهما مفقود كلياً
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                لون زجاج الأنوار الخلفية ليس احمر
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                موقع تركيب الأنوار الخلفية خاطئ
              </td>
              <td>
                الشاحنات
              </td>
            </tr>
            <tr>
              <td>
                الأنوار الخلفية غير واضحة تماماً للرؤيا من الخلف بما يزيد عن 50 %
                من مساحتها نتيجة تغطيتها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود فراغات بين زجاجة النور الخلفي وجسم المركبة مما يؤدي إلى بروز
                الشعاع الداخلي للنور وكذلك دخول الماء والتراب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الزجاجة الخارجية للنور الخلفي مكسورة أو مثقوبة بما يزيد عن مساحة
                10 سم مربع.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب الأنوار الخلفية غير ثابتة أو مرتخية التركيب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إحدى جوانب النور الخلفي أو كلاهما لا تعمل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj166">
              أنوار السير للخلف
              (الريويس) / لوحة الارقام
            </button>
          </h4>
        </div>
        <div id="CriteriaObj166" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                إحدى أنوار الرجوع إلى الخلف أو كلاهما / لوحة الأرقام مفقودة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الرجوع إلى الخلف أو نور اللوحة الخلفية ليست بيضاء (ملونة).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الرجوع إلى الخلف أو نور اللوحة الخلفية مكسورة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الرجوع إلى الخلف تبقى مضاءة عند تحرك المركبة إلى الأمام.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب كشاف خلفي كبديل عن وجود أنوار الرجوع إلى الخلف
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                نور اللوحة الخلفية موجودة لكنها لا تعمل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj172">
              أنوار إشارات الدوران/ الإنعطاف الخلفية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj172" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان أحد اطراف أنوار إشارات الدوران/الانعطاف الخلفية كلياً.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الزجاجة الخارجية لأنوار إشارات الدوران/الانعطاف الخلفية ليست
                برتقالية أو حمراء (ويمكن قبول الزجاجة البيضاء إذا كان لون
                اللمبات الداخلية برتقالية).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                معدل ومضة أنوار الإشارة بطيء (أقل من 30 ومضة بالدقيقة).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود غطاء خارجي أو دعامات/صدمات تعيق رؤية أنوار الإشارة بوضوح.
                (أكثر من 50 % من مساحة الإشارة مغطى).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                نور الإشارة المنبعث ضعيف بسبب وجود التراب أو الغبار داخل أنوار
                الإشارة أو بسبب دهان يدوي لزجاجة الإشارة أو بسبب استخدام لمبات
                قليلة الجهد ..... الخ.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                زجاجة أنوار الإشارة مثبتة بطريقة مقلوبة مما ينتج عنها توجيه
                خاطئ للإشارات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود فراغات في التثبيت بين أنوار الإشارة وجسم المركبة ينتج عنه
                شعاع نور ابيض مما يسمح بدخول الغبار والماء إلى السطح الداخلي
                للإشارة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسر وفقدان لجزء من زجاج الإشارة بما يزيد عن 10 سم مربع من
                مساحة الإشارة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب أنوار الإشارة مرتخي وغير ثابت بسبب فقدان مسامير التثبيت
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                غطاء انوار الإشارة الخارجية باهتة اللون نتيجة تعرضه للشمس مما
                يؤدي إلى ضعف شدة الإضاءة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الإشارة لا تعمل كلياً على أحد الجوانب أو كلاهما
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عمل أنوار الإشــارات غير متناســق ينتج عنه توجيه خاطئ للإشارات
                نتيجة وجود التماس مع أنوار أخرى .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse" data-target="#CriteriaObj184">
              أنوار الفرامل
            </button>
          </h4>
        </div>
        <div id="CriteriaObj184" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                أحد جوانب أنوار الفرامل أو كلاهما مفقود كلياً
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                لون الزجاجة الخارجية أنوار الفرامل ليس أحمر (بسبب البهتان من
                الشمس أو بسبب وجود ملصقات ملونة على زجاج نور الفرامل)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                موقع تركيب أنوار الفرامل خاطئ
              </td>
              <td>
                الشاحنات
              </td>
            </tr>
            <tr>
              <td>
                أنوار الفرامل غير واضحة تماماً للرؤيا من الخلف بما يزيد عن
                50 % من مساحتها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إضاءة أنوار الفرامل ضعيفة بسبب استخدام شمعات إضاءة ذات جهد
                أقل أو أي سبب آخر يؤدي إلى ضعف الإضاءة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود فراغات في التثبيت بين أنوار الإشارة وجسم المركبة ينتج
                عنه شعاع نور ابيض
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الزجاجة الخارجية لأنوار الفرامل مكسورة أو مثقوبة بما يزيد عن
                مساحة 10 سم مربع.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب أنوار الفرامل غير ثابتة أو مرتخية التركيب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إحدى جوانب أنوار الفرامل أو كلاهما لا تعمل (غير مضاءة).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                العدسة الثالثة لأنوار الفرامل تعمل مع أنوار الإشارات أو مع
                الأنوار الخلفية
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                العدسة الثالثة لأنوار الفرامل لا تعمل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse" data-target="#CriteriaObj195">
              كثافة دخان المحرك
            </button>
          </h4>
        </div>
        <div id="CriteriaObj195" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                خروج دخان كثيف من محرك مركبات البنزين (سواء كان لون الدخان
                اسود أو ابيض أو ازرق).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                خروج دخان كثيف من محرك مركبات الديزل (الدخان الأبيض فقط)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj197">
              عجلة القيادة وعمودها
            </button>
          </h4>
        </div>
        <div id="CriteriaObj197" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تعديل على التصميم الأصلي لعجلة القيادة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسور أو تشوهات أو التواء بعجلة القيادة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود حركة حرة (خلوص) نتيجة تآكل أو اهتراءات بأجزاء عجلة
                القيادة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل غطاء عجلة القيادة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إحداث أصوات (صرير) عند تحريك أو تدوير عجلة القيادة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                صعوبة تحريك عجلة القيادة أو تدويرها يسارا ويميناً.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عجلة القيادة لا تعود لمكانها الأصلي بعد التحريك يميناً
                أو يسارا
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj204">
              أحزمة الأمان
            </button>
          </h4>
        </div>
        <div id="CriteriaObj204" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                أحزمة الأمان للسائق والراكب الأمامي مفقودة للمركبات من
                موديل 1982 فما فوق
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تنسيل أو تآكل أو تمزق في شريط حزام الأمان
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم كفاءة أداء إبزيم الحزام من حيث قابلية السحب
                والرجوع إلى الوضع الأصلي
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم ربط مثبتات حزام الأمان أو وجود نقص في أجزائها أو
                وجود صدأ شديد بها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إبزيم الحزام لا يعمل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj209">
              المقاعد وحواجز المقاعد
            </button>
          </h4>
        </div>
        <div id="CriteriaObj209" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                مقاعد مفقودة أو تم إزالتها إذا كانت المركبة مجهزة
                بها أصلا
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم ربط مسامير ومثبتات المقاعد في أرضية المركبة بوضع
                آمن لأي سبب كان أو وجود نقص في المسامير المثبتة
                للمقعد
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                المقاعد التي يمكن أن تتحرك بشكل فجائي بدون استخدام
                يد أو مفتاح الحركة الخاص بها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تمزق غطاء المقعد ووسائد المقعد (الإسفنج الاصطناعي)
                يؤدي إلى بروز الهيكل المعدني للمقعد.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان الحواجز الخلفية لمقعد السائق أو كسور في
                الحواجز أو صدأ مثبتاتها أو ظهور صدأ في مثبتاتها أو
                ارتخائها
              </td>
              <td>
                للحافلات فقط
              </td>
            </tr>
            <tr>
              <td>
                فقدان الحواجز الجانبية بجانب أبواب الخروج أو كسور في
                الحواجز الجانبية أو ظهور صدأ في مثبتاتها أو ارتخائها
              </td>
              <td>
                للحافلات فقط
              </td>
            </tr>
            <tr>
              <td>
                فقدان الحواجز الخلفية لمقعد السائق أو كسور في
                الحواجز أو صدأ مثبتاتها أو ظهور صدأ في مثبتاتها أو
                ارتخائها
              </td>
              <td>
                للحافلات فقط
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj216">
              دواسة الفرامل
            </button>
          </h4>
        </div>
        <div id="CriteriaObj216" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود ليونة في الدعسة (الدعسة الأسفنجية)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عند الضغط على دواسة الفرامل، تكون المسافة المتبقية
                ¼ أقل الارتفاع الكلي للدواسة .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                دواسة الفرامل (صعبة أو ثقيلة) تحتاج إلى الضغط
                عليها بقوة حتى تستجيب
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الحركة الحرة للدواسة منعدمة (متحجرة) أو تزيد عن 10
                مم.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود التواء أو ضربة بدواسة الفرامل مما يعيق حركتها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود ارتخاء (عدم التثبيت جيداً) بأجزاء ومكونات
                الدواسة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان جلدة (ربلة) دواسة الفرامل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj223">
              فرملة اليد
            </button>
          </h4>
        </div>
        <div id="CriteriaObj223"
             class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                عتلة سحب أو تفعيل فرملة الوقوف مفقودة أو غير
                متوفرة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود خلل أو عيوب بعتلة فرملة الوقوف
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                قفل عتلة فرملة الوقوف لا يعمل (لا يستجيب للوقوف)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عتلة فرملة الوقوف مشدودة كلياً ولا يمكن تحريرها
                نتيجة الضبط الخاطئ.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عتلة سحب أو تفعيل فرملة الوقوف تسحب إلى آخر
                الشوط أو آخر حدها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj228">
              فحص الدراجة النارية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj228"
             class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود عيوب ظاهرة في إطارات الدراجة النارية مثل
                اختلاف المقاس أو تآكل أو تلف الإطارات أو تشوه
                العجلة
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                وجود عيوب ظاهرة في أنوار و?اشارات الدراجة
                النارية الأمامية أو الخلفية
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                وجود عيوب ظاهرة في أداة التنبيه الصوتية
                (البوق) للدراجة النارية
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                المرايا الجانبية للدراجة النارية مفقودة
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                وجود عيوب ظاهرة في المرايا الجانبية للدراجة
                النارية مثل أن تكون مفقودة أو مكسورة أو باهتة
                أو مرتخية التثبيت.
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                قاعدة الارتكاز الجانبية أو الوسطى للدراجة
                النارية مفقودة أو لا تعمل
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                ارتخاء الذراع المتغير للدراجة النارية أو مسمار
                المحور أو تأكل الجلب
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                وجود أعمال لحام في مقود الدراجة النارية أو
                أذرع التوجيه
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                وجود خلوص ظاهرة بمقود الدراجة النارية سواء
                خلوص عمودية أو أفقية
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                تعديل غير مخصص لاستخدام الدراجات على أذرع
                التوجيه
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                وجود ارتخاء أو كسور/تشوه أو عدم ثبات بمقود
                الدراجة النارية
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                تهريب زيت من ممتص الصدمات الأمامية أو الخلفية
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                قوة فرملة الدراجة ضعيفة أو غير مناسبة
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                وجود كسور أو تحطم بمقبض الفرملة أو وجود ضربات
                بدواسة الفرامل
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>
            <tr>
              <td>
                تجاوز الحد المسموح به للمستوى الأقصى للضوضاء
                طبقاً للمواصفة القياسية السعودية رقم SASO GSO
                1798
              </td>
              <td>
                جميع أنواع الدراجات النارية
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj243">
              جسم المركبة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj243"
             class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                عدم وجود الصدام الأمامي أو الخلفي أو كليهما
                عندما تكون المركبة مزودة أصلا بالصدامات
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان ربلة نهاية الصدام وبالتالى بروز أجزاء
                حادة تشكل خطرًا علي الآخرين
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان أو إزالة أحد الرفارف بالمركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تعديل في جسم المركبة مما يؤدي إلى عدم
                تماسكها وثباتها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                صدمات بجسم المركبة تزيد عن 50 % لكل مساحة
                معينة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تمزق بأي مساحة من جسم المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الصدمات التي تؤثر على عمل أجزاء معينة من جسم
                المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الصدمات العميقة بما يزيد عن 10 سم في عمقها
                بأي موضع من جسم المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الصدمات التي ينشأ عنها بروز أو أجزاء معدنية
                تؤثر على المشاة بغض النظر عن أبعادها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj252">
              طفاية الحريق ومثلث التحذير وحقيبة الإسعافات
              الأولية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj252"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                عدم وجود طفاية حريق معبأة وصالحة للاستخدام
                بحيث يكون مؤشرها في المنطقة الخضراء
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم وجود مثلث تحذيري بحالة سليمة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                طفاية الحريق ليست مثبتة بشكل جيد أو صعب
                الوصول إليها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم وجود حقيبة إسعافات أولية
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj256">
              نظام الوقود وخزان الوقود
            </button>
          </h4>
        </div>
        <div id="CriteriaObj256"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                خزان الوقود الأساسي أو الاحتياطي ليس من
                النوع المخصص للمركبات
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان غطاء خزان الوقود أو استخدام مواد
                بديلة غير آمنة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب غير ثابت أو مرتخي لخزان الوقود أو
                مكونات نظام الوقود الأخرى ويشمل الخراطيم
                والوصلات نتيجة التآكل أو الاهتراء بقواعد
                التثبيت
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تشقق بخراطيم نظام الوقود
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود ضعف في بنية خزان الوقود
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تهريب من خزان الوقود أو أي من الخراطيم
                والوصلات الخاصة بنظام الوقود
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj262">
              خزان الهواء ومكونات نظام الفرامل
              الهوائية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj262"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود تعديل على نظام الفرامل الهوائية
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل
                الهوائية
              </td>
            </tr>
            <tr>
              <td>
                وجود أعمال إصـلاح بواسـطة اللحام على
                اسـطوانات الفرامل أو أجزائها الأخرى
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل
                الهوائية
              </td>
            </tr>
            <tr>
              <td>
                وجود ضــــــــربات على ســــــــطح
                الخزان تؤثر على حجم الهواء بداخله
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل
                الهوائية
              </td>
            </tr>
            <tr>
              <td>
                تركيـــب غير آمن أو مرتخي لخزان الهواء
                نتيجـــة تلف أو ارتخاء قواعد التثبيت
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل
                الهوائية
              </td>
            </tr>
            <tr>
              <td>
                وجود تسـريب للهواء من الخزان أو
                الوصـلات أو الصـمامات أو أية أجزاء
                أخرى للنظام
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل
                الهوائية
              </td>
            </tr>
            <tr>
              <td>
                وجود ارتخاء أو قطع في سـيور/أحزمة
                الضـاغط المولد للهواء
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل
                الهوائية
              </td>
            </tr>
            <tr>
              <td>
                صمام الاعتاق السريع لا يغلق بإحكام
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل
                الهوائية
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button"
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj269">
              العجلة الخامسة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj269"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود تعديل غير أصلي بوصلة المقطورة
                (العجلة الخامسة) أو قاعدة تثبيتها
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                وصلة المقطورة (العجلة الخامسة) مقيدة
                أو معاقة الحركة أو وجود تثبيت الزوية
                الحركة
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                خلوص في فتحات المسامير التي تثبت
                وصلة المقطورة (العجلة الخامسة) مع
                هيكل القاطرة بسبب الحركة والجهد
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                أي أعمال إصلاح باللحام في وصلة
                المقطورة (العجلة الخامسة)
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                أي فقدان للمسامير المثبتة لوصلة
                المقطورة (العجلة الخامسة) مع الهيكل
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                فقدان مسمار الأمان المثبت لذراع
                التوصيل الخاص بوصلة المقطورة
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                اهتراء أو تآكل مسمار والحلقات
                المعدنية لوصلة المقطورة
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                وجود كسور أو تصدع في هيكل القاطرة
                الإضافي المثبتة عليها وصلة
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                وجود ضعف بارز في تثبيت وصلة المقطورة
                مع الهيكل الأساسي
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                مسامير تثبيت وصلة المقطورة (العجلة
                الخامسة) مع الهيكل مرتخية
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>
            <tr>
              <td>
                كسور في ذراع الوصل أو الفصل (ذراع
                التحرير أو الإعتاق) للقاطرة مع
                المقطورة
              </td>
              <td>
                جميع الشاحنات المجهزة بوصلة ( صينية)
                للمقطورة
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button"
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj280">
              الصدأ والتآكل والاهتراء بجسم المركبة
              وهيكلها الخارجي
            </button>
          </h4>
        </div>
        <div id="CriteriaObj280"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود أماكن صدأ أو اهتراء واضح مما
                يضعف من هيكل المركبة أو أجزائها
                الرئيسية أو أماكن الارتكاز
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button"
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj281">
              التجهيزات الخاصة بسيارات الأجرة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj281"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                عدم وجود إحدى اللوحات التشغيلية
                أو كلاهما لسيارة الأجرة مثبتة
                على الظهر الخلفي لمقعد السائق و
                أمام الراكب في المقعد الأمامي أو
                عدم وضوح كتابتها وعدم إمكانية
                قراءتها
              </td>
              <td>
                سيارات الأجرة العامة
              </td>
            </tr>
            <tr>
              <td>
                كسر أو فقدان أو عدم وجود النور
                التعريفي (تاكسي) على سطح مركبة
                الأجرة
              </td>
              <td>
                سيارات الأجرة العامة
              </td>
            </tr>
            <tr>
              <td>
                النور التعريفي (تاكسي) على سطح
                مركبة الأجرة لا يعمل
              </td>
              <td>
                سيارات الأجرة العامة
              </td>
            </tr>
            <tr>
              <td>
                فقدان أو عدم وجود الشعار
                التعريفي لمركبات الأجرة على
                الأبواب الأمامية الجانبية
                للمركبة
              </td>
              <td>
                سيارات الأجرة العامة
              </td>
            </tr>
            <tr>
              <td>
                عدم وجود أو فقدان طفاية الحريق
              </td>
              <td>
                سيارات الأجرة العامة
              </td>
            </tr>
            <tr>
              <td>
                وجود عبارات غريبة مكتوبة على
                زجاج أو جسم المركبة
              </td>
              <td>
                سيارات الأجرة العامة
              </td>
            </tr>
            <tr>
              <td>
                وجود تظليل على النوافذ الجانبية
                الأمامية أو الخلفية للمركبة
              </td>
              <td>
                سيارات الأجرة العامة
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button"
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj288">
              حواجز الحماية الامامية والجانبية
              والخلفية للشاحنات والمقطورات
            </button>
          </h4>
        </div>
        <div id="CriteriaObj288"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                عدم وجود حواجز حماية بإحدى
                الجوانب أو كليهما
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                عدم وجود حواجز امامية أو خلفية
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                وجود شروخ أو حواف أو زوايا
                حادة بسطح الحواجز
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                حواجز الحماية الجانبية تزيد عن
                عرض المركبة الكلي
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                مواصفات حواجز الحماية الجانبية
                لا تتوافق مع المواصفة الخاصة
                بالحواجز من حيث الابعاد وطريقة
                التثبيت وكذلك اطوال قضبان
                الحماية وارتفاعها أو المسافة
                بين حاجز الحماية والاجزاء
                المثبتة في المركبة
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                حواجز الحماية غير ثابتة
                (مرتخية) أو تهتز اثناء القيادة
                أو الاستعمال العادي للمركبة
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                حواجز الحماية مصنوعة من مواد
                غير مناسبة
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                تثبيت اجزاء غير موصى بها فوق
                حواجز الحماية مثل انابيب
                الهيدروليك أو الهواء
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                عدم وجود شريط فسفوري على
                الحواجز الجانبية والخلفية
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>
            <tr>
              <td>
                عدم وجود لوحة البيانات
                الايضاحية لحواجز الحماية مثل
                الابعاد والمواد المستخدمة
              </td>
              <td>
                جميع الشاحنات والمقطورات التي
                تقوم بنقل البضائع وتزيد
                حمولتها عن
                3.5 طن بما فيها الشاحنات
                المثبت بها صهاريج او رافعات أو
                ورش متنقلة.
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button"
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj298">
              حاجبات الشمس
            </button>
          </h4>
        </div>
        <div id="CriteriaObj298"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                عدم وجود الحاجب
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم امكانية تثبيت حاجب الشمس
                بحيث تقي أعين السائق من
                الشمس
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تغير وضع حاجب الشمس نتيجة
                الاهتزازات الناتجة عن تشغيل
                محرك السيارة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button"
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#CriteriaObj301">
              التلوث الضوضائي
            </button>
          </h4>
        </div>
        <div id="CriteriaObj301"
             class="panel-collapse collapse">
          <table
            class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تجاوز الحد المسموح به
                للمستوى الأقصى للضوضاء
                طبقاً للمواصفة القياسية
                السعودية رقم SASO GSO 1624
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div><!-- .tab-pane -->
    <div role="tabpanel" class="tab-pane fade in" id="internal">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj21">
              الوصلات الكروية لنظام التوجيه
            </button>
          </h4>
        </div>
        <div id="CriteriaObj21" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تركيب وصــــــــــلات للأذرعة غير معروفه
                أو التي لا تتوافق مع المواصفات
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                صـــــامولة ربط وصـــــلات الأذرعه مرتخيه أو التيلة مفقودة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وصــلات الأذرعه التالفة تم إصــلاحها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود خلوص للوصــلات ُ عند تحريك مجموعة
                المحملة على زنبركات (سست حلزونية) تزيد عن 1 ملم
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عند تحريك مجموعة الأذرعه يلاحظ وجود خلوص للوصــلات غير المحملة على زنبركات (سست حلزونية) تزيد عن2.5 مم
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#CriteriaObj26">
              قاعدة تركيب صندوق تروس
              عجلة القيادة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj26" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                مســــمار واحد أو أكثر مفقود من مســــامير تثبيت قاعدة صــــندوق التروس.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                صامولة عمود القطاع أو خابور التأمين للصامولة لصندوق تروس التوجيه مفقودة أو مرتخية
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                اهتراء أو تآكل الهيكل عند نقطة تثبيت صندوق تروس التوجيه نتيجة للأكسدة الناجمة عن صدأ الحديد.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                يحدث صـرير (صـــــوت) من صــــندوق تروس التوجيه عندما يتم تحريك عجلة القيادة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الوصلة المفصلية لعمود عجلة القيادة مهتريه أو اللباد ممزق.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                الحركة المحورية (الخلوص الرأســي) لعمود قطاع صــندوق التروس أكثر من 3 مم.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                يوجد خلوص بالجريدة المسننة عند تحريك عجلة القيادة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                يوجد اهتراء بجلب قاعدة تثبيت أســــطوانة الجريدة المســــننة لدائرة التوجيه الهيدروليكية .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj214">
              دائرة التوجيه الهيدروليكية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj214" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تعديل دائرة التوجيه من توجيه يعمل بضـــــــغط الزيت الهيدروليكي المساعد إلى توجيه عادى بدون ضغط زيت
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                خراطيم التوصـــيلات الهيدروليكية تحتك ببعض الأجزاء المتحركة بالمركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تهريب زيت مستمر من توصيلات دائرة التوجيه الهيدروليكية (الخراطيم، الوصلات، اللباد).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                المضخة الهيدروليكية لدائرة التوجيه لا تعمل، أو أي مكون من مكونات الدائرة تالف أو به عطب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj218">
              مجموعة أذرعة التوجيه
            </button>
          </h4>
        </div>
        <div id="CriteriaObj218" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تعديل في أي من أذرعة التوجيه أو إضــافة جزء أو مكون لا صلة له بالتصميم الأصلي للمركبة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود لحام بأي من أذرعة التوجيه.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                خابور تامين الصامولة التاجية مفقود
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj221">
              خراطيم / أنابيب / وصلات الفرامل / وصلات فرملة اليد (الجلنط)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj221" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تعديل في التصميم الأصلي لخطوط الفرامل أو وصلاتها
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقـدان أجزاء ميكانيكية
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                خراطيم نظام الفرامل غير مطابقة لما تم تزويد المركبة به أصلا مما يشكل خطورة على نظام الفرامل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود التواء كبير في خراطيم الفرامل مما يعيق حركة السائل بداخلها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                استخدام أنابيب نحاسية كبديل عن أنابيب الحديد في الفرامل الهوائية.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود خراطيم متشققة أو منتفخة أو مكشوطة أو مقطوعة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنبوب الفرامل مفلطح أو مضروب مما يعيق حركة انتقال الزيت أو الهواء.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أنابيب الفرامل متآكلة من الصدأ أو ملحومة أو يوجد انسداد في الأنابيب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسور في الأجزاء الميكانيكية للأنابيب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود قطع في شعيرات سلك الفرامل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود إصلاح بواسطة اللحام في سلك الفرامل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تهريب في دائرة الفرامل (تهريب زيت أو تهريب هواء).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تلف في الأجزاء الميكـانيكيـة أو الهيـدروليكيـة أو الهوائيـة لنظـام مانع الانغلاق (ABS )
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj234">
              أقراص الفرامل والهوبات واللقم (الفحمات)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj234" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تعديل في التصــــــــميم الأصــــــــلي لأقراص أو هوبات الفرامل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقــدان الغطــاء الخلفي للهوب أو غير ثــابــت أو مرتخي نتيجــة فقدان أحد المسامير المثبتة له
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                المســامير المثبتة للهوبات أو اللقم مرتخية أو غير ثابتة مما يسبب حركة القرص أو الفحمات
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود لحام في ذراع دفع أحذية الفرامل (القماشات)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مسمار ضبط القماشات مرتخي أو غير ثابت
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل فحمات الفرامل بشكل ظاهر (السمك المتبقي أقل من 1 ملم)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تأكل أو ثقوب واضحة في أقراص الفرامل (الهوبات) يزيد على 2 مم
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فحمــات الفرامــل متشربة بالزيت نتيجة تهريب الزيت من اسطوانات الفرامل أو من الدفرنس إلى داخل الفرامل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسور أو شقوق في أقراص أو هوبات الفرامل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj243">
              اسطوانات نظام الفرامل
            </button>
          </h4>
        </div>
        <div id="CriteriaObj243" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تعديل أو تبديل في التصميم الأصلي لأسـطوانات الفرامل(الكاليبر)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان مسمار تثبيت اسطوانة الفرامل (تيلة)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب مرتخي أو غير ثابت لأسـطوانة الفرامل مما يسـبب حركتها عند تفعيل نظام الفرملة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تهريب في دائرة الفرامل سـواء اسـطوانات الفرامل أو تهريب من الأسطوانة الرئيسية لنظام الفرامل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                ذراع الدفع الخاص بأسـطوانة الفرامل محجوز أو متصلب بدون حركة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل جلب ذراع الدفع الخاص بأسطوانة الفرامل أو تيلة الذراع
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj249">
              تجهيزات الفرامل
              الهوائية و أجزائها
            </button>
          </h4>
        </div>
        <div id="CriteriaObj249" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تعديل أو تبديل في التصميم الأصلي لتجهيزات الفرامل الهوائية.
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل الهوائية
              </td>
            </tr>
            <tr>
              <td>
                وجود ارتخاء أو تثبيت غير جيد في أي من مكونات النظام ســــــــــواء الاسطوانات أو خزان الهواء
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل الهوائية
              </td>
            </tr>
            <tr>
              <td>
                وجود تهريـب هواء في مكونـات دائرة الفرامـل الهوائيـة سواء من صمام المرحل (Valve Relay )أو التوصيلات والصمامات
                الأخرى.
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل الهوائية
              </td>
            </tr>
            <tr>
              <td>
                وقت الشـحن أو تعبئة الهواء طويل مما يوحي بوجود خلل في النظام (حسب ملاحظة سائق الفحص).
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل الهوائية
              </td>
            </tr>
            <tr>
              <td>
                صمام الإعتاق السريع (Valve Release) معطل أو لا يعمل.
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل الهوائية
              </td>
            </tr>
            <tr>
              <td>
                هبوط حاد في ضغط الهواء بدائرة الفرامل عند بقاء القدم على دواسة الفرامل
              </td>
              <td>
                جميع المركبات المزودة بنظام الفرامل الهوائية
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2444">
              عمود التوازن وجلبه
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2444" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                إزالة عمود التوازن من المركبات المجهزة بهذا العمود أصلا
              </td>
              <td>
                جميع المركبات المزودة بأعمدة التوازن سواء الأمامية أو الخلفية
              </td>
            </tr>
            <tr>
              <td>
                دعامة أو مسامير تثبيت عمود التوازن مفقودة
              </td>
              <td>
                جميع المركبات المزودة بأعمدة التوازن سواء الأمامية أو الخلفية
              </td>
            </tr>
            <tr>
              <td>
                وجود لحام أو تسخين في أي جزء من عمود التوازن
              </td>
              <td>
                جميع المركبات المزودة بأعمدة التوازن سواء الأمامية أو الخلفية
              </td>
            </tr>
            <tr>
              <td>
                جلود عمود التوازن مهترئة أو متآكلة أو تم إزالتها
              </td>
              <td>
                جميع المركبات المزودة بأعمدة التوازن سواء الأمامية أو الخلفية
              </td>
            </tr>
            <tr>
              <td>
                تركيب مرتخي (غير ثابت) أو ضعف عارضة التثبيت أو الدعامة بسبب الكسـور أو الصدأ في المناطق المحيطة بها أو نتيجة
                لارتخاء مسامير التثبيت
              </td>
              <td>
                جميع المركبات المزودة بأعمدة التوازن سواء الأمامية أو الخلفية
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj260">
              نظام التعليق الأمامي
            </button>
          </h4>
        </div>
        <div id="CriteriaObj260" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود تعديل في التصميم الأصلي لنظام التعليق الأمامي
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود خلل في اتزان زاوية انحراف العجلات نتيجة التركيب غير الجيد للسست
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مســامير U التي تضــم الزنبرك الحلزوني (الســوســت) مرتخية أو قصيرة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو اهتراء الوصلات الكروية (الركب) لذراع (مقصات) نظام التعليق.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مسـمار السـوسـت الأوسـط مكسـور أو فقدان قفيص السـوسـت مما ينتج عنه انحراف السوست عن بعضها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                كســور أو تشــوه أو ضربات في أذرعة التحكم العلوية أو الســفلية (المقصات).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فشل أو تآكل في قضبان شد الهيكل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو تلف جلب ممتص الصدمات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيـب غير ثابت (مرتخي) أو ملتوي أو تشقق في عمود الالتواء.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو إهتراء جلود ذراع التحكم العلوي او السفلي مما يؤدي الى تلامس أجزاء الحديد مع بعضه
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو اهتراء جلود الســـــــوســـــــت الورقية مما يؤدي إلى تلامس الأجزاء الحديدية مع بعضها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj271">
              نظام التعليق الخلفي
            </button>
          </h4>
        </div>
        <div id="CriteriaObj271" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود تعديل في التصميم الأصلي لنظام التعليق الخلفي
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب حلقات تحت النابض الحلزوني (الياي) أو فوقه لترفيع المركبة أو تحت لفات الزنبرك (السوست) لإسناد السوست
                الضعيفة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مسامير U التي تضم الزنبرك الحلزوني (السوست) مرتخية أو قصيرة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو اهتراء الوصلات الكروية (الركب) لذراع (مقصات) نظام التعليق.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مسـمار السـوسـت الأوسـط مكسـور أو فقدان قفيص السـوسـت مما ينتج عنه انحراف السوست عن بعضها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                كســور أو تشــوه أو ضربات في أذرعة التحكم العلوية أو الســفلية (المقصات).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فشل أو تآكل في قضبان شد الهيكل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو تلف جلب ممتص الصدمات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيـب غير ثابت (مرتخي) أو ملتوي أو تشقق في عمود الالتواء.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو اهتراء جلود ذراع التحكم ( المقصات ) العلوي أو السفلي مما يؤدي إلى تلامس أجزاء الحديد مع بعضه.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو اهتراء جلود تعليق السوست الورقية مما يؤدي إلى تلامس الأجزاء الحديدية مع بعضها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تهريب بنظام الوسائد الهوائية أو نظام التعليق الهيدروليكي
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj283">
              النوابض الأمامية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj283" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تقليل ارتفاع النابض بالقطع لإحدى اللفات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                لحام أو تسخين النابض (الياي) أو عمود الالتواء.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                معالجة الوسائد الهوائية بالتسخين أو الضغط.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                النابض ( الياي ) أو عمود الالتواء مكسور.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                نقص هواء أو ثقب في الوسادة الهوائية (البالون).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                النابض الحلزوني (الياي) مخلوع من قاعدته (غير مثبت على القاعدة)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                هبوط النابض (الياي) بفعل الأحمال عليه
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj290">
              النوابض الخلفية
            </button>
          </h4>
        </div>
        <div id="CriteriaObj290" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تقليل ارتفاع النابض بالقطع لإحدى اللفات.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                لحام أو تسخين النابض (الياي) أو عمود الالتواء.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                معالجة الوسائد الهوائية بالتسخين أو الضغط.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                النابض ( الياي ) أو عمود الالتواء مكسور.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                نقص هواء أو ثقب في الوسادة الهوائية (البالون).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                النابض الحلزوني (الياي) مخلوع من قاعدته (غير مثبت على القاعدة)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                هبوط النابض (الياي) بفعل الأحمال عليه
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj297">
              الإطارات والجنوط
            </button>
          </h4>
        </div>
        <div id="CriteriaObj297" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                اختلاف نوع العجلات (الجنوط) على مختلف المحاور.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                اختلاف مقاس أو تركيبة الإطار على مختلف المحاور.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو اهتراء أو تشوه الإطار من الداخل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تلف سطح الإطار من الداخل سواء التشقق أو التحبيل أو التعرج.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تلف العجلة (الجنط) من الداخل مثل الكسور أو اللحام أو التشويه.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2102">
              ممتص الصدمات
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2102" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                نزع أو إزالة ممتص الصدمات من مكانه
                للمركبات المزودة به أصلًا
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                اختلاف نوع أو إعـداد ممتص الصدمـات
                على كل جانب مقارنة بالجانب الآخر.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تهريب السائل الهيدروليكي من ممتص
                الصدمات مما يفقده عمل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود ضربات أو تشوه بسطح ممتص
                الصدمات مما يعيق أدائه.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل الجلب والربلات المثبتة للمساعد مع هيكل المركبة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب ممتص الصدمات مفصول من مكانه أو كسر قاعدته.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب ممتص الصدمات بوضع عكسي مقلوب.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2109">
              قواعد المحرك ( كراسي الماكينة) و الأجزاء الميكانيكية الملحقة بالمحرك
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2109" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان مسامير تثبيت قاعدة المحرك.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تعديل عوارض أو قاعدة المحرك.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                لحام قواعد أو كرسي المحرك مع العوارض التي تجلس عليها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيـب غير ثابت أو مرتخي لبـادئ الحركـة (السلف)
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيـب غير ثابت أو مرتخي لبـادئ الحركـة (السلف) أو وجود أصوات عند التشغيل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تشقق أو كسر الجزء المطاطي بقاعدة المحرك.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تلف أو تشقق أحزمة المحرك (السيور).
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مسامير قاعدة المحرك مرتخية أو غير ثابتة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2117">
              قواعد صندوق التروس
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2117" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                فقدان مسامير تثبيت قاعدة كرسي صندوق التروس.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تعديل عوارض أو قاعدة تثبيت صندوق التروس.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                لحام قواعد أو كرسي صندوق التروس مع العوارض التي تجلس عليها.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تشقق الجزء المطاطي بقاعدة صندوق التروس
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مسامير قاعدة صندوق التروس (الجير بوكس) مرتخية أو غير ثابتة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2122">
              ناقل أجزاء الحركة/عمود الكردان/عمود الدوران
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2122" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                مسامير عمود الكردان مفقودة أو مرتخية التثبيت.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                مسامير سناد (شيال) عمود الكردان مرتخية أو غير ثابتة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل كلي أواهتراء للوصلة المساندة لعمود الكردان.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تشوه ظاهري بعمود الكردان مثل ضربة، التواء.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل واهتراء الجزء المطاطي لشيال عمود الكردان أو انفصاله عن قاعدته.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو اهتراء المفاصــــل الكروية (الركب) لذراع (مقصات) نظام التعليق.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تآكل أو كسر الجزء المطاطي لقرص القـدرة لعمود الدوران للمركبات المزودة بها.
              </td>
              <td>
                المركبات المزودة به فقط
              </td>
            </tr>
            <tr>
              <td>
                حركة حرة أو خلوص في الترس التفاضلي.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                كسور أو تشوه في صندوق الترس التفاضلي.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                اهتراء أو قطع الغطاء المطاطي لمفاصل عمود الدوران بمركبات الدفع الأمامي.
              </td>
              <td>
                مركبات الدفع الأمامي
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2132">
              مخمد الاصوات / مواسير العادم ( الشكمان)
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2132" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تعديل على نظام العادم بحيث يعيق إجراء الفحص الأتوماتيكي لكثافة دخان العادم
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                إزالة كاتم الصوت أو تركيب كاتم صوت بديل غير مخصص للمركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود قطع أو كسر أو صدأ بمواسير أو وصلات أو اسطوانة العادم يؤدي إلى تهريب الغازات من النظام
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                كاتم الصوت أو اسطوانات العادم غير مثبتة جيد اً نتيجة قطع أو فقدان حمالاتها (الشيالات) .
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2136">
              خزان الوقود وخطوط توصيل الوقود
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2136" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                أي تهريب أو تســــرب للبخار أو الســــائل من خزان الوقود أو تهريب للوقود إلى المحرك
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                أي تهريب أو تســــرب للبخار أو الســــائل من خزان الوقود أو تهريب للوقود من الخطوط التي توصـــل الوقود إلى
                مضـــخة الوقود نتيجة تآكل أحد الأجزاء.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                عدم تثبيت أي جزء من أجزاء مجموعة الوقود.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تلامس بين خراطيم أو أنـــابيـــب الوقود مع أي من الأجزاء المتحركة في السيارة.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود تلامس بين خراطيم أو أنــابيــب الوقود والأجزاء الساخنة للمركبة مثل أنابيب العادم أو المحرك.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                جود شــقوق في الخطوط الناقلة للوقود مما يؤدي إلى وجود رطوبة ظاهرة على سطح خرطوم أو أنبوب الوقود
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2142">
              سلك عداد السرعة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2142" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                سلك عداد السرعة مفصول من صندوق التروس بحيث يتعطل عمله.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2143">
              الهيكل ( الشاسيه) والجسور والقواطع المكونة للهيكل
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2143" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود تعديل بهيكل المركبة غير مطابق مع صـــــــــــــناعة المركبة
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                فقدان بمكونات ربط وتثبيت الهيكل
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود كسور أو تشقق أو صدأ عميق في أجزاء أو قواطع أو جسور المركبة مما يضعف بنية الهيكل وثباته.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تركيب غير ثابت للمحرك أو كابينة القيادة بســــبب كسر أو فقدان مسامير التثبيت
              </td>
              <td>
                للشاحنات
              </td>
            </tr>
            <tr>
              <td>
                إصلاح أو لحام سيئ وغير متقن لكسور أو تشقق الجسور وقواطع الهيكل.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                جود شــقوق في الخطوط الناقلة للوقود مما يؤدي إلى وجود رطوبة ظاهرة على سطح خرطوم أو أنبوب الوقود.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود أوساخ مثل الشحم أسفل هيكل المركبة تعيق أجزاء الفحص لأجزاء المركبة السفلية
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2150">
              الصدأ والتآكل بأرضية المركبة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2150" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                وجود تآكل أو اهتراء أو ثقوب بأرضية المركبة نتيجة الصدأ بأي من مناطق الارتكاز
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                وجود ثقوب بأرضـــــية المركبة ناتجة عن الصـــــدأ
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <button type="button" class="btn btn-link" data-toggle="collapse"
                    data-target="#CriteriaObj2152">
              تهريب الزيوت بأسفل المركبة
            </button>
          </h4>
        </div>
        <div id="CriteriaObj2152" class="panel-collapse collapse">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>بند الفحص</th>
              <th>نوع المركبة</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                تهريب زيت متواصل سواء من المحرك أو صندوق التروس أو أي من المكونات الأخرى للمحرك مثل علبة التوجيه أو صندوق
                التروس
                التفاضلي.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            <tr>
              <td>
                تهريب زيت بســــــــيط أو تندية خفيفة بأي جزء أســــــــاســــــــي ســــــــواء من المحرك أو صندوق التروس أو
                علبة التوجيه الهيدروليكي.
              </td>
              <td>
                جميع أنواع المركبات
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div><!-- .tab-pane -->
  </div><!-- .tab-content -->
</div><!-- .panel-body -->
</div><!-- .panel -->
</div>


</div>

                                </section>
        </div><!-- .row -->
    </div><!-- .container -->
</div>

@endsection