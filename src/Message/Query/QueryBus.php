<?php

declare(strict_types=1);

namespace Alex\Contracts\Message\Query;

interface QueryBus
{
    public function handle(Query $query): mixed;
}