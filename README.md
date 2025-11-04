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