<?php


/*
Plugin Name: Best WordPress SEO Plugin
Plugin URI: http://www.escalateseo.com
Description: Welcome to the world's best SEO plugin for WordPress!  <a href="options-general.php?page=best-wordpress-seo-plugin/bestseo.class.php"><strong><font color="#FF0000">Configure Plugin</font></strong></a>
Version: 1.2.0
Author: EscalateSEO
Author URI: http://www.escalateseo.com
*/

/*
Copyright (C) 2008-2009 Michael Torbert, semperfiwebdesign.com (michael AT semperfiwebdesign DOT com)
Original code by uberdose of uberdose.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*******************************************************************************************************/
//register_activation_hook(__FILE__,'bestseo_activate_pl');

$UTF8_TABLES['strtolower'] = array(
	"Ôº∫" => "ÔΩö",	"Ôºπ" => "ÔΩô",	"Ôº∏" => "ÔΩò",
	"Ôº∑" => "ÔΩó",	"Ôº∂" => "ÔΩñ",	"Ôºµ" => "ÔΩï",
	"Ôº¥" => "ÔΩî",	"Ôº≥" => "ÔΩì",	"Ôº≤" => "ÔΩí",
	"Ôº±" => "ÔΩë",	"Ôº∞" => "ÔΩê",	"ÔºØ" => "ÔΩè",
	"ÔºÆ" => "ÔΩé",	"Ôº≠" => "ÔΩç",	"Ôº¨" => "ÔΩå",
	"Ôº´" => "ÔΩã",	"Ôº™" => "ÔΩä",	"Ôº©" => "ÔΩâ",
	"Ôº®" => "ÔΩà",	"Ôºß" => "ÔΩá",	"Ôº¶" => "ÔΩÜ",
	"Ôº•" => "ÔΩÖ",	"Ôº§" => "ÔΩÑ",	"Ôº£" => "ÔΩÉ",
	"Ôº¢" => "ÔΩÇ",	"Ôº°" => "ÔΩÅ",	"‚Ñ´" => "√•",
	"‚Ñ™" => "k",	"‚Ñ¶" => "œâ",	"·øª" => "·ΩΩ",
	"·ø∫" => "·Ωº",	"·øπ" => "·Ωπ",	"·ø∏" => "·Ω∏",
	"·ø¨" => "·ø•",	"·ø´" => "·Ωª",	"·ø™" => "·Ω∫",
	"·ø©" => "·ø°",	"·ø®" => "·ø ",	"·øõ" => "·Ω∑",
	"·øö" => "·Ω∂",	"·øô" => "·øë",	"·øò" => "·øê",
	"·øã" => "·Ωµ",	"·øä" => "·Ω¥",	"·øâ" => "·Ω≥",
	"·øà" => "·Ω≤",	"·æª" => "·Ω±",	"·æ∫" => "·Ω∞",
	"·æπ" => "·æ±",	"·æ∏" => "·æ∞",	"·ΩØ" => "·Ωß",
	"·ΩÆ" => "·Ω¶",	"·Ω≠" => "·Ω•",	"·Ω¨" => "·Ω§",
	"·Ω´" => "·Ω£",	"·Ω™" => "·Ω¢",	"·Ω©" => "·Ω°",
	"·Ω®" => "·Ω ",	"·Ωü" => "·Ωó",	"·Ωù" => "·Ωï",
	"·Ωõ" => "·Ωì",	"·Ωô" => "·Ωë",	"·Ωç" => "·ΩÖ",
	"·Ωå" => "·ΩÑ",	"·Ωã" => "·ΩÉ",	"·Ωä" => "·ΩÇ",
	"·Ωâ" => "·ΩÅ",	"·Ωà" => "·ΩÄ",	"·ºø" => "·º∑",
	"·ºæ" => "·º∂",	"·ºΩ" => "·ºµ",	"·ºº" => "·º¥",
	"·ºª" => "·º≥",	"·º∫" => "·º≤",	"·ºπ" => "·º±",
	"·º∏" => "·º∞",	"·ºØ" => "·ºß",	"·ºÆ" => "·º¶",
	"·º≠" => "·º•",	"·º¨" => "·º§",	"·º´" => "·º£",
	"·º™" => "·º¢",	"·º©" => "·º°",	"·º®" => "·º ",
	"·ºù" => "·ºï",	"·ºú" => "·ºî",	"·ºõ" => "·ºì",
	"·ºö" => "·ºí",	"·ºô" => "·ºë",	"·ºò" => "·ºê",
	"·ºè" => "·ºá",	"·ºé" => "·ºÜ",	"·ºç" => "·ºÖ",
	"·ºå" => "·ºÑ",	"·ºã" => "·ºÉ",	"·ºä" => "·ºÇ",
	"·ºâ" => "·ºÅ",	"·ºà" => "·ºÄ",	"·ª∏" => "·ªπ",
	"·ª∂" => "·ª∑",	"·ª¥" => "·ªµ",	"·ª≤" => "·ª≥",
	"·ª∞" => "·ª±",	"·ªÆ" => "·ªØ",	"·ª¨" => "·ª≠",
	"·ª™" => "·ª´",	"·ª®" => "·ª©",	"·ª¶" => "·ªß",
	"·ª§" => "·ª•",	"·ª¢" => "·ª£",	"·ª " => "·ª°",
	"·ªû" => "·ªü",	"·ªú" => "·ªù",	"·ªö" => "·ªõ",
	"·ªò" => "·ªô",	"·ªñ" => "·ªó",	"·ªî" => "·ªï",
	"·ªí" => "·ªì",	"·ªê" => "·ªë",	"·ªé" => "·ªè",
	"·ªå" => "·ªç",	"·ªä" => "·ªã",	"·ªà" => "·ªâ",
	"·ªÜ" => "·ªá",	"·ªÑ" => "·ªÖ",	"·ªÇ" => "·ªÉ",
	"·ªÄ" => "·ªÅ",	"·∫æ" => "·∫ø",	"·∫º" => "·∫Ω",
	"·∫∫" => "·∫ª",	"·∫∏" => "·∫π",	"·∫∂" => "·∫∑",
	"·∫¥" => "·∫µ",	"·∫≤" => "·∫≥",	"·∫∞" => "·∫±",
	"·∫Æ" => "·∫Ø",	"·∫¨" => "·∫≠",	"·∫™" => "·∫´",
	"·∫®" => "·∫©",	"·∫¶" => "·∫ß",	"·∫§" => "·∫•",
	"·∫¢" => "·∫£",	"·∫ " => "·∫°",	"·∫î" => "·∫ï",
	"·∫í" => "·∫ì",	"·∫ê" => "·∫ë",	"·∫é" => "·∫è",
	"·∫å" => "·∫ç",	"·∫ä" => "·∫ã",	"·∫à" => "·∫â",
	"·∫Ü" => "·∫á",	"·∫Ñ" => "·∫Ö",	"·∫Ç" => "·∫É",
	"·∫Ä" => "·∫Å",	"·πæ" => "·πø",	"·πº" => "·πΩ",
	"·π∫" => "·πª",	"·π∏" => "·ππ",	"·π∂" => "·π∑",
	"·π¥" => "·πµ",	"·π≤" => "·π≥",	"·π∞" => "·π±",
	"·πÆ" => "·πØ",	"·π¨" => "·π≠",	"·π™" => "·π´",
	"·π®" => "·π©",	"·π¶" => "·πß",	"·π§" => "·π•",
	"·π¢" => "·π£",	"·π " => "·π°",	"·πû" => "·πü",
	"·πú" => "·πù",	"·πö" => "·πõ",	"·πò" => "·πô",
	"·πñ" => "·πó",	"·πî" => "·πï",	"·πí" => "·πì",
	"·πê" => "·πë",	"·πé" => "·πè",	"·πå" => "·πç",
	"·πä" => "·πã",	"·πà" => "·πâ",	"·πÜ" => "·πá",
	"·πÑ" => "·πÖ",	"·πÇ" => "·πÉ",	"·πÄ" => "·πÅ",
	"·∏æ" => "·∏ø",	"·∏º" => "·∏Ω",	"·∏∫" => "·∏ª",
	"·∏∏" => "·∏π",	"·∏∂" => "·∏∑",	"·∏¥" => "·∏µ",
	"·∏≤" => "·∏≥",	"·∏∞" => "·∏±",	"·∏Æ" => "·∏Ø",
	"·∏¨" => "·∏≠",	"·∏™" => "·∏´",	"·∏®" => "·∏©",
	"·∏¶" => "·∏ß",	"·∏§" => "·∏•",	"·∏¢" => "·∏£",
	"·∏ " => "·∏°",	"·∏û" => "·∏ü",	"·∏ú" => "·∏ù",
	"·∏ö" => "·∏õ",	"·∏ò" => "·∏ô",	"·∏ñ" => "·∏ó",
	"·∏î" => "·∏ï",	"·∏í" => "·∏ì",	"·∏ê" => "·∏ë",
	"·∏é" => "·∏è",	"·∏å" => "·∏ç",	"·∏ä" => "·∏ã",
	"·∏à" => "·∏â",	"·∏Ü" => "·∏á",	"·∏Ñ" => "·∏Ö",
	"·∏Ç" => "·∏É",	"·∏Ä" => "·∏Å",	"’ñ" => "÷Ü",
	"’ï" => "÷Ö",	"’î" => "÷Ñ",	"’ì" => "÷É",
	"’í" => "÷Ç",	"’ë" => "÷Å",	"’ê" => "÷Ä",
	"’è" => "’ø",	"’é" => "’æ",	"’ç" => "’Ω",
	"’å" => "’º",	"’ã" => "’ª",	"’ä" => "’∫",
	"’â" => "’π",	"’à" => "’∏",	"’á" => "’∑",
	"’Ü" => "’∂",	"’Ö" => "’µ",	"’Ñ" => "’¥",
	"’É" => "’≥",	"’Ç" => "’≤",	"’Å" => "’±",
	"’Ä" => "’∞",	"‘ø" => "’Ø",	"‘æ" => "’Æ",
	"‘Ω" => "’≠",	"‘º" => "’¨",	"‘ª" => "’´",
	"‘∫" => "’™",	"‘π" => "’©",	"‘∏" => "’®",
	"‘∑" => "’ß",	"‘∂" => "’¶",	"‘µ" => "’•",
	"‘¥" => "’§",	"‘≥" => "’£",	"‘≤" => "’¢",
	"‘±" => "’°",	"‘é" => "‘è",	"‘å" => "‘ç",
	"‘ä" => "‘ã",	"‘à" => "‘â",	"‘Ü" => "‘á",
	"‘Ñ" => "‘Ö",	"‘Ç" => "‘É",	"‘Ä" => "‘Å",
	"”∏" => "”π",	"”¥" => "”µ",	"”≤" => "”≥",
	"”∞" => "”±",	"”Æ" => "”Ø",	"”¨" => "”≠",
	"”™" => "”´",	"”®" => "”©",	"”¶" => "”ß",
	"”§" => "”•",	"”¢" => "”£",	"” " => "”°",
	"”û" => "”ü",	"”ú" => "”ù",	"”ö" => "”õ",
	"”ò" => "”ô",	"”ñ" => "”ó",	"”î" => "”ï",
	"”í" => "”ì",	"”ê" => "”ë",	"”ç" => "”é",
	"”ã" => "”å",	"”â" => "”ä",	"”á" => "”à",
	"”Ö" => "”Ü",	"”É" => "”Ñ",	"”Å" => "”Ç",
	"“æ" => "“ø",	"“º" => "“Ω",	"“∫" => "“ª",
	"“∏" => "“π",	"“∂" => "“∑",	"“¥" => "“µ",
	"“≤" => "“≥",	"“∞" => "“±",	"“Æ" => "“Ø",
	"“¨" => "“≠",	"“™" => "“´",	"“®" => "“©",
	"“¶" => "“ß",	"“§" => "“•",	"“¢" => "“£",
	"“ " => "“°",	"“û" => "“ü",	"“ú" => "“ù",
	"“ö" => "“õ",	"“ò" => "“ô",	"“ñ" => "“ó",
	"“î" => "“ï",	"“í" => "“ì",	"“ê" => "“ë",
	"“é" => "“è",	"“å" => "“ç",	"“ä" => "“ã",
	"“Ä" => "“Å",	"—æ" => "—ø",	"—º" => "—Ω",
	"—∫" => "—ª",	"—∏" => "—π",	"—∂" => "—∑",
	"—¥" => "—µ",	"—≤" => "—≥",	"—∞" => "—±",
	"—Æ" => "—Ø",	"—¨" => "—≠",	"—™" => "—´",
	"—®" => "—©",	"—¶" => "—ß",	"—§" => "—•",
	"—¢" => "—£",	"— " => "—°",	"–Ø" => "—è",
	"–Æ" => "—é",	"–≠" => "—ç",	"–¨" => "—å",
	"–´" => "—ã",	"–™" => "—ä",	"–©" => "—â",
	"–®" => "—à",	"–ß" => "—á",	"–¶" => "—Ü",
	"–•" => "—Ö",	"–§" => "—Ñ",	"–£" => "—É",
	"–¢" => "—Ç",	"–°" => "—Å",	"– " => "—Ä",
	"–ü" => "–ø",	"–û" => "–æ",	"–ù" => "–Ω",
	"–ú" => "–º",	"–õ" => "–ª",	"–ö" => "–∫",
	"–ô" => "–π",	"–ò" => "–∏",	"–ó" => "–∑",
	"–ñ" => "–∂",	"–ï" => "–µ",	"–î" => "–¥",
	"–ì" => "–≥",	"–í" => "–≤",	"–ë" => "–±",
	"–ê" => "–∞",	"–è" => "—ü",	"–é" => "—û",
	"–ç" => "—ù",	"–å" => "—ú",	"–ã" => "—õ",
	"–ä" => "—ö",	"–â" => "—ô",	"–à" => "—ò",
	"–á" => "—ó",	"–Ü" => "—ñ",	"–Ö" => "—ï",
	"–Ñ" => "—î",	"–É" => "—ì",	"–Ç" => "—í",
	"–Å" => "—ë",	"–Ä" => "—ê",	"œ¥" => "Œ∏",
	"œÆ" => "œØ",	"œ¨" => "œ≠",	"œ™" => "œ´",
	"œ®" => "œ©",	"œ¶" => "œß",	"œ§" => "œ•",
	"œ¢" => "œ£",	"œ " => "œ°",	"œû" => "œü",
	"œú" => "œù",	"œö" => "œõ",	"œò" => "œô",
	"Œ´" => "œã",	"Œ™" => "œä",	"Œ©" => "œâ",
	"Œ®" => "œà",	"Œß" => "œá",	"Œ¶" => "œÜ",
	"Œ•" => "œÖ",	"Œ§" => "œÑ",	"Œ£" => "œÉ",
	"Œ°" => "œÅ",	"Œ " => "œÄ",	"Œü" => "Œø",
	"Œû" => "Œæ",	"Œù" => "ŒΩ",	"Œú" => "Œº",
	"Œõ" => "Œª",	"Œö" => "Œ∫",	"Œô" => "Œπ",
	"Œò" => "Œ∏",	"Œó" => "Œ∑",	"Œñ" => "Œ∂",
	"Œï" => "Œµ",	"Œî" => "Œ¥",	"Œì" => "Œ≥",
	"Œí" => "Œ≤",	"Œë" => "Œ±",	"Œè" => "œé",
	"Œé" => "œç",	"Œå" => "œå",	"Œä" => "ŒØ",
	"Œâ" => "ŒÆ",	"Œà" => "Œ≠",	"ŒÜ" => "Œ¨",
	"»≤" => "»≥",	"»∞" => "»±",	"»Æ" => "»Ø",
	"»¨" => "»≠",	"»™" => "»´",	"»®" => "»©",
	"»¶" => "»ß",	"»§" => "»•",	"»¢" => "»£",
	"» " => "∆û",	"»û" => "»ü",	"»ú" => "»ù",
	"»ö" => "»õ",	"»ò" => "»ô",	"»ñ" => "»ó",
	"»î" => "»ï",	"»í" => "»ì",	"»ê" => "»ë",
	"»é" => "»è",	"»å" => "»ç",	"»ä" => "»ã",
	"»à" => "»â",	"»Ü" => "»á",	"»Ñ" => "»Ö",
	"»Ç" => "»É",	"»Ä" => "»Å",	"«æ" => "«ø",
	"«º" => "«Ω",	"«∫" => "«ª",	"«∏" => "«π",
	"«∑" => "∆ø",	"«∂" => "∆ï",	"«¥" => "«µ",
	"«±" => "«≥",	"«Æ" => "«Ø",	"«¨" => "«≠",
	"«™" => "«´",	"«®" => "«©",	"«¶" => "«ß",
	"«§" => "«•",	"«¢" => "«£",	"« " => "«°",
	"«û" => "«ü",	"«õ" => "«ú",	"«ô" => "«ö",
	"«ó" => "«ò",	"«ï" => "«ñ",	"«ì" => "«î",
	"«ë" => "«í",	"«è" => "«ê",	"«ç" => "«é",
	"«ä" => "«å",	"«á" => "«â",	"«Ñ" => "«Ü",
	"∆º" => "∆Ω",	"∆∏" => "∆π",	"∆∑" => " í",
	"∆µ" => "∆∂",	"∆≥" => "∆¥",	"∆≤" => " ã",
	"∆±" => " ä",	"∆Ø" => "∆∞",	"∆Æ" => " à",
	"∆¨" => "∆≠",	"∆©" => " É",	"∆ß" => "∆®",
	"∆¶" => " Ä",	"∆§" => "∆•",	"∆¢" => "∆£",
	"∆ " => "∆°",	"∆ü" => "…µ",	"∆ù" => "…≤",
	"∆ú" => "…Ø",	"∆ò" => "∆ô",	"∆ó" => "…®",
	"∆ñ" => "…©",	"∆î" => "…£",	"∆ì" => "… ",
	"∆ë" => "∆í",	"∆ê" => "…õ",	"∆è" => "…ô",
	"∆é" => "«ù",	"∆ã" => "∆å",	"∆ä" => "…ó",
	"∆â" => "…ñ",	"∆á" => "∆à",	"∆Ü" => "…î",
	"∆Ñ" => "∆Ö",	"∆Ç" => "∆É",	"∆Å" => "…ì",
	"≈Ω" => "≈æ",	"≈ª" => "≈º",	"≈π" => "≈∫",
	"≈∏" => "√ø",	"≈∂" => "≈∑",	"≈¥" => "≈µ",
	"≈≤" => "≈≥",	"≈∞" => "≈±",	"≈Æ" => "≈Ø",
	"≈¨" => "≈≠",	"≈™" => "≈´",	"≈®" => "≈©",
	"≈¶" => "≈ß",	"≈§" => "≈•",	"≈¢" => "≈£",
	"≈ " => "≈°",	"≈û" => "≈ü",	"≈ú" => "≈ù",
	"≈ö" => "≈õ",	"≈ò" => "≈ô",	"≈ñ" => "≈ó",
	"≈î" => "≈ï",	"≈í" => "≈ì",	"≈ê" => "≈ë",
	"≈é" => "≈è",	"≈å" => "≈ç",	"≈ä" => "≈ã",
	"≈á" => "≈à",	"≈Ö" => "≈Ü",	"≈É" => "≈Ñ",
	"≈Å" => "≈Ç",	"ƒø" => "≈Ä",	"ƒΩ" => "ƒæ",
	"ƒª" => "ƒº",	"ƒπ" => "ƒ∫",	"ƒ∂" => "ƒ∑",
	"ƒ¥" => "ƒµ",	"ƒ≤" => "ƒ≥",	"ƒ∞" => "i",
	"ƒÆ" => "ƒØ",	"ƒ¨" => "ƒ≠",	"ƒ™" => "ƒ´",
	"ƒ®" => "ƒ©",	"ƒ¶" => "ƒß",	"ƒ§" => "ƒ•",
	"ƒ¢" => "ƒ£",	"ƒ " => "ƒ°",	"ƒû" => "ƒü",
	"ƒú" => "ƒù",	"ƒö" => "ƒõ",	"ƒò" => "ƒô",
	"ƒñ" => "ƒó",	"ƒî" => "ƒï",	"ƒí" => "ƒì",
	"ƒê" => "ƒë",	"ƒé" => "ƒè",	"ƒå" => "ƒç",
	"ƒä" => "ƒã",	"ƒà" => "ƒâ",	"ƒÜ" => "ƒá",
	"ƒÑ" => "ƒÖ",	"ƒÇ" => "ƒÉ",	"ƒÄ" => "ƒÅ",
	"√û" => "√æ",	"√ù" => "√Ω",	"√ú" => "√º",
	"√õ" => "√ª",	"√ö" => "√∫",	"√ô" => "√π",
	"√ò" => "√∏",	"√ñ" => "√∂",	"√ï" => "√µ",
	"√î" => "√¥",	"√ì" => "√≥",	"√í" => "√≤",
	"√ë" => "√±",	"√ê" => "√∞",	"√è" => "√Ø",
	"√é" => "√Æ",	"√ç" => "√≠",	"√å" => "√¨",
	"√ã" => "√´",	"√ä" => "√™",	"√â" => "√©",
	"√à" => "√®",	"√á" => "√ß",	"√Ü" => "√¶",
	"√Ö" => "√•",	"√Ñ" => "√§",	"√É" => "√£",
	"√Ç" => "√¢",	"√Å" => "√°",	"√Ä" => "√ ",
	"Z" => "z",		"Y" => "y",		"X" => "x",
	"W" => "w",		"V" => "v",		"U" => "u",
	"T" => "t",		"S" => "s",		"R" => "r",
	"Q" => "q",		"P" => "p",		"O" => "o",
	"N" => "n",		"M" => "m",		"L" => "l",
	"K" => "k",		"J" => "j",		"I" => "i",
	"H" => "h",		"G" => "g",		"F" => "f",
	"E" => "e",		"D" => "d",		"C" => "c",
	"B" => "b",		"A" => "a",
);


