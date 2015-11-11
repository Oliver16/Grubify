<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    public function fullList(){
        $ratings = ratings::all();
        
        return view('app.list', ['ratings' => $ratings]);
    }
}
