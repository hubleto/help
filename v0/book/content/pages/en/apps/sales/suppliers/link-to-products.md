{# tocOrder = 3 #}

# Link to products

Linking suppliers to products helps you keep purchasing information connected to the products you sell or manage. A product can have one supplier or several suppliers, which is useful when you buy the same product from different vendors or want to compare supplier-specific details.

Before you start, make sure the supplier already exists in the Suppliers module. If the supplier is not available yet, create it first in `Sales` → `Suppliers`.

## Link a supplier to a product

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Sales` → `Products`.',
    'description': 'Open the Products module from the left menu and find the product you want to work with.',
  },

  '2': {
    'title': 'Open the product record.',
    'description': 'Click the specific product in the products list. The product detail form will open.',
  },

  '3': {
    'title': 'Open the `Suppliers` tab.',
    'description': 'In the product form, use the tabs at the top of the record and switch to the **Suppliers** tab.',
  },

  '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add supplier</span></button> button.',
    'description': 'A form for adding a product supplier will open.',
  },

  '5': {
    'title': 'Select the supplier.',
    'description': 'Use the **Supplier** field to choose the supplier that should be connected to this product. You can also fill in supplier-specific details such as supplier product name, supplier product code, purchase price, delivery time, or internal notes if they are relevant.',
  },

  '6': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button.',
    'description': 'The supplier will be linked to the product and displayed in the product’s Suppliers tab.',
  }
}} %}

## Notes

A product is not limited to a single supplier. You can link multiple suppliers to the same product when the product can be purchased from more than one vendor.

The supplier-product link can store additional purchasing information, such as supplier product code, supplier product name, purchase price, delivery time, and internal notes.

## Tips

Create the supplier record before linking it to a product. This keeps the linking process faster and prevents duplicate supplier records.

Use supplier product codes when your supplier uses different identifiers than your internal product codes.

Add delivery time and purchase price where available, because this information can help your team compare supplier options later.

## Common mistakes

Trying to add a supplier before the product is saved: the product must exist before supplier links can be added.

Creating duplicate suppliers: always search the Suppliers module first before adding a new supplier record.

Leaving supplier-specific fields empty when they are important for ordering: supplier product codes and purchase prices can be useful for purchasing and communication.

## Summary

| Topic | Summary |
| ----- | ------- |
| Where to link suppliers | Open a product and use the Suppliers tab. |
| Required starting point | The product and supplier should already exist. |
| Multiple suppliers | One product can be connected to multiple suppliers. |
| Useful details | Supplier product code, supplier product name, purchase price, delivery time, and notes. |

## How to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/sales/suppliers',
  'maxLevel': 2,
} %}
