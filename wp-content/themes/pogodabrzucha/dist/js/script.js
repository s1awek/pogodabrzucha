function showTarget(e){document.getElementById("popup").style.visibility="visible","success"==e?document.getElementById("DivSuccess").style.display="block":"Err"==e&&(document.getElementById("DivErr").style.display="block")}function closeTarget(){document.getElementById("popup").style.visibility="hidden",document.getElementById("DivSuccess").style.display="none",document.getElementById("DivErr").style.display="none",document.getElementById("post-codes").reset()}function showErr(e){var i,a;"code"==e?(a=(i=document.getElementById("errCode")).closest(".delivery__inner"),i.style.display="block",a&&a.classList.add("error")):"city"==e&&(a=(i=document.getElementById("errCity")).closest(".delivery__inner"),i.style.display="block",a&&a.classList.add("error"))}jQuery(document).ready(function(e){e("#showDiet").click(function(){e("#diet-menu").toggle(1e3),e("#icon-open-2").toggle("display"),e("#icon-close-2").toggle("display"),e("#showDiet").toggleClass("no-border")}),e("#showInfo").click(function(){e("#infos").toggle(1e3),e("#icon-open-1").toggle("display"),e("#icon-close-1").toggle("display"),e("#showInfo").toggleClass("no-border")}),e("#cookies_close").click(function(){e("#cookies").hide(1e3)});const i=()=>document.querySelector("#ast-desktop-header").getClientRects()[0]?document.querySelector("#ast-desktop-header").getClientRects()[0].height:0,a=e=>{e?(document.querySelector("#content").style.paddingTop=Math.floor(e)+"px",document.querySelector("#masthead").classList.add("sticky")):(document.querySelector("#content").style.paddingTop="",document.querySelector("#masthead").classList.remove("sticky"))};let o=i(),n=!1;window.addEventListener("resize",e=>{o=i(),n?a(o):a()}),window.addEventListener("scroll",e=>{window.scrollY?(document.querySelector("body").classList.add("scrolled"),n=!0,a(o)):(document.querySelector("body").classList.remove("scrolled"),n=!1,a())})}),document.addEventListener("DOMContentLoaded",function(){if(document.querySelectorAll(".splide").length){let e=new Splide(".splide",{perPage:3,perMove:1,type:"loop",pagination:!1,autoplay:!0,breakpoints:{1600:{perPage:2},1200:{perPage:1}}});e.mount()}});var slideIndexR=1;function plusSlidesR(e){showSlidesR(slideIndexR+=e)}function showSlidesR(e){var i,a=document.getElementsByClassName("section-reviews__row--desc");for(e>a.length&&(slideIndexR=1),e<1&&(slideIndexR=a.length),i=0;i<a.length;i++)a[i].style.display="none";a.length&&(a[slideIndexR-1].style.display="flex")}showSlidesR(slideIndexR);var slideIndexM=1;function plusSlidesM(e){showSlidesM(slideIndexM+=e)}function showSlidesM(e){var i,a=document.getElementsByClassName("section-reviews__row--mobile");for(e>a.length&&(slideIndexM=1),e<1&&(slideIndexM=a.length),i=0;i<a.length;i++)a[i].style.display="none";a.length&&(a[slideIndexM-1].style.display="flex")}function getVal(){var e=document.getElementById("errCode"),i=document.getElementById("errCity");document.querySelectorAll(".delivery__inner").forEach(e=>{e.classList.remove("error")}),"block"===e.style.display?e.style.display="none":"block"==i.style.display&&(i.style.display="none");const a=["Adamowice","Aleksandrowice","Aleksandrów","Aleksandrów Łódzki","Alwernia","Andrespol","Andrychów","Antoniew","Augustów","Babice","Babice","Balice","Balin","Bańska Niżna","Bańska Wyżna","Baranowo","Baranówka","Barbarka","Bartolin","Barwałd Górny","Barwałd Średni","Batorowo","Batowice","Bąków","Bąkówka","Bedoń Przykościelny","Bębło","Bęczarka","Będkowice","Będzieszyna","Będzin","Białka Tatrzańska","Białków","Biały Dunajec","Biały Kościół","Białystok","Bibice","Biczyce Górne","Biczyce Górne","Biedrusko","Bielany","Bielany Wrocławskie","Bielawa","Bielsko-Biała","Bieńkowice","Bieńkówka","Biertowice","Biestrzyków","Bilczyce","Bilsko","Biórków Mały","Biórków Wielki","Biskupice","Biskupice","Biskupice","Biskupice","Blizne Łaszczyńskiego","Błogocice","Błonie","Błonie","Bobrek","Bobrowiec","Bobrowniki","Bobrowniki Małe","Bobrowniki Wielkie","Bochnia","Bodzanów","Bogucin","Bogucin Duży","Bogucin Mały","Bogucin Wielki","Bogumiłowice","Bolechowice","Bolechowo","Boleń","Bolesław","Bolęcin","Borek","Borek Szlachecki","Borowa","Borówiec","Borówna ","Boryszew","Borzęcin Duży","Borzęta ","Bosutów","Bór","Breń","Brnik","Bronisin Dworski","Brończyce","Broszkowice","Brzegi","Brzesko","Brzeszcze","Brzezie","Brzezina","Brzezinka","Brzezinka","Brzeziny ","Brzezińka Średzka","Brzeźnica","Brzeźnica","Brzoskwinia","Brzozówka","Brzozówka","Brzuchacze","Brzyczyna","Budy Wandalińskie","Budziejowice","Budzów","Budzyń","Budzyń","Buk","Bukowiec","Bukowina","Bukowina Tatrzańska","Bukowno","Bukowska Wola","Buków","Bulowice","Burów","Bustryk","Bydgoszcz","Byków","Bysina","Bystra","Byszewy","Byszyce","Bytom","Celiny","Celiny Przesławickie","Cesarka","Cesarzowice","Chabówka","Charsznica","Chełm","Chełm","Chełmiec","Chobędza","Chocznia","Chodów","Chodzież","Cholerzyn","Chorągwica","Chorążyce","Chorowice","Chorzów","Chotomów ","Chronów","Chrosna","Chrzanów","Chrzanów","Chrząstawa Mała","Chrząstawa Wielka","Chrząstowice","Chudów","Chyby","Chylice","Chyliczki","Cianowice","Ciche","Cienin","Cieplice","Ciszowice","Ciszyca","Czajowice","Czaple Małe","Czaple Wielkie","Czapury","Czarnochowice","Czarny Dunajec","Czchów","Czechowice-Dziedzice","Czechówka","Czechy","Czeladź","Czempiń","Czernica","Czernichów","Czernidła","Czerwienne","Czerwonak","Częstochowa","Czubrowice","Czulice","Czułów ","Czułówek","Dalewice","Damice","Daszewice","Dawidy","Dawidy Bankowe","Dąbrowa","Dąbrowa","Dąbrowa ","Dąbrowa Chotomska","Dąbrowa Górnicza","Dąbrowa Szlachecka","Dąbrowa Tarnowska","Dąbrówka","Dąbrówka","Dębina Łętowska","Dębina Zakrzowska","Dębno","Długa Kościelna","Długa Szlachecka","Długołęka","Dobczyce","Dobra","Dobranowice","Dobra-Nowiny","Dobrzykowice","Dodów","Dojazdów","Domaniew","Domasław","Domaszczyn","Domiarki","Dopiewiec","Dopiewo","Droginia","Drużków pusty","Drzonków","Duchnice","Duchnów","Dulowa","Dziekanowice","Dziekanowice","Dziekanów Leśny","Dziekanów Nowy","Dziekanów Polski","Dziewięcioły","Emów","Falenty","Falenty Duże","Falenty Nowe","Falniów","Falniów-Wysiołek","Fałkowice","Gaj","Gajków","Galowice","Gałów","Garby","Garlica Duchowna","Garlica Murowana","Garliczka","Gassy","Gądki","Gądów","Gdańsk","Gdów","Gdynia","Giebułtów","Giemzów","Gierałtowice","Gliczarów Dolny","Gliczarów Górny","Glinica","Glisne","Gliwice","Głęboka","Głębowice","Głogoczów","Głogowiec","Gnatowice","Gniazdowice","Gniezno","Gnojnik","Goczałkowice-Zdrój","Golkowice","Gołaczewy","Gołcza","Gołuchowice","Gołyszyn","Gortatowo","Gorzew ","Gorzków","Gorzków","Gorzów Wielkopolski","Gosławice","Gospodarz","Gosprzydowa","Gostyń","Gotkowice","Gowarzewo","Góra Pabianicka","Góraszka","Górna Wieś","Grabie","Graboszyce","Grabówki","Grajów","Granica ","Grębynice","Groblice","Grodzisk Wielkopolski","Grodzisko","Grodzisko","Grodzisko","Grojec","Gronków","Groń","Grzegorzowice Małe","Grzegorzowice Wielkie","Habdzin","Halinów","Harklowa","Harmęże","Hipolitów ","Inwałd","Iwanowice Dworskie","Iwanowice Włościańskie","Iwiny","Iwkowa","Izabela","Izabelin","Jabłonna","Jachówka","Jadowniki","Jaksice","Janikowice","Janikowo","Janki","Jankowice","Jankowice  ","Jankówka","Janowice","Janowiczki","Janów","Januszowice","Januszowice","Jaroszowiec","Jasienica","Jasienica","Jasień","Jasin","Jastew","Jastrzębie Zdrój","Jawczyce","Jawiszowice","Jawornik","Jaworowa","Jaworze","Jaworzno","Jazdowiczki","Jazgarzewszczyzna","Jelonek","Jerzmanowice","Jesówka","Jeszkowice","Jeziorzany","Jodłówka","Jordanów","Józefosław","Józefów","Julianów","Jurczyce","Jurków","Juszczyn","Kacice","Kaczowice","Kalina-Lisiniec","Kalina-Rędziny","Kaliś","Kalwaria Zebrzydowska","Kamienica","Kamieniec Wrocławski","Kamieńczyce","Kamionka","Kamionki","Kanina","Kaputy","Kargowa","Karniowice","Karniów","Karwiany","Kasinka Mała","Kaszów","Katowice","Kąty","Kąty","Kąty Wrocławskie","Kębłowice","Kępa","Kępa Bogumiłowicka","Kępa Oborska","Kępa Okrzewska","Kęty","Kicin","Kiekrz","Kielce","Kiełczów","Kiełczówek","Kiełmina","Kiełpin","Kierszek","Klaudyn","Klecza Dolna","Klecza Górna","Kleszczów","Klęk","Klucze","Kłaj","Knurów","Kobierzyce","Kobiór","Kobylany","Kobyle","Kobyłka","Kochanów","Kocmyrzów","Koczargi Nowe","Kogutek","Kokotów","Kolonia Brużyca","Komorniki","Komorniki","Komorowice","Komorów","Komorów","Komorów ","Konary","Koniusza","Konstancin-Jeziorna","Konstantynów Łódzki","Kończyce","Kopaliny","Kopanka","Koprki","Korzkiew","Kostrzyn","Koszyce Małe","Koszyce Wielkie","Kościan","Kościelisko","Kowary","Koziegłowy","Kozierów","Kozy","Koźmice Małe","Koźmice Wielkie","Kórnik","Kraków","Krasieniec Stary","Krasieniec Zakupny","Krasne Potockie","Krauszów","Krążek","Krępa","Krępice","Kryniczno","Kryspinów","Krzczonów","Krzeczów","Krzeczów","Krzeptów","Krzeszowice","Krzyków","Krzyszkowice","Krzysztoforzyce","Krzywaczka ","Krzyżanowice","Ksawerów","Książniczki ","Księginice","Kulerzów","Kuleszówka","Kurów","Kwaczała","Lasek","Laski","Laski Dworskie","Laszczki","Lednica Górna","Legionowo","Leksandrowa","Lesieniec","Leszno","Lesznowola","Leśniakowizna","Leśnica","Lewniowa","Lgota wielka","Libertów","Libiąż","Ligota Piękna","Limanowa","Lipna Wola","Lipnica Dolna","Lipnica Górna","Lipnica Murowana","Lisia Góra","Liszki","Lizawice","Lubień","Lublin","Luboń","Luborzyca","Ludźmierz","Lusina","Lusowo","Lusówko","Luszowice","Lutynia","Łady","Łagiewniki Nowe","Łajski","Łany","Łapczyca","Łazany","Łaziska Górne","Łazy","Łazy","Łazy Biegonickie","Łęczyca","Łęki","Łęki","Łęki ","Łętkowice","Łętkowice-Kolonia","Łętowice","Łętownia","Łężyca","Łodygowice","Łomianki","Łomna","Łomża","Łopoń","Łopuszna","Łososina Dolna","Łowiczki","Łódź","Łuczyce","Łukanowice","Łyczanka","Łyczyn","Łyszkowice","Maciejowice","Magdalenka","Magnice","Majdan","Makocice","Maków","Maków ","Maków Podhalański","Malec","Mała Wieś","Małe Ciche","Marchocice","Marcinkowice","Marki","Marszowice","Maruszyna","Masłomiąca","Maszkienice","Maszków","Maszyce","Mazańcowice","Michałowice","Michałowice","Michałówek","Michałówek","Michałów-Grabina","Michałów-Reginów","Miechów","Miechów-Charsznica","Mietniów ","Miękinia","Miękowo","Mikołajowice","Mikołów","Miłocice","Minoga","Mirków","Młodziejowice","Mników","Modlnica","Modlniczka","Mogilany","Mokronos Dolny","Mokronos Górny","Morawczyna","Morawica","Mordarka","Mory","Mosina","Moszczenica","Moszna Parcele","Moszna Wieś","Mszana Dolna","Muchówka","Muniaczkowice","Muniakowice","Murowana Goślina","Murzasichle","Mysiadło","Mysłowice","Myślenice","Nadarzyn","Nadolice Małe","Nadolice Wielkie","Naprawa","Narama","Nasiechowice","Natolin","Nekla","Nidek","Niebyła","Niedźwiedź","Niedźwiedź  ","Niegardów","Niegardów-Kolonia","Niegoszowice","Nielepice","Niepołomice","Nieporaz","Niepruszewo","Niezdów","Nowa Gadka","Nowa Iwiczna","Nowa Wieś","Nowa Wieś","Nowa Wieś","Nowa Wieś Szlachecka","Nowa Wieś Wrocławska","Nowa Wola","Nowe Bystre","Nowe Dwory","Nowe Grocholice","Nowe Skoszewy","Nowy Kisielin","Nowy Konik","Nowy Sącz","Nowy Targ ","Nowy Wiśnicz","Obidowa","Oborniki","Obory","Obórki","Obrażejowice","Ochmanów","Ochojno","Ojców","Okocim","Okołowice","Okuniew","Oleśnica","Olewin","Olkusz","Olszowice ","Olszyny","Oława","Ołtarzew","Opacz","Opacz Mała","Opacz-Kolonia","Opalenica","Opatkowice","Orłów","Ornontowice","Orzechówek","Orzesze","Osieczany ","Osiek","Osiek","Osielec","Ossów","Ostrowiec Świętokrzyski","Ostrowsko","Ostrów","Ostrów Mazowiecka","Oświęcim","Otwock","Owczary","Ożarów","Ożarów Mazowiecki","Pabianice ","Palczowice","Paniówki","Parkoszowice","Parzniew","Pasikurowice","Paszków","Pawlikowice","Pazurek","Pcim","Pełczyce","Pęcice","Pęcice Małe","Pękowice","Piaseczno","Piasek","Piaski-Drużków","Piastów","Piekary","Piekary Śląskie","Pielgrzymowice","Pietrzejowice","Pietrzykowice","Pietrzykowice","Piła","Piła Kościelecka","Piotrkowice Małe","Piotrkowice Wielkie","Plewiska","Pławy","Płaza","Pobiedziska","Podlesie","Podłęże","Podmiejska Wola","Podolsze","Podolszyn nowy","Podrzecze","Podstolice","Pogorzyce","Pojałowice","Polanka","Polanowice","Polekarcice","Połom Duży","Połom Mały","Ponice","Poradów","Porąbka Iwkowska","Porąbka Uszewska ","Poręba Laskowska","Poręba Spytkowska","Poronin","Porszewice","Posada","Posądza","Poskwitów","Poznań","Prandocin","Prandocin-Iły","Prandocin-Wysiołek","Prądnik Korzkiewski","Proszowice","Proszówki","Prusy","Pruszków","Pruszowice","Przebieczany","Przecieszyn","Przeciszów","Przeginia","Przeginia Duchowna","Przeginia Narodowa","Przemęczanki","Przemęczany","Przesławice","Przesławice","Przestańsko","Przeźmierowo","Przybradz","Przybysławice","Przybysławice","Przybysławice","Przylep","Przyszowice","Psary","Psary","Psary ","Pszczyna","Puchały","Puszczykowo","Pyskowice","Pyzówka","Raba Niżna","Raba Wyżna","Rabka Zdrój","Rabsztyn","Raciborowice","Raciborsko","Racławice","Racławice Wielkie","Racula","Radocza","Radom","Radomierzyce","Radwanice ","Radziemice","Radzionków","Radziszów","Rajbrot","Rajsko","Rajszew","Rakoniewice","Ramiszów","Raszyn","Ratajów","Ratułów","Rąbień","Rąbkowa","Rączna","Rdzawka","Rdziostów","Regulice","Reguły","Rembelszczyzna ","Robakowo","Roczyny","Rogoźno","Rokiciny Podhalańskie","Rokietnica","Romnów","Rożnowa","Ruda Śląska","Rudawa","Rudka ","Rudnik","Rudnik ","Rudno","Rudze","Rybie","Rybnik","Rząska ","Rzeplin","Rzeplin","Rzeszotary","Rzeszów","Rzezawa ","Rzeżuśnia","Rzędowice","Rzgów","Rzozów","Rzyki","Sadków","Sadowa","Sadowice","Sady","Samotwór","Sąspów","Sękocin Nowy ","Sękocin Stary","Sieborowice","Siechnice","Sieciechowice","Sieciechowice","Siedliska","Siedliska","Siedliska","Siemianowice Śląskie","Sieniawa","Sieniczno","Siepraw","Sieraków","Siercza","Sierockie","Sierosław","Skała","Skałka","Skarżysko-Kamienna","Skawa","Skawina","Skidziń","Skomielna Biała","Skotniki","Skórzewo","Skrzypne","Skrzyszów","Sławice Szlacheckie","Sławkowice","Słomiróg","Słomniki","Smardzowice","Smardzów","Smardzów","Smolec","Smoniowice","Smroków","Sokołów","Sopot","Sosnowiec","Sosnowiec","Sośnica","Spalice","Staniątki","Stanowice","Stara Gadka ","Stara Iwiczna","Starachowice","Stare Bystre","Stare Lipiny","Starowa Góra","Stary Imielnik","Stary Konik","Stary Sącz","Stary Wiśnicz","Stawy Monowskie","Stefanów","Stefanówka","Sterkowiec","Stęszew","Stojowice","Stoki","Stoszyce","Stróża","Stróża","Strumiany","Stryków","Strzeniówka","Strzeżów Drugi","Strzeżów Pierwszy","Strzyżowice","Sucha Beskidzka","Suche","Suchy Dwór","Suchy Las","Suchy Las","Sufczyn","Sulechów","Sulechów","Sulejówek","Sułkowice","Sułkowice","Sułkowice","Sułków","Sułów","Suwałki","Swarzędz","Sygneczów","Szaflary ","Szamotuły","Szarów","Szczecin","Szczepanowice","Szczepanowice","Szczodre","Szczodrkowice","Szczyglice","Szczytniki","Szeligówka","Szklana","Szreniawa","Szukalice","Szyce","Szymanów","Szynkielew","Ściejowice","Śledziejowice","Ślęża ","Śrem","Środa Śląska","Środa Wielkopolska","Świątniki Górne","Świebodzin","Święta Katarzyna","Świętochłowice","Świniarsko","Tadzin","Targanice","Targowisko","Tarnobrzeg","Tarnowiec","Tarnowo Podgórne","Tarnowskie Góry","Tarnów","Tenczyn","Tenczynek","Tęgoborze","Tłuczań","Tokarnia","Tomaszkowice","Tomaszowice","Tomice","Toruń","Trąbki","Trątnowice","Trojanowice","Tropie","Truskaw","Trzebienice","Trzebieńczyce","Trzebinia","Trzebunia","Trzemeśnia","Tulce","Turów","Tworkowa","Tychy","Tymowa","Tyniec Mały","Ujazd","Ulina Mała","Ulina Wielka","Uszew","Wadowice","Waganowice","Waksmund","Walendów","Warszawa","Wągrowiec","Wesoła","Węgrzce","Węgrzce Wielkie","Wężerów","Wiązowna","Widoma","Wieliczka","Wielka Wieś","Wielkanoc","Wielki Dół","Wielogłowy","Wielopole ","Wieprz","Wierzbica","Wierzchosławice","Wierzchowisko","Więckowice","Więcławice Dworskie","Więcławice Stare","Wiktorowice","Wilczkowice","Wilczków","Wilczyce","Wilkowice","Wilków","Wilkszyn","Wiórek","Wiry","Wisznia Mała","Wiśliczka","Wiśnicz Mały","Wiśniowa Góra","Witanowice","Witeradów","Witowice","Witowice Dolne","Witowice Górne","Władysław","Władysławów","Włosań ","Włosienica","Wodzisław Śląski","Wojakowa","Wojcieszyn","Wojkowice","Wojkowice","Wojnicz","Wojnowice","Wojnowice","Wola Dębińska","Wola Filipowska","Wola Gołkowska","Wola Luborzycka","Wola Rzędzińska","Wola Zachariaszowska","Wola Zaradzyńska","Wolbrom","Wolica","Wolsztyn","Wołowice","Wódka","Wrocimowice","Wrocław","Wróblowice","Wrząsowice","Września","Wszemiłowice","Wygiełzów","Wymysłów","Wypędy","Wyry","Wysiołek Luborzycki","Wysocice","Wysogotowo","Wysoka ","Wysoka ","Wysokie","Wyszków","Wytrzyszczka ","Wyźrał","Zabagnie","Zabawa","Zabierzów","Zaborze","Zaborze","Zabór wielki","Zabrodzie","Zabrze","Zacharzyce","Zagacie","Zagaje","Zagaje Smrokowskie","Zagaje Zarogowskie","Zagorzyce","Zagórze","Zagórze","Zakliczyn","Zakopane","Zakręt","Zakrzewo","Zakrzowiec","Zakrzów","Zakrzyce","Zalasewo","Zalesie","Zambrów","Zamienie","Zamłynie","Zapustka","Zarogów","Zarzecze","Zaskale","Zastów","Zator","Zawada","Zawada ","Zawada Uszewska","Zawadka","Ząb","Ząbki","Zbylitowska Góra","Zdzięsławice","Zederman","Zelków","Zembrzyce","Zerwana","Zgierz","Zgłobice","Zgorzała","Zielenice","Zielona","Zielona Góra","Zielonki","Zielonki","Zielonki Parcela","Zielonki Wieś","Zimnodół","Znamirowice","Źródła","Żabieniec","Żarnowica","Żelazówka","Żerkowice","Żerniki Małe","Żerniki Wrocławskie","Żory","Żórawina","Żurada","Żurawiniec","Żywiec"];var e=document.querySelector("#postal").value,i=document.querySelector("#city").value,o=["32-075","30-199","05-126","95-070","32-566","95-020","34-120","95-070","16-300","32-551","32-642","30-199","32-500","34-424","34-424","62-081","32-010","32-043","95-010","34-130","34-130","62-081","32-086","51-217","05-500","95-020","32-085","32-400","32-085","32-859","42-500","34-530","55-330","34-425","32-085","15-001","32-086","33-300","33-300","62-003","32-650","55-040","05-510","43-300","32-410","34-211","32-440","50-458","32-420","33-312","32-104","32-104","32-200","55-188","32-095","32-200","05-082","32-107","33-100","55-300","32-660","05-500","42-582","33-121","33-131","32-700","32-020","62-072","32-300","32-300","32-300","33-121","30-199","62-004","32-086","32-329","32-540","32-712","32-050","51-217","62-023","32-724","05-408","05-082","32-400","32-086","34-424","33-140","33-200","95-030","32-090","32-642","32-002","32-800","32-620","30-199","55-330","30-199","32-600","05-074","55-330","32-700","34-113","30-199","32-086","33-140","34-407","32-031","95-006","32-104","34-211","32-060","64-834","64-320","92-701","51-217","34-530","32-332","32-200","32-031","32-650","30-199","34-520","85-000","51-217","32-400","43-360","92-701","32-002","41-902","32-095","32-200","95-010","55-080","34-700","32-250","32-340","32-700","33-300","32-075","34-100","32-250","64-800","32-060","32-002","32-104","32-031","41-500","05-110","32-720","32-060","55-040","32-500","55-002","55-002","32-340","44-177","62-081","05-500","05-500","32-043","34-407","55-188","32-075","32-250","05-510","32-085","32-075","32-075","62-050","32-002","34-407","32-859","43-502","32-406","32-090","41-250","64-020","55-002","32-061","05-510","34-407","62-005","42-200","32-048","32-010","32-060","32-061","32-104","32-095","61-160","05-090","05-090","62-070","92-701","05-092","05-110","41-300","32-061","33-200","92-701","62-070","32-830","32-830","32-828","05-074","05-074","51-217","32-410","95-010","32-002","95-010","55-002","32-107","32-010","05-805","55-040","51-217","32-095","62-069","62-070","32-400","32-861","65-001","05-850","05-408","32-540","32-086","32-410","05-092","05-092","05-092","32-200","05-408","05-090","05-090","05-090","32-200","32-200","32-420","32-031","55-002","55-020","55-330","62-072","32-086","32-086","32-086","05-510","62-023","55-080","81-701","32-420","81-001","32-085","95-006","44-177","34-425","34-425","32-200","34-730","44-100","32-010","32-608","32-400","92-701","32-104","32-100","62-200","32-864","43-230","32-002","32-340","32-075","32-050","32-043","62-072","95-200","32-700","32-002","66-400","33-121","95-030","32-864","43-175","32-048","63-004","95-200","05-408","32-091","32-002","32-640","32-002","32-002","05-806","32-086","55-010","62-065","32-640","32-043","95-030","32-600","34-400","34-405","32-095","32-095","05-510","05-074","34-400","32-600","05-074","34-120","32-095","32-095","50-458","32-861","05-408","05-126","05-110","34-211","32-800","32-200","32-090","62-072","05-090","32-551","55-200","32-020","32-002","32-222","92-701","32-086","32-090","32-310","43-385","32-400","32-800","62-072","32-828","44-330","05-850","32-620","32-400","05-090","43-384","43-600","32-100","05-501","62-072","32-048","05-500","55-002","32-060","32-712","34-234","05-500","05-408","05-500","32-050","32-859","34-220","32-090","32-107","32-200","32-200","32-340","34-130","32-075","55-002","32-200","05-500","62-028","34-600","05-850","66-120","30-199","32-010","52-200","34-730","32-060","40-001","32-861","32-107","55-080","55-080","32-090","33-121","05-510","05-510","32-650","62-005","62-090","25-001","51-217","51-217","95-010","05-092","05-510","05-082","34-100","34-100","30-199","95-010","32-310","32-014","44-190","55-040","43-210","30-199","32-720","05-230","30-199","32-010","05-082","32-300","32-002","95-070","62-052","55-300","52-200","05-806","32-200","32-200","32-031","32-104","05-510","95-050","32-091","32-720","32-050","05-850","32-086","62-024","33-100","33-100","64-000","34-511","32-107","62-005","32-091","43-340","32-002","32-002","62-023","30-001","32-095","32-095","33-300","34-400","32-329","32-075","55-330","55-114","32-060","32-435","32-712","32-433","55-080","32-065","55-002","32-400","32-010","32-440","55-188","95-054","32-091","55-040","32-031","05-500","33-300","32-566","34-400","05-080","32-075","05-090","32-002","05-119","32-720","32-095","64-100","05-501","05-200","34-405","32-864","32-340","32-031","32-590","55-114","34-600","32-090","32-724","32-724","32-724","33-140","32-060","55-200","32-433","20-001","62-030","32-010","34-400","32-031","62-081","62-081","32-500","55-330","05-090","95-001","05-124","55-002","32-700","32-020","43-175","43-385","32-048","33-340","62-052","32-650","32-650","32-400","32-107","32-107","33-121","34-234","65-001","34-300","05-092","32-720","18-400","32-830","34-400","33-312","32-640","90-001","32-010","32-830","32-406","05-510","32-104","32-010","05-501","55-040","05-408","32-100","32-075","32-075","34-220","32-650","32-002","34-520","32-222","55-200","05-270","32-010","34-424","32-091","32-828","32-095","32-043","43-385","32-091","32-091","05-850","95-010","05-126","05-124","32-200","32-250","32-002","55-330","62-005","33-121","43-190","32-090","32-043","51-217","32-091","32-060","32-085","32-085","32-031","55-080","55-080","34-400","32-060","34-600","05-850","61-160","32-700","05-805","05-805","34-730","32-720","32-104","32-090","62-095","34-520","05-501","41-400","32-400","05-830","55-002","55-002","34-234","32-095","32-200","92-701","62-308","34-108","32-043","32-090","32-090","32-104","32-104","30-199","30-199","32-003","32-566","64-320","32-410","95-070","05-501","32-650","32-650","32-043","32-061","55-080","05-501","34-520","34-114","05-090","92-701","65-001","05-074","33-300","34-400","32-720","34-400","64-067","05-510","05-510","32-107","32-003","32-040","32-043","32-800","95-200","05-074","56-400","32-300","32-300","32-040","32-551","55-200","05-850","05-510","05-806","05-806","64-330","32-100","32-090","43-178","95-010","43-180","32-400","32-300","32-300","34-234","05-200","27-400","34-400","33-121","07-300","32-600","05-400","32-086","05-850","05-850","95-200","32-640","44-177","32-200","05-805","51-217","05-830","32-002","32-300","32-431","55-040","05-806","05-806","32-086","05-500","43-200","32-859","05-840","32-060","41-940","32-091","32-010","55-080","34-300","64-920","32-540","32-104","32-104","62-052","32-600","32-500","62-007","32-300","32-003","32-200","32-640","05-090","33-386","32-002","32-500","32-200","32-400","32-090","32-104","32-720","32-861","34-700","32-200","32-861","32-828","32-043","32-800","34-520","95-200","95-006","32-104","32-095","60-001","32-090","32-090","32-090","32-085","32-100","32-700","32-010","05-800","51-217","32-200","32-620","32-641","32-048","32-061","32-061","32-107","32-107","32-200","32-104","32-095","62-081","34-108","32-086","32-043","32-075","65-001","44-177","55-180","42-504","55-114","43-200","05-090","62-040","44-120","34-400","34-730","34-713","34-700","32-300","32-091","32-020","32-222","55-040","65-001","34-103","26-601","50-458","50-458","32-107","41-922","32-050","32-724","32-813","05-110","62-068","51-217","05-090","32-090","34-407","95-070","33-312","32-060","34-700","33-300","32-566","05-806","05-126","62-028","34-120","64-608","34-713","62-090","55-080","32-002","41-700","30-199","33-121","32-410","32-440","32-065","32-640","05-090","44-200","30-199","52-200","32-043","32-040","35-001","32-712","32-075","32-104","95-030","32-050","34-120","55-080","05-092","55-080","62-081","55-080","32-048","05-090","05-090","32-091","50-458","33-121","32-095","05-500","32-200","32-104","41-100","34-713","32-300","32-406","32-410","32-002","34-425","62-080","32-043","55-080","26-110","34-713","32-050","32-620","32-433","95-001","62-070","34-424","33-152","32-200","32-003","32-003","32-090","32-043","50-458","56-400","55-080","32-107","32-090","05-806","80-001","41-200","95-010","55-080","56-400","32-003","55-200","95-030","05-501","27-200","34-407","05-200","95-030","95-010","05-074","33-340","32-720","32-600","95-006","05-408","32-800","62-060","32-410","32-043","55-080","32-431","95-020","32-002","95-010","05-830","32-200","32-200","42-504","34-200","34-520","52-200","05-806","62-072","32-828","32-010","66-100","05-070","34-120","32-095","32-440","32-002","32-003","16-400","62-072","32-002","34-424","64-500","32-014","70-001","32-090","32-200","55-095","32-043","30-199","62-028","34-407","32-100","32-075","52-200","32-085","55-180","95-200","32-060","32-002","55-040","63-100","55-300","63-000","32-040","66-200","50-458","41-600","33-300","95-030","34-120","32-014","39-400","33-100","62-080","42-600","33-100","32-433","32-065","33-312","34-114","32-435","32-200","32-085","34-103","87-100","32-020","32-090","32-086","33-316","05-080","32-075","32-640","32-540","32-431","32-400","63-005","55-020","32-859","43-100","32-859","55-040","30-199","32-075","32-075","32-864","34-100","32-090","34-400","05-830","00-001","62-100","32-090","32-086","32-002","32-090","05-408","32-095","32-002","32-085","32-075","32-200","33-300","33-300","34-108","32-107","33-121","32-340","30-199","32-091","32-091","32-010","32-091","55-020","51-217","43-360","32-010","55-330","62-050","62-052","55-114","32-300","32-720","95-020","34-103","32-300","32-250","33-312","33-312","32-095","05-501","32-031","32-600","44-300","32-861","05-082","55-020","42-582","32-830","55-330","55-002","32-828","32-065","05-500","32-010","33-100","32-086","95-054","32-340","05-830","64-200","32-061","92-701","32-107","50-001","55-330","32-040","62-300","55-080","32-551","32-200","05-090","43-175","32-010","32-075","62-081","52-200","34-234","34-600","07-200","32-859","34-114","32-340","33-130","30-199","32-600","32-090","55-330","55-080","41-800","50-458","32-061","32-095","32-090","32-200","32-200","05-074","32-003","32-406","34-500","05-408","62-070","32-003","32-003","55-330","62-072","32-095","18-300","05-501","32-043","32-200","32-200","32-340","34-424","32-010","32-640","33-100","32-400","32-864","32-435","34-520","05-091","33-100","32-091","32-300","30-199","34-210","32-091","95-001","33-100","05-501","32-107","32-104","65-001","32-086","05-082","05-082","05-082","32-300","33-312","55-300","05-500","32-075","33-200","32-095","55-040","50-458","44-240","52-200","32-300","55-330","34-300"].includes(e),n=a.includes((n=i)[0].toUpperCase()+n.slice(1));strinfCode=String(e),strinfCity=String(i),codeLenght=strinfCode.trim().length,cityLenght=strinfCity.trim().length,console.log(cityLenght),console.log(n),console.log(o),a.length;o&&n&&2<cityLenght&&6===codeLenght?showTarget("success"):strinfCode.match(/^[0-9]{2}-[0-9]{3}$/g)?cityLenght<2?showErr("city"):n&&o||showTarget("Err"):showErr("code")}showSlidesM(slideIndexM),document.querySelectorAll(".delivery__inner input").forEach(i=>{console.log(i),i.addEventListener("input",e=>{i.closest(".delivery__inner").classList.remove("error")})});var slideIndex=1;function plusSlides(e){showSlides(slideIndex+=e)}function currentSlide(e){showSlides(slideIndex=e)}function showSlides(e){var i,a=document.getElementsByClassName("mySlides");for(e>a.length&&(slideIndex=1),e<1&&(slideIndex=a.length),i=0;i<a.length;i++)a[i].querySelector(".slider-info").style.display="none",a[i].querySelector(".slide-img").classList.add("slide-right"),a[i].querySelector(".slide-img").classList.remove("slide-left"),a[i].classList.remove("d-none");a[slideIndex-1].querySelector(".slider-info").style.display="block",a[slideIndex-1].querySelector(".slide-img").classList.add("slide-left"),a[slideIndex-1].querySelector(".slide-img").classList.remove("slide-right")}let intViewportWidth=window.innerWidth;if(intViewportWidth,intViewportWidth<780){const W=document.querySelector("#diets"),X=Array.from(document.querySelectorAll(".diet-box"));let a=!1,o=0,i=0,n=0,c=0,r=0;function touchStart(i){return function(e){r=i,o=getPositionX(e),a=!0,c=requestAnimationFrame(animation)}}function touchEnd(){a=!1,cancelAnimationFrame(c);var e=i-n;e<-100&&r<X.length-1&&(r+=1),100<e&&0<r&&--r,setPositionByIndex()}function touchMove(e){a&&(e=getPositionX(e),i=n+e-o)}function getPositionX(e){return e.type.includes("mouse")?e.pageX:e.touches[0].clientX}function animation(){setSliderPosition(),a&&requestAnimationFrame(animation)}function setSliderPosition(){W.style.transform=`translateX(${i}px)`}function setPositionByIndex(){i=r*-window.innerWidth,n=i,setSliderPosition()}X.forEach((e,i)=>{e.addEventListener("touchstart",touchStart(i)),e.addEventListener("touchend",touchEnd),e.addEventListener("touchmove",touchMove)})}function filterSelection(e){var i,a=document.getElementsByClassName("filterDiv");for("all"==e&&(e=""),i=0;i<a.length;i++)w3RemoveClass(a[i],"show"),-1<a[i].className.indexOf(e)&&w3AddClass(a[i],"show")}function w3AddClass(e,i){for(var a=e.className.split(" "),o=i.split(" "),n=0;n<o.length;n++)-1==a.indexOf(o[n])&&(e.className+=" "+o[n])}function w3RemoveClass(e,i){for(var a=e.className.split(" "),o=i.split(" "),n=0;n<o.length;n++)for(;-1<a.indexOf(o[n]);)a.splice(a.indexOf(o[n]),1);e.className=a.join(" ")}var btnContainer=document.getElementById("diets");if(btnContainer)for(var btns=btnContainer.getElementsByClassName("diet-box"),i=0;i<btns.length;i++)btns[i].addEventListener("click",function(){var e=document.getElementsByClassName("active");e[0].className=e[0].className.replace(" active",""),this.className+=" active"});var btnContainer2=document.getElementById("weekDays");if(btnContainer2){for(btns=btnContainer2.getElementsByClassName("to-filtre"),i=0;i<btns.length;i++)btns[i].addEventListener("click",function(){var e=document.getElementsByClassName("active");e[0].className=e[0].className.replace(" active",""),this.className+=" active"});for(var btnsM=btnContainer2.getElementsByClassName("to-filtreM"),i=0;i<btnsM.length;i++)btnsM[i].addEventListener("click",function(){var e=document.getElementsByClassName("active-m");e[0].className=e[0].className.replace(" active-m",""),this.className+=" active-m"})}