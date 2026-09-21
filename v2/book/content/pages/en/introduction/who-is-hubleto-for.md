# Who is Hubleto for?

Hubleto is designed for organizations and professionals who want to manage business processes in one connected environment without being limited to a rigid, one-size-fits-all system.

It combines two roles:

* a **ready-to-use suite of business applications** for everyday work, and
* an **open-source application framework** that can be extended when standard functionality is not enough.

This makes Hubleto relevant to business users, system administrators, developers, and implementation consultants. You do not need to fit into only one of these groups. A small company may begin with ready-to-use CRM apps, host Hubleto on its own server, and later ask a developer to automate a company-specific process.

Understanding which profile is closest to your situation will help you choose an appropriate set of apps, deployment approach, and level of customization.

## Find your starting profile

| Profile | Main objective | Typical starting point |
| --- | --- | --- |
| Small and medium-sized businesses or workgroups | Bring everyday work and business data into one system | Start with the apps needed by the team and configure the workspace around existing processes |
| IT administrators and privacy-conscious organizations | Retain control over deployment, access, data, and integrations | Evaluate a self-hosted Community installation and define the required security controls |
| Developers and implementation consultants | Build, integrate, or implement tailored business solutions | Set up a development environment, study the architecture, and create or extend Hubleto apps |

These profiles describe common starting points, not restrictions. Hubleto can also suit a combination of roles, industries, and technical requirements.

## Profile 1: Small and medium-sized businesses and workgroups

**Your goal:** Replace disconnected spreadsheets and applications with a shared workspace that supports consistent processes and clearer collaboration.

Hubleto is a practical option for teams that need more structure than spreadsheets can provide but do not want every process divided among unrelated tools. Its modular design allows an organization to begin with a focused set of apps and expand the workspace as requirements grow.

### What these teams can manage

Depending on the apps installed and configured in your Hubleto instance, teams can use Hubleto for areas such as:

* **CRM and sales:** Maintain customer and contact records, manage leads and deals, record activities, prepare quotes, and follow sales workflows.
* **Marketing:** Organize leads and campaigns and connect marketing activity with related customer records and follow-up work.
* **Projects and tasks:** Assign work, set deadlines, record progress, and keep project information connected to the people responsible for it.
* **Sales and operations:** Work with products, suppliers, orders, warehouses, inventory, documents, and other operational records when the corresponding apps are installed.
* **Communication and follow-up:** Use calendars, tasks, mail-related features, notifications, and activity histories to keep work visible to the team.
* **Reporting:** Review dashboards, reports, and exports based on the data available to the user and the installed apps.

The exact functionality depends on the Hubleto edition, installed apps, configuration, integrations, and user permissions. Not every deployment contains every app or feature.

### Why the modular approach matters

A modular system lets a team introduce change gradually. For example, a business can begin by managing customers, contacts, leads, and deals. It can later add project management, documents, products, orders, or a custom app without replacing the original workspace.

Because related apps can work with shared records, users spend less time duplicating information between isolated tools. A customer can be connected with contacts, activities, deals, tasks, documents, or orders instead of being represented differently in every application.

### A good fit when

Hubleto may be a good fit for your team when:

* important information is spread across spreadsheets, inboxes, and separate applications;
* team members need a shared history of customers, tasks, or business activity;
* your processes are specific enough to require configuration or future customization;
* you want to introduce apps gradually instead of deploying an oversized system at once;
* your organization values the option to host and extend the software independently.

For the best results, begin by agreeing on record ownership, permissions, workflows, required fields, and data quality. This gives your team a clear foundation and makes it easier to expand Hubleto as your processes develop.

## Profile 2: IT administrators and privacy-conscious organizations

**Your goal:** Control where the system runs, how users access it, how data is protected, and which services can exchange data with it.

Hubleto Community is open-source software and can be installed on infrastructure managed by your organization or its chosen service provider. Official installation options include Composer and downloadable packages, and current developer documentation also describes other deployment approaches.

### What self-hosting provides

With a self-hosted deployment, your organization can control:

* the server and database environment;
* network access and domain configuration;
* user accounts, roles, and permissions;
* backup, retention, monitoring, and recovery procedures;
* update and maintenance schedules;
* enabled apps and external integrations;
* the physical or contractual location of stored data.

This can help organizations meet internal security, sovereignty, or operational requirements. It also reduces dependency on a single hosted environment because the open-source code and the deployment infrastructure remain accessible to the organization.

### Privacy and compliance responsibilities

Self-hosting does **not** automatically guarantee privacy, security, or compliance. It transfers more responsibility and control to the organization operating the system.

Administrators should still evaluate:

