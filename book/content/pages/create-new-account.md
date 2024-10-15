# Create new account

It takes only few minutes to start enjoying Ceremony.


{% include 'components/step-by-step.twig' with {'steps': {

  '1': {
    'title': 'Open registration page',
    'description': 'Go to [registration page](https://www.ceremonycrm.com/create-account)',
    'example': include('components/image.twig', {'image': 'Lenna(testimage).png'}),
  },

  '2': {
    'title': 'Fill required inputs',
    'description': 'Provide **name of your organization** and **your email** and submit the form.',
    'example': include('components/image.twig', {'image': 'Lenna(testimage).png'}),
  },

  '3': {
    'title': 'Start working',
    'description': 'Click on the link of your org`s account. The link will be something like https://accounts.ceremonycrm.com/your-organization.',
    'example': include('components/image.twig', {'image': 'Lenna(testimage).png'}),
  },

  '4': {
    'title': 'Change your default password',
    'description': 'We strongly recommend to change the default password generated automatically when creating the account.',
    'example': include('components/image.twig', {'image': 'Lenna(testimage).png'}),
  },

}} %} {# step-by-step #}
