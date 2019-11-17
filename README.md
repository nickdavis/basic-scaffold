# Basic Scaffold

WordPress plugin framework forked from Alain Schlesser's excellent [Basic Scaffold](https://github.com/mwpd/basic-scaffold/).

## Quick Start

In order to use the framework, you'll probably want to rename the following:

1. Plugin folder
2. `basic-scaffold.php` file
3. Namespace (NickDavis\BasicScaffold)
4. Namespace in composer.json (NickDavis\\BasicScaffold)
5. `BasicScaffoldPlugin.php` / `BasicScaffoldPluginFactory.php` files (and classes) in src and `BasicScaffoldException.php` file (and class) in src/Exception
6. Plugin header name (Basic Scaffold)
7. Author name (Nick Davis)
8. Author email (nick@iamnickdavis.com)
9. Author website (iamnickdavis.com)
10. Title and description in `composer.json`
11. Plugin Name, Description and Text Domain in (the formerly known as) `basic-scaffold.php` file
12. Rename HOOK_PREFIX and SERVICE_PREFIX (nick-davis.basic-scaffold) in the file formerly known as `BasicScaffold.php`

## Thanks

Thanks to Alain Schlesser for all his help.
