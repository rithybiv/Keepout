<?php
/**
* @version $Id: polish.php,v 1.2 2005/11/30 04:44:09 dylek Exp $
* @package Mambo
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
* Polska adaptacaja - Marek Dylewicz - www.mambopl.com
* na podstawie tlumaczenia Tomka Fabiszewskiego i Stefana Wajdy
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

/** common */
DEFINE('_LANGUAGE','pl');
DEFINE('_LOCALE', 'pl_PL');
DEFINE("_NOT_AUTH","Nie masz autoryzacji by zobaczy� ten zas�b.");
DEFINE("_DO_LOGIN","Musisz si� zalogowa�.");
DEFINE('_VALID_AZ09',"Prosz� poprawnie poda� %s. Bez spacji, wi�cej ni� %d znak�w zawieraj�cych si� w 0-9, a-z, A-Z");
DEFINE('_CMN_YES',"Tak");
DEFINE('_CMN_NO',"Nie");
DEFINE('_CMN_SHOW',"Poka�");
DEFINE('_CMN_HIDE',"Ukryj");

DEFINE('_CMN_NAME',"Nazwa");
DEFINE('_CMN_DESCRIPTION',"Opis");
DEFINE('_CMN_SAVE',"Zapisz");
DEFINE('_CMN_CANCEL',"Zamknij");
DEFINE('_CMN_PRINT',"Drukuj");
DEFINE('_CMN_PDF',"PDF");
DEFINE('_CMN_EMAIL',"E-mail");
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT',"Nadrz�dny");
DEFINE('_CMN_ORDERING',"Kolejno��");
DEFINE('_CMN_ACCESS',"Uprawnienia dost�pu");
DEFINE('_CMN_SELECT',"Zaznacz");

DEFINE('_CMN_NEXT',"Nast�pna");
DEFINE('_CMN_NEXT_ARROW',"&raquo;");
DEFINE('_CMN_PREV',"Poprzednia");
DEFINE('_CMN_PREV_ARROW',"&laquo;");

DEFINE('_CMN_SORT_NONE',"Bez sortowania");
DEFINE('_CMN_SORT_ASC',"Sortuj rosn�co");
DEFINE('_CMN_SORT_DESC',"Sortuj malej�co");

DEFINE('_CMN_NEW',"Nowy");
DEFINE('_CMN_NONE',"Brak");
DEFINE('_CMN_LEFT',"Lewa");
DEFINE('_CMN_RIGHT',"Prawa");
DEFINE('_CMN_CENTER',"�rodek");
DEFINE('_CMN_ARCHIVE','Archiwizuj');
DEFINE('_CMN_UNARCHIVE','Odarchiwizuj');
DEFINE('_CMN_TOP','G�ra');
DEFINE('_CMN_BOTTOM','D�');

DEFINE('_CMN_PUBLISHED',"Opublikowany");
DEFINE('_CMN_UNPUBLISHED',"Nieopublikowany");

DEFINE('_CMN_EDIT_HTML','Edytuj HTML');
DEFINE('_CMN_EDIT_CSS','Edytuj CSS');

DEFINE('_CMN_DELETE','Usu�');

DEFINE('_CMN_FOLDER',"Folder");
DEFINE('_CMN_SUBFOLDER',"Sub-folder");
DEFINE('_CMN_OPTIONAL',"Opcjonalnie");
DEFINE('_CMN_REQUIRED',"Wymagane");

DEFINE('_CMN_CONTINUE',"Kontynuuj");

DEFINE('_CMN_NEW_ITEM_LAST','Nowe elementy b�d� domy�lnie na ostatnim miejscu. Kolejno�� mo�e zosta� zmieniona po zapisaniu zmian.');
DEFINE('_CMN_NEW_ITEM_FIRST','Nowe elementy b�d� domy�lnie na pierwszym miejscu. Kolejno�� mo�e zosta� zmieniona po zapisaniu zmian.');
DEFINE('_LOGIN_INCOMPLETE','Prosz� uzupe�ni� pola loginu i has�a.');
DEFINE('_LOGIN_BLOCKED','Twoje konto zosta�o zablokowane. Skontaktuj si� z administratorem.');
DEFINE('_LOGIN_INCORRECT','B��dny login lub has�o. Prosimy spr�bowa� ponownie.');
DEFINE('_LOGIN_NOADMINS','Nie mo�esz si� logowa�. Jeszcze nie ustanowiono administratora.');
DEFINE('_CMN_JAVASCRIPT','!UWAGA! Javascript musi by� uruchomiony do poprawnego dzia�ania aplikacji.');

