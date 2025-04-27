<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Il tuo sito</h3>
<p>Ora puoi accedere alla <a href='../index.php'>pagina principale del tuo sito</a>.</p>
<h3>Supporto</h3>
<p>Visita <a href='https://xoops.org/' rel='external'>The XOOPS Project</a></p>
<p><strong>ATTENZIONE:</strong> Il tuo sito attualmente contiene le funzionalità minime.
Visita <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a>
per saperne di più sull'estensione di XOOPS per presentare pagine di testo, gallerie fotografiche, forum e altro,
con i <em>moduli</em>, nonché sulla personalizzazione dell'aspetto del tuo XOOPS con i <em>temi</em>.</p>
";

$content .= "<h3>Configurazione di sicurezza</h3>
<p>L'installer cercherà di configurare il tuo sito per considerazioni di sicurezza. Per favore, ricontrolla per assicurarti che:
<div class='confirmMsg'>
Il file <em>mainfile.php</em> sia in sola lettura.<br>
Rimuovi la cartella <em>{$installer_modified}</em> (o <em>install</em> se non è stata rinominata automaticamente dall'installer) dal tuo server.
</div>
</p>
";
