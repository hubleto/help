# Edit Activities

Editing an existing activity allows you to update details such as the subject, date, or assigned contact. Follow these steps to modify an activity.

## Edit Activity

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Record',
    'description': 'Locate the Customer, Lead, or Deal that contains the activity you want to edit. Use the search bar to quickly find a record if the list is long.',
    'example': markdown('![Activity-edit](' ~ bookRootUrl ~ '/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Record',
    'description': 'Click on the record to view its details. This will open its profile along with any associated activities.',
    'example': markdown('![Activity-edit](' ~ bookRootUrl ~ '/content/assets/images/customers/edit/customers-edit-form.png)'),
  },

  '3': {
    'title': 'Go to the Calendar Tab',
    'description': 'Click the `Calendar` tab located at the top of the record’s profile window. This will allow you to view and edit activities.',
    'example': markdown('![Activity-edit](' ~ bookRootUrl ~ '/content/assets/images/calendar/add/calendar-tab.png)'),
  },

  '4': {
    'title': 'Select the Activity',
    'description': 'Click on the activity you wish to edit. This will open the activity details.',
    'example': markdown('![Activity-edit](' ~ bookRootUrl ~ '/content/assets/images/calendar/delete/calendar-activity.png)'),
  },

  '5': {
    'title': 'Edit the Required Details',
    'description': 'Update the necessary fields, such as the subject, activity type, start date, or assigned contact.',
    'example': markdown('![Activity-edit](' ~ bookRootUrl ~ '/content/assets/images/calendar/edit/calendar-edit-activity-form.png)'),
  },

  '6': {
    'title': 'Save Changes',
    'description': 'Click `Save` to apply the modifications. The calendar will automatically update with the new details.',
    'example': markdown('![Activity-edit](' ~ bookRootUrl ~ '/content/assets/images/buttons/save-button.png)'),
  }
}} %}
