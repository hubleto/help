# Add Activities  

The **Customers, Leads, and Deals** apps allow users to add activities related to specific records. The activity form includes several required and optional fields to ensure all relevant details are captured. The activities you add are tied directly to customers, leads, or deals and help you track engagements, meetings, and tasks.  

![Activity-Calendar]({{ bookRootUrl }}/content/assets/images/calendar/add/calendar-empty-activity.png)  

To add an activity to a **Customer, Lead, or Deal**, follow these steps:  

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Record',
    'description': 'Locate the Customer, Lead, or Deal you want to add an activity to. Use the search bar to quickly find a record if the list is long.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Record',
    'description': 'Click on the record to view its details. This will open its profile along with any associated activities.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/content/assets/images/customers/edit/customers-edit-form.png)'),
  },

  '3': {
    'title': 'Click on the Calendar Tab',
    'description': 'Click the `Calendar` tab located at the top of the record’s profile window. This will allow you to view and add activities.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/content/assets/images/calendar/add/calendar-tab.png)'),
  },

  '4': {
    'title': 'Fill in the Required Details',
    'description': 'Complete the necessary fields in the form, such as selecting the activity type, entering the subject, and setting the start date. If needed, choose a contact person from the dropdown list.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/content/assets/images/calendar/add/calendar-filled-activity.png)'),
  },

  '5': {
    'title': 'Add the Activity to the Calendar',
    'description': 'Click `Add` to save the activity to the calendar. The new activity will be scheduled, and the calendar will automatically update.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/content/assets/images/buttons/add-button.png)'),
  }
}} %}  
