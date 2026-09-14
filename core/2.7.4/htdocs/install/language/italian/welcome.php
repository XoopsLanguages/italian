<?php
//
// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> è un open source
    Sistema di pubblicazione Web orientato agli oggetti scritto in PHP. È uno strumento ideale per
    sviluppo di siti Web di comunità dinamiche di piccole e grandi dimensioni, portali intraaziendali, portali aziendali, weblog e molto altro.
</p>
<p>
    XOOPS viene rilasciato secondo i termini del
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Licenza pubblica generale (GPL)</a>
    versione 2 o successiva ed è gratuito da utilizzare e modificare.
    La ridistribuzione è gratuita purché rispetti i termini di distribuzione di GPL.
</p>
<h3>Requisiti</h3>
<ul>
    <li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, ecc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 o superiore, 8.4+ consigliato</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 o superiore, 8.4.5+ consigliato </li>
</ul>
<h3>Prima di install</h3>
<ol>
    <li>Configurare correttamente il server WWW, PHP e il server database.</li>
    <li>Prepara un database per il tuo sito XOOPS.</li>
    <li>Preparare l\'account utente e concedere all\'utente l\'accesso al database.</li>
    <li>Rendi scrivibili queste directory e file: %s</li>
    <li>Per considerazioni di sicurezza, si consiglia vivamente di spostare fuori le due directory seguenti <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">radice del documento</a> e cambia i nomi delle cartelle: %s</li>
    <li>Crea (se non già presente) e rendi scrivibili queste directory: %s</li>
    <li>Attiva i cookie e il JavaScript del tuo browser.</li>
</ol>
<h3>Note speciali</h3>
<ol>
    <li>Alcune combinazioni software di sistema specifiche potrebbero richiedere alcune configurazioni aggiuntive per funzionare
    con XOOPS. Se uno qualsiasi di questi argomenti si applica al tuo ambiente, consulta la versione completa
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    manuale di installazione</a> per ulteriori informazioni<br><br>

    <li><strong>SELinux</strong> sistemi abilitati (come <strong>CentOS</strong>  E <strong>RHEL</strong>) potrebbe richiedere modifiche al contesto di sicurezza
    per le directory XOOPS oltre ai normali permessi sui file per rendere le directory scrivibili.
    Consultare la documentazione del sistema e/o l\'amministratore del sistema.
</ol>
';

return $content;
