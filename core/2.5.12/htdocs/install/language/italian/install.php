<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Mostra/nascondi testo di aiuto');
// License
//define('LICENSE_NOT_WRITEABLE', 'Il file di licenza "%s" NON è scrivibile!');
//define('LICENSE_IS_WRITEABLE', 'La licenza %s è scrivibile.');
// Configuration check page
define('SERVER_API', 'API del server');
define('PHP_EXTENSION', 'Estensione %s');
define('CHAR_ENCODING', 'Codifica dei caratteri');
define('XML_PARSING', 'Analisi XML');
define('REQUIREMENTS', 'Requisiti');
define('_PHP_VERSION', 'Versione PHP');
define('RECOMMENDED_SETTINGS', 'Impostazioni consigliate');
define('RECOMMENDED_EXTENSIONS', 'Estensioni consigliate');
define('SETTING_NAME', 'Nome impostazione');
define('RECOMMENDED', 'Consigliato');
define('CURRENT', 'Attuale');
define('RECOMMENDED_EXTENSIONS_MSG', 'Queste estensioni non sono necessarie per l\'uso normale, ma potrebbero essere richieste per alcune funzionalità specifiche (come il supporto multilingue o RSS). Pertanto, si consiglia di installarle.');
define('NONE', 'Nessuno');
define('SUCCESS', 'Successo');
define('WARNING', 'Avviso');
define('FAILED', 'Fallito');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Procedura guidata di installazione di XOOPS');
define('LANGUAGE_SELECTION', 'Selezione della lingua');
define('LANGUAGE_SELECTION_TITLE', 'Seleziona la tua lingua');        // L128
define('INTRODUCTION', 'Introduzione');
define('INTRODUCTION_TITLE', 'Benvenuto nella procedura guidata di installazione di XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Controllo configurazione');
define('CONFIGURATION_CHECK_TITLE', 'Verifica della configurazione del server');
define('PATHS_SETTINGS', 'Impostazioni dei percorsi');
define('PATHS_SETTINGS_TITLE', 'Impostazioni dei percorsi');
define('DATABASE_CONNECTION', 'Connessione al database');
define('DATABASE_CONNECTION_TITLE', 'Connessione al database');
define('DATABASE_CONFIG', 'Configurazione del database');
define('DATABASE_CONFIG_TITLE', 'Configurazione del database');
define('CONFIG_SAVE', 'Salva configurazione');
define('CONFIG_SAVE_TITLE', 'Salvataggio della configurazione del sistema');
define('TABLES_CREATION', 'Creazione delle tabelle');
define('TABLES_CREATION_TITLE', 'Creazione delle tabelle del database');
define('INITIAL_SETTINGS', 'Impostazioni iniziali');
define('INITIAL_SETTINGS_TITLE', 'Inserisci le tue impostazioni iniziali');
define('DATA_INSERTION', 'Inserimento dati');
define('DATA_INSERTION_TITLE', 'Salvataggio delle impostazioni nel database');
define('WELCOME', 'Benvenuto');
define('WELCOME_TITLE', 'Benvenuto nel tuo sito XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Percorsi fisici di XOOPS');
define('XOOPS_URLS', 'Posizioni web');
define('XOOPS_ROOT_PATH_LABEL', 'Percorso fisico della root dei documenti di XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'Percorso fisico della directory dei documenti di XOOPS (servita) SENZA barra finale');
define('XOOPS_LIB_PATH_LABEL', 'Directory della libreria di XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Percorso fisico della directory della libreria di XOOPS SENZA barra finale, per compatibilità futura. Posiziona la cartella fuori da ' . XOOPS_ROOT_PATH_LABEL . ' per renderla sicura.');
define('XOOPS_DATA_PATH_LABEL', 'Directory dei file di dati di XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Percorso fisico della directory dei file di dati di XOOPS (scrivibile) SENZA barra finale, per compatibilità futura. Posiziona la cartella fuori da ' . XOOPS_ROOT_PATH_LABEL . ' per renderla sicura.');
define('XOOPS_URL_LABEL', 'Posizione del sito web (URL)'); // L56
define('XOOPS_URL_HELP', 'URL principale che verrà utilizzato per accedere all\'installazione di XOOPS'); // L58
define('LEGEND_CONNECTION', 'Connessione al server');
define('LEGEND_DATABASE', 'Database'); // L51
define('DB_HOST_LABEL', 'Nome host del server');    // L27
define('DB_HOST_HELP', 'Nome host del server del database. Se non sei sicuro, <em>localhost</em> funziona nella maggior parte dei casi'); // L67
define('DB_USER_LABEL', 'Nome utente');    // L28
define('DB_USER_HELP', 'Nome dell\'account utente che verrà utilizzato per connettersi al server del database'); // L65
define('DB_PASS_LABEL', 'Password');    // L52
define('DB_PASS_HELP', 'Password del tuo account utente del database'); // L68
define('DB_NAME_LABEL', 'Nome del database');    // L29
define('DB_NAME_HELP', 'Il nome del database sull\'host. L\'installatore tenterà di creare il database se non esiste'); // L64
define('DB_CHARSET_LABEL', 'Set di caratteri del database');
define('DB_CHARSET_HELP', 'MySQL include il supporto per set di caratteri che consente di memorizzare dati utilizzando una varietà di set di caratteri ed eseguire confronti secondo diverse collazioni.');
define('DB_COLLATION_LABEL', 'Collation del database');
define('DB_COLLATION_HELP', 'Una collation è un insieme di regole per confrontare i caratteri in un set di caratteri.');
define('DB_PREFIX_LABEL', 'Prefisso tabelle');    // L30
define('DB_PREFIX_HELP', 'Questo prefisso verrà aggiunto a tutte le nuove tabelle create per evitare conflitti di nomi nel database. Se non sei sicuro, mantieni l\'impostazione predefinita'); // L63
define('DB_PCONNECT_LABEL', 'Usa connessione persistente');    // L54
define('DB_PCONNECT_HELP', "L'impostazione predefinita è 'No'. Lascia vuoto se non sei sicuro"); // L69
define('DB_DATABASE_LABEL', 'Database');
define('LEGEND_ADMIN_ACCOUNT', 'Account amministratore');
define('ADMIN_LOGIN_LABEL', 'Login amministratore'); // L37
define('ADMIN_EMAIL_LABEL', 'E-mail amministratore'); // L38
define('ADMIN_PASS_LABEL', 'Password amministratore'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Conferma password'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Precedente'); // L42
define('BUTTON_NEXT', 'Continua'); // L47
// Messages
define('XOOPS_FOUND', '%s trovato');
define('CHECKING_PERMISSIONS', 'Verifica dei permessi di file e directory...'); // L82
define('IS_NOT_WRITABLE', '%s NON è scrivibile.'); // L83
define('IS_WRITABLE', '%s è scrivibile.'); // L84
define('XOOPS_PATH_FOUND', 'Percorso trovato.');
//define('READY_CREATE_TABLES', 'Nessuna tabella XOOPS rilevata.<br>L\'installatore è ora pronto per creare le tabelle di sistema XOOPS.');
define('XOOPS_TABLES_FOUND', 'Le tabelle di sistema XOOPS esistono già nel tuo database.'); // L131
define('XOOPS_TABLES_CREATED', 'Le tabelle di sistema XOOPS sono state create.');
//define('READY_INSERT_DATA', 'L\'installatore è ora pronto per inserire i dati iniziali nel tuo database.');
//define('READY_SAVE_MAINFILE', 'L\'installatore è ora pronto per salvare le impostazioni specificate in <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Impostazioni salvate');
define('SAVED_MAINFILE_MSG', 'L\'installatore ha salvato le impostazioni specificate in <em>mainfile.php</em> e <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'Dati XOOPS trovati nel database.');
define('DATA_INSERTED', 'I dati iniziali sono stati inseriti nel database.');
// %s is database name
define('DATABASE_CREATED', 'Database %s creato!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Impossibile creare la tabella %s'); // L118
define('TABLE_CREATED', 'Tabella %s creata.'); // L45
define('ROWS_INSERTED', '%d voci inserite nella tabella %s.'); // L119
define('ROWS_FAILED', 'Inserimento di %d voci nella tabella %s fallito.'); // L120
define('TABLE_ALTERED', 'Tabella %s aggiornata.'); // L133
define('TABLE_NOT_ALTERED', 'Aggiornamento della tabella %s fallito.'); // L134
define('TABLE_DROPPED', 'Tabella %s eliminata.'); // L163
define('TABLE_NOT_DROPPED', 'Eliminazione della tabella %s fallita.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Impossibile accedere alla cartella specificata. Verifica che esista e sia leggibile dal server.');
define('ERR_NO_XOOPS_FOUND', 'Nessuna installazione di XOOPS trovata nella cartella specificata.');
define('ERR_INVALID_EMAIL', 'E-mail non valida'); // L73
define('ERR_REQUIRED', 'Informazione obbligatoria.'); // L41
define('ERR_PASSWORD_MATCH', 'Le due password non corrispondono');
define('ERR_NEED_WRITE_ACCESS', 'Il server deve avere accesso in scrittura ai seguenti file e cartelle<br>(ad esempio <em>chmod 775 nome_directory</em> su un server UNIX/LINUX)<br>Se non sono disponibili o non creati correttamente, creali manualmente e imposta i permessi corretti.');
define('ERR_NO_DATABASE', 'Impossibile creare il database. Contatta l\'amministratore del server per dettagli.'); // L31
define('ERR_NO_DBCONNECTION', 'Impossibile connettersi al server del database.'); // L106
define('ERR_WRITING_CONSTANT', 'Scrittura della costante %s fallita.'); // L122
define('ERR_COPY_MAINFILE', 'Impossibile copiare il file di distribuzione in %s');
define('ERR_WRITE_MAINFILE', 'Impossibile scrivere in %s. Verifica i permessi del file e riprova.');
define('ERR_READ_MAINFILE', 'Impossibile aprire %s per la lettura');
define('ERR_INVALID_DBCHARSET', "Il set di caratteri '%s' non è supportato.");
define('ERR_INVALID_DBCOLLATION', "La collation '%s' non è supportata.");
define('ERR_CHARSET_NOT_SET', 'Il set di caratteri predefinito non è impostato per il database XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Supporto');
define('LOGIN', 'Autenticazione');
define('LOGIN_TITLE', 'Autenticazione');
define('USER_LOGIN', 'Login amministratore');
define('USERNAME', 'Nome utente:');
define('PASSWORD', 'Password:');
define('ICONV_CONVERSION', 'Conversione del set di caratteri');
define('ZLIB_COMPRESSION', 'Compressione Zlib');
define('IMAGE_FUNCTIONS', 'Funzioni per immagini');
define('IMAGE_METAS', 'Metadati delle immagini (exif)');
define('FILTER_FUNCTIONS', 'Funzioni di filtro');
define('ADMIN_EXIST', 'L\'account amministratore esiste già.');
define('CONFIG_SITE', 'Configurazione del sito');
define('CONFIG_SITE_TITLE', 'Configurazione del sito');
define('MODULES', 'Installazione dei moduli');
define('MODULES_TITLE', 'Installazione dei moduli');
define('THEME', 'Selezione del tema');
define('THEME_TITLE', 'Seleziona il tema predefinito');
define('INSTALLED_MODULES', 'I seguenti moduli sono stati installati.');
define('NO_MODULES_FOUND', 'Nessun modulo trovato.');
define('NO_INSTALLED_MODULES', 'Nessun modulo installato.');
define('THEME_NO_SCREENSHOT', 'Nessuno screenshot trovato');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Forza della password');
define('PASSWORD_DESC', 'Password non inserita');
define('PASSWORD_GENERATOR', 'Generatore di password');
define('PASSWORD_GENERATE', 'Genera');
define('PASSWORD_COPY', 'Copia');
define('PASSWORD_VERY_WEAK', 'Molto debole');
define('PASSWORD_WEAK', 'Debole');
define('PASSWORD_BETTER', 'Migliore');
define('PASSWORD_MEDIUM', 'Media');
define('PASSWORD_STRONG', 'Forte');
define('PASSWORD_STRONGEST', 'Fortissima');
//2.5.7
define('WRITTEN_LICENSE', 'Chiave di licenza XOOPS %s scritta: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Riprova');
define('CHMOD_CHGRP_IGNORE', 'Usa comunque');
define('CHMOD_CHGRP_ERROR', 'L\'installatore potrebbe non essere in grado di scrivere il file di configurazione %1$s.<p>PHP sta scrivendo file con utente %2$s e gruppo %3$s.<p>La directory %4$s/ ha utente %5$s e gruppo %6$s');
//2.5.9
define("CURL_HTTP", "Libreria URL Client (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Dominio dei cookie per il sito web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Dominio per impostare i cookie. Può essere vuoto, l\'host completo dall\'URL (www.example.com), o il dominio registrato senza sottodomini (example.com) per condividere tra sottodomini (www.example.com e blog.example.com).');
define('INTL_SUPPORT', 'Funzioni di internazionalizzazione');
define('XOOPS_SOURCE_CODE', "XOOPS su GitHub");
define('XOOPS_INSTALLING', 'Installazione in corso');
define('XOOPS_ERROR_ENCOUNTERED', 'Errore');
define('XOOPS_ERROR_SEE_BELOW', 'Vedi sotto per i messaggi.');
define('MODULES_AVAILABLE', 'Moduli disponibili');
define('INSTALL_THIS_MODULE', 'Aggiungi %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Impossibile copiare il file di configurazione %s');
