<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User368 extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users368';
    protected $primaryKey = 'id_user368';
    public $timestamps = false;

    protected $fillable = [
        'nome_user368',
        'senha_user368',
        'nivel_user368'
    ];

    public function getAuthIdentifierName()
    {
        return 'nome_user368';   
    }

    public function getAuthPassword()
    {
        return $this->senha_user368;
    }
}
