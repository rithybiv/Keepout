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
DEFINE("_NOT_AUTH","Nie masz autoryzacji by zobaczyæ ten zasób.");
DEFINE("_DO_LOGIN","Musisz siê zalogowaæ.");
DEFINE('_VALID_AZ09',"Proszê poprawnie podaæ %s. Bez spacji, wiêcej ni¿ %d znaków zawieraj±cych siê w 0-9, a-z, A-Z");
DEFINE('_CMN_YES',"Tak");
DEFINE('_CMN_NO',"Nie");
DEFINE('_CMN_SHOW',"Poka¿");
DEFINE('_CMN_HIDE',"Ukryj");

DEFINE('_CMN_NAME',"Nazwa");
DEFINE('_CMN_DESCRIPTION',"Opis");
DEFINE('_CMN_SAVE',"Zapisz");
DEFINE('_CMN_CANCEL',"Zamknij");
DEFINE('_CMN_PRINT',"Drukuj");
DEFINE('_CMN_PDF',"PDF");
DEFINE('_CMN_EMAIL',"E-mail");
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT',"Nadrzêdny");
DEFINE('_CMN_ORDERING',"Kolejno¶æ");
DEFINE('_CMN_ACCESS',"Uprawnienia dostêpu");
DEFINE('_CMN_SELECT',"Zaznacz");

DEFINE('_CMN_NEXT',"Nastêpna");
DEFINE('_CMN_NEXT_ARROW',"&raquo;");
DEFINE('_CMN_PREV',"Poprzednia");
DEFINE('_CMN_PREV_ARROW',"&laquo;");

DEFINE('_CMN_SORT_NONE',"Bez sortowania");
DEFINE('_CMN_SORT_ASC',"Sortuj rosn±co");
DEFINE('_CMN_SORT_DESC',"Sortuj malej±co");

DEFINE('_CMN_NEW',"Nowy");
DEFINE('_CMN_NONE',"Brak");
DEFINE('_CMN_LEFT',"Lewa");
DEFINE('_CMN_RIGHT',"Prawa");
DEFINE('_CMN_CENTER',"¦rodek");
DEFINE('_CMN_ARCHIVE','Archiwizuj');
DEFINE('_CMN_UNARCHIVE','Odarchiwizuj');
DEFINE('_CMN_TOP','Góra');
DEFINE('_CMN_BOTTOM','Dó³');

DEFINE('_CMN_PUBLISHED',"Opublikowany");
DEFINE('_CMN_UNPUBLISHED',"Nieopublikowany");

DEFINE('_CMN_EDIT_HTML','Edytuj HTML');
DEFINE('_CMN_EDIT_CSS','Edytuj CSS');

DEFINE('_CMN_DELETE','Usuñ');

DEFINE('_CMN_FOLDER',"Folder");
DEFINE('_CMN_SUBFOLDER',"Sub-folder");
DEFINE('_CMN_OPTIONAL',"Opcjonalnie");
DEFINE('_CMN_REQUIRED',"Wymagane");

DEFINE('_CMN_CONTINUE',"Kontynuuj");

DEFINE('_CMN_NEW_ITEM_LAST','Nowe elementy bêd± domy¶lnie na ostatnim miejscu. Kolejno¶æ mo¿e zostaæ zmieniona po zapisaniu zmian.');
DEFINE('_CMN_NEW_ITEM_FIRST','Nowe elementy bêd± domy¶lnie na pierwszym miejscu. Kolejno¶æ mo¿e zostaæ zmieniona po zapisaniu zmian.');
DEFINE('_LOGIN_INCOMPLETE','Proszê uzupe³niæ pola loginu i has³a.');
DEFINE('_LOGIN_BLOCKED','Twoje konto zosta³o zablokowane. Skontaktuj siê z administratorem.');
DEFINE('_LOGIN_INCORRECT','B³êdny login lub has³o. Prosimy spróbowaæ ponownie.');
DEFINE('_LOGIN_NOADMINS','Nie mo¿esz siê logowaæ. Jeszcze nie ustanowiono administratora.');
DEFINE('_CMN_JAVASCRIPT','!UWAGA! Javascript musi byæ uruchomiony do poprawnego dzia³ania aplikacji.');

