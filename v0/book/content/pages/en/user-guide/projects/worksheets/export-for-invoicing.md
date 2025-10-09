{# tocOrder = 2 #}

# Step-by-Step

Click `Projects` → `Worksheets`.
 → A daily activity chart will appear.


**Click Activities to display the list of logged activities.**

## Add activity
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Projects` → `Worksheets`.',
  },

  '2': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add activity</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  *  **Worker** – who performed the work.
  *  **Task** - which task the work was related to.
  *  **Type** – type of activity.
  *  **Worked hours** – number of hours.
  *  **Description** – detailed description.
  *  **Approved** - manager approval.
    ',
  },

  '4': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}


## Tips
*  Worksheets can also be used as a basis for invoicing.
*  You can quickly filter activities by date or person.

## Common mistakes
If Worked hours are not entered, the activity is recorded but won’t be included in reports.

## Summary
| Topic                              | Summary                                                                                                                |
|------------------------------------|------------------------------------------------------------------------------------------------------------------------|
| Worksheets Overview                | The Worksheets module allows you to record and manage work performed on specific tasks or projects.                    |
| Tracking Work Entries              | Each worksheet entry tracks time, activities, and assigned users — making it ideal for performance reports or billing. |
| Linking Worksheets                 | Worksheets can be linked directly to tasks, projects, or customers, keeping all related data organized in one place.   |
| Reviewing and Approving Worksheets | Reviewing and approving worksheets regularly helps maintain accuracy in reporting and invoicing.                       |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/projects/worksheets',
  'maxLevel': 2,
} %}