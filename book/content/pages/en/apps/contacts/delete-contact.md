# How to Delete a Contact

Managing your contacts effectively includes the ability to remove outdated or unnecessary records. Below are two methods for deleting a contact:

- **Quick Deletion** – Delete a contact directly from the list.
- **Deletion via Edit Form** – Remove a contact while editing its details.

## Delete Contact

Use this method for quick removal of a contact from the list:

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Contact',
    'description': 'Locate the contact you wish to delete from the contact list.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contacts-click-on-record.png)'),
  },

  '2': {
    'title': 'Click Delete Icon',
    'description': 'Once you have located the contact, click on the **Delete icon** (`🗑️`) next to the contact’s name. This will initiate the deletion process.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-can.png)'),
  },

  '3': {
    'title': 'Confirm Deletion',
    'description': 'A confirmation prompt will appear. Click `Confirm` to permanently remove the contact from the system. This action cannot be undone.',
    'example': markdown('![Contact-delete](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/delete/contacts-confirm-delete.png)'),
  }

}} %}

> 💡 Rows selected for deletion will appear in red!  
> ![Contact-red]({{ bookRootUrl }}/book/content/assets/images/contacts/delete/contacts-delete-row.png)

---

## Delete Contact in Edit Form

If you need to review a contact’s details before deletion, you can remove it from the edit form.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Contact',
    'description': 'Locate the contact you wish to delete from the contact list.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/contacts-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Contact Record',
    'description': 'Click on the contact to open its full details page, where you can edit and manage its information.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/edit/contacts-edit-form.png)'),
  },

  '3': {
    'title': 'Click Edit',
    'description': 'In the top left corner of the contact record page, click on the `Edit` button to enter the contact’s edit mode. This will allow you to make changes or delete the contact.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/edit-button.png)'),
  },

  '4': {
    'title': 'Click Delete',
    'description': 'In the top right corner of the edit form, click the `Delete` button to initiate the deletion process.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-button.png)'),
  },

  '5': {
    'title': 'Confirm Deletion',
    'description': 'A confirmation dialog will appear. Click `Confirm` to proceed with deleting the contact from the system.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/confirm-delete-button.png)'),
  },

  '6': {
    'title': 'Final Confirmation',
    'description': 'Finally, you will need to confirm the deletion. After confirmation, the contact will be permanently removed from the system.',
    'example': markdown('![Delete-contact](' ~ bookRootUrl ~ '/book/content/assets/images/popup/confirm-delete.png)'),
  }
}} %}
