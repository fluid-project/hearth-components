<?php

namespace HearthComponents\Tests;

use ChinLeung\LaravelLocales\LaravelLocalesServiceProvider;
use HearthComponents\HearthComponentsServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use InteractsWithViews;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            HearthComponentsServiceProvider::class,
            LaravelLocalesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        Schema::dropAllTables();

        Schema::create('translatable_models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->json('name')->nullable();
            $table->json('slug')->nullable();
        });
    }
}
