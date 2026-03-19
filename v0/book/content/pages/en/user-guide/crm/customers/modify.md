{# tocOrder = 3 #}

# Modify customer

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Customers`',
    'screenshotUrl': 'customers',
  },

  '2': {
    'title': 'Find the customer and open it',
    'screenshotUrl': 'customers/1',
  },

  '3': {
    'title': 'Modify customer\'s information',
  },

  '4': {
    'title': 'Click <button class="btn btn-add"><span class="icon"><i class="fas fa-save"></i></span><span class="text">Save</span></button>'
  }
}} %}

## Tips

Owner vs. Manager: The Owner is the person who owns the record, while the Manager is the one actively managing the customer.

Add Tags right away – they make later filtering easier.

Use the Shared folder to insert a link to a cloud folder with customer-related documents.

## Common mistakes

Missing required fields: You must fill in at least Name, Customer ID, Owner, Manager.

Duplicate ID: Each customer must have a unique Customer ID.

Forgotten Active status: If a customer isn’t marked Active, they won’t appear in “Active” filters.

## Summary

| Topic              | Summary                                            |
| ------------------ | -------------------------------------------------- |
| Add a new customer | Go to CRM -> Customers and click + Add Customer.   |
| Required fields    | Name, Customer ID, Owner, Manager                  |
| Tags and notes     | Use Tags and Notes for better organization.        |
| Documents          | Documents can be linked through the Shared folder. |

## Table of contents

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/customers',
  'maxLevel': 2,
} %}