DEFINE('_NEW_MESSAGE','Otrzyma³e¶ now± prywatn± wiadmo¶æ');
DEFINE('_MESSAGE_FAILED','U¿ytkownik zablokowa³ swoj± skrzynkê. Wiadomo¶ci nie dostarczono.');

DEFINE('_CMN_IFRAMES', 'Ta opcja nie dzia³a poprawnie. Niestety Twoja przegl±darka nie ob³uguje p³ywaj±cych ramek');

DEFINE('_INSTALL_WARN','Ze wzglêdów bezpieczeñstwa usuñ katalog instalacyjny wraz z jego ca³± zawarto¶ci± - nastêpnie od¶wie¿ stronê');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>Nie znaleziono pliku szablonu!</b></font><br />Mo¿e nie dokona³e¶ aktualizacji? <br />Je¶li nie, <b>MUSISZ</b> tak¿e zaktualizowaæ bazê danych.<br />Zaloguj siê do panelu administracyjnego i wybierz opcjê \"Aktualizuj bazê\" z menu. Poszukiwany szablon:');
DEFINE('_NO_PARAMS','Nie ma parametrów dla tego elementu');
DEFINE('_HANDLER','Nie zdefiniowano tego typu');

/** mambots*/
DEFINE('_TOC_JUMPTO',"Spis stron");

/** content */
DEFINE('_READ_MORE','Czytaj ca³o¶æ...');
DEFINE('_READ_MORE_REGISTER','Zarejestruj siê najpierw...');
DEFINE('_MORE','Wiêcej...');
DEFINE('_ON_NEW_CONTENT', "Now± tre¶æ zaproponowa³ [ %s ] zatytu³owan± [ %s ] z sekcji [ %s ] i kategorii [ %s ]" );
DEFINE('_SEL_CATEGORY','- Wybierz kategoriê -');
DEFINE('_SEL_SECTION','- Wybierz sekcjê -');
DEFINE('_SEL_AUTHOR','- Wybierz autora -');
DEFINE('_SEL_POSITION','- Wybierz pozycjê -');
DEFINE('_SEL_TYPE','- Wybierz rodzaj -');
DEFINE('_EMPTY_CATEGORY','Nie ma tre¶ci w tej kategorii');
DEFINE('_EMPTY_BLOG','Nie ma nic do wy¶wietlenia');
DEFINE('_NOT_EXIST','Strona któr± próbujesz obejrzeæ nie istnieje.<br />Proszê wybraæ stronê z g³ównego menu.');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','G³osuj');
DEFINE('_BUTTON_RESULTS','Wyniki');
DEFINE('_USERNAME','Login');
DEFINE('_LOST_PASSWORD','Nie pamiêtasz has³a?');
DEFINE('_PASSWORD','Has³o');
DEFINE('_BUTTON_LOGIN','Zaloguj');
DEFINE('_BUTTON_LOGOUT','Wyloguj');
DEFINE('_NO_ACCOUNT','Nie masz konta?');
DEFINE('_CREATE_ACCOUNT','Za³ó¿ je sobie');
DEFINE('_VOTE_POOR','Kiepski');
DEFINE('_VOTE_BEST','Bardzo dobry');
DEFINE('_USER_RATING','Oceny');
DEFINE('_RATE_BUTTON','Oceñ');
DEFINE('_REMEMBER_ME',"Zapamiêtaj mnie");

