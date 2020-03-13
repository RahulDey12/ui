<?php

namespace Laravel\Ui\Presets;

class Tailwind extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateWebpackConfiguration();
        static::updateTailwindConfiguration();
        static::updateSass();
        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'tailwindcss' => '^1.2.0',
        ] + $packages;
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__.'/tailwind-stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Update the Tailwind configuration
     * 
     * @return void
     */
    protected static function updateTailwindConfiguration()
    {
        copy(__DIR__.'/tailwind-stubs/tailwind.config.js', base_path('tailwind.config.js'));
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__.'/tailwind-stubs/tailwind.css', resource_path('sass/tailwind.css'));
    }
}
