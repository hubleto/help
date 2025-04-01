# How to Add a Lead

Adding a new lead is a crucial step in tracking potential business opportunities. A lead represents an individual or company that has shown interest in your products or services. This guide will walk you through the process of adding a new lead in the system.

## Add Lead

Follow these steps to create a new lead:

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click on Add Lead',
    'description': 'To create a new lead, navigate to the Leads section and click the `Add Lead` button. This will open a new form where you can enter details about the lead.',
    'example': markdown('![Add-Lead](' ~ bookRootUrl ~ '/book/content/assets/images/leads/lead-add-lead-button.png)'),
  },

  '2': {
    'title': 'Fill in the Required Details',
    'description': 'Enter key details such as the lead title, assign it to a customer, and provide any additional information that might be relevant. Ensure that all mandatory fields are completed before proceeding. For a detailed overview of available fields, refer to the **[Leads](../leads)** section.',
    'example': markdown('![Fill-Lead](' ~ bookRootUrl ~ '/book/content/assets/images/leads/lead-filled-form.png)'),
  },

  '3': {
    'title': 'Save the Lead',
    'description': 'Once all required information is entered, click the `Save` button to store the lead in the system. The new lead will then be listed in your leads dashboard, where you can track its progress and update details as necessary.',
    'example': markdown('![Save-Lead](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/save-button.png)'),
  }
}} %}
