<?php

declare(strict_types=1);

namespace Thesis\Pgmq\Internal;

/**
 * @internal
 */
final readonly class NotifyInsertState
{
    public function __construct(
        public bool $triggerValid,
        public ?int $throttleIntervalMs,
    ) {}
}
