# Add a Contact to Customer

Adding a contact to a customer allows you to link an individual or representative to the customer’s record. Follow these steps to add a new contact.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Customer',
    'description': 'Start by locating the desired customer in the list. Use the search bar if needed to quickly find the customer.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Customer Record',
    'description': 'Click on the customer’s name to open their detailed profile. Once inside, navigate to the **Contact** section within the customer’s profile.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/content/assets/images/customers/contacts/customers-contact-section.png)'),
  },

  '3': {
    'title': 'Fill in the Required Details',
    'description': 'In the **Contact** section, fill in the necessary fields for the new contact. This may include details such as the contact’s name, phone number, email, etc. (See the **[Contact](../contacts)** for attribute details.)',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/content/assets/images/customers/contacts/customers-contact-section-filled.png)'),
  },

  '4': {
    'title': 'Click Add to Save',
    'description': 'Once all the necessary information is filled in, click the **Add** button to save the new contact to the customer’s record.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/content/assets/images/buttons/add-button.png)'),
  }
}} %}  
