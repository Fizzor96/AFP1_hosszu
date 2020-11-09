## 1. Áttekintés

A rendszerünk egy online kvíz felületet valósít meg ahol a felhasználók különböző témájú kérdésekkel rendelkező versenyszerű kvíz feladatsorokban mérhetik össze tudásukat. Felület lehetőséget biztosít saját készítésű kvíz kérdések létrehozására vagy már meglévő, előre genereált kérdésekből is válogathat a felhasználó saját kvízének létrehozásához. A projekthez egy webes keretrendszert alkalmazunk a gyorsabb és hatékonyabb fejlesztés érdekében. A felhasználóknak lehetőségük van mérföldkövek eléréséhez. Minél több kvízben vesz részt egy felhasználó, valamint minél eredményesebb teljesít egy adott versenyben, annál több pontot fog elérni és ez alapján old fel különböző mérföldköveket. Ezek a mérföldkövek további addikciókat fog feloldani a felhasználó számára. Természetesen kell egy pontozási rendszer amivel ez megvalósítható. Pontokat helyes válaszokért kapunk, az alapján, hogy milyen gyorsan válaszoltunk, valamint azért ha résztveszünk egy kvízben. A projektben elengedhetetlen a cross-platform megoldás, hiszen fontos, hogy ne csak számítógépről, hanem például mobilról vagy tablettről is betudjanak kapcsolódni a felhasználók a kvíz versenyekbe. A kvízeket úgynevezett "szobákban" tartjuk ahova a felhasználóknak csatlakozniuk kell. A csatlakozást egy kvízhez egy meghívó kód fogja biztosítani amit egy szoba létrehozásakor generál az oldal. Biztosítunk többféle játékmódot is az egyes kvízek lebonyolításához. A rendszer karbantartása miatt kell egy admin felhasználó aki bővebb jogkörrel rendelkezik az esetleges problémák megoldásának érdekében. A kvízeket regisztráció nélkül nem tudjuk elérni, nem játszhatunk, nem vehetünk részt egyben sem csak regisztráció után. Regisztráció nélkül csak egy betekintőt tekinthetünk meg.

## 2. Jelenlegi helyzet

Az alap koncepció a jelenleg kialakult digitális oktatás helyzetét hivatott segíteni. Szeretnénk megkönnyebíteni az online oktatás menetét ezzel a projekttel, hogy a gyerekek játékosabb, izgalmasabb valamint sokkal korszerűbb környezetben mérjék össze tudásukat, vagy éppen bővítsék azt. Előfordulhat egyes iskolában az, hogy a digitális oktatásra való átállás nem elég hatékony és a diákok nem veszik azt komolyan, nem foglalkoznak vele és ez tudásuk rovására megy. Tegyük fel, hogy vannak olyan tanárok akik nem tartanak órákat csak egy e-mailben kiküldik az adott órára felírt tananyagot. A diák megkapja de nem csinál vele semmit, nem foglalkozik vele. A rendszer lehetővé teszi, a diákok tudásának felmérését. A tanár készíthet egy teszt kvízt amiben a múlt órai anyagból tesz fel kérdéseket és a diákoknak ezekre kell válaszolniuk. Ezzel ösztönözhetjük a gyerekeket, hogy foglalkozzanak az adott órára kiírt anyaggal. Természetesen ennek a rendszernek játékosnak kell lennie, nem szabad hogy a diák azt érezze hogy bele van kényszerítve. A tanárok előtt pedig egy új lehetőséget biztosít az értékelésre, hiszen a rendszer pontozni fogja a diákok teljesítményét. Természetesen nem csak ezt a réteget célozzuk meg a rendszerrel, hiszen más formában is hasznosítani lehet a projektet. Akár versenyek szervezésére vagy szimplán egy baráti összejövetel alkalmával kisebb játékot is megvalósíthatunk vele, főleg hogy a projekt closs-platform támogatással rendelkezik. Ez kifejezetten hasznos hiszen akárhonnan csatlakozhatunk és részt vehetünk egy-egy kvízben. Jelenleg találunk már hasonló alkalmazásokat, weboldalakat. A célunk az, hogy ezektől egy sokkal letisztultabb, könnyeben kezelhető weboldalt készítsünk el amelyet minden korosztály egyaránt tud kezelni. A különböző játék módok lehetővé teszik, hogy csapatban vagy önállóan teszteljük le a tudásunkat. Az idő korlát a kérdéseken pedig biztosítja azt, hogy saját tudásunkat alkalmazzuk és ne legyen idő máshonnan választ adnunk a kérdésre.

## 3. Követelménylista 

1. Bejelentkezési felület
* A felhasználók ezen a felületen jelentkeznek be a weboldalra a bővebb elérés érdekében
* Bejelentkezés után elérhetővé válnak a weboldal funkciói
2. Regisztrációs felület
* A felhasználók itt tudnak beregisztrálni a weboldalra
* Regisztráció nélkül nem elérhetőek a weboldal funkciói
3. Profil menüpont
* A felhasználók itt látják a saját adataikat, esetleg itt módosíthatják a jelszavukat is
* Itt találják meg a pontszámaikat
* Itt tekinthetik meg az elért mérföldköveiket
4. Kvíz menüpont
* Itt hozhat létre kvízeket, módosíthatja a sajátjait vagy törölheti
* Itt tekintheti meg a mások által elkészített kvízeket
5. Kvíz indítása
* Itt készíthet szobát, itt történik a csatlakozáshoz szükséges kód legenerálása
* Itt választja ki a játékmódot:
    - Csapatban
    - Egyedül
* Itt zajlik a kvíz
6. Jogosultságok
* Admin: teljes hozzáférése van a weboldalhoz, szerkesztheti a kvízeket korlátlanul
* Felhasználó: regisztráció után kapjuk meg a jogkört, létrehozhat kvízeket de csak a sajátját módosíthatja
* Látogató: nem regisztrált felhasználó aki csak egy bemutatót lát a weboldalról
