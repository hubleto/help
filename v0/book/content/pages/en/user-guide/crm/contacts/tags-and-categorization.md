{# tocOrder = 3 #}

# Tags and categorization

Tags are a practical way to organize your contacts, keep your database readable, and quickly find the right person when you need to communicate with a specific role or team.

In Hubleto CRM, you can assign tags while creating a contact, update tags later on existing contacts, and use tags directly in the contacts list to filter records more precisely.

## Add tags when creating a new contact

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Contacts`.',
    'description': 'Open the Contacts section from the left menu to manage individual contact records (for example employees, managers, and other people linked to your customers).',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add Contact</span></button> button.',
    'description': 'A new contact form (contact card) will open, where you can enter all core information such as name, customer link, phone numbers, emails, and tags.',
  },

  '3': {
    'title': 'Fill in the contact details and locate the **Tags** field on the right side of the contact form.',
    'description': 'Use tags to describe the person’s function, responsibility, or communication context (for example: Decision Maker, Finance, Technical Contact).',
  },

  '4': {
    'title': 'Add one or more tags to the contact (for example: CEO, Finance, Technical contact).',
    'description': 'You can assign multiple tags to one contact, which is useful when one person covers several areas in the organization.',
  },

  '5': {
    'title': 'Click Add to save the new contact.',
    'description': 'After saving, the tags become part of the record and can be used immediately for filtering and segmentation in the contacts list.',
  }
}} %}

## Add tags to an existing contact

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Contacts`.',
    'description': 'Open your current list of contacts and find the record you want to update.',
  },

  '2': {
    'title': 'Open the contact you want to edit.',
    'description': 'Click the relevant row to open the contact form.',
  },

  '3': {
    'title': 'In the contact form, locate the **Tags** field and add one or more tags.',
    'description': 'Adjust the tags so the record reflects the contact’s current role and business relevance.',
  },

  '4': {
    'title': 'Click Save to apply the changes.',
    'description': 'The updated tags will be visible in the contact detail and in the tags column of the contacts list.',
  }
}} %}

## Use tags to filter contacts

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Contacts`.',
    'description': 'Open the contacts list where you can search and filter records.',
  },

  '2': {
    'title': 'In the contacts table, find the **Tags** column.',
    'description': 'This column allows quick filtering by tag values directly in the list view.',
  },

  '3': {
    'title': 'Type the tag you want to filter by and press `Enter`.',
    'description': 'Only contacts matching the entered tag will remain in the list, which helps narrow results quickly.',
  },

  '4': {
    'title': 'To filter by multiple tags, separate tags with commas.',
    'description': 'This is useful when you need a focused subset of contacts based on several criteria at the same time.',
  },

  '5': {
    'title': 'To clear a tag filter, remove the selected tag from the active filters.',
    'description': 'After removing the filter, the full contact list view is restored.',
  }
}} %}

## Tips

Many teams use role-based tags by default, which makes it much easier to distinguish multiple contacts within the same company.

Use a consistent naming convention for tags (for example, always use `IT Manager` instead of mixing variants such as `IT manager` or `IT lead`).

Assign multiple tags when appropriate, especially for contacts who participate in more than one process (for example, procurement + approvals).

## Common mistakes

Using too many similar tag variants: this reduces search quality and creates unnecessary duplicates.

Forgetting to update tags over time: outdated tags can lead to incorrect targeting and slower communication.

Relying on free-form naming without a team standard: define a short internal tag dictionary and follow it consistently.

## Summary

| Action | Result |
| ------ | ------ |
| Add tags during contact creation | Better organization from the start. |
| Add tags to existing contacts | Keeps older records up to date. |
| Filter by tags in the list | Quickly find the right contacts. |
| Use consistent and multiple tags | More precise filtering, clearer segmentation, and better reporting inputs. |

### See also

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/contacts',
  'maxLevel': 2,
} %}
