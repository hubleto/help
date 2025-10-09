{# tocOrder = 2 #}

# Step-by-Step

## How to view Inventory:
In the left menu, click `Supply chain` → `Inventory`.


**The table displays the following key data:**

*  **Product** – product name
*  **Location in warehouse** – warehouse position
*  **Status** – current status (available, reserved…)
*  **Quantity** – amount


## How to add a new Inventory item:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Supply chain` → `Inventory`.',
  },

  '2': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span></button> button',
  },

  '3': {
    'title': 'Fill in the required fields:',
    'description': '
  *  **Product** – select product from the list
  *  **Location in warehouse** – assign a specific warehouse location
  *  **Quantity** – enter the amount

**Optionally add:**
  *  **Status** – e.g., Active, Reserved, Damaged
  *  **Batch number**
  *  **Serial number**
  *  **Expiration / Received / Last moved** – relevant dates
    ',
  },

  '4': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}


## Tips
*  Use detailed location codes (e.g., A1.1, A1.2) to precisely track product placement.
*  For products with expiration or unique numbers, always add batch or serial number.
*  Perform stock-taking regularly – compare Inventory with Warehouse records.

## Common mistakes
Item not assigned to a specific warehouse location → system won’t save it.

Missing required fields (Product, Location, Quantity) → save fails.

Incorrect dates (e.g., expiration in the past) → they save but create inaccuracies in reports.

## Summary
| Topic                       | Summary                                                                                            |
|-----------------------------|----------------------------------------------------------------------------------------------------|
| Inventory Overview          | The Inventory module provides an overview of all stored items across your warehouses.              |
| Item Records                | Each item record contains quantity, location, and product details for precise tracking.            |
| Managing Inventory Levels   | You can update inventory levels, check stock movements, and link items to orders or projects.      |
| Benefits of Regular Updates | Regular inventory updates ensure accuracy, prevent shortages, and improve supply chain efficiency. |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/supply-chain/inventory',
  'maxLevel': 2,
} %}
