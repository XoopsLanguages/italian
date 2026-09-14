<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Secondo passaggio');
define('_US_2FA_PROMPT', 'Inserisci il codice della tua app di autenticazione');
define('_US_2FA_CODE', 'Codice di autenticazione');
define('_US_2FA_PROMPT_EMAIL', 'Abbiamo inviato un codice di sei cifre a %s. Inseriscilo qui sotto.');
define('_US_2FA_CODE_EMAIL', 'Codice ricevuto via e-mail');
define('_US_2FA_SEND', 'Invia un nuovo codice');
define('_US_2FA_SENT', 'Un nuovo codice è stato inviato a %s. È valido per dieci minuti.');
define('_US_2FA_SEND_WAIT', 'Un codice è stato inviato meno di un minuto fa. Controlla la posta in arrivo e lo spam prima di richiederne un altro.');
define('_US_2FA_SEND_FAILED', 'Il codice non può essere inviato in questo momento. Riprova tra poco, oppure usa un codice di recupero.');
define('_US_2FA_EMAIL_SUBJECT', '%s: il tuo codice di accesso');
define('_US_2FA_EMAIL_BODY', 'Il tuo codice di accesso per %s è:

%s

È valido per %d minuti e funziona una sola volta. Se non l\'hai richiesto tu, ignora questo messaggio e valuta di cambiare la password.');
define('_US_2FA_RECOVERY', 'Usa invece un codice di recupero');
define('_US_2FA_RECOVERY_HINT', 'Ogni codice di recupero funziona una sola volta. Il suo utilizzo ti invia un\'e-mail.');
define('_US_2FA_SUBMIT', 'Continua');
define('_US_2FA_STARTAGAIN', 'Questo accesso è scaduto o è stato interrotto. Ricomincia.');
define('_US_2FA_BACKTOLOGIN', 'Torna al modulo di accesso');
define('_US_2FA_BADCODE', 'Il codice non è stato accettato.');
define('_US_2FA_LOCKED', 'Troppi tentativi. Il secondo passaggio è bloccato per quindici minuti; un codice di recupero funziona comunque.');
define('_US_2FA_UNAVAILABLE', 'Il secondo passaggio non è disponibile in questo momento. Un codice di recupero funziona comunque, oppure contatta l\'amministratore del sito.');
define('_US_2FA_REQUIRED', 'Questo account ha l\'autenticazione a due fattori attiva. Accedi tramite la pagina di accesso del sito.');
define('_US_2FA_HTTP_LOGIN', 'Questa finestra non può completare un accesso a due fattori via HTTP perché la password verrebbe inviata senza crittografia. Usa invece l\'accesso del sito, oppure chiedi all\'amministratore di attivare HTTPS per il sito.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: secondo passaggio bloccato');
define('_US_2FA_LOCKED_MAIL_BODY', 'Sono stati inseriti cinque codici errati per il secondo passaggio del tuo account su %s da %s. Il secondo passaggio è bloccato per quindici minuti. Se non sei stato tu, cambia la password.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: è stato usato un codice di recupero');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Un codice di recupero è stato usato per accedere al tuo account su %s da %s. Quel codice non funziona più. Se non sei stato tu, cambia la password e reimposta i codici di recupero.');
