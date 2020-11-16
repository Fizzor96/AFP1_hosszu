## 1.Áttekintés

A rendszer egy étterem számára elkészítendő weboldal. Az étterem tulajdonos szeretne egy online felületet ahol ételeket tudnának a felhasználók házhoz rendelni vagy előrendelni amit majd az étteremben vennének át. A weboldalnak rendelkeznie kell egy felhasználó felülettel ahol betudnak jelentkezni vagy regisztrálni tudnak a vásárlók, hogy rendelni tudjanak ételeket. Ha nincs fiókja egy látogatónak a weboldalon akkor nem tud rendelni ételeket, viszont látni tudja az étlapot. Készíteni kell egy külön felület az étlapnak, ahol a felhasználók megtekinthetik, hogy mit tudnak rendelni a weboldalról. Fontos, hogy nem csak egy üzletre kell felkészíteni a rendszert, hanem több esetőségre is. A felhasználók rendeléskor ki kell tudják választani, hogy melyik étteremből szeretnének rendelni és csak azután, hogy mit. Rendeléskor minden fontos adatot át kell adjon a felhasználó, hogy a házhozszállítás megfelelően végbemenjen. Természetesen ha a vásárló szeretné átvenni személyesen akkor ezekre az adatokra nincs szükség. Az étlapnak bővíthetőnek kell lennie. Azaz új étel esetén lehetővé kell tenni a már meglévő étlaphoz való hozzáfűzést. A rendeléseket, valamint az ételeket értékelhetővé kell tenni a felhasználók számára. Ebből láthatóvá válik a felhasználók elégedettsége. A rendszer karbantartása érdekében, kell egy olyan felhasználó aki az egyes hibákat kezelni tudja, vagy a felhasználók profiljait szerkeszteni tudja.

## 2. Jelenlegi helyzet

Minden étterem számára több bevételt, több rendelést valamint a vásárlók számára pedig kényelmet jelent az, hogyha online tudnak ételt rendelni. A jelenlegi helyzetre való tekintettel az éttermek számára a megélhetést jelenti a házhoz szállítás, hiszen nem tarthatnak nyitva az éttermek. Az emberek számára pedig ez az egyetlen módja hogy éttermi menüről étkezzenek. Leszámítva ezeket a szempontokat, sok kényelmet jelent az a hétköznapi embereknek, ha otthonról tudnak rendelni. Nem kell kimozdulniuk és kényelmesen elfogyaszthatják az ételt otthon. Sok esetben már előre is kilehet fizetni az ételt így szinte a futárral egy pillantra találkozik a rendelő vagy akár nem is történik kontakt hiszen az ajtóban lehelyezik a csomagot és csengővel jelzik az érkeztét. Az éttermek számára szélesebb vendég kört jelent hiszen így több embert el lehet érni. Figyelembe véve, hogy az emberek rengeteg használják mobiljukat, akár úton hazafelé is megrendelhetik ebédjüket, vacsorájukat és mire hazaérnek meg is érkezik az étel. Ezen tényezők mind növelik az étterem forgalmát, valamint elősegítik a vásárlók kényelmét, így mindkét félnek egyaránt profitáló ez a megoldás. Természetesen költésgei lehetnek a házhoz szállításnak és a csomagolásnak de ez elenyésző. Természetesen egyre több étterem készíttet magának egy weboldalt ezért is tanácsos minden étterem számára, egy ilyen weboldal elkészítése, hogy a konkurenciában képes legyen a versenyt tartani.

## 3. Vágyálom rendszer

