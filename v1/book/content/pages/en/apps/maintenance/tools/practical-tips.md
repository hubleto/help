{# tocOrder = 2 #}

# Practical tips

The **Developer tools** area contains utilities for keeping an application's database structure aligned with its models and for generating starter code for custom forms.

These tools are intended for administrators and developers who understand the project's models, database, and TypeScript components. They appear only when the Developer app is installed and available to your account.

To open them, go to **Maintenance**, select **Tools**, and then open **Developer tools**.

## Check DB consistency

**Check DB consistency** compares the tables and columns in the current database with the model definitions loaded from enabled Hubleto apps.

The current check identifies:

* model tables that are missing from the database;
* non-virtual model columns that are missing from an existing table.

For each detected difference, Hubleto prepares the SQL needed to create the missing table or column. The check does not currently provide a general audit of changed column definitions, orphaned records, or every possible foreign-key mismatch.

### Run a consistency check

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Open `Maintenance` > `Tools` > `Developer tools`.',
    'description': 'Select **Check DB consistency** from the Developer tools page.',
  },
  '2': {
    'title': 'Review every proposed update.',
    'description': 'The report displays **UID**, **Type**, **Description**, **SQL**, and **Run this update**. Read the description and generated SQL before selecting an update.',
  },
  '3': {
    'title': 'Select only the updates you intend to apply.',
    'description': 'Use the checkbox in the **Run this update** column. Leave unrelated or uncertain changes unchecked.',
  },
  '4': {
    'title': 'Select **Run the updates now!**.',
    'description': 'Hubleto runs the selected SQL statements in a database transaction and displays a run log. If an error occurs, the transaction is rolled back.',
  },
  '5': {
    'title': 'Review the result.',
    'description': 'After successful updates, Hubleto checks the database again. When no detected differences remain, the page displays **No necessary database updates found.**',
  },
}} %}

### Practical DB consistency tips

**Create a current backup first.** Generated SQL changes the database structure. Confirm that a tested backup and recovery process are available before applying updates to an important environment.

**Review generated SQL instead of selecting everything automatically.** The report shows the exact SQL for each item so you can confirm the target table, column, and expected change.

**Run the check after model changes.** It is especially useful after installing an app or adding a model column that has not yet been created in the database.

**Use an appropriate environment.** Validate structural changes in a development or staging environment before applying them to production.

**Read the run log.** A rollback prevents a failed transaction from being committed, but the error message still needs to be investigated before trying again.

## Form designer

The **Form designer** is a TypeScript code-template generator. It provides starter implementations of a form's `renderContent()` method for common column layouts.

It is not a drag-and-drop editor and does not publish changes directly to an app. You copy the generated code into the appropriate `Form.tsx` component, adapt it to the model, and rebuild the frontend assets.

### Generate a form template

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Open `Maintenance` > `Tools` > `Developer tools`.',
    'description': 'Select **Form designer** from the Developer tools page.',
  },
  '2': {
    'title': 'Choose a supported layout template.',
    'description': 'The one-column and two-column options generate TypeScript examples for arranging fields and dividers.',
  },
  '3': {
    'title': 'Copy the generated `renderContent()` code.',
    'description': 'Paste it into the form component you are developing. Preserve imports, methods, and custom logic already present in that component.',
  },
  '4': {
    'title': 'Adapt the placeholders to your model.',
    'description': 'Replace sample input names with real model columns and add any required nested tables, sections, or custom React components.',
  },
  '5': {
    'title': 'Build and test the interface.',
    'description': 'Run `npm run build-js` in the correct project environment, then open the form and verify its desktop and mobile layouts.',
  },
}} %}

### Practical Form designer tips

**Treat the output as starter code.** Generated names such as `input_for_column_1` are placeholders and must be replaced with columns that exist in your model.

**Keep related fields together.** A logical grouping remains easier to understand when a multi-column form stacks vertically on a narrow screen.

**Preserve existing behavior.** Before replacing `renderContent()`, check whether the form already contains conditional fields, tabs, nested tables, event handlers, or app-specific logic.

**Build from the correct project directory.** The build command must run in the environment configured for the app's frontend assets and dependencies.

**Test permissions and record states.** Verify the form when creating, viewing, and editing records, and test it with the user roles that will use it.

## Common mistakes

**Running every database update without review:** generated SQL should be inspected and tested before it changes an important database.

**Expecting DB consistency to validate business data:** the current tool checks missing structural elements, not general data quality or orphaned records.

**Treating Form designer as a visual editor:** it generates code; a developer must integrate and build that code.

**Leaving placeholder input names unchanged:** the generated example cannot render meaningful fields until it references actual model columns.

**Replacing custom form logic accidentally:** integrate the generated layout carefully rather than overwriting app-specific behavior.

## Summary

| Tool | Purpose | Result |
| --- | --- | --- |
| Check DB consistency | Detect missing model tables and non-virtual columns | Reviewable SQL updates that can be selected and run in a transaction |
| Form designer | Generate starter TypeScript for common form layouts | A `renderContent()` template to adapt, build, and test |

## How to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/maintenance/tools',
  'maxLevel': 2,
} %}
