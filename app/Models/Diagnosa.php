<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Diagnosa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function scopeSearch($query, $keyword)
    {
        $query->when($keyword ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->whereHas('penyakit', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                });
            })->orWhere(function ($query) use ($search) {
                $query->whereHas('user', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                });
            });
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function penyakit(): BelongsTo
    {
        return $this->belongsTo(Penyakit::class, 'penyakit_id', 'id');
    }
}
