{# tocOrder = 1 #}

# Zákazníci

Sekcia Zákazníci uchováva záznamy o firmách aj jednotlivcoch, s ktorými vaša organizácia spolupracuje.

V prehľade môžete podľa dostupných stĺpcov sledovať základné údaje, aktivitu, vlastníka, manažéra a priradené značky.

{% include 'components/screenshot.twig' with {
  'screenshotUrl': 'customers',
  'caption': 'Zoznam zákazníkov'
} %}

## Ako na to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'sk/apps/crm/customers',
  'maxLevel': 2,
} %}
