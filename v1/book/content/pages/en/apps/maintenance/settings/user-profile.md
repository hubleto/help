{# tocOrder = 1 #}

# User profile

Your user profile contains your personal account information and several settings that affect how you use Hubleto. It is available directly from the main Hubleto interface.

## How to access your user profile

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click your name in the top-right part of the screen.',
    'description': '
Look for your user name together with the small user icon. This menu is available from the main Hubleto page.
    ',
  },

  '2': {
    'title': 'In the submenu, click `My profile`.',
  },

  '3': {
    'title': 'Review or update your profile information.',
    'description': '
**The profile can contain multiple fields. According to this guide, the commonly important ones include:**
  * **Email** (required) - the email used for login.
  * **Language** (required) - the language used in your Hubleto environment.
  * **Other profile fields** - additional personal or contact information visible to other users, depending on your setup.
  * **Type** - your user type or role, which affects the range of access rights available to your account.
    ',
  },

  '4': {
    'title': 'Check the sections on the right side of the profile.',
    'description': '
These areas can include:
  * **Permissions** - what you are allowed to access or edit.
  * **Available apps** - the list of apps that are available to your user account.
    ',
  },

  '5': {
    'title': 'Save your changes after updating the profile.',
  }
}} %}

## What is useful to know

Only some fields may be mandatory, while the rest are optional. Even optional fields can be useful because they provide more context about you to other users in the same Hubleto instance.

The `Type` field is especially important because it is connected to access rights. In many cases, this is configured by an administrator.

The available apps section can also help simplify your workspace. If your setup allows it, you can hide apps you do not currently need so they no longer appear in the main left-side navigation.

## Tips

Keep your email and language correct, because they affect login and everyday use of the system.

Fill in optional profile details if your team benefits from seeing more user information.

Review your visible apps from time to time to keep the interface focused on the tools you actually use.

## Common mistakes

Missing required fields: the profile may not save correctly if mandatory fields are empty.

Incorrect email: using the wrong email can cause account or login confusion.

## Summary

| Topic | Summary |
| --- | --- |
| Access | Open the profile from your name menu in the top-right corner. |
| Required fields | The draft identifies `Email` and `Language` as mandatory fields. |
| Permissions | The profile may show what you can access or edit. |
| Apps | You may be able to hide apps you do not need from the left-side navigation. |

### See also

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/maintenance/settings',
  'maxLevel': 2,
} %}