DEFINE('_NEW_MESSAGE','Otrzyma�e� now� prywatn� wiadmo��');
DEFINE('_MESSAGE_FAILED','U�ytkownik zablokowa� swoj� skrzynk�. Wiadomo�ci nie dostarczono.');

DEFINE('_CMN_IFRAMES', 'Ta opcja nie dzia�a poprawnie. Niestety Twoja przegl�darka nie ob�uguje p�ywaj�cych ramek');

DEFINE('_INSTALL_WARN','Ze wzgl�d�w bezpiecze�stwa usu� katalog instalacyjny wraz z jego ca�� zawarto�ci� - nast�pnie od�wie� stron�');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>Nie znaleziono pliku szablonu!</b></font><br />Mo�e nie dokona�e� aktualizacji? <br />Je�li nie, <b>MUSISZ</b> tak�e zaktualizowa� baz� danych.<br />Zaloguj si� do panelu administracyjnego i wybierz opcj� \"Aktualizuj baz�\" z menu. Poszukiwany szablon:');
DEFINE('_NO_PARAMS','Nie ma parametr�w dla tego elementu');
DEFINE('_HANDLER','Nie zdefiniowano tego typu');

/** mambots*/
DEFINE('_TOC_JUMPTO',"Spis stron");

/** content */
DEFINE('_READ_MORE','Czytaj ca�o��...');
DEFINE('_READ_MORE_REGISTER','Zarejestruj si� najpierw...');
DEFINE('_MORE','Wi�cej...');
DEFINE('_ON_NEW_CONTENT', "Now� tre�� zaproponowa� [ %s ] zatytu�owan� [ %s ] z sekcji [ %s ] i kategorii [ %s ]" );
DEFINE('_SEL_CATEGORY','- Wybierz kategori� -');
DEFINE('_SEL_SECTION','- Wybierz sekcj� -');
DEFINE('_SEL_AUTHOR','- Wybierz autora -');
DEFINE('_SEL_POSITION','- Wybierz pozycj� -');
DEFINE('_SEL_TYPE','- Wybierz rodzaj -');
DEFINE('_EMPTY_CATEGORY','Nie ma tre�ci w tej kategorii');
DEFINE('_EMPTY_BLOG','Nie ma nic do wy�wietlenia');
DEFINE('_NOT_EXIST','Strona kt�r� pr�bujesz obejrze� nie istnieje.<br />Prosz� wybra� stron� z g��wnego menu.');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','G�osuj');
DEFINE('_BUTTON_RESULTS','Wyniki');
DEFINE('_USERNAME','Login');
DEFINE('_LOST_PASSWORD','Nie pami�tasz has�a?');
DEFINE('_PASSWORD','Has�o');
DEFINE('_BUTTON_LOGIN','Zaloguj');
DEFINE('_BUTTON_LOGOUT','Wyloguj');
DEFINE('_NO_ACCOUNT','Nie masz konta?');
DEFINE('_CREATE_ACCOUNT','Za�� je sobie');
DEFINE('_VOTE_POOR','Kiepski');
DEFINE('_VOTE_BEST','Bardzo dobry');
DEFINE('_USER_RATING','Oceny');
DEFINE('_RATE_BUTTON','Oce�');
DEFINE('_REMEMBER_ME',"Zapami�taj mnie");

