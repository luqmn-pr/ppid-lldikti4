<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class RegulasiSettings extends Settings
{
    // Regulasi Umum (numbered list, 5 item)
    public ?string $link_uu_14_2008;
    public ?string $link_pp_61_2010;
    public ?string $link_perma_2_2011;
    public ?string $link_perki_1_2013;
    public ?string $link_perki_1_2021;

    // Regulasi Kemendikbud (2 paragraf mandiri)
    public ?string $link_permendikbud_69_2024;
    public ?string $link_sk_biro_2025;

    // POS (numbered list, 6 item)
    public ?string $link_pos_permintaan;
    public ?string $link_pos_keberatan;
    public ?string $link_pos_pendokumentasian;
    public ?string $link_pos_pemutakhiran;
    public ?string $link_pos_pengujian;
    public ?string $link_pos_pengumuman;

    public static function group(): string
    {
        return 'regulasi';
    }
}
