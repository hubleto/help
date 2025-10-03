# How to: Change password

{% include 'components/step-by-step.twig' with {'steps': {

  '1': {
    'title': 'Click the ' ~ btn('transparent', 'fas fa-user-tie', '') ~ ' icon.',
    'description': 'The icon is in the upper right corner and will show you your profile management features.',
  },

  '2': {
    'title': 'Click the ' ~ btn('transparent', 'fas fa-user-tie', 'Manage your user account') ~ 'button.',
    'description': 'This will open your user profile.',
  },

  '3': {
    'title': 'Type your new password into the `Password` field.',
    'description': 'You must type the password twice to confirm you did not make mistake.',
  },

  '4': {
    'title': btn('add', 'fas fa-save', 'Save') ~ ' button.',
  },

}} %}
