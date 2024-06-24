<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gejala extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeSearch($query, $keyword)
    {
        $query->when($keyword ?? false, function ($query, $search) {
            return $query->where('kode_gejala', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%');
        });
    }

    public function rules(): HasOne
    {
        return $this->hasOne(Rule::class, 'gejala_id', 'id');
    }
}
