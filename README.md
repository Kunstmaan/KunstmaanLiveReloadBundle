# KunstmaanLiveReloadBundle

The KunstmaanLiveReloadBundle makes your life easier by injecting the livereload script snippet from the [grunt-contrib-watch](https://github.com/gruntjs/grunt-contrib-watch) plugin into your html in the dev environment. Please refer to the documentation from grunt-contrib-watch to see how to configure livereload then use this bundle to automaticly inject the livereload snippet into your html in the dev environment.

More information about our bundles: [http://bundles.kunstmaan.be](http://bundles.kunstmaan.be).

## Installation?

composer.json
```json
    "require": {
        "kunstmaan/live-reload-bundle": "*"
    },
```

AppKernel.php:
```php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Kunstmaan\LiveReloadBundle\KunstmaanLiveReloadBundle(),
            // ...
        );
```

Configure your Gruntfile to watch certain files using grunt-contrib-watch and don't forget to set the [livereload option](https://github.com/gruntjs/grunt-contrib-watch#live-reloading) to ```true```.

## Configuration
There are certain configuration options available for this bundle

```yaml
kunstmaan_live_reload:
    enabled: true
    host: localhost
    port: 35729
```

By default the default options from grunt-contrib-watch are used.