SOMA Project
============

Soma is a lightweight PHP micro-framework, designed to provide the bare essentials and lay a foundation for a developer to modularly put together their application without the framework getting in the way. `soma/framework` is the core that provides config loading, DI container, environment loading, service providers, facades, class aliases and a command line interface.

This is a boilerplate directory structure to quickly get up and running with your own project utilizing Soma.

## Usage

```sh
composer create-project soma/project [project-directory]
```

The required paths need to be created by the framework before you can run your application. You can do so by running the `app:install` command [after you've configured](https://github.com/soma-php/framework#configuration) your `.env`.

```
php appctrl app:install
```

## License

MIT