/** contact.php */
DEFINE('_ENQUIRY','Zapytanie');
DEFINE('_ENQUIRY_TEXT','Oto jest e-mail z zapytaniem od');
DEFINE('_COPY_TEXT','To jest kopia wiadomo¶ci któr± wys³a³e¶ do %s na stronie %s');
DEFINE('_COPY_SUBJECT','Kopia: ');
DEFINE('_THANK_MESSAGE','Dziêkujemy za e-mail');
DEFINE('_CLOAKING','Ten adres e-mail jest chroniony przed spamerami, musisz mieæ w³±czony Javascript by go zobaczyæ');
DEFINE('_CONTACT_HEADER_NAME','Nazwa');
DEFINE('_CONTACT_HEADER_POS','Pozycja');
DEFINE('_CONTACT_HEADER_EMAIL','E-mail');
DEFINE('_CONTACT_HEADER_PHONE','Telefon');
DEFINE('_CONTACT_HEADER_FAX','Faks');
DEFINE('_CONTACTS_DESC','Lista kontaktów dla tego serwisu.');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','Kontakt');
DEFINE('_EMAIL_DESCRIPTION','Proszê wype³niæ wszystkie pola poni¿szego formularza:');
DEFINE('_NAME_PROMPT',' Podaj swoje imiê:');
DEFINE('_EMAIL_PROMPT',' Podaj swój adres e-mail:');
DEFINE('_MESSAGE_PROMPT',' Wpisz swoje pytania i uwagi:');
DEFINE('_SEND_BUTTON','Wy¶lij');
DEFINE('_CONTACT_FORM_NC','Upewnij siê, ¿e formularz jest poprawnie wype³niony.');
DEFINE('_CONTACT_TELEPHONE','Nr telefonu: ');
DEFINE('_CONTACT_MOBILE','Nr tel. kom.: ');
DEFINE('_CONTACT_FAX','Fax: ');
DEFINE('_CONTACT_EMAIL','E-mail: ');
DEFINE('_CONTACT_NAME','Imiê: ');
DEFINE('_CONTACT_POSITION','Stanowisko: ');
DEFINE('_CONTACT_ADDRESS','Adres: ');
DEFINE('_CONTACT_MISC','Informacje: ');
DEFINE('_CONTACT_SEL','Wybierz kontakt:');
DEFINE('_CONTACT_NONE','Nie ma ¿adnych danych kontaktowych.');
DEFINE('_EMAIL_A_COPY','Przes³aæ kopiê wiadomo¶ci na w³asny adres?');
DEFINE('_CONTACT_DOWNLOAD_AS','Pobierz dane kontaktowe w postaci');
DEFINE('_VCARD','VCard');

/** pageNavigation */
DEFINE('_PN_PAGE','Strona');
DEFINE('_PN_OF','z');
DEFINE('_PN_START','Start');
DEFINE('_PN_PREVIOUS','Poprzednia');
DEFINE('_PN_NEXT','Nastêpna');
DEFINE('_PN_END','Ostatnia');
DEFINE('_PN_DISPLAY_NR','Wy¶wietl #');
DEFINE('_PN_RESULTS','Wyniki');

