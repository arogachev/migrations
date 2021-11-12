<?php

/**
 * This file is part of Cycle ORM package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cycle\Migrations\Exception\Operation;

use Cycle\Migrations\Exception\OperationException;
use Spiral\Migrations\Operation\Exception\Operation\IndexException as SpiralIndexException;

class IndexException extends OperationException
{
}
\class_alias(IndexException::class, SpiralIndexException::class, false);
