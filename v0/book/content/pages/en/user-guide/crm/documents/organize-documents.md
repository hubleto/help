{# tocOrder = 3 #}

# Organize documents

## How to view documents:
In the left menu, go to `CRM` → `Documents`.


An overview of folders and documents will open.

Each folder can contain additional folders and documents.

Documents are displayed as files (e.g., bid_template.docx).

## How to add a new folder
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` → `Documents`.',
  },

  '2': {
    'title': 'Click the transparent <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add folder</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  * **Folder name** (required) - folder title.
  * **Parent folder** - select a parent folder if you want to place this one inside an existing folder..
    ',
  },

  '4': {
    'title': 'Click Add'
  }
}} %}


## How to add a new document
{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Open the folder where you want to store the document.',
  },

  '2': {
    'title': 'Click the transparent <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add document</span></button> button',
  },

  '3': {
    'title': 'Fill in.',
    'description': '
**A form will open where you fill in:**
  * **Document name** (required) - document title.
  * **Folder** - the folder where the document will be stored (pre-filled if you’re already inside a folder).
  * **File** - upload a file from your computer.
  * **File link** - alternatively, insert a link to a cloud-stored document (Google Drive, OneDrive, etc.).
    ',
  },

  '4': {
    'title': 'Click Add'
  }
}} %}

## How to manage documents:
Click on a document to open or download it.

Documents and folders can be deleted or moved as needed.


## Tips
<li>
Use a clear folder structure (e.g., Marketing materials, Customer profiles).
</li>

<li>
For larger teams, it’s practical to store links to shared cloud storage (Google Drive, OneDrive).
</li>

<li>
If you use recurring templates (e.g., invoices, contracts), create a dedicated folder for them.
</li>

<li>
Common mistakes
Missing folder/document name: Without it, the item can’t be saved.
</li>

<li>
Duplicate documents: Always use clear naming conventions (e.g., Offer_ClientName_2025).
</li>

<li>
Forgotten link settings: If adding a document as a link, make sure the sharing permissions are correct (otherwise colleagues won’t be able to open it).
</li>


## Summary

| Topic                          | Summary                                                                                                               |
|--------------------------------|-----------------------------------------------------------------------------------------------------------------------|
| Organizing Documents           | Documents are organized into folders and subfolders for a clear structure.                                            |
| Creating New Folders           | New folders are created via + Add folder, where you define the name and optional parent folder.                       |
| Uploading or Linking Documents | Documents can be uploaded directly from your computer or added as links to cloud storage (Google Drive, OneDrive, …). |
| Managing Documents and Folders | Every document or folder can be opened, moved, or deleted at any time.                                                |
| Naming and Folder Conventions  | Clear naming conventions and dedicated folders (e.g., for templates) keep the storage organized and easy to navigate. |

## Table of contents

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/user-guide/crm/customers',
  'maxLevel': 2,
} %}