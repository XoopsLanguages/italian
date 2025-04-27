<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // Il nome di questo modulo
    define($constpref . '_NAME', 'Protector');

    // Una breve descrizione di questo modulo
    define($constpref . '_DESC', 'Questo modulo protegge il tuo sito XOOPS da vari attacchi come DoS, SQL Injection e contaminazione delle variabili.');

    // Menu
    define($constpref . '_ADMININDEX', 'Centro Protector');
    define($constpref . '_ADVISORY', 'Avviso di Sicurezza');
    define($constpref . '_PREFIXMANAGER', 'Gestore Prefissi');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Permessi');

    // Configurazioni
    define($constpref . '_GLOBAL_DISBL', 'Disabilitato temporaneamente');
    define($constpref . '_GLOBAL_DISBLDSC', 'Tutte le protezioni sono disabilitate temporaneamente.<br>Non dimenticare di attivarle di nuovo dopo aver risolto il problema.');

    define($constpref . '_DEFAULT_LANG', 'Lingua predefinita');
    define($constpref . '_DEFAULT_LANGDSC', 'Specifica la lingua da usare per visualizzare i messaggi prima di elaborare common.php');

    define($constpref . '_RELIABLE_IPS', 'IP affidabili');
    define($constpref . '_RELIABLE_IPSDSC', 'Imposta gli IP di cui ti puoi fidare separati da | . ^ corrisponde all\'inizio della stringa, $ corrisponde alla fine della stringa.');

    define($constpref . '_LOG_LEVEL', 'Livello di log');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'Tempo di sospensione IP bannato (sec)');

    define($constpref . '_LOGLEVEL0', 'nessuno');
    define($constpref . '_LOGLEVEL15', 'Silenzioso');
    define($constpref . '_LOGLEVEL63', 'quieto');
    define($constpref . '_LOGLEVEL255', 'completo');

    define($constpref . '_HIJACK_TOPBIT', 'Bit protetti dell\'IP per la sessione');
    define($constpref . '_HIJACK_TOPBITDSC', 'Anti Session Hi-Jacking:<br>Predefinito 24/56 (maschera di rete per IPV4/IPV6). (Tutti i bit sono protetti)<br>Quando il tuo IP non è stabile, imposta l\'intervallo IP per numero di bit.<br>(esempio) Se il tuo IP può muoversi nell\'intervallo 192.168.0.0-192.168.0.255, imposta 24 (bit) qui');
    define($constpref . '_HIJACK_DENYGP', 'Gruppi che non possono cambiare IP in una sessione');
    define($constpref . '_HIJACK_DENYGPDSC', 'Anti Session Hi-Jacking:<br>Seleziona i gruppi ai quali è vietato cambiare IP durante una sessione.<br>(Consiglio di attivare l\'Amministratore.)');
    define($constpref . '_SAN_NULLBYTE', 'Sanificazione dei null-byte');
    define($constpref . '_SAN_NULLBYTEDSC', 'Il carattere di terminazione "\\0" è spesso usato in attacchi malevoli.<br>Un null-byte sarà sostituito con uno spazio.<br>(Altamente consigliato come attivo)');
    define($constpref . '_DIE_NULLBYTE', 'Esci se vengono trovati null-byte');
    define($constpref . '_DIE_NULLBYTEDSC', 'Il carattere di terminazione "\\0" è spesso usato in attacchi malevoli.<br>(Altamente consigliato come attivo)');
    define($constpref . '_DIE_BADEXT', 'Esci se vengono caricati file con estensioni non valide');
    define($constpref . '_DIE_BADEXTDSC', 'Se qualcuno cerca di caricare file con estensioni non valide come .php, questo modulo farà uscire il tuo XOOPS.<br>Se carichi frequentemente file PHP in B-Wiki o PukiWikiMod, disattiva questa opzione.');
    define($constpref . '_CONTAMI_ACTION', 'Azione se viene trovata una contaminazione');
    define($constpref . '_CONTAMI_ACTIONDS', 'Seleziona l\'azione quando qualcuno cerca di contaminare le variabili globali del sistema nel tuo XOOPS.<br>(L\'opzione consigliata è la schermata vuota)');
    define($constpref . '_ISOCOM_ACTION', 'Azione se viene trovato un commento isolato');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Anti SQL Injection:<br>Seleziona l\'azione quando viene trovato un "/*" isolato.<br>"Sanificazione" significa aggiungere un altro "*/" alla fine.<br>(L\'opzione consigliata è la Sanificazione)');
    define($constpref . '_UNION_ACTION', 'Azione se viene trovata una UNION');
    define($constpref . '_UNION_ACTIONDSC', 'Anti SQL Injection:<br>Seleziona l\'azione quando viene trovata una sintassi come UNION di SQL.<br>"Sanificazione" significa cambiare "union" in "uni-on".<br>(L\'opzione consigliata è la Sanificazione)');
    define($constpref . '_ID_INTVAL', 'Forza intval su variabili come id');
    define($constpref . '_ID_INTVALDSC', 'Tutte le richieste denominate "*id" saranno trattate come interi.<br>Questa opzione ti protegge da alcuni tipi di XSS e SQL Injections.<br>Anche se consiglio di attivare questa opzione, potrebbe causare problemi con alcuni moduli.');
    define($constpref . '_FILE_DOTDOT', 'Protezione da Directory Traversals');
    define($constpref . '_FILE_DOTDOTDSC', 'Elimina ".." da tutte le richieste che sembrano Directory Traversals');

    define($constpref . '_BF_COUNT', 'Anti Brute Force');
    define($constpref . '_BF_COUNTDSC', "Imposta il numero massimo di tentativi che un ospite può fare per effettuare il login in 10 minuti. Se i tentativi di login falliscono oltre questo limite, l\'indirizzo IP dell\'ospite sarà bannato.");

    define($constpref . '_BWLIMIT_COUNT', 'Limitazione della larghezza di banda');
    define($constpref . '_BWLIMIT_COUNTDSC', 'Specifica il massimo accesso a mainfile.php durante il tempo di osservazione. Questo valore dovrebbe essere 0 per ambienti normali che hanno abbastanza larghezza di banda della CPU. I numeri inferiori a 10 saranno ignorati.');

    define($constpref . '_DOS_SKIPMODS', 'Moduli fuori dal controllo DoS/Crawler');
    define($constpref . '_DOS_SKIPMODSDSC', 'Imposta i dirnames dei moduli separati da |. Questa opzione sarà utile con moduli di chat ecc.');

    define($constpref . '_DOS_EXPIRE', 'Tempo di osservazione per carichi elevati (sec)');
    define($constpref . '_DOS_EXPIREDSC', 'Questo valore specifica il tempo di osservazione per i ricaricamenti ad alta frequenza (attacco F5) e per i crawler con carico elevato.');

    define($constpref . '_DOS_F5COUNT', 'Conteggi errati per attacco F5');
    define($constpref . '_DOS_F5COUNTDSC', 'Prevenzione da attacchi DoS.<br>Questo valore specifica il numero di ricaricamenti da considerare come attacco malevolo.');
    define($constpref . '_DOS_F5ACTION', 'Azione contro attacco F5');

    define($constpref . '_DOS_CRCOUNT', 'Conteggi errati per Crawlers');
    define($constpref . '_DOS_CRCOUNTDSC', 'Prevenzione da crawler con carico elevato.<br>Questo valore specifica il numero di accessi da considerare come crawler di cattiva condotta.');
    define($constpref . '_DOS_CRACTION', 'Azione contro i crawler con carico elevato');

    define($constpref . '_DOS_CRSAFE', 'User-Agent benvenuti');
    define($constpref . '_DOS_CRSAFEDSC', 'Un pattern perl regex per User-Agent.<br>Se corrisponde, il crawler non sarà mai considerato come crawler ad alto carico.<br>es) /(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'Nessuna (solo log)');
    define($constpref . '_OPT_SAN', 'Sanificazione');
    define($constpref . '_OPT_EXIT', 'Schermata vuota');
    define($constpref . '_OPT_BIP', 'Banna l\'IP (senza limite)');
    define($constpref . '_OPT_BIPTIME0', 'Banna l\'IP (moratoria)');

    define($constpref . '_DOSOPT_NONE', 'Nessuna (solo log)');
    define($constpref . '_DOSOPT_SLEEP', 'Sleep');
    define($constpref . '_DOSOPT_EXIT', 'Schermata vuota');
    define($constpref . '_DOSOPT_BIP', 'Banna l\'IP (senza limite)');
    define($constpref . '_DOSOPT_BIPTIME0', 'Banna l\'IP (moratoria)');
    define($constpref . '_DOSOPT_HTA', 'DENY tramite .htaccess (Sperimentale)');

    define($constpref . '_BIP_EXCEPT', 'Gruppi mai registrati come Bad IP');
    define($constpref . '_BIP_EXCEPTDSC', 'Un utente che appartiene al gruppo specificato qui non sarà mai bannato.<br>(Consiglio di attivare l\'Amministratore.)');

    define($constpref . '_DISABLES', 'Disabilita le funzionalità pericolose in XOOPS');

    define($constpref . '_DBLAYERTRAP', 'Abilita il trapping del DB Layer per anti-SQL-Injection');
    define($constpref . '_DBLAYERTRAPDSC', 'Quasi tutti gli attacchi SQL Injection saranno cancellati da questa funzione. Questa funzione richiede un supporto dal databasefactory. Puoi verificarlo nella pagina di Avviso di Sicurezza. Questa impostazione deve essere attiva. Non disattivarla casualmente.');
    define($constpref . '_DBTRAPWOSRV', 'Non controllare mai _SERVER per anti-SQL-Injection');
    define($constpref . '_DBTRAPWOSRVDSC', 'Alcuni server abilitano sempre il trapping del DB Layer. Ciò causa rilevamenti errati come attacchi SQL Injection. Se ricevi errori di questo tipo, attiva questa opzione. Dovresti sapere che questa opzione indebolisce la sicurezza del trapping del DB Layer anti-SQL-Injection.');

    define($constpref . '_BIGUMBRELLA', 'Abilita anti-XSS (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Questa funzione ti protegge da quasi tutti gli attacchi via vulnerabilità XSS. Ma non è al 100%');

    define($constpref . '_SPAMURI4U', 'anti-SPAM: URL per utenti normali');
    define($constpref . '_SPAMURI4UDSC', 'Se questo numero di URL viene trovato nei dati POST da utenti non amministratori, il POST è considerato SPAM. 0 significa disabilitare questa funzione.');
    define($constpref . '_SPAMURI4G', 'anti-SPAM: URL per ospiti');
    define($constpref . '_SPAMURI4GDSC', 'Se questo numero di URL viene trovato nei dati POST da ospiti, il POST è considerato SPAM. 0 significa disabilitare questa funzione.');

    // 3.40b
    define($constpref . '_ADMINHOME', 'Home');
    define($constpref . '_ADMINABOUT', 'Informazioni');
    // 3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Stop Forum Spam');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Controlla i dati POST contro gli spammer registrati nel database di www.stopforumspam.com. Richiede la libreria php CURL.');
    // 3.60
    define($constpref . '_ADMINSTATS', 'Panoramica');
    define($constpref . '_BANIP_TIME0DSC', 'Tempo di sospensione in secondi per i ban IP automatici');
}
