{# tocOrder = 1 #}

# Create an order

## How to view orders:

In the left menu, go to `Sales` → `Orders`.

## How to add a new order:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Sales` → `Orders`.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add order</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  *  **Title** – name of the order (mandatory).
  *  **Customer** - select a customer.
  *  **Price excl. VAT / incl. VAT** – set order price.
  *  **Currency** – select currency.
  *  **Owner / Manager** – assign responsibility.
  *  **Order date** – default is today’s date.
  *  **Required delivery date** – planned delivery date.
  *  **Shipping information** – enter delivery instructions.
  *  **Template** – optional template for order documents.
  *  **Notes** – additional information.
    ',
  },

  '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}

## How to manage orders:

**Use tabs to manage:**

*  **Products** – list of items included in the order.
*  **Documents** – attach related files (e.g., contract, invoice).
*  **Projects** – link order with project execution.
*  Orders can be updated, closed, or converted into invoices/projects.
*  Generate a quotation or order confirmation directly via PDF.

## Tips

*  Always link orders with customers for better tracking.
*  Use Required delivery date to improve planning.
*  Attach important files directly in the order (contracts, shipping labels).
*  For repeat customers, use templates to speed up order creation.

## Common mistakes

Missing title – order cannot be saved.

Unlinked customer – may cause issues with invoicing.

Wrong delivery date – leads to logistics errors.

Not closing finished orders – can clutter the system and mislead reporting.

## Summary
| Topic                       | Summary                                                                      |
|-----------------------------|------------------------------------------------------------------------------|
| Orders Overview             | The Orders module helps you manage the full lifecycle of customer orders.    |
| Creating Orders             | Create new orders with + Add order.                                          |
| Order Details               | Define customer, prices, delivery details, and attach documents.             |
| Managing Order Products     | Manage order products, generate quotations, and link with projects.          |
| Closing and Updating Orders | Properly closing and updating orders keeps sales data accurate and reliable. |

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/sales/orders',
  'maxLevel': 2,
} %}