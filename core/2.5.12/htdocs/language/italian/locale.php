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
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Accesso ristretto');

setlocale(LC_ALL, 'it_IT');

// !!IMPORTANTE!! inserire '\' prima di ogni carattere tra i caratteri riservati: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// inserire '\\' prima di 't','r','n'
define('_TODAY', "\T\o\d\a\y G:i");
define('_YESTERDAY', "\Y\\e\s\\t\\e\\r\d\a\y G:i");
define('_MONTHDAY', 'n/j G:i');
define('_YEARMONTHDAY', 'Y/n/j G:i');
define('_ELAPSE', '%s fa');
define('_TIMEFORMAT_DESC', "Formati validi: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" o \"custom\" - formato determinato in base all\'intervallo; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br>" . "stringa specificata - Consulta <a href=\"https://php.net/manual/en/function.date.php\" rel=\"external\">manuale PHP</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * Una Localizzazione Xoops
 *
 * @package             kernel
 * @subpackage          Linguaggio
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Formati numerici
     *
     * @param  unknown_type $number
     * @return mixed
     */
    public function number_format($number)
    {
        return number_format($number, 2, '.', ',');
    }

    /**
     * Formato monetario
     *
     * @param  string $format
     * @param  string $number
     * @return money  format
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'it_IT');

        return money_format($format, $number);
    }
}
