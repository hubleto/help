{# tocOrder = 4 #}

# Add contact to customer

You may add any number of contacts to the customer

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Customers`',
    'screenshotUrl': 'customers',
  },

  '2': {
    'title': 'Find the customer and open it',
    'screenshotUrl': 'customers/1',
  },

  '3': {
    'title': 'Click [#btn {"class": "btn-add", "title": "Add contact", "icon": "fas fa-plus"} #]',
    'screenshotUrl': 'customers/1',
  },

  '4': {
    'title': 'Fill in contact data',
    'description': '**PRO TIP:** Set as `Invoicing contact` if you want to send invoices to this contact.',
    'screenshotUrl': 'contacts/1',
  },

  '5': {
    'title': 'Click [#btn {"class": "btn-add", "title": "Add", "icon": "fas fa-plus"} #]'
  }
}} %}

### See also

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/crm/customers',
  'maxLevel': 2,
} %}