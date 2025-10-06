{# tocOrder = 1 #}

# Create an event

In the left menu, go to `CRM` → `Calendar`.

The weekly calendar will open (you can switch between: day / week / month / list).


**On the left side, you can enable or disable individual calendars:**

`Default`

`Customers`

`Deals`

`Leads`

`Orders`

`Projects`


## How to add a new activity:

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Customers`',
  },

  '2': {
    'title': 'Click the transparent <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">New activity</span></button> button',
  },

  '3': {
    'title': 'An event form will open where you fill in:',
    'description': '
  * **Subject** – activity title (e.g., “Meeting”).
  * **Activity type** – type of activity (meeting, call, task).
  * **Start / End** – start and end date/time.
  * **Meeting minutes (link)** – link to notes or documents.
  * **Completed** – toggle when the activity is finished.
      ',
  },

  '4': {
    'title': 'Click Add to save the event.'
  }
}} %}

## How to manage existing activities:
Click on an activity in the calendar to open its details.

Here you can edit the information or delete the activity.


## Tips
Use color-coded calendars – you’ll instantly know whether it’s a customer, project, or deal.

Use list view for a quick overview of all events.

By linking with Customers or Deals, you always have full context in one place.


## Common mistakes
Event not showing: Check if the correct calendar is enabled in the left panel.

Incorrect time zone: At first setup, verify your timezone, otherwise events may shift.

Unmarked “Completed”: If you finish an activity but don’t mark it, it will still appear unfinished.


## Summary

| Topic                     | Summary                                                          |
|---------------------------|------------------------------------------------------------------|
| Add a new activity        | Go to CRM -> Calendar and click + Add activity.                  |
| Required fields           | Subject, Activity type, Start / End, Meeting minutes, Completed. |
| Managing Activities       | Every activity can be edited or deleted anytime.                 |
| Smart Calendar Navigation | Calendar colors make navigation quick and easy.                  |

## Table of contents

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/customers',
  'maxLevel': 2,
} %}