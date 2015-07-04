<?php

namespace Crud;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description'
    ];


}
