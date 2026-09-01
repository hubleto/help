{# tocOrder = 2 #}

# Manage project phases

Project phases divide a project lifecycle into clear stages. In Hubleto, each phase is a step in the workflow assigned to the project.

Using phases gives the team a shared view of where a project currently stands. It also makes it easier to filter the project list, identify work that is waiting in one stage, and keep a history of significant progress changes.

## Default project workflow

A standard Hubleto installation creates a **Projects** workflow with four color-coded phases:

1. **Preparation** - the project is being defined, planned, or prepared for delivery.
2. **Implementation** - the main project work is in progress.
3. **Testing** - the result is being checked and validated.
4. **Delivered** - the project has reached its delivery stage.

When a new project is created, Hubleto assigns the default workflow from the `projects` workflow group and places the project in its first step. Workflow names and steps can be customized, so the phases in your workspace may differ from these defaults.

## Why project phases are useful

| Benefit | How phases help |
| --- | --- |
| Visibility | The current phase shows where a project is in its lifecycle. |
| Consistency | Teams can follow the same progression across similar projects. |
| Focus | Phase filters help users concentrate on projects at a particular stage. |
| Accountability | Phase history records when the workflow step changed and who made the update. |
| Process improvement | A concentration of projects in one phase can reveal where work is slowing down. |

## Change a project's phase

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Open `Productivity` > `Projects`.',
    'description': 'Use the project table to find the project you want to update.',
  },
  '2': {
    'title': 'Open the project record.',
    'description': 'The color-coded workflow selector appears near the top of an existing project form.',
  },
  '3': {
    'title': 'Enable editing when required.',
    'description': 'Select **Edit** if the project is currently displayed in read-only mode. The workflow selector remains locked when the form is read-only or your role cannot update the project.',
  },
  '4': {
    'title': 'Select the new phase.',
    'description': 'Choose the appropriate workflow step from the phase selector. The selected step becomes the pending workflow value for the project.',
  },
  '5': {
    'title': 'Save the project.',
    'description': 'Select **Save** to store the phase change. Hubleto records workflow history when the saved workflow or workflow step differs from the previous state.',
  },
}} %}

The selector also shows information about the most recent update to the current phase when workflow history is available.

The **Delivered** phase and the project's **Closed** value are separate. In the default setup, moving a project to Delivered does not automatically close the project. Update the Closed value separately when your organization's process requires it.

## Track projects by phase

The Projects table provides a **Phase** filter built from workflow steps currently used by projects.

Use the filter to:

* focus on projects in one or more phases;
* review work that is still in Preparation or Implementation;
* find projects waiting for Testing;
* separate delivered projects from active delivery work.

The project workflow can also be displayed in Hubleto's workflow view when that workflow is configured for Kanban display. This provides a stage-based overview of open projects.

## Review phase history

Hubleto stores workflow history when a project's workflow or workflow step changes. The project **Timeline** combines these phase changes with project activities, helping users understand how the project progressed over time.

A history entry can include:

* the selected workflow and workflow step;
* the date and time of the change;
* the user associated with the update.

This history is useful when reviewing delivery progress or understanding when a project moved into testing or delivery.

## Customize project phases

Authorized users can maintain workflows from **Settings** > **Workflows**.

Open the workflow whose group is `projects` to review its steps. Workflow settings provide the workflow name, description, order, group, and Kanban visibility, together with the list of workflow steps.

Each step can define information such as its name, order, identifying tag, probability, and color-related workflow presentation. The controls available can depend on the installed Hubleto version and your permissions.

Before changing a shared workflow, agree on the intended lifecycle with the project team. Existing projects reference the same workflow and steps, so renamed or reordered phases affect how those projects are presented.

## Phases, milestones, and tasks

These project-management concepts serve different purposes:

| Concept | Purpose | Example |
| --- | --- | --- |
| Phase | Describes the overall stage of the project lifecycle | Testing |
| Milestone | Defines a significant project target, usually with a due date and progress reports | Customer acceptance completed |
| Task | Represents a specific piece of work assigned and tracked within the project | Prepare acceptance test data |

A project normally has one current phase but can contain multiple milestones and tasks. Moving the project to a new phase does not automatically mean that every related task or milestone is complete; review those records separately.

## Tips

Update the phase when the project genuinely enters the next stage, not only when the team intends to move it.

Use the same phase definitions across similar projects so filters and workflow views remain meaningful.

Review open tasks and milestone progress before moving a project to Testing or Delivered.

Use the Timeline when you need to confirm when a phase changed or who made the update.

Keep phase names short and action-oriented so the workflow selector remains easy to scan.

## Common mistakes

**Selecting a phase without saving:** the selected phase is not stored until the project record is saved.

**Confusing a phase with a task:** a phase describes the project as a whole; tasks describe individual work items.

**Moving directly to Delivered without reviewing related work:** check milestones, open tasks, and expected deliverables first.

**Changing a shared workflow without coordination:** workflow changes can affect the presentation of all projects using it.

**Expecting every workspace to use the default phases:** authorized users can customize workflows, so follow the phases configured for your organization.

## Summary

| Topic | Summary |
| --- | --- |
| Default phases | Preparation, Implementation, Testing, and Delivered |
| Changing phase | Open a project, enable editing, select the phase, and save |
| Tracking | Filter the Projects table by phase and review workflow history in the Timeline |
| Customization | Authorized users can maintain the Projects workflow in Settings > Workflows |
| Related planning | Use milestones for major targets and tasks for individual work items |

## How to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/productivity/projects',
  'maxLevel': 2,
} %}
