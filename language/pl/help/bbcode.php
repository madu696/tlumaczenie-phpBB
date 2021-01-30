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
 *
 * @Polska wersja językowa phpBB 3.3.3 - 30.01.2021, Mateusz Dutko (vader) www.rnavspotters.pl
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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Wstawianie obrazków i załączników',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Wprowadzenie',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Tworzenie odnośników',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Tworzenie list',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Różne',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Cytowanie i wstawianie tekstu o stałej szerokości znaków',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Formatowanie tekstu',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Załączniki mogą być wstawiane do postów za pomocą znacznika <strong>[attachment=][/attachment]</strong>. Aby można go było używać, funkcja załączników na forum musi być włączona przez administratora witryny i użytkownicy muszą mieć odpowiednie uprawnienia. Na stronie tworzenia posta znajduje się etykieta „Dodaj załącznik” po kliknięciu, której otwiera się formularz dodawania załączników.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Wstawianie załączników do posta',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'BBCode używane w phpBB zawiera znacznik umożliwiający wstawianie obrazków do postów. Należy jednak pamiętać o dwóch istotnych kwestiach: wielu użytkowników nie lubi wielu obrazków w postach oraz wstawiany obrazek musi być dostępny w internecie – nie może istnieć tylko na komputerze lokalnym, chyba że jest on serwerem. Aby wstawić obrazek, należy zawrzeć jego adres URL pomiędzy znacznikami <strong>[img]</strong> i <strong>[/img]</strong>. Na przykład:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Jeśli obrazek ma być odnośnikiem do jakiejś strony, należy jego adres URL umieścić pomiędzy znacznikami <strong>[url]</strong> i <strong>[/url]</strong> w następujący sposób:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br /> Tak przygotowany odnośnik może wyglądać tak:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Wstawianie obrazków do posta',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode jest specjalną implementacją języka HTML, która daje lepszą kontrolę formatowania poszczególnych elementów w postach. Używanie BBCode na forum jest uzależnione od ustawień określanych przez administratora. Można wyłączyć BBCode w poszczególnych postach, zaznaczając odpowiednią funkcję w formularzu tworzenia posta. Sam BBCode jest podobny w składni do języka HTML, ale znaczniki zawarte są w nawiasach kwadratowych [przykład] zamiast w używanych w HTML-u nawiasach ostrych &lt;przykład&gt;. Każdy znacznik składa się ze znacznika otwierającego <strong>[</strong><em>nazwa_znacznika</em><strong>]</strong> i zamykającego <strong>[/</strong><em>nazwa_znacznika</em><strong>]</strong>, np. <strong>[b][/b]</strong>. Zależnie od używanego szablonu można w bardzo łatwy sposób dodawać znaczniki BBCode do postów, używając odpowiednich przycisków znajdujących się na górze formularza tworzenia posta.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Co to jest BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'BBCode stosowany w phpBB umożliwia tworzenie URI (Uniform Resource Indicators), znanych też pod nazwą adresów URL oraz adresów www, na kilka różnych sposobów.<ul><li>Pierwszy z nich wykorzystuje znacznik <strong>[url=][/url]</strong>. Wszystko, co zostanie wprowadzone za znakiem = zostanie uznane za adres URL. Na przykład, aby wstawić odnośnik do phpBB.com, gdzie opisem odnośnika będzie <a href="http://www.phpbb.com/">Odwiedź phpBB!</a> należy użyć kodu:<br /><br /><strong>[url=http://www.phpbb.com]</strong>Odwiedź phpBB!<strong>[/url]</strong>.<br /><br />Odnośnik ten będzie otwierał się w tym samym lub nowym oknie – zależnie od ustawień przeglądarki użytkownika.</li><li>Jeżeli sam adres URL ma być wyświetlany jako opis odnośnika, należy użyć takiej konstrukcji znacznika:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br /> Taki kod wygeneruje następujący odnośnik: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Dodatkowo phpBB zawiera funkcję zwaną <em><strong>magiczne odnośniki</strong></em>, która zmienia syntaktycznie (składniowo) poprawny adres URL na odnośnik, bez potrzeby dodawania jakichkolwiek znaczników lub nawet dopisywania na początku oznaczenia protokółu http://. Na przykład wpisanie www.phpbb.com w treści, zostanie automatycznie poprzedzone http:// i stanie się odnośnikiem <a href="http://www.phpbb.com/">www.phpbb.com</a> podczas wyświetlania posta czy prywatnej wiadomości.</li><li>Podobnie jest z adresami e-mail. Można użyć znacznika BBCode <strong>[email][/email]</strong>. Adres e-mail zapisany w postaci<br /><br /><strong>[email]</strong>basia@domena.adr<strong>[/email]</strong><br /><br />będzie wyświetlany jako <a href="mailto:basia@domena.adr">basia@domena.adr</a>. Można także po prostu wpisać basia@domena.adr. Adres ten podczas wyświetlania posta, czy prywatnej wiadomości, jeśli nie jest wyłączona funkcja magicznych odnośników, zostanie automatycznie zamieniony, tak jak w przypadku adresów URL, na odnośnik.</li></ul>Adresy URL można wstawiać także do innych znaczników BBCode, takich jak <strong>[img][/img]</strong>, <strong>[b][/b]</strong>, itp. Zawsze należy pamiętać, aby prawidłowo otwierać i zamykać – zachować właściwą kolejność – znaczniki. Na przykład taka konstrukcja znaczników:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />jest <span style="text-decoration: underline">nieprawidłowa</span> i może spowodować usunięcie posta, zatem należy zachować ostrożność i uważnie wstawiać znaczniki.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Odnośniki do innych stron',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Drugi typ list – rozmieszczona hierarchicznie, umożliwia kontrolę nad tym, co jest wyświetlane przed każdym elementem. Aby utworzyć listę numerowaną, należy użyć znacznika <strong>[list=1][/list]</strong>, listę alfabetyczną – <strong>[list=a][/list]</strong>. Podobnie, jak w liście wypunktowanej poszczególne elementy listy są oznaczane znacznikiem <strong>[*]</strong>. Na przykład, aby utworzyć listę numerowaną:<br /><br /><ol style="list-style-type: decimal;"><li>Idź do sklepu</li><li>Kup nowy komputer</li><li>Przeklnij go, gdy się zawiesi</li></ol>należy zastosować następujący kod:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Idź do sklepu<br /><strong>[*]</strong>Kup nowy komputer<br /><strong>[*]</strong>Przeklnij go, gdy się zawiesi<br /><strong>[/list]</strong><br /><br />Aby utworzyć listę alfabetyczną:<br /><br /><ol style="list-style-type: lower-alpha"><li>Pierwsza odpowiedź</li><li>Druga odpowiedź</li><li>Trzecia odpowiedź</li></ol>należy zastosować następujący kod:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Pierwsza odpowiedź<br /><strong>[*]</strong>Druga odpowiedź<br /><strong>[*]</strong>Trzecia odpowiedź<br /><strong>[/list]</strong><br /><br /> lub <br /><ol style="list-style-type: upper-alpha"><li>Pierwsza odpowiedź</li><li>Druga odpowiedź</li><li>Trzecia odpowiedź</li></ol>należy zastosować następujący kod:<br /><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Pierwsza odpowiedź<br /><strong>[*]</strong>Druga odpowiedź<br /><strong>[*]</strong>Trzecia odpowiedź<br /><strong>[/list]</strong><br /><br />Możesz również utworzyć listę: <br /><br /><ol style="list-style-type: lower-roman"><li>Pierwsza odpowiedź</li><li>Druga odpowiedź</li><li>Trzecia odpowiedź</li></ol>należy zastosować następujący kod:<br /><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Pierwsza odpowiedź<br /><strong>[*]</strong>Druga odpowiedź<br /><strong>[*]</strong>Trzecia odpowiedź<br /><strong>[/list]</strong><br /><br /> lub <br /><ol style="list-style-type: upper-roman"><li>Pierwsza odpowiedź</li><li>Druga odpowiedź</li><li>Trzecia odpowiedź</li></ol>należy zastosować następujący kod:<br /><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Pierwsza odpowiedź<br /><strong>[*]</strong>Druga odpowiedź<br /><strong>[*]</strong>Trzecia odpowiedź<br /><strong>[/list]</strong><br /><br />',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Tworzenie listy rozmieszczonej hierarchicznie',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode umożliwia tworzenie dwóch rodzajów list: wypunktowanej i rozmieszczonej hierarchicznie. Są one w zasadzie takie same, jak ich odpowiedniki w języku HTML. Lista wypunktowana przedstawia kolejne pozycje jedna po drugiej, oznaczając każdą znakiem wypunktowania w formie kropki. Aby utworzyć listę wypunktowaną, należy użyć znacznika <strong>[list][/list]</strong> i oznaczyć każdą pozycję za pomocą znacznika <strong>[*]</strong>. Przykładowo, aby utworzyć listę ulubionych kolorów:<br /><br /><ul><li>Czerwony</li><li>Niebieski</li><li>Żółty</li></ul>należy zastosować następujący kod:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Czerwony<br /><strong>[*]</strong>Niebieski<br /><strong>[*]</strong>Żółty<br /><strong>[/list]</strong><br /><br />Możesz również zmienić styl listy wypunktowanej używając <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> lub <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Tworzenie listy wypunktowanej',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Możliwość dodawania własnych znaczników mają administratorzy witryny posiadający odpowiednie uprawnienia.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Czy można dodawać własne znaczniki?',
	
	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Jeśli zachodzi potrzeba wstawienia do posta kawałka kodu lub cokolwiek, co wymaga stałej szerokości znaków, należy użyć znacznika <strong>[code][/code]</strong>. Przykład: <br /><br /><strong>[code]</strong>echo &quot;Oto jakiś kod&quot;;<strong>[/code]</strong><br /><br /> Żadne znaki formatowania użyte między znacznikami <strong>[code]</strong> i <strong>[/code]</strong> nie będą przetwarzane podczas wyświetlania i zostaną wyświetlone w oryginalnej formie.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Wstawianie kodu lub tekstu o stałej szerokości znaków',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Są dwa sposoby cytowania tekstu – z odwołaniem i bez.<ul><li>Cytując tekst podczas odpowiedzi na post, tekst posta jest dołączany do odpowiedzi w postaci bloku zawartego pomiędzy znacznikami <strong>[quote=&quot; &quot;][/quote]</strong>. Ta metoda umożliwia cytowanie z podaniem odwołania do autora posta lub innego dowolnego źródła. Na przykład, aby zacytować kawałek tekstu napisanego przez użytkownika o identyfikatorze „Adam”, należy napisać: <br /><br /><strong>[quote=&quot;</strong>Adam<strong>&quot;]</strong>Tekst, który napisał Adam<strong>[/quote]</strong><br /><br /> Wynikiem tego będzie wyświetlanie przed cytowanym tekstem frazy <strong>&ldquo;Adam pisze:</strong>. Należy <strong>obowiązkowo</strong> wstawić znaki cytowania (&quot; &quot;) wokół cytowanej nazwy źródła. W tym przypadku cytowanym źródłem jest „Adam”.</li><li>Druga metoda pozwala cytować tekst bez podawania źródła. Aby jej użyć, należy cytowany tekst umieścić między znacznikami <strong>[quote]</strong> i <strong>[/quote]</strong>. Wynikiem tak użytych znaczników cytowania będzie wyświetlanie przed cytowanym tekstem znaku <strong>&ldquo;</strong>.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Cytowanie tekstu w odpowiedziach',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode zawiera znaczniki umożliwiające szybką zmianę podstawowego wyglądu tekstu. Można to uzyskać w następujący sposób:<ul><li>Aby pogrubić jakiś tekst, należy wstawić go pomiędzy znaczniki <strong>[b][/b]</strong>. Przykład: <br /><br /> <strong>[b]</strong>Tekst<strong>[/b]</strong><br /><br /> będzie wyświetlany jako <strong>Tekst</strong></li><li>Aby pochylić jakiś tekst, należy wstawić go pomiędzy znaczniki <strong>[i][/i]</strong>. Przykład: <br /><br /><strong>[i]</strong>Tekst<strong>[/i]</strong><br /><br /> będzie wyświetlany jako <em>Tekst</em></li><li>Aby podkreślić jakiś tekst, należy wstawić go pomiędzy znaczniki <strong>[u][/u]</strong>. Przykład: <br /><br /><strong>[u]</strong>Tekst<strong>[/u]</strong><br /><br /> będzie wyświetlany jako <u>Tekst</u>.</li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Jak utworzyć pogrubiony, pochylony lub podkreślony tekst?',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Aby zmienić kolor lub rozmiar tekstu można użyć znaczników wymienionych poniżej. Końcowy rezultat użycia znaczników formatujących zależy od używanej przeglądarki i systemu operacyjnego.<ul><li>Zmianę koloru tekstu można uzyskać poprzez zawarcie tekstu pomiędzy znacznikami <strong>[color=]</strong> <strong>[/color]</strong>. Po znaku = należy podać nazwę koloru, np. red, blue, yellow, albo wartość szesnastkową, np. #FFFFFF, #000000. Przykładowo, aby uzyskać tekst w <span style="color:red">kolorze czerwonym</span>, należy użyć kodu: <br /><br /><strong>[color=</strong>red<strong>]</strong>kolorze czerwonym<strong>[/color]</strong><br /><br /> albo <br /><br /><strong>[color=</strong>#FF0000<strong>]</strong>kolorze czerwonym<strong>[/color]</strong><br /><br /></li><li>Zmianę rozmiaru tekstu można uzyskać podobnie, jak i w przypadku koloru poprzez zawarcie tekstu pomiędzy znacznikami <strong>[size=]</strong> <strong>[/size]</strong>. Ten znacznik jest uzależniony od używanego szablonu, niemniej zalecanym formatem jest wartość liczbowa wyrażona w procentach, określająca rozmiar tekstu począwszy od wartości 20 – bardzo mały, aż do 200 – bardzo duży. Na przykład, aby uzyskać: <br /><br /><span style="font-size:30%;">mały rozmiar tekstu</span> należy użyć kodu <strong>[size=</strong>30<strong>]</strong>mały rozmiar tekstu<strong>[/size]</strong>. <br /><br />Natomiast, aby uzyskać: <br /><br /><span style="font-size:200%;">duży rozmiar tekstu</span>, należy użyć kodu <strong>[size=</strong>200<strong>]</strong>duży rozmiar tekstu<strong>[/size]</strong>.</li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Jak zmienić kolor lub rozmiar tekstu?',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Tak, naturalnie, że można. Na przykład, aby zwrócić czyjąś uwagę, można napisać: <br /><br /><strong>[size=</strong>200<strong>][color=</strong>red<strong>][b]</strong>POPATRZ NA MNIE!<strong>[/b][/color][/size]</strong>.<br /><br /> Tak napisany kod zostanie wyświetlony następująco: <br /><br /><span style="color:red;font-size:200%;"><strong>POPATRZ NA MNIE!</strong></span><br /><br /> Nie zaleca się nadużywania w tekście tego typu formatowania. Proszę pamiętać o prawidłowym domykaniu znaczników – zachowaniu poprawnej ich kolejności. Na przykład następujący kod jest nieprawidłowy: <br /><br /><strong>[b][u]</strong>Tekst<strong>[/b][/u]</strong>.<br /><br /> Po słowie Tekst powinien zostać użyty znacznik zamykający <strong>[/u]</strong> Prawidłowa konstrukcja tego kodu powinna wyglądać następująco: <br /><br /><strong>[b][u]</strong>Tekst<strong>[/u][/b]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Czy można łączyć znaczniki formatujące?',
));
