{# tocOrder = 2 #}

# Review notifications step by step

The Notifications page is an inbox for alerts created by Hubleto and its installed applications. The current interface does not offer a **Send message** button for composing a notification to another user or team. To exchange messages directly with colleagues, use an app intended for conversation, such as Discussions, when it is available in your installation.

## Open and review an alert

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Open `Notifications` from the left sidebar or select the notification bell.',
    'description': 'The Notifications page displays the inbox for alerts addressed to your account.',
  },
  '2': {
    'title': 'Find the notification that needs your attention.',
    'description': 'Unread notifications are highlighted in the list. You can use search to locate an earlier subject or update.',
  },
  '3': {
    'title': 'Read the subject and message body.',
    'description': 'The notification can also show its sender, category, priority, and sent date. If a related URL is provided, use it to open the relevant page or record.',
  },
  '4': {
    'title': 'Update the read status.',
    'description': 'Select **Mark as read** once you have reviewed the alert. Select **Mark as unread** if you need to keep it visible for follow-up.',
  },
}} %}

## What to expect

The content of an alert depends on the application or process that created it. Some alerts point to a related Hubleto record, while others provide the information directly in the body. Marking a notification as read does not delete it; you can return to it from the Notifications page later.

## How to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/maintenance/notifications',
  'maxLevel': 2,
} %}
