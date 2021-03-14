<?php
/**
 *
 * Member Avatar & Status [MAS]. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018-2021, Dark❶ [dark1]
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 *
 * Language : English [en]
 * Translators :
 * 1. Dark❶ [dark1]
 *
 *
 */

/**
 * DO NOT CHANGE
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	'ACP_MAS_BY'				=> 'Door',
	'ACP_MAS_DEV_BY'			=> 'Ontwikkeld door',
	'ACP_MAS_AND'				=> 'en',

	// ACP MAS Setting Page Common Elements
	'ACP_MAS_AVATAR'			=> 'Avatar inschakelen',
	'ACP_MAS_AV_SET'			=> 'Avatar instellingen',
	'ACP_MAS_AV_SIZE'			=> 'Avatar grootte',
	'ACP_MAS_AV_SIZE_PX'		=> 'Pixel [px]',
	'ACP_MAS_AV_SZ_BIG_EXPLAIN'	=> 'Stel de grootte van de avatar in pixels [px] in,<br>toegestaan ​​tussen 9px en 999px.<br>Standaard: 50px',
	'ACP_MAS_AV_SZ_SML_EXPLAIN'	=> 'Stel de grootte van de avatar in pixels [px] in,<br>Alleen toegestaan ​​tussen 9px en 99px.<br>Standaard : 20px',
	'ACP_MAS_ONLINE'			=> 'Online status inschakelen',
	'ACP_MAS_OL_SET'			=> 'Online status instellingen',

	// phpBB
	'ACP_MAS_PHPBB_AV_SET'		=> 'phpBB Avatar Instellingen',
	'ACP_MAS_PHPBB_AV_LB'		=> 'Schakel Avatars in',
	'ACP_MAS_PHPBB_AV_EXPLAIN'	=> 'Geen van de onderstaande Avatar instellingen zal werken,<br>Omdat phpBB Avatar is uitgeschakeld.<br>Schakel het hier in : ',
	'ACP_MAS_PHPBB_OL_SET'		=> 'phpBB Online Status Instellingen',
	'ACP_MAS_PHPBB_OL_LB'		=> 'Schakel de weergave van online / offline gebruikersinformatie in',
	'ACP_MAS_PHPBB_OL_EXPLAIN'	=> 'Geen van de onderstaande Online Status instellingen zal werken,<br>Omdat phpBB Online Status is uitgeschakeld.<br>Schakel het hier in : ',

	// General
	'ACP_MAS_GN_AV_EXPLAIN'		=> 'Schakelt de avatar in MAS in,<br>Dit is de hoofdschakelaar voor alle anderen.<br>Standaard : Nee',
	'ACP_MAS_GN_OL_EXPLAIN'		=> 'Schakelt de online status in MAS in,<br>Dit is de hoofdschakelaar voor alle anderen.<br>Standaard : Nee',
	'ACP_MAS_COL_ON'			=> 'Online Status Color',
	'ACP_MAS_COL_ON_EXPLAIN'	=> 'Kleur van de onlinestatus,<br>Dit is in hexadecimaal [00 tot FF] per RGB kleur.<br>Standaard : “00FF00”',
	'ACP_MAS_COL_OFF'			=> 'Offline statuskleur',
	'ACP_MAS_COL_OFF_EXPLAIN'	=> 'Kleur van de offline status,<br>Dit is in hexadecimaal [00 tot FF] per RGB kleur.<br>Standaard : “000000”',
	// Memberlist
	'ACP_MAS_ML_AV_EXPLAIN'		=> 'Activeert de avatar in de ledenlijst,<br>Dat is op de pagina “Het team”, “Groepen” en “Leden”.<br>Standaard : Nee',
	'ACP_MAS_ML_OL_EXPLAIN'		=> 'Schakelt de online status in de ledenlijst in,<br>Dat is op de pagina “Het team”, “Groepen” en “Leden”.<br>Standaard : Nee',
	// Viewonline
	'ACP_MAS_VO_PG_AV_SET'		=> 'Pagina avatar-instellingen',
	'ACP_MAS_VO_PG_AV_EXPLAIN'	=> 'Activeert de avatar in de Viewonline pagina,<br>Dat is in de “Wie is online” pagina.<br>Standaard: Nee',
	'ACP_MAS_VO_SB_AV_SET'		=> 'Stat Block Avatar instellingen',
	'ACP_MAS_VO_SB_AV_EXPLAIN'	=> 'Activeert de avatar in Viewonline Stat blok,<br>Dat is in het statistiek “Wie is online” blok onderaan elke pagina.<br>Standaard: Nee',
	// Viewforum
	'ACP_MAS_VF_FP_SET'			=> 'Eerste poster instellingen',
	'ACP_MAS_VF_FP_AV_EXPLAIN'	=> 'Schakelt de eerste poster avatar in Viewforum in,<br>Dat is in alle forumpagina’s.<br>Standaard: Nee',
	'ACP_MAS_VF_FP_OL_EXPLAIN'	=> 'Schakelt de eerste onlinestatus van de poster in Viewforum in,<br>Dat is in alle forumpagina’s.<br>Standaard: Nee',
	'ACP_MAS_VF_LP_SET'			=> 'Laatste poster instellingen',
	'ACP_MAS_VF_LP_AV_EXPLAIN'	=> 'Schakelt de laatste poster-avatar in Viewforum in,<br>Dat staat op alle forumpagina’s en indexpagina.<br>Standaard: Nee',
	'ACP_MAS_VF_LP_OL_EXPLAIN'	=> 'Schakelt de laatste onlinestatus van de poster in Viewforum in,<br>Dat is in alle forumpagina’s en indexpagina’s.<br>Standaard: Nee',
	// Search
	'ACP_MAS_SH_FP_SET'			=> 'Onderwerp Instellingen eerste poster',
	'ACP_MAS_SH_FP_AV_EXPLAIN'	=> 'Activeert de Avatar Onderwerp Eerste Poster in Zoeken,<br>Dat is in alle Onderwerp zoekpagina’s.<br>Standaard: Nee',
	'ACP_MAS_SH_FP_OL_EXPLAIN'	=> 'Schakelt de onlinestatus van de eerste poster van het onderwerp in zoeken in,<br>Dat is in alle pagina’s voor het zoeken naar onderwerpen.<br>Standaard: Nee',
	'ACP_MAS_SH_LP_SET'			=> 'Onderwerp Laatste poster instellingen',
	'ACP_MAS_SH_LP_AV_EXPLAIN'	=> 'Schakelt de onderwerp Laatste poster avatar in zoeken in,<br>Dat is in alle onderwerpzoekpagina’s.<br>Standaard: Nee',
	'ACP_MAS_SH_LP_OL_EXPLAIN'	=> 'Schakelt de onlinestatus van de laatste poster van het onderwerp in Zoeken in,<br>Dat is in alle pagina’s voor het zoeken naar onderwerpen.<br>Standaard: Nee',
	'ACP_MAS_SH_UP_SET'			=> 'Post gebruiker instellingen',
	'ACP_MAS_SH_UP_AV_EXPLAIN'	=> 'Activeert de Post gebruikersavatar in Zoeken,<br>Dat is in alle Post zoekpagina’s.<br>Standaard: Nee',
	'ACP_MAS_SH_UP_OL_EXPLAIN'	=> 'Schakelt de onlinestatus van postgebruiker in zoeken in,<br>Dat is in alle postzoekpagina’s.<br>Standaard: Nee',
	// Review
	'ACP_MAS_RV_AV_EXPLAIN'		=> 'Schakelt de avatar in beoordelingsblok in,<br>Dat is op de pagina “Beoordeling van onderwerp plaatsen”, “Beoordeling van Moderatorpaneel onderwerp” en “Beoordeling van PB geschiedenis”.<br>Standaard: Nee',
	'ACP_MAS_RV_OL_EXPLAIN'		=> 'Schakelt de onlinestatus in beoordelingsblokkering in,<br>Dat is op de pagina “Beoordeling van onderwerp plaatsen”, “Beoordeling van Moderatorpaneel onderwerp” en “Beoordeling van PB geschiedenis”.<br>Standaard: Nee',
	// Friendlist
	'ACP_MAS_FL_AV_EXPLAIN'		=> 'Activeert de avatar in de vriendenlijst,<br>Dat is in alle Gebruikerspaneel pagina’s.<br>Standaard: Nee',
	'ACP_MAS_FL_OL_EXPLAIN'		=> 'Schakelt de online status in de vriendenlijst in,<br>Dat is in alle Gebruikerspaneel pagina’s.<br>Standaard: Nee',
]);
