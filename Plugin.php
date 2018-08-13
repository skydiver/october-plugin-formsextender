<?php

namespace Martin\FormsExtender;

use App;

class Plugin extends \System\Classes\PluginBase {

    public function pluginDetails() {
        return [
            'name'        => 'Magic Forms Extender',
            'description' => 'Extend Magic Forms plugin.',
            'author'      => 'Martín M.',
            'icon'        => 'icon-puzzle-piece',
            'homepage'    => 'https://github.com/skydiver'
        ];
    }

    public function boot() {
        \Event::listen('martin.forms.beforeSaveRecord', function (&$formdata, $component) {

        });
    }

}