<?php

declare(strict_types=1);

namespace Sylius\RefundPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SyliusRefundPlugin extends Bundle
{
    use SyliusPluginTrait;
}
