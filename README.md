# Disallow File Edit - WordPress Plugin

A simple WordPress plugin that enhances security by disabling the file editor and file modifications in the WordPress admin area.

## Features

- Disables the plugin and theme file editor in WordPress admin
- Prevents file modifications including plugin/theme installation and updates
- Lightweight and easy to use
- No configuration needed - works immediately upon activation

## Installation

1. Download the plugin files
2. Upload the `disallow-file-edit.php` file to the `/wp-content/plugins/disallow-file-edit/` directory, or install the plugin through the WordPress plugins screen directly
3. Activate the plugin through the 'Plugins' screen in WordPress

## What This Plugin Does

This plugin defines two WordPress security constants:

- `DISALLOW_FILE_EDIT` - Disables the plugin and theme file editor in the WordPress admin
- `DISALLOW_FILE_MODS` - Disables all file modifications including plugin/theme installation and updates

## Alternative Configuration Methods

If you prefer not to use a plugin, you can achieve the same result by adding the following code:

### In wp-config.php
```php
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);
```

### In Functions.php

```php
function disable_mytheme_action() {
  define('DISALLOW_FILE_EDIT', true);
  define('DISALLOW_FILE_MODS', true);
}
add_action('init','disable_mytheme_action');
```

## License

This plugin is licensed under GPL v2 or later.
