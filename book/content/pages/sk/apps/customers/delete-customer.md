# Ako odstrániť zákazníka

Efektívne spravovanie zákazníkov zahŕňa aj schopnosť odstrániť zastarané alebo nepotrebné záznamy. Nižšie sú uvedené dva spôsoby na odstránenie zákazníka:

- **Rýchle odstránenie** – Odstráňte zákazníka priamo zo zoznamu.
- **Odstránenie cez formulár na úpravu** – Odstráňte zákazníka počas úpravy jeho údajov.

## Odstránenie zákazníka

Použite tento spôsob na rýchle odstránenie zákazníka zo zoznamu.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Nájdenie zákazníka',
    'description': 'Začnite tým, že nájdete požadovaného zákazníka v zozname. Môžete vyhľadávať zákazníka alebo prejsť zoznamom.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/book/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Kliknite na ikonu odstránenia',
    'description': 'Keď nájdete zákazníka, kliknite na ikonu **Odstrániť** `🗑️` vedľa jeho mena. Týmto sa spustí proces odstránenia.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-button.png)'),
  },

  '3': {
    'title': 'Potvrdenie odstránenia',
    'description': 'Zobrazí sa potvrdenie. Kliknite na **Potvrdiť**, aby ste trvalo odstránili zákazníka zo systému.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/book/content/assets/images/popup/confirm-delete.png)'),
  }
}} %}

> 💡 Riadky vybrané na odstránenie sa zobrazia červené!  
> <img src="{{ bookRootUrl }}/book/content/assets/images/customers/delete/customers-delete-row.png" alt="Customers-red" style="max-width: 100%; height: auto;">

---

### Odstránenie zákazníka cez formulár na úpravu

Ak si chcete pred odstránením zákazníka prezrieť jeho detaily, môžete ho odstrániť cez formulár na úpravu.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Nájdenie zákazníka',
    'description': 'Nájdite zákazníka, ktorého chcete odstrániť, a kliknite na jeho záznam.',
    'example': markdown('![Delete-customer](' ~ bookRootUrl ~ '/book/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Otvorenie záznamu zákazníka',
    'description': 'Kliknite na meno zákazníka, aby ste otvorili jeho profil a zobrazili detaily.',
    'example': markdown('![Delete-customer](' ~ bookRootUrl ~ '/book/content/assets/images/customers/edit/customers-edit-form.png)'),
  },

  '3': {
    'title': 'Kliknite na "Upraviť"',
    'description': 'V profile zákazníka kliknite na tlačidlo **Upraviť** v ľavom hornom rohu, aby ste mohli upravit jeho detaily.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/edit-button.png)'),
  },

  '4': {
    'title': 'Kliknite na "Odstrániť"',
    'description': 'V rámci formulára na úpravu kliknite na tlačidlo **Odstrániť** v pravom hornom rohu stránky na začatie procesu odstránenia.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-button.png)'),
  },

  '5': {
    'title': 'Potvrďte odstránenie',
    'description': 'Kliknite na **Potvrdiť**, aby ste odstránili zákazníka zo systému.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/confirm-delete-button.png)'),
  },

  '6': {
    'title': 'Konečné potvrdenie',
    'description': 'Nakoniec, potvrďte odstránenie, aby ste trvalo odstránili zákazníka zo systému.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/popup/confirm-delete.png)'),
  }
}} %}
