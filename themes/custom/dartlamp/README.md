# Cowfe DRUPAL 8 Theme

- Coworks theme - do NOT sub-theme this theme but rename it and work on it directly.

## cowfe.info.yml
- Base theme is classy.
- Define drupal regions
- Define theme name and version
- Define libraries
- Define libraries-override
- Define stylesheets-remove.

### Libraries
- load core or theme libraries ex.( 'core/jquery.ui', 'cowfe/global-styling' )

### Stylesheets-remove
- Remove core or module stylesheets from theme ex.( 'core/assets/vendor/normalize-css/normalize.css' )

## Global-styling
- Use this file to add global stylesheet , print stylesheet , javascript and etc.

## Remove module or core js
- If you need to remove javascript from module or core, you need to use `THEME_js_alter` function in `cowfe.theme`

## Display suite template
- If you need to create custom Display suite template you need to define template in cowfe.layouts.yml