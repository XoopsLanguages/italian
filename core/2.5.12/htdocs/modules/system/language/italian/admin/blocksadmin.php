<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navigation
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Amministrazione Blocchi');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Gestisci');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Aggiungi un nuovo blocco');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Modifica un blocco');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Clona un blocco');
// Forms
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Blocco Personalizzato');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Tutti i tipi');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Moduli');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Gruppi');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Pagina');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Mostra blocco ');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Nascondi blocco ');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Clona');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Sinistra');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Superiore Sinistra');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Superiore Centro');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Superiore Destra');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Destra');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Inferiore Sinistra');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Inferiore Centro');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Inferiore Destra');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Footer Sinistra');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Footer Centro');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Footer Destra');

define('_AM_SYSTEM_BLOCKS_ADD', 'Aggiungi Blocco');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Gestisci Blocco');
define('_AM_SYSTEM_BLOCKS_NAME', 'Nome');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Tipo Blocco');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Blocco Laterale - Sinistra');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Blocco Laterale - Destra');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Blocco Centrale - Sinistra');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Blocco Centrale - Destra');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Blocco Centrale - Centro');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Blocco Centrale - Inferiore sinistra');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Blocco Centrale - Inferiore destra');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Blocco Footer - Sinistra');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Blocco Footer - Centro');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Blocco Footer - Destra');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Blocco Centrale - Inferiore');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Peso');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Visibile');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Visibile in');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Pagina Principale');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Tutte le Pagine');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'Non assegnato');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Titolo');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Contenuto');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Tag Utili:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s stamperà %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Tipo Contenuto');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'Script PHP');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Formattazione Automatica (smilies abilitati)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Formattazione Automatica (smilies disabilitati)');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Durata Cache');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Blocco Personalizzato (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Blocco Personalizzato (PHP)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Blocco Personalizzato (Formattazione Automatica + smilies)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Blocco Personalizzato (Formattazione Automatica)');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Modifica Template');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Opzioni');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Trascina o ordina il blocco');
// Messages
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', 'Sei sicuro di voler eliminare questo blocco? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'I blocchi di sistema non possono essere eliminati!');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'Questo blocco non può essere eliminato direttamente! Se desideri disabilitare questo blocco, disattiva il modulo.');
// Tips
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>Puoi facilmente cambiare la posizione laterale o l\'ordine con il drag\'n drop, clicca su <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> questa immagine e imposta il tuo sito proprio come lo desideri</li>
<li>Aggiungi un nuovo blocco personalizzato</li>
<li>Imposta il blocco online o offline cliccando su <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> o <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Footer Sinistra');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Footer Centro');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Footer Destra');
