<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupList extends Model
{
    use HasFactory;

    protected $table = 'group_list';

    protected $fillable = [
        'group_name',
        'type',
        'updated_by',
        'created_by',
    ];
}
