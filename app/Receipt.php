<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    public $table = 'receipts';
    public $timestamps = false;
    public $guarded = [];
}
