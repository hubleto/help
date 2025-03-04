# Contacts

In the application, Contacts represent **individuals** linked to a customer. These could be employees, representatives, or any relevant person tied to a business. Each contact record includes essential details like personal information, contact details, and categories.

> 💡 A customer must be created first before adding a contact. Contacts are always linked to customers for proper association.

## Contact Management

|                                               | Description                                                                 |
| --------------------------------------------- | --------------------------------------------------------------------------- |
| **[Add Contact](contacts/add-contact)**       | Allows you to create a new contact and link it to an existing customer.     |
| **[Edit Contact](contacts/edit-contact)**     | Lets you modify the details of an existing contact.                         |
| **[Delete Contact](contacts/delete-contact)** | Enables you to permanently remove a contact from the system.                |

## Contact Attributes

Below are the key attributes used in Contacts to manage individuals linked to a customer.

![Contact-example]({{ bookRootUrl }}/book/content/assets/images/contacts/contacts-example.jpg)

---

### Personal Information

| Attribute         | Description | Example |
|------------------|-------------|---------|
| **First Name** (Required) | First name of the contact | *John* |
| **Last Name** | Last name of the contact | *Smith* |
| **Customer** (Required) | The company associated with the contact | *ABC Corp* |
| **Tags** | Labels for categorizing contacts. Default tags: *Important*, *Partner*, *Needs Review*. Additional tags can be added in [Tags - settings]({{ bookRootUrl }}/en/more/settings/tags) | *Important* |
| **Main Contact** | Specifies if this is the primary contact for the customer | *Enabled* |

---

### Contact Details

| Attribute         | Description | Example |
|------------------|-------------|---------|
| **Type** (Required) | Type of contact (Email, Phone, etc.) | *Email* |
| **Value** (Required) | The actual contact detail | *<john.smith@example.com>* |
| **Category** (Required) | The category of the contact | *Home* |

---

## Managing Contacts within Customers

Contacts can be managed directly within the **Customers** module, ensuring they are properly linked to their respective companies. See **[Customers Guide](customers).**

> 💡 Contacts and Customers are not the same.  
>
> - **Customer** 🏢 → A company or business entity.  
> - **Contact** 👤 → An individual associated with company.
>
> ![Contact-is-not-Customer]({{ bookRootUrl }}/book/content/assets/images/contacts/contacts-no-customers.png)

---
