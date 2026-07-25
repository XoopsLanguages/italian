<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: it

define('_MD_DEBUGBAR_DEBUG', 'Debug');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'File inclusi');
define('_MD_DEBUGBAR_PHP_VERSION', 'Versione PHP');
define('_MD_DEBUGBAR_NONE', 'Nessuno');
define('_MD_DEBUGBAR_ERRORS', 'Errori');
define('_MD_DEBUGBAR_DEPRECATED', 'Obsoleto');
define('_MD_DEBUGBAR_QUERIES', 'Query');
define('_MD_DEBUGBAR_BLOCKS', 'Blocchi');
define('_MD_DEBUGBAR_EXTRA', 'Extra');
define('_MD_DEBUGBAR_TIMERS', 'Timer');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s ha impiegato %s secondi a caricare.');
define('_MD_DEBUGBAR_TOTAL', 'Totale');
define('_MD_DEBUGBAR_NOT_CACHED', 'Non in cache');
define('_MD_DEBUGBAR_CACHED', 'In cache (si rigenera ogni %s secondi)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(stringa vuota)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool VERO');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSO');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Query del database');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Utilizzo della memoria');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d query');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplicati)');
define('_MD_DEBUGBAR_BYTES', '%s byte');
define('_MD_DEBUGBAR_DB_VERSION', '%s versione');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Numero errore: %s Messaggio di errore: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Errore n.%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Eccezione');
define('_MD_DEBUGBAR_RAY_QUERY', 'Domanda n.%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUPx%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LENTO');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blocco (memorizzato nella cache %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blocco (non memorizzato nella cache)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Scarica');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Contesto del template');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(nessuna variabile di template)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d variabili)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'La directory "modules/debugbar/%s" non è stata creata');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Impossibile creare la directory "%s" durante la copia della risorsa');
