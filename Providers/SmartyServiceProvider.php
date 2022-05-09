<?php

declare(strict_types=1);

namespace Modules\Smarty\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Services\BladeService;

class SmartyServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'smarty';

    public function bootCallback(): void
    {
        BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Smarty');
    }

    public function registerCallback(): void
    {
    }
}
