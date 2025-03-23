# Customers

In the application, **Customers** represent companies or businesses that you manage. Each customer record contains key details such as the company name, address, tax information, and assigned contacts.

> 💡 Before adding a contact, you must first create a customer. Contacts are always linked to customers for proper association.

---

## Customer Management

|                                               | Description                                                                 |
| --------------------------------------------- | --------------------------------------------------------------------------- |
| **[Add Customer](customers/add-customer)**   | Allows you to create a new customer and store company details.              |
| **[Edit Customer](customers/edit-customer)** | Lets you modify customer information.                                      |
| **[Delete Customer](customers/delete-customer)** | Enables you to permanently remove a customer from the system.              |

---

## Customer attributes

Below are the attributes used in Customers, which are essential for managing business

![Customer-example]({{ bookRootUrl }}/book/content/assets/images/customers/customers-example.png)

| Attribute         | Description | Example |
|------------------|-------------|---------|
| **Name** (Required) | Company name | *ABC Corp* |
| **Street Line 1** | Primary address line | *Main Street 123* |
| **Street Line 2** | Secondary address line (optional) | *Suite 456* |
| **City** | City name | *New York* |
| **Region** | Region or state | *NY* |
| **Country** | Country name selected from the list| *USA* |
| **Postal Code** | Postal or ZIP code | *10001* |
| **VAT ID** | Value-added tax identification number | *US1234567890* |
| **Customer ID** | Unique identifier for Customer | *CUST-00123* |
| **Tax ID** (Required) | Taxpayer identification number | *12345678* |
| **Date Created** | Automatically set to the current date (modifiable only by an administrator) | *2025-03-02* |
| **Active** | Enables/disables the customer’s active status | *Enabled* |
| **Tags** | Labels for categorizing customers. Default options are *Important*, *Partner*, *Needs Review*. Additional tags can be added in [Tags - settings]({{ bookRootUrl }}/en/more/settings/tags)  | *Important* |
| **Assigned User** (Required) | The user responsible for managing the customer (automatically assigned) |*<john.smith@example.com>*|
| **Notes** | Additional information about the customer | *Preferred client, frequent buyer* |

---

## Managing Contacts within Customers

Each customer can have assigned contacts, which can be created directly from the Customers app. If you want to learn how to manage contacts outside of the Customers module, please refer to **[Contacts Guide](contacts).**.

> 💡 Customers should not be confused with Contacts.  
> ✔️ **Customer** refers to a company or business.  
> ✔️ **Contact** is an individual associated with that company, such as a representative or employee.
