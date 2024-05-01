<?php

namespace JinxIT\AssetManagement\Commands;

use Illuminate\Console\Command;

class AssetManagementCommand extends Command
{
    public $signature = 'assetmanagement';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
