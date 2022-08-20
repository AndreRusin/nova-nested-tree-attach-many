<?php

namespace AndrewRus\NovaNestedTreeAttachMany\Domain\Relation;

use Illuminate\Support\Collection;
use AndrewRus\NovaNestedTreeAttachMany\Domain\Relation\Handlers\RelationHandler;

interface RelationHandlerFactory
{
    public function make($relation): RelationHandler;

    public function register( RelationHandler $handler ): void;

    public function unregister( RelationHandler $handler ): void;

    public function registeredHandlers(): Collection;

    public function unregisterAll(): void;
}
