<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: it

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Segnalazione errori e analisi delle prestazioni con PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Mostra DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Abilita Debug di Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Abilita scheda file inclusi');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Mostra tutti i file PHP caricati durante la richiesta');
define('_MI_DEBUGBAR_SLOWQUERY', 'Soglia query lenta (secondi)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Le query più lente vengono evidenziate in rosso (es. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Registrazione query');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Tutte le query o solo quelle lente e con errori');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Tutte le query');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Solo lente ed errori');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Abilita integrazione Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Invia dati di debug all\'app Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Home (root)');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Informazioni');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Torna all\'amministrazione di ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Panoramica');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Dichiarazione di non responsabilità');
\define('_MI_DEBUGBAR_LICENSE', 'Licenza');
\define('_MI_DEBUGBAR_SUPPORT', 'Supporto');
