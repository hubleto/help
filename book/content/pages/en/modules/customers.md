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

![Customer-example]({{ bookRootUrl }}/book/content/assets/images/customers/customers-new-new.jpg)

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

### Add Customer

1. Click on the **Add Customer** button, located in the top left corner.
2. Fill in the required details in the form that appears. (See the **Customer Attributes** section for details.)
3. Click **Add** to store the new customer.

![Customer-add]({{ bookRootUrl }}/book/content/assets/images/customers/customers-new-added.jpg)

---

### Edit Customer

1. Locate the desired customer in the list.
2. Click on the customer record to open it.
3. In the form that opens, click **Edit** in the top left corner.
4. Modify the necessary details.
5. Click **Save** to apply changes.

---

### Delete Customer

1. Locate the desired customer in the list.
2. Click the **Delete** icon (🗑️) at the end of the record, next to the active status.
3. Confirm the deletion.

![Customer-delete]({{ bookRootUrl }}/book/content/assets/images/customers/customers-delete.jpg)

### Delete Customer in edit form

1. Locate the desired customer in the list.
2. Click on the customer record to open it.
3. In the form that opens, click **Edit** in the top left corner.
4. The **Delete** button will appear In the top right corner. Click on it and then confirm by clicking **Confirm delete**.
5. Confirm the deletion.

---

## Managing Contacts within Customers

Each customer can have assigned contacts, which can be created directly from the Customers app. If you want to learn how to manage contacts outside of the Customers module, please refer to **[Contacts Guide](contacts).**.

> 💡 Customers should not be confused with Contacts.  
> ✔️ **Customer** refers to a company or business.  
> ✔️ **Contact** is an individual associated with that company, such as a representative or employee.

## Add a Contact to a Customer

1. Open the **Customers** module and select an existing customer.
2. In the customer detail view, go to the **Personal Information** section.
3. Click **Add Contact** and fill in the necessary details.
4. Click **Save** to add the contact.

![Customer-Personal-Information-Section]({{ bookRootUrl }}/book/content/assets/images/customers/customers-contact-personal-information.jpg)

## Add Contact details

1. Within the **Customers** module, open the details of a customer.
2. Navigate to the **Contacts** section.
3. Click **Add Contact** and enter the required information.
4. Click **Save**.

![Customer-Contact-Section]({{ bookRootUrl }}/book/content/assets/images/customers/customers-contact-contact.jpg)

---