A projekt célja egy online kvíz weboldal létrehozása. A projekt webes felülettel kell rendelkezzen ami egyaránt elérhető mobilról vagy tablettről is. A weboldal funkciói csak regisztrálás után kell, hogy elérhetővé váljanak. Regisztráció nélkül csak a regisztráció valamint egy bemutató legyen elérhető a weboldalról. Regisztrálás után a felhasználóknak lehetőségük van kvíz versenyekben részt venni valamint saját kvízeket tudnak létrehozni. A weboldalon lesznek alapvető kvízek különböző témákkal, de természetesen a felhasználók tudnak sajátot létrehozni. A felhasználók rendelkeznek pontokkal amelyeket kvízekben való részvétellel, valamint helyes válaszokkal tudnak növelni. A pontokat eltudják költeni, valamint a pontok mérföldköveket is oldanak fel amelyek különböző dolgokat fognak feloldani a felhasználónak. A projekt megvalósítása egy webes keretrendszer használatával kell, hogy történjen, hiszen egyes keretrendszerek nagyban megtudják könnyíteni a fejlesztést valamint meg is gyorsítják azt. Szükség van egy bővebb jogkörrel rendelkező felhasználóra, tegyük fel egy adminisztrátorra. Az adminisztrátor tudja kezelni a felhasználó fiókokat, a pontozási rendszert, a mérföldköveket és teljes hatásköre van minden létrehozott kvíz felett. Ezen feladatokat csak ő tudja elvégezni azért, hogy a weboldal helyes működéséből ki ne zökkenjen, vagy ha hibát találunk akkor őt értesíteni tudjuk. Alapesetben a kvízeket csak a létrehozó szerkesztheti, ezt bírálhatja felül az adminisztrátor jogkörrel rendelkező felhasználó.

## 4. Funkcionális követelmények

1. Bejelentkezési felület
2. Regisztrációs felület
3. Város kiválasztás
    - a felhasználó kitudja választani azt hogy melyik város éttermeit szeretné megtekinteni.
4. Étterem kiválasztása
    - az étterem kiválasztása után megjelenítjük az étlapot ahonnan tud választani a felhasználó
5. Beállítások menüpont
    - a felhasználó szerkesztheti az adatait

Admin joggal rendelkezőknek:
1. Admin felület
        - szerkeszthetők az éttermek és azok étlapja
        - szerkeszthetők a felhasználók

Jogosultságok:
    - Admin
    - Felhasználó
    - Vendég


## 5. Rendszerre vonatkozó törvények, szabványok, ajánlások

Opensource szoftver. Bárki által letölthető és felhasználható. Az értékesítése nem megengedett!

## 6. Jelenlegi üzleti folyamatok modellje

A mai világban az éttermek nagyrésze megtalálható és elérhető online, és telefonon is. A webes rendelés sokkal megkönnyítheti az éttermek dolgát mivel a rendelések felvételéhez nem kell munkaerőt csoportosítani. A tervezett weboldalunk ezeket az éttermeket egyesíti egy oldalon, és listázza ki azok étlapját. Ezek az online éttermek még nagyon kezdetleges formátumban találhatók meg.

1. Rendelés menete
	1.1. Rendelés leadása/felvétele: személyesen/telefonon, megrendelő és alkalmazott között
	1.2. Rendelés: az étterem alkalmazottja végzi, nyomtatott étlap alapján => étel megrendelése
	1.3. Rendelés feljegyzés: az étterem alkalmazottja végzi, megrendelt ételek => füzetbe/parírra való feljegyzése
2. Rendelés továbbítása (konyhára): az étterem alkalmazottja végzi, feljegyzés továbbítása személyesen
3. Rendelés eljuttatása a megrendelőhöz: az étterem alkalmazottja végzi, személyesen => éttermen belüli átvétel, kiszállítás
4. Megrendelés fizetése
	4.1. Számla kiállítás: étteremben, az étterem alkalmazottja végzi => számla nyomtatása
	4.2. Számla fizetés: személyesen, készpénz/bankkártya formájában => étterem értékelése a felhasználó által

## 7. Igényelt üzleti folyamatok modellje

1. Bejelentkezés
	1.1 Beállítások
2. Város kiválasztása
	2.1 Étterem kiválasztása
		2.1.1 Étlap megtekintése, rendezése/szűrése
		Ha be van jelentkezve a felhasználó:
		2.1.2 Rendelés
			2.1.2.1 Kosár
3. Admin jogosultsággal
	3.1 Étterem hozzáadása
	3.2 Város hozzáadása
	3.3 Menük hozzáadása
	3.4 Felhasználók kezelése
4. Étterem
	4.1 Megrendelések megtekintése
		4.1.1 Elfogadás/elutasítás
	4.2 Számla nyomtatás
	4.3 Kedvezmény hozáadása
5. Regisztráció

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