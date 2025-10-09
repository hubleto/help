{# tocOrder = 1 #}

# Step-by-Step

In the left menu, click `Finance` → `Invoices`.

## How to add invoices
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Supply chain` → `Inventory`.',
  },

  '2': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add invoice</span></button> button',
  },

  '3': {
    'title': 'Fill in the basic fields:',
    'description': '
  *  **Issued by** – person/department issuing the invoice
  *  **Invoice profile** – invoice profile (e.g., template type)
  *  **Customer** – the customer the invoice is for
  *  **Template** - selected invoice template
  *  **Currency** - currency of the invoice
    ',
  },

  '4': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}
**After creating the invoice, you can also add attachments or documents (e.g., PDF, supporting files).**

## Tips
*  Use filters for quick search by invoice number, customer, or due date.
*  Invoices can be exported or directly printed as PDF.
*  Attach supporting documents (e.g., contracts, orders) so everything is in one place.

## Common mistakes
Incorrectly filled Customer → invoice may be linked to the wrong client.

Missing currency or template → invoice cannot be generated correctly.

Missing attachments → complicates finding the invoice later.

## Summary
| Topic                           | Summary                                                                                                 |
|---------------------------------|---------------------------------------------------------------------------------------------------------|
| Invoices Overview               | The Invoices module allows you to create, manage, and track all customer and supplier invoices.         |
| Invoice Details                 | Each invoice includes essential details such as client, issue date, due date, items, and total amount.  |
| Generating and Sharing Invoices | You can easily generate, download, or share invoices directly from the system.                          |
| Organizing Invoices             | Keeping invoices organized ensures accurate accounting, timely payments, and clear financial reporting. |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/finance/invoices',
  'maxLevel': 2,
} %}
