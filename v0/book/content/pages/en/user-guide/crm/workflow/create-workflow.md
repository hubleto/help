{# tocOrder = 2 #}

# Create workflow step by step

How to view workflows:
In the left menu, go to `CRM` → `Workflow`.

In the left panel, choose the type of workflow:

`Deal stage`

`Project phase`

`Task status`

`Order stage`

`Lead level`

`Campaign phase`

`Invoice state`

## How to add a workflow:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Workflow`.',
  },

  '2': {
    'title': 'Click the transparent and than the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add Workflow</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  * **Name** (required) - workflow name.
  * **Group** - group (e.g., deals, projects, tasks).
  * **Description** - optional description.
    ',
  },

  '4': {
    'title': 'Click Add step to add individual stages of the process.'
  }
}} %}


## How to add a step to a workflow:
 **Each step includes:**
<li> 
Name – stage title (e.g., “Qualified,” “Testing”).
</li>
<li>
Order – order of steps.
</li>
<li>
Color – visual color coding.
</li>
<li>
Probability % – especially for deals (success probability).
</li>
<li>
Tag – additional label.
</li>
<li>
Sets result of a deal to – defines the outcome (e.g., WON/LOST).
</li>

## How workflows look in practice:
After clicking a specific workflow type (e.g., Deal stage), a kanban board appears with all stages.

In each column, you’ll see items currently in that stage.

Items can be moved via drag & drop between stages.


## Tips
*  Use colors consistently – e.g., green = completed, red = failed.
*  Probability % is great for sales pipelines – useful for forecasting.
*  Tags allow you to quickly filter items across workflows.
*  Regularly check if any items are “stuck” in a stage.


## Common mistakes
Too many steps: Keep workflows simple and clear.

Missing logic between steps: Always define clearly what moving from one stage to another means.

Not updating items: If the team doesn’t move items in real time, workflows lose their value.


## Summary

| Topic                 | Summary                                                                         |
|-----------------------|---------------------------------------------------------------------------------|
| What Is a Workflow    | Workflow = process stages for Deals, Projects, Tasks, Orders, Leads, Campaigns. |
| Creating a Workflow   | Create a new workflow via + Add workflow, add stages via + Add step.            |
| Workflow View         | Workflows are displayed as kanban boards in practice.                           |
| Benefits of Workflows | Well-structured workflows improve team management, visibility, and planning.    |

## Table of contents

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/workflow',
  'maxLevel': 2,
} %}