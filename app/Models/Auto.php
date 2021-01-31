<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    
      protected $fillable = [
        
        'marka',
        'model',
         'segment_id' 
        
    ];
    public function segments()
    {
        return $this->hasMany(Segment::class);
    }
    public function getSegment()
    {
        segment_id==new Aray('App\Models\Segment->id');
        return $this->segment_id;
    }
    public function arrayTo() {



    $user = Auto::with('id')->get();

     return $user->toArray();
    }
}
