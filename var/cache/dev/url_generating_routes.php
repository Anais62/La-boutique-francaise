<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_account_adress' => [[], ['_controller' => 'App\\Controller\\AccountAdressController::index'], [], [['text', '/compte/adresses']], [], [], []],
    'app_account_adress_add' => [[], ['_controller' => 'App\\Controller\\AccountAdressController::add'], [], [['text', '/compte/ajouter-une-adresse']], [], [], []],
    'app_account_adress_edit' => [['id'], ['_controller' => 'App\\Controller\\AccountAdressController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/modifier-une-adresse']], [], [], []],
    'app_account_adress_delete' => [['id'], ['_controller' => 'App\\Controller\\AccountAdressController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/supprimer-une-adresse']], [], [], []],
    'app_account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/compte']], [], [], []],
    'app_account_order' => [[], ['_controller' => 'App\\Controller\\AccountOrderController::index'], [], [['text', '/compte/mes-commandes']], [], [], []],
    'app_account_order_show' => [['reference'], ['_controller' => 'App\\Controller\\AccountOrderController::show'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/compte/mes-commandes']], [], [], []],
    'app_account_password' => [[], ['_controller' => 'App\\Controller\\AccountPasswordController::index'], [], [['text', '/compte/modifier-mon-mot-de-passe']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/mon-panier']], [], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], [], []],
    'remove_my_cart' => [[], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['text', '/cart/remove']], [], [], []],
    'delete_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/delete']], [], [], []],
    'decrease_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrease'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/decrease']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/nous-contacter']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_order_cancel' => [['stripSessionId'], ['_controller' => 'App\\Controller\\OrderCancelController::index'], [], [['variable', '/', '[^/]++', 'stripSessionId', true], ['text', '/commande/erreur']], [], [], []],
    'app_order' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/commande']], [], [], []],
    'app_order_recap' => [[], ['_controller' => 'App\\Controller\\OrderController::add'], [], [['text', '/commande/recapitulatif']], [], [], []],
    'app_order_validate' => [['stripSessionId'], ['_controller' => 'App\\Controller\\OrderSuccesController::index'], [], [['variable', '/', '[^/]++', 'stripSessionId', true], ['text', '/commande/merci']], [], [], []],
    'app_products' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/nos-produits']], [], [], []],
    'app_product' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/produit']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription']], [], [], []],
    'app_reset_password' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::index'], [], [['text', '/mot-de-passe-oublie']], [], [], []],
    'app_update_password' => [['token'], ['_controller' => 'App\\Controller\\ResetPasswordController::update'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/modifier-mon-mot-de-passe']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'app_stripe_create_session' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::index'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/commande/create-session']], [], [], []],
    'App\Controller\AccountAdressController::index' => [[], ['_controller' => 'App\\Controller\\AccountAdressController::index'], [], [['text', '/compte/adresses']], [], [], []],
    'App\Controller\AccountAdressController::add' => [[], ['_controller' => 'App\\Controller\\AccountAdressController::add'], [], [['text', '/compte/ajouter-une-adresse']], [], [], []],
    'App\Controller\AccountAdressController::edit' => [['id'], ['_controller' => 'App\\Controller\\AccountAdressController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/modifier-une-adresse']], [], [], []],
    'App\Controller\AccountAdressController::delete' => [['id'], ['_controller' => 'App\\Controller\\AccountAdressController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/supprimer-une-adresse']], [], [], []],
    'App\Controller\AccountController::index' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/compte']], [], [], []],
    'App\Controller\AccountOrderController::index' => [[], ['_controller' => 'App\\Controller\\AccountOrderController::index'], [], [['text', '/compte/mes-commandes']], [], [], []],
    'App\Controller\AccountOrderController::show' => [['reference'], ['_controller' => 'App\\Controller\\AccountOrderController::show'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/compte/mes-commandes']], [], [], []],
    'App\Controller\AccountPasswordController::index' => [[], ['_controller' => 'App\\Controller\\AccountPasswordController::index'], [], [['text', '/compte/modifier-mon-mot-de-passe']], [], [], []],
    'App\Controller\Admin\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\CartController::index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/mon-panier']], [], [], []],
    'App\Controller\CartController::add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], [], []],
    'App\Controller\CartController::remove' => [[], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['text', '/cart/remove']], [], [], []],
    'App\Controller\CartController::delete' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/delete']], [], [], []],
    'App\Controller\CartController::decrease' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrease'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/decrease']], [], [], []],
    'App\Controller\ContactController::index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/nous-contacter']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\OrderCancelController::index' => [['stripSessionId'], ['_controller' => 'App\\Controller\\OrderCancelController::index'], [], [['variable', '/', '[^/]++', 'stripSessionId', true], ['text', '/commande/erreur']], [], [], []],
    'App\Controller\OrderController::index' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/commande']], [], [], []],
    'App\Controller\OrderController::add' => [[], ['_controller' => 'App\\Controller\\OrderController::add'], [], [['text', '/commande/recapitulatif']], [], [], []],
    'App\Controller\OrderSuccesController::index' => [['stripSessionId'], ['_controller' => 'App\\Controller\\OrderSuccesController::index'], [], [['variable', '/', '[^/]++', 'stripSessionId', true], ['text', '/commande/merci']], [], [], []],
    'App\Controller\ProductController::index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/nos-produits']], [], [], []],
    'App\Controller\ProductController::show' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/produit']], [], [], []],
    'App\Controller\RegisterController::index' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription']], [], [], []],
    'App\Controller\ResetPasswordController::index' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::index'], [], [['text', '/mot-de-passe-oublie']], [], [], []],
    'App\Controller\ResetPasswordController::update' => [['token'], ['_controller' => 'App\\Controller\\ResetPasswordController::update'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/modifier-mon-mot-de-passe']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'App\Controller\StripeController::index' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::index'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/commande/create-session']], [], [], []],
];