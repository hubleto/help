{# tocOrder = 1 #}

# Add a task

Click `Projects` → `Tasks`.
 → A table with the list of tasks will appear.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Projects` → `Tasks`.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add task</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  *  **Title** – task name.
  *  **Developer, Tester** - responsible persons.
  *  **Start, Deadline** – dates.
  *  **Estimation [h]** – estimated time.
  *  **Description** – task details.
    ',
  },

  '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}

**Each task has a workflow bar:**
*  In progress → Ready to test → Test passed/failed → Deployed → Accepted.


## Tips
*  Use Priority to mark urgency.
*  Add a link to documentation or files in the Shared folder.
*  A task can be marked as Is chargeable (billable).

## Common mistakes
Missing developer or tester → the task remains incomplete.

Incorrect deadline → may cause errors in reporting.

## Summary
| Topic                        | Summary                                                                                                           |
|------------------------------|-------------------------------------------------------------------------------------------------------------------|
| Tasks Overview               | Tasks are the cornerstone of project management – they let you assign, track, and evaluate work within a project. |
| Creating and Assigning Tasks | You can create new tasks, assign them to users, set deadlines, and monitor progress through statuses.             |
| Task Details                 | Each task supports detailed descriptions, file attachments, and related records (e.g., customers or projects).    |
| Updating and Closing Tasks   | Regularly updating and closing finished tasks ensures smoother collaboration and better project visibility.       |
                                         


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/projects/tasks',
  'maxLevel': 2,
} %}
