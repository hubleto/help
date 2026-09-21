{# tocOrder = 3 #}

# Tools

Tools brings technical utilities together in one place for administrators, developers, and other users with the appropriate permissions. It acts as a directory of available tools rather than a single screen for changing system settings or running arbitrary commands.

The entries shown in Tools depend on which Hubleto applications are installed. When the relevant apps are available, Tools can link to Developer tools and the Log viewer. These can help technical users inspect the environment and investigate problems without searching through unrelated application menus.

## Technical utilities

* **Developer tools:** Opens the developer area, which includes a form designer and a database-consistency check. The form designer helps with designing application forms, while the consistency check compares application models with the database schema. It is not a general-purpose SQL query editor or custom-script console.
* **Log viewer:** Opens a list of available server log files and displays the contents of a selected file. This can help an administrator inspect recorded errors or diagnostic messages while investigating a problem. The viewer does not provide live performance metrics or a dedicated API-request audit dashboard.

## Using Tools responsibly

Start with the utility that matches the issue you are investigating. For an application or schema problem, the Developer tools may offer a useful starting point; for a reported error, inspect the relevant log file. Since these tools expose technical information, access should be limited to users who need it for administration or development.

## How to

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/maintenance/tools',
  'maxLevel': 2,
} %}