{# tocOrder = 1 #}

# Customers

The Customers section is used to keep records of all your customers – whether companies or individuals. 
 
In one clear list, you can see basic details, activity status, record owner, manager, and assigned tags.

{% include 'components/screenshot.twig' with {
  'screenshotUrl': 'customers',
  'caption': 'List of customers'
} %}

## How to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/crm/customers',
  'maxLevel': 2,
} %}
