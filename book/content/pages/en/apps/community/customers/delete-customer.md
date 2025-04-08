# Delete a Customer

Managing your customers effectively includes the ability to remove outdated or unnecessary records. Below are two methods for deleting a customer:

- **Quick Deletion** – Delete a customer directly from the list.
- **Deletion via Edit Form** – Remove a customer while editing its details.

## Delete Customer

Use this method for quick removal of a customer from the list.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Customer',
    'description': 'Start by locating the desired customer in the list. You can search for the customer or scroll through the list to find them.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Click Delete Icon',
    'description': 'Once you’ve found the customer, click the **Delete icon** `🗑️` next to their name. This will initiate the deletion process.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/content/assets/images/buttons/delete-button.png)'),
  },

  '3': {
    'title': 'Confirm Deletion',
    'description': 'A confirmation popup will appear. Click **Confirm** to permanently remove the customer from the system.',
    'example': markdown('![Customer-delete](' ~ bookRootUrl ~ '/content/assets/images/popup/confirm-delete.png)'),
  }
}} %}

> 💡 Rows selected for deletion will appear in red!  
> <img src="{{ bookRootUrl }}/content/assets/images/customers/delete/customers-delete-row.png" alt="Customers-red" style="max-width: 100%; height: auto;">

---

### Delete Customer in Edit Form

If you need to review a customer’s details before deletion, you can remove it from the edit form.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Customer',
    'description': 'Locate the customer you want to delete in the list and click to open their record.',
    'example': markdown('![Delete-customer](' ~ bookRootUrl ~ '/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Customer Record',
    'description': 'Click on the customer’s name to open their profile and view the details.',
    'example': markdown('![Delete-customer](' ~ bookRootUrl ~ '/content/assets/images/customers/edit/customers-edit-form.png)'),
  },

  '3': {
    'title': 'Click Edit',
    'description': 'In the customer’s profile, click the **Edit** button in the top left corner to make changes to the customer’s details.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/content/assets/images/buttons/edit-button.png)'),
  },

  '4': {
    'title': 'Click Delete',
    'description': 'While in the edit form, click the **Delete** button located in the top right corner of the page to begin the deletion process.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/content/assets/images/buttons/delete-button.png)'),
  },

  '5': {
    'title': 'Confirm Deletion',
    'description': 'Click **Confirm** to remove the customer from the system.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/content/assets/images/buttons/confirm-delete-button.png)'),
  },

  '6': {
    'title': 'Final Confirmation',
    'description': 'Finally, confirm the deletion to permanently remove the customer from the system.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/content/assets/images/popup/confirm-delete.png)'),
  }
}} %}  
