<?php

namespace Aldrumo\Settings;

use Aldrumo\Settings\Models\Setting;
use Aldrumo\Settings\Contracts\Repository as SettingsRepository;

class Repository implements SettingsRepository
{
    public function get(string $slug)
    {
        $setting = Setting::where('slug', $slug)->first();

        if ($setting === null) {
            return null;
        }

        return $setting->setting_data;
    }

    public function set(string $slug, $data)
    {
        Setting::updateOrInsert(
            [
                'slug' => $slug,
            ],
            [
                'setting_data' => $data,
            ]
        );
    }
}
