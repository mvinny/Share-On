<?php
/**
*
* Share On extension for the phpBB Forum Software package.
* Russian translation by Kot Matroskin (https://mindreader.hacktest.net/en/)
*
* @copyright (c) 2015 Vinny <https://github.com/vinny>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// ACP
	'SO_ACP'		=> 'Share On',
	'SO_TITLE'		=> 'Настройка расширения "Share On"',
	'SO_EXPLAIN'	=> 'Настройка сайтов, на которых вы хотите поделиться своими темами.',	
	'SHARE_ON_MOD'	=> 'Поделиться в',
	'SO_CONFIG'		=> 'Настройки',
	'SO_SAVED'		=> 'Изменения сохранены.',
	'SO_SELECT'		=> 'Поделиться в',
	'SO_STATUS'		=> 'Включить расширение "Share On"',
	'SO_FACEBOOK'	=> 'Facebook',
	'SO_TWITTER'	=> 'Twitter',
	'SO_DIGG'		=> 'Digg',
	'SO_REDDIT'		=> 'Reddit',
	'SO_DELICIOUS' 	=> 'Delicious',
	'SO_VK'			=> 'VK',
	'SO_TUENTI'		=> 'Tuenti',
	'SO_TUMBLR'		=> 'Tumblr',
	'SO_GOOGLE'		=> 'Google+',
	'SO_WHATSAPP'	=> 'Whatsapp',

	// Share Type
	'SO_TYPE'			=> 'Способ поделиться',
	'SO_TYPE_EXPLAIN'	=> 'Вы можете выбрать, поделиться ссылкой на <strong>тему</strong> или поделиться каждым отдельным <strong>сообщением</strong> в этой теме.',
));