$UTF8_TABLES['strtoupper'] = array(
	"ÔΩö" => "Ôº∫",	"ÔΩô" => "Ôºπ",	"ÔΩò" => "Ôº∏",
	"ÔΩó" => "Ôº∑",	"ÔΩñ" => "Ôº∂",	"ÔΩï" => "Ôºµ",
	"ÔΩî" => "Ôº¥",	"ÔΩì" => "Ôº≥",	"ÔΩí" => "Ôº≤",
	"ÔΩë" => "Ôº±",	"ÔΩê" => "Ôº∞",	"ÔΩè" => "ÔºØ",
	"ÔΩé" => "ÔºÆ",	"ÔΩç" => "Ôº≠",	"ÔΩå" => "Ôº¨",
	"ÔΩã" => "Ôº´",	"ÔΩä" => "Ôº™",	"ÔΩâ" => "Ôº©",
	"ÔΩà" => "Ôº®",	"ÔΩá" => "Ôºß",	"ÔΩÜ" => "Ôº¶",
	"ÔΩÖ" => "Ôº•",	"ÔΩÑ" => "Ôº§",	"ÔΩÉ" => "Ôº£",
	"ÔΩÇ" => "Ôº¢",	"ÔΩÅ" => "Ôº°",	"·ø≥" => "·øº",
	"·ø•" => "·ø¨",	"·ø°" => "·ø©",	"·ø " => "·ø®",
	"·øë" => "·øô",	"·øê" => "·øò",	"·øÉ" => "·øå",
	"·ææ" => "Œô",	"·æ≥" => "·æº",	"·æ±" => "·æπ",
	"·æ∞" => "·æ∏",	"·æß" => "·æØ",	"·æ¶" => "·æÆ",
	"·æ•" => "·æ≠",	"·æ§" => "·æ¨",	"·æ£" => "·æ´",
	"·æ¢" => "·æ™",	"·æ°" => "·æ©",	"·æ " => "·æ®",
	"·æó" => "·æü",	"·æñ" => "·æû",	"·æï" => "·æù",
	"·æî" => "·æú",	"·æì" => "·æõ",	"·æí" => "·æö",
	"·æë" => "·æô",	"·æê" => "·æò",	"·æá" => "·æè",
	"·æÜ" => "·æé",	"·æÖ" => "·æç",	"·æÑ" => "·æå",
	"·æÉ" => "·æã",	"·æÇ" => "·æä",	"·æÅ" => "·æâ",
	"·æÄ" => "·æà",	"·ΩΩ" => "·øª",	"·Ωº" => "·ø∫",
	"·Ωª" => "·ø´",	"·Ω∫" => "·ø™",	"·Ωπ" => "·øπ",
	"·Ω∏" => "·ø∏",	"·Ω∑" => "·øõ",	"·Ω∂" => "·øö",
	"·Ωµ" => "·øã",	"·Ω¥" => "·øä",	"·Ω≥" => "·øâ",
	"·Ω≤" => "·øà",	"·Ω±" => "·æª",	"·Ω∞" => "·æ∫",
	"·Ωß" => "·ΩØ",	"·Ω¶" => "·ΩÆ",	"·Ω•" => "·Ω≠",
	"·Ω§" => "·Ω¨",	"·Ω£" => "·Ω´",	"·Ω¢" => "·Ω™",
	"·Ω°" => "·Ω©",	"·Ω " => "·Ω®",	"·Ωó" => "·Ωü",
	"·Ωï" => "·Ωù",	"·Ωì" => "·Ωõ",	"·Ωë" => "·Ωô",
	"·ΩÖ" => "·Ωç",	"·ΩÑ" => "·Ωå",	"·ΩÉ" => "·Ωã",
	"·ΩÇ" => "·Ωä",	"·ΩÅ" => "·Ωâ",	"·ΩÄ" => "·Ωà",
	"·º∑" => "·ºø",	"·º∂" => "·ºæ",	"·ºµ" => "·ºΩ",
	"·º¥" => "·ºº",	"·º≥" => "·ºª",	"·º≤" => "·º∫",
	"·º±" => "·ºπ",	"·º∞" => "·º∏",	"·ºß" => "·ºØ",
	"·º¶" => "·ºÆ",	"·º•" => "·º≠",	"·º§" => "·º¨",
	"·º£" => "·º´",	"·º¢" => "·º™",	"·º°" => "·º©",
	"·º " => "·º®",	"·ºï" => "·ºù",	"·ºî" => "·ºú",
	"·ºì" => "·ºõ",	"·ºí" => "·ºö",	"·ºë" => "·ºô",
	"·ºê" => "·ºò",	"·ºá" => "·ºè",	"·ºÜ" => "·ºé",
	"·ºÖ" => "·ºç",	"·ºÑ" => "·ºå",	"·ºÉ" => "·ºã",
	"·ºÇ" => "·ºä",	"·ºÅ" => "·ºâ",	"·ºÄ" => "·ºà",
	"·ªπ" => "·ª∏",	"·ª∑" => "·ª∂",	"·ªµ" => "·ª¥",
	"·ª≥" => "·ª≤",	"·ª±" => "·ª∞",	"·ªØ" => "·ªÆ",
	"·ª≠" => "·ª¨",	"·ª´" => "·ª™",	"·ª©" => "·ª®",
	"·ªß" => "·ª¶",	"·ª•" => "·ª§",	"·ª£" => "·ª¢",
	"·ª°" => "·ª ",	"·ªü" => "·ªû",	"·ªù" => "·ªú",
	"·ªõ" => "·ªö",	"·ªô" => "·ªò",	"·ªó" => "·ªñ",
	"·ªï" => "·ªî",	"·ªì" => "·ªí",	"·ªë" => "·ªê",
	"·ªè" => "·ªé",	"·ªç" => "·ªå",	"·ªã" => "·ªä",
	"·ªâ" => "·ªà",	"·ªá" => "·ªÜ",	"·ªÖ" => "·ªÑ",
	"·ªÉ" => "·ªÇ",	"·ªÅ" => "·ªÄ",	"·∫ø" => "·∫æ",
	"·∫Ω" => "·∫º",	"·∫ª" => "·∫∫",	"·∫π" => "·∫∏",
	"·∫∑" => "·∫∂",	"·∫µ" => "·∫¥",	"·∫≥" => "·∫≤",
	"·∫±" => "·∫∞",	"·∫Ø" => "·∫Æ",	"·∫≠" => "·∫¨",
	"·∫´" => "·∫™",	"·∫©" => "·∫®",	"·∫ß" => "·∫¶",
	"·∫•" => "·∫§",	"·∫£" => "·∫¢",	"·∫°" => "·∫ ",
	"·∫õ" => "·π ",	"·∫ï" => "·∫î",	"·∫ì" => "·∫í",
	"·∫ë" => "·∫ê",	"·∫è" => "·∫é",	"·∫ç" => "·∫å",
	"·∫ã" => "·∫ä",	"·∫â" => "·∫à",	"·∫á" => "·∫Ü",
	"·∫Ö" => "·∫Ñ",	"·∫É" => "·∫Ç",	"·∫Å" => "·∫Ä",
	"·πø" => "·πæ",	"·πΩ" => "·πº",	"·πª" => "·π∫",
	"·ππ" => "·π∏",	"·π∑" => "·π∂",	"·πµ" => "·π¥",
	"·π≥" => "·π≤",	"·π±" => "·π∞",	"·πØ" => "·πÆ",
	"·π≠" => "·π¨",	"·π´" => "·π™",	"·π©" => "·π®",
	"·πß" => "·π¶",	"·π•" => "·π§",	"·π£" => "·π¢",
	"·π°" => "·π ",	"·πü" => "·πû",	"·πù" => "·πú",
	"·πõ" => "·πö",	"·πô" => "·πò",	"·πó" => "·πñ",
	"·πï" => "·πî",	"·πì" => "·πí",	"·πë" => "·πê",
	"·πè" => "·πé",	"·πç" => "·πå",	"·πã" => "·πä",
	"·πâ" => "·πà",	"·πá" => "·πÜ",	"·πÖ" => "·πÑ",
	"·πÉ" => "·πÇ",	"·πÅ" => "·πÄ",	"·∏ø" => "·∏æ",
	"·∏Ω" => "·∏º",	"·∏ª" => "·∏∫",	"·∏π" => "·∏∏",
	"·∏∑" => "·∏∂",	"·∏µ" => "·∏¥",	"·∏≥" => "·∏≤",
	"·∏±" => "·∏∞",	"·∏Ø" => "·∏Æ",	"·∏≠" => "·∏¨",
	"·∏´" => "·∏™",	"·∏©" => "·∏®",	"·∏ß" => "·∏¶",
	"·∏•" => "·∏§",	"·∏£" => "·∏¢",	"·∏°" => "·∏ ",
	"·∏ü" => "·∏û",	"·∏ù" => "·∏ú",	"·∏õ" => "·∏ö",
	"·∏ô" => "·∏ò",	"·∏ó" => "·∏ñ",	"·∏ï" => "·∏î",
	"·∏ì" => "·∏í",	"·∏ë" => "·∏ê",	"·∏è" => "·∏é",
	"·∏ç" => "·∏å",	"·∏ã" => "·∏ä",	"·∏â" => "·∏à",
	"·∏á" => "·∏Ü",	"·∏Ö" => "·∏Ñ",	"·∏É" => "·∏Ç",
	"·∏Å" => "·∏Ä",	"÷Ü" => "’ñ",	"÷Ö" => "’ï",
	"÷Ñ" => "’î",	"÷É" => "’ì",	"÷Ç" => "’í",
	"÷Å" => "’ë",	"÷Ä" => "’ê",	"’ø" => "’è",
	"’æ" => "’é",	"’Ω" => "’ç",	"’º" => "’å",
	"’ª" => "’ã",	"’∫" => "’ä",	"’π" => "’â",
	"’∏" => "’à",	"’∑" => "’á",	"’∂" => "’Ü",
	"’µ" => "’Ö",	"’¥" => "’Ñ",	"’≥" => "’É",
	"’≤" => "’Ç",	"’±" => "’Å",	"’∞" => "’Ä",
	"’Ø" => "‘ø",	"’Æ" => "‘æ",	"’≠" => "‘Ω",
	"’¨" => "‘º",	"’´" => "‘ª",	"’™" => "‘∫",
	"’©" => "‘π",	"’®" => "‘∏",	"’ß" => "‘∑",
	"’¶" => "‘∂",	"’•" => "‘µ",	"’§" => "‘¥",
	"’£" => "‘≥",	"’¢" => "‘≤",	"’°" => "‘±",
	"‘è" => "‘é",	"‘ç" => "‘å",	"‘ã" => "‘ä",
	"‘â" => "‘à",	"‘á" => "‘Ü",	"‘Ö" => "‘Ñ",
	"‘É" => "‘Ç",	"‘Å" => "‘Ä",	"”π" => "”∏",
	"”µ" => "”¥",	"”≥" => "”≤",	"”±" => "”∞",
	"”Ø" => "”Æ",	"”≠" => "”¨",	"”´" => "”™",
	"”©" => "”®",	"”ß" => "”¶",	"”•" => "”§",
	"”£" => "”¢",	"”°" => "” ",	"”ü" => "”û",
	"”ù" => "”ú",	"”õ" => "”ö",	"”ô" => "”ò",
	"”ó" => "”ñ",	"”ï" => "”î",	"”ì" => "”í",
	"”ë" => "”ê",	"”é" => "”ç",	"”å" => "”ã",
	"”ä" => "”â",	"”à" => "”á",	"”Ü" => "”Ö",
	"”Ñ" => "”É",	"”Ç" => "”Å",	"“ø" => "“æ",
	"“Ω" => "“º",	"“ª" => "“∫",	"“π" => "“∏",
	"“∑" => "“∂",	"“µ" => "“¥",	"“≥" => "“≤",
	"“±" => "“∞",	"“Ø" => "“Æ",	"“≠" => "“¨",
	"“´" => "“™",	"“©" => "“®",	"“ß" => "“¶",
	"“•" => "“§",	"“£" => "“¢",	"“°" => "“ ",
	"“ü" => "“û",	"“ù" => "“ú",	"“õ" => "“ö",
	"“ô" => "“ò",	"“ó" => "“ñ",	"“ï" => "“î",
	"“ì" => "“í",	"“ë" => "“ê",	"“è" => "“é",
	"“ç" => "“å",	"“ã" => "“ä",	"“Å" => "“Ä",
	"—ø" => "—æ",	"—Ω" => "—º",	"—ª" => "—∫",
	"—π" => "—∏",	"—∑" => "—∂",	"—µ" => "—¥",
	"—≥" => "—≤",	"—±" => "—∞",	"—Ø" => "—Æ",
	"—≠" => "—¨",	"—´" => "—™",	"—©" => "—®",
	"—ß" => "—¶",	"—•" => "—§",	"—£" => "—¢",
	"—°" => "— ",	"—ü" => "–è",	"—û" => "–é",
	"—ù" => "–ç",	"—ú" => "–å",	"—õ" => "–ã",
	"—ö" => "–ä",	"—ô" => "–â",	"—ò" => "–à",
	"—ó" => "–á",	"—ñ" => "–Ü",	"—ï" => "–Ö",
	"—î" => "–Ñ",	"—ì" => "–É",	"—í" => "–Ç",
	"—ë" => "–Å",	"—ê" => "–Ä",	"—è" => "–Ø",
	"—é" => "–Æ",	"—ç" => "–≠",	"—å" => "–¨",
	"—ã" => "–´",	"—ä" => "–™",	"—â" => "–©",
	"—à" => "–®",	"—á" => "–ß",	"—Ü" => "–¶",
	"—Ö" => "–•",	"—Ñ" => "–§",	"—É" => "–£",
	"—Ç" => "–¢",	"—Å" => "–°",	"—Ä" => "– ",
	"–ø" => "–ü",	"–æ" => "–û",	"–Ω" => "–ù",
	"–º" => "–ú",	"–ª" => "–õ",	"–∫" => "–ö",
	"–π" => "–ô",	"–∏" => "–ò",	"–∑" => "–ó",
	"–∂" => "–ñ",	"–µ" => "–ï",	"–¥" => "–î",
	"–≥" => "–ì",	"–≤" => "–í",	"–±" => "–ë",
	"–∞" => "–ê",	"œµ" => "Œï",	"œ≤" => "Œ£",
	"œ±" => "Œ°",	"œ∞" => "Œö",	"œØ" => "œÆ",
	"œ≠" => "œ¨",	"œ´" => "œ™",	"œ©" => "œ®",
	"œß" => "œ¶",	"œ•" => "œ§",	"œ£" => "œ¢",
	"œ°" => "œ ",	"œü" => "œû",	"œù" => "œú",
	"œõ" => "œö",	"œô" => "œò",	"œñ" => "Œ ",
	"œï" => "Œ¶",	"œë" => "Œò",	"œê" => "Œí",
	"œé" => "Œè",	"œç" => "Œé",	"œå" => "Œå",
	"œã" => "Œ´",	"œä" => "Œ™",	"œâ" => "Œ©",
	"œà" => "Œ®",	"œá" => "Œß",	"œÜ" => "Œ¶",
	"œÖ" => "Œ•",	"œÑ" => "Œ§",	"œÉ" => "Œ£",
	"œÇ" => "Œ£",	"œÅ" => "Œ°",	"œÄ" => "Œ ",
	"Œø" => "Œü",	"Œæ" => "Œû",	"ŒΩ" => "Œù",
	"Œº" => "Œú",	"Œª" => "Œõ",	"Œ∫" => "Œö",
	"Œπ" => "Œô",	"Œ∏" => "Œò",	"Œ∑" => "Œó",
	"Œ∂" => "Œñ",	"Œµ" => "Œï",	"Œ¥" => "Œî",
	"Œ≥" => "Œì",	"Œ≤" => "Œí",	"Œ±" => "Œë",
	"ŒØ" => "Œä",	"ŒÆ" => "Œâ",	"Œ≠" => "Œà",
	"Œ¨" => "ŒÜ",	" í" => "∆∑",	" ã" => "∆≤",
	" ä" => "∆±",	" à" => "∆Æ",	" É" => "∆©",
	" Ä" => "∆¶",	"…µ" => "∆ü",	"…≤" => "∆ù",
	"…Ø" => "∆ú",	"…©" => "∆ñ",	"…®" => "∆ó",
	"…£" => "∆î",	"… " => "∆ì",	"…õ" => "∆ê",
	"…ô" => "∆è",	"…ó" => "∆ä",	"…ñ" => "∆â",
	"…î" => "∆Ü",	"…ì" => "∆Å",	"»≥" => "»≤",
	"»±" => "»∞",	"»Ø" => "»Æ",	"»≠" => "»¨",
	"»´" => "»™",	"»©" => "»®",	"»ß" => "»¶",
	"»•" => "»§",	"»£" => "»¢",	"»ü" => "»û",
	"»ù" => "»ú",	"»õ" => "»ö",	"»ô" => "»ò",
	"»ó" => "»ñ",	"»ï" => "»î",	"»ì" => "»í",
	"»ë" => "»ê",	"»è" => "»é",	"»ç" => "»å",
	"»ã" => "»ä",	"»â" => "»à",	"»á" => "»Ü",
	"»Ö" => "»Ñ",	"»É" => "»Ç",	"»Å" => "»Ä",
	"«ø" => "«æ",	"«Ω" => "«º",	"«ª" => "«∫",
	"«π" => "«∏",	"«µ" => "«¥",	"«≥" => "«≤",
	"«Ø" => "«Æ",	"«≠" => "«¨",	"«´" => "«™",
	"«©" => "«®",	"«ß" => "«¶",	"«•" => "«§",
	"«£" => "«¢",	"«°" => "« ",	"«ü" => "«û",
	"«ù" => "∆é",	"«ú" => "«õ",	"«ö" => "«ô",
	"«ò" => "«ó",	"«ñ" => "«ï",	"«î" => "«ì",
	"«í" => "«ë",	"«ê" => "«è",	"«é" => "«ç",
	"«å" => "«ã",	"«â" => "«à",	"«Ü" => "«Ö",
	"∆ø" => "«∑",	"∆Ω" => "∆º",	"∆π" => "∆∏",
	"∆∂" => "∆µ",	"∆¥" => "∆≥",	"∆∞" => "∆Ø",
	"∆≠" => "∆¨",	"∆®" => "∆ß",	"∆•" => "∆§",
	"∆£" => "∆¢",	"∆°" => "∆ ",	"∆û" => "» ",
	"∆ô" => "∆ò",	"∆ï" => "«∂",	"∆í" => "∆ë",
	"∆å" => "∆ã",	"∆à" => "∆á",	"∆Ö" => "∆Ñ",
	"∆É" => "∆Ç",	"≈ø" => "S",	"≈æ" => "≈Ω",
	"≈º" => "≈ª",	"≈∫" => "≈π",	"≈∑" => "≈∂",
	"≈µ" => "≈¥",	"≈≥" => "≈≤",	"≈±" => "≈∞",
	"≈Ø" => "≈Æ",	"≈≠" => "≈¨",	"≈´" => "≈™",
	"≈©" => "≈®",	"≈ß" => "≈¶",	"≈•" => "≈§",
	"≈£" => "≈¢",	"≈°" => "≈ ",	"≈ü" => "≈û",
	"≈ù" => "≈ú",	"≈õ" => "≈ö",	"≈ô" => "≈ò",
	"≈ó" => "≈ñ",	"≈ï" => "≈î",	"≈ì" => "≈í",
	"≈ë" => "≈ê",	"≈è" => "≈é",	"≈ç" => "≈å",
	"≈ã" => "≈ä",	"≈à" => "≈á",	"≈Ü" => "≈Ö",
	"≈Ñ" => "≈É",	"≈Ç" => "≈Å",	"≈Ä" => "ƒø",
	"ƒæ" => "ƒΩ",	"ƒº" => "ƒª",	"ƒ∫" => "ƒπ",
	"ƒ∑" => "ƒ∂",	"ƒµ" => "ƒ¥",	"ƒ≥" => "ƒ≤",
	"ƒ±" => "I",	"ƒØ" => "ƒÆ",	"ƒ≠" => "ƒ¨",
	"ƒ´" => "ƒ™",	"ƒ©" => "ƒ®",	"ƒß" => "ƒ¶",
	"ƒ•" => "ƒ§",	"ƒ£" => "ƒ¢",	"ƒ°" => "ƒ ",
	"ƒü" => "ƒû",	"ƒù" => "ƒú",	"ƒõ" => "ƒö",
	"ƒô" => "ƒò",	"ƒó" => "ƒñ",	"ƒï" => "ƒî",
	"ƒì" => "ƒí",	"ƒë" => "ƒê",	"ƒè" => "ƒé",
	"ƒç" => "ƒå",	"ƒã" => "ƒä",	"ƒâ" => "ƒà",
	"ƒá" => "ƒÜ",	"ƒÖ" => "ƒÑ",	"ƒÉ" => "ƒÇ",
	"ƒÅ" => "ƒÄ",	"√ø" => "≈∏",	"√æ" => "√û",
	"√Ω" => "√ù",	"√º" => "√ú",	"√ª" => "√õ",
	"√∫" => "√ö",	"√π" => "√ô",	"√∏" => "√ò",
	"√∂" => "√ñ",	"√µ" => "√ï",	"√¥" => "√î",
	"√≥" => "√ì",	"√≤" => "√í",	"√±" => "√ë",
	"√∞" => "√ê",	"√Ø" => "√è",	"√Æ" => "√é",
	"√≠" => "√ç",	"√¨" => "√å",	"√´" => "√ã",
	"√™" => "√ä",	"√©" => "√â",	"√®" => "√à",
	"√ß" => "√á",	"√¶" => "√Ü",	"√•" => "√Ö",
	"√§" => "√Ñ",	"√£" => "√É",	"√¢" => "√Ç",
	"√°" => "√Å",	"√ " => "√Ä",	"¬µ" => "Œú",
	"z" => "Z",		"y" => "Y",		"x" => "X",
	"w" => "W",		"v" => "V",		"u" => "U",
	"t" => "T",		"s" => "S",		"r" => "R",
	"q" => "Q",		"p" => "P",		"o" => "O",
	"n" => "N",		"m" => "M",		"l" => "L",
	"k" => "K",		"j" => "J",		"i" => "I",
	"h" => "H",		"g" => "G",		"f" => "F",
	"e" => "E",		"d" => "D",		"c" => "C",
	"b" => "B",		"a" => "A",
);

