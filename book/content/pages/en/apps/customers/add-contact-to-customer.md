# How to Add a Contact to Customer

1. Open the **Customers** module and select an existing customer.
2. In the customer detail view, go to the **Personal Information** section.
3. Click **Add Contact** and fill in the necessary details.
4. Click **Save** to add the contact.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Customer',
    'description': 'Locate the desired customer in the list.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/book/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Customer Record',
    'description': 'In the customer detail view, go to the **Contact** section.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/book/content/assets/images/customers/contacts/customers-contact-section.png)'),
  },

  '3': {
    'title': 'Fill in the Required Details',
    'description': 'Complete the required fields in the form. (See the **[Contact](../contacts)** for attributes details.)',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/book/content/assets/images/customers/contacts/customers-contact-section-filled.png)'),
   },

  '4': {
    'title': 'Click Add to Save',
    'description': 'Click `Add` to save the new contact.',
    'example': markdown('![Add-customer-contact](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/add-button.png)'),
   }
}} %}
