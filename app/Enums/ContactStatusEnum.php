<?php

namespace App\Enums;

enum ContactStatusEnum: string
{
    case NEW = 'new';
    case CLOSED = 'closed';
    case REJECTED = 'rejected';

    public function toString(): ?string
    {
        return match ($this) {
            self::NEW => 'New',
            self::CLOSED => 'Closed',
            self::REJECTED => 'Rejected',
        };
    }
    public function getColor(): ?string
    {
        return match ($this) {
            self::NEW => 'secondary',
            self::CLOSED => 'success',
            self::REJECTED => 'error',
        };
    }
}
