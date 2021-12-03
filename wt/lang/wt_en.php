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

class Wt_EN {
    private $Lang = array();

    public function getEn(){

        ////////////////////////////////////////////////////////// Lang

        $this->Lang['dir']            	    = 'ltr';
        $this->Lang['bootstrap']            = '/pub_wt/css/wt_min.css';
        $this->Lang['font']                 = '@font-face { font-family: wt; src : url(/pub_wt/fonts/wt_en.otf) format("opentype");}';
        $this->Lang['font2']                = '@font-face { font-family: wt2; src : url(/pub_wt/fonts/wt_ar.ttf) format("opentype");}';

        ////////////////////////////////////////////////////////// System Messages

        $this->Lang['secIss']               = 'Detected Some Security Issues';
        $this->Lang['emailUsed']            = 'Email is used';
        $this->Lang['emailAdded']           = 'The email has been added';
        $this->Lang['checkCaptcha']         = 'Please Check the captcha';
        $this->Lang['sendMessage']          = 'The message was sent successfully';
        $this->Lang['checkFields']          = 'Please check all fields';
        $this->Lang['checkPassword']        = 'Please check the password';
        $this->Lang['userRegistered']       = 'User registered successfully';
        $this->Lang['infoChanged']          = 'The Information has been changed';
        $this->Lang['signInSuccess']        = 'Sign-in successful';
        $this->Lang['emailError']           = 'Email error';
        $this->Lang['passError']            = 'Password Error';
        $this->Lang['checkOurNew']          = 'New Order';
        $this->Lang['checkOurNum']          = 'Order Number';
        $this->Lang['checkOurConfirm']      = 'Order confirmed, order placed within 3 working days';
        $this->Lang['passCode']             = 'Password Recovery Code';
        $this->Lang['passCodeSent']         = 'Password recovery code has been sent';
        $this->Lang['passCodeSuccess']      = 'The Password Recovery Code is Correct';
        $this->Lang['passCodeSentError']    = 'Password Recovery Code is Wrong';
        $this->Lang['provinceCodeReg']      = 'Province code is registered';
        $this->Lang['usernameError']        = 'Username Error';
        $this->Lang['sizeSaved']            = 'The Size has been Saved';

        ////////////////////////////////////////////////////////// Header

        $this->Lang['language']             = 'Language';
        $this->Lang['home']                 = 'Home';
        $this->Lang['profile']              = 'Profile';
        $this->Lang['login']                = 'Login';
        $this->Lang['logout']               = 'Logout';
        $this->Lang['register']             = 'Register';
        $this->Lang['category']             = 'Categories';
        $this->Lang['products']             = 'Products';
        $this->Lang['tailor']               = 'Tailor';
        $this->Lang['checkout']             = 'Checkout';
        $this->Lang['search']               = 'Search';
        $this->Lang['contact']              = 'Contact Us';
        $this->Lang['basket']               = 'Basket';
        $this->Lang['restorePassword']      = 'Restore Password';

        ////////////////////////////////////////////////////////// Footer

        $this->Lang['myaccount']            = 'My Account';
        $this->Lang['contactinfo']          = 'Contact Information';
        $this->Lang['newsletter']           = 'Newsletter';
        $this->Lang['newslettertext']       = 'Subscribe to newsletter list to receive new offers, discounts, products and to get special discount coupons on all our products.';
        $this->Lang['subscribe']            = 'Subscribe';
        $this->Lang['copyright']            = 'All Rights Reserved';

        ////////////////////////////////////////////////////////// 404

        $this->Lang['oops']            	    = 'OOPS';
        $this->Lang['pnf']            	    = 'Page Not Found';
        $this->Lang['pnftext']              = 'The page you are looking for might have been removed or had its name changed or is temporarily unavailable.';

        ////////////////////////////////////////////////////////// Global

        $this->Lang['add']                  = 'Add';
        $this->Lang['edit']                 = 'ُEdit';
        $this->Lang['save']                 = 'Save';
        $this->Lang['cancel']               = 'Cancel';
        $this->Lang['delete']               = 'Delete';
        $this->Lang['name']                 = 'Name';
        $this->Lang['send']                 = 'Send';
        $this->Lang['buy']                  = 'Buy';
        $this->Lang['price']                = 'Price';
        $this->Lang['order']                = 'Order Now';
        $this->Lang['username']             = 'Username';
        $this->Lang['email']                = 'Email';
        $this->Lang['password']             = 'Password';
        $this->Lang['searchprod']           = 'Search for a Product';
        $this->Lang['noImag']               = 'Without Image';
        $this->Lang['confirmCode']          = 'Confirm Code';
        $this->Lang['noProduct']            = 'No Products';
        $this->Lang['addBasket']            = 'Add to Basket';
        $this->Lang['productState']         = 'Product State';
        $this->Lang['productCode']          = 'Product Code';
        $this->Lang['_total']               = 'Total';
        $this->Lang['shippingPrice']        = 'Shipping price';
        $this->Lang['noResults']            = 'No Results';
        $this->Lang['generalSettings']      = 'General Settings';
        $this->Lang['appSettings']          = 'App Settings';
        $this->Lang['sales']                = 'Sales';
        $this->Lang['_user']                = 'User';
        $this->Lang['_users']               = 'Users';
        $this->Lang['subscriber']           = 'Subscriber';
        $this->Lang['_category']            = 'Category';
        $this->Lang['_categories']          = 'Categories';
        $this->Lang['_product']             = 'Product';
        $this->Lang['_products']            = 'Products';
        $this->Lang['deliveryPrice']        = 'Delivery price';
        $this->Lang['operations']           = 'Operations';
        $this->Lang['image']                = 'Image';
        $this->Lang['images']               = 'Images';
        $this->Lang['number']               = 'Number';
        $this->Lang['productPrice']         = 'Product Price';
        $this->Lang['description']          = 'Description';
        $this->Lang['subscribers']          = 'Subscribers';
        $this->Lang['sizes']                = 'Sizes';

        $this->Lang['length']               = 'Length';
        $this->Lang['neckline']             = 'Neckline';
        $this->Lang['shoulder']             = 'Shoulder';
        $this->Lang['underarm']             = 'Underarm';
        $this->Lang['sleeves']              = 'Sleeves';
        $this->Lang['cuffWidth']            = 'Cuff Width';
        $this->Lang['bust']                 = 'Bust';
        $this->Lang['waist']                = 'Waist';
        $this->Lang['hip']                  = 'Hip';
        $this->Lang['width']                = 'Width';

        ////////////////////////////////////////////////////////// Index

        $this->Lang['getTailor']            = 'Tailor Order';
        $this->Lang['newProducts']          = 'New Products';

        ////////////////////////////////////////////////////////// Register

        $this->Lang['personalInfo']         = 'Personal Information';
        $this->Lang['signInfo']             = 'Sign-In Information';
        $this->Lang['fullName']             = 'Full Name';
        $this->Lang['mobileNumber']         = 'Mobile Number';
        $this->Lang['province']             = 'Province';
        $this->Lang['provinces']            = 'Provinces';
        $this->Lang['noProvince']           = 'No Provinces';
        $this->Lang['address']              = 'Address';
        $this->Lang['password2']            = 'Confirm Password';
        $this->Lang['subNewsletter']        = 'Newsletter Subscribe';

        ////////////////////////////////////////////////////////// Login

        $this->Lang['forgetPass']           = 'Forget Your Password?';
        $this->Lang['registerText']         = 'Creating an account has many benefits: check out faster, keep more than one address, track orders and more.';

        ////////////////////////////////////////////////////////// Contact

        $this->Lang['subject']              = 'Subject';
        $this->Lang['message']              = 'Message';

        ////////////////////////////////////////////////////////// Basket

        $this->Lang['noBasket']             = 'No Products in Basket';

        ////////////////////////////////////////////////////////// CheckOut

        $this->Lang['paCash']               = 'Cash On Delivery';
        $this->Lang['paDelivery']           = 'Delivery of the order within 3 working days';
        $this->Lang['paText']               = 'I pledge to receive the order, and in the event that the order is not received, the shipping and return fees remain with me';
        $this->Lang['confirmOrder']         = 'Confirm Order';

        ////////////////////////////////////////////////////////// admin

        $this->Lang['panel']                = 'Control Panel';
        $this->Lang['addProduct']           = 'Add a Product';
        $this->Lang['productsManagement']   = 'Products Management';
        $this->Lang['addUser']              = 'Add a User';
        $this->Lang['usersManagement']      = 'Users Management';
        $this->Lang['newsletterManagement'] = 'Newsletter Management';
        $this->Lang['sendMessages']         = 'Send Message';
        $this->Lang['_products']            = 'Products';
        $this->Lang['newUsers']             = 'New Users';
        $this->Lang['newSubscribers']       = 'New Subscribers';
        $this->Lang['noUsers']              = 'There are no users';
        $this->Lang['noSubscriber']         = 'There are no subscribers';
        $this->Lang['purchases']            = 'Purchases';
        $this->Lang['noPurchases']          = 'There are no purchases';
        $this->Lang['log']                  = 'Log';
        $this->Lang['logs']                 = 'Logs';
        $this->Lang['noLogs']               = 'There are no logs';
        $this->Lang['appLogo']              = 'App Logo';
        $this->Lang['englishName']          = 'English Name';
        $this->Lang['arabicName']           = 'Arabic Name';
        $this->Lang['invoices']             = 'Invoices';
        $this->Lang['invoicesNumber']       = 'Invoices Number';
        $this->Lang['englishCurrency']      = 'English Currency';
        $this->Lang['arabicCurrency']       = 'Arabic Currency';
        $this->Lang['addressInfo']          = 'Address Information';
        $this->Lang['englishCountry']       = 'English Country';
        $this->Lang['arabicCountry']        = 'Arabic Country';
        $this->Lang['englishProvince']      = 'English Province';
        $this->Lang['arabicProvince']       = 'Arabic Province';
        $this->Lang['englishAddress']       = 'English Address';
        $this->Lang['arabicAddress']        = 'Arabic Address';
        $this->Lang['socialNetworks']       = 'social Networks';
        $this->Lang['whatsapp']             = 'Whatsapp';
        $this->Lang['facebook']             = 'Facebook';
        $this->Lang['twitter']              = 'Twitter';
        $this->Lang['linkedin']             = 'Linkedin';
        $this->Lang['instagram']            = 'Instagram';
        $this->Lang['youtube']              = 'Youtube';
        $this->Lang['adminPass']            = 'Admin Password';
        $this->Lang['addProvince']          = 'Add Province';
        $this->Lang['provinceCode']         = 'Province Code';
        $this->Lang['noProvinces']          = 'There are no Provinces';
        $this->Lang['addCategory']          = 'Add Category';
        $this->Lang['noCategories']         = 'There are no Categories';
        $this->Lang['productCode']          = 'Product Code';
        $this->Lang['addSubscriber']        = 'Add Subscriber';

        return $this->Lang;
    }
}