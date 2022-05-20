<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camiseta extends Model
{
    use HasFactory;

    protected $fillable=[
        'marca',
        'tecido',
        'cor',
        'tamanho',
        'pagamento',
        'user_id'
    ];
    
    public function donoDaCamisa(){
        return $this->belongsTo(User::class,'user_id');
    }
}
