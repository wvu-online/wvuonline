# Sidr integration for Drupal

[Sidr](https://github.com/artberri/sidr) integration for Drupal. This module
allows the admin to create "trigger" blocks which when clicked, use the Sidr
libraries to slide in / slide out a specified target element. This is very
useful for implementing responsive menus. All you have to do is create one or
more dedicated regions in your theme, say, `mobile_menu` and then configure a
sidr trigger block to toggle it.

## Installation

* Download [sidr 2.2.1](https://github.com/artberri/sidr/releases) libraries.
* Copy the `dist` directory of the download in your Drupal install such that
  `jquery.sidr.js` is located in `DRUPAL_ROOT/libraries/sidr/jquery.sidr.js`.
* Install and enable this module on your Drupal site.
* From the `admin/structure/block` page in your Drupal site, click on the
  _Place block_ button for the region in which you want to place the trigger
  for your sidr. This trigger will open / close your sidr. Configure the block
  as per your needs and save your changes.
* The sidr trigger should be visible on your site and if you click on the
  trigger, you should see a sidr menu sliding out as per your configuration. 
