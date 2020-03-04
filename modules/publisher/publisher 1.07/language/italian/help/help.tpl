<div id="help-template" class="outer">
    <{include file=$smarty.const._MI_PUBLISHER_HELP_HEADER}>

    <h4 class="odd">DESCRIZIONE</h4><br>

    <p class="even">Il modulo Publisher è una soluzione per la pubblicazione di contenuti per il tuo sito XOOPS<br> <br>
    </p>

  <h4 class="odd">INSTALLA/DISINSTALLA</h4>

    <p class="even">1) Non sono necessarie misure speciali, seguire la procedura di installazione standard: estrarre la cartella del modulo nella directory ../modules. Installa il modulo tramite Admin -&gt; Modulo di sistema -&gt; Moduli.        </p>
    <p class="even">Istruzioni dettagliate sull'installazione dei moduli sono disponibili nel <a target="_blank" href="https://xoops.gitbook.io/xoops-operations-guide/details">XOOPS Operations Manual</a></p>

    <p class="even"><strong>2) PDF in XOOPS 2.5.8 </strong><br> <br>
    Se si desidera utilizzare la funzione PDF in Publisher, sarà necessario copiare la libreria TCPDF nella cartella XOOPS: ..

    /class/libraries/vendor/<br> <br>

    a) creare le cartelle qui:  ../tecnickcom/tcpdf/<br> <br>

    potrebbe risultare qualcosa come :   ../class/libraries/vendor/tecnickcom/tcpdf/<br> <br>

    b) scarica la libreria TCPDF e posiziona il contenuto nella cartella sopra descritta. Hai tre scelte:<br> <br>

    i) scarica la versione semplificata di XOOPS da  <a target="_blank" href="http://sourceforge.net/projects/chgxoops/files/Frameworks/tcpdf_for_xoops/">SourceForge</a>,
        che è stata sviluppata da Cedric<br> <br>

    ii) scarica l'ultima versione completa da <a target="_blank" href="https://github.com/tecnickcom/TCPDF/releases">TCPDF on GitHub</a> <br> <br>

    iii) se avete dimestichezza con <a target="_blank" href="https://xoops.gitbook.io/xoops-operations-guide/details">Composer</a>,
        aggiungete al vostro "composer.js" il file locato in /class/libraries/:<br> <br>

    <strong>"tecnickcom/tcpdf":"6.*"</strong><br> <br>

    e quindi attivate il comando:<br> <br>

        <strong>composer update</strong><br> <br>

    Il vostro PDF ora dovrebbe essere attivo.
    </p>

<h4 class="odd">ISTRUZIONI PER L'UTILIZZO</h4>
    <p class="even">
    Questo modulo e le sue funzioni sono molto semplici<br> <br>
    Istruzioni dettagliate sulla configurazione dei diritti di accesso per i gruppi di utenti sono disponibili nel 
    <a target="_blank" href="https://xoops.gitbook.io/xoops-operations-guide/details">XOOPS Operations Manual</a>, e informazioni più dettagliate sullo stesso Publisher si trovano nel Tutorial di Publisher (vedi sotto)<br>
    </p>

<h4 class="odd">TUTORIAL</h4>

    <p class="even">
        Il tutorial è stato avviato, ma potremmo aver bisogno del tuo aiuto! Controlla lo stato del tutorial <a href="https://xoops.gitbook.io/publisher-tutorial/" target="_blank">qui </a>.
        <br><br>
        Per contribuire a questo Tutorial, <a href="https://github.com/XoopsDocs/publisher-tutorial/" target="_blank">create un nuovo ramo su GitHub</a>.
        <br>
        Questo documento descrive la nostra <a href="https://xoops.gitbook.io/xoops-documentation-process/details/" target="_blank">Procedura di documentazione</a> e ti aiuterà a capire come contribuire.<br><br>
        Esistono altri tutorial XOOPS, quindi dai un'occhiata alla nostra <a href="https://www.gitbook.com/@xoops/" target="_blank">Libreria Tutorial XOOPS  su GitBook</a>.
    </p>


<h4 class="odd">TRADUZIONI</h4>
    <p class="even">Le traduzioni sono su  <a href="https://www.transifex.com/xoops/" target="_blank">Transifex</a> e nella nostra <a href="https://github.com/XoopsLanguages/" target="_blank">Libreria linguaggi XOOPS su GitHub</a>.</p>

    <h4 class="odd">SUPPORTO</h4>
    <p class="even">Se hai domande su questo modulo e hai bisogno di aiuto, puoi visitare il nostro <a href="https://xoops.org/modules/newbb/viewforum.php?forum=28/" target="_blank">Forum di Supporto nel sito  XOOPS </a></p>

  <h4 class="odd">SVILUPPO</h4>
    <p class="even">Questo modulo è Open Source e vorremmo il tuo aiuto per renderlo migliore! È possibile creare un nuovo ramo di questo modulo su  <a href="https://github.com/XoopsModulesArchive/publisher" target="_blank">GitHub</a><br><br>
        Ma sta succedendo di più su GitHub:<br><br>
        - <a href="https://github.com/xoops" target="_blank">XOOPS Core</a> <br>
        - <a href="https://github.com/XoopsModules25x" target="_blank">XOOPS Modules</a><br>
        - <a href="https://github.com/XoopsThemes" target="_blank">XOOPS Themes</a><br><br>
    Vai a dare un'occhiata e <strong>CONSIDERATI COINVOLTO </strong></p>

</div>
