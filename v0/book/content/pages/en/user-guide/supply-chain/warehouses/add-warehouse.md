{# tocOrder = 1 #}

# Add a warehouse

In the left menu, click `Supply chain` → `Warehouses`.

Click on a warehouse to view its detail.


**In the warehouse detail, you will see:**


*  Basic info (name, type, address, contact person)
*  Capacity and current occupancy
*  Locations – sub-warehouse units


**Click on a specific Location to open its detail.**

## How to add a new warehouse
 {% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Supply chain` → `Warehouses`.',
  },

  '2': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add warehouse</span></button> button
    
*  A new warehouse form will open, where you can define all storage and contact details.',
  },

  '3': {
    'title': 'Warehouse details:',
    'description': '
  *  **Name** (required) – warehouse name (e.g., “Main Distribution Center” or “Regional Hub East”).
  *  **Warehouse type** – choose from existing categories (for example Main, Secondary, Transit).
  *  **Operational status** – select whether the warehouse is Active, Under maintenance, or Inactive.

**Manager of operation**
  *  Assign the responsible person (Manager), who will oversee warehouse operations, logistics, and capacity management.

**Contact information**
  *  **Contact person** – main responsible individual.
  *  **Contact email** – used for automated notifications or order coordination.
  *  **Contact phone** – for urgent communication or logistics confirmation.

**Capacity and occupancy**
  *  **Capacity** – total space of the warehouse (automatically calculated based on all internal locations).
  *  **Capacity unit** – measurement unit, e.g., m³, pallets, or items.
  *  **Current occupancy** – current utilization of warehouse capacity in relation to total capacity.
  
⚙️ Tip: Maintaining accurate capacity helps prevent overstocking and optimizes delivery schedules.

**Address and location**
  *  On the right side of the window, fill in:
  *  **Address** – street, city, or industrial zone.
  *  **Address Plus code** – optional, for GPS accuracy or mapping systems.
  *  **Coordinates** – longitude and latitude (used for route optimization or mapping in logistics).

**Additional information**
  *  **Description** – notes or specific warehouse details (e.g., "Cold storage only" or "24/7 operations").
  *  **Photos (#1–3)** – upload images of the warehouse (useful for documentation, safety audits, or navigation for couriers).

**Locations**
  *  At the bottom of the page, you’ll see the section Locations.
  *  After saving the warehouse, the system will prompt you to define its internal locations – such as zones, aisles, or sections (e.g., Zone A – perishables, Zone B – tools).
    ',
  },

  '4': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}



## Tips
*  Warehouse capacity is calculated automatically from all its locations.
*  You can add photos to each warehouse (e.g., layout or real images).
*  The Manager of operation is set when creating the warehouse but can be changed anytime.


## Common mistakes
Forgetting to add a Location → the warehouse capacity cannot be calculated.

Incorrect address entry → may cause problems with logistics integrations.

Not updating Current occupancy if inventory checks are done incorrectly.

## Summary
| Topic                     | Summary                                                                                                                 |
|---------------------------|-------------------------------------------------------------------------------------------------------------------------|
| Warehouses Overview       | The Warehouses module helps you manage all company storage locations efficiently..                                      |
| Warehouse Details         | Each warehouse includes key details such as name, type, capacity, address, and assigned manager.                        |
| Organizing Warehouses     | You can add contact information, photos, and define internal locations for better organization.                         |
| Maintaining Accurate Data | Keeping warehouse data accurate ensures smoother logistics, clear capacity tracking, and reliable inventory operations. |

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/supply-chain/warehouses',
  'maxLevel': 2,
} %}