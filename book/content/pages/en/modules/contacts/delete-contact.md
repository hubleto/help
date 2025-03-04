# How to delete Contact

Managing your contacts effectively includes the ability to remove outdated or unnecessary records. Below are two methods for deleting a contact:

- Quick Deletion – Delete a contact directly from the list.
- Deletion via Edit Form – Remove a contact while editing its details.

## Delete Contact

Use this method for quick removal of a contact from the list.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Contact',
    'description': 'Locate the contact in the list.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contact.png)'),
  },

  '2': {
    'title': 'Click Delete Icon',
    'description': 'Click the **Delete icon** `🗑️` next to the contact.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/delete-button.png)'),
  },

  '3': {
    'title': 'Confirm Deletion',
    'description': 'Confirm the deletion to permanently remove the contact.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contacts-confirm-delete.png)'),
  }

}} %}

> 💡 Rows selected for deletion will appear in red!  
> ![Contact-red]({{ bookRootUrl }}/book/content/assets/images/contacts/row.png)

---

## Delete Contact in Edit Form

If you need to review a contact’s details before deletion, you can remove it from the edit form.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Contact',
    'description': 'Locate the contact in the list.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contact.png)'),
  },

  '2': {
    'title': 'Open the Contact Record',
    'description': 'Click on the contact to open its details.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contacts-edit-form.png)'),
  },

  '3': {
    'title': 'Click Edit',
    'description': 'Click `Edit` in the top left corner.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/edit-button.png)'),
  },

  '4': {
    'title': 'Click Delete',
    'description': 'Click the `Delete` button in the top right corner.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/delete-button.png)'),
  },

  '5': {
    'title': 'Confirm Deletion',
    'description': 'Click `Confirm` to remove the contact.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/confirm-delete-button.png)'),
  },

  '6': {
    'title': 'Final Confirmation',
    'description': 'Confirm the deletion to remove the contact permanently.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contacts-confirm-delete)'),
  }
}} %}
