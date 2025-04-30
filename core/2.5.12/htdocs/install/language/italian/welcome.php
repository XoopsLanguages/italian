<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> è un sistema di pubblicazione web open-source
    orientato agli oggetti scritto in PHP. È uno strumento ideale per lo sviluppo di siti web dinamici per comunità di piccole e grandi dimensioni, portali aziendali, portali corporate, weblog e molto altro.
</p>
<p>
    XOOPS è rilasciato sotto i termini della
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
    versione 2 o successiva, ed è gratuito da usare e modificare.
    È gratuito da ridistribuire a condizione che tu rispetti i termini di distribuzione della GPL.
</p>
<h3>Requisiti</h3>
<ul>
    <li>Server WWW (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, ecc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 7.4 o superiore, 7.3+ raccomandato</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 o superiore, 5.7+ raccomandato </li>
</ul>
<h3>Prima dell\'installazione</h3>
<ol>
    <li>Configura correttamente il server WWW, PHP e il server di database.</li>
    <li>Prepara un database per il tuo sito XOOPS.</li>
    <li>Prepara un account utente e concedi all\'utente l\'accesso al database.</li>
    <li>Rendi scrivibili queste directory e questi file: %s</li>
    <li>Per considerazioni di sicurezza, ti consigliamo vivamente di spostare le due directory sottostanti fuori dalla <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">document root</a> e di cambiare i nomi delle cartelle: %s</li>
    <li>Crea (se non già presenti) e rendi scrivibili queste directory: %s</li>
    <li>Attiva i cookie e JavaScript del tuo browser.</li>
</ol>
<h3>Note Speciali</h3>
<p>Alcune combinazioni specifiche di software di sistema potrebbero richiedere alcune configurazioni aggiuntive per funzionare
 con XOOPS. Se uno di questi argomenti si applica al tuo ambiente, consulta il
 <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">manuale di installazione di XOOPS</a> completo
 per maggiori informazioni.
</p>
<p>MySQL 8.0 non è supportato in tutte le versioni di PHP. Anche nelle versioni supportate, problemi con la
 libreria PHP <em>mysqlnd</em> potrebbero richiedere che il <em>default-authentication-plugin</em> del server MySQL
 sia impostato su <em>mysql_native_password</em> per funzionare correttamente.
</p>
<p>I sistemi con SELinux abilitato (come CentOS e RHEL) potrebbero richiedere modifiche al contesto di sicurezza
 per le directory di XOOPS in aggiunta ai normali permessi dei file per rendere le directory scrivibili.
 Consulta la documentazione del tuo sistema e/o l\'amministratore di sistema.
</p>
';

return $content;