if ( ! defined( 'WP_CONTENT_URL' ) )
    define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
if ( ! defined( 'WP_CONTENT_DIR' ) )
    define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
if ( ! defined( 'WP_PLUGIN_URL' ) )
    define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
if ( ! defined( 'WP_PLUGIN_DIR' ) )
    define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );

require_once( WP_PLUGIN_DIR . '/best-wordpress-seo-plugin/bestseo.class.php');

global $bestseo_options;
$bestseo_options = get_option('bestseo_options');



/*
add_option("aiosp_home_description", null, 'Best WordPress SEO Plugin Plugin Home Description', 'yes');
add_option("aiosp_home_title", null, 'Best WordPress SEO Plugin Plugin Home Title', 'yes');
add_option("aiosp_donate", 0, 'Best WordPress SEO Plugin Donate', 'no');
add_option("aiosp_can", 1, 'Best WordPress SEO Plugin Canonical URLs', 'yes');
add_option("aiosp_rewrite_titles", 1, 'Best WordPress SEO Plugin Plugin Rewrite Titles', 'yes');
add_option("aiosp_use_categories", 0, 'Best WordPress SEO Plugin Plugin Use Categories', 'yes');
add_option("aiosp_category_noindex", 1, 'Best WordPress SEO Plugin Plugin Noindex for Categories', 'yes');
add_option("aiosp_archive_noindex", 1, 'Best WordPress SEO Plugin Plugin Noindex for Archives', 'yes');
add_option("aiosp_tags_noindex", 0, 'Best WordPress SEO Plugin Plugin Noindex for Tag Archives', 'yes');
add_option("aiosp_generate_descriptions", 1, 'Best WordPress SEO Plugin Plugin Autogenerate Descriptions', 'yes');
add_option("aiosp_post_title_format", '%post_title% | %blog_title%', 'Best WordPress SEO Plugin Plugin Post Title Format', 'yes');
add_option("aiosp_page_title_format", '%page_title% | %blog_title%', 'Best WordPress SEO Plugin Plugin Page Title Format', 'yes');
add_option("aiosp_dynamic_postspage_keywords", 1, 'Best WordPress SEO Plugin Plugin Dynamic Posts Page Keywords', 'yes');
add_option("aiosp_category_title_format", '%category_title% | %blog_title%', 'Best WordPress SEO Plugin Plugin Category Title Format', 'yes');
add_option("aiosp_archive_title_format", '%date% | %blog_title%', 'Best WordPress SEO Plugin Plugin Archive Title Format', 'yes');
add_option("aiosp_tag_title_format", '%tag% | %blog_title%', 'Best WordPress SEO Plugin Plugin Tag Title Format', 'yes');
add_option("aiosp_search_title_format", '%search% | %blog_title%', 'Best WordPress SEO Plugin Plugin Search Title Format', 'yes');
add_option("aiosp_description_format", '%description%', 'Best WordPress SEO Plugin Plugin Description Format', 'yes');
add_option("aiosp_paged_format", ' - Part %page%', 'Best WordPress SEO Plugin Plugin Paged Format', 'yes');
add_option("aiosp_404_title_format", 'Nothing found for %request_words%', 'Best WordPress SEO Plugin Plugin 404 Title Format', 'yes');
add_option("aiosp_post_meta_tags", '', 'Best WordPress SEO Plugin Plugin Additional Post Meta Tags', 'yes');
add_option("aiosp_page_meta_tags", '', 'Best WordPress SEO Plugin Plugin Additional Post Meta Tags', 'yes');
add_option("aiosp_home_meta_tags", '', 'Best WordPress SEO Plugin Plugin Additional Home Meta Tags', 'yes');
add_option("aiosp_do_log", null, 'Best WordPress SEO Plugin Plugin write log file', 'yes');
*/

