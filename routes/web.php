<?php


// +===================================+
// | User Login Information |
// +===================================+
Route::get("/","HomeController@index_page")->name("index");
Route::get("/","HomeController@index_page")->name("/");
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    Route::get("domain-offer","HomeController@domain_offer")->name("DomainOffer");
    Route::get("hosting-offer","HomeController@hosting_offer")->name("HostingOffer");
    Route::get("combo-offer","HomeController@combo_offer")->name("CombogOffer");
    Route::get("webserver-offer","HomeController@webserver_offer")->name("WebservergOffer");
    Route::get("exclusive-offer","HomeController@all_exclusive_offer")->name("AllExclusiveOffer");
    Route::get("special-offer","HomeController@all_special_offer")->name("AllSpecialOffer");
    Route::get("regular-offer","HomeController@all_regular_offer")->name("AllRegularOffer");
    Route::get("expired-offer","HomeController@all_expired_offer")->name("AllExpiredOffer");
    //login form
    Route::get('sign-in', 'Auth\LoginController@showLoginForm')->name('login');
    //register form
    Route::get("sign-up","Auth\LoginController@showRegistarForm")->name("sign-up");
    //register action
    Route::post("user-register","AuthLoginController@register")->name("user.register");
    //login action
    Route::post("user-login","AuthLoginController@login")->name("user.login");
    Route::post("promo-code","Dashboard\AuthProductController@promo_code_append");
    Route::post("product-detail","Dashboard\AuthProductController@product_detail")->name('product-detail');
    Route::post('subscribe', 'HomeController@subscribe')->name('subscribe');
    Route::post("UpdateUser","HomeController@update_user_info")->name("UpdateUser");

    Route::group(['middleware' => 'check_user_access','auth'], function () {

        Route::get("submit-offer/{id?}","HomeController@submit_offer")->name("SubmitOffer");
        Route::get("account","HomeController@account_info")->name("Account");
        Route::post("update-passrord","HomeController@Update_password")->name("UpdatePassword");
        Route::post("submit-offer","OfferController@submit_offer")->name("CreateOffer");
        //user Logout action
        Route::post('user-logout', 'AuthLoginController@logout')->name("user.logout");
        Route::post('put-on-hold', 'OfferController@putonhold')->name("put-on-hold");
        Route::post('offer-delete', 'OfferController@offer_delete')->name("offer-delete");
        Route::get('user-dashboard', 'Dashboard\UserInfoController@user_dashboard')->name('Userdashboard');
        Route::get('user-details/{id}', 'Dashboard\UserInfoController@user_details');

    });
    Route::get('dhoadmin', 'AuthLoginController@admin_login_form')->name('admin.login');

    Route::group(['middleware' => 'CheckAdmin','auth'], function () {

        Route::get('user-list', 'Dashboard\UserInfoController@user_info')->name('UserList');
        Route::get('product-list/{id?}', 'Dashboard\AuthProductController@product_info')->name('ProductList');
        Route::post('product-list-dt', 'Dashboard\AuthProductController@product_info_dt');
        Route::get('expired-product-list', 'Dashboard\AuthProductController@ExpiredProductList')->name('ExpiredProductList');
        Route::post('expired-product-list-dt', 'Dashboard\AuthProductController@expired_product_info_dt');
        Route::get('single-product-info/{id}', 'Dashboard\AuthProductController@product_info_single');
        Route::post('single-product-info', 'Dashboard\AuthProductController@auth_edit_offer')->name('AuthEditOffer');
        Route::post('auth-user-info', 'Dashboard\UserInfoController@user_info_modal');
        Route::get('about-us', 'Dashboard\UserInfoController@about_us')->name('auth.about');
        Route::post('about-us', 'Dashboard\UserInfoController@about_us_update')->name('updated.about-us');
        Route::get('edit-profile', 'AuthLoginController@show');
        Route::post('edit-data', 'AuthLoginController@edit')->name('edit-data');
        Route::post('delete-offer', 'Dashboard\AuthProductController@offer_delete')->name("offer-delete");
        Route::get('add-user', 'Dashboard\UserInfoController@add_user')->name('AddUser');
        Route::post('update-user', 'Dashboard\UserInfoController@update_user')->name('auth.user.register');
        Route::post('delete-user', 'Dashboard\UserInfoController@delete_user');
        Route::get('add-product/{id}', 'Dashboard\AuthProductController@auth_add_offer');
        Route::post("auth-add-product","Dashboard\AuthProductController@submit_offer")->name('auth.add.offer');
        Route::get('aaa', 'Dashboard\AuthProductController@aaa'); 
        Route::post('auth-offer-info', 'Dashboard\AuthProductController@auth_edit_offer_view'); 
        Route::post('auth-update-status', 'Dashboard\AuthProductController@auth_edit_offer_status'); 
        Route::post('auth-multi-select', 'Dashboard\AuthProductController@auth_multy_select');
        Route::get('aaa', 'Dashboard\AuthProductController@aaa');
    });

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //my-events page

    Route::get("pay","PayOrderController@store")->name("demo");
    Route::get("demo","HomeController@demo_view")->name("demo");
    Route::get("demo_order","HomeController@demo_order_view")->name("demo");
    Route::get("demo_order_form","HomeController@demo_order_q")->name("demo");
    Route::get("user-setting/{page?}","HomeController@user_setting")->name("UserSetting");
    Route::post("basic-info","HomeController@edit_basic_info")->name("BasicInfo");
    Route::post("basic-info2","HomeController@edit_user_avatar")->name("UserAvatarCng");
    Route::post("basic-info3","HomeController@edit_user_email")->name("UserEmailCng");
    Route::post("basic-info4","HomeController@edit_user_pass")->name("UserpassCng");
    Route::get("my-events","EventControler@show_my_events")->name("MyEvents");
    Route::get("add-events","EventControler@show_event_form")->name("AddEvent");
    Route::post("insert-event","EventControler@create_event")->name("createEvent");
    Route::post("edit-event","EventControler@edit_event")->name("edit-event");
    Route::get("withdraw","WithdrawController@withdraw")->name("Withdraw");

    Route::get("event-setup/{id}/{page?}","EventControler@event_setup_view")->name("event_setup");

    Route::get("delete-event/{id}","EventControler@delete_event")->name("delete-event");
    Route::post("order_form_select","EventControler@order_form_select");

    Route::post("all-tickets","TicketController@all_ticket")->name("all_ticket_datatable");

    Route::post("create-tickets","TicketController@create_tickets")->name("create_tickets");

    Route::post("ticket-delete","TicketController@ticket_delete")->name("ticket_delete");
    Route::post("modal-edit-ticket","TicketController@edit_ticket")->name("edit-ticket");
    Route::post("action-edit-ticket","TicketController@action_edit_ticket")->name("action-edit-ticket");
    Route::get("checkout","TicketController@buy_ticket")->name("TicketOrder");


    Route::post("ticket-question-add","OrderController@ticket_questoion_add")->name("ticket-question-add");
    Route::post("all-orders","OrderController@all_order")->name("all_order_datatable");
    Route::get("order-form","OrderController@order_form")->name("order_form_datatable");
    Route::post("ticket-toggle","OrderController@ticket_toggle");
    Route::post("ticket-question-update","OrderController@ticket_update_html")->name("modal-edit-ticket-question");
    Route::post("ticket-question-edit","OrderController@ticket_question_edit")->name("ticket-question-edit");
    Route::post("order_datatable_form","OrderController@order_datatable_form")->name("order_datatable_form");
    Route::post("attendee_datatable_form","OrderController@attendee_datatable_form")->name("attendee_datatable_form");
    Route::post("confirm-order-user","OrderController@confirm_order_user");

    Route::post("add-sponser","SponserController@add_sponser")->name("add-sponser");
    Route::post("all-sponser","SponserController@all_sponsers")->name("all-sponser");
    Route::post("sponser-delete","SponserController@sponser_delete")->name("sponser-delete");

    Route::post("question-delete","OrderController@order_question_delete")->name("question-delete");
    Route::post("modal-view-order","OrderController@modal_view_order");

    Route::post("all-attendee","AttendeeController@all_attendee")->name("all_attendee_datatable");


    Route::get("event-details/{event_id}","EventControler@event_detail")->name("EventDetails");
    Route::get("demo-ticket/{event_id}/{ticket_id}","TicketController@ticket_detail");
    Route::get("event-setup/{id}/overview}","EventControler@event_overview_admin")->name('event-overview-admin');
    Route::get("resend-mail/{random}/{event_id}/{tran}","EventControler@resend_mail");
    Route::get("ticket-view-admin/{tran_id}/{event_id}/{random_number}","EventControler@ticket_view_admin");

    Route::post("withdraw-cash","WithdrawController@withdraw_money")->name("WithdrawCredit");
    Route::post("withdraw-history","WithdrawController@withdraw_status")->name("withdraw-status");


