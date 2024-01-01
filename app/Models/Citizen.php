<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $table = 'citizen';

    protected $fillable = [
        'username',
        'password',
        'name',
        'phone',
        'email',
        'father_name',
        'mother_name',
        'nid',
        'dob',
        'address',
        'present_address',
        'gender',
        'photo',
        'is_approved',
        'registered_by',
        'agent_id',
        'user_type_id',
        'created_at',
        'old_nid',
        'nid_info_update',
    ];
}
