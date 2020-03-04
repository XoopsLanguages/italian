<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * feedback plugin for xoops modules
 *
 * @copyright      module for xoops
 * @license        GPL 2.0 or later
 * @package        general
 * @since          1.0
 * @min_xoops      2.5.9
 * @author         XOOPS - Website:<https://xoops.org>
 */

$moduleDirName      = basename(dirname(dirname(__DIR__)));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

define('CO_' . $moduleDirNameUpper . '_' . 'FB_FORM_TITLE', 'Invia una reazione');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_RECIPIENT', 'Recipiente');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_NAME', 'Nome');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_NAME_PLACEHOLER', 'Inserisci il tuo nome');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SITE', 'Sito Web');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SITE_PLACEHOLER', 'Inserisci il tuo Sito Web');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_MAIL', 'Email');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_MAIL_PLACEHOLER', 'Inserisci la tua email');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE', 'Tipo di reazione');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_SUGGESTION', 'Suggerimenti');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_BUGS', 'Errori');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_TESTIMONIAL', 'Referenze');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_FEATURES', 'Caratteristiche');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_OTHERS', 'Misc');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_CONTENT', 'Contenuto della Reazione');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SEND_FOR', 'Reazione per il modulo ');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SEND_SUCCESS', 'Reazione inviata correttamente');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SEND_ERROR', 'Si è verificato un errore durante l\'invio della reazione!');
