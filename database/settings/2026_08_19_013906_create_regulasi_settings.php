<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // Regulasi Umum (5 item - numbered list)
        $this->migrator->add('regulasi.link_uu_14_2008', null);
        $this->migrator->add('regulasi.link_pp_61_2010', null);
        $this->migrator->add('regulasi.link_perma_2_2011', null);
        $this->migrator->add('regulasi.link_perki_1_2013', null);
        $this->migrator->add('regulasi.link_perki_1_2021', null);

        // Regulasi Kemendikbud (2 paragraf)
        $this->migrator->add('regulasi.link_permendikbud_69_2024', null);
        $this->migrator->add('regulasi.link_sk_biro_2025', null);

        // POS (6 item - numbered list)
        $this->migrator->add('regulasi.link_pos_permintaan', null);
        $this->migrator->add('regulasi.link_pos_keberatan', null);
        $this->migrator->add('regulasi.link_pos_pendokumentasian', null);
        $this->migrator->add('regulasi.link_pos_pemutakhiran', null);
        $this->migrator->add('regulasi.link_pos_pengujian', null);
        $this->migrator->add('regulasi.link_pos_pengumuman', null);
    }
};
