<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__2486c00c0559dc09baa5fef00b5975a06b54738f89cbd0d639f8bd2aad5f5fb2 */
class __TwigTemplate_d9fc02d97b321e07b4c326fb7912a8878f3ffd4b9123e6783c2f4cf9323ee54d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/jms_kasos/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/jms_kasos/img/app_icon.png\" />

<title>Shop • JMS Kasos</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.6.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'd8b501f81492c026bf66b76fc105809e';
    var token_admin_orders = '206a0a7e8f699030fcf0fa29fbf604a2';
    var token_admin_customers = 'dfa0adad6a459816e281b2ef60145372';
    var token_admin_customer_threads = '081ed2ccc79c1e7b4bd79526abac2a01';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = '68fc5c532d02a89c70dff8b925b13ead';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/jms_kasos/admin201ucslkx/index.php/improve/modules/catalog/recommended?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA';
    var admin_notification_get_link = '/jms_kasos/admin201ucslkx/index.php/common/notifications?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA';
    var admin_notification_push_link = '/jms_kasos/admin201ucslkx/index.php/common/notifications/ack?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA';
    var tab_modules_list = 'innovativemenu,productsbycategoryslider,slidercategory,apiway';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/jms_kasos/admin201ucslkx/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_kasos/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_kasos/admin201ucslkx/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_kasos/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/jms_kasos/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/jms_kasos\\/admin201ucslkx\\/\";
var baseDir = \"\\/jms_kasos\\/\";
var changeFormLanguageUrl = \"\\/jms_kasos\\/admin201ucslkx\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/jms_kasos/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/admin201ucslkx/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/js/admin.js?v=1.7.6.0\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/admin201ucslkx/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/js/tools.js?v=1.7.6.0\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/admin201ucslkx/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/admin201ucslkx/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/jms_kasos/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminAjaxFaviconBO&amp;token=62d4eec10ad9cc911d650632e327fddb\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/jms_kasos\\/admin201ucslkx\\/index.php?controller=AdminGamification&token=c51497bfa2e080ae11099577da226099\";
            var current_id_tab = 11;
        </script>

