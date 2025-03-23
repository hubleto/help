# How to add a Contact

Adding a new contact allows you to link individuals to a customer. Follow these steps to create a new contact.

## Add Contact

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click Add Contact',
    'description': 'Click on the `Add Contact` button in the top left corner.',
    'example': markdown('![Add-contact-button](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/add/contacts-add-contact-button.png)'),
  },

  '2': {
    'title': 'Fill in the Required Details',
    'description': 'Complete the required fields in the form. (See the **[Contact](../contacts)** for attributes details.)',
    'example': markdown('![Add-contact](' ~ bookRootUrl ~ '/book/content/assets/images/contacts/add/contacts-add-empty-form.png)'),
  },

  '3': {
    'title': 'Click Add to Save',
    'description': 'Click `Add` to save the new contact.',
    'example': markdown('![Add-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/add-button.png)'),
  }
}} %}