/** contact.php */
DEFINE('_ENQUIRY','Zapytanie');
DEFINE('_ENQUIRY_TEXT','Oto jest e-mail z zapytaniem od');
DEFINE('_COPY_TEXT','To jest kopia wiadomo�ci kt�r� wys�a�e� do %s na stronie %s');
DEFINE('_COPY_SUBJECT','Kopia: ');
DEFINE('_THANK_MESSAGE','Dzi�kujemy za e-mail');
DEFINE('_CLOAKING','Ten adres e-mail jest chroniony przed spamerami, musisz mie� w��czony Javascript by go zobaczy�');
DEFINE('_CONTACT_HEADER_NAME','Nazwa');
DEFINE('_CONTACT_HEADER_POS','Pozycja');
DEFINE('_CONTACT_HEADER_EMAIL','E-mail');
DEFINE('_CONTACT_HEADER_PHONE','Telefon');
DEFINE('_CONTACT_HEADER_FAX','Faks');
DEFINE('_CONTACTS_DESC','Lista kontakt�w dla tego serwisu.');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','Kontakt');
DEFINE('_EMAIL_DESCRIPTION','Prosz� wype�ni� wszystkie pola poni�szego formularza:');
DEFINE('_NAME_PROMPT',' Podaj swoje imi�:');
DEFINE('_EMAIL_PROMPT',' Podaj sw�j adres e-mail:');
DEFINE('_MESSAGE_PROMPT',' Wpisz swoje pytania i uwagi:');
DEFINE('_SEND_BUTTON','Wy�lij');
DEFINE('_CONTACT_FORM_NC','Upewnij si�, �e formularz jest poprawnie wype�niony.');
DEFINE('_CONTACT_TELEPHONE','Nr telefonu: ');
DEFINE('_CONTACT_MOBILE','Nr tel. kom.: ');
DEFINE('_CONTACT_FAX','Fax: ');
DEFINE('_CONTACT_EMAIL','E-mail: ');
DEFINE('_CONTACT_NAME','Imi�: ');
DEFINE('_CONTACT_POSITION','Stanowisko: ');
DEFINE('_CONTACT_ADDRESS','Adres: ');
DEFINE('_CONTACT_MISC','Informacje: ');
DEFINE('_CONTACT_SEL','Wybierz kontakt:');
DEFINE('_CONTACT_NONE','Nie ma �adnych danych kontaktowych.');
DEFINE('_EMAIL_A_COPY','Przes�a� kopi� wiadomo�ci na w�asny adres?');
DEFINE('_CONTACT_DOWNLOAD_AS','Pobierz dane kontaktowe w postaci');
DEFINE('_VCARD','VCard');

/** pageNavigation */
DEFINE('_PN_PAGE','Strona');
DEFINE('_PN_OF','z');
DEFINE('_PN_START','Start');
DEFINE('_PN_PREVIOUS','Poprzednia');
DEFINE('_PN_NEXT','Nast�pna');
DEFINE('_PN_END','Ostatnia');
DEFINE('_PN_DISPLAY_NR','Wy�wietl #');
DEFINE('_PN_RESULTS','Wyniki');

