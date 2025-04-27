<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Percorsi fisici di XOOPS');
define('LEGEND_DATABASE', 'Set di caratteri del database');

define('XOOPS_LIB_PATH_LABEL', 'Directory della libreria XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Percorso fisico alla directory della libreria XOOPS SENZA barra finale, per compatibilità futura. Colloca la cartella al di fuori di ' . XOOPS_ROOT_PATH . ' per renderla sicura.');
define('XOOPS_DATA_PATH_LABEL', 'Directory dei file di dati di XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Percorso fisico alla directory dei file di dati (scrivibile) di XOOPS SENZA barra finale, per compatibilità futura. Colloca la cartella al di fuori di ' . XOOPS_ROOT_PATH . ' per renderla sicura.');

define('DB_COLLATION_LABEL', 'Set di caratteri e collation del database');
define('DB_COLLATION_HELP', "A partire da MySQL 4.12 supporta set di caratteri e collation personalizzati. Tuttavia è più complesso del previsto, quindi NON apportare alcuna modifica a meno che tu non sia sicuro della tua scelta.");
define('DB_COLLATION_NOCHANGE', 'Non cambiare');

define('XOOPS_PATH_FOUND', 'Percorso trovato.');
define('ERR_COULD_NOT_ACCESS', 'Impossibile accedere alla cartella specificata. Verifica che esista e che sia leggibile dal server.');
define('CHECKING_PERMISSIONS', 'Verifica delle autorizzazioni di file e directory...');
define('ERR_NEED_WRITE_ACCESS', 'Al server deve essere concesso l\'accesso in scrittura ai seguenti file e cartelle<br>(es. <em>chmod 777 nome_directory</em> su un server UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NON è scrivibile.');
define('IS_WRITABLE', '%s è scrivibile.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Errore durante la scrittura del contenuto in mainfile.php, scrivi manualmente il contenuto in mainfile.php.');
