<?php

namespace App\Helpers;

use Latte\Engine;

class Latte
{
    public static function render(string $template, array $params = []): string
    {
        $latte = new Engine();
        $latte->setCacheDirectory(WRITEPATH . 'cache/temp');

        return $latte->rendertoString($template);
    }
}