//$role = get_role('administrator');
//$role->add_cap('Edit bestseo Options');
//$role->add_cap('Edit bestseo on Posts/Pages');

////checking to see if things need to be updated

//if_post('turn-on'){
	
	/*   automattic?
if(!get_option('bestseo_options')){
	bestseo_mrt_fix_meta(); //move this to the if also 
	bestseo_mrt_mkarry();
	}
*/

if(isset($_POST['bestseo_migrate'])) bestseo_mrt_fix_meta();
if(isset($_POST['bestseo_migrate_options'])) bestseo_mrt_mkarry();
if(!get_option('aiosp_post_title_format') && !get_option('bestseo_options')) bestseo_mrt_mkarry();

//}end _post('turn_on')


////end checking to see if things need to be updated


function bestseo_mrt_fix_meta(){
global $wpdb;
$wpdb->query("UPDATE $wpdb->postmeta SET meta_key = '_bestseo_keywords' WHERE meta_key = 'keywords'");
$wpdb->query("UPDATE $wpdb->postmeta SET meta_key = '_bestseo_title' WHERE meta_key = 'title'");	
$wpdb->query("UPDATE $wpdb->postmeta SET meta_key = '_bestseo_description' WHERE meta_key = 'description'");
$wpdb->query("UPDATE $wpdb->postmeta SET meta_key = '_bestseo_meta' WHERE meta_key = 'aiosp_meta'");
$wpdb->query("UPDATE $wpdb->postmeta SET meta_key = '_bestseo_disable' WHERE meta_key = 'aiosp_disable'");
echo "<div class='updated fade' style='background-color:green;border-color:green;'><p><strong>Updating SEO post meta in database.</strong></p></div";
}


