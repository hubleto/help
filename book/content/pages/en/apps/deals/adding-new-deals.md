# How to Add a Deal

Tracking deals is essential for managing sales opportunities and monitoring their progress through the pipeline. A deal represents a potential transaction with a customer. This guide will walk you through the process of adding a new deal in the system.

## Add Deal

Follow these steps to create a new deal:

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click on Add Deal',
    'description': 'To create a new deal, navigate to the Deals section and click the `Add Deal` button. This will open a new form where you can enter details about the deal.',
    'example': markdown('![Add-Deal](' ~ bookRootUrl ~ '/book/content/assets/images/deals/deal-add-deal-button.png)'),
  },

  '2': {
    'title': 'Fill in the Required Details',
    'description': 'Enter key details such as the deal title, select the associated customer, set the expected value, and define the deal stage. Ensure that all mandatory fields are completed before proceeding. For a detailed overview of available fields, refer to the **[Deals](../deals)** section.',
    'example': markdown('![Fill-Deal](' ~ bookRootUrl ~ '/book/content/assets/images/deals/deal-filled-form.png)'),
  },

  '3': {
    'title': 'Save the Deal',
    'description': 'Once all required information is entered, click the `Save` button to store the deal in the system. The new deal will then appear in your deals dashboard, where you can track its progress and update details as necessary.',
    'example': markdown('![Save-Deal](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/save-button.png)'),
  }
}} %}
