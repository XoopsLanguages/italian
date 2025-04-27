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
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Accesso limitato');
/**
 * Localizza le funzioni di posta
 *
 * La localizzazione inglese è solo a scopo dimostrativo
 */
// Non cambiare il nome della classe
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Costruttore
     */
    public function __construct()
    {
        parent::__construct();
        // Si suppone che non sia necessario cambiare il charset
        $this->charSet = strtolower(_CHARSET);
        // DEVI specificare il valore del codice lingua in modo che il file esista: XOOPS_ROOT_PAT/class/mail/phpmailer/language/lang-["il-tuo-codice-lingua"].php
        $this->multimailer->setLanguage('it');
    }

    /**
     * Le lingue multibyte sono incoraggiate a creare il loro metodo appropriato per la codifica di FromName
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // Attiva la seguente riga se necessario
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }


    /**
     * Le lingue multibyte sono incoraggiate a creare il loro metodo appropriato per la codifica del Subject
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // Attiva la seguente riga se necessario
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
