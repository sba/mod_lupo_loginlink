<?php
/**
 * @package     LUPO
 * @copyright   Copyright (C) databauer / Stefan Bauer
 * @author      Stefan Bauer
 * @link        https://www.ludothekprogramm.ch
 * @license     License GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

require_once(dirname(__FILE__) . '/helper.php');
new ModLupoLoginlinkHelper();

$app = JFactory::getApplication();

$jinput       = JFactory::getApplication()->input;
$clientLogout = $jinput->get('clientLogout', false);

if ($clientLogout !== false) {
    ModLupoLoginlinkHelper::clientLogout($params);
    $app->redirect(JURI::current());
}


$session = JFactory::getSession();
$client  = $session->get('lupo_client');

if ($client) {
    $client_logged_in = true;
} else {
    $client_logged_in = false;
}

$loginlink_url = $params->get('loginlink_url');


require JModuleHelper::getLayoutPath('mod_lupo_loginlink', $params->get('layout', 'default'));
