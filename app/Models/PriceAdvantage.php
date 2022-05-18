<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class PriceAdvantage extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    public array $translatable = ["wording"];
}
