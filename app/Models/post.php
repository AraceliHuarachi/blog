<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    
    protected $guarded=['is_active',];
    
protected function casts(): array
{
    return[
        'published_at' => 'datetime',
        'is_active'=> 'boolean',  
    ];
}

protected function tittle(): Attribute{

    return Attribute::make(
        set:function($value){
            return strtolower($value);
        }

    );
}
public function getRouteKeyName()
{
    return 'slug';
}
}
