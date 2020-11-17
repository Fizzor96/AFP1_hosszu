## 1. Rendszer célja

A rendszer egy étterem számára elkészítendő weblap. A legfőbb funkció amit meg kell valósítanunk az az étel rendelés. Az étterem étlapját kell elérhetővé tennünk a rendszerben amiből rendelhetnek később a felhasználók. Alapesetben nem lehet rendelni a weboldalról amíg nem reigsztrálunk be és nem készítünk egy fiókot ahol adatainkat tároljuk amelyek szükségesek a rendeléshez. Regisztárió nélkül is megtekinthetjük az étterem üzleteit, étlapját és azt, hogy melyik városban elérhetőek de nem rendelhetünk. Szét kell bontanunk városokra és éttermekre a külön étlapokat. Egy városhoz több étterem is tartozhat de egy étterem csak egy városhoz tartozik. Ezt a kapcsoaltot az adatbázis kapcsolatok között kell kialakítanunk és a rendszer mükődését ez nagyban meghatározza. Természetesen az étlapot is egy adatbázisban tároljuk el amelyek adott étermekhez kapcsolódnak. A későbbiekben ez bővíthető. A felhasználók megtekinthetik leadott rendeléseiket és annak állapotát valamint értékelhetik azt. Ezenkívül lehetőséget biztosítunk az egyes ételek értékeléséhez is valamint magát az éttermet is tudja a felhasználó minősíteni, ezzel is segítve a visszajelzést a fenntartó felé. Annak érdekében, hogy a rendszert ne terheljük túl egy adott idő után szükséges a bejelentkezett felhasználókat kijelentkeztetni. Ettől függetlenül a még nem kézbesített rendeléseket továbbra is nyomon tudják követni egy új bejelentkezés után. Azt, hogy egy rendelés mikor teljesül az admin felhasználó fogja eldönteni. Ő tudja egy rendelés állapotát teljesítetté nyílvánítani. Az adminisztrátor kapja még meg a rendeléseket is, ő tudja jelezni az étterem felé az új beérkezett megrendelést. Ezen kívül a problémákat az adminisztrátor felé kell jelezni. Ő tudja módosítani a felhasználók fiókjait, a városok listját az étlapokat. Ezen funkciók megvalósításával elkészítetünk egy weboldalt az étterem számára ahonnan az emberek már online is tudnak rendelni házhoz, vagy akár előre elékszítettni amit majd később felvesznek az étteremből. 

## 2. Projektterv

1. Projektszerepkörök:
  * Termék tulajdonos: Devtrio (teljes csapat)
2. Projektmunkások és felelősségek:
  * Backend munkálatok: Csapat tagjai
  * Frontend munkálatok: Csapat tagjai Feladatuk: adatbázis létrehozása az adatok tárolásához, megfelelő funkciók elkészítése az oldal megfelelő működésének érdekében, felhasználói   felület kialakítása.
3. Ütemterv:
  1. Követelmény specifikáció
  2. Funkcionális specifikáció
  3. Rendszerterv
  4. Adatbázis kialakítása
  5. Backend funkciók elkészítése
  6. Frontend design megtervezése
  7. Felhasználói felület kialakítása

## 3. Üzleti folyamatok modellje

![Üzleti modell](../Dokumentacio/Képek/Umodell.PNG)

## 4. Követelmények

**Funkcionális követelmények**
  - **Felhasználók adatainak tárolása**
  - **Felhasználók tudják változtatni adataikat**
  - **Városok tárolása**
  - **Éttermek tárolása**
  - **Reszponzív webes alapú megjelenítés**
  - **Adminisztrátor tudja szerkeszteni a éttermek adatlapjait és a hozzá tartozó étlapokat**
  - **A felhasználók képesek rendelést leadni az adott étteremnek**

  **Nem funkcionális követelmények**
  - **A felhasználók nem férnek hozzá egymás adataihoz**

  **Törvényi előírások, szabványok:**
  - **GDPR-nek való megfelelés**

## 5. Funkcionális terv

  **Rendszerszereplők:**
  - **Adminisztrátor**
  - **Felhasználó**
  - **Vendég**

  **Rendszerhasználati esetek és lefutásaik:**
  - **Adminisztrátor**
    - **Képes felhasználókat törölni**
    - **Tudja módosítani a felhasználók jelszavát és adatait is**
    - **Látja az összes regisztrált felhasználót**
    - **Módosítani tudja a városokat, éttermeket és az étlapokat**
    - **Teljes hozzáférése van a rendszerhez**
  - **Felhasználó**
    - **Megtekintheti az éttermeket, és lekérheti a hozzátartozó étlapokat**
    - **Módosíthatja a saját adatait**
    - **Módosíthatja jelszavát**
    - **Adhat le rendelést az adott étteremhez**
  - **Vendég**
    - **Láthatja az éttermeket, és azok étlapjait**
    - **Képes regisztrálni és bejelentkezni**
    - **Nem tud rendelést leadni**

  - **Menü-hierarchiák:**
    - **Bejelentkezés**
    - **Regisztráció**
    - **Főoldal**

    - **Bejelentkezés után:**
      - **Felhasználók listája:** kizárólag admin joggal rendelkező felhasználóknak
      - **Éttermek listája:** kizárólag admin joggal rendelkező felhasználóknak
      - **Étlap módosítás/hozzáadása:** kizárólag admin joggal rendelkező felhasználóknak

      - **Éttermek**
      - **Városok**
      - **Kijelentkezés**

