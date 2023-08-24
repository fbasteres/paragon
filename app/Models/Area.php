<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Area extends Model
{
    use HasFactory;

    protected $table = "areas";

    //relacion uno a muchos
    public function Usuario(): HasMany
    {
        return $this->hasMany(User::class, 'area_id', 'id');
    }
}
