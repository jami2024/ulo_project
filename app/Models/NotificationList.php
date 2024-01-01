<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationList extends Model
{
    use HasFactory;

    protected $table = 'notification_list';

    protected $fillable = [
        'title',
        'body',
        'updated_by',
        'created_by',
        'type',
        'format_id',
    ];
}
