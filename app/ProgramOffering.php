<?php

namespace App;

class ProgramOffering extends Model
{
    
    public function hei()
    {
        return $this->belongsTo(Hei::class);
    }

}
