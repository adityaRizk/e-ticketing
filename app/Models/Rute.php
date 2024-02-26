<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'rute';

    /**
     * Get the maskapai associated with the Rute
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function maskapai()
    {
        return $this->hasOne(Maskapai::class, 'id');
    }

    /**
     * Get the kota associated with the Rute
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kota()
    {
        return $this->hasOne(Kota::class, 'id');
    }
}
