<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','school'];
    
    /**
     * Attribute casting
     *
     */
    //protected $casts = [
    //    'school' => 'array',
   // ];
    

    //create scope filter for filtering
    public function scopeFilter($query, array $filters)
    {
        //check if not false
        if($filters['school'] ?? false){
            $query->where('school','like','%' . request('school') . '%');
        }
    }
}
