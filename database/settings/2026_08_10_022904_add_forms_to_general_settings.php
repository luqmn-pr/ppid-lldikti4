<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.file_form_permohonan', null);
        $this->migrator->add('general.file_form_keberatan', null);
    }

    public function down(): void
    {
        $this->migrator->delete('general.file_form_permohonan');
        $this->migrator->delete('general.file_form_keberatan');
    }
};
