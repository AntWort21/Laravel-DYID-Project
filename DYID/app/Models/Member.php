<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    //which one is the foreign key?
    protected $attribute = [
        'memberName',
        'genderId',
        'memberAddress',
        'memberEmail',
        'memberPass',
        'roleId'
    ];

    // $table->increments('memberId');
    //         $table->string('memberName');
    //         $table->integer('genderId');
    //         $table->string('memberAddress');
    //         $table->string('memberEmail');
    //         $table->string('memberPass');
    //         $table->integer('roleId');
    //     });
}
