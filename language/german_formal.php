<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Bad Behavior plugin 2.0.10 for Geeklog 1.4.x                              |
// +---------------------------------------------------------------------------+
// | german_formal.php                                                         |
// |                                                                           |
// | German formal language file, addressing the user as "Sie"                 |
// +---------------------------------------------------------------------------+
// | Bad Behavior - detects and blocks unwanted Web accesses                   |
// | Copyright (C) 2005-2007 Michael Hampton                                   |
// +---------------------------------------------------------------------------+
// | Geeklog plugin wrapper                                                    |
// | Copyright (C) 2005-2007 by Dirk Haun <dirk AT haun-online DOT de>         |
// | Bad Behavior 2.0.10 wrapper upgrades                                      |
// | Copyright (c) 2007 Mark R. Evans <mark AT gllabs DOT org>                 |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//

$LANG_BAD_BEHAVIOR = array (
    'plugin_display_name' => 'Bad Behavior2',

    'page_title' => 'Bad Behavior2',

    'block_title_admin' => 'Bad Behavior2-Administration',
    'block_title_list' => 'Logfile-Eintr�ge',
    'block_title_entry' => 'Detailansicht',
    'block_title_donate' => 'Spende',

    'list_entries' => 'Logfile-Eintr�ge anzeigen (%d)',
    'list_no_entries' => 'Keine Logfile-Eintr�ge',

    'row_ip' => 'IP-Addresse',
    'row_user_agent' => 'User Agent',
    'row_referer' => 'Referrer',
    'row_response' => 'Response',
    'row_method' => 'Methode',
    'row_protocol' => 'Protokol',
    'row_date' => 'Datum',
    'row_reason' => 'Grund',

    'self_test' => 'Bad Behavior2-Selbsttest',
    'link_back' => 'Zur�ck zur Liste der Logfile-Eintr�ge',

    'title_show_headers' => 'HTTP-Header zeigen',
    'title_lookup_ip' => 'Informationen zur IP-Adresse',

    'error' => 'Fehler',
    'fsockopen_not_available' => 'Die PHP-Funktion <code>fsockopen</code> ist leider nicht verf�gbar. Selbsttest nicht durchf�hrbar.',
    'fsockopen_failed' => 'Konnte keine Socket-Verbindung �ffnen. Selbsttest nicht durchf�hrbar.',

    'donate_msg' => 'Wenn Sie dieses Plugin n�tzlich finden, denken Sie doch bitte �ber eine Spende an den Autor von Bad Behavior, Michael Hampton, nach. <a href="http://www.bad-behavior.ioerror.us/">Zur Bad Behavior-Homepage</a>.',

    'denied_reason' => 'Grund',
    'results' => 'Bad Behavior-Eintr�ge',

    'search' => 'Suchen',
    'stats_headline' => 'Bad Behavior2-Statistik',
    'stats_reason' => 'Grund',
    'stats_blocked' => 'Gesperrt',
    'stats_no_hits' => 'Keine Eintr�ge.',
    'blocked_ips' => 'Abgeblockte Requests nach IP-Adresse',

    'unblock' => 'IP-Adresse freigeben'
);

$LANG_BB2_RESPONSE = array (
	'00000000' => 'Request Passed - No User Agent Specified',
	'136673cd' => 'IP address found on external blacklist',
	'17566707' => 'Required header \'Accept\' missing',
	'17f4e8c8' => 'User-Agent was found on blacklist',
	'21f11d3f' => 'User-Agent claimed to be AvantGo, claim appears false',
	'2b90f772' => 'Connection: TE present, not supported by MSIE',
	'408d7e72' => 'POST comes too quickly after GET',
	'41feed15' => 'Header \'Pragma\' without \'Cache-Control\' prohibited for HTTP/1.1 requests',
	'45b35e30' => 'Header \'Referer\' is corrupt',
	'57796684' => 'Prohibited header \'X-Aaaaaaaaaa\' or \'X-Aaaaaaaaaaaa\' present',
	'582ec5e4' => '"Header \'TE\' present but TE not specified in \'Connection\' header',
	'69920ee5' => 'Header \'Referer\' present but blank',
	'799165c2' => 'Rotating user-agents detected',
	'7a06532b' => 'Required header \'Accept-Encoding\' missing',
	'7ad04a8a' => 'Prohibited header \'Range\' present',
	'7d12528e' => 'Prohibited header \'Range\' or \'Content-Range\' in POST request',
	'939a6fbb' => 'Banned proxy server in use',
	'9c9e4979' => 'Prohibited header \'via\' present',
	'a0105122' => 'Header \'Expect\' prohibited; resend without Expect',
	'a1084bad' => 'User-Agent claimed to be MSIE, with invalid Windows version',
	'a52f0448' => 'Header \'Connection\' contains invalid values',
	'b40c8ddc' => 'POST more than two days after GET',
	'b7830251' => 'Prohibited header \'Proxy-Connection\' present',
	'b9cc1d86' => 'Prohibited header \'X-Aaaaaaaaaa\' or \'X-Aaaaaaaaaaaa\' present',
	'c1fa729b' => 'Use of rotating proxy servers detected',
	'd60b87c7' => 'Trackback received via proxy server',
	'dfd9b1ad' => 'Request contained a malicious JavaScript or SQL injection attack',
	'e4de0453' => 'User-Agent claimed to be msnbot, claim appears to be false',
	'e87553e1' => 'I know you and I don\'t like you, dirty spammer.',
	'f0dcb3fd' => 'Web browser attempted to send a trackback',
	'f1182195' => 'User-Agent claimed to be Googlebot, claim appears to be false.',
	'f9f2b8b9' => 'A User-Agent is required but none was provided.'
);

$PLG_bad_behavior_MESSAGE1 = 'Wenn Sie diesen Hinweis sehen, dann ist Bad Behavior <b>nicht</b> korrekt installiert. Bitte lesen Sie sich die Installationsanleitung noch einmal sorgf�ltig durch.';
$PLG_bad_behavior_MESSAGE100 = 'Die IP-Adresse wurde wieder freigegeben.';
$PLG_bad_behavior_MESSAGE101 = 'Es gab ein Problem beim Freigeben der IP-Adresse.';

?>