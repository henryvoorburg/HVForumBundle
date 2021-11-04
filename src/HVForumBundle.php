<?php

/*
 * This file is part of the HVForumBundle package.
 *
 * (c) 2021 Henry Voorburg
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HV\ForumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Henry Voorburg <git@henryvoorburg.nl>
 */
class HVForumBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
