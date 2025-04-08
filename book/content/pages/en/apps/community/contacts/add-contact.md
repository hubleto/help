# Add a Contact

Adding a new contact is an essential step for linking an individual to a customer, which helps maintain accurate records and improve communication. This guide will walk you through the process of creating a new contact in the system.

## Add Contact

Follow these steps to add a new contact:

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click Add Contact',
    'description': 'To begin adding a contact, locate and click the `Add Contact` button located at the top left corner of the contacts page. This will open a new form where you can enter the contact details.',
    'example': markdown('![Add-contact-button](' ~ bookRootUrl ~ '/content/assets/images/contacts/add/contacts-add-contact-button.png)'),
  },

  '2': {
    'title': 'Fill in the Required Details',
    'description': 'Complete the required fields in the form to create a new contact. Fields like first name, last name, and customer association are mandatory. For more detailed information on what fields to complete, refer to the **[Contact](../contacts)** section for all available attributes. Ensure that the contact is correctly linked to a customer for proper record keeping.',
    'example': markdown('![Add-contact](' ~ bookRootUrl ~ '/content/assets/images/contacts/add/contacts-add-empty-form.png)'),
  },

  '3': {
    'title': 'Click Add to Save',
    'description': 'Once all the required fields have been filled out, click the `Add` button to save the new contact. The system will save the contact’s information and associate it with the corresponding customer. You will be redirected to the contact list where you can see your newly added contact.',
    'example': markdown('![Add-contact](' ~ bookRootUrl ~ '/content/assets/images/buttons/add-button.png)'),
  }
}} %}
