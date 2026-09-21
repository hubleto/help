# About

The About app provides an overview of your Hubleto environment's technical details. It works as a compact diagnostic panel, bringing account, network, package, and dependency information into one place.

You will not normally need this information during everyday work. It becomes useful when an administrator needs to identify an installation, a developer needs to verify package versions, or technical support asks for details about the environment in which a problem occurred.

## About your Hubleto installation

The first panel identifies the account and the network connection used to access it.

* **Account UID:** This is the unique identifier assigned to the Hubleto account. It helps distinguish the installation or account when communicating with technical support.
* **Account full name:** This is the descriptive account name configured for the installation.
* **Your IP address:** This is the client IP address from which your browser is connecting to Hubleto.
* **Server IP address:** This is the address of the server hosting the Hubleto instance.

The two IP addresses can help an administrator investigate connectivity, access-control, proxy, or firewall-related problems. Depending on the network configuration, the displayed address may be an internal network address or the address of a proxy rather than a public internet address.

## Hubleto packages

The Hubleto packages table lists the installed Composer packages whose names belong to the Hubleto project. For each package, the page displays its installed version and commit reference. These details allow developers to identify the exact code revision available in the environment and compare installations when behavior differs between systems.

Package information describes what is currently installed. It does not by itself check for updates or confirm that the installation is running the newest available release.

## External packages

Hubleto also depends on third-party Composer libraries. The External packages table lists those installed dependencies and their versions, giving developers a more complete picture of the software environment.

This information can be important when diagnosing compatibility problems because two installations may use different dependency versions even when their visible configuration appears similar.

## Useful links

The About app also provides links to Hubleto's privacy policy, terms of use, main website, user guide, community channels, developer guide, and source code. These links provide additional legal, user, community, and development resources without requiring you to locate each site manually.

## Using the information for support

When reporting a technical problem, include only the details that are relevant to the issue. Package versions and commit references are often useful when the problem may depend on a particular software version. Network information may be useful for connectivity or access problems.

Account identifiers and IP addresses describe your environment and should be treated as internal technical information. Avoid posting them publicly unless they are required and you understand who will be able to view them.
