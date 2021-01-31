<?php

namespace App\Models;
use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasFactory;
      protected $fillable = [
        'segment',
       
        
    ];
    
    public function autos()
    {
        return $this->belongsTo(Auto::class,'segment_id','id');
    }
     public function __toString()
    {
        return $this->segment;
    }
}
