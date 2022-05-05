<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class UpdateGeneralSettingsV2 extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.show_projects_sidebar_without_boards', true);
        $this->migrator->add('general.allow_general_creation_of_item', true);
    }
}