$bestseocc = 0;


function bestseo_mrt_mkarry() {
$nbestseo_options = array(
"aiosp_can"=>1,
"aiosp_donate"=>0,
"aiosp_home_title"=>null,
"aiosp_home_description"=>'',
"aiosp_home_keywords"=>null,
"aiosp_max_words_excerpt"=>'something',
"aiosp_rewrite_titles"=>1,
"aiosp_post_title_format"=>'%post_title% | %blog_title%',
"aiosp_page_title_format"=>'%page_title% | %blog_title%',
"aiosp_category_title_format"=>'%category_title% | %blog_title%',
"aiosp_archive_title_format"=>'%date% | %blog_title%',
"aiosp_tag_title_format"=>'%tag% | %blog_title%',
"aiosp_search_title_format"=>'%search% | %blog_title%',
"aiosp_description_format"=>'%description%',
"aiosp_404_title_format"=>'Nothing found for %request_words%',
"aiosp_paged_format"=>' - Part %page%',
"aiosp_use_categories"=>0,
"aiosp_dynamic_postspage_keywords"=>1,
"aiosp_category_noindex"=>1,
"aiosp_archive_noindex"=>1,
"aiosp_tags_noindex"=>0,
"aiosp_cap_cats"=>1,
"aiosp_generate_descriptions"=>0,
"aiosp_debug_info"=>null,
"aiosp_post_meta_tags"=>'',
"aiosp_page_meta_tags"=>'',
"aiosp_home_meta_tags"=>'',
"aiosp_enabled" =>0,
"aiosp_enablecpost" => 0,
"aiosp_use_tags_as_keywords" =>1,
"aiosp_seopostcol" =>1,
"aiosp_seocustptcol" => 0,
"aiosp_posttypecolumns" => array('post','page'),
"aiosp_do_log"=>null);

if(get_option('aiosp_post_title_format')){
foreach( $nbestseo_options as $bestseo_opt_name => $value ) {
		if( $bestseo_oldval = get_option($bestseo_opt_name) ) {
			$nbestseo_options[$bestseo_opt_name] = $bestseo_oldval;
			
		}
		if( $bestseo_oldval == ''){
                          $nbestseo_options[$bestseo_opt_name] = '';
                      }
        
		delete_option($bestseo_opt_name);
	}
}

add_option('bestseo_options',$nbestseo_options);
echo "<div class='updated fade' style='background-color:green;border-color:green;'><p><strong>Updating SEO configuration options in database</strong></p></div";

}
//if( function_exists( 'is_site_admin' ) ) {

