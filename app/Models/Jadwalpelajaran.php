<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwalpelajaran extends Model
{
    protected $table = 'jadwal_pelajaran';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['kelas', 'file', 'id_keahlian', 'id_guru'];
    protected $attributes = ['id_keahlian'];
   /* protected $attributes = ['id_guru']; */
    protected $with = ['keahlian'];
    /*protected $with = ['guru']; */

    public function kegiatan(): BelongsTo
    {
        return $this->belongsTo(Keahlian::class, 'id_keahlian');
        /*return $this->belongsTo(Guru::class, 'id_guru'); */
    }
}
