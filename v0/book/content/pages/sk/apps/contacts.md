# Kontakty

Kontakty v aplikácii predstavujú **jednotlivcov** priradených k zákazníkovi. Môžu to byť zamestnanci, zástupcovia alebo iné relevantné osoby spojené s podnikaním. Každý záznam o kontakte uchováva základné údaje ako osobné informácie, kontaktné údaje a kategórie klasifikácie.

> 💡 **Poznámka:** Zákazník musí byť vytvorený pred pridaním kontaktu. Kontakty sú vždy priradené k zákazníkom, aby sa zabezpečilo správne prepojenie.

## Správa kontaktov

Správa kontaktov je kľúčová pre udržiavanie obchodných vzťahov. Nasledujúce akcie vám umožnia efektívne spravovať vašu databázu kontaktov:

| Akcia | Popis |
|---------------------------------|----------------------------------------------------------------------------------|
| **[Pridať Kontakt](contacts/add-contact)** | Vytvorte nový kontakt a priradte ho k existujúcemu zákazníkovi. |
| **[Upraviť Kontakt](contacts/edit-contact)** | Upravte detaily existujúceho kontaktu. |
| **[Odstrániť Kontakt](contacts/delete-contact)** | Trvalo odstráňte kontakt zo systému. |

## Atribúty kontaktu

Nižšie sú uvedené kľúčové atribúty používané na správu jednotlivcov spojených so zákazníkom:

![Príklad kontaktu]({{ bookRootUrl }}/content/assets/images/contacts/contacts-example.png)

### Osobné informácie

| Atribút | Popis | Príklad |
|------------------|-------------|---------|
| **Meno** (Povinné) | Krstné meno kontaktu. | *Ján* |
| **Priezvisko** | Priezvisko kontaktu. | *Novák* |
| **Zákazník** (Povinné) | Spoločnosť spojená s kontaktom. | *ABC Corp* |
| **Tagy** | Štítky na kategorizáciu kontaktov. Predvolené tagy: *Dôležité*, *Partner*, *Potrebné skontrolovať*. Ďalšie tagy môžu byť pridané v [Tagy - nastavenia]({{ bookRootUrl }}/en/more/settings/tags). | *Dôležité* |
| **Hlavný kontakt** | Určuje, či je tento kontakt hlavným kontaktom pre zákazníka. | *Povolené* |

### Kontaktné údaje

| Atribút | Popis | Príklad |
|------------------|-------------|---------|
| **Typ** (Povinné) | Typ kontaktu (Email, Telefón atď.). | *Email* |
| **Hodnota** (Povinné) | Skutočný kontaktný údaj. | *<jan.novak@example.com>* |
| **Kategória** (Povinné) | Kategória kontaktu (Domov, Práca, Iné). | *Práca* |

## Správa kontaktov v rámci zákazníkov

Kontakty je možné spravovať priamo v **module Zákazníci**, čím sa zabezpečí, že budú správne priradené k príslušným spoločnostiam. Viac informácií nájdete v **[Príručke zákazníkov](customers)**.

> 💡 **Kľúčový rozdiel:** Kontakty a zákazníci sú samostatné entity.
>
> - **Zákazník** 🏢 → Spoločnosť alebo obchodná entita.
> - **Kontakt** 👤 → Jednotlivec spojený so spoločnosťou.
>
> ![Kontakt nie je zákazník]({{ bookRootUrl }}/content/assets/images/contacts/contacts-no-customers.png)
