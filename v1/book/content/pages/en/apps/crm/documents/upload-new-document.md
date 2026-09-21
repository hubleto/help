{# tocOrder = 1 #}

# Upload new document

Adding a new document in Hubleto is straightforward. You can upload a file from your computer and store it in the Documents section so it is easier to organize and access later.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Go to `CRM` -> `Documents`.',
  },

  '2': {
    'title': 'Open the folder where you want to store the document, or stay in the main Documents view if you do not need a specific folder yet.',
  },

  '3': {
    'title': 'Click the <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add document</span></button> button.',
  },

  '4': {
    'title': 'Fill in the document details.',
    'description': '
**The form can include:**
  * **Document name** (required) - the title of the document.
  * **Folder** - where the document will be stored.
  * **File** - upload the document from your computer.
  * **File link** - optional external link if the document is stored in cloud storage instead of being uploaded directly.
    ',
  },

  '5': {
    'title': 'Click <button class="btn btn-add"><span class="icon"><i class="fas fa-plus"></i></span><span class="text">Add</span></button> when everything is ready.',
  }
}} %}

After the document is added, it becomes available in the Documents section, where users can open it, organize it into folders, or work with it as part of their document management process.

## Tips

Use clear document names so files are easier to find later.

Store related documents in the same folder to keep the structure organized.

If you use a cloud link instead of a file upload, make sure the sharing permissions are set correctly.

## Common mistakes

Missing required fields: documents cannot be added without the required information.

Uploading to the wrong folder: check the selected folder before saving.

Broken external link: if you use `File link`, confirm that the link works for the intended users.

## Summary

| Topic | Summary |
| --- | --- |
| Where to upload | Go to `CRM` -> `Documents`. |
| Add action | Use the `Add document` button. |
| Required input | Enter the document name and upload a file or provide a link. |
| Result | The document is stored in Hubleto's Documents section for later access and organization. |

### See also

{% include 'components/table-of-contents-from-pages-folder.twig' with {
  'folder': 'en/apps/crm/documents',
  'maxLevel': 2,
} %}
