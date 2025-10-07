{# tocOrder = 2 #}

# Send emails directly from Hubleto

## How to view Mail:
In the left menu, go to `CRM` → `Mail`.

**The panel will display options:**

`Templates`

`Scheduled to send`

`Sent`

`Get emails`

`Manage accounts`


## Internal emails:

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click on `Templates`.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  * **Subject** 
  * **Body** - Massage text
  * **HTML code** 
    ',
  },

  '4': {
    'title': 'Save the template for later use.'
  }
}} %}

*  **Scheduled to send** – overview of emails scheduled for sending.
*  **Sent** – history of sent emails with details about the account, subject, and send date.


## External accounts:
`Get emails` – load incoming emails from connected accounts.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click on `Manage accounts` - manage connected email accounts.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  * **Name** 
  * **Sender email adress**
  * **Sender name** 
  * **IMAP and SMTP host**
  * **Port**
  * **Encryption type** - e.g., SSL.
  * **Login credentials** - username and password
    ',
  },

  '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button',
  }
}} %}


## Tips
*  Use templates for recurring emails – this saves time and keeps communication consistent.
*  Scheduled sending is perfect for mass campaigns or when emails need to go out at a specific time.
*  For better orientation, use color-coding for accounts in Manage accounts.


## Common mistakes
Incorrect SMTP or IMAP configuration → emails won’t send or be received.

Forgotten template save → the template won’t be stored and you’ll have to create it again.

Unlinked external account → you won’t see any messages in Get emails.


## Summary
| Topic                        | Summary                                                                           |
|------------------------------|-----------------------------------------------------------------------------------|
| Mail Overview                | The Mail section lets you send, receive, and manage emails directly in Hubleto.   |
| Creating Email Templates     | Templates are created via Templates → + Add.                                      |
| Sent and Scheduled Emails    | Sent and scheduled emails are stored in Sent and Scheduled to send.               |
| Connecting External Accounts | External accounts are connected in Manage accounts by entering IMAP/SMTP details. |
| Centralized Communication    | All communication stays centralized and linked with other CRM data.               |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/mail',
  'maxLevel': 2,
} %}