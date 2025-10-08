{# tocOrder = 1 #}

## How to view products:
In the left menu, go to `Sales` → `Products`.


# Add a product

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Sales` → `Products`.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add product</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  * **Name** – product name (mandatory).
  *  **Sales** price – the selling price.
  *  **VAT and Margin** – tax and margin values.
  *  **Unit** – unit of measure (e.g., pcs, pack).
  *  **Description** – detailed description of the product.
  *  **Product type** – choose between:
  *  **Consumable** – physical product not tracked in stock.
  *  **Storable** – product tracked in inventory.
  *  **Invoicing policy** – invoicing rules:
  *  **Order** – invoice generated immediately after order confirmation.
  *  **Delivery** – invoice generated after delivery.
  *  **Manual** – invoice is not generated automatically.
  *  **Image** – upload a product image.
  *  **Additional optional fields: packaging, storage rules, reorder needs** (required) - workflow name.
    ',
  },

  '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}

## How to manage products:

*  Products can be edited anytime (e.g., price, description, invoicing rules).
*  Use filters to search by product name or group.
*  To organize, group products into Product groups.


## Tips

*  Use clear and consistent naming (e.g., Coffee Mug 300ml – Black).
*  For complex structures, use Product groups.
*  Upload product images to make identification easier.
*  For Storable products, always set proper inventory rules.

## Common mistakes

Missing name – without a name, the product cannot be saved.

Wrong product type – choosing Consumable instead of Storable will disable stock tracking.

Unclear invoicing policy – may cause unexpected invoices.

## Summary
| Topic             | Summary                                                                           |
|-------------------|-----------------------------------------------------------------------------------|
| Products Overview | The Products module allows you to manage all goods and services in your business. |
| Adding Products   | Add a new product with + Add product.                                             |
| Product Details   | Define price, VAT, product type, invoicing rules, and upload an image.            |
| Using Products    | Products are used in quotations, orders, invoices, and inventory tracking.        |

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/sales/products',
  'maxLevel': 2,
} %}