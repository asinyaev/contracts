<?php

declare(strict_types=1);

namespace Alex\Contracts\Message\Command;

interface CommandBus
{
    public function dispatch(Command $command): void;
}