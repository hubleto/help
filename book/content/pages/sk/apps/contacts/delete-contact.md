# Ako odstrániť kontakt

Efektívna správa kontaktov zahŕňa aj možnosť odstrániť zastarané alebo nepotrebné záznamy. Existujú dva spôsoby, ako odstrániť kontakt:

- **Rýchle odstránenie** – Vymazanie kontaktu priamo zo zoznamu.
- **Odstránenie cez editačný formulár** – Vymazanie kontaktu pri úprave jeho údajov.

## Odstránenie kontaktu

Použite túto metódu na rýchle odstránenie kontaktu zo zoznamu:

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Vyhľadajte kontakt',
    'description': 'Nájdite kontakt, ktorý chcete odstrániť, v zozname kontaktov.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contacts-click-on-record.png)'),
  },

  '2': {
    'title': 'Kliknite na ikonu odstránenia',
    'description': 'Po vyhľadaní kontaktu kliknite na **ikonu koša** (`🗑️`) vedľa mena kontaktu. Spustí sa tým proces odstránenia.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-can.png)'),
  },

  '3': {
    'title': 'Potvrďte odstránenie',
    'description': 'Zobrazí sa výzva na potvrdenie. Kliknite na `Potvrdiť`, aby ste natrvalo odstránili kontakt zo systému. Táto akcia je nevratná.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/delete/contacts-confirm-delete.png)'),
  }

}} %}

> 💡 Riadky označené na odstránenie budú zvýraznené červenou farbou!  
> ![Contact-red]({{ bookRootUrl }}/book/content/assets/images/contacts/delete/contacts-delete-row.png)

---

## Odstránenie kontaktu cez editačný formulár

Ak potrebujete pred odstránením kontaktu skontrolovať jeho údaje, môžete ho odstrániť priamo v editačnom formulári.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Vyhľadajte kontakt',
    'description': 'Nájdite kontakt, ktorý chcete odstrániť, v zozname kontaktov.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contacts-click-on-record.png)'),
  },

  '2': {
    'title': 'Otvorte záznam kontaktu',
    'description': 'Kliknite na kontakt, aby sa otvorila jeho detailná stránka, kde môžete upravovať a spravovať jeho informácie.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/edit/contacts-edit-form.png)'),
  },

  '3': {
    'title': 'Kliknite na "Upraviť"',
    'description': 'V ľavom hornom rohu stránky kontaktu kliknite na tlačidlo `Upraviť`, aby ste vstúpili do režimu úprav. Odtiaľto môžete vykonávať zmeny alebo kontakt odstrániť.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/edit-button.png)'),
  },

  '4': {
    'title': 'Kliknite na "Odstrániť"',
    'description': 'V pravom hornom rohu editačného formulára kliknite na tlačidlo `Odstrániť`, aby ste iniciovali proces vymazania.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-button.png)'),
  },

  '5': {
    'title': 'Potvrďte odstránenie',
    'description': 'Zobrazí sa dialógové okno na potvrdenie. Kliknite na `Potvrdiť`, aby ste pokračovali v odstránení kontaktu zo systému.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/confirm-delete-button.png)'),
  },

  '6': {
    'title': 'Konečné potvrdenie',
    'description': 'Nakoniec je potrebné vykonať posledné potvrdenie. Po potvrdení bude kontakt natrvalo odstránený zo systému.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/popup/confirm-delete.png)'),
  }
}} %}
