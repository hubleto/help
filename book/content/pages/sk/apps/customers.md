# Zákazníci

V aplikácii **Zákazníci** predstavujú spoločnosti alebo podniky, s ktorými vaša organizácia interaguje. Každý záznam o zákazníkovi uchováva základné údaje ako názov spoločnosti, adresu, daňové informácie a priradené kontakty, čo zabezpečuje štruktúrovaný prístup k správe podnikania.

> 💡 **Pripomienka:** Pred pridaním kontaktu musíte najprv vytvoriť zákazníka. Kontakty sú vždy priradené k zákazníkom, aby sa zabezpečilo správne prepojenie.

## Správa zákazníkov

Aby ste mali svoju databázu zákazníkov organizovanú a aktuálnu, sú k dispozícii nasledujúce akcie:

| Akcia | Popis |
|---------------------------------|---------------------------------------------------------------|
| **[Pridať Zákazníka](customers/add-customer)** | Vytvorte nového zákazníka a uložte základné údaje o spoločnosti. |
| **[Upraviť Zákazníka](customers/edit-customer)** | Upravte informácie o existujúcom zákazníkovi podľa potreby. |
| **[Odstrániť Zákazníka](customers/delete-customer)** | Trvalo odstráňte zákazníka zo systému. |

## Atribúty zákazníka

Nižšie sú uvedené atribúty, ktoré definujú zákazníka a pomáhajú pri spracovaní obchodných operácií:

![Príklad zákazníka]({{ bookRootUrl }}/content/assets/images/customers/customers-example.png)

| Atribút | Popis | Príklad |
|------------------|-------------|---------|
| **Názov** (Povinné) | Oficiálny názov spoločnosti. | *ABC Corp* |
| **Ulica 1** | Hlavný riadok adresy. | *Hlavná ulica 123* |
| **Ulica 2** | Dodatočné informácie o adrese (voliteľné). | *Suita 456* |
| **Mesto** | Mesto, v ktorom sa spoločnosť nachádza. | *New York* |
| **Oblasť** | Štát alebo administratívna oblasť. | *NY* |
| **Krajina** | Krajina spoločnosti (možnosť výberu z preddefinovaného zoznamu). | *USA* |
| **PSČ** | Poštový alebo ZIP kód pre obchodnú lokalitu. | *10001* |
| **IČ DPH** | Identifikačné číslo pre daň z pridanej hodnoty spoločnosti. | *US1234567890* |
| **ID zákazníka** | Unikátny identifikátor pre každého zákazníka. | *CUST-00123* |
| **Daňové ID** (Povinné) | Identifikačné číslo daňovníka pre regulačné účely. | *12345678* |
| **Dátum vytvorenia** | Dátum, kedy bol zákazník pridaný (automaticky nastavené, modifikovateľné administrátorom). | *2025-03-02* |
| **Aktívny** | Určuje, či je zákazník aktuálne aktívny v systéme. | *Povolené* |
| **Tagy** | Štítky na kategorizáciu zákazníkov (napr. *Dôležité*, *Partner*, *Potrebné skontrolovať*). Ďalšie tagy môžu byť pridané v [Tagy - nastavenia]({{ bookRootUrl }}/en/more/settings/tags). | *Dôležité* |
| **Priradený používateľ** (Povinné) | Používateľ zodpovedný za správu tohto zákazníckeho účtu. | *<john.smith@example.com>* |
| **Poznámky** | Dodatočné informácie alebo komentáre o zákazníkovi. | *Preferovaný klient, častý kupujúci* |

## Správa kontaktov v rámci zákazníkov

Každý zákazník môže mať priradené kontakty, ktoré môžu byť vytvorené priamo z modulu **Zákazníci**. Tým sa zabezpečí, že všetky kontakty sú správne prepojené s príslušnou obchodnou entitou.

Na spravovanie kontaktov samostatne sa pozrite do **[Príručky kontaktov](contacts)**.

> 💡 **Kľúčový rozdiel:** Zákazníci a kontakty slúžia rôznym účelom.  
> ✔️ **Zákazník** 🏢 → Spoločnosť alebo obchodná entita.  
> ✔️ **Kontakt** 👤 → Jednotlivec spojený s touto spoločnosťou, napríklad zástupca alebo zamestnanec.
