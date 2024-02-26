<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maskapai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'maskapai';

    /**
     * Get all of the Rute for the Maskapai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Rute()
    {
        return $this->hasMany(Rute::class, 'id');
    }
}
