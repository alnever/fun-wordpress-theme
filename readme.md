# SASS WordPress Theming Kit

## Intro

The main idea of the project was to create a set of tools which could help to generate WordPress themes. It should be a collection of style sheets and supportive js-scripts. It is the 3rd review of the kit.

## Tools

- This project is created using SASS/SCSS.
- jQuery is required.

## Contnent

The kit contains:

* a set of SCSS style sheets divided in some groups: default, wp, blocks, and theme.
* a set of js-scripts which make some site elements to work, for instance, header menu or galleries. In addition they are used to alternate a behavior and look of some standard WordPress theme's elements, f.e., of some typical widgets.

## Styling elements

All styling elements are grouped in the collection of the SCSS style sheets. They represent different levels of definitions how particular elements should work and look.

### Default SCSS (default folder)

This set of style sheets contains necessary styles definitions, for example, to fit requirements of theme units test, and definitions of theme variables such as fonts, colors, etc.

By modifying of the _variables.scss_, the user can change color scheme and typography of the site.

### WordPress SCSS (wp folder)

*It is strongly unrecommended to modify style sheets in this folder!*

This style sheets contain a set of mixins which used by kit to generate correct CSS for various WordPress elements such as menus, navigation bars, widgets, etc. This mixind take in attention native names and hierarchy of the style classes used by WordPress when the elements are generated.

### Blocks

Blocks are additional mixins to simplify a process of creation of the site's elements such as headers, footers, posts, etc.

### Theme

This set of style sheets define final look of the site elements.

* layouts.scss - to define styles of the main blocks of the site such as menus, sidebars, content area, footer, header, and widget areas;
* typography.scss - to define styles of the text elements such as titles, paragraphs etc.;
* form.scss - to define styles of the form elements;
* links.scss - to define styles of the links;
* nav.scss - to define styles of the navigation elements;
* widget.scss - to define styles of the common WordPress widgets;
* posts.scss - to define styles of the posts;

## JavaScript elements

JavaScripts elelems are used to alternate a look and behavior of some elements of the site. This kit requires jQuery.

## Theme templates

The kit includes typical WordPress themes templates: index.php, header.php, footer.php etc.
All templates define a structure of layers with specific style classes which are used by kit.

## Remarks

- The development is in progress. Not every goals are reached.