/** emailfriend */
DEFINE('_EMAIL_TITLE','Wy¶lij znajomemu');
DEFINE('_EMAIL_FRIEND','Wy¶lij to do znajomego.');
DEFINE('_EMAIL_FRIEND_ADDR','Adres e-mail znajomego:');
DEFINE('_EMAIL_YOUR_NAME','Twoje imiê:');
DEFINE('_EMAIL_YOUR_MAIL','Twój e-mail:');
DEFINE('_SUBJECT_PROMPT',' Temat wiadomo¶ci:');
DEFINE('_BUTTON_SUBMIT_MAIL','Wy¶lij e-mail');
DEFINE('_BUTTON_CANCEL','Anuluj');
DEFINE('_EMAIL_ERR_NOINFO','Musisz podaæ prawid³owo swój adres e-mail oraz adres odbiorcy.');
DEFINE('_EMAIL_MSG','Poni¿sza strona z serwisu "%s" zosta³a wys³ana do Ciebie przez %s ( %s ).

Mo¿esz sprawdziæ to za pomoc± poni¿szego linku:
%s');
DEFINE('_EMAIL_INFO','Nades³ane przez');
DEFINE('_EMAIL_SENT','Wys³ane do');
DEFINE('_PROMPT_CLOSE','Zamknij okienko');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', 'Nades³a³');
DEFINE('_WRITTEN_BY', 'Napisa³');
DEFINE('_LAST_UPDATED', 'Ostatnia aktualizacja');
DEFINE('_BACK','[ Wróæ ]');
DEFINE('_LEGEND','Legenda');
DEFINE('_DATE','Data');
DEFINE('_ORDER_DROPDOWN','Kolejno¶æ');
DEFINE('_HEADER_TITLE','Tytu³');
DEFINE('_HEADER_AUTHOR','Autor');
DEFINE('_HEADER_SUBMITTED','Dodany');
DEFINE('_HEADER_HITS','Ods³ony');
DEFINE('_E_EDIT','Edytuj');
DEFINE('_E_ADD','Dodaj');
DEFINE('_E_WARNUSER','Proszê anulowaæ lub zapisaæ dokonane zmiany');
DEFINE('_E_WARNTITLE','Element musi posiadaæ tytu³');
DEFINE('_E_WARNTEXT','Element musi mieæ wstêp');
DEFINE('_E_WARNCAT','Proszê wybraæ kategoriê');
DEFINE('_E_CONTENT','Zawarto¶æ');
DEFINE('_E_TITLE','Tytu³:');
DEFINE('_E_CATEGORY','Kategoria:');
DEFINE('_E_INTRO','Wstêp:');
DEFINE('_E_MAIN','Tekst rozszerzony:');
DEFINE('_E_MOSIMAGE','Wstaw {mosimage}');
DEFINE('_E_IMAGES','Grafiki');
DEFINE('_E_GALLERY_IMAGES','Galeria grafik');
DEFINE('_E_CONTENT_IMAGES','Grafiki zawarto¶ci');
DEFINE('_E_EDIT_IMAGE','Edytuj grafikê');
DEFINE('_E_INSERT','Wstaw');
DEFINE('_E_UP','W górê');
DEFINE('_E_DOWN','W dó³');
DEFINE('_E_REMOVE','Usuñ');
DEFINE('_E_SOURCE','¬ród³o:');
DEFINE('_E_ALIGN','Wyrównanie:');
DEFINE('_E_ALT','Tekst nad grafik±:');
DEFINE('_E_BORDER','Ramka:');
DEFINE('_E_CAPTION','Podpis');
DEFINE('_E_APPLY','Zatwierd¼');
DEFINE('_E_PUBLISHING','Publikowanie');
DEFINE('_E_STATE','Status:');
DEFINE('_E_AUTHOR_ALIAS','Alias autora:');
DEFINE('_E_ACCESS_LEVEL','Poziom dostêpu:');
DEFINE('_E_ORDERING','Kolejno¶æ:');
DEFINE('_E_START_PUB','Pocz±tek publikowania:');
DEFINE('_E_FINISH_PUB','Zakoñczenie publikowania:');
DEFINE('_E_SHOW_FP','Pokazywanie na stronie g³ównej:');
DEFINE('_E_HIDE_TITLE','Ukryj tytu³:');
DEFINE('_E_METADATA','Metadata');
DEFINE('_E_M_DESC','Opis:');
DEFINE('_E_M_KEY','S³owa kluczowe:');
DEFINE('_E_SUBJECT','Temat:');
DEFINE('_E_EXPIRES','Data wa¿no¶ci:');
DEFINE('_E_VERSION','Wersja:');
DEFINE('_E_ABOUT','O');
DEFINE('_E_CREATED','Utworzono:');
DEFINE('_E_LAST_MOD','Ostatnia zmiana:');
DEFINE('_E_HITS','Ods³ony:');
DEFINE('_E_SAVE','Zapisz');
DEFINE('_E_CANCEL','Anuluj');
DEFINE('_E_REGISTERED','Tylko dla zarejestrowanych u¿ytkowników');
DEFINE('_E_ITEM_INFO','Informacje');
DEFINE('_E_ITEM_SAVED','Element zosta³ pomy¶lnie zapisany.');
DEFINE('_ITEM_PREVIOUS','&lt; Poprzedni');
DEFINE('_ITEM_NEXT','Nastêpny &gt;');


/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','Aktualnie nie ma zarchiwizowanych elementów w tej sekcji, zapraszamy pó¼niej');	
DEFINE('_CATEGORY_ARCHIVE_EMPTY','Aktualnie nie ma zarchiwizowanych elementów w tej kategorii, zapraszamy pó¼niej');	
DEFINE('_HEADER_SECTION_ARCHIVE','Archiwa sekcji');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Archiwa kategorii');
DEFINE('_ARCHIVE_SEARCH_FAILURE','Nie ma ¿adnych zarchiwizowanych elementów dla %s %s');	// values are month then year
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Oto zarchiwizowane elementy dla %s %s');	// values are month then year
DEFINE('_FILTER','Filtr');
DEFINE('_ORDER_DROPDOWN_DA','Data - rosn±co');
DEFINE('_ORDER_DROPDOWN_DD','Data - malej±co');
DEFINE('_ORDER_DROPDOWN_TA','Tytu³ - rosn±co');
DEFINE('_ORDER_DROPDOWN_TD','Tytu³ - malej±co');
DEFINE('_ORDER_DROPDOWN_HA','Ods³ony - rosn±co');
DEFINE('_ORDER_DROPDOWN_HD','Ods³ony - malej±co');
DEFINE('_ORDER_DROPDOWN_AUA','Autor - rosn±co');
DEFINE('_ORDER_DROPDOWN_AUD','Autor - malej±co');
DEFINE('_ORDER_DROPDOWN_O','Kolejno¶æ');

/** poll.php */
DEFINE('_ALERT_ENABLED','Cookies musz± byæ w³±czone!');
DEFINE('_ALREADY_VOTE','Ju¿ dzisiaj g³osowa³e¶ w tej ankiecie!');
DEFINE('_NO_SELECTION','Nie dokonano wyboru, spróbuj ponownie');
DEFINE('_THANKS','Dziêkujemy za Twój g³os.');
DEFINE('_SELECT_POLL','Wybierz ankietê z listy');

/** classes/html/poll.php */
DEFINE('_JAN','Styczeñ');
DEFINE('_FEB','Luty');
DEFINE('_MAR','Marzec');
DEFINE('_APR','Kwiecieñ');
DEFINE('_MAY','Maj');
DEFINE('_JUN','Czerwiec');
DEFINE('_JUL','Lipiec');
DEFINE('_AUG','Sierpieñ');
DEFINE('_SEP','Wrzesieñ');
DEFINE('_OCT','Pa¼dziernik');
DEFINE('_NOV','Listopad');
DEFINE('_DEC','Grudzieñ');
DEFINE('_POLL_TITLE','Ankieta - Wyniki');
DEFINE('_SURVEY_TITLE','Tytu³ ankiety:');
DEFINE('_NUM_VOTERS','Liczba g³osuj±cych:');
DEFINE('_FIRST_VOTE','Pierwszy g³os:');
DEFINE('_LAST_VOTE','Ostatni g³os:');
DEFINE('_SEL_POLL','Wybierz ankietê:');
DEFINE('_NO_RESULTS','Brak wyników dla tej ankiety.');

/** registration.php */
DEFINE('_ERROR_PASS','Przepraszamy, nie znaleziono takiego u¿ytkownika');
DEFINE('_NEWPASS_MSG','Konto u¿ytkownika $checkusername ma powi±zany ze sob± ten e-mail.\n'
.' U¿ytkownik serwisu $mosConfig_live_site poprosi³ o przes³anie nowego has³a.\n\n'
.' Nowe has³o to: $newpass\n\nJe¿eli nie prosi³e¶ o to, nie przejmuj siê.'
.' Tylko Ty widzisz t± wiadomo¶æ. Je¶li to pomy³ka, po prostu zaloguj siê'
.' z nowym has³em i wtedy zmieñ na wybrane przez siebie.');
DEFINE('_NEWPASS_SUB','$_sitename :: Nowe has³o dla $checkusername');
DEFINE('_NEWPASS_SENT','Nowe has³o zosta³o utworzone i wys³ane!');
DEFINE('_REGWARN_NAME','Proszê podaæ imiê.');
DEFINE('_REGWARN_UNAME','Proszê podaæ login.');
DEFINE('_REGWARN_MAIL','Proszê podaæ poprawny adres e-mail.');
DEFINE('_REGWARN_PASS','Proszê podaæ poprawne has³o. Bez spacji, wiêcej ni¿ 6 znaków zawieraj±cych siê w 0-9, a-z, A-Z');
DEFINE('_REGWARN_VPASS1','Proszê powtórzyæ has³o.');
DEFINE('_REGWARN_VPASS2','Has³o i jego powtórzenie s± ró¿ne, spróbuj ponownie.');
DEFINE('_REGWARN_INUSE','Ten login s± ju¿ zajêty. Spróbuj innego.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Ten adres e-mail jest ju¿ zarejestrowany. Je¿eli zapomnia³e¶ has³o, kliknij "Zapomniane has³o" a nowe has³o zostanie do Ciebie wys³ane.');
DEFINE('_SEND_SUB','Dane u¿ytkownika dla %s na %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Witaj %s,

Dziêkujemy za zarejestrowanie siê w serwisie %s. Twoje konto zosta³o utworzone i musi zostaæ aktywowane zanim bêdziesz mog³ go u¿yæ.
By aktywowaæ swoje konto, u¿yj poni¿szego odno¶nika lub skopiuj go i wklej w pasek adresu swojej przegl±darki:
%s

Po aktywacji mo¿esz zalogowaæ siê w serwisie %s korzystaj±c z poni¿szego loginu i has³a:

Login - %s
Has³o - %s');
DEFINE('_USEND_MSG', 'Witaj %s,

Dziêkujemy za zarejestrowanie siê w serwisie %s.

Mo¿esz teraz zalogowaæ siê na %s korzystaj±c z loginu i has³a podanych podczas rejestracji.');
DEFINE('_USEND_MSG_NOPASS','Witaj $name,\n\nZosta³e¶ dodany do u¿ytkowników serwisu $mosConfig_live_site.\n'
.'Mo¿esz zalogowaæ siê w serwisie $mosConfig_live_site z loginem i has³em które poda³e¶ podczas rejestracji.\n\n'
.'Prosimy nie odpowiadaæ na t± wiadomo¶æ - zosta³a ona wygenerowana automatycznie dla celów informacyjnych\n');
DEFINE('_ASEND_MSG','Witaj %s,

Nowy u¿ytkownik zarejestrowa³ siê w serwisie %s.
Oto szczegó³y:

Imiê - %s
E-mail - %s
Login - %s

Prosimy nie odpowiadaæ na t± wiadomo¶æ - zosta³a ona wygenerowana automatycznie dla celów informacyjnych');
DEFINE('_REG_COMPLETE_NOPASS','<span class="componentheading">Rejestracja zakoñczona!</span><br />&nbsp;&nbsp;'
.'Mo¿esz teraz zalogowaæ siê.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<span class="componentheading">Rejestracja zakoñczona!</span><br />Mo¿esz teraz zalogowaæ siê.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<span class="componentheading">Rejestracja zakoñczona!</span><br />Twoje konto zosta³o utworzone a link aktywacyjny zosta³ wys³any na adres e-mail podany podczas rejestracji. Musisz aktywowaæ swoje konto klikaj±c na link aktywacyjny otrzymany poprzez e-mail przed pierwszym logowaniem.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<span class="componentheading">Rejestracja zakoñczona!</span><br />Twoje konto zosta³o poprawnie aktywowane. Mo¿esz teraz zalogowaæ siê przy u¿yciu loginu i has³a podanych podczas rejestracji.');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<span class="componentheading">B³êdny kod aktywacyjny!</span><br />Nie ma takiego konta w naszej bazie danych lub konto ju¿ zosta³o aktywowane.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','Nie pamiêtasz has³a?');
DEFINE('_NEW_PASS_DESC','Nie ma problemu. Podaj tylko swój login oraz adres e-mail i naci¶nij przycisk wysy³ania.<br />'
.'Otrzymasz nowe has³o za pomoc± którego bêdziesz móg³ siê zalogowaæ.<br /><br />');
DEFINE('_PROMPT_UNAME','Login:');
DEFINE('_PROMPT_EMAIL','Adres e-mail:');
DEFINE('_BUTTON_SEND_PASS','Przy¶lij has³o');
DEFINE('_REGISTER_TITLE','Rejestracja');
DEFINE('_REGISTER_NAME','Imiê:');
DEFINE('_REGISTER_UNAME','Login:');
DEFINE('_REGISTER_EMAIL','E-mail:');
DEFINE('_REGISTER_PASS','Has³o:');
DEFINE('_REGISTER_VPASS','Powtórz has³o:');
DEFINE('_REGISTER_REQUIRED','Pola oznaczone gwiazdk± (*) musz± byæ wype³nione.');
DEFINE('_BUTTON_SEND_REG','Zarejestruj');
DEFINE('_SENDING_PASSWORD','Twoje has³o zostanie wys³ane na powy¿szy adres e-mail. Kiedy ju¿ otrzymasz nowe has³o, mo¿esz siê zalogowaæ i je zmieniæ.');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','Szukaj');
DEFINE('_PROMPT_KEYWORD','S³owo kluczowe');
DEFINE('_SEARCH_MATCHES','Znaleziono %d wynik(ów)');
DEFINE('_CONCLUSION','W sumie znaleziono $totalRows wynik(ów). Szukaj <b>$searchword</b> z');
DEFINE('_NOKEYWORD','Nie znaleziono wyników.');
DEFINE('_IGNOREKEYWORD','Jedno lub wiêcej s³ów zosta³y zignorowane podczas wyszukiwania');
DEFINE('_SEARCH_ANYWORDS','Dowolne s³owa');
DEFINE('_SEARCH_ALLWORDS','Wszystkie s³owa');
DEFINE('_SEARCH_PHRASE','Dok³adny wyraz');
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
DEFINE('_NEWSFLASH_BOX','W skrócie!');
DEFINE('_MAINMENU_BOX','Menu serwisu');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','Menu u¿ytkownika');
DEFINE('_HI','Witaj ');

/** user.php */
DEFINE('_SAVE_ERR','Proszê wype³niæ wszystkie pola.');
DEFINE('_THANK_SUB','Dziêkujemy za Twoj± propozycjê. Twoja propozycja zostanie sprawdzona przez administratora zanim zostanie opublikowana na naszej stronie.');
DEFINE('_UP_SIZE','Nie mo¿esz wgrywaæ plików przekraczaj±cych rozmiar 15 kB.');
DEFINE('_UP_EXISTS','Grafika $userfile_name ju¿ istnieje. Zmieñ nazwê pliku i spróbuj ponownie.');
DEFINE('_UP_COPY_FAIL','B³±d wgrywania');
DEFINE('_UP_TYPE_WARN','Mo¿esz wgrywaæ wy³±cznie pliki .gif lub .jpg.');
DEFINE('_MAIL_SUB','Propozycja u¿ytkownika');
DEFINE('_MAIL_MSG','Witaj $adminName,\n\nZaproponowano $type, $title, przez $author'
.' dla serwisu $mosConfig_live_site.\n'
.'Udaj siê do $mosConfig_live_site/administrator/ by przejrzeæ i ewentualnie zatwierdziæ $type.\n\n'
.'Prosimy nie odpowiadaæ na t± wiadomo¶æ - zosta³a ona wygenerowana automatycznie dla celów informacyjnych\n');
DEFINE('_PASS_VERR1','W przypadku zmiany has³a prosimy o jego dwukrotn± weryfikacjê.');
DEFINE('_PASS_VERR2','Zmieniaj±c has³o upewnij siê, ¿e poda³e¶ je dwukrotnie prawid³owo.');
DEFINE('_UNAME_INUSE','Ten login jest ju¿ zajêty.');
DEFINE('_UPDATE','Aktualizuj');
DEFINE('_USER_DETAILS_SAVE','Twoje ustawienia zosta³y zapisane.');
DEFINE('_USER_LOGIN','Logowanie u¿ytkownika');

/** components/com_user */
DEFINE('_EDIT_TITLE','Zmieñ swoje dane');
DEFINE('_YOUR_NAME','Twoje imiê:');
DEFINE('_EMAIL','E-mail:');
DEFINE('_UNAME','Login:');
DEFINE('_PASS','Has³o:');
DEFINE('_VPASS','Powtórz has³o:');
DEFINE('_SUBMIT_SUCCESS','Zakoñczono pomy¶lnie!');
DEFINE('_SUBMIT_SUCCESS_DESC','Twoja propozycja zosta³a poprawnie wys³ana do naszych administratorów. Zostanie ona sprawdzona zanim zostanie opublikowana na naszej stronie.');
DEFINE('_WELCOME','Witaj!');
DEFINE('_WELCOME_DESC','Witaj w sekcji u¿ytkownika naszej strony.');
DEFINE('_CONF_CHECKED_IN','Elementy zablokowane zosta³y teraz odblokowane');
DEFINE('_CHECK_TABLE','Sprawdzanie tabeli');
DEFINE('_CHECKED_IN','Zaznaczone ');
DEFINE('_CHECKED_IN_ITEMS',' pozycji');
DEFINE('_PASS_MATCH','Has³a nie zgadzaj± siê');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','Musisz wybraæ nazwê dla klienta.');
DEFINE('_BNR_CONTACT','Musisz wybraæ kontakt z klientem.');
DEFINE('_BNR_VALID_EMAIL','Musisz wybraæ poprawny adres e-mail klienta.');
DEFINE('_BNR_CLIENT','Musisz wybraæ klienta,');
DEFINE('_BNR_NAME','Musisz wybraæ nazwê dla bannera.');
DEFINE('_BNR_IMAGE','Musisz wybraæ plik grafiki bannera.');
DEFINE('_BNR_URL','Musisz wybraæ URL lub w³asny kod dla bannera.');

/** components/com_login */
DEFINE('_ALREADY_LOGIN','Ju¿ jeste¶ zalogowany(a)!');
DEFINE('_LOGOUT','Kliknij tutaj by siê wylogowaæ');
DEFINE('_LOGIN_TEXT','U¿yj pól loginu i has³a by uzyskac pe³en dostêp');
DEFINE('_LOGIN_SUCCESS','Zosta³e¶ pomy¶lnie zalogowany');
DEFINE('_LOGOUT_SUCCESS','Zosta³e¶ pomy¶lnie wylogowany');
DEFINE('_LOGIN_DESCRIPTION','By uzyskaæ dostêp do strze¿onej czê¶ci serwisu, proszê siê zalogowaæ');
DEFINE('_LOGOUT_DESCRIPTION','Aktualnie jeste¶ zalogowany w prywatnej cze¶ci serwisu');

/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','Odno¶niki');
DEFINE('_WEBLINKS_DESC','Czêsto przegl±damy zasoby sieci WWW. Je¿eli znajdujemy co¶ ciekawego dzielimy siê tym na tej li¶cie'
.' aby¶ równie¿ móg³ to zobaczyæ.<br />Wska¿ z poni¿szej listy tematykê odsy³aczy a nastêpnie wybierz stronê, któr± chcesz odwiedziæ.');
DEFINE('_HEADER_TITLE_WEBLINKS','Odno¶nik');
DEFINE('_SECTION','Sekcja:');
DEFINE('_SUBMIT_LINK','Zaproponuj odno¶nik');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','Opis:');
DEFINE('_NAME','Nazwa:');
DEFINE('_WEBLINK_EXIST','Ju¿ jest odno¶nik z tak± nazw±, zmieñ na inn±.');
DEFINE('_WEBLINK_TITLE','Odno¶nik musi mieæ nazwê.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','Nazwa serwisu');
DEFINE('_FEED_ARTICLES','# artyku³ów');
DEFINE('_FEED_LINK','Odno¶nik');

/** whos_online.php */
DEFINE('_WE_HAVE', 'Aktualnie jest ');
DEFINE('_AND', ' oraz ');
DEFINE('_GUEST_COUNT','$guest_array go¶æ');
DEFINE('_GUESTS_COUNT','$guest_array go¶ci');
DEFINE('_MEMBER_COUNT','$user_array u¿ytkownik');
DEFINE('_MEMBERS_COUNT','$user_array u¿ytkowników');
DEFINE('_ONLINE',' online');
DEFINE('_NONE','Brak u¿ytkowników online');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','Czas');
DEFINE('_MEMBERS_STAT','U¿ytkownicy');
DEFINE('_HITS_STAT','Ods³ony');
DEFINE('_NEWS_STAT','Newsy');
DEFINE('_LINKS_STAT','Odno¶niki');
DEFINE('_VISITORS','odwiedzaj±cych');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* Pierwszy element w kolejno¶ci dla tego menu [mainmenu] bêdzie wy¶wietlany jako `Strona g³ówna` w tym serwisie *');
DEFINE('_MAINMENU_DEL','* Nie mo¿esz `usun±æ` tego elementu, gdy¿ jest on wymagany do prawid³owej pracy systemu Mambo *');
DEFINE('_MENU_GROUP','* Niektóre `Rodzaje menu` wystêpuj± wiêcej ni¿ w jednej grupie *');

/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Dane u¿ytkownika' );
DEFINE('_NEW_USER_MESSAGE', 'Witaj %s,


Zosta³e¶ dodany jako u¿ytkownik %s przez Administratora.

Ten e-mail zawiera dane niezbêdne do zalogowania siê na %s:

Login - %s
Has³o - %s


Prosimy nie odpowiadaæ na t± wiadomo¶æ - zosta³a ona wygenerowana automatycznie dla celów informacyjnych');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', 'Oto jest e-mail od u¿ytkownika %s

Tre¶æ:
' );

// dominiq 5.04 2005
$mies1 = array("styczeñ","luty","marzec","kwiecieñ","maj","czerwiec","lipiec","sierpieñ","wrzesieñ","pa¼dziernik","listopad","grudzieñ");
$mies2 = array("stycznia","lutego","marca","kwietnia","maja","czerwca","lipca","sierpnia","wrze¶nia","pa¼dziernika","listopada","grudnia");

?>
