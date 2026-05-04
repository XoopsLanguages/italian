<div id="help-template" class="outer">
    <h1 class="head">Aiuto: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Torna all'amministrazione di Protector"> Protector <img src="<{xoAdminIcons 'home.png'}>" alt="Torna all'amministrazione di Protector"/></a></h1>
    <h4 class="odd">Descrizione</h4>

    <p class="even">Protector è un modulo per difendere il tuo XOOPS CMS da vari attacchi malevoli.</p>
    <h4 class="odd">Installazione/disinstallazione</h4>

    <p>Prima, definisci XOOPS_TRUST_PATH in mainfile.php se non l'hai ancora fatto.</p>
    <br>

    <p>Copia html/modules/protector nell'archivio nella tua XOOPS_ROOT_PATH/modules/</p>

    <p>Copia xoops_trust_path/modules/protector nell'archivio nella tua XOOPS_TRUST_PATH/modules/</p>
    <br>

    <p>Rendi scrivibili i permessi di XOOPS_TRUST_PATH/modules/protector/configs</p>
    <h4 class="odd">= Come recuperare =</h4>

    <p class="even">Se sei stato bannato da Protector, elimina semplicemente i file sotto XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">Introduzione per i plugin di filtro in questo archivio.</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        un plugin anti-SPAM.
        <br>
        Tutti i Post da IP registrati in RBL verranno rifiutati.
        <br>
        Questo plugin può rallentare le prestazioni dei Post, specialmente nei moduli di chat.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        un plugin anti-SPAM.
        <br>
        Tutti i Post da IP registrati in http:BL verranno rifiutati.
        <br>
        Prima di utilizzarlo, ottieni HTTPBL_KEY da http://www.projecthoneypot.org/ e impostalo nel file di filtro.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        un plugin anti-SPAM.
        <br>
        I Post senza caratteri multibyte verranno rifiutati.
        <br>
        Questo plugin è solo per siti in giapponese, cinese tradizionale, cinese semplificato e coreano.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        Tutti i dati dei post inviati dagli ospiti verranno purificati da HTMLPurifier.
        <br>
        Se permetti agli ospiti di pubblicare HTML, ti consiglio vivamente di abilitarlo.
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        Questo plugin impedisce la registrazione di utenti robot sul tuo sito.
        <br>
        Richiede che JavaScript funzioni sul browser dei visitatori.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        Specifica un messaggio per i visitatori che hanno provato password errate più volte di quanto specificato.
        <br>
        Tutti i plugin denominati *_message.php specificano il messaggio per gli accessi rifiutati.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        Quando la limitazione della larghezza di banda funziona in modo imprevisto, questo plugin lo registra nell'error_log di Apache.
    </p>

    <p>Tutti i plugin denominati *_errorlog.php registrano alcune informazioni nell'error_log di Apache.</p>
    <h4 class="odd">Tutorial</h4>

    <p class="even">Tutorial in arrivo.</p>
</div>
