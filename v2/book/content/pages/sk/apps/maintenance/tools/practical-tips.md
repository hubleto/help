{# tocOrder = 1 #}

# Praktické tipy

Vývojárske nástroje obsahujú kontrolu konzistencie databázy a generátor základného kódu formulára. Sú určené používateľom, ktorí rozumejú modelom, databáze a frontendovým komponentom projektu.

## Kontrola konzistencie databázy

Nástroj porovnáva tabuľky a stĺpce databázy s modelmi načítanými z aktívnych aplikácií. Aktuálne vie odhaliť chýbajúce tabuľky a nevirtuálne stĺpce. Nie je to všeobecná kontrola zmenených definícií stĺpcov, osirelých záznamov ani všetkých cudzích kľúčov.

Pred spustením navrhnutých zmien:

1. vytvorte overenú zálohu;
2. skontrolujte popis a vygenerované SQL každej položky;
3. vyberte iba zmeny, ktorým rozumiete;
4. dôležité úpravy najprv overte vo vývojovom alebo testovacom prostredí;
5. po spustení prečítajte výsledný log.

Vybrané príkazy sa spúšťajú v databázovej transakcii. Chybu však treba vyriešiť aj vtedy, keď sa transakcia vráti späť.

## Návrhár formulárov

Návrhár formulárov generuje základ implementácie `renderContent()` v TypeScripte pre podporované rozloženia. Nie je to vizuálny drag-and-drop editor a zmeny nepublikuje automaticky.

Vygenerovaný kód treba skopírovať do správneho komponentu, nahradiť ukážkové názvy reálnymi stĺpcami modelu, zachovať existujúcu logiku a následne zostaviť a otestovať frontend.
