# How to delete Customer

Managing your customers effectively includes the ability to remove outdated or unnecessary records. Below are two methods for deleting a customer:

- Quick Deletion – Delete a customer directly from the list.
- Deletion via Edit Form – Remove a customer while editing its details.

## Delete Customer

Use this method for quick removal of a Customer from the list.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Customer',
    'description': 'Locate the desired customer in the list.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/book/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Click Delete Icon',
    'description': 'Click the **Delete icon** `🗑️` next to the customer.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-button.png)'),
  },

  '3': {
    'title': 'Confirm Deletion',
    'description': 'Confirm the deletion to permanently remove the contact.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/book/content/assets/images/popup/confirm-delete.png)'),
  }

}} %}

> 💡 Rows selected for deletion will appear in red!  
> <img src="{{ bookRootUrl }}/book/content/assets/images/customers/delete/customers-delete-row.png" alt="Customers-red" style="max-width: 100%; height: auto;">

---

### Delete Customer in edit form

If you need to review a customers’s details before deletion, you can remove it from the edit form.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Customer',
    'description': 'Locate the desired customer in the list.',
    'example': markdown('![Delete-customer](' ~ bookRootUrl ~ '/book/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Customer Record',
    'description': 'Click on the Customer to open its details.',
    'example': markdown('![Delete-customer](' ~ bookRootUrl ~ '/book/content/assets/images/customers/edit/customers-edit-form.png)'),
  },

  '3': {
    'title': 'Click Edit',
    'description': 'Click `Edit` in the top left corner.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/edit-button.png)'),
  },

  '4': {
    'title': 'Click Delete',
    'description': 'Click the `Delete` button in the top right corner.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-button.png)'),
  },

  '5': {
    'title': 'Confirm Deletion',
    'description': 'Click `Confirm` to remove the Customer.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/confirm-delete-button.png)'),
  },

  '6': {
    'title': 'Final Confirmation',
    'description': 'Confirm the deletion to remove the Contact permanently.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/popup/confirm-delete.png)'),
  }
}} %}
