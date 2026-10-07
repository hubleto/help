# Ako pridať kontakt

Pridanie nového kontaktu je dôležitým krokom pri prepojení osoby so zákazníkom, čo pomáha udržiavať presné záznamy a zlepšovať komunikáciu. Tento návod vás prevedie procesom vytvorenia nového kontaktu v systéme.

## Pridanie kontaktu

Postupujte podľa týchto krokov na pridanie nového kontaktu:

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Kliknite na tlačidlo "Pridať kontakt"',
    'description': 'Ak chcete začať pridávať kontakt, nájdite a kliknite na tlačidlo `Pridať kontakt`, ktoré sa nachádza v ľavom hornom rohu stránky kontaktov. Otvorí sa nové okno s formulárom na zadanie údajov o kontakte.',
    'example': markdown('![Add-contact-button](' ~ bookRootUrl ~ '/content/assets/images/contacts/add/contacts-add-contact-button.png)'),
  },

  '2': {
    'title': 'Vyplňte požadované údaje',
    'description': 'Vyplňte všetky povinné polia vo formulári na vytvorenie nového kontaktu. Polia ako meno, priezvisko a prepojenie so zákazníkom sú povinné. Pre podrobnejšie informácie o dostupných poliach si pozrite sekciu **[Kontakt](../contacts)**. Uistite sa, že kontakt je správne prepojený so zákazníkom pre presné vedenie záznamov.',
    'example': markdown('![Add-contact](' ~ bookRootUrl ~ '/content/assets/images/contacts/add/contacts-add-empty-form.png)'),
  },

  '3': {
    'title': 'Kliknite na "Pridať" pre uloženie',
    'description': 'Keď sú všetky povinné polia vyplnené, kliknite na tlačidlo `Pridať`, aby ste uložili nový kontakt. Systém uloží informácie o kontakte a priradí ho k príslušnému zákazníkovi. Po uložení budete presmerovaní na zoznam kontaktov, kde uvidíte novo pridaný kontakt.',
    'example': markdown('![Add-contact](' ~ bookRootUrl ~ '/content/assets/images/buttons/add-button.png)'),
  }
}} %}
