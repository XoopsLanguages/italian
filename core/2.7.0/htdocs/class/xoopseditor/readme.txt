xoopseditor fornisce un collettivo di editor per XOOPS

guida per l'utente:

1 controlla i file xoops_version.php in /xoopseditor/ per assicurarti che siano più recenti di quelli attuali

2 carica /xoopseditor/ su /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 configurare le preferenze ove applicabile
3.1 ./dhtmlext(all editors)/lingual/: crea il tuo file di lingua locale basato su english.php
3.3 ./dhtmlext(all editors)/editor_registry.php: imposta le configurazioni per l'editor: order - ordine di visualizzazione nel caso in cui venga utilizzata la selezione dell'editor, 0 per disabilitato; nohtml: funziona con la sintassi non html
3.3 ./FCKeditor/module/: copia i file nelle cartelle dei moduli nel caso in cui siano richiesti permessi di caricamento, archiviazione e opzioni di editor specifici del modulo
3.3.1 ./FCKeditor/module/fckeditor.config.js: per le opzioni dell'editor, di solito non è necessario modificarlo
3.3.2 ./FCKeditor/module/fckeditor.connector.php: per specificare la cartella per la navigazione dei file (e il caricamento dello spazio di archiviazione) => XOOPS/uploads/XOOPS_FCK_FOLDER/, è necessario creare manualmente la cartella
3.3.3 ./FCKeditor/module/fckeditor.upload.php: specifica il permesso di caricamento e lo spazio di archiviazione per il caricamento
3.4 XOOPS/uploads/fckeditor/: per creare la cartella se FCKeditor è abilitato, utilizzato per i caricamenti da cui non è specificata la cartella di caricamento
3.5 ./tinymce/tinymce/jscripts/: scarica i file della tua lingua locale da http://tinymce.moxiecode.com/language.php

4 controlla i nomi dei file: per i nomi dei file con distinzione tra maiuscole e minuscole, assicurati di avere i nomi dei file letteralmente corretti, ovvero "FCKeditor" non è identico a "fckeditor"

5 controlla /xoopseditor/sampleform.inc.php per la guida allo sviluppo
