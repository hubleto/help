{% set app = guide.getAppInfo('community/customers') %}

# Customers
Free customer management and addressbook.

**Customers** represent companies or businesses that your organization interacts with. Each customer record stores essential details such as the company name, address, tax-related information, and associated contacts, ensuring a structured approach to business management.

> 💡 **Reminder:** Before adding a contact, you must first create a customer. Contacts are always linked to customers for proper association.

## Customer Management

To keep your customer database organized and up to date, the following actions are available:

| Action                                           | Description                                                |
| ------------------------------------------------ | ---------------------------------------------------------- |
| **[Add Customer](customers/add-customer)**       | Create a new customer and store essential company details. |
| **[Edit Customer](customers/edit-customer)**     | Modify an existing customer’s information as needed.       |
| **[Delete Customer](customers/delete-customer)** | Permanently remove a customer from the system.             |

## Customer Attributes

Below are the attributes that define a Customer, helping process business operations:

![Customer-example]({{ bookRootUrl }}/content/assets/images/customers/customers-example.png)
*Example view of a customer*

| Attribute                    | Description                                                                                                                                                                   | Example                            |
| ---------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------- |
| **Name** (Required)          | The official company name.                                                                                                                                                    | *ABC Corp*                         |
| **Street Line 1**            | Primary address line.                                                                                                                                                         | *Main Street 123*                  |
| **Street Line 2**            | Additional address information (optional).                                                                                                                                    | *Suite 456*                        |
| **City**                     | The city where the company is located.                                                                                                                                        | *New York*                         |
| **Region**                   | The state or administrative region.                                                                                                                                           | *NY*                               |
| **Country**                  | The country of the company (selectable from a predefined list).                                                                                                               | *USA*                              |
| **Postal Code**              | The postal or ZIP code for the business location.                                                                                                                             | *10001*                            |
| **VAT ID**                   | The company’s Value-Added Tax identification number.                                                                                                                          | *US1234567890*                     |
| **Customer ID**              | A unique identifier for each customer.                                                                                                                                        | *CUST-00123*                       |
| **Tax ID** (Required)        | The taxpayer identification number for regulatory purposes.                                                                                                                   | *12345678*                         |
| **Date Created**             | The date when the customer was added (automatically set, admin-modifiable).                                                                                                   | *2025-03-02*                       |
| **Active**                   | Indicates whether the customer is currently active in the system.                                                                                                             | *Enabled*                          |
| **Tags**                     | Labels for categorizing customers (e.g., *Important*, *Partner*, *Needs Review*). Additional tags can be added in [Tags - settings]({{ bookRootUrl }}/en/more/settings/tags). | *Important*                        |
| **Assigned User** (Required) | The user responsible for managing this customer account.                                                                                                                      | *<john.smith@example.com>*         |
| **Notes**                    | Additional details or comments about the customer.                                                                                                                            | *Preferred client, frequent buyer* |

## Managing Contacts within Customers

Each customer can have assigned contacts, which can be created directly from the **Customers** module. This ensures all contacts are properly linked to the correct business entity.

For managing contacts separately from the Customers module, refer to **[Contacts Guide](contacts)**.

> 💡 **Key Distinction:** Customers and Contacts serve different purposes.  
> ✔️ **Customer** 🏢 → A company or business entity.  
> ✔️ **Contact** 👤 → An individual associated with that company, such as a representative or employee.  
