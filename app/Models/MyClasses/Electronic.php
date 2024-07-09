<?php

namespace App\Models\MyClasses;

use App\Models\MyClasses\Laptop;
use App\Models\MyClasses\Desktop;
use Illuminate\Database\Eloquent\Model;
use App\Models\MyClasses\ElectronicBuilder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Electronic extends Model
{
    use HasFactory;

    protected $table = 'm_electronic';

    protected $guarded = [];

    protected $primaryKey = 'id';

    /**
     * Get all of the comments for the Electronic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function laptop(): HasMany
    {
        return $this->hasMany(Laptop::class, 'e_id', 'id');
    }

    /**
     * Get all of the comments for the Electronic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desktop(): HasMany
    {
        return $this->hasMany(Desktop::class, 'e_id', 'id');
    }
}
