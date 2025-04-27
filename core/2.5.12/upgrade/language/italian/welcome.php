<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>Aggiornamento di XOOPS</h2>

<p>
<em>Aggiornamento</em> esaminerà questa installazione di XOOPS e applicherà tutte le patch necessarie per renderla compatibile 
con il nuovo codice di XOOPS. Le patch possono includere modifiche al database, l'aggiunta di impostazioni predefinite per nuovi
elementi di configurazione, aggiornamenti di file e dati, e altro ancora.
<p>
Dopo ogni patch, l'aggiornamento riporterà lo stato e attenderà il tuo input per continuare. Alla fine
dell'aggiornamento, il controllo passerà alla funzione di aggiornamento del modulo di sistema.

<div class="alert alert-warning">
Una volta completato l'aggiornamento, non dimenticare di:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> eliminare la cartella di aggiornamento</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> aggiornare eventuali moduli che sono stati modificati</li>
</ul>
</div>

EOT,
);