## 6. Fizikai környezet
  - **Az alkalmazás csak web platformra készül.**
  - **Nincsenek megvásárolt komponensek.**
  - **Fejlesztői eszközök:**
    - **Visual Studio Code**
    - **Notepad++**
    - **Sublime text 3**
    - **MySQL Workbench**
    - **HediSQL** 

## 7. Architekturális terv

A rendszerhez szükség van egy adatbázis szerverre, ebben az esetben MySql-t használunk, ebbe visszük fel a felhasználók, városok, éttermek és rendelések listáját. A backend php alapú. A bootstrap, a CSS keretrendszer felel a reszponzív webdesign-ért.

## 8. Adatbázis terv

**Táblák**
- **felhasználók:** Minden felhasználó, aki az oldalon regisztrált
  - **id:** Azonosító szám, mindenképp felvesz egy egész típusú értéket, amit a rendszer automatikusan generál és egyesével növekszik, nem lehet két azonos szám
  - **felhasználónév:** A felhasználók bejelentkezési/felhasználói neve, nem lehet üres
  - **jelszó:** Nem lehet üres a mező
  - **email:** Egyedi, tehát nem lehet két felhasználónak ugyanazon email címe és egyben nem lehet üres mező
  - **jog:** Egész érték, nem lehet üres mező
- **Kérdés:**
  - **kérdésid:** Minden kérdés egyedi azanosítóval bír, automatikusan növekszik és nem lehet üres mező
  - **Kérdés:** A kvízben szereplő kérdés szövege
  - **helyesVálaszid:** Az kérdéshez tartózó helyes válasz
- **Válasz:**
  - **válaszid:** Az adott válasz egyedi azonosítója, nem lehet üres és automatikusan növekszik
  - **válasz:** A válasz szövege
  - **kérdésid:** A kérdéshez tartozó válasz (ez nem feltétlenül a helyes válasz!)

**DSL**
```
DROP TABLE IF EXISTS Felhasználók;

DROP TABLE IF EXISTS Kérdés;

DROP TABLE IF EXISTS Válasz;

CREATE TABLE Felhasználók (
	id integer PRIMARY KEY AUTOINCREMENT,
	felhasználónév text,
	jelszó text,
	email text,
	jog integer
);

CREATE TABLE Kérdés (
	kérdésid integer PRIMARY KEY AUTOINCREMENT,
	kérdés text,
	helyesVálaszid integer
);

CREATE TABLE Válasz (
	válaszid integer PRIMARY KEY AUTOINCREMENT,
	válasz text,
	kérdésid integer
);

```
**UML**
<br>
![Adatbázis terv](../Dokumentacio/Képek/Adatbázis.PNG)

## 9. Implementációs terv

A webes felület HTML, CSS és PHP nyelven fog készülni. A különböző technológiákat amennyire lehet, külön fájlokba írva készítjük el, úgy csatoljuk egymáshoz. Így átláthatóbb, könnyebben változtatható és bővíthető lesz. A felhasználók, városok, éttermek és rendelések adatait egy MySql adatbázisban fogjuk tárolni. A reszponzív webdesign-t Bootstrap-pel fogjuk biztosítani.

## 10. Tesztterv

Az alább leírt tesztelések célja a rendszer és funkcióinak teljes körű vizsgálata, ellenőrzése a megfelelő működés érdekében.

Linkek, gombok tesztelése: a teszt célja a weboldalon megjelenő linkek és gombok megfelelő működésének ellenőrzése.
A weboldal és az adatbázis kapcsolatának vizsgálata: fel kell tudnia tölteni az adatbázist a megfelelő adatokkal és vissza kell tudnia adni azokat. Törlési, hozzáadási, módosítási műveletek tesztelése. A jelszavak megfelelő tárolásának ellenőrzése, vagyis minden jelszó titkosításának (hashelésének) ellenőrzése.
Hibás, hiányos adatok esetén adott hibaüzenetek ellenőrzése.
Kiléptető rendszer tesztelése, egy nap után ki kell jelentkeztetnie a felhasználót.
Számla nyomtatás működésének ellenőrzése.
Étterem értékelés működésének vizsgálata.
A weboldal helyes működésének ellenőrzése különböző böngészőkben pl. Firefox, Google Chrome…

## 11. Telepítési terv

1. Python telepítése
   * Platformnak megfelő python telepítőcsomag letöltése
   * Telepítés
2. (Opcionális) Apache telepítése
3. Adatbázis telepítése - SQLite (Automatikus)
4. Django kód telepítése <br> ```python -m pip install Django```

## 12. Karbantartási terv

A felhasználók egy report formájában tudják jelenteni a felmerűlő funkcionális hibákat és az adminok tudják javítani. <br>
A javított hibák egy oldalon Changelog vagy hír formában meg fognak jelenni visszajelzésként a felhasználók felé, az új funkciók / frissítésekkel együtt.