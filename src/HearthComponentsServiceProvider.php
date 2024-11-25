<?php

namespace HearthComponents;

use HearthComponents\Components\Alert;
use HearthComponents\Components\Checkbox;
use HearthComponents\Components\Checkboxes;
use HearthComponents\Components\DateInput;
use HearthComponents\Components\Error;
use HearthComponents\Components\Hint;
use HearthComponents\Components\Input;
use HearthComponents\Components\Label;
use HearthComponents\Components\LanguageSwitcher;
use HearthComponents\Components\LocaleSelect;
use HearthComponents\Components\PasswordConfirmation;
use HearthComponents\Components\RadioButton;
use HearthComponents\Components\RadioButtons;
use HearthComponents\Components\Select;
use HearthComponents\Components\Textarea;
use HearthComponents\Components\TranslatableInput;
use HearthComponents\Components\TranslatableTextarea;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HearthComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('hearth-components')
            ->hasAssets()
            ->hasViews()
            ->hasViewComponent('hearth', Alert::class)
            ->hasViewComponent('hearth', Checkbox::class)
            ->hasViewComponent('hearth', Checkboxes::class)
            ->hasViewComponent('hearth', DateInput::class)
            ->hasViewComponent('hearth', Error::class)
            ->hasViewComponent('hearth', Hint::class)
            ->hasViewComponent('hearth', Input::class)
            ->hasViewComponent('hearth', Label::class)
            ->hasViewComponent('hearth', LanguageSwitcher::class)
            ->hasViewComponent('hearth', LocaleSelect::class)
            ->hasViewComponent('hearth', PasswordConfirmation::class)
            ->hasViewComponent('hearth', RadioButton::class)
            ->hasViewComponent('hearth', RadioButtons::class)
            ->hasViewComponent('hearth', Select::class)
            ->hasViewComponent('hearth', Textarea::class)
            ->hasViewComponent('hearth', TranslatableInput::class)
            ->hasViewComponent('hearth', TranslatableTextarea::class)
            ->hasTranslations()
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishAssets();
            });
    }
}
