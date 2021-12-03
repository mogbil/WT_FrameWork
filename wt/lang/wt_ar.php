<?php
/***********************************************************************
# *          @Project    : WT FrameWork
# *          @version    : 0.1
# *          @author     : Mogbil Sourketti info[@]wondtech.com
# *          @copyright  : 2020 WondTech for Integrated Digital Solutions
# *          @link       : http://www.wondtech.com
# *          @package    : WT FrameWork (0.1)
# ************************************************************************/

namespace WT\LANG;

class Wt_AR {
    private $Lang = array();

    public function getAr(){

        ////////////////////////////////////////////////////////// Lang

        $this->Lang['dir']            	    = 'rtl';
        $this->Lang['bootstrap']            = '/pub_wt/css/wt_min.rtl.css';
        $this->Lang['font']                 = '@font-face { font-family: wt; src : url(/pub_wt/fonts/wt_ar.ttf) format("opentype");}';
        $this->Lang['font2']                = '@font-face { font-family: wt2; src : url(/pub_wt/fonts/wt_en.otf) format("opentype");}';

        ////////////////////////////////////////////////////////// System Massage

        $this->Lang['secIss']               = 'اكتشف بعض مشكلات الحماية';
        $this->Lang['emailUsed']            = 'البريد الالكتروني مستخدم';
        $this->Lang['emailAdded']           = 'تم اضافة البريد الالكتروني';
        $this->Lang['checkCaptcha']         = 'الرجاء مراجعة كود التحقق';
        $this->Lang['sendMessage']          = 'تم إرسال الرسالة بنجاح';
        $this->Lang['checkFields']          = 'الرجاء مراجعة كافة الحقول';
        $this->Lang['checkPassword']        = 'الرجاء مراجعة كلمة المرور';
        $this->Lang['userRegistered']       = 'تم تسجيل المستخدم بنجاح';
        $this->Lang['infoChanged']          = 'تم تعديل البيانات بنجاح';
        $this->Lang['signInSuccess']        = 'تم تسجيل الدخول بنجاح';
        $this->Lang['emailError']           = 'خطاء في البريد الالكتروني';
        $this->Lang['passError']            = 'خطاء في كلمة المرور';
        $this->Lang['checkOurNew']          = 'طلبية جديدة';
        $this->Lang['checkOurNum']          = 'رقم الطلبية';
        $this->Lang['checkOurConfirm']      = 'تم تاكيد الطلبية، تسليم الطلبية خلال ٣ ايام عمل';
        $this->Lang['passCode']             = 'كود استعادة كلمة المررو';
        $this->Lang['passCodeSent']         = 'تم ارسال كود استعادة كلمة المرور';
        $this->Lang['passCodeSuccess']      = 'كود استعادة كلمة المرور صحيح';
        $this->Lang['passCodeSentError']    = 'كود استعادة كلمة المرور خطأ';
        $this->Lang['provinceCodeReg']      = 'كود الامارة مسجل';
        $this->Lang['usernameError']        = 'خطاء في اسم المستخدم';
        $this->Lang['sizeSaved']            = 'تم حفظ المقاس';

        ////////////////////////////////////////////////////////// Header

        $this->Lang['language']             = 'اللغة';
        $this->Lang['home']                 = 'الرئيسية';
        $this->Lang['profile']              = 'الصفحة الشخصية';
        $this->Lang['login']                = 'تسجيل دخول';
        $this->Lang['logout']               = 'تسجيل خروج';
        $this->Lang['register']             = 'انشاء حساب';
        $this->Lang['category']             = 'التصنيفات';
        $this->Lang['products']             = 'عرض المنتج';
        $this->Lang['tailor']               = 'تفصيل';
        $this->Lang['checkout']             = 'تاكيد الدفع';
        $this->Lang['search']               = 'البحث';
        $this->Lang['contact']              = 'الاتصال بنا';
        $this->Lang['basket']               = 'سلة المشتريات';
        $this->Lang['restorePassword']      = 'استعادة كلمة المرور';

        ////////////////////////////////////////////////////////// Footer

        $this->Lang['myaccount']            = 'حسابي';
        $this->Lang['contactinfo']          = 'معلومات التواصل';
        $this->Lang['newsletter']           = 'القائمة البريدية';
        $this->Lang['newslettertext']       = 'اشترك في قائمتنا البريدية لتصلك جديد العروض، التخفيضات، المنتجات ولتحصل على كوبونات خصم خاصة على كافة منتجاتنا.';
        $this->Lang['subscribe']            = 'اشتراك';
        $this->Lang['copyright']            = 'جميع الحقوق محفوظة';

        ////////////////////////////////////////////////////////// 404

        $this->Lang['oops']            	    = 'عفوا';
        $this->Lang['pnf']            	    = 'الصفحة غير موجودة';
        $this->Lang['pnftext']              = 'الصفحة التي تبحث عنها ربما تمت إزالتها أو تم تغيير اسمها أو أنها غير متاحة مؤقتًا.';

        ////////////////////////////////////////////////////////// Global

        $this->Lang['add']                  = 'اضافة';
        $this->Lang['edit']                 = 'تعديل';
        $this->Lang['save']                 = 'حفظ';
        $this->Lang['cancel']               = 'الغاء';
        $this->Lang['delete']               = 'حذف';
        $this->Lang['name']                 = 'الإسم';
        $this->Lang['buy']                  = 'شراء';
        $this->Lang['price']                = 'سعر';
        $this->Lang['send']                 = 'ارسال';
        $this->Lang['order']                = 'اطلب الان';
        $this->Lang['username']             = 'اسم المستخدم';
        $this->Lang['email']                = 'البريد الالكتروني';
        $this->Lang['password']             = 'كلمة المرور';
        $this->Lang['searchprod']           = 'البحث عن منتج';
        $this->Lang['noImag']               = 'لاتوجد صور';
        $this->Lang['confirmCode']          = 'كود التحقق';
        $this->Lang['noProduct']            = 'لاتوجد منتجات';
        $this->Lang['addBasket']            = 'اضافة للسلة';
        $this->Lang['productState']         = 'حالة المنتج';
        $this->Lang['productCode']          = 'كود المنتج';
        $this->Lang['_total']               = 'الاجمالي';
        $this->Lang['shippingPrice']        = 'قيمة الشحن';
        $this->Lang['noResults']            = 'لاتوجد نتائج';
        $this->Lang['generalSettings']      = 'الإعدادات العامة';
        $this->Lang['appSettings']          = 'اعدادت التطبيق';
        $this->Lang['sales']                = 'المبيعات';
        $this->Lang['_user']                = 'مستخدم';
        $this->Lang['_users']               = 'المستخدمين';
        $this->Lang['subscriber']           = 'مشترك';
        $this->Lang['_category']            = 'تصنيف';
        $this->Lang['_categories']          = 'التصنيفات';
        $this->Lang['_product']             = 'منتج';
        $this->Lang['_products']            = 'منتجات';
        $this->Lang['deliveryPrice']        = 'سعر التوصيل';
        $this->Lang['operations']           = 'العمليات';
        $this->Lang['image']                = 'صورة';
        $this->Lang['images']               = 'صور';
        $this->Lang['number']               = 'الرقم';
        $this->Lang['productPrice']         = 'سعر المنتج';
        $this->Lang['description']          = 'وصف';
        $this->Lang['subscribers']          = 'المشتركين';
        $this->Lang['sizes']                = 'المقاسات';

        $this->Lang['length']               = 'الطول';
        $this->Lang['neckline']             = 'الحلج';
        $this->Lang['shoulder']             = 'الكتف';
        $this->Lang['underarm']             = 'الباط';
        $this->Lang['sleeves']              = 'طول الكم';
        $this->Lang['cuffWidth']            = 'عرض الكم';
        $this->Lang['bust']                 = 'الصدر';
        $this->Lang['waist']                = 'الوسط';
        $this->Lang['hip']                  = 'الورك';
        $this->Lang['width']                = 'دائرة الكندورة';

        ////////////////////////////////////////////////////////// Index

        $this->Lang['getTailor']            = 'طلب تفصيل';
        $this->Lang['newProducts']          = 'جديد المنتجات';

        ////////////////////////////////////////////////////////// Register

        $this->Lang['personalInfo']         = 'المعلومات الشخصية';
        $this->Lang['signInfo']             = 'بيانات الدخول';
        $this->Lang['fullName']             = 'الاسم بالكامل';
        $this->Lang['mobileNumber']         = 'رقم الموبايل';
        $this->Lang['province']             = 'الامارة';
        $this->Lang['provinces']            = 'الامارات';
        $this->Lang['noProvince']           = 'لاتوجد محافظات';
        $this->Lang['address']              = 'العنوان';
        $this->Lang['password2']            = 'تاكيد كلمة المرور';
        $this->Lang['subNewsletter']        = 'الإشتراك في القائمة البريدية';

        ////////////////////////////////////////////////////////// Login

        $this->Lang['forgetPass']           = 'استعادة كلمة المرور ؟';
        $this->Lang['registerText']         = 'إنشاء حساب له فوائد عديدة: شراء أسرع، حفظ العناوين، متابعة الطلبات وأشياء أخرى.';

        ////////////////////////////////////////////////////////// Contact

        $this->Lang['subject']              = 'عنوان الرسالة';
        $this->Lang['message']              = 'الرسالة';

        ////////////////////////////////////////////////////////// Basket

        $this->Lang['noBasket']             = 'لا توجد منتجات في السلة';

        ////////////////////////////////////////////////////////// CheckOut

        $this->Lang['paCash']               = 'الدفع عند الاستلام';
        $this->Lang['paDelivery']           = 'تسليم الطلبية خلال ٣ ايام عمل';
        $this->Lang['paText']               = 'اتعهد في استلام الطلب، وفي حال عدم استلام الطلب تبقي في ذمتي رسوم الشحن والارجاع';
        $this->Lang['confirmOrder']         = 'تاكيد الطلب';

        ////////////////////////////////////////////////////////// admin

        $this->Lang['panel']                = 'لوحة التحكم';
        $this->Lang['addProduct']           = 'اضافة منتج';
        $this->Lang['productsManagement']   = 'إدارة المنتجات';
        $this->Lang['addUser']              = 'اضافة مستخدم';
        $this->Lang['usersManagement']      = 'إدارة المستخدمين';
        $this->Lang['newsletterManagement'] = 'ادارة المشتركين';
        $this->Lang['sendMessages']         = 'ارسال رسالة';
        $this->Lang['_products']            = 'المنتجات';
        $this->Lang['newUsers']             = 'المستخدمين الجدد';
        $this->Lang['newSubscribers']       = 'المشتركين الجدد';
        $this->Lang['noUsers']              = 'لايوجد مستخدمين';
        $this->Lang['noSubscriber']         = 'لايوجد مشتركين';
        $this->Lang['purchases']            = 'عمليات شراء';
        $this->Lang['noPurchases']          = 'لاتوجد مشتريات';
        $this->Lang['log']                  = 'السجل';
        $this->Lang['logs']                 = 'السجلات';
        $this->Lang['noLogs']               = 'لاتوجد سجلات';
        $this->Lang['appLogo']              = 'شعار التطبيق';
        $this->Lang['englishName']          = 'الإسم بالانجليزية';
        $this->Lang['arabicName']           = 'الإسم بالعربية';
        $this->Lang['invoices']             = 'الفواتير';
        $this->Lang['invoicesNumber']       = 'رقم الفاتورة';
        $this->Lang['englishCurrency']      = 'العملة بالانجليزي';
        $this->Lang['arabicCurrency']       = 'العملة بالعربية';
        $this->Lang['addressInfo']          = 'معلومات العناوين';
        $this->Lang['englishCountry']       = 'البلد بالانجليزية';
        $this->Lang['arabicCountry']        = 'البلد بالعربية';
        $this->Lang['englishProvince']      = 'المحافظة بالانجليزية';
        $this->Lang['arabicProvince']       = 'المحافظة بالعربية';
        $this->Lang['englishAddress']       = 'العنوان بالانجليزية';
        $this->Lang['arabicAddress']        = 'العنوان بالعربية';
        $this->Lang['socialNetworks']       = 'الشبكات الاجتماعية';
        $this->Lang['whatsapp']             = 'الواتساب';
        $this->Lang['facebook']             = 'الفيسبوك';
        $this->Lang['twitter']              = 'تويتر';
        $this->Lang['linkedin']             = 'لينكدان';
        $this->Lang['instagram']            = 'انستقرام';
        $this->Lang['youtube']              = 'اليوتيوب';
        $this->Lang['adminPass']            = 'كلمة مرور الادمن';
        $this->Lang['addProvince']          = 'اضافة امارة';
        $this->Lang['provinceCode']         = 'كود الامارة';
        $this->Lang['noProvinces']          = 'لا توجد امارات';
        $this->Lang['addCategory']          = 'اضافة تصنيف';
        $this->Lang['noCategories']         = 'لا يوجد تصنيفات';
        $this->Lang['productCode']          = 'كود المنتج';
        $this->Lang['addSubscriber']        = 'اضافة مشرتك';

        return $this->Lang;
    }
}