/** emailfriend */
DEFINE('_EMAIL_TITLE','Wy�lij znajomemu');
DEFINE('_EMAIL_FRIEND','Wy�lij to do znajomego.');
DEFINE('_EMAIL_FRIEND_ADDR','Adres e-mail znajomego:');
DEFINE('_EMAIL_YOUR_NAME','Twoje imi�:');
DEFINE('_EMAIL_YOUR_MAIL','Tw�j e-mail:');
DEFINE('_SUBJECT_PROMPT',' Temat wiadomo�ci:');
DEFINE('_BUTTON_SUBMIT_MAIL','Wy�lij e-mail');
DEFINE('_BUTTON_CANCEL','Anuluj');
DEFINE('_EMAIL_ERR_NOINFO','Musisz poda� prawid�owo sw�j adres e-mail oraz adres odbiorcy.');
DEFINE('_EMAIL_MSG','Poni�sza strona z serwisu "%s" zosta�a wys�ana do Ciebie przez %s ( %s ).

Mo�esz sprawdzi� to za pomoc� poni�szego linku:
%s');
DEFINE('_EMAIL_INFO','Nades�ane przez');
DEFINE('_EMAIL_SENT','Wys�ane do');
DEFINE('_PROMPT_CLOSE','Zamknij okienko');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', 'Nades�a�');
DEFINE('_WRITTEN_BY', 'Napisa�');
DEFINE('_LAST_UPDATED', 'Ostatnia aktualizacja');
DEFINE('_BACK','[ Wr�� ]');
DEFINE('_LEGEND','Legenda');
DEFINE('_DATE','Data');
DEFINE('_ORDER_DROPDOWN','Kolejno��');
DEFINE('_HEADER_TITLE','Tytu�');
DEFINE('_HEADER_AUTHOR','Autor');
DEFINE('_HEADER_SUBMITTED','Dodany');
DEFINE('_HEADER_HITS','Ods�ony');
DEFINE('_E_EDIT','Edytuj');
DEFINE('_E_ADD','Dodaj');
DEFINE('_E_WARNUSER','Prosz� anulowa� lub zapisa� dokonane zmiany');
DEFINE('_E_WARNTITLE','Element musi posiada� tytu�');
DEFINE('_E_WARNTEXT','Element musi mie� wst�p');
DEFINE('_E_WARNCAT','Prosz� wybra� kategori�');
DEFINE('_E_CONTENT','Zawarto��');
DEFINE('_E_TITLE','Tytu�:');
DEFINE('_E_CATEGORY','Kategoria:');
DEFINE('_E_INTRO','Wst�p:');
DEFINE('_E_MAIN','Tekst rozszerzony:');
DEFINE('_E_MOSIMAGE','Wstaw {mosimage}');
DEFINE('_E_IMAGES','Grafiki');
DEFINE('_E_GALLERY_IMAGES','Galeria grafik');
DEFINE('_E_CONTENT_IMAGES','Grafiki zawarto�ci');
DEFINE('_E_EDIT_IMAGE','Edytuj grafik�');
DEFINE('_E_INSERT','Wstaw');
DEFINE('_E_UP','W g�r�');
DEFINE('_E_DOWN','W d�');
DEFINE('_E_REMOVE','Usu�');
DEFINE('_E_SOURCE','�r�d�o:');
DEFINE('_E_ALIGN','Wyr�wnanie:');
DEFINE('_E_ALT','Tekst nad grafik�:');
DEFINE('_E_BORDER','Ramka:');
DEFINE('_E_CAPTION','Podpis');
DEFINE('_E_APPLY','Zatwierd�');
DEFINE('_E_PUBLISHING','Publikowanie');
DEFINE('_E_STATE','Status:');
DEFINE('_E_AUTHOR_ALIAS','Alias autora:');
DEFINE('_E_ACCESS_LEVEL','Poziom dost�pu:');
DEFINE('_E_ORDERING','Kolejno��:');
DEFINE('_E_START_PUB','Pocz�tek publikowania:');
DEFINE('_E_FINISH_PUB','Zako�czenie publikowania:');
DEFINE('_E_SHOW_FP','Pokazywanie na stronie g��wnej:');
DEFINE('_E_HIDE_TITLE','Ukryj tytu�:');
DEFINE('_E_METADATA','Metadata');
DEFINE('_E_M_DESC','Opis:');
DEFINE('_E_M_KEY','S�owa kluczowe:');
DEFINE('_E_SUBJECT','Temat:');
DEFINE('_E_EXPIRES','Data wa�no�ci:');
DEFINE('_E_VERSION','Wersja:');
DEFINE('_E_ABOUT','O');
DEFINE('_E_CREATED','Utworzono:');
DEFINE('_E_LAST_MOD','Ostatnia zmiana:');
DEFINE('_E_HITS','Ods�ony:');
DEFINE('_E_SAVE','Zapisz');
DEFINE('_E_CANCEL','Anuluj');
DEFINE('_E_REGISTERED','Tylko dla zarejestrowanych u�ytkownik�w');
DEFINE('_E_ITEM_INFO','Informacje');
DEFINE('_E_ITEM_SAVED','Element zosta� pomy�lnie zapisany.');
DEFINE('_ITEM_PREVIOUS','&lt; Poprzedni');
DEFINE('_ITEM_NEXT','Nast�pny &gt;');


/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','Aktualnie nie ma zarchiwizowanych element�w w tej sekcji, zapraszamy p�niej');	
DEFINE('_CATEGORY_ARCHIVE_EMPTY','Aktualnie nie ma zarchiwizowanych element�w w tej kategorii, zapraszamy p�niej');	
DEFINE('_HEADER_SECTION_ARCHIVE','Archiwa sekcji');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Archiwa kategorii');
DEFINE('_ARCHIVE_SEARCH_FAILURE','Nie ma �adnych zarchiwizowanych element�w dla %s %s');	// values are month then year
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Oto zarchiwizowane elementy dla %s %s');	// values are month then year
DEFINE('_FILTER','Filtr');
DEFINE('_ORDER_DROPDOWN_DA','Data - rosn�co');
DEFINE('_ORDER_DROPDOWN_DD','Data - malej�co');
DEFINE('_ORDER_DROPDOWN_TA','Tytu� - rosn�co');
DEFINE('_ORDER_DROPDOWN_TD','Tytu� - malej�co');
DEFINE('_ORDER_DROPDOWN_HA','Ods�ony - rosn�co');
DEFINE('_ORDER_DROPDOWN_HD','Ods�ony - malej�co');
DEFINE('_ORDER_DROPDOWN_AUA','Autor - rosn�co');
DEFINE('_ORDER_DROPDOWN_AUD','Autor - malej�co');
DEFINE('_ORDER_DROPDOWN_O','Kolejno��');

/** poll.php */
DEFINE('_ALERT_ENABLED','Cookies musz� by� w��czone!');
DEFINE('_ALREADY_VOTE','Ju� dzisiaj g�osowa�e� w tej ankiecie!');
DEFINE('_NO_SELECTION','Nie dokonano wyboru, spr�buj ponownie');
DEFINE('_THANKS','Dzi�kujemy za Tw�j g�os.');
DEFINE('_SELECT_POLL','Wybierz ankiet� z listy');

/** classes/html/poll.php */
DEFINE('_JAN','Stycze�');
DEFINE('_FEB','Luty');
DEFINE('_MAR','Marzec');
DEFINE('_APR','Kwiecie�');
DEFINE('_MAY','Maj');
DEFINE('_JUN','Czerwiec');
DEFINE('_JUL','Lipiec');
DEFINE('_AUG','Sierpie�');
DEFINE('_SEP','Wrzesie�');
DEFINE('_OCT','Pa�dziernik');
DEFINE('_NOV','Listopad');
DEFINE('_DEC','Grudzie�');
DEFINE('_POLL_TITLE','Ankieta - Wyniki');
DEFINE('_SURVEY_TITLE','Tytu� ankiety:');
DEFINE('_NUM_VOTERS','Liczba g�osuj�cych:');
DEFINE('_FIRST_VOTE','Pierwszy g�os:');
DEFINE('_LAST_VOTE','Ostatni g�os:');
DEFINE('_SEL_POLL','Wybierz ankiet�:');
DEFINE('_NO_RESULTS','Brak wynik�w dla tej ankiety.');

/** registration.php */
DEFINE('_ERROR_PASS','Przepraszamy, nie znaleziono takiego u�ytkownika');
DEFINE('_NEWPASS_MSG','Konto u�ytkownika $checkusername ma powi�zany ze sob� ten e-mail.\n'
.' U�ytkownik serwisu $mosConfig_live_site poprosi� o przes�anie nowego has�a.\n\n'
.' Nowe has�o to: $newpass\n\nJe�eli nie prosi�e� o to, nie przejmuj si�.'
.' Tylko Ty widzisz t� wiadomo��. Je�li to pomy�ka, po prostu zaloguj si�'
.' z nowym has�em i wtedy zmie� na wybrane przez siebie.');
DEFINE('_NEWPASS_SUB','$_sitename :: Nowe has�o dla $checkusername');
DEFINE('_NEWPASS_SENT','Nowe has�o zosta�o utworzone i wys�ane!');
DEFINE('_REGWARN_NAME','Prosz� poda� imi�.');
DEFINE('_REGWARN_UNAME','Prosz� poda� login.');
DEFINE('_REGWARN_MAIL','Prosz� poda� poprawny adres e-mail.');
DEFINE('_REGWARN_PASS','Prosz� poda� poprawne has�o. Bez spacji, wi�cej ni� 6 znak�w zawieraj�cych si� w 0-9, a-z, A-Z');
DEFINE('_REGWARN_VPASS1','Prosz� powt�rzy� has�o.');
DEFINE('_REGWARN_VPASS2','Has�o i jego powt�rzenie s� r�ne, spr�buj ponownie.');
DEFINE('_REGWARN_INUSE','Ten login s� ju� zaj�ty. Spr�buj innego.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Ten adres e-mail jest ju� zarejestrowany. Je�eli zapomnia�e� has�o, kliknij "Zapomniane has�o" a nowe has�o zostanie do Ciebie wys�ane.');
DEFINE('_SEND_SUB','Dane u�ytkownika dla %s na %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Witaj %s,

Dzi�kujemy za zarejestrowanie si� w serwisie %s. Twoje konto zosta�o utworzone i musi zosta� aktywowane zanim b�dziesz mog� go u�y�.
By aktywowa� swoje konto, u�yj poni�szego odno�nika lub skopiuj go i wklej w pasek adresu swojej przegl�darki:
%s

Po aktywacji mo�esz zalogowa� si� w serwisie %s korzystaj�c z poni�szego loginu i has�a:

Login - %s
Has�o - %s');
DEFINE('_USEND_MSG', 'Witaj %s,

Dzi�kujemy za zarejestrowanie si� w serwisie %s.

Mo�esz teraz zalogowa� si� na %s korzystaj�c z loginu i has�a podanych podczas rejestracji.');
DEFINE('_USEND_MSG_NOPASS','Witaj $name,\n\nZosta�e� dodany do u�ytkownik�w serwisu $mosConfig_live_site.\n'
.'Mo�esz zalogowa� si� w serwisie $mosConfig_live_site z loginem i has�em kt�re poda�e� podczas rejestracji.\n\n'
.'Prosimy nie odpowiada� na t� wiadomo�� - zosta�a ona wygenerowana automatycznie dla cel�w informacyjnych\n');
DEFINE('_ASEND_MSG','Witaj %s,

Nowy u�ytkownik zarejestrowa� si� w serwisie %s.
Oto szczeg�y:

Imi� - %s
E-mail - %s
Login - %s

Prosimy nie odpowiada� na t� wiadomo�� - zosta�a ona wygenerowana automatycznie dla cel�w informacyjnych');
DEFINE('_REG_COMPLETE_NOPASS','<span class="componentheading">Rejestracja zako�czona!</span><br />&nbsp;&nbsp;'
.'Mo�esz teraz zalogowa� si�.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<span class="componentheading">Rejestracja zako�czona!</span><br />Mo�esz teraz zalogowa� si�.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<span class="componentheading">Rejestracja zako�czona!</span><br />Twoje konto zosta�o utworzone a link aktywacyjny zosta� wys�any na adres e-mail podany podczas rejestracji. Musisz aktywowa� swoje konto klikaj�c na link aktywacyjny otrzymany poprzez e-mail przed pierwszym logowaniem.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<span class="componentheading">Rejestracja zako�czona!</span><br />Twoje konto zosta�o poprawnie aktywowane. Mo�esz teraz zalogowa� si� przy u�yciu loginu i has�a podanych podczas rejestracji.');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<span class="componentheading">B��dny kod aktywacyjny!</span><br />Nie ma takiego konta w naszej bazie danych lub konto ju� zosta�o aktywowane.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','Nie pami�tasz has�a?');
DEFINE('_NEW_PASS_DESC','Nie ma problemu. Podaj tylko sw�j login oraz adres e-mail i naci�nij przycisk wysy�ania.<br />'
.'Otrzymasz nowe has�o za pomoc� kt�rego b�dziesz m�g� si� zalogowa�.<br /><br />');
DEFINE('_PROMPT_UNAME','Login:');
DEFINE('_PROMPT_EMAIL','Adres e-mail:');
DEFINE('_BUTTON_SEND_PASS','Przy�lij has�o');
DEFINE('_REGISTER_TITLE','Rejestracja');
DEFINE('_REGISTER_NAME','Imi�:');
DEFINE('_REGISTER_UNAME','Login:');
DEFINE('_REGISTER_EMAIL','E-mail:');
DEFINE('_REGISTER_PASS','Has�o:');
DEFINE('_REGISTER_VPASS','Powt�rz has�o:');
DEFINE('_REGISTER_REQUIRED','Pola oznaczone gwiazdk� (*) musz� by� wype�nione.');
DEFINE('_BUTTON_SEND_REG','Zarejestruj');
DEFINE('_SENDING_PASSWORD','Twoje has�o zostanie wys�ane na powy�szy adres e-mail. Kiedy ju� otrzymasz nowe has�o, mo�esz si� zalogowa� i je zmieni�.');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','Szukaj');
DEFINE('_PROMPT_KEYWORD','S�owo kluczowe');
DEFINE('_SEARCH_MATCHES','Znaleziono %d wynik(�w)');
DEFINE('_CONCLUSION','W sumie znaleziono $totalRows wynik(�w). Szukaj <b>$searchword</b> z');
DEFINE('_NOKEYWORD','Nie znaleziono wynik�w.');
DEFINE('_IGNOREKEYWORD','Jedno lub wi�cej s��w zosta�y zignorowane podczas wyszukiwania');
DEFINE('_SEARCH_ANYWORDS','Dowolne s�owa');
DEFINE('_SEARCH_ALLWORDS','Wszystkie s�owa');
DEFINE('_SEARCH_PHRASE','Dok�adny wyraz');
DEFINE('_SEARCH_NEWEST','Najpierw najnowsze');
DEFINE('_SEARCH_OLDEST','Najpierw najstarsze');
DEFINE('_SEARCH_POPULAR','Najbardziej popularne');
DEFINE('_SEARCH_ALPHABETICAL','Alfabetycznie');
DEFINE('_SEARCH_CATEGORY','Sekcja/kategoria');

/** templates/*.php */
DEFINE('_ISO','charset=iso-8859-2');
DEFINE('_DATE_FORMAT','l, F d Y');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modify this line to reflect how you want the date to appear in your site
*
*e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H:%M"); //Uses PHP's strftime Command Format
*/
DEFINE('_DATE_FORMAT_LC',"%A, %d %B %Y"); //Uses PHP's strftime Command Format
DEFINE('_DATE_FORMAT_LC2',"%A, %d %B %Y %H:%M");
DEFINE('_SEARCH_BOX','szukaj...');
DEFINE('_NEWSFLASH_BOX','W skr�cie!');
DEFINE('_MAINMENU_BOX','Menu serwisu');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','Menu u�ytkownika');
DEFINE('_HI','Witaj ');

/** user.php */
DEFINE('_SAVE_ERR','Prosz� wype�ni� wszystkie pola.');
DEFINE('_THANK_SUB','Dzi�kujemy za Twoj� propozycj�. Twoja propozycja zostanie sprawdzona przez administratora zanim zostanie opublikowana na naszej stronie.');
DEFINE('_UP_SIZE','Nie mo�esz wgrywa� plik�w przekraczaj�cych rozmiar 15 kB.');
DEFINE('_UP_EXISTS','Grafika $userfile_name ju� istnieje. Zmie� nazw� pliku i spr�buj ponownie.');
DEFINE('_UP_COPY_FAIL','B��d wgrywania');
DEFINE('_UP_TYPE_WARN','Mo�esz wgrywa� wy��cznie pliki .gif lub .jpg.');
DEFINE('_MAIL_SUB','Propozycja u�ytkownika');
DEFINE('_MAIL_MSG','Witaj $adminName,\n\nZaproponowano $type, $title, przez $author'
.' dla serwisu $mosConfig_live_site.\n'
.'Udaj si� do $mosConfig_live_site/administrator/ by przejrze� i ewentualnie zatwierdzi� $type.\n\n'
.'Prosimy nie odpowiada� na t� wiadomo�� - zosta�a ona wygenerowana automatycznie dla cel�w informacyjnych\n');
DEFINE('_PASS_VERR1','W przypadku zmiany has�a prosimy o jego dwukrotn� weryfikacj�.');
DEFINE('_PASS_VERR2','Zmieniaj�c has�o upewnij si�, �e poda�e� je dwukrotnie prawid�owo.');
DEFINE('_UNAME_INUSE','Ten login jest ju� zaj�ty.');
DEFINE('_UPDATE','Aktualizuj');
DEFINE('_USER_DETAILS_SAVE','Twoje ustawienia zosta�y zapisane.');
DEFINE('_USER_LOGIN','Logowanie u�ytkownika');

/** components/com_user */
DEFINE('_EDIT_TITLE','Zmie� swoje dane');
DEFINE('_YOUR_NAME','Twoje imi�:');
DEFINE('_EMAIL','E-mail:');
DEFINE('_UNAME','Login:');
DEFINE('_PASS','Has�o:');
DEFINE('_VPASS','Powt�rz has�o:');
DEFINE('_SUBMIT_SUCCESS','Zako�czono pomy�lnie!');
DEFINE('_SUBMIT_SUCCESS_DESC','Twoja propozycja zosta�a poprawnie wys�ana do naszych administrator�w. Zostanie ona sprawdzona zanim zostanie opublikowana na naszej stronie.');
DEFINE('_WELCOME','Witaj!');
DEFINE('_WELCOME_DESC','Witaj w sekcji u�ytkownika naszej strony.');
DEFINE('_CONF_CHECKED_IN','Elementy zablokowane zosta�y teraz odblokowane');
DEFINE('_CHECK_TABLE','Sprawdzanie tabeli');
DEFINE('_CHECKED_IN','Zaznaczone ');
DEFINE('_CHECKED_IN_ITEMS',' pozycji');
DEFINE('_PASS_MATCH','Has�a nie zgadzaj� si�');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','Musisz wybra� nazw� dla klienta.');
DEFINE('_BNR_CONTACT','Musisz wybra� kontakt z klientem.');
DEFINE('_BNR_VALID_EMAIL','Musisz wybra� poprawny adres e-mail klienta.');
DEFINE('_BNR_CLIENT','Musisz wybra� klienta,');
DEFINE('_BNR_NAME','Musisz wybra� nazw� dla bannera.');
DEFINE('_BNR_IMAGE','Musisz wybra� plik grafiki bannera.');
DEFINE('_BNR_URL','Musisz wybra� URL lub w�asny kod dla bannera.');

/** components/com_login */
DEFINE('_ALREADY_LOGIN','Ju� jeste� zalogowany(a)!');
DEFINE('_LOGOUT','Kliknij tutaj by si� wylogowa�');
DEFINE('_LOGIN_TEXT','U�yj p�l loginu i has�a by uzyskac pe�en dost�p');
DEFINE('_LOGIN_SUCCESS','Zosta�e� pomy�lnie zalogowany');
DEFINE('_LOGOUT_SUCCESS','Zosta�e� pomy�lnie wylogowany');
DEFINE('_LOGIN_DESCRIPTION','By uzyska� dost�p do strze�onej cz�ci serwisu, prosz� si� zalogowa�');
DEFINE('_LOGOUT_DESCRIPTION','Aktualnie jeste� zalogowany w prywatnej cze�ci serwisu');

/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','Odno�niki');
DEFINE('_WEBLINKS_DESC','Cz�sto przegl�damy zasoby sieci WWW. Je�eli znajdujemy co� ciekawego dzielimy si� tym na tej li�cie'
.' aby� r�wnie� m�g� to zobaczy�.<br />Wska� z poni�szej listy tematyk� odsy�aczy a nast�pnie wybierz stron�, kt�r� chcesz odwiedzi�.');
DEFINE('_HEADER_TITLE_WEBLINKS','Odno�nik');
DEFINE('_SECTION','Sekcja:');
DEFINE('_SUBMIT_LINK','Zaproponuj odno�nik');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','Opis:');
DEFINE('_NAME','Nazwa:');
DEFINE('_WEBLINK_EXIST','Ju� jest odno�nik z tak� nazw�, zmie� na inn�.');
DEFINE('_WEBLINK_TITLE','Odno�nik musi mie� nazw�.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','Nazwa serwisu');
DEFINE('_FEED_ARTICLES','# artyku��w');
DEFINE('_FEED_LINK','Odno�nik');

/** whos_online.php */
DEFINE('_WE_HAVE', 'Aktualnie jest ');
DEFINE('_AND', ' oraz ');
DEFINE('_GUEST_COUNT','$guest_array go��');
DEFINE('_GUESTS_COUNT','$guest_array go�ci');
DEFINE('_MEMBER_COUNT','$user_array u�ytkownik');
DEFINE('_MEMBERS_COUNT','$user_array u�ytkownik�w');
DEFINE('_ONLINE',' online');
DEFINE('_NONE','Brak u�ytkownik�w online');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','Czas');
DEFINE('_MEMBERS_STAT','U�ytkownicy');
DEFINE('_HITS_STAT','Ods�ony');
DEFINE('_NEWS_STAT','Newsy');
DEFINE('_LINKS_STAT','Odno�niki');
DEFINE('_VISITORS','odwiedzaj�cych');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* Pierwszy element w kolejno�ci dla tego menu [mainmenu] b�dzie wy�wietlany jako `Strona g��wna` w tym serwisie *');
DEFINE('_MAINMENU_DEL','* Nie mo�esz `usun��` tego elementu, gdy� jest on wymagany do prawid�owej pracy systemu Mambo *');
DEFINE('_MENU_GROUP','* Niekt�re `Rodzaje menu` wyst�puj� wi�cej ni� w jednej grupie *');

/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Dane u�ytkownika' );
DEFINE('_NEW_USER_MESSAGE', 'Witaj %s,


Zosta�e� dodany jako u�ytkownik %s przez Administratora.

Ten e-mail zawiera dane niezb�dne do zalogowania si� na %s:

Login - %s
Has�o - %s


Prosimy nie odpowiada� na t� wiadomo�� - zosta�a ona wygenerowana automatycznie dla cel�w informacyjnych');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', 'Oto jest e-mail od u�ytkownika %s

Tre��:
' );

// dominiq 5.04 2005
$mies1 = array("stycze�","luty","marzec","kwiecie�","maj","czerwiec","lipiec","sierpie�","wrzesie�","pa�dziernik","listopad","grudzie�");
$mies2 = array("stycznia","lutego","marca","kwietnia","maja","czerwca","lipca","sierpnia","wrze�nia","pa�dziernika","listopada","grudnia");

?>
