<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clicks() :hasMany
    {
        return $this->hasMany(Click::class);
    }

    public function user() :belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tags() :belongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

}
