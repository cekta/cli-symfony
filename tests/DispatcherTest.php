<?php

declare(strict_types=1);

namespace Cekta\CliSymfony\Test;

use Cekta\Framework\Dispatcher;
use Cekta\Framework\Dispatcher\CLI;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase
{
    public function test(): void
    {
        Assert::assertInstanceOf(Dispatcher::class, new CLI());
    }
}
