<?php

// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Aggiornamento</h2>

<p>
<em>Aggiornamento</em> esaminerà questa installazione XOOPS e applicherà tutte le patch necessarie per renderla compatibile 
con il nuovo codice XOOPS. Le patch possono includere modifiche al database, aggiungendo impostazioni predefinite per i nuovi
elementi di configurazione, aggiornamenti di file e dati e altro ancora.
<p>
Dopo ogni patch, il programma di aggiornamento riporterà lo stato e attenderà il tuo input per continuare. Al
Al termine dell'aggiornamento, il controllo passerà alla funzione di aggiornamento del modulo di sistema.

<div class="alert alert-warning">
Una volta completato l'aggiornamento, non dimenticare di:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> eliminare la cartella di aggiornamento</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> aggiornare tutti i moduli che sono cambiati</li>
</div>

EOT,
);
