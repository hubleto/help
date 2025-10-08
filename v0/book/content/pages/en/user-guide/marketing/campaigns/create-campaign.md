{# tocOrder = 1 #}

# Create a campaign

How to view campaigns:
In the left menu, go to `Marketing` → `Campaigns`.

A table with campaign overviews will appear in the main window.

*  **Open** – ongoing campaigns.
*  **Closed** – finished campaigns.
*  **All** – all campaigns.


## How to add a new campaign:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click on `Dashboards` section.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i><span class="text">Add Campaign</span></span></button> button',
  },

  '3': {
    'title': 'Fill in the basic information:',
    'description': '
**A form will open where you fill in:**
  * **Name** (required) - campaign name.
  * **Target audience** - the group you want to reach.
  * **Goal** - campaign objective (e.g., number of registrations, sales).
  * **Mail account & template** - email account and template used for sending.
  * **Manager** - responsible person.
  * **Workflow step** - current stage of the campaign (Preparation, Analysis…).
  * **Approved / Closed** - campaign status.',
  },

    '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i><span class="text">Add</span></span></button> button',
  },
}} %}


## How to manage a campaign:
 When you open a campaign, you’ll see a detail view with multiple tabs:

*  **Campaign** – basic data and parameters.
*  **Add recipients from contacts** – add recipients from your contact list.
*  **Tasks** – related tasks with estimated time and status.
*  **Launch** – start the campaign (send a test email or launch live sending).
*  **Leads** – leads assigned to the campaign, tracked throughout its duration.


## Additional options:
 From the campaign table, via the gear icon, you can:

*  Export data to CSV.
*  Import data from CSV.
*  Select which columns should be displayed.


## Tips
*  Always send a test email via the Launch tab before starting a campaign.
*  Use UTM parameters to track campaign performance in analytics tools.
*  Regularly monitor the workflow step and keep the campaign status updated.


## Common mistakes
Template not assigned → the campaign can’t be sent.

Incorrect or empty target audience → the campaign won’t reach the right recipients.

Unapproved campaign (Approved = NO) → sending may be blocked.


## Summary
| Topic                     | Summary                                                                           |
|---------------------------|-----------------------------------------------------------------------------------|
| What Are Campaigns        | Campaigns = management of marketing campaigns (emails, tasks, recipients, leads). |
| Creating a Campaign       | Add a new campaign via + Add Campaign.                                            |
| Filtering Campaigns       | Campaigns can be filtered by status (Open / Closed / All).                        |
| Tracking Campaign Results | Results are tracked through linked leads and workflow stages.                     |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/marketing/campaigns',
  'maxLevel': 2,
} %}