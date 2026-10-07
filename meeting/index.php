
<?php
/*Feladat: "Tech-Meetup Regisztrációs Portál"

Készíts egy egyedi PHP keretrendszerre épülő, 
három menüpontból álló weboldalt egy közelgő 
informatikai meetup számára! A projektnek szigorúan 
követnie kell a megadott fájlstruktúrát és logikát.

Elvárt fájlstruktúra és működés:

Központi fájl (index.php): Ez legyen az egyetlen belépési pont. 
Kizárólag beágyazásokat (require/include) tartalmazzon: funkciók, router, és layout fájlok.

Segédfüggvények (include/functions.php): Tartalmazzon egy függvényt, 
amely paraméterként várja a menü azonosítóját, és visszatér a megfelelő 
(pl. ?oldal=1) URL címmel.

Útválasztó (include/router.php): Egy switch segítségével vizsgálja az 
URL paramétert. Itt döntsd el, melyik aloldal funkciója fusson le, és az 
általuk visszaadott HTML kódot mentsd el egy $pageContent nevű változóba!

Megjelenítés (include/layout.php és navbar.php): Használj Bootstrap keretrendszert! 
A layout fájl tartalmazza a <html>, <head>, <body> tageket. A navigációs menüt külön 
fájlból (navbar.php) emeld be. A tartalmi részbe csak a $pageContent változót írasd ki!

Oldalak megvalósítása (HTML string generálással): Minden oldal külön fájlban kapjon 
helyet (pl. fooldal.php, programok.php, regisztracio.php). Az oldalak tartalmát 
függvényekkel kell előállítani úgy, hogy a teljes HTML blokkot stringként (szövegként) 
térítsék vissza!

Főoldal: Tartalmazzon egy üdvözlő szöveget és egy figyelemfelkeltő képet.

Programok: Tartalmazzon egy hosszabb leírást az 
eseményről, amely CSS segítségével körbefolyik egy képet.

Regisztráció: Tartalmazzon egy űrlapot (Név, Cégnév, 
Rövid bemutatkozás/motiváció - textarea).

Adatmentés fájlba (feldolgozas függvény): A regisztrációs 
űrlap elküldése után a beérkezett adatokat a routerből meghívott 
külön függvény dolgozza fel! A több sorból álló "bemutatkozás" mezőből 
a sortöréseket cseréld le, hogy egyetlen sorba lehessen menteni! Az adatokat 
pontosvesszővel elválasztva mentsd a resztvevok.txt fájlba, majd végezz átirányítást 
(Header Location) az újra-küldés elkerülése végett!*/


 require_once("include/functions.php");
 include_once("include/router.php");
 include_once("include/layout.php");
?>