function bestseo_activation_notice(){
	global $bestseo_options;
				if(function_exists('admin_url')){
				echo '<div class="error fade" style="background-color:red;"><p><strong>Best WordPress SEO Plugin must be configured. Go to <a href="' . admin_url( 'options-general.php?page=best-wordpress-seo-plugin/bestseo.class.php' ) . '">the admin page</a> to enable and configure the plugin.</strong><br />Best WordPress SEO Plugin now supports <em>Custom Post Types</em>.</p></div>';
}else{
		echo '<div class="error fade" style="background-color:red;"><p><strong>Best WordPress SEO Plugin must be configured. Go to <a href="' . get_option('siteurl') . 'options-general.php?page=best-wordpress-seo-plugin/bestseo.class.php' . '">the admin page</a> to enable and configure the plugin.</strong></p></div>';
}
}

if($bestseocc){
	if(bestseo_get_version() != trim(wp_remote_fopen('http://bestseopro.semperfiwebdesign.com/version.html'))){
		add_action('after_plugin_row_best-wordpress-seo-plugin-pro/bestseo.php', 'add_plugin_row', 10, 2);
	}
}

function bestseo_activate_pl(){
	if(get_option('bestseo_options')){
		$bestseo_options = get_option('bestseo_options');
		$bestseo_options['aiosp_enabled'] = "0";
		
		if(!$bestseo_options['aiosp_posttypecolumns']){
			$bestseo_options['aiosp_posttypecolumns'] = array('post','page');
		}
		
		update_option('bestseo_options',$bestseo_options);
	}
}

