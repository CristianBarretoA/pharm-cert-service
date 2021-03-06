<?php

namespace App;

use App\Traits\UuidsTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** @mixin Builder */
class Certificate extends Model
{

    use HasFactory, UuidsTrait;

    /**
     * @return HasMany
     */
    public function variables(): HasMany
    {
        return $this->hasMany(Variables::class);
    }
}
