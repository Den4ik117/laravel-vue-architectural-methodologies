<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuids
{
    protected static function bootHasUuids(): void
    {
        static::creating(function (Model $model) {
            $model->uuid = Str::orderedUuid()->toString();
        });
    }
}