if($bestseo_options['aiosp_can'] == '1' || $bestseo_options['aiosp_can'] == 'on'){
        remove_action( 'wp_head', 'rel_canonical' );
}

function bestseo_get_version(){
	return '1.2.0';
}

function add_plugin_row($links, $file) {

echo '<td colspan="5" style="background-color:yellow;">';
echo  wp_remote_fopen('http://bestseopro.semperfiwebdesign.com/');
echo '</td>';

}


$aiosp = new Best_SEO();	

////////new stuff

//add_action('quick_edit_custom_box','mys',10,2);

function mys($col, $type){
	 
	?>
	
	
	<fieldset class="inline-edit-col-right"><div class="inline-edit-col">
	    <div class="inline-edit-group">
	        <label class="alignleft">
	            <input type="checkbox" value="1" name="bestseos" id="aioseos_check">
	            <span class="checkbox-title">stuff</span>
	        </label>
	    </div>
	</fieldset>
	<?php
}


add_action('load-edit.php','addmycolumns',1);

function addmycolumns(){
	$bestseo_options = get_option('bestseo_options');
	$aiosp_posttypecolumns = $bestseo_options['aiosp_posttypecolumns'];
//print_r($aiosp_posttypecolumns);

	if ( !isset($_GET['post_type']) ) $post_type = 'post';
		else    $post_type = $_GET['post_type'];


		if(is_array($aiosp_posttypecolumns) && in_array($post_type,$aiosp_posttypecolumns)) {
			if($post_type == 'page'){
				add_action('manage_pages_custom_column', 'bestseo_mrt_pccolumn', 10, 2);
				add_filter('manage_pages_columns', 'bestseo_mrt_pcolumns');

			}else{
				add_action('manage_posts_custom_column', 'bestseo_mrt_pccolumn', 10, 2);
				add_filter('manage_posts_columns', 'bestseo_mrt_pcolumns');
				}
			}

		}


function bestseo_mrt_pcolumns($bestseoc) {
    $bestseoc['seotitle'] = __('SEO Title');
    $bestseoc['seokeywords'] = __('SEO Keywords');
    $bestseoc['seodesc'] = __('SEO Description');
    return $bestseoc;
}

function bestseo_mrt_pccolumn($bestseocn, $bestseopi) {
    if( $bestseocn == 'seotitle' ) {
        echo htmlspecialchars(stripcslashes(get_post_meta($bestseopi,'_bestseo_title',TRUE)));
    }
    if( $bestseocn == 'seokeywords' ) {
        echo htmlspecialchars(stripcslashes(get_post_meta($bestseopi,'_bestseo_keywords',TRUE)));
    }
    if( $bestseocn == 'seodesc' ) {
        echo htmlspecialchars(stripcslashes(get_post_meta($bestseopi,'_bestseo_description',TRUE)));
    }

}


///////end new stuff
add_filter('wp_list_pages', 'bestseo_list_pages');
add_action('edit_post', array($aiosp, 'post_meta_tags'));
add_action('publish_post', array($aiosp, 'post_meta_tags'));
add_action('save_post', array($aiosp, 'post_meta_tags'));
add_action('edit_page_form', array($aiosp, 'post_meta_tags'));
add_action('init', array($aiosp, 'init'));
add_action('wp_head', array($aiosp, 'wp_head'));
add_action('wp_footer', array($aiosp, 'wp_footer'));
add_action('template_redirect', array($aiosp, 'template_redirect'));
add_action('admin_menu', array($aiosp, 'admin_menu'));
//add_action('admin_head',array($aiosp, 'seo_mrt_admin_head');
add_action('admin_menu', 'bestseo_meta_box_add');
add_action('admin_menu', 'bestseo_mrt_nap');

