<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ServeCommand as OriginalServeCommand;

class ServeCommand extends OriginalServeCommand
{
    protected function getOptions()
    {
        $options = parent::getOptions();

        $options[0][4] = env('SERVER_HOST', '0.0.0.0');

        return $options;
    }
}
