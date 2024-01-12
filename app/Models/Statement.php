<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Statement extends Model
{
    use HasFactory;



    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
//    public function statement(){
//            return $this->hasMany(Statement::class, 'user_id', 'id');
//    }




    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $table = 'statements';
    protected $fillable = ['user_id', 'number_auto', 'description_trespassing', 'status'];

    public const STATUSES = [
        0 => 'Новая',
        1 => 'Подтверждено',
        2 => 'Отклонено'
    ];
    protected $hidden = [
    ];
}
