<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permessi');
define('_MD_A_MYMENU_MYPREFERENCES','Preferenze');
// index.php
define('_AM_TH_DATETIME', 'Ora');
define('_AM_TH_USER', 'Utente');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Tipo');
define('_AM_TH_DESCRIPTION', 'Descrizione');
define('_AM_TH_BADIPS','IP Dannosi<br><br><span style="font-weight:normal;">Scrivi ogni IP su una riga<br>vuoto significa che tutti gli IP sono permessi</span>');
define('_AM_TH_GROUP1IPS','IP Permessi per il Gruppo=1<br><br><span style="font-weight:normal;">Scrivi ogni IP su una riga.<br>192.168. significa 192.168.*<br>vuoto significa che tutti gli IP sono permessi</span>');
define('_AM_LABEL_COMPACTLOG', 'Log compatto');
define('_AM_BUTTON_COMPACTLOG', 'Compattalo!');
define('_AM_JS_COMPACTLOGCONFIRM', 'I record duplicati (IP, Tipo) verranno rimossi');
define('_AM_LABEL_REMOVEALL', 'Rimuovi tutti i record');
define('_AM_BUTTON_REMOVEALL', 'Rimuovi tutto!');
define('_AM_JS_REMOVEALLCONFIRM', 'Tutti i log verranno rimossi definitivamente. Sei veramente sicuro?');
define('_AM_LABEL_REMOVE', 'Rimuovi i record selezionati:');
define('_AM_BUTTON_REMOVE', 'Rimuovi!');
define('_AM_JS_REMOVECONFIRM', 'Rimuovere OK?');
define('_AM_MSG_IPFILESUPDATED', 'I file per gli IP sono stati aggiornati');
define('_AM_MSG_BADIPSCANTOPEN', 'Impossibile aprire il file per gli IP dannosi');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Impossibile aprire il file per consentire il gruppo=1');
define('_AM_MSG_REMOVED', 'Record rimossi');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Rendi scrivibile la directory di configurazione: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Gestore Prefissi');
define('_AM_MSG_DBUPDATED', 'Database Aggiornato Con Successo!');
define('_AM_CONFIRM_DELETE', 'Tutti i dati verranno eliminati. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Se vuoi cambiare il prefisso,<br> modifica manualmente %s/data/secure.php.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Non sicuro');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Se vedi un\'immagine -NG- o il link restituisce una pagina normale, il tuo XOOPS_TRUST_PATH non è posizionato correttamente. La posizione migliore per XOOPS_TRUST_PATH è al di fuori di DocumentRoot. Se non puoi farlo, devi mettere .htaccess (DENY FROM ALL) direttamente sotto XOOPS_TRUST_PATH come seconda migliore soluzione.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Verifica che i file PHP all\'interno di TRUST_PATH siano impostati in sola lettura (deve essere un errore 404, 403 o 500)');
define('_AM_ADV_REGISTERGLOBALS',"Se impostato su 'ON', questa impostazione invita a una varietà di attacchi di iniezione. Se puoi, imposta 'register_globals off' in php.ini, o se non è possibile, crea o modifica .htaccess nella tua directory XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"Se impostato su 'ON', questa impostazione permette agli attaccanti di eseguire script arbitrari su server remoti.<br>Solo l'amministratore può cambiare questa opzione.<br>Se sei un amministratore, modifica php.ini o httpd.conf.<br><b>Esempio di httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Altrimenti, segnalalo ai tuoi amministratori.");
define('_AM_ADV_USETRANSSID',"Se impostato su 'ON', il tuo ID di sessione verrà visualizzato nei tag di ancoraggio ecc.<br>Per prevenire l'hijacking della sessione, aggiungi una riga in .htaccess in XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Questa impostazione invita a 'SQL Injection'.<br>Non dimenticare di attivare 'Forza la sanificazione *' nelle preferenze di questo modulo.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Vai al gestore prefissi');
define('_AM_ADV_MAINUNPATCHED', 'Dovresti modificare il tuo mainfile.php come scritto nel README.');
define('_AM_ADV_DBFACTORYPATCHED', 'La tua databasefactory è pronta per il Trapping DBLayer anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'La tua databasefactory non è pronta per il Trapping DBLayer anti-SQL-Injection. Sono richieste alcune patch.');
define('_AM_ADV_SUBTITLECHECK', 'Verifica se Protector funziona bene');
define('_AM_ADV_CHECKCONTAMI', 'Contaminazione');
define('_AM_ADV_CHECKISOCOM', 'Commenti Isolati');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'e inserisci al suo interno la riga sottostante:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefisso');
define('_AM_PROTECTOR_TABLES', 'Tabelle');
define('_AM_PROTECTOR_UPDATED', 'Aggiornato');
define('_AM_PROTECTOR_COPY', 'Copia');
define('_AM_PROTECTOR_ACTIONS', 'Azioni');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Banna gli IP sui record selezionati:');
define('_AM_BUTTON_BAN_BY_IP', 'Banna IP!');
define('_AM_JS_BANCONFIRM', 'Bannare gli IP OK?');
define('_AM_MSG_BANNEDIP', 'IP bannati');
define('_AM_ADMINSTATS_TITLE', 'Riepilogo Log di Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Ultimo Mese');
define('_AM_ADMINSTATS_LAST_WEEK', 'Ultima Settimana');
define('_AM_ADMINSTATS_LAST_DAY', 'Ultimo Giorno');
define('_AM_ADMINSTATS_LAST_HOUR', 'Ultima Ora');
