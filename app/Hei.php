<?php

namespace App;

class Hei extends Model
{

    public function program_offerings()
    {
        return $this->hasMany(ProgramOffering::class);
    }
    
}
