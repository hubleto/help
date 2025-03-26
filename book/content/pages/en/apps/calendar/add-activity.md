# How to Add Activities  

The **Customers, Leads, and Deals** apps allow users to add activities related to specific records. The activity form includes several required and optional fields to ensure all relevant details are captured. The activities you add are tied directly to customers, leads, or deals and help you track engagements, meetings, and tasks.  

![Activity-Calendar]({{ bookRootUrl }}/book/content/assets/images/calendar/add/calendar-empty-activity.png)  

## Attributes  

| Attribute               | Description                                                                                   | Example          |
|-------------------------|-----------------------------------------------------------------------------------------------|------------------|
| **Customer, Lead, or Deal** (Required) | Pre-filled with the selected record. This field is required and cannot be changed. | *ABC Corp* / *New Lead* / *Deal #1234* |
| **Contact Person** (Optional) | A dropdown menu displaying contacts associated with the selected record. You can choose a contact, but this field is optional. | *John Doe* |
| **Subject** (Required) | A brief description of the activity. It is the main purpose of the activity you are scheduling. | *Follow-up Call* |
| **Activity Type** (Required) | The type of activity being created. Options include: Meeting, Business Trip, Call, Email, Other. Select the appropriate activity type. | *Meeting* |
| **Start Date** (Required) | The date when the activity begins. Time is optional and not required. If you click on a calendar cell, this will be pre-filled. | *2025-03-26* |
| **Start Time** (Optional) | The time the activity begins. If not provided, it will default to a standard time (e.g., 9:00 AM). | *10:00 AM* |
| **End Date & End Time** (Optional) | The date and time when the activity ends. If not provided, it is considered an open-ended event. If you select a start date, the end date is auto-filled. | *2025-03-26* / *11:00 AM* |
| **All Day Switch** (Optional) | When enabled, the activity is considered an all-day event, and you do not need to specify start and end times. | *Enabled* |
| **Created By** (Automatically set) | Automatically set to the activity owner's name and cannot be changed. This indicates who created the activity. | *Owner Name* |

> 💡 **Customers, Leads, and Deals – What's the Difference?**  
> ✔️ **Customer** refers to a company or business you have an established relationship with.  
> ✔️ **Lead** is a potential customer who has shown interest but has not yet made a purchase or signed a contract.  
> ✔️ **Deal** represents an ongoing business opportunity, such as a sales negotiation or contract discussion.

## How to Add an Activity  

To add an activity to a **Customer, Lead, or Deal**, follow these steps:  

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Find the Record',
    'description': 'Locate the Customer, Lead, or Deal you want to add an activity to. Use the search bar to quickly find a record if the list is long.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/book/content/assets/images/customers/customers-click-on-record.png)'),
  },

  '2': {
    'title': 'Open the Record',
    'description': 'Click on the record to view its details. This will open its profile along with any associated activities.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/book/content/assets/images/customers/edit/customers-edit-form.png)'),
  },

  '3': {
    'title': 'Click on the Calendar Tab',
    'description': 'Click the `Calendar` tab located at the top of the record’s profile window. This will allow you to view and add activities.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/book/content/assets/images/calendar/add/calendar-tab.png)'),
  },

  '4': {
    'title': 'Fill in the Required Details',
    'description': 'Complete the necessary fields in the form, such as selecting the activity type, entering the subject, and setting the start date. If needed, choose a contact person from the dropdown list.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/book/content/assets/images/calendar/add/calendar-filled-activity.png)'),
  },

  '5': {
    'title': 'Add the Activity to the Calendar',
    'description': 'Click `Add` to save the activity to the calendar. The new activity will be scheduled, and the calendar will automatically update.',
    'example': markdown('![Activity-add](' ~ bookRootUrl ~ '/book/content/assets/images/buttons/add-button.png)'),
  }
}} %}  
