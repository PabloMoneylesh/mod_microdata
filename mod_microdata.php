<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_thumbnails
 *
 * @copyright	Copyright © 2016 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */
defined('_JEXEC') or die;


$document =  JFactory::getDocument();
$siteName="ruPoland.com";
$title="ruPoland.com - доска объявлений в Польше, каталог бизнес услуг на русском языке";
$description="Сайт бесплатных объявлений о услугах в Польше на русском языке. Бизнес объявления по рубрикам и городам Польши. Полезная информация для иностранцев о Польше на русском языке.";

$currenturi = JUri::getInstance();
$imageurl="images/ruPoland.jpg";
$document->addCustomTag('<meta property="og:title" content="'.$title.'"/>');
$document->addCustomTag('<meta property="og:description" content="'.$description.'"/>');
$document->addCustomTag('<meta property="og:type" content="website"/>');

$document->addCustomTag('<meta property="og:url" content="'.$currenturi->toString().'"/>');

$document->addCustomTag('<meta property="og:site_name" content="'.$siteName.'"/>');
$document->addCustomTag('<meta property="og:image" content="'.JURI::base() . $imageurl.'"/>');
$document->addCustomTag('<meta property="og:image:secure_url" content="'.JURI::base() . $imageurl.'"/>');
$document->addCustomTag('<meta property="og:image:type" content="image/jpeg" />');
$document->addCustomTag('<meta property="og:image:width" content="500" />');
$document->addCustomTag('<meta property="og:image:height" content="330" />');

$json_ld = '<script type="application/ld+json"> {';
$json_ld .='"@context": "http://schema.org/",';
$json_ld .='"@type": "WebSite",';
$json_ld .='"name": "ruPoland.com",';
$json_ld .='"description": "'. $description. '",';
$json_ld .='"headline":"'. $title .'",';
$json_ld .='"url": "https://www.rupoland.com",';
$json_ld .='"isAccessibleForFree":true,';
$json_ld .='"image":"'. JURI::base() . $imageurl .'"';
$json_ld .= '}</script>';
$document->addCustomTag($json_ld);
