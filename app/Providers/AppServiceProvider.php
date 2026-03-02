<?php

namespace App\Providers;

use App\Filament\Commands\FileGenerators\Resource\CustomResourceFormSchemaClassGenerator;
use App\Filament\Commands\FileGenerators\Resource\CustomResourceInfolistSchemaClassGenerator;
use App\Filament\Commands\FileGenerators\Resource\CustomResourceTableClassGenerator;
use Filament\Commands\FileGenerators\Resources\Schemas\ResourceFormSchemaClassGenerator;
use Filament\Commands\FileGenerators\Resources\Schemas\ResourceInfolistSchemaClassGenerator;
use Filament\Commands\FileGenerators\Resources\Schemas\ResourceTableClassGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(ResourceTableClassGenerator::class, CustomResourceTableClassGenerator::class);
        $this->app->bind(ResourceInfolistSchemaClassGenerator::class, CustomResourceInfolistSchemaClassGenerator::class);
        $this->app->bind(ResourceFormSchemaClassGenerator::class, CustomResourceFormSchemaClassGenerator::class);
    }
}
