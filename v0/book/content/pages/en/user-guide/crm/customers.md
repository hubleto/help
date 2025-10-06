{# tocOrder = 1 #}

# Customers

 The Customers section is used to keep records of all your customers – whether companies or individuals. 
 
 In one clear list, you can see basic details, activity status, record owner, manager, and assigned tags.

**Adding a New Customer**

 You can add a new customer in the Customers section by clicking + Add Customer. A form will open where you enter the basic information and assign responsible persons.

**Step-by-step process**
In the left menu, go to CRM → Customers.
At the top, click the orange + Add Customer button.

**A form will open where you fill in:**
  * **Name** (required) – customer name (company or individual).
  * **Customer ID** (required) – unique customer number.
  * **Street Line 1 / Street Line 2** – address.
  * **City, Region, Country, Postal Code** – location.
  * **Shared folder** – link to a shared folder with documents.
  * **Notes** – internal notes.
  * **VAT ID / Tax ID** – identification numbers (if available).
  * **Date Created** – record creation date (pre-filled with today’s date).
  * **Active** – toggle to mark if the customer is active.
  * **Tags** – labels (VIP, Partner, Public, …).
  * **Owner** (required) – the person responsible for the record.
  * **Manager** (required) – the customer’s manager.

After filling out the form, click Save (or confirm the addition).

**Tips**

Owner vs. Manager: The Owner is the person who owns the record, while the Manager is the one actively managing the customer.
Add Tags right away – they make later filtering easier.
Use the Shared folder to insert a link to a cloud folder with customer-related documents.

**Common mistakes**

Missing required fields: You must fill in at least Name, Customer ID, Owner, Manager.
Duplicate ID: Each customer must have a unique Customer ID.
Forgotten Active status: If a customer isn’t marked Active, they won’t appear in “Active” filters.

**Summary**

Add a new customer via + Add Customer.
Required fields: Name, Customer ID, Owner, Manager.
Use Tags and Notes for better organization.
Documents can be linked through the Shared folder.

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/customers',
  'maxLevel': 2,
} %}
