<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipientGroupList extends Model
{
    use HasFactory;

    protected $table = 'recipient_group_list';

    protected $fillable = [
        'group_id',
        'recipient_id',
        'updated_by',
        'created_by',
    ];
}
