<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_lupo_login
 *
 * @copyright   Copyright (C) databauer / Stefan Bauer 
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

if($client_logged_in){
    $url = JURI::current();
    echo '<h3 id="lupo_loginlink"><a href="'.$loginlink_url.'">'.JText::_('MOD_LUPO_LOGINLINK_ACCOUNT').'</a>';
    //echo '<a href="'.$url.'?clientLogout"><i class="uk-icon-power-off"></i> '.JText::_('MOD_LUPO_LOGINLINK_LOGOUT').'</a></h3>';
} else {
	echo '<h3 id="lupo_loginlink"><a href="'.$loginlink_url.'">'. JText::_('MOD_LUPO_LOGINLINK_LOGIN') .'</a></h3>';
}