";
        // line 174
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-en admincategories\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminDashboard&amp;token=21a25379fe8092e7f4c63b7674ea1100\"></a>
      <span id=\"shop_version\">1.7.6.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=d04431926e927f359bb6bcb2122157ad\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_kasos/admin201ucslkx/index.php/improve/modules/manage?token=fcf4206c285fc84d43cc126bd5d8c8f5\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminCategories&amp;addcategory&amp;token=d8b501f81492c026bf66b76fc105809e\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_kasos/admin201ucslkx/index.php/sell/catalog/products/new?token=fcf4206c285fc84d43cc126bd5d8c8f5\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=873b0d41d19dbd14ca14290329afb029\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminOrders&amp;token=206a0a7e8f699030fcf0fa29fbf604a2\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"103\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories/10?-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\"
        data-post-link=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminQuickAccesses&token=797ff9e2d69fcc40294dc98f8a284939\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Categories - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminQuickAccesses&token=797ff9e2d69fcc40294dc98f8a284939\">
      <i class=\"material-icons\">settings</i>
      Manage quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/jms_kasos/admin201ucslkx/index.php?controller=AdminSearch&amp;token=cfb3df60f17a70deda6110cc86a922d3\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/jms_kasos/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Did you check your conversion rate lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              No news is good news, isn't it?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40admin.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Mr</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/employees/1/edit?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\">
      <i class=\"material-icons\">settings</i>
      Your profile
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminLogin&amp;logout=1&amp;token=7b1b1dd2cf8e13ab7dfa12c760bfff80\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/employees/toggle-navigation?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminDashboard&amp;token=21a25379fe8092e7f4c63b7674ea1100\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminOrders&amp;token=206a0a7e8f699030fcf0fa29fbf604a2\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Orders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminOrders&amp;token=206a0a7e8f699030fcf0fa29fbf604a2\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/orders/invoices/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminSlip&amp;token=edc6dd5edc8686fb1f4d95234a4cd42b\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/orders/delivery-slips/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminCarts&amp;token=a7d8af825bd494d5eeea62142516f82a\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/catalog/products?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/catalog/products?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/catalog/categories?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminTracking&amp;token=b4c95ac2730fe607e82159b72014c2fa\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminAttributesGroups&amp;token=c78b90af73e56e6a1d2317ba71ccb5d8\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/catalog/brands/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminAttachments&amp;token=1ce7ca4781231c83966a7779a8795ecc\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminCartRules&amp;token=873b0d41d19dbd14ca14290329afb029\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/stocks/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/customers/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Customers
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/customers/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminAddresses&amp;token=9af073a9767418189e0c2d7b7403e19e\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminCustomerThreads&amp;token=081ed2ccc79c1e7b4bd79526abac2a01\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Customer Service
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminCustomerThreads&amp;token=081ed2ccc79c1e7b4bd79526abac2a01\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminOrderMessage&amp;token=a2a40405ed25269632a6d04239500cbd\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminReturn&amp;token=1aee84b2d96bf1426af7755c89354e4f\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminStats&amp;token=d04431926e927f359bb6bcb2122157ad\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Stats
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/modules/manage?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/modules/manage?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminPsMboModule&amp;token=d733e317e7bff9a41d0240c5b171fa8e\" class=\"link\"> Module Catalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/design/themes/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/design/themes/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminPsMboTheme&amp;token=8593a2c863e173391ecfdda2e70b9b76\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminMailThemeParent\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/design/mail_theme/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/design/cms-pages/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/design/modules/positions/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminImages&amp;token=4e38195b156f4867a7e99f625f29fd5c\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/modules/link-widget/list?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminCarriers&amp;token=8ec5ec1a69154c402675f6369855d3fb\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Shipping
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminCarriers&amp;token=8ec5ec1a69154c402675f6369855d3fb\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/shipping/preferences?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/payment/payment_methods?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Payment
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/payment/payment_methods?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/payment/preferences?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/international/localization/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/international/localization/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminZones&amp;token=7252c4a03d283328c9f877befca6234b\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/international/taxes/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/improve/international/translations/settings?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/shop/preferences/preferences?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Shop Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/shop/preferences/preferences?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/shop/order-preferences/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/shop/product-preferences/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/shop/customer-preferences/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/shop/contacts/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/shop/seo-urls/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminSearchConf&amp;token=4d492a3802dd387ac166bed2408e44ff\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminGamification&amp;token=c51497bfa2e080ae11099577da226099\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/system-information/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Advanced Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/system-information/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/performance/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/administration/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/emails/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/import/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/employees/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/sql-requests/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/logs/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/jms_kasos/admin201ucslkx/index.php/configure/advanced/webservice-keys/?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"134\" id=\"tab-JMS-MODULES\">
              <span class=\"title\">Jms Modules</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"135\" id=\"subtab-AdminJmsmegamenuDashboard\">
                  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsmegamenuManager&amp;token=7a6061013b0520735a346c5938cf65ea\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Jms MegaMenu
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-135\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminJmsmegamenuManager\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsmegamenuManager&amp;token=7a6061013b0520735a346c5938cf65ea\" class=\"link\"> Menu Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminJmsmegamenuStyle\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsmegamenuStyle&amp;token=b83e9e12b7a62585e586938444612603\" class=\"link\"> Menu Style
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"138\" id=\"subtab-AdminJmsblogDashboard\">
                  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsblogCategories&amp;token=fa85a79b492bbbc36e30d610122a939d\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Jms Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-138\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"139\" id=\"subtab-AdminJmsblogCategories\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsblogCategories&amp;token=fa85a79b492bbbc36e30d610122a939d\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-AdminJmsblogPost\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsblogPost&amp;token=5bc8e3e2d4923a8dcd35b7ba0b8653bc\" class=\"link\"> Post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-AdminJmsblogComment\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsblogComment&amp;token=d66a5a41465e0481425632fe7039b7b7\" class=\"link\"> Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"142\" id=\"subtab-AdminJmsblogSetting\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsblogSetting&amp;token=8ea4e201ce44e667479ece2ae2b6686a\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"143\" id=\"subtab-AdminJmspagebuilderDashboard\">
                  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmspagebuilderHomepages&amp;token=30b5d63e7ac0503e4c1aab73a3432f97\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Jms Page Builder
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-143\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"144\" id=\"subtab-AdminJmspagebuilderHomepages\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmspagebuilderHomepages&amp;token=30b5d63e7ac0503e4c1aab73a3432f97\" class=\"link\"> Home Pages
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-AdminJmspagebuilderSetting\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmspagebuilderSetting&amp;token=f8469b5485b6792a5f79806706495e9b\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"147\" id=\"subtab-AdminJmsvermegamenuDashboard\">
                  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsvermegamenuManager&amp;token=4883da79437766b5471f4fb99f4113dd\" class=\"link\">
                    <i class=\"material-icons mi-menu\">menu</i>
                    <span>
                    Jms Vertical MegaMenu
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-147\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminJmsvermegamenuManager\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsvermegamenuManager&amp;token=4883da79437766b5471f4fb99f4113dd\" class=\"link\"> Menu Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminJmsvermegamenuStyle\">
                              <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminJmsvermegamenuStyle&amp;token=c20ff380fb15eb0eed4e0f102c0d9d5f\" class=\"link\"> Menu Style
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/jms_kasos/admin201ucslkx/index.php/sell/catalog/categories?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\" aria-current=\"page\">Categories</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Shop          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminPsMboModule&token=d733e317e7bff9a41d0240c5b171fa8e';
    var controller = 'AdminCategories';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/jms_kasos/admin201ucslkx/index.php/sell/catalog/categories/new?id_parent=10&amp;_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\"                  title=\"Add new category\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new category
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/jms_kasos/admin201ucslkx/index.php/improve/modules/catalog?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\"                title=\"Recommended Modules\"
                              >
                Recommended Modules
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/jms_kasos/admin201ucslkx/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminCategories%253Fversion%253D1.7.6.0%2526country%253Den/Help?_token=jjL7S_f-8wqnpg5sALBzW1y539DEpVkFH7qK3MZ9rlA\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1386
        $this->displayBlock('content_header', $context, $blocks);
        // line 1387
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1388
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1389
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1390
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Recommended Modules and Services</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/jms_kasos/admin201ucslkx/index.php?controller=AdminDashboard&amp;token=21a25379fe8092e7f4c63b7674ea1100\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Mr&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_kasos%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/jms_kasos/admin201ucslkx/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=admin%40admin.com&amp;firstname=Mr&amp;lastname=Huy&amp;website=http%3A%2F%2Flocalhost%2Fjms_kasos%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1511
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 174
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1386
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1387
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1388
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1389
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1511
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__2486c00c0559dc09baa5fef00b5975a06b54738f89cbd0d639f8bd2aad5f5fb2";
    }

    public function getDebugInfo()
    {
        return array (  1601 => 1511,  1596 => 1389,  1591 => 1388,  1586 => 1387,  1581 => 1386,  1572 => 174,  1564 => 1511,  1441 => 1390,  1438 => 1389,  1435 => 1388,  1432 => 1387,  1430 => 1386,  214 => 174,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2486c00c0559dc09baa5fef00b5975a06b54738f89cbd0d639f8bd2aad5f5fb2", "");
    }
}
