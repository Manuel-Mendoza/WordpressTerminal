<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'utbicent_spad433';
$sitepad['db_user'] = 'utbicent_spad433';
$sitepad['db_pass'] = 'eg)1S-GO[5Yv]][B';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'leKhAg0_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = 'utterminaltunja.com';// URL without protocol but with directory as well
$sitepad['url'] = 'https://utterminaltunja.com';
$sitepad['relativeurl'] = '';
$sitepad['.sitepad'] = '/home/utbicent';
$sitepad['sitepad_plugin_path'] = '/usr/local/sitepad';
$sitepad['editor_path'] = '/usr/local/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'gWPeF07K8tnlNW3YVbBELIyvJ4xGQ8C2JphioolIAEP6yMvBVASOzTazow5kOFiT';
$sitepad['SECURE_AUTH_KEY'] = 'UJHlHOJ6Kzrx2BtxIIap70OBqmDgV5ubtpMROERpc3L7NoTdw1kZ3X5yvV67aa2V';
$sitepad['LOGGED_IN_KEY'] = '6izruooXURRorJpapITJ6t01SVLafSJtc9ts2x8kecvgyTyxQhlUJj39xMQHxsIl';
$sitepad['NONCE_KEY'] = 'MalTyAkQLLjz8iSeTHlI1imlucLAyvaZSwTeHOfL7EBJ5kGKkLcoGpomDWQEYdhO';
$sitepad['AUTH_SALT'] = 'Cgn8MiHvKNTSDlIZik4zRHuKYjkrnxkrVQ5l9DQOTqrUDbtm6DfBLnso2w8zFkcr';
$sitepad['SECURE_AUTH_SALT'] = 'myDpXbKin547tiGYMR3eTjYQqgt6Vk7pWfSozDkeceYpOAgddjuXhnubvRr94RCm';
$sitepad['LOGGED_IN_SALT'] = 'EOYbRnQJR1UJOSPfvO8GF9OJG2AUoQ6LW41L4YtlIMOnrrgfN8EthW0UstKqaUaF';
$sitepad['NONCE_SALT'] = 'elqkt9RwaCX1nIUYjvKceDIu6Q82Gibz4DmA7cDdCcGbSbKRKXA3zARwU9SeGDTh';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

