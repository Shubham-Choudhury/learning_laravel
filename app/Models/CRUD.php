<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;

    protected $table = 'crud';
    protected $primaryKey = 'id';

    // for non incrementing primary key
    //public $incrementing = false;

    // for non integer primary key
    //protected $keyType = 'string';

    public $timestamps = true; // ---> to use created_at and updated_at

    // change default column names
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    

}