Route::get("qrcode","OrderController@qr_generate");

Route::post("buy-ticket","PaymentController@ticket_generate")->name("ticket-generate");
Route::any("payment_status","PaymentController@payment_status");
Route::get("buy-ticket/{event_id}","EventControler@event_ticket")->name("Buyticket");
Route::post("buy-ticket-option","EventControler@buy_ticket_option");
Route::get("e/{event_link}","EventControler@event_details_for_all");
Route::get("exam","OrderController@demo_example");



    Route::get("ticket-view/{tran_id}/{event_id}/{ticket_id}/{random_number}","PaymentController@ticket_view");

Route::get('clear', 'HomeController@All_clear');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'AuthLoginController@showResetForm')->name('password.reset');
Route::post('password-reset', 'AuthLoginController@reset_pass_post')->name('reset_pass_post');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => 'CheckAdmin','auth'], function () {

    Route::get('dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
    Route::post('dashboard', 'AuthLoginController@index')->name('user-create');
    Route::get('user-list', 'Dashboard\UserInfoController@user_info')->name('UserList');
    Route::post('user_info_datatable', 'Dashboard\UserInfoController@user_info_dt');
    Route::post('suspend-user', 'Dashboard\UserInfoController@suspend_user');
    Route::get('event-list/{id?}', 'Dashboard\AuthEventController@event_info')->name('EventList');
    Route::post('event-list-dt', 'Dashboard\AuthEventController@event_info_dt');
    Route::get('single-event-info/{id}', 'Dashboard\AuthEventController@event_info_single');
    Route::get("withdraw-history","WithdrawController@withdraw_history");
    Route::post("withdraw_list_datatable","WithdrawController@withdraw_list_datatable");
    Route::get("withdraw/{user_id}/{id}/{amount}","WithdrawController@withdraw_confirmation");
    Route::get("withdraw/{id}/decline","WithdrawController@withdraw_decline");

});

Route::post('admin-login', 'AuthLoginController@admin_login_post')->name('admin.login.post');
