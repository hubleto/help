{# tocOrder = 2 #}

# Add task

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Tasks`',
    'screenshotUrl': 'tasks',
  },

  '2': {
    'title': 'Click <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add Task</span></button>',
    'screenshotUrl': 'tasks/add',
  },

  '3': {
    'title': 'Fill in task details.',
  },

  '4': {
    'title': 'Click <button class="btn btn-add"><span class="icon"><i class="fas fa-save"></i></span><span class="text">Add</span></button>'
  }
}} %}

## How to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/crm/tasks',
  'maxLevel': 2,
} %}