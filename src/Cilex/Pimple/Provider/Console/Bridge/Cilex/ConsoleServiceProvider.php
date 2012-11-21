<?php

/*
 * This file is part of the Cilex framework.
 *
 * (c) Mike van Riel <mike.vanriel@naenius.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cilex\Pimple\Provider\Console\Bridge\Cilex;

use Cilex\Pimple\Provider\Console\ConsoleServiceProvider as PimpleConsoleServiceProvider;
use Cilex\Application;
use Cilex\ServiceProviderInterface;

/**
 * Pimple Console Service Provider
 *
 * @author Beau Simensen <beau@dflydev.com>
 */
class ConsoleServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $pimpleServiceProvider = new PimpleConsoleServiceProvider;
        $pimpleServiceProvider->register($app);
    }
}
