{# tocOrder = 1 #}

# Browse customers

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Customers`',
    'screenshotUrl': 'customers',
  }
}} %}

## How to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/customers',
  'maxLevel': 2,
} %}