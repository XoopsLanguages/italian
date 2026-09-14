<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Autenticazione a due fattori');
define('_US_2FAM_PASSWORD', 'La tua password attuale');
define('_US_2FAM_ENABLE', 'Configura un\'app di autenticazione');
define('_US_2FAM_CONFIRM', 'Conferma app di autenticazione');
define('_US_2FAM_CHOOSE', 'Scegli come ricevere il secondo passaggio: un\'app di autenticazione o un codice via e-mail.');
define('_US_2FAM_ENABLE_EMAIL', 'Usa codici via e-mail');
define('_US_2FAM_EMAIL_HELP', 'Codici via e-mail: un codice di sei cifre viene inviato a %s ogni volta che accedi. Meno sicuro di un\'app di autenticazione, perché chiunque possa leggere la tua e-mail può superare questo passaggio.');
define('_US_2FAM_EMAIL_STEP', 'Abbiamo inviato un codice di sei cifre a %s. Inseriscilo qui sotto per confermare. È valido per dieci minuti.');
define('_US_2FAM_CONFIRM_EMAIL', 'Conferma codici via e-mail');
define('_US_2FAM_CODE_HELP_EMAIL', 'Il codice di sei cifre dall\'e-mail che ti abbiamo appena inviato.');
define('_US_2FAM_ENABLED_EMAIL', 'I codici via e-mail sono attivi. Per apportare una modifica, inserisci la password attuale e il codice ricevuto via e-mail, oppure un codice di recupero. Usa il pulsante qui sotto per richiedere un codice.');
define('_US_2FAM_SEND', 'Inviami un codice');
define('_US_2FAM_MANUAL', 'Chiave di configurazione manuale');
define('_US_2FAM_SCAN', 'Codice QR per la tua app di autenticazione');
define('_US_2FAM_STEP_APP', 'Serve un\'app di autenticazione: qualsiasi app o gestore di password che generi codici monouso basati sul tempo (TOTP) funziona, su telefono o computer. Se non ne hai ancora una, installa prima quella che preferisci (ad es. Google Authenticator, Microsoft Authenticator, Aegis o FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Nell\'app, aggiungi un account: scansiona questo codice QR, oppure scegli l\'inserimento manuale e digita la chiave di configurazione mostrata qui sotto.');
define('_US_2FAM_STEP_CODE', 'L\'app ora mostra un codice di sei cifre che cambia ogni 30 secondi. Digita il codice mostrato in questo momento nel campo sottostante e conferma.');
define('_US_2FAM_CODE_HELP', 'Il codice di sei cifre mostrato in questo momento dalla tua app di autenticazione.');
define('_US_2FAM_HTTP', 'Questa connessione usa HTTP semplice. La password, la sessione, la chiave di configurazione e i codici di recupero possono essere intercettati. Usa HTTPS quando possibile.');
define('_US_2FAM_CODES', 'Salva subito questi codici di recupero');
define('_US_2FAM_CODES_HELP', 'Ogni codice funziona una sola volta. Questi codici non verranno mostrati di nuovo. Conservali in un luogo sicuro, separato da questo account.');
define('_US_2FAM_DISABLE', 'Disattiva l\'autenticazione a due fattori');
define('_US_2FAM_REGENERATE', 'Sostituisci i codici di recupero');
define('_US_2FAM_ENABLED', 'È configurata un\'app di autenticazione. Inserisci la password attuale e un codice di autenticazione o di recupero per apportare una modifica.');
define('_US_2FAM_DISABLED', 'L\'autenticazione a due fattori è disattivata.');
define('_US_2FAM_PAUSED', 'Il sito ha messo in pausa le verifiche a due fattori. Il tuo fattore viene mantenuto e l\'opzione "ricordami" resta non disponibile per gli account configurati.');
define('_US_2FAM_UNAVAILABLE', 'La configurazione o la gestione dell\'autenticazione a due fattori non è disponibile. Contatta l\'amministratore del sito.');
define('_US_2FAM_STARTAGAIN', 'La configurazione è scaduta o l\'account è cambiato. Inserisci la password per ricominciare la configurazione.');
define('_US_2FAM_BADPASSWORD', 'La password attuale non è stata accettata.');
define('_US_2FAM_RESET', 'Reimposta l\'autenticazione a due fattori di questo utente');
define('_US_2FAM_STATUS_NONE', 'Non configurata');
define('_US_2FAM_STATUS_TOTP', 'App di autenticazione configurata');
define('_US_2FAM_STATUS_EMAIL', 'Codici via e-mail configurati');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Stato non disponibile');
define('_US_2FAM_RESET_HELP', 'Questo disattiva il secondo fattore dell\'utente, qualunque sia il metodo configurato, e revoca i suoi codici di recupero e i cookie "ricordami". Le sessioni già connesse restano attive. Inserisci la tua password di amministratore per confermare.');
define('_US_2FAM_RESET_DONE', 'L\'autenticazione a due fattori dell\'utente è stata reimpostata.');
define('_US_2FAM_BACK', 'Torna all\'account');
define('_US_2FAM_DONE', 'L\'autenticazione a due fattori è attiva.');
define('_US_2FAM_REPLACED', 'I precedenti codici di recupero sono stati revocati.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: autenticazione a due fattori modificata');
define('_US_2FAM_NOTICE_BODY', 'L\'autenticazione a due fattori o i codici di recupero del tuo account su %s sono stati modificati da %s. Se non sei stato tu, contatta l\'amministratore del sito.');
define('_US_2FAM_RESET_SUBJECT', '%s: un amministratore ha reimpostato la tua autenticazione a due fattori');
define('_US_2FAM_RESET_BODY', 'Un amministratore ha disattivato il tuo secondo fattore e revocato i relativi codici di recupero su %s da %s. Le sessioni già connesse restano attive. Accedi e configura di nuovo l\'autenticazione a due fattori. Contatta l\'amministratore del sito se questo era inaspettato.');
