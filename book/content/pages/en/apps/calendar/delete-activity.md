# How to Delete Activities  

The **Customers, Leads, and Deals** apps allow users to delete activities that are no longer needed. Deleting an activity removes it permanently from the record’s calendar, ensuring the schedule remains up to date.  

![Activity-Calendar]({{ bookRootUrl }}/book/content/assets/images/calendar/calendar-month-view.png)  

> 📅 **Deleting an activity does not affect the associated Customer, Lead, or Deal.** Only the selected activity will be removed.  

## How to Delete an Activity  

To delete an activity from a **Customer, Lead, or Deal**, follow these steps:  

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Record',
    'description': 'Locate the Customer, Lead, or Deal where the activity is scheduled.',
    'example': markdown('![Activity-find](' ~ bookRootUrl ~ '/book/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Calendar Tab',
    'description': 'Click on the `Calendar` tab to view all scheduled activities for the selected record.',
    'example': markdown('![Activity-calendar](' ~ bookRootUrl ~ '/book/content/assets/images/calendar/add/calendar-tab.png)'),
  },

  '3': {
    'title': 'Locate the Activity',
    'description': 'Find the activity you want to delete in the list or on the calendar. Click on it to open the activity details.',
    'example': markdown('![Activity-details](' ~ bookRootUrl ~ '/book/content/assets/images/calendar/delete/calendar-activity.png)'),
  },

  '4': {
    'title': 'Click the Delete Button',
    'description': 'Click the `Delete` button. A confirmation prompt will appear asking if you are sure you want to delete the activity.',
    'example': markdown('![Activity-delete](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/delete-button.png)'),
  },

  '5': {
    'title': 'Confirm the Deletion',
    'description': 'Click `Confirm delete` to permanently remove the activity. The calendar will update, and the activity will be deleted.',
    'example': markdown('![Activity-confirm](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/confirm-delete-button.png)'),
  }
}} %}  
