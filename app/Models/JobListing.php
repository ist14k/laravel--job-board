<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    /** @use HasFactory<\Database\Factories\JobListingFactory> */
    use HasFactory;

    public static array $EXPERIENCE_LEVELS = ['entry', 'intermediate', 'senior'];
    public static array $CATEGORIES = ['Engineering', 'Marketing', 'Design', 'Sales', 'Customer Support', 'Human Resources', 'Finance', 'Operations'];
}
