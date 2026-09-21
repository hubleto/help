{# tocOrder = 10 #}

# Help

{% include 'components/app-group-card.twig' with {
  'links': [
    {'page': 'en/apps/help/help', 'title': 'Help'},
    {'page': 'en/apps/help/about', 'title': 'About'},
  ],
} %}

The Help section is the central starting point for support resources and technical information about your Hubleto installation. It brings together links for everyday users, developers, and administrators so that each person can quickly continue to the most relevant source of information.

Use this section when you need instructions for a Hubleto feature, want to report unexpected behavior, are looking for development documentation, or need technical details that can assist with diagnosing an installation. The section is divided into the **Help** and **About** apps, which serve different purposes.

## What's included

* **Help:** This page provides direct links to the Hubleto user guide, GitHub issue tracker, developer guide, and Hubleto website. It is the best place to begin when you are looking for instructions or want to continue to an official support resource.
* **About:** This page displays account and network information together with details about the Hubleto packages and external dependencies installed in your environment. It is primarily useful for administrators, developers, and technical support.

## Choosing the right page

Open **Help** when your question is about how to use Hubleto or where to report a problem. Open **About** when you need to identify the current installation, check package versions, or provide environment details during technical troubleshooting.

The Help section does not modify your configuration. It provides information and links that help you understand the system or continue to the appropriate external resource.
