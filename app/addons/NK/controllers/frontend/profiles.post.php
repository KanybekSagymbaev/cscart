<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($mode == 'update') {
        $subscriber_id = fn_get_subscriber_id_by_email($_REQUEST['user_data']['email']);
        $subscriber_data = array(
            'email' => $_REQUEST['user_data']['email'],
            'lang_code' => CART_LANGUAGE
        );

        if (!empty($_REQUEST['mailing_lists'])) {
            $subscriber_data['list_ids'] = $_REQUEST['mailing_lists'];
        }

        fn_update_subscriber($subscriber_data, $subscriber_id);
    }

    return;
}

if ($mode == 'add' || $mode == 'update') {
    list($page_mailing_lists) = fn_get_mailing_lists();
    Tygh::$app['view']->assign('page_mailing_lists', $page_mailing_lists);
}

if ($mode == 'update') {
    $email = db_get_field("SELECT email FROM ?:users WHERE user_id = ?i", Tygh::$app['session']['auth']['user_id']);
    $mailing_lists = db_get_hash_array("SELECT * FROM ?:subscribers INNER JOIN ?:user_mailing_lists ON ?:subscribers.subscriber_id = ?:user_mailing_lists.subscriber_id WHERE ?:subscribers.email = ?s", 'list_id', $email);
    Tygh::$app['view']->assign('user_mailing_lists', $mailing_lists);
}
