{# tocOrder = 1 #}

# Add a supplier

## How to view suppliers:

In the left menu, go to `Sales` → `Suppliers`.

## How to add a new supplier:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Sales` → `Suppliers`.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add supplier</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  * **Name** (required) - supplier name (required).
  * **Address, City, Postal code, Country** - supplier’s location.
  * **Contact, Order email** - contact person and ordering email.
  * **Tax ID, Company ID, VAT ID** - identification details.
  * **Payment account number** - bank account for payments.
    ',
  },

  '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button. The supplier will be saved in the list.'
  }
}} %}


## How to manage suppliers:

1.  Click on the supplier’s name to open its details.
2.  In the detail view, you can edit information or delete the record.
3.  Use filters and column sorting to quickly find a specific supplier.


## Tips

*  Use clear naming conventions (e.g., “ElectroCorp – Main Supplier”) for easier searching.
*  Add notes or categories if the supplier is tied to specific products or services.
*  For teamwork, it’s useful to classify suppliers (e.g., IT services, logistics, office supplies).

## Common mistakes

Missing name – without it, the supplier cannot be saved.

Incorrect or missing IDs – may cause issues with invoicing or compliance.

Duplicate records – always search before adding a new supplier.

## Summary
| Topic                | Summary                                                                            |
|----------------------|------------------------------------------------------------------------------------|
| Suppliers Overview   | The Suppliers module gives you a full overview of all vendor contacts and details. |
| Adding New Suppliers | Add new suppliers via + Add supplier.                                              |
| Supplier Details     | Fill in essential fields: Name, Contact, IDs, Account number.                      |
| Managing Suppliers   | Open, update, or delete suppliers anytime.                                         |
| Filters and Sorting  | Use filters and sorting to keep your supplier list efficient.                      |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/sales/suppliers',
  'maxLevel': 2,
} %}