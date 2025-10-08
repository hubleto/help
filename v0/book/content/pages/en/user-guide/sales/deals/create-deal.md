{# tocOrder = 1 #}

# Create a deal

## How to view deals:

In the left menu, go to `Sales` → `Deals`.

## How to add a new deal:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Sales` → `Deals`.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add deal</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  * **Title** - deal name (required).
  * **Customer and Contact** - link the deal to an existing or new customer.
  * **Price excl. VAT / incl. VAT** - expected value.
  * **Source channel** - where the deal originated (Advertisement, Web, Email, Referral, etc.).
  * **Business type** - New or Existing.
  * **Deal result** - Unknown, Won, or Lost.
  * **Expected close date** - planned closing date.
  * **Shared folder** - link to external storage (optional).
  * **Notes** - additional information.
  * **Assign an Owner and optionally a Manager**
  ',
  },

  '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button.'
  }
}} %}

## How to manage deals:

*  Deals can be updated at any time (edit price, notes, result).
*  Use filters to quickly find deals by state (Qualified, Under Review, WON, LOST).
*  Attach related Products, Documents, Tasks, and Orders to each deal for full traceability.
*  Close a deal when finished (either Won or Lost).

## Tips

*  Always fill in the Expected close date to better forecast revenue.
*  Use Source channel to track which acquisition method brings the most business.
*  Attach proposals, quotes, or contracts directly to the deal for easier access.

## Common mistakes

Missing Title – without it, the deal cannot be saved.

Not linking customer/contact – makes reporting incomplete.

Forgotten status update – deals stay in "Unknown" and skew the pipeline.

## Summary
| Topic              | Summary                                                                               |
|--------------------|---------------------------------------------------------------------------------------|
| Deals Overview     | The Deals module allows you to track and manage all sales opportunities in one place. |
| Creating Deals     | Create deals via + Add Deal and link them to customers.                               |
| Deal Details       | Enter values, source, and expected close dates.                                       |
| Updating Deals     | Update results to keep the pipeline accurate.                                         |
| Linked Information | Attach related documents, products, and tasks for a complete overview.                |

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/sales/deals',
  'maxLevel': 2,
} %}