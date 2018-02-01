# kulmaus-v6
kulmaus.com version 6 core theme with SASS stylesheet. Theme does not contain templates for Blog or Single posts.

## Features
* HTML5
* SASS
* Font Families
  * Open Sans for typography
  * Oswald for headings
  * Sans-serif as fallback
* Translation ready
  * Text Domain: `kulmaus`
  * Language directory located in themes `/languages` folder

## WordPress Functions
* HTML5 support
* Sidebar
* Disabled Emojis
* Menu
* jQuery loading in site footer
* Removed version numbers from loaded stylesheets and scripts

## SASS
If you want to use SASS with this theme, include/remove files what you need in `sass/layout.scss` file with `@import`.

You can set default values, like CSS breakpoints and font-family in `sass/config.scss`.

## No SASS
If you want to use theme without SASS
1. Remove or comment out this line in `functions.php` (Line 90)
  `wp_enqueue_style( 'styles', THEMEROOT . '/css/layout.css' );`
1. Add your CSS styles to `style.css` file