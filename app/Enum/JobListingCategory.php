<?php

namespace App\Enum;

enum JobListingCategory: string
{
    case ENGINEERING = 'engineering';
    case DESIGN = 'design';
    case MARKETING = 'marketing';
    case SALES = 'sales';
    case HR = 'hr';
    case FINANCE = 'finance';
    case CUSTOMER_SUPPORT = 'customer_support';
    case IT = 'it';
    case LEGAL = 'legal';
    case OPERATIONS = 'operations';
    case OTHER = 'other';

    public static function values(): array
    {
        return array_map(fn (self $case) => $case->value, self::cases());
    }

    public static function getLabel(string $value): string
    {
        foreach (self::cases() as $case) {
            if ($case->value === $value) {
                return ucfirst(str_replace('_', ' ', $case->value));
            }
        }
        return 'Unknown';
    }

    public static function toObj(): array
    {
        return array_combine(
            array_map(fn (self $case) => $case->value, self::cases()),
            array_map(fn (self $case) => ucfirst(str_replace('_', ' ', $case->value)), self::cases())
        );
    }
}