function bestseo_mrt_nap(){
//	add_object_page('Best WordPress SEO Plugin','Best WordPress SEO Plugin','administrator','bestseo','sometop2');
//	add_object_page('Best WordPress SEO Plugin', 'SEO', 8, "__FILE__", 'bestseo_mrt_nap_menu2a','http://65.190.51.165/aioseo/wp-content/plugins/best-wordpress-seo-plugin/images/globe.png');
	add_submenu_page("__FILE__", 'Settings', 'Settings', 'manage_options', '__FILE__', 'bestseo_mrt_nap_menu2a');
	add_submenu_page("__FILE__", 'Tools', 'Tools', 'manage_options', 'subpageb', 'bestseo_mrt_nap_menu2b');
}

function bestseo_mrt_nap_menu(){
	echo "hi";
	
}

function bestseo_mrt_nap_menu2a(){
	echo "here1";
}

function bestseo_mrt_nap_menu2b(){
	echo "here2";
}

if( ($_POST['aiosp_enabled'] == null && $bestseo_options['aiosp_enabled']!='1') || $_POST['aiosp_enabled']=='0'){
	add_action( 'admin_notices', 'bestseo_activation_notice');
	}


// The following two functions are GPLed from Sarah G's Page Menu Editor, http://wordpress.org/extend/plugins/page-menu-editor/.
function bestseo_list_pages($content){
	$matches = array();
	if (preg_match_all('/<li class="page_item page-item-(\d+)/i', $content, $matches)) {
		update_postmeta_cache(array_values($matches[1]));
		unset($matches);
		$pattern = '/<li class="page_item page-item-(\d+)([^\"]*)"><a href=\"([^\"]+)" title="([^\"]+)">([^<]+)<\/a>/i';
		return preg_replace_callback($pattern, "bestseo_filter_callback", $content);
	}
	return $content;
	}

function bestseo_filter_callback($matches) {
	global $wpdb;
	if ($matches[1] && !empty($matches[1])) $postID = $matches[1];
	if (empty($postID)) $postID = get_option("page_on_front");
	$title_attrib = stripslashes(get_post_meta($postID, '_bestseo_titleatr', true));
	$menulabel = stripslashes(get_post_meta($postID, '_bestseo_menulabel', true));
	if (empty($menulabel)) $menulabel = $matches[4];
	if (!empty($title_attrib)) :
		$filtered = '<li class="page_item page-item-'.$postID.$matches[2].'"><a href="'.$matches[3].'" title="'.$title_attrib.'">'.$menulabel.'</a>';
	else :
    	$filtered = '<li class="page_item page-item-'.$postID.$matches[2].'"><a href="'.$matches[3].'" title="'.$matches[4].'">'.$menulabel.'</a>';
	endif;
	return $filtered;
}

if (substr($aiosp->wp_version, 0, 3) < '2.5') {
        add_action('dbx_post_advanced', array($aiosp, 'add_meta_tags_textinput'));
        add_action('dbx_page_advanced', array($aiosp, 'add_meta_tags_textinput'));
}

function bestseo_meta_box_add() {
	if ( function_exists('add_meta_box') ) {
		if( function_exists('get_post_types')){		
			$mrt_bestseo_pts=get_post_types('','names'); 
			$bestseo_options = get_option('bestseo_options');
			$bestseo_mrt_cpt = $bestseo_options['aiosp_enablecpost'];
			foreach ($mrt_bestseo_pts as $mrt_bestseo_pt) {
				if($mrt_bestseo_pt == 'post' || $mrt_bestseo_pt == 'page' || $bestseo_mrt_cpt){
					add_meta_box('aiosp',__('Best WordPress SEO Plugin', 'bestseo'),'aiosp_meta',$mrt_bestseo_pt);
				}
			}
		}else{
			add_meta_box('aiosp',__('Best WordPress SEO Plugin', 'bestseo'),'aiosp_meta','post');
			add_meta_box('aiosp',__('Best WordPress SEO Plugin', 'bestseo'),'aiosp_meta','page');
		}

	} else {
		add_action('dbx_post_advanced', array($aiosp, 'add_meta_tags_textinput'));
		add_action('dbx_page_advanced', array($aiosp, 'add_meta_tags_textinput'));
	}
}

function aiosp_meta() {
	global $post;
	$post_id = $post;
	if (is_object($post_id)) $post_id = $post_id->ID;
 	$keywords = htmlspecialchars(stripcslashes(get_post_meta($post_id, '_bestseo_keywords', true)));
    	$title = htmlspecialchars(stripcslashes(get_post_meta($post_id, '_bestseo_title', true)));
	$description = htmlspecialchars(stripcslashes(get_post_meta($post_id, '_bestseo_description', true)));
   	$aiosp_meta = htmlspecialchars(stripcslashes(get_post_meta($post_id, '_aiosp_meta', true)));
    	$aiosp_disable = htmlspecialchars(stripcslashes(get_post_meta($post_id, '_bestseo_disable', true)));
    	$aiosp_titleatr = htmlspecialchars(stripcslashes(get_post_meta($post_id, '_bestseo_titleatr', true)));
    	$aiosp_menulabel = htmlspecialchars(stripcslashes(get_post_meta($post_id, '_bestseo_menulabel', true)));	
	?>
		<SCRIPT LANGUAGE="JavaScript">
		<!-- Begin
		function countChars(field,cntfield) {
		cntfield.value = field.value.length;
		}
		//  End -->
		</script>
		<input value="aiosp_edit" type="hidden" name="aiosp_edit" />
		
		<a target="__blank" href="http://semperfiwebdesign.com/forum/"><?php _e('Click here for Support', 'bestseo') ?></a>
		<table style="margin-bottom:40px">
		<tr>
		<th style="text-align:left;" colspan="2">
		</th>
		</tr>

		<tr>
		<th scope="row" style="text-align:right;"><?php _e('Title:', 'bestseo') ?></th>
		<td><input value="<?php echo $title ?>" type="text" name="aiosp_title" size="62" onKeyDown="countChars(document.post.aiosp_title,document.post.lengthT)" onKeyUp="countChars(document.post.aiosp_title,document.post.lengthT)"/><br />
			<input readonly type="text" name="lengthT" size="3" maxlength="3" style="text-align:center;" value="<?php echo strlen($title);?>" />
			<?php _e(' characters. Most search engines use a maximum of 60 chars for the title.', 'bestseo') ?>
			</td>
		</tr>
		
		<tr>
		<th scope="row" style="text-align:right;"><?php _e('Description:', 'bestseo') ?></th>
		<td><textarea name="aiosp_description" rows="3" cols="60"
		onKeyDown="countChars(document.post.aiosp_description,document.post.length1)"
		onKeyUp="countChars(document.post.aiosp_description,document.post.length1)"><?php echo $description ?></textarea><br />
		<input readonly type="text" name="length1" size="3" maxlength="3" value="<?php echo strlen($description);?>" />
		<?php _e(' characters. Most search engines use a maximum of 160 chars for the description.', 'bestseo') ?>
		</td>
		</tr>

		<tr>
		<th scope="row" style="text-align:right;"><?php _e('Keywords (comma separated):', 'bestseo') ?></th>
		<td><input value="<?php echo $keywords ?>" type="text" name="aiosp_keywords" size="62"/></td>
		</tr>
		<input type="hidden" name="nonce-bestseo-edit" value="<?php echo wp_create_nonce('edit-bestseo-nonce') ?>" />
<?php if($post->post_type=='page'){ ?>
		<tr>
		<th scope="row" style="text-align:right;"><?php _e('Title Attribute:', 'bestseo') ?></th>
		<td><input value="<?php echo $aiosp_titleatr ?>" type="text" name="aiosp_titleatr" size="62"/></td>
		</tr>
		
		<tr>
		<th scope="row" style="text-align:right;"><?php _e('Menu Label:', 'bestseo') ?></th>
		<td><input value="<?php echo $aiosp_menulabel ?>" type="text" name="aiosp_menulabel" size="62"/></td>
		</tr>
<?php } ?>
		<tr>
		<th scope="row" style="text-align:right; vertical-align:top;">
		<?php _e('Disable on this page/post:', 'bestseo')?>
		</th>
		<td>
		<input type="checkbox" name="aiosp_disable" <?php if ($aiosp_disable) echo "checked=\"1\""; ?>/>
		</td>
		</tr>
		</table>
	<?php
}
?>
