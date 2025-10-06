{# tocOrder = 2 #}

# Add and manage contacts

## How to view contacts:
In the left menu, go to `CRM` → `Contacts`.


**A clear list of all contacts will open, where you can see:**

`First/Last name` – name and surname.

`Customer` – the customer this person is linked to.

`Valid` – whether the contact is active.

`Emails` – email addresses.

`Phone Numbers` – phone numbers.

`Tags` – labels (e.g., CEO, IT manager, Support, Decision Maker).


## How to work with the list:
Use search or filter (top bar) to quickly find a contact.

Click a row to open the contact details.

To delete a contact, click the red trash icon in the right column.


## Adding a New Contact
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Contacts`',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add Contact</span></button> button',
  },

  '3': {
    'title': 'Fill in contact\'s data.',
    'description': '
**A form will open where you fill in:**
  * **First & last name** (required).
  * **Title (before & after) or middle name**.
  * **Customer** – select the customer this person belongs to.
  * **Tags** – role or category (CEO, IT manager, Support…).
  * **Notes** – internal notes.
  * **Valid** – toggle for contact validity (ON = valid).
    ',
  },

  '4': {
    'title': 'Click Save'
  }
}} %}


## Tips
Each contact can have multiple emails and phone numbers – always specify the type (Work, Home).

Use Tags to mark roles or functions in the organization (e.g., CEO, Decision Maker, IT manager).

If a contact is no longer valid, don’t delete it – just set Valid = OFF → it stays in the database but won’t be active.


## Common mistakes
**Unassigned Customer:** If you don’t select a customer, the contact will “float” and won’t be linked properly in reports.

**Duplicate contacts:** Always search by name or email before adding a new one.

**Missing tags:** Without tags, it’s easy to lose track in the database (especially if you have hundreds of contacts).


## Summary

| Topic                         | Summary                                                        |
|-------------------------------|----------------------------------------------------------------|
| Add a new contact             | In the left menu, go to CRM → Contacts.                        |
| Contacts vs. Customers        | Contacts are individuals linked to customers.                  |
| Quick Navigation with Tags    | Tags (CEO, IT manager, Support…) are key for quick navigation. |
| Don’t Delete, Just Switch OFF | For outdated contacts, switch Valid OFF instead of deleting.   |

## Table of contents

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/customers',
  'maxLevel': 2,
} %}
