# Ako pridať kontakt k zákazníkovi

Pridanie kontaktu k zákazníkovi umožňuje prepojiť jednotlivca alebo zástupcu so záznamom zákazníka. Postupujte podľa týchto krokov na pridanie nového kontaktu.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Vyhľadajte zákazníka',
    'description': 'Najskôr vyhľadajte požadovaného zákazníka v zozname. Ak je potrebné, použite vyhľadávací panel na rýchle nájdenie zákazníka.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/book/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Otvorte záznam zákazníka',
    'description': 'Kliknite na meno zákazníka, aby ste otvorili jeho podrobný profil. Po otvorení prejdite do sekcie **Kontakt** v rámci profilu zákazníka.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/book/content/assets/images/customers/contacts/customers-contact-section.png)'),
  },

  '3': {
    'title': 'Vyplňte požadované údaje',
    'description': 'V sekcii **Kontakt** vyplňte potrebné polia pre nový kontakt. Môže to zahŕňať údaje, ako sú meno kontaktu, telefónne číslo, e-mail atď. (Pozrite si **[Kontakt](../contacts)** pre podrobnosti o atribútoch.)',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/book/content/assets/images/customers/contacts/customers-contact-section-filled.png)'),
  },

  '4': {
    'title': 'Kliknite na "Pridať" pre uloženie',
    'description': 'Po vyplnení všetkých potrebných informácií kliknite na tlačidlo **Pridať**, aby ste uložili nový kontakt k záznamu zákazníka.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/add-button.png)'),
  }
}} %}
