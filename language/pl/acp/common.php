<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* @Polish locale 2015-02-02 21:45:45 Zespół Olympus.pl $
* @Polska wersja językowa phpbb 3.2.4 - 17.11.2018, Mateusz Dutko (vader) www.rnavspotters.pl
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administratorzy',
	'ACP_ADMIN_LOGS'			=> 'Dziennik administratorów',
	'ACP_ADMIN_ROLES'			=> 'Administratorzy',
	'ACP_ATTACHMENTS'			=> 'Załączniki',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Ustawienia załączników',
	'ACP_AUTH_SETTINGS'			=> 'Uwierzytelnianie',
	'ACP_AUTOMATION'			=> 'Automatyzacja',
	'ACP_AVATAR_SETTINGS'		=> 'Awatary',

	'ACP_BACKUP'				=> 'Kopia zapasowa',
	'ACP_BAN'					=> 'Blokowanie',
	'ACP_BAN_EMAILS'			=> 'Blokowanie adresów e-mail',
	'ACP_BAN_IPS'				=> 'Blokowanie adresów IP',
	'ACP_BAN_USERNAMES'			=> 'Blokowanie użytkowników',
	'ACP_BBCODES'				=> 'Znaczniki BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfiguracja witryny',
	'ACP_BOARD_FEATURES'		=> 'Funkcje witryny',
	'ACP_BOARD_MANAGEMENT'		=> 'Zarządzanie witryną',
	'ACP_BOARD_SETTINGS'		=> 'Ustawienia witryny',
	'ACP_BOTS'					=> 'Boty/Pająki',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Dostosowywanie',
	'ACP_CAT_DATABASE'			=> 'Baza danych',
	'ACP_CAT_DOT_MODS'			=> 'Rozszerzenia',
	'ACP_CAT_FORUMS'			=> 'Fora',
	'ACP_CAT_GENERAL'			=> 'Ogólne',
	'ACP_CAT_MAINTENANCE'		=> 'Konserwacja',
	'ACP_CAT_PERMISSIONS'		=> 'Uprawnienia',
	'ACP_CAT_POSTING'			=> 'Publikowanie',
	'ACP_CAT_STYLES'			=> 'Style',
	'ACP_CAT_SYSTEM'			=> 'System',
	'ACP_CAT_USERGROUP'			=> 'Użytkownicy i grupy',
	'ACP_CAT_USERS'				=> 'Użytkownicy',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikacja',
	'ACP_COOKIE_SETTINGS'		=> 'Ciasteczka',
	'ACP_CONTACT'				=> 'Strona kontaktowa',
	'ACP_CONTACT_SETTINGS'		=> 'Ustawienia strony kontaktowej',
	'ACP_CRITICAL_LOGS'			=> 'Dziennik błędów',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Dodatkowe pola profilu',

	'ACP_DATABASE'				=> 'Zarządzanie bazą danych',
	'ACP_DISALLOW'				=> 'Zabroń',
	'ACP_DISALLOW_USERNAMES'	=> 'Zabronione nazwy użytkownika',

	'ACP_EMAIL_SETTINGS'		=> 'Ustawienia e-maili',
	'ACP_EXTENSION_GROUPS'		=> 'Grupy rozszerzeń załączników',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Zarządzanie rozszerzeniami',
	'ACP_EXTENSIONS'			=> 'Zarządzanie rozszerzeniami',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Uprawnienia na forach',
	'ACP_FORUM_LOGS'				=> 'Dzienniki zdarzeń',
	'ACP_FORUM_MANAGEMENT'			=> 'Zarządzanie forami',
	'ACP_FORUM_MODERATORS'			=> 'Uprawnienia moderatorów',
	'ACP_FORUM_PERMISSIONS'			=> 'Uprawnienia forów',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopiuj uprawnienia forum',
	'ACP_FORUM_ROLES'				=> 'Fora',

	'ACP_GENERAL_CONFIGURATION'		=> 'Ustawienia ogólne',
	'ACP_GENERAL_TASKS'				=> 'Zadania ogólne',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderatorzy globalni',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Uprawnienia globalne',
	'ACP_GROUPS'					=> 'Grupy',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Uprawnienia grup na forach',
	'ACP_GROUPS_MANAGE'				=> 'Zarządzanie grupami',
	'ACP_GROUPS_MANAGEMENT'			=> 'Zarządzanie grupą',
	'ACP_GROUPS_PERMISSIONS'		=> 'Uprawnienia globalne grup',
	'ACP_GROUPS_POSITION'			=> 'Pozycjonowanie grup',
	
	'ACP_HELP_PHPBB'			=> 'Wsparcie phpBB',

	'ACP_ICONS'					=> 'Ikony tematu',
	'ACP_ICONS_SMILIES'			=> 'Ikony/emotikony',
	'ACP_INACTIVE_USERS'		=> 'Nieaktywni użytkownicy',
	'ACP_INDEX'					=> 'Indeks PA',

	'ACP_JABBER_SETTINGS'		=> 'Ustawienia Jabbera',

	'ACP_LANGUAGE'				=> 'Zarządzanie pakietami językowymi',
	'ACP_LANGUAGE_PACKS'		=> 'Pakiety językowe',
	'ACP_LOAD_SETTINGS'			=> 'Obciążenie serwera',
	'ACP_LOGGING'				=> 'Logowanie',

	'ACP_MAIN'					=> 'Indeks PA',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Zarządzanie załącznikami',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Tutaj można zobaczyć wykaz i usuwać pliki załączone do postów i prywatnych wiadomości.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Zarządzanie rozszerzeniami załączników',
	'ACP_MANAGE_FORUMS'			=> 'Zarządzanie forami',
	'ACP_MANAGE_RANKS'			=> 'Zarządzanie rangami',
	'ACP_MANAGE_REASONS'		=> 'Powody zgłaszania i odrzucania postów',
	'ACP_MANAGE_USERS'			=> 'Zarządzanie użytkownikami',
	'ACP_MASS_EMAIL'			=> 'Korespondencja masowa',
	'ACP_MESSAGES'				=> 'Wiadomości',
	'ACP_MESSAGE_SETTINGS'		=> 'Prywatne wiadomości',
	'ACP_MODULE_MANAGEMENT'		=> 'Zarządzanie modułami',
	'ACP_MOD_LOGS'				=> 'Dziennik moderatorów',
	'ACP_MOD_ROLES'				=> 'Moderatorzy',

	'ACP_NO_ITEMS'				=> 'Jeszcze nie ma żadnych elementów.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Osierocone załączniki',

	'ACP_PERMISSIONS'			=> 'Uprawnienia',
	'ACP_PERMISSION_MASKS'		=> 'Przegląd uprawnień',
	'ACP_PERMISSION_ROLES'		=> 'Zestawy uprawnień',
	'ACP_PERMISSION_TRACE'		=> 'Śledzenie uprawnień',
	'ACP_PHP_INFO'				=> 'Informacje o PHP',
	'ACP_POST_SETTINGS'			=> 'Tematy, posty',
	'ACP_PRUNE_FORUMS'			=> 'Czyszczenie forów',
	'ACP_PRUNE_USERS'			=> 'Usuwanie użytkowników',
	'ACP_PRUNING'				=> 'Czyszczenie',

	'ACP_QUICK_ACCESS'			=> 'Dostęp bezpośredni',

	'ACP_RANKS'					=> 'Rangi',
	'ACP_REASONS'				=> 'Powody zgłaszania i odrzucania postów',
	'ACP_REGISTER_SETTINGS'		=> 'Rejestracja użytkowników',

	'ACP_RESTORE'				=> 'Przywracanie',

	'ACP_FEED'					=> 'Zarządzanie kanałem',
	'ACP_FEED_SETTINGS'			=> 'Kanały informacyjne',

	'ACP_SEARCH'				=> 'Konfiguracja wyszukiwania',
	'ACP_SEARCH_INDEX'			=> 'Indeksowanie wyszukiwania',
	'ACP_SEARCH_SETTINGS'		=> 'Wyszukiwanie',

	'ACP_SECURITY_SETTINGS'		=> 'Zabezpieczenia',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfiguracja serwera',
	'ACP_SERVER_SETTINGS'		=> 'Serwer',
	'ACP_SIGNATURE_SETTINGS'	=> 'Podpisy',
	'ACP_SMILIES'				=> 'Emotikony',
	'ACP_STYLE_MANAGEMENT'		=> 'Zarządzanie stylami',
	'ACP_STYLES'				=> 'Style',
	'ACP_STYLES_CACHE'			=> 'Wyczyść bufor',
	'ACP_STYLES_INSTALL'		=> 'Instaluj style',

	'ACP_SUBMIT_CHANGES'		=> 'Wyślij zmiany',

	'ACP_TEMPLATES'				=> 'Szablony',
	'ACP_THEMES'				=> 'Motywy',

	'ACP_UPDATE'					=> 'Aktualizacja',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Uprawnienia użytkownika na forach',
	'ACP_USERS_LOGS'				=> 'Dziennik użytkownika',
	'ACP_USERS_PERMISSIONS'			=> 'Uprawnienia globalne użytkownika',
	'ACP_USER_ATTACH'				=> 'Załączniki',
	'ACP_USER_AVATAR'				=> 'Awatar',
	'ACP_USER_FEEDBACK'				=> 'Opinie',
	'ACP_USER_GROUPS'				=> 'Grupy',
	'ACP_USER_MANAGEMENT'			=> 'Zarządzanie użytkownikami',
	'ACP_USER_OVERVIEW'				=> 'Przegląd',
	'ACP_USER_PERM'					=> 'Uprawnienia',
	'ACP_USER_PREFS'				=> 'Ustawienia',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Ranga',
	'ACP_USER_ROLES'				=> 'Użytkownicy',
	'ACP_USER_SECURITY'				=> 'Bezpieczeństwo',
	'ACP_USER_SIG'					=> 'Podpis',
	'ACP_USER_WARNINGS'				=> 'Ostrzeżenia',

	'ACP_VC_SETTINGS'					=> 'Zabezpieczenie antyspamowe',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Podgląd potwierdzenia wizualnego',
	'ACP_VERSION_CHECK'					=> 'Sprawdź aktualizacje',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Administracyjne',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Moderacyjne forum',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Forum',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Moderacyjne globalne',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Użytkowników',

	'ACP_WORDS'					=> 'Cenzura słów',

	'ACTION'				=> 'Czynność',
	'ACTIONS'				=> 'Czynności',
	'ACTIVATE'				=> 'Aktywuj',
	'ADD'					=> 'Dodaj',
	'ADMIN'					=> 'Administracja',
	'ADMIN_INDEX'			=> 'Indeks PA',
	'ADMIN_PANEL'			=> 'Panel administracji',

	'ADM_LOGOUT'			=> 'Wyloguj&nbsp;z&nbsp;panelu',
	'ADM_LOGGED_OUT'		=> 'Wylogowano z panelu administracji',

	'BACK'					=> 'Wstecz',
	
	'CANNOT_CHANGE_FILE_GROUP'	=> 'Nie można zmienić pliku grupy',
	'CANNOT_CHANGE_FILE_PERMISSIONS'	=> 'Nie można zmienić uprawnień pliku',
	'CANNOT_COPY_FILES'		=> 'Nie można skopiować plików',
	'CANNOT_CREATE_SYMLINK'	=> 'Nie można utworzyć symlinku',
	'CANNOT_DELETE_FILES'	=> 'Nie można usunąć plików w systemie',
	'CANNOT_DUMP_FILE'		=> 'Nie można zrzucić pliku',
	'CANNOT_MIRROR_DIRECTORY'	=> 'Nie można skopiować folderu',
	'CANNOT_RENAME_FILE'	=> 'Nie można zmienić nazwy pliku w systemie',
	'CANNOT_TOUCH_FILES'	=> 'Nie można stwierdzić czy plik istnieje w systemie',

	'CONTAINER_EXCEPTION' => 'phpBB encountered an error building the container due to an installed extension. For this reason, all extensions have been temporarily disabled. Please try purging your forum cache. All extensions will automatically be re-enabled once the container error is resolved. If this error continues, please visit <a href="https://www.phpbb.com/support">phpBB.com</a> for support.',
	'EXCEPTION' => 'Wyjątek',

	'COLOUR_SWATCH'			=> 'Wybierz kolor',
	'CONFIG_UPDATED'		=> 'Konfiguracja została zmieniona.',
	'CRON_LOCK_ERROR'		=> 'Nie udało się uzyskać blokady.',
	'CRON_NO_SUCH_TASK'		=> 'Nie można znaleźć zadania „%s”.',
	'CRON_NO_TASK'			=> 'Nie ma potrzeby uruchamiania zadań teraz.',
	'CRON_NO_TASKS'			=> 'Nie znaleziono zadań.',
	'CURRENT_VERSION'		=> 'Zainstalowana wersja',

	'DEACTIVATE'				=> 'Dezaktywuj',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Podana ścieżka „%s” nie istnieje.',
	'DIRECTORY_NOT_DIR'			=> 'Podana ścieżka „%s” nie jest ścieżką do katalogu.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Element podany w ścieżce „%s” ma atrybut „tylko do odczytu”.',
	'DISABLE'					=> 'Zablokuj',
	'DOWNLOAD'					=> 'Pobierz',
	'DOWNLOAD_AS'				=> 'Pobierz jako',
	'DOWNLOAD_STORE'			=> 'Pobierz lub zapisz plik',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Możesz pobrać plik i zapisać go w katalogu <samp>store/</samp>.',
	'DOWNLOADS'					=> 'Pobrania',

	'EDIT'					=> 'Zmień',
	'ENABLE'				=> 'Odblokuj',
	'EXPORT_DOWNLOAD'		=> 'Pobierz',
	'EXPORT_STORE'			=> 'Zapisz',

	'GENERAL_OPTIONS'		=> 'Opcje',
	'GENERAL_SETTINGS'		=> 'Ustawienia ogólne',
	'GLOBAL_MASK'			=> 'Przegląd uprawnień globalnych',

	'INSTALL'				=> 'Instaluj',
	'IP'					=> 'Adres IP',
	'IP_HOSTNAME'			=> 'Adresy IP lub nazwy serwerów',
	
	'LATEST_VERSION'		=> 'Najnowsza wersja',
	'LOAD_NOTIFICATIONS'			=> 'Wyświetlaj powiadomienia',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Wyświetla wykaz powiadomień na każdej stronie – zazwyczaj w nagłówku.',
	'LOGGED_IN_AS'			=> 'Zalogowany użytkownik:',
	'LOGIN_ADMIN'			=> 'Aby administrować witryną, musisz być autoryzowanym użytkownikiem.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Aby administrować witryną, musisz dokonać autoryzacji.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Autoryzacja przebiegła prawidłowo. Za chwilę nastąpi przekierowanie do panelu administracji.',
	'LOOK_UP_FORUM'			=> 'Wybierz forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Tutaj można wybrać kilka forów i zarządzać uprawnieniami na nich.',

	'MANAGE'				=> 'Zarządzaj',
	'MENU_TOGGLE'			=> 'Wyświetl/ukryj boczne menu',
	'MORE'					=> 'Więcej',		// Not used at the moment
	'MORE_INFORMATION'		=> 'Więcej informacji »',
	'MOVE_DOWN'				=> 'W dół',
	'MOVE_UP'				=> 'W górę',

	'NOTIFY'				=> 'Powiadomienie',
	'NO_ADMIN'				=> 'Nie masz uprawnień do administrowania tą witryną.',
	'NO_EMAILS_DEFINED'		=> 'Nie znaleziono ważnego adresu e-mail.',
	'NO_FILES_TO_DELETE'	=> 'Wybrane do usunięcia załączniki nie istnieją.',
	'NO_PASSWORD_SUPPLIED'	=> 'Żeby uzyskać dostęp do panelu administracji, musisz podać swoje hasło.',

	'OFF'					=> 'wyłączony',
	'ON'					=> 'włączony',

	'PARSE_BBCODE'						=> 'BBCode',
	'PARSE_SMILIES'						=> 'Emotikony',
	'PARSE_URLS'						=> 'Odnośniki',
	'PERMISSIONS_TRANSFERRED'			=> 'Uprawnienia skopiowane',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Obecnie masz takie same uprawnienia, jak %1$s. Możesz przeglądać witrynę z uprawnieniami tego użytkownika, ale nie masz dostępu do panelu administracji, ponieważ uprawnienia administratora nie zostały skopiowane. Możesz <a href="%2$s"><strong>przywrócić swoje uprawnienia</strong></a> w każdej chwili.',
	'PROCEED_TO_ACP'					=> '%sPrzejdź do panelu administracji%s',
	
	'RELEASE_ANNOUNCEMENT'		=> 'Ogłoszenie',
	'REMIND'							=> 'Przypomnij',
	'REPARSE_LOCK_ERROR'				=> 'Reparsowanie jest aktualnie wykonywane przez inny proces.',
	'RESYNC'							=> 'Synchronizuj',

	'RUNNING_TASK'			=> 'Uruchamianie zadania: %s.',
	'SELECT_ANONYMOUS'		=> 'Użytkownik anonimowy (gość)',
	'SELECT_OPTION'			=> 'Wybierz',

	'SETTING_TOO_LOW'		=> 'Wprowadzona wartość dla „%1$s” jest za mała. Minimalna dopuszczalna wartość to %2$d.',
	'SETTING_TOO_BIG'		=> 'Wprowadzona wartość dla „%1$s” jest za duża. Maksymalna dopuszczalna wartość to %2$d.',
	'SETTING_TOO_LONG'		=> 'Wprowadzona wartość dla „%1$s” jest za duża. Maksymalna dopuszczalna długość to %2$d.',
	'SETTING_TOO_SHORT'		=> 'Wprowadzona wartość dla „%1$s” jest za mała. Minimalna dopuszczalna długość to %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Wyświetl wszystkie operacje',

	'TASKS_NOT_READY'			=> 'Zadania niegotowe:',
	'TASKS_READY'			=> 'Zadania gotowe:',
	'TOTAL_SIZE'			=> 'Rozmiar całkowity',

	'UCP'					=> 'Panel zarządzania kontem',
	'USERNAMES_EXPLAIN'		=> 'Każdą nazwę użytkownika wpisz w osobnym wierszu.',
	'USER_CONTROL_PANEL'	=> 'Panel zarządzania kontem',
	
	'UPDATE_NEEDED'			=> 'Forum nie jest aktualne.',
	'UPDATE_NOT_NEEDED'		=> 'Forum jest aktualne.',
	'UPDATES_AVAILABLE'		=> 'Dostępne są aktualizacje:',

	'WARNING'				=> 'Ostrzeżenie',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ta strona zawiera informacje o PHP zainstalowanym na tym serwerze. Zawiera szczegóły załadowanych modułów, dostępne zmienne i domyślne ustawienia. Informacje te mogą być przydatne przy diagnozowaniu problemów. Należy pamiętać, że część firm hostingowych z powodów bezpieczeństwa limituje wyświetlane tutaj informacje. Nie należy podawać żadnych szczegółów wymienionych na tej stronie, chyba że prośba będzie pochodziła od <a href="https://www.phpbb.com/about/team/">zespołu pomocy phpBB.com</a>, gdy będą potrzebne informacje w celu rozwiązania zgłaszanych problemów.',

	'NO_PHPINFO_AVAILABLE'	=> 'Nie można ustalić informacji o twojej konfiguracji PHP. Z powodów bezpieczeństwa funkcja phpinfo() została wyłączona.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ta lista zawiera wszystkie czynności wykonane przez administratorów witryny. Można ją uporządkować wg nazwy użytkownika, daty, adresu IP lub wykonanej czynności. Użytkownik posiadający odpowiednie uprawnienia może wyczyścić poszczególne operacje lub całą listę.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Lista zawiera wszystkie czynności wykonane samoistnie przez witrynę. Zapisy te mogą być pomocne przy rozwiązywaniu problemów, np. niedoręczania e-maili. Można ją uporządkować wg nazwy użytkownika, daty, adresu IP lub wykonanej czynności. Użytkownik posiadający odpowiednie uprawnienia może wyczyścić poszczególne operacje lub całą listę.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ta lista zawiera wszystkie czynności wykonane przez moderatorów na forach, w tematach, postach, a także czynności wykonane na użytkownikach – łącznie z blokowaniem. Można ją uporządkować wg nazwy użytkownika, daty, adresu IP lub wykonanej czynności. Użytkownik posiadający odpowiednie uprawnienia może wyczyścić poszczególne operacje lub całą listę.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Ta lista zawiera wszystkie czynności wykonane przez użytkowników lub na użytkownikach (zgłoszenia, ostrzeżenia, uwagi o użytkownikach).',
	'ALL_ENTRIES'				=> 'Wszystkie wpisy',

	'DISPLAY_LOG'	=> 'Wyświetl wpisy z',

	'NO_ENTRIES'	=> 'Brak wpisów dla tego okresu.',

	'SORT_IP'		=> 'Adres IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Czynność',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Dziękujemy za wybranie phpBB3. Na tej stronie można szybko przejrzeć wszystkie statystyki witryny. Odnośniki po lewej stronie prowadzą do stron z poziomu, których można kontrolować wszystkie funkcje witryny. Na każdej stronie znajduje się instrukcja opisująca sposób, w jaki można posługiwać się istniejącymi tam narzędziami.',
	'ADMIN_LOG'					=> 'Działania administratorów',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Lista pięciu ostatnich czynności wykonanych przez administratorów. Pełny dziennik znajduje się w sekcji „Konserwacja”. Można do niego szybko przejść, klikając odnośnik „Dziennik administratorów”.',
	'AVATAR_DIR_SIZE'			=> 'Rozmiar katalogu awatarów',

	'BOARD_STARTED'		=> 'Uruchomienie witryny',
	'BOARD_VERSION'		=> 'Wersja witryny',

	'DATABASE_SERVER_INFO'	=> 'Typ bazy danych',
	'DATABASE_SIZE'			=> 'Rozmiar bazy danych',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Funkcja przeładowania jest nieprawidłowo skonfigurowana',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> 'Funkcję <var>mbstring.func_overload</var> należy ustawić na 0 lub 4. Aktualne wartości można sprawdzić na stronie <samp>informacji o PHP</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Filtr jawnego kodowania znaków jest nieprawidłowo skonfigurowany',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'Filtr <var>mbstring.encoding_translation</var> należy ustawić na 0. Aktualne wartości można sprawdzić na stronie <samp>informacji o PHP</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'Funkcja konwersji znaków danych wejściowych (HTTP input) jest nieprawidłowo skonfigurowana',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> 'Funkcję <var>mbstring.http_input</var> należy ustawić na <samp>pass</samp>. Aktualne wartości można sprawdzić na stronie <samp>informacji o PHP</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'Funkcja konwersji znaków danych wyjściowych (HTTP output) jest nieprawidłowo skonfigurowana',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'Funkcję <var>mbstring.http_output</var> należy ustawić na <samp>pass</samp>. Aktualne wartości można sprawdzić na stronie <samp>informacji o PHP</samp>.',

	'FILES_PER_DAY'		=> 'Średnia liczba załączników dziennie',
	'FORUM_STATS'		=> 'Statystyki witryny',

	'GZIP_COMPRESSION'	=> 'Kompresja GZip',

	'NO_SEARCH_INDEX'	=> 'Wybrane wyszukiwanie nie ma indeksu wyszukiwania.<br />W sekcji %2$sindeksu wyszukiwania%3$s utwórz indeks dla „%1$s”.',
	'NOT_AVAILABLE'		=> 'Niedostępne',
	'NUMBER_FILES'		=> 'Liczba załączników',
	'NUMBER_POSTS'		=> 'Liczba postów',
	'NUMBER_TOPICS'		=> 'Liczba tematów',
	'NUMBER_USERS'		=> 'Liczba użytkowników',
	'NUMBER_ORPHAN'		=> 'Liczba osieroconych załączników',

	'PHP_VERSION'		=> 'Wersja PHP',
	'PHP_VERSION_OLD'	=> 'Wersja PHP na tym serwerze (%1$s) nie będzie wspierana przez kolejne wersje phpBB. Minimalna wymagana wersja PHP to %2$s. %3$sSzczegóły%4$s',

	'POSTS_PER_DAY'		=> 'Średnia liczba postów dziennie',

	'PURGE_CACHE'			=> 'Wyczyść bufor',
	'PURGE_CACHE_CONFIRM'	=> 'Czy na pewno chcesz wyczyścić bufor?',
	'PURGE_CACHE_EXPLAIN'	=> 'Zostaną usunięte wszystkie zbuforowane elementy, w tym pliki szablonów i zapytania SQL.',
	'PURGE_CACHE_SUCCESS'	=> 'Bufor został wyczyszczony.',

	'PURGE_SESSIONS'			=> 'Wyczyść wszystkie sesje',
	'PURGE_SESSIONS_CONFIRM'	=> 'Czy na pewno chcesz wyczyścić wszystkie sesje? Spowoduje to wylogowanie wszystkich użytkowników.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Użycie tej funkcji spowoduje wylogowanie wszystkich użytkowników poprzez skrócenie tabeli sesji.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Sesje zostały wyczyszczone.',

	'RESET_DATE'					=> 'Resetuj datę uruchomienia witryny',
	'RESET_DATE_CONFIRM'			=> 'Czy na pewno chcesz zresetować datę uruchomienia witryny?',
	'RESET_DATE_SUCCESS'				=> 'Data uruchomienia witryny została zresetowana',
	'RESET_ONLINE'					=> 'Resetuj rekord liczby użytkowników online',
	'RESET_ONLINE_CONFIRM'			=> 'Czy na pewno chcesz zresetować rekord liczby użytkowników online?',
	'RESET_ONLINE_SUCCESS'				=> 'Rekord liczby użytkowników online został zresetowany',
	'RESYNC_POSTCOUNTS'				=> 'Synchronizuj liczniki postów',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Zostaną wzięte pod uwagę tylko istniejące posty. Usunięte posty nie będą liczone.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Czy na pewno chcesz ponownie zsynchronizować liczniki postów?',
	'RESYNC_POSTCOUNTS_SUCCESS'		=> 'Liczniki postów zostały ponownie zsynchronizowane',
	'RESYNC_POST_MARKING'			=> 'Synchronizuj oznaczone tematy',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Czy na pewno chcesz ponownie zsynchronizować oznaczone tematy?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Najpierw ze wszystkich tematów zostaną usunięte znaczniki, a następnie zostaną oznaczone poprawnie te tematy, w których odnotowano aktywność w ciągu ostatnich sześciu miesięcy.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Tematy zostały ponownie zsynchronizowane',
	'RESYNC_STATS'					=> 'Synchronizuj statystyki',
	'RESYNC_STATS_CONFIRM'			=> 'Czy na pewno chcesz ponownie zsynchronizować statystyki?',
	'RESYNC_STATS_EXPLAIN'			=> 'Zostaną przeliczone liczby postów, tematów, użytkowników i plików.',
	'RESYNC_STATS_SUCCESS'			=> 'Statystyki zostały ponownie zsynchronizowane',
	'RUN'							=> 'Uruchom',

	'STATISTIC'					=> 'Statystyki',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Synchronizacja i resetowanie statystyk',

	'TIMEZONE_INVALID'	=> 'Wybrana strefa czasowa jest nieprawidłowa.',
	'TIMEZONE_SELECTED'	=> '(aktualnie wybrana)',
	'TOPICS_PER_DAY'	=> 'Średnia liczba tematów dziennie',

	'UPLOAD_DIR_SIZE'	=> 'Łączny rozmiar załączników',
	'USERS_PER_DAY'		=> 'Średnia liczba rejestracji dziennie',

	'VALUE'							=> 'Wartość',
	'VERSIONCHECK_FAIL'				=> 'Nie udało się uzyskać informacji o ostatnim wydaniu.',
	'VERSIONCHECK_FORCE_UPDATE'		=> 'Sprawdź wersję',
	'VERSION_CHECK'					=> 'Sprawdź wersję',
	'VERSION_CHECK_EXPLAIN'			=> 'Sprawdź czy posiadasz aktualną wersję skryptu phpBB.',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'Informacja o ostatnim wydaniu zawiera błędny wpis.',
	'VERSIONCHECK_INVALID_URL'		=> 'Informacja o ostatnim wydaniu zawieraj błędny adres URL.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'Informacja o ostatnim wydaniu zawieraj błędną wersję.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Twoja wersja skryptu phpBB jest nieaktualna.<br />Kliknij poniższy link, aby dowiedzieć się więcej o najnowszej wersji phpBB oraz jak przeprowadzić aktualizację.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Twoja wersja skryptu phpBB jest nieaktualna.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Posiadasz najnowszą wersję skryptu phpBB. Nie trzeba jej aktualizować.',
	'VIEW_ADMIN_LOG'				=> 'Dziennik administratorów',
	'VIEW_INACTIVE_USERS'			=> 'Lista nieaktywnych użytkowników',

	'WELCOME_PHPBB'			=> 'Witamy w phpBB',
	'WRITABLE_CONFIG'		=> 'Plik konfiguracyjny (config.php) ma obecnie atrybut „do zapisu”. Zalecamy zmianę tego atrybutu na wartość 640 lub przynajmniej 644 (zobacz <a href="http://pl.wikipedia.org/wiki/Chmod" rel="external">chmod</a> i ustaw 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Nieaktywny od',
	'INACTIVE_REASON'				=> 'Powód',
	'INACTIVE_REASON_MANUAL'		=> 'Konto dezaktywowane przez administratora',
	'INACTIVE_REASON_PROFILE'		=> 'Zmieniono szczegóły konta',
	'INACTIVE_REASON_REGISTER'		=> 'Nowe konto',
	'INACTIVE_REASON_REMIND'		=> 'Wymuszono ponowną aktywację',
	'INACTIVE_REASON_UNKNOWN'		=> 'Nieznany',
	'INACTIVE_USERS'				=> 'Nieaktywni użytkownicy',
	'INACTIVE_USERS_EXPLAIN'		=> 'Poniżej znajduje się lista zarejestrowanych użytkowników, którzy nie dokonali aktywacji konta. Można ich aktywować, usunąć lub przypomnieć im o aktywacji, wysyłając e-mail.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Lista dziesięciu ostatnio zarejestrowanych użytkowników, którzy nie dokonali aktywacji konta. Konta są nieaktywne dlatego, że aktywacja kont została włączona w ustawieniach rejestracji użytkowników, a te konta nie zostały jeszcze aktywowane lub dlatego, że konta te zostały dezaktywowane. Pełna lista znajduje się w sekcji „Użytkownicy i grupy”. Można do niej szybko przejść, klikając odnośnik „Lista nieaktywnych użytkowników”.',

	'NO_INACTIVE_USERS'	=> 'Nie ma nieaktywnych użytkowników',

	'SORT_INACTIVE'		=> 'Nieaktywny od',
	'SORT_LAST_VISIT'	=> 'Ostatnia wizyta',
	'SORT_REASON'		=> 'Powód',
	'SORT_REG_DATE'		=> 'Data rejestracji',
	'SORT_LAST_REMINDER'=> 'Ostatnie przypomnienie',
	'SORT_REMINDER'		=> 'Przypomnienia wysłane',

	'USER_IS_INACTIVE'		=> 'Użytkownik jest nieaktywny',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Wyślij informacje o swoim serwerze i konfiguracji witryny do phpBB w celu analiz statystycznych. Wszystkie informacje mogące zidentyfikować ciebie i twoją witrynę zostaną usunięte. Wszystkie dane są całkowicie <strong>anonimowe</strong>. Będą pomocne nam w podjęciu decyzji o kierunku rozwoju phpBB. Statystyki są dostępne publicznie. Udostępniamy je również programistom projektu PHP – języka, na którego bazie oparte jest phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Używając poniższego przycisku, możesz zobaczyć podgląd wszystkich wysyłanych danych.',
	'DONT_SEND_STATISTICS'		=> 'Jeśli nie chcesz wysyłać danych statystycznych do phpBB, wróć do panelu administracji.',
	'GO_ACP_MAIN'				=> 'Przejdź do strony startowej panelu administracji',
	'HIDE_STATISTICS'			=> 'Ukryj szczegóły',
	'SEND_STATISTICS'			=> 'Informacje statystyczne',
	'SEND_STATISTICS_LONG'		=> 'Wyślij informacje statystyczne',
	'SHOW_STATISTICS'			=> 'Wyświetl szczegóły',
	'THANKS_SEND_STATISTICS'	=> 'Dziękujemy za wysłanie informacji.',
	'FAIL_SEND_STATISTICS'		=> 'Nie udało si� wysłać informacji.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Dodano lub zmieniono użytkownikowi uprawnienia użytkownika</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Dodano lub zmieniono grupie uprawnienia użytkownika</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Dodano lub zmieniono użytkownikowi uprawnienia moderatora globalnego</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Dodano lub zmieniono grupie uprawnienia moderatora globalnego</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Dodano lub zmieniono użytkownikowi uprawnienia administratora</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Dodano lub zmieniono grupie uprawnienia administratora</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Dodano lub zmieniono administratorów</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Dodano lub zmieniono globalnych moderatorów</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Dodano lub zmieniono użytkownikowi uprawnienia dostępu do forów</strong> z %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Dodano lub zmieniono użytkownikowi uprawnienia moderatora forum</strong> z %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Dodano lub zmieniono grupie uprawnienia dostępu do forum</strong> z %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Dodano lub zmieniono grupie uprawnienia moderatora forum</strong> z %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Dodano lub zmieniono moderatorów</strong> z %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Dodano lub zmieniono uprawnienia dostępu do forum</strong> z %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Usunięto administratorów</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Usunięto moderatorów globalnych</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Usunięto moderatorów</strong> z %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Usunięto użytkownikowi lub grupie uprawnienia dostępu do forum</strong> z %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Skopiowano uprawnienia od użytkownika</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Przywrócono własne uprawnienia po używaniu uprawnień</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Nieudana próba logowania do panelu administracji</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Zalogowano do panelu administracji</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Usunięto załączniki użytkownika</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Dodano lub zmieniono rozszerzenie załącznika</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Usunięto rozszerzenie załącznika</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Zaktualizowano rozszerzenie załącznika</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Dodano grupę rozszerzeń</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Edytowano grupę rozszerzeń</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Usunięto grupę rozszerzeń</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Przypisano osierocony plik do posta</strong><br />» ID %1$d – %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Usunięto osierocone pliki</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Wykluczono użytkownika z blokowania</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Wykluczono adres IP z blokowania</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_BAN_EXCLUDE_EMAIL'	=> '<strong>Wykluczono adres e-mail z blokowania</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_BAN_USER'			=> '<strong>Zablokowano użytkownika</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_BAN_IP'			=> '<strong>Zablokowano adres IP</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_BAN_EMAIL'			=> '<strong>Zablokowano adres e-mail</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_UNBAN_USER'		=> '<strong>Odblokowano użytkownika</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Odblokowano adres IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Odblokowano adres e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Dodano nowy znacznik BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Edytowano BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Usunięto znacznik BBCode</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Wystąpił błąd podczas konfiguracji znacznika BBCode</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'		=> '<strong>Dodano nowego bota</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Usunięto bota</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Zaktualizowano istniejącego bota</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Wyczyszczono dziennik administratorów</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Wyczyszczono dziennik błędów</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Wyczyszczono dziennik moderatorów</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Wyczyszczono dziennik użytkownika</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Wyczyszczono dzienniki użytkownika</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Zmieniono ustawienia załączników</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Zmieniono ustawienia uwierzytelniania</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Zmieniono ustawienia awatarów</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Zmieniono ustawienia ciasteczek</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Zmieniono ustawienia e-maili</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Zmieniono funkcje witryny</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Zmieniono ustawienia obciążenia systemu</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Zmieniono ustawienia prywatnych wiadomości</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Zmieniono ustawienia postów</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Zmieniono ustawienia rejestracji użytkowników</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Zmieniono ustawienia kanałów ogólnych</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Zmieniono ustawienia wyszukiwania</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Zmieniono ustawienia bezpieczeństwa</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Zmieniono ustawienia serwera</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Zmieniono ustawienia witryny</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Zmieniono ustawienia podpisu</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Zmieniono ustawienia potwierdzenia wizualnego</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Zaakceptowano temat</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Użytkownik przesunął temat w górę</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Usunięto post „%1$s” autorstwa „%2$s” z następującego powodu</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Usunięto informacje o przeniesionych tematach</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Usunięto temat „%1$s” autorstwa „%2$s” z następującego powodu</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Skopiowano temat</strong><br />» z %s',
	'LOG_LOCK'					=> '<strong>Zamknięto temat</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Zamknięto post</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Połączono posty</strong><br />» w temat %s',
	'LOG_MOVE'					=> '<strong>Przeniesiono temat</strong><br />» z %1$s do %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Przeniesiono temat</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Zamknięto zgłoszenie PW</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Usunięto zgłoszenie PW</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Zaakceptowano post</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Odrzucono post „%1$s” autorstwa „%3$s” z następującego powodu</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Edytowano post „%1$s” autorstwa „%2$s” z następującego powodu</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Post został przywrócony</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Zamknięto zgłoszenie</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Usunięto zgłoszenie</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Przywrócono temat „%1$s” autorstwa</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Ukryto post „%1$s” autorstwa „%2$s” z następującego powodu</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Ukryto temat „%1$s” autorstwa „%2$s” z następującego powodu</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Przeniesiono wydzielone posty</strong><br />» do %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Przeniesiono wydzielone posty</strong><br />» z %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Zaakceptowano temat</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Przywrócono temat</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Odrzucono temat „%1$s” autorstwa „%2$s” z następującego powodu</strong><br />» %3$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Wykonano ponowną synchronizację liczników tematów</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Zmieniono typ tematu</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Otwarto temat</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Otwarto post</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Dodano zabronioną nazwę użytkownika</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Usunięto zabronioną nazwę użytkownika</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Wykonano kopię zapasową bazy danych</strong>',
	'LOG_DB_DELETE'			=> '<strong>Usunięto kopię zapasową bazy danych</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Przywrócono dane bazy z kopii zapasowej</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Wykluczono adres IP/nazwę serwera z listy pobierania</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Dodano adres IP/nazwę serwera do listy pobierania</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Usunięto adres IP/nazwę serwera z listy pobierania</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Błąd Jabbera</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Błąd e-maila</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>Błąd CAPTCHA</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Utworzono nowe forum</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Skopiowano uprawnienia forum</strong> z %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Usunięto forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Usunięto forum wraz z subforami</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Usunięto forum i przeniesiono subfora</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Usunięto forum i przeniesiono posty</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Usunięto forum wraz z subforami. Posty przeniesiono</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Usunięto forum. Subfora przeniesiono</strong> do %2$s, <strong>a posty</strong> do %1$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Usunięto forum wraz z postami</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Usunięto forum wraz z subforami i postami</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Usunięto forum wraz z postami. Subfora przeniesiono</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Edytowano dane forum</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Przeniesiono forum</strong> %1$s <strong>poniżej</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Przeniesiono forum</strong> %1$s <strong>ponad</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Wykonano ponowną synchronizację forum</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Wystąpił błąd ogólny</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Utworzono nową grupę użytkowników</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Określono grupę „%1$s” jako domyślną dla członków</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Usunięto grupę</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Zdymisjonowano liderów w grupie</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Promowano na lidera w grupie</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Usunięto z grupy</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Zaktualizowano szczegóły grupy</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Dodano nowych liderów do grupy</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Przyjęto nowych członków do grupy</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Przyjęto do grupy</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Użytkownicy poprosili o przyłączenie do grupy „%1$s” i potrzebują akceptacji</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Wystąpił błąd podczas tworzenia obrazka</strong><br />» Błąd w %1$s w wierszu %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Uaktywniono nieaktywnych użytkowników</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Usunięto nieaktywnych użytkowników</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Wysłano przypomnienie o aktywacji do nieaktywnych użytkowników</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Wykonano konwersję z %1$s do phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Zainstalowano phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sprawdzenie adresu IP sesji/przeglądarki/X_FORWARDED_FOR się nie powiodło</strong><br />»Adres IP użytkownika „<em>%1$s</em>” został porównany z adresem IP sesji – „<em>%2$s</em>”, identyfikator przeglądarki użytkownika „<em>%3$s</em>” został porównany z identyfikatorem przeglądarki sesji – „<em>%4$s</em>” i identyfikator użytkownika X_FORWARDED_FOR „<em>%5$s</em>” został porównany z identyfikatorem sesji X_FORWARDED_FOR „<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Zmieniono konto Jabbera</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Zmieniono hasło Jabbera</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Zarejestrowano konto Jabbera</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Zmieniono ustawienia Jabbera</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Usunięto pakiet językowy</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Zainstalowano pakiet językowy</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Zaktualizowano szczegóły pakietu językowego</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Zamieniono plik językowy</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Wysłano plik językowy i zapisano go w katalogu</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Wysłano masową korespondencję</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Zmieniono autora posta w temacie „%1$s”</strong><br />» z %2$s na %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Wyłączono moduł</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Włączono moduł</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Przesunięto moduł w dół</strong><br />» %1$s poniżej %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Przesunięto moduł w górę</strong><br />» %1$s powyżej %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Usunięto moduł</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Dodano moduł</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Zmieniano moduł</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Dodano zestaw uprawnień administratora</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Edytowano zestaw uprawnień administratora</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Usunięto zestaw uprawnień administratora</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Dodano zestaw uprawnień dostępu do forów</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Edytowano zestaw uprawnień dostępu do forów</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Usunięto zestaw uprawnień dostępu do forów</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Dodano zestaw uprawnień moderatora</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Edytowano zestaw uprawnień moderatora</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Usunięto zestaw uprawnień moderatora</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Dodano zestaw uprawnień użytkownika</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Edytowano zestaw uprawnień użytkownika</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Usunięto zestaw uprawnień użytkownika</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Nie można otworzyć %1$s do uporządkowania – sprawdź uprawnienia.</strong><br />Wyjątek: %2$s<br />Ścieżka: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Uaktywniono pole profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Dodano pole profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Dezaktywowano pole profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Edytowano pole profilu</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Usunięto pole profilu</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Wyczyszczono fora</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Automatycznie wyczyszczono fora</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Automatycznie wyczyszczono pozostałości po przeniesionych tematach</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Dezaktywowano użytkowników</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Usunięto użytkowników i ich posty</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Usunięto użytkowników, pozostawiając ich posty</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Wyczyszczono bufor</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Wyczyszczono sesje</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Dodano nową rangę</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Usunięto rangę</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Zaktualizowano rangę</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Dodano powód zgłoszenia/odrzucania</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Usunięto powód zgłoszenia/odrzucania</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Zaktualizowano powód zgłoszenia/odrzucania</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Sprawdzenie odsyłacza się nie powiodło</strong><br />»Odsyłacz to „<em>%1$s</em>”. Żądanie zostało odrzucone i sesja została zakończona.',
	'LOG_RESET_DATE'			=> '<strong>Zresetowano datę uruchomienia witryny</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Zresetowano największą liczbę użytkowników online</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Zsynchronizowano ponownie plik statystyk</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Wykonano ponowną synchronizację liczników postów</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Wykonano ponowną synchronizację oznaczonych tematów</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Wykonano ponowną synchronizację tematów, postów i statystyk użytkownika</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Utworzono indeks wyszukiwania dla</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Usunięto indeks wyszukiwania dla</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Błąd Sphinx</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Zainstalowano nowy styl</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Usunięto styl</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Edytowano detale stylu</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Wyeksportowano styl</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Dodano nowy zestaw szablonów do bazy danych</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Dodano nowy zestaw szablonów do katalogu witryny</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Usunięto zbuforowaną wersję plików szablonu w zestawie szablonów <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Usunięto zestaw szablonów</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Edytowano detale zestawu szablonów <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Edytowano detale zestawu szablonów</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Wyeksportowano zestaw szablonów</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Odświeżono zestaw szablonów</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Dodano nowy motyw do bazy danych</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Dodano nowy motyw do katalogu witryny</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Usunięto motyw</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Edytowano detale motywu</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Edytowano detale motywu <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Edytowano detale motywu <em>%1$s</em></strong><br />» Zmodyfikowany plik <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Wyeksportowano motyw</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Odświeżono motyw</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Zaktualizowano bazę danych z wersji %1$s do wersji %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Zaktualizowano skrypt phpBB z wersji %1$s do wersji %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Uaktywniono użytkownika</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Zablokowano użytkownika z poziomu zarządzania użytkownikami</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_USER_BAN_IP'		=> '<strong>Zablokowano adres IP z poziomu zarządzania użytkownikami</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Zablokowano e-mail z poziomu zarządzania użytkownikami</strong> » %2$s<br />Powód: „<em>%1$s</em>”',
	'LOG_USER_DELETED'		=> '<strong>Usunięto użytkownika</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Usunięto wszystkie załączniki wysłane przez użytkownika</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Usunięto awatar użytkownika</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Opróżniono folder użytkownika „Wysłane”</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Usunięto wszystkie posty napisane przez użytkownika</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Usunięto podpis użytkownika</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Dezaktywowano użytkownika</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Przeniesiono posty użytkownika</strong><br />» %1$s do forum %2$s',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Zmieniono hasło użytkownika</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Wymuszono ponowną aktywację konta użytkownika</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Usunięto użytkownikowi oznaczenie „nowo zarejestrowany”</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Użytkownik „%1$s” zmienił adres e-mail</strong><br />» z %2$s na %3$s',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Zmieniono nazwę użytkownika</strong><br />» z %1$s na %2$s',
	'LOG_USER_USER_UPDATE'	=> '<strong>Zaktualizowano informacje o użytkowniku</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Uaktywniono konto użytkownika</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Usunięto awatar użytkownika</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Usunięto podpis użytkownika</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Dodano uwagi o użytkowniku</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Dodano następujący wpis:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Dezaktywowano konto użytkownika</strong>',
	'LOG_USER_LOCK'				=> '<strong>Użytkownik zamknął własny temat</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Przeniesiono wszystkie posty użytkownika na forum „%s”</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Wymuszono ponowną aktywację konta użytkownika</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Użytkownik otworzył własny temat</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Wysłano ostrzeżenie użytkownikowi</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Użytkownik otrzymał następujące ostrzeżenie:</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Użytkownik zmienił domyślną grupę</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Użytkownik został zdymisjonowany z funkcji lidera grupy</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Użytkownik przyłączył się do grupy</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Użytkownik poprosił o przyjęcie do grupy</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Użytkownik zrezygnował z członkostwa w grupie</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Usunięto ostrzeżenie dla użytkownika</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Usunięto ostrzeżenie dla użytkownika</strong><br />» %1$s',
		2 => '<strong>Usunięto %2$d ostrzeżenia dla użytkownika</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
		3 => '<strong>Usunięto %2$d ostrzeżeń dla użytkownika</strong><br />» %1$s',
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Usunięto wszystkie ostrzeżenia dla użytkownika</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Dodano cenzurę słowa</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Usunięto cenzurę słowa</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Edytowano cenzurowane słowo</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Włączono rozszerzenie</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Wyłączono rozszerzenie</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Dane rozszerzenia zostały usunięte</strong><br />» %s',
	'LOG_EXT_UPDATE'    => '<strong>Zaktualizowano rozszerzenie</strong><br />» %s',
));
