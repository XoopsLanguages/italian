<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Front-end labels for the default system menu.
 *
 * These constants are never referenced by name in PHP, so a grep will not
 * find their uses. include/menu_seed.php stores the constant NAME as the
 * item or category title, and XoopsMenusItems::getResolvedTitle() /
 * XoopsMenusCategory::getResolvedTitle() turn it back into text at render
 * time (see class/theme.php). Any title that starts with MENUS_ and matches
 * a defined constant is resolved the same way, so a site can add its own.
 *
 * To translate, create language/<lang>/menus/menus.php with the same
 * defines (menus.dist.php is a template for that).
 *
 * @copyright    2000-2026 XOOPS Project https://xoops.org/
 * @license      GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author       XOOPS Development Team
 * _LANGCODE    it
 * _CHARSET     UTF-8
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');

define('MENUS_HOME', 'Home');
define('MENUS_ADMIN', 'Amministrazione');
define('MENUS_ACCOUNT', 'Account');
define('MENUS_ACCOUNT_EDIT', 'Modifica account');
define('MENUS_ACCOUNT_LOGIN', 'Accedi');
define('MENUS_ACCOUNT_LOGOUT', 'Esci');
define('MENUS_ACCOUNT_REGISTER', 'Registrati');
define('MENUS_ACCOUNT_MESSAGES', 'Messaggi');
define('MENUS_ACCOUNT_NOTIFICATIONS', 'Notifiche');
define('MENUS_ACCOUNT_TOOLBAR', 'Barra degli strumenti');
