{# tocOrder = 2 #}

# Step-by-Step

In the left menu, click `Maintenance` → `Notifications`.

Add a new notification by clicking the orange + Send message button.
Fill in the fields:
To – recipient
From – sender
Subject – subject of the message
Body – message text
Priority – priority of the message
Category – message category
Sent – date and time of sending
Click Add to save and send the message.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Maintenance` → `Notifications`.',
  },

  '2': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Send message</span></button> button',
  },

  '3': {
    'title': 'Fill in the basic fields:',
    'description': '
  *  **To** – recipient
  *  **From** – sender
  *  **Subject** – subject of the message
  *  **Body** - message text
  *  **Priority** - priority of the message
  * **Category** - message category
  * **Sent** - date and time of sending
    ',
  },

  '4': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}


## Tips
*  Use the Color field to highlight messages visually.
*  Use Tags for easier filtering of notifications.


## Common mistakes
Missing subject or body → the message may be unclear.

Wrong recipient → the message won’t reach the right person.

## Summary
| Topic                     | Summary                                                                                                   |
|---------------------------|-----------------------------------------------------------------------------------------------------------|
| Notifications Overview    | The Notifications module helps you manage system messages and user alerts in one place.                   |
| Creating Notifications    | You can send new notifications to specific users or teams directly from the interface.                    |
| Notification Details      | Each message includes a subject, recipient list, and message body for quick internal communication.       |
| Benefits of Notifications | Using notifications regularly keeps users informed about important updates, tasks, and system activities. |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/maintenance/notifications',
  'maxLevel': 2,
} %}