* server hardening, HTTPS, firewall rules, and database security;
* strong authentication and appropriate user permissions;
* backups, disaster recovery, logging, and security updates;
* personal-data retention and deletion procedures;
* any mail provider, analytics service, API, extension, or other third-party integration;
* applicable legal and regulatory requirements.

Hubleto does not remove data-protection obligations. Whether a deployment meets requirements such as GDPR depends on how the organization configures, operates, secures, and uses the complete environment.

### Community software and commercial use

Hubleto describes its Community edition as free and open source and states that it can be used for commercial projects. Premium, enterprise, partner, hosting, implementation, or support services may have separate terms or costs. Always check the license and current terms of the specific package or app you plan to deploy.

This distinction is important: using an open-source core does not mean that every possible app, integration, hosting service, or implementation service is automatically included at no cost.

## Profile 3: Developers and implementation consultants

**Your goal:** Build custom apps, automate business processes, integrate other systems, or deliver tailored Hubleto implementations.

Hubleto is not only a collection of finished business apps. It also provides a development environment for extending existing behavior and creating new applications. This is useful when an organization has workflows, records, interfaces, or integrations that are too specific for a standard product configuration.

### What developers can build

The developer documentation covers capabilities such as:

* creating and installing custom Hubleto apps;
* defining data models, routes, controllers, and views;
* customizing forms, tables, and React user-interface components;
* connecting apps through shared records and built-in integration patterns;
* implementing automation hooks and scheduled jobs;
* creating REST API endpoints and integrations with external systems;
* writing tests and preparing deployments for customer environments.

Hubleto is PHP-based and uses established web technologies and libraries, including React, Tailwind CSS, Twig, Eloquent, and PrimeReact in relevant parts of the platform. Developers should consult the current developer guide for supported versions, architecture, and setup instructions because these can change between releases.

### Implementation consultants

Implementation consultants can use Hubleto to translate business requirements into a workable CRM or ERP setup. Their work may include:

* mapping existing business processes;
* choosing and configuring suitable apps;
* defining roles, permissions, workflows, and data structures;
* planning imports and migration from existing tools;
* coordinating custom development and integrations;
* training users and supporting adoption after launch.

Consultants do not need to perform every technical task themselves. Hubleto describes its consultant role as helping customers define requirements, plan an implementation strategy, and coordinate delivery with certified developers when development is required.

### Certification and partnership paths

Hubleto provides a developer certification path covering progressively more advanced development topics. It also publishes separate consultant and partnership opportunities.

Certification provides a structured way to demonstrate familiarity with the topics covered by each programme and to develop practical Hubleto implementation skills. Developers and consultants can also explore partnership and collaboration opportunities through the current [Hubleto developer guide](https://developer.hubleto.com/v2/certification) and [Hubleto website](https://www.hubleto.com/).

## Combining the profiles

Many real Hubleto deployments combine all three profiles.

For example, a service company may use CRM, projects, tasks, documents, and reporting for daily operations. Its administrator may host the instance on company-controlled infrastructure and manage access policies. A developer may then add an app that reflects the company's unique approval process or connects Hubleto with an external service.

This overlap is one of the main reasons to choose a modular and extensible platform: the system can begin as a practical business tool and evolve into a more tailored operational environment.

## Questions to answer before you begin

Use the following questions to define your starting point:

1. Which business process do you want to improve first?
2. Which apps and records are essential for that process?
3. Who will own the data and maintain its quality?
4. Which users need access, and what should each role be allowed to view or change?
5. Will Hubleto be self-hosted, managed by a service provider, or deployed through another supported arrangement?
6. Do you need to import data or integrate another system?
7. Can the requirement be handled by configuration, or does it require custom development?
8. Who will maintain updates, backups, security, and user support after launch?

Answering these questions before installation helps keep the first deployment focused and reduces unnecessary complexity.

## Choose your next step

| If you want to... | Continue with... |
| --- | --- |
| Understand the platform and its terminology | **What is Hubleto** in the Introduction section |
| Learn how this documentation is organized | **How to use this guide** in the Introduction section |
| Begin using an existing Hubleto workspace | **Getting Started** and then the guide for the app you need |
| Install or develop Hubleto | The [Hubleto developer guide](https://developer.hubleto.com/v2/install) |
| Evaluate available business apps | The [Hubleto apps overview](https://www.hubleto.com/en/apps) |

## Summary

Hubleto is intended for teams that need connected business applications, organizations that value control over deployment and data, and technical professionals who build or implement tailored solutions. These audiences are not mutually exclusive.

The best way to begin is to select one clear business process, identify the required apps and responsibilities, and choose a deployment approach that your organization can operate securely. You can then expand or customize Hubleto as your requirements become clearer.

### See also

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/introduction',
  'maxLevel': 2,
} %}
