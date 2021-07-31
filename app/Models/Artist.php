<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use HasFactory;

    
        protected $table = "tb_artist";
        
        protected $primaryKey = 'artist_id';
        
        protected $fillable = ['artist_name'];

        public function album()
        
        {
            return $this->hasMany(album::class);
        }
}
