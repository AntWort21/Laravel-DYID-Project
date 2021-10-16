<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $table = "members";

    // protected $fillable = [
    //     'memberName',
    //     'genderId',
    //     'memberAddress',
    //     'memberEmail',
    //     'memberPass',
    //     'roleId'
    // ];

    // public function role(){
    //     return $this->belongsTo(Role::class);
    // }

    // public function gender(){
    //     return $this->belongsTo(Gender::class);
    // }

    // $table->increments('memberId');
    //         $table->string('memberName');
    //         $table->integer('genderId');
    //         $table->string('memberAddress');
    //         $table->string('memberEmail');
    //         $table->string('memberPass');
    //         $table->integer('roleId');
    //     });
}
