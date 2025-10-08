{# tocOrder = 1 #}

# Add a lead

## How to view leads:
In the left menu, go to `Marketing` → `Leads`.

A table with all leads and their details will appear.

**The filter on the left allows you to select:**

*  **Level** – e.g., Subscriber.
*  **Ownership** – All, Owned by me, Managed by me.
*  **Open/Closed** – active or closed leads.


## How to add a new lead:
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Click on `Leads` section.',
  },

  '2': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i><span class="text">Add lead</span></span></button> button',
  },

  '3': {
    'title': 'Fill in the basic information:',
    'description': '
**A form will open where you fill in:**
  * **Campaign** - the campaign from which the lead originated.
  * **Contact** - contact information (name, email, phone, website).
  * **Price & Currency** - expected lead value.
  * **Score** - numerical rating.
  * **Owner / Manager** - responsible persons.
  * **Source channel** - source of the lead (Web, Advertisement, Partner, Cold call…).
  * **Tags** - e.g., Duplicate, Needs attention, Great opportunity.
  * **Expected close date** - anticipated closing date.',
  },

    '4': {
    'title': 'Click the orange <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i><span class="text">Add lead</span></span></button> button',
  },
}} %}


## How to manage a lead:
 When you click on a specific lead, its detail view opens with several tabs:

*  **Lead** – basic info, manager, notes, workflow.
*  **Documents** – files linked to the lead.
*  **Tasks** – tasks related to the lead.
*  **Deals** – connection to a deal.
*  **Calendar** – schedule of activities and meetings.
*  **History** – complete log of changes and activities.


## Additional options:
Gear icon → Export/Import leads to/from CSV, choose which columns are displayed.

Funnel icon (filter) → advanced filtering by source, status, or owner.


## Tips
*  Use Score to quickly evaluate lead quality.
*  Tags help prioritize leads (Great opportunity, Needs attention).
*  When linking a lead to a Deal, all information is transferred to the deal.
*  Use the lead’s Calendar to plan follow-up activities.


## Common mistakes
No Owner/Manager assigned → the lead remains without a responsible person.

Incorrect Source channel → makes campaign success harder to evaluate.

Not using History → loss of visibility into activities and changes.


## Summary
| Topic                       | Summary                                                                             |
|-----------------------------|-------------------------------------------------------------------------------------|
| What Are Leads              | Leads = potential customers.                                                        |
| Creating a Lead             | Add a new lead via + Add lead.                                                      |
| Lead Details                | Lead details include contacts, documents, tasks, deal links, calendar, and history. |
| Benefits of Lead Management | Regular lead management improves sales results and builds on campaign outcomes.     |


{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/marketing/leads',
  'maxLevel': 2,
} %}