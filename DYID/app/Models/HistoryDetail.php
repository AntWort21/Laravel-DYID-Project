<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryDetail extends Model
{
    use HasFactory;

    public function history(){
        return $this->belongsTo(History::class);
    }

    public function products(){
        return $this->belongsTo(products::class);
    }
}
