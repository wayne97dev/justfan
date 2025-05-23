<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class IconsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Returns a styled <svg> icon made out of IonIcons provided ones.
     *
     * @param $icon
     * @param string $variant
     * @param bool $centered
     * @param string $classes
     * @return string
     */
    public static function readIcon($icon, $variant = '', $centered = true, $classes = '')
    {
        if ($variant != '') {
            $classes .= ' icon-'.$variant;
        }
        if ($centered) {
            $classes .= ' d-flex justify-content-center align-items-center';
        }
        $icon = self::readSvgContent($icon);
        $content = "<div class=\"ion-icon-wrapper $classes\">
            <div class=\"ion-icon-inner\">
            $icon
            </div>
            </div>";

        return $content;
    }

    /**
     * Reads actual svg content from IonIcons.
     *
     * @param $icon
     * @return false|string|string[]|null
     */
    public static function readSvgContent($icon)
    {
        $paths = [
            public_path("/libs/ionicons/dist/svg/{$icon}.svg"),
            public_path("/img/logos/{$icon}.svg"),
        ];

        foreach ($paths as $path) {
            if (file_exists($path)) {
                $content = file_get_contents($path);
                return preg_replace('~<title>.*?</title>~', '', $content);
            }
        }

        throw new \Exception("SVG icon '{$icon}' not found in any known paths.");
    }
}
