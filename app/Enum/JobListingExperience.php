<?php

namespace App\Enum;

enum JobListingExperience: string
{
    case ENTRY = 'entry';
    case INTERMEDIATE = 'intermediate';
    case SENIOR = 'senior';

    public static function values(): array
    {
        return array_map(fn (self $case) => $case->value, self::cases());
    }

    public static function labels(): array
    {
        return [
            self::ENTRY->value => 'Entry Level',
            self::INTERMEDIATE->value => 'Intermediate Level',
            self::SENIOR->value => 'Senior Level',
        ];
    }
}
