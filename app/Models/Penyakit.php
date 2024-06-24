<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Penyakit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeSearch($query, $keyword)
    {
        $query->when($keyword ?? false, function ($query, $search) {
            return $query->where('kode_penyakit', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%');
        });
    }

    public function diagnosa(): HasOne
    {
        return $this->hasOne(Diagnosa::class, 'penyakit_id', 'id');
    }

    public function rules(): HasMany
    {
        return $this->hasMany(Rule::class, 'penyakit_id', 'id');
    }
}
