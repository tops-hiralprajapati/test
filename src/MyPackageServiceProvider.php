<?php

namespace MyVendor\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // For publishing config, migrations, etc.
    }

    public function register()
    {
        // Register package services
    }
}
