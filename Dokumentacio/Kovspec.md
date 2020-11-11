## 1.Áttekintés

A rendszer egy online kvíz felületet valósít meg ahol a felhasználók különböző témájú kérdésekkel rendelkező versenyszerű kvíz feladatsorokban mérhetik össze tudásukat. Felület lehetőséget biztosít saját készítésű kvíz kérdések létrehozására vagy már meglévő, előre genereált kérdésekből is válogathat a felhasználó saját kvízének létrehozásához. A projekthez egy webes keretrendszert szeretnék alkalmazni a gyorsabb és hatékonyabb fejlesztés érdekében. A felhasználóknak lehetőségük van mérföldkövek eléréséhez. Minél több kvízben vesz részt egy felhasználó, valamint minél eredményesebb teljesít egy adott versenyben, annál több pontot fog elérni és ez alapján old fel különböző mérföldköveket. Ezek a mérföldkövek további addikciókat fog feloldani a felhasználó számára. Természetesen kell egy pontozási rendszer amivel ez megvalósítható. A projektben elengedhetetlen a cross-platform megoldás, hiszen fontos, hogy ne csak számítógépről, hanem például mobilról is betudjanak kapcsolódni a felhasználók a kvíz versenyekbe. A rendszer karbantartása miatt kell egy admin felhasználó aki bővebb jogkörrel rendelkezik az esetleges problémák megoldásának érdekében.

## 2. Jelenlegi helyzet

 Az alap koncepció a jelenleg kialakult digitális oktatás helyzetét hivatott segíteni. Szeretnénk megkönnyebíteni az online oktatás menetét ezzel a projekttel, hogy a gyerekek játékosabb, izgalmasabb valamint sokkal korszerűbb környezetben mérjék össze tudásukat, vagy éppen bővítsék azt. Előfordulhat egyes iskolában az, hogy a digitális oktatásra való átállás nem elég hatékony és a diákok nem veszik azt komolyan, nem foglalkoznak vele és ez tudásuk rovására megy. Tegyük fel, hogy vannak olyan tanárok akik nem tartanak órákat csak egy e-mailben kiküldik az adott órára felírt tananyagot. A diák megkapja de nem csinál vele semmit, nem foglalkozik vele. A rendszer lehetővé teszi, a diákok tudásának felmérését. A tanár készíthet egy teszt kvízt amiben a múlt órai anyagból tesz fel kérdéseket és a diákoknak ezekre kell válaszolniuk. Ezzel ösztönözhetjük a gyerekeket, hogy foglalkozzanak az adott órára kiírt anyaggal. Természetesen ennek a rendszernek játékosnak kell lennie, nem szabad hogy a diák azt érezze hogy bele van kényszerítve. A tanárok előtt pedig egy új lehetőséget biztosít az értékelésre, hiszen a rendszer pontozni fogja a diákok teljesítményét. Természetesen nem csak ezt a réteget célozzuk meg a rendszerrel, hiszen más formában is hasznosítani lehet a projektet. Akár versenyek szervezésére vagy szimplán egy baráti összejövetel alkalmával kisebb játékot is megvalósíthatunk vele, főleg hogy a projekt closs-platform támogatással rendelkezik.

## 3. Vágyálom rendszer

A projekt célja egy online kvíz weboldal létrehozása. A projekt webes felülettel kell rendelkezzen ami egyaránt elérhető mobilról vagy tablettről is. A weboldal funkciói csak regisztrálás után kell, hogy elérhetővé váljanak. Regisztráció nélkül csak a regisztráció valamint egy bemutató legyen elérhető a weboldalról. Regisztrálás után a felhasználóknak lehetőségük van kvíz versenyekben részt venni valamint saját kvízeket tudnak létrehozni. A weboldalon lesznek alapvető kvízek különböző témákkal, de természetesen a felhasználók tudnak sajátot létrehozni. A felhasználók rendelkeznek pontokkal amelyeket kvízekben való részvétellel, valamint helyes válaszokkal tudnak növelni. A pontokat eltudják költeni, valamint a pontok mérföldköveket is oldanak fel amelyek különböző dolgokat fognak feloldani a felhasználónak. A projekt megvalósítása egy webes keretrendszer használatával kell, hogy történjen, hiszen egyes keretrendszerek nagyban megtudják könnyíteni a fejlesztést valamint meg is gyorsítják azt. Szükség van egy bővebb jogkörrel rendelkező felhasználóra, tegyük fel egy adminisztrátorra. Az adminisztrátor tudja kezelni a felhasználó fiókokat, a pontozási rendszert, a mérföldköveket és teljes hatásköre van minden létrehozott kvíz felett. Ezen feladatokat csak ő tudja elvégezni azért, hogy a weboldal helyes működéséből ki ne zökkenjen, vagy ha hibát találunk akkor őt értesíteni tudjuk. Alapesetben a kvízeket csak a létrehozó szerkesztheti, ezt bírálhatja felül az adminisztrátor jogkörrel rendelkező felhasználó.

## 8. Követelménylista

Modul | ID | Név | Kifejtés
--- | --- | --- | ----------------------------------------------------------------------
Jogosultság | K1 | Bejelentkezési felület | A felhasználó a felhasználónevével és jelszava segítségével jelentkezhet be. Nem megfelelő felhasználónév vagy jelszó esetén, a felhasználó hibaüzenetet kap.
Jogosultság | K2 | Regisztrációs felület | A felhasználó felhasználónév, e-mail cím és jelszó megadásával regisztrálhatja magát. A jelszó tárolása kódolt formában történik az adatbázisban. Bármely adat hiánya vagy a követelményeknek való nem megfelelése esetén, a felhasználó hibaüzenetet kap.
Modifikáció | K3 | Felhasználó módosítása | A felhasználó módosítani tudja saját Felhasználónevét. Ehhez szükséges a régi és az új felhasználók megadása, az új megerősítése, valamint a felhasználó jelszavának megadása.
Modifikáció | K4 | Jelszó Módosítása | A felhasználó módosítani tudja saját jelszavát. Ehhez szükséges a régi és az új jelszavának megadása, valamint az új megerősítése.
Modifikáció | K5 | Elfelejtett felhasználónév / jelszó | Ha a felhasználó elfelejtette a felhasználónevét, vagy jelszavát akkor ezzel az opcióval egy Adminhoz tud fordulni.
Jogosultság | K6 | Jogosultsági szintek | -Admin <br> -Felhasználó
Feladattípus | K7 | Kvíz | Több kérdésből áll, a feladat a helyes válasz kiválasztása több lehetőség közül. A felhasználó az eltelt idő függvényében pontot kap.
Felület | K8 | Profil | A felhasználó részletes adatai, mérföldkövekkel.
Statisztika | K9 | Toplista | Egy lista a játékosok pontszámairól, a lista elején a legtöbb pontot elért felhasználó található.

## 9. Fogalomtár

- **UML** - Unified Modeling Language
- **Releváns** - fontos, lényeges, meghatározó, jelentős
- **Corrective Maintenance:** A felhasználók által felfedezett és "user reportban"
elküldött hibák kijavítása.
- **Adaptive Maintenance:** A program naprakészen tartása és finomhangolása.
- **Perfective Maintenance:** A szoftver hosszútávú használata érdekében végzett
módosítások, új funkciók, a szoftver teljesítményének és működési
megbízhatóságának javítása.
- **Preventive Maintenance:** Olyan problémák elhárítása, amelyek még nem
tűnnek fontosnak, de később komoly problémákat okozhatnak.