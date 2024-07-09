<?php

namespace App\Models\MyClasses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\MyClasses\Electronic;

class Desktop extends Model
{
    use HasFactory;

    protected $table = 'm_desktop';

    protected $guarded = [];

    protected $primaryKey = 'serial';

    /**
     * Get the user that owns the Desktop
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function electronic(): BelongsTo
    {
        return $this->belongsTo(Electronic::class, 'e_id', 'id');
    }

    public function newEloquentBuilder($query)
    {
        return new ElectronicBuilder($query);
    }
}
