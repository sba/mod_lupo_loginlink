<?php
/**
 * @package     LUPO
 * @copyright   Copyright (C) databauer / Stefan Bauer
 * @author      Stefan Bauer
 * @link        https://www.ludothekprogramm.ch
 * @license     License GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

$class_hidden = $nbr_reservations===0?'uk-hidden':'';
$res = '<i class="uk-icon-shopping-cart uk-align-right '.$class_hidden.'" id="lupo_loginlink_reservations"> <span class="uk-badge uk-badge-notification">'.$nbr_reservations.'</span></i>';

if($client_logged_in){
    $url = JURI::current();
    echo '<h3 id="lupo_loginlink"><a href="'.$loginlink_url.'"><i class="uk-icon-user"></i> '.JText::_('MOD_LUPO_LOGINLINK_ACCOUNT').$res.'</a></h3>';
    //echo '<h3><a href="'.$url.'?clientLogout"><i class="uk-icon-power-off"></i> '.JText::_('MOD_LUPO_LOGINLINK_LOGOUT').'</a></h3>';
} else {
	echo '<h3 id="lupo_loginlink"><a href="'.$loginlink_url.'"><i class="uk-icon-sign-in"></i> '. JText::_('MOD_LUPO_LOGINLINK_LOGIN') .$res.'</a></h3>';
}

