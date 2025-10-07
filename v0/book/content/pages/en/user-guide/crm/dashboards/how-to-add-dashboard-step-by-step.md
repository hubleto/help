{# tocOrder = 1 #}

# How to add a dashboard (step by step)

## How to view dashboards:
In the left menu, go to `CRM` → `Dashboards`.

A list of dashboards will appear (by default, you’ll see the Default dashboard).


## How to open a dashboard:
Click on the Default dashboard tile (or any other custom one).

The dashboard will open and display all panels (charts, lists, notifications).


## How to add a new dashboard:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click on `Dashboards` section.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i><span class="text">Add dashboard</span></span></button> button',
  },

  '3': {
    'title': 'Name the new dashboard.',
  },

    '3': {
    'title': 'Add custom panels.',
  },

  '4': {
    'title': 'Save it. ',
  }
}} %}


## How to add a new panel:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'In the open dashboard -> click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i><span class="text">Add new panel</span></span></button> button (bottom).',
  },

  '2': {
    'title': 'Select which board should appear in the panel (e.g., Leads, Deals, Orders…).',
  },

  '3': {
    'title': 'Enter a Title for the panel.',
  },

    '3': {
    'title': 'Set the Width – the arrow determines how much space the panel will take.',
  },

  '4': {
    'title': 'click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i><span class="text">Add</span></span></button> button.',
  }
}} %}


## How to edit an existing panel:
Click the gear icon in the panel header.

A settings window opens where you can rename or reconfigure the panel.


## How to resize a panel:
Click the arrows → or ← in the panel header – this expands or shrinks the panel.





Tips
Create separate dashboards for different teams (e.g., Sales dashboard, Project dashboard).


Use a mix of charts and lists – visuals plus detailed overviews.


Organize panels by priority – most important on top, less important below.


Common mistakes
Too many panels → the dashboard becomes cluttered.


Duplicate information shown across multiple panels.


Forgotten updates → if workflows or deal types change, update the panels too.


Summary
A Dashboard = a board with panels where you see all data in one place.


You can add both custom dashboards and custom panels.


Panels can be edited and resized.


A well-configured dashboard gives you an instant overview of the company’s status, customers, and projects.


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/dashboards',
  'maxLevel': 2,
} %}