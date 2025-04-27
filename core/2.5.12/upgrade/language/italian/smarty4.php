<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'Migrazione a Smarty4 di XOOPS');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Risultati dello Scanner');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Esegui Scansione');
define('_XOOPS_SMARTY4_SCANNER_END', 'Esci dallo Scanner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regola');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Corrispondenza');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'File');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Conteggio Correzioni');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Richiesta revisione manuale');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Non Scrivibile');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opzioni di Riscansione');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Seleziona la casella "Sì" qui sotto e poi clicca sul pulsante Esegui Scansione per provare a correggere automaticamente eventuali problemi trovati.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Segna come Completato');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Directory dei Template (opzionale)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Estensione dei Template (opzionale)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.5.12 introduce un cambiamento significativo: Smarty 4</h3>

<p>Sfortunatamente, questo cambiamento potrebbe potenzialmente causare problemi ad alcuni temi più vecchi. Pertanto, prima di procedere con l'aggiornamento, assicurati di seguire questi passaggi:

<li>Esegui preflight.php per verificare la presenza di temi o template di moduli obsoleti.</li>
<li>Se vengono identificati problemi, consulta questo documento per comprendere le modifiche necessarie prima di procedere con l'aggiornamento.</li>
<li>Dopo aver apportato le modifiche richieste, esegui nuovamente preflight.php.</li>
<li>Se non ci sono più problemi, puoi iniziare il processo di aggiornamento.</li>
</p>
EOT,
);
