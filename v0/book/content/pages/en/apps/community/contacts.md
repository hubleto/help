# Contacts
{% include 'components/demo-cta-button.twig' with { 'ctaUrl': 'contacts' } %}
{{ renderTopBar(onThisPage)|raw }}

Contacts in the application represent **individuals** associated with a customer. These could be employees, representatives, or any other relevant people connected to a business. Each contact entry stores essential details such as personal information, contact details, and classification categories.

> 💡 **Note:** A customer must be created before adding a contact. Contacts are always linked to customers to ensure proper association.

## Contact Management

Managing contacts is a key part of maintaining business relationships. The following actions allow you to effectively handle your contact database:

| Action | Description |
|---------------------------------|----------------------------------------------------------------------------------|
| **[Add Contact](../contacts/add-contact)** | Create a new contact and link it to an existing customer. |
| **[Edit Contact](../contacts/edit-contact)** | Modify the details of an existing contact. |
| **[Delete Contact](../contacts/delete-contact)** | Permanently remove a contact from the system. |

## Contact Attributes

Below are the key attributes used to manage individuals linked to a customer:

![Contact-example]({{ bookRootUrl }}/content/assets/images/contacts/contacts-example.png)
*Example view of contact*

### Personal Information

| Attribute | Description | Example |
|------------------|-------------|---------|
| **Salutation** | Contact's salutation. | *Mr.*, *Mrs.* |
| **First Name** (Required) | The first name of the contact. | *John* |
| **Last Name** | The last name of the contact. | *Smith* |
| **Customer** (Required) | The company associated with the contact. | *ABC Corp* |
| **Tags** | Labels for categorizing contacts. Default tags: *Important*, *Partner*, *Needs Review*. Additional tags can be added in [Tags - settings]({{ bookRootUrl }}/en/more/settings/tags). | *Important* |
| **Main Contact** | Specifies if this is the primary contact for the customer. | *Enabled* |

### Contact Details

| Attribute | Description | Example |
|------------------|-------------|---------|
| **Type** (Required) | Type of contact (Email, Phone, etc.). | *Email* |
| **Value** (Required) | The actual contact detail. | *<john.smith@example.com>* |
| **Category** (Required) | The category of the contact (Home, Work, Other). | *Work* |

## Managing Contacts within Customers

Contacts can be managed directly within the **Customers** module, ensuring they are properly linked to their respective companies. See **[Customers Guide](../customers)** for details.

> 💡 **Key Difference:** Contacts and Customers are distinct entities.
>
> - **Customer** 🏢 → A company or business entity.
> - **Contact** 👤 → An individual associated with a company.
>
> ![Contact-is-not-Customer]({{ bookRootUrl }}/content/assets/images/contacts/contacts-no-customers.png)
