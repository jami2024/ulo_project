<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipientList extends Model
{
    use HasFactory;

    protected $table = 'recipient_list';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'username',
        'holding_no',
        'due_amount',
        'due_year',
        'updated_by',
        'created_by',
    ];
}
