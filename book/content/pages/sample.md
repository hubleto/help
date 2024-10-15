# Heading 1

This is a sample page and this is sample paragraph.

## Text options

Various font types: *italic*, **bold**.

Use VSCode plugin `Markdown` by **Yu Zhang** and `Ctrl+Shift+V` shortcut to easily preview.

### Simple list

  * item 1
  * item 2
  * item 3

### Numbered list

  1. item 1
  2. item 2
  3. item 3

### Internal link

[This is a link to an internal page of the book](sample)

### More examples

For more examples (e.g. links), see this [markdown documentation](https://www.markdownguide.org/). Be aware, that the library for parsing Markdown used in this guide might not support all Markdown features.

## Images

{% include 'components/image.twig' with {'image': 'Lenna(testimage).png', 'caption': 'This is a sample image.'} %}

To include your image, follow these steps:

  1. upload .png or .jpg file to book/content/images
    * filename of the image **MUST NOT** contain underscores (_)
  2. use this code in your page to add image: `{% include 'components/image.twig' with {'image': 'Lenna(testimage).png', 'caption': 'This is a sample image.'} %}`

## Tables

... to be done ...