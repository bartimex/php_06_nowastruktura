<?php
//konfiguracja
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/php_06_nowastruktura';
$conf->action_root = $conf->app_root.'/ctrl.php?action=';

//wartości wygenerowane na podstawie powyższych
$conf->action_url = $conf->server_url.$conf->action_root;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);