<?php

namespace Raphaelcosta27\Settings;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SettingsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('template-settings')
            ->hasConfigFile('settings')
            ->hasMigration('create_settings_table');
    }

    public function packageBooted(): void
    {
        // Integração com o Template (em breve):
        // aqui o pacote vai registrar no PackageModules do Template o módulo
        // "Settings" (submenu de Config), a permissão
        // `gerenciar_configuracoes_sistema`, o menu e as páginas.
        // Use a guarda abaixo para o pacote continuar funcionando fora do Template:
        //
        // if (class_exists(\App\Support\Permissions\PackageModules::class)) {
        //     // ...
        // }
    }
}
