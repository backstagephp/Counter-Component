# A collection of beautiful website components.

From the makers of Backstage.

## Installation
If you using backstage/cms these components are including by default.

```bash
composer require backstage/components
```

Add the following code to app.js.
```js
import.meta.glob('../views/components/**/*.css', { eager: true });
import.meta.glob('../views/components/**/*.js', { eager: true });
```

Publishes a component
```bash
php artisan backstage:component {component?}
```

# Contributing

If you made a website component follow these steps.

**Add Repository as submodule**

```bash
git submodule add components/CounterComponent git@github.com:backstagephp/Counter-Component.git components/CounterComponent
composer require backstage/counter-component
```

## Updating this repository

To update all submodules
```bash
git submodule update --recursive --remote
git add .
git commit -m "Update submodules"
git push
```

To update a single submodule directly
```bash
cd components/CounterComponent
git add .
git commit -m "wip"
git push
```