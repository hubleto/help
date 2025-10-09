{# tocOrder = 1 #}

# Create an issue

Click `Projects` → `Issues`.
 → A table of all reported issues will appear.

## Add issues
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Projects` → `Issues`.',
  },

  '2': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  *  **Title** – issue name.
  *  **Problem description** - detailed description.
    ',
  },

  '4': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}

## Tips
*  Use clear and concise titles so the issue can be quickly identified.
*  In the description, provide details about how the error occurred and its impact.

## Common mistakes
Missing Title or Description → the issue won’t be saved.

Unassigned issues may get lost without being linked to a project.


## Summary
| Topic               | Summary                                                                                          |
|---------------------|--------------------------------------------------------------------------------------------------|
| Issues Overview     | The Issues module serves as a simple issue tracker for reporting and monitoring problems.        |
| Creating Issues     | Each issue contains a title and detailed description of the problem.                             |
| Effective Reporting | Clear reporting ensures faster resolution and better collaboration between users and developers. |
| Updating Issues     | Keeping issues updated helps maintain transparency and workflow efficiency across the team.      |

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/projects/issues',
  'maxLevel': 2,
} %}