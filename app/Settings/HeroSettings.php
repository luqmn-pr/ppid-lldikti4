<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HeroSettings extends Settings
{
    public string $title;
    public string $subtitle;
    public string $description1;
    public string $description2;
    public ?string $background_image;
    public string $stats_count;
    public string $stats_label;
    public string $stats_description;

    public static function group(): string
    {
        return 'hero';
    }
}
