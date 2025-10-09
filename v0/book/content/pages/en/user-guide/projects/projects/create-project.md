{# tocOrder = 1 #}

# Create a project
Click `Projects` → `Projects`.
 → A list of projects will appear.

## Add projects
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `Projects` → `Projects`.',
  },

  '2': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add project</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**Project details**
  *  **Identifier** - unique project code (if left empty, it will be generated automatically).
  *  **Title** – project name (e.g., “Website redesign” or “CRM Implementation”).
  *  **Description** – short summary of project goals or scope.
  *  **Main developer, Account manager** - which task the work was related to.
  *  **Priority** – numeric priority value (lower = higher importance).
  *  **Budget** – estimated project budget in €.
  *  **Start, Deadline** – number of hours.

**Right panel**
  *  **Customer and Contact**,
  *  **Color** (visual tag for better navigation),
  *  **Online documentation folder** – link to a shared folder (e.g., Google Drive, Hubleto Documents),
  *  **Notes** – additional project details or reminders.

**Tabs**
At the top of the window, you’ll also find additional tabs:
  *  **Tasks** – all tasks belonging to this project.
  *  **Worksheet** – time logs and recorded work entries.
  *  **Statistics** – project performance data and metrics.
    ',
  },

  '4': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> button'
  }
}} %}


## Tips
*  Use Color for easier project identification.
*  Filter projects by phase or status (Open/Closed).

## Common mistakes
Missing deadline → project may artificially extend.

No budget → prevents tracking of financial metrics.

## Summary
| Topic             | Summary                                                                                |
|-------------------|----------------------------------------------------------------------------------------|
| Projects Overview | The Projects module helps you plan, track, and manage all client or internal projects. |
| Project Details   | Each project contains details such as responsible people, deadlines, and budgets.      |
| Linked Elements   | You can link tasks, worksheets, and documents directly to the project.                 |
| Updating Projects | Regular updates keep project status accurate and transparent across the team.          |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/projects/projects',
  'maxLevel': 2,
} %}