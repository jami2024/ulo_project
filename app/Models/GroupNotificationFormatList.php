<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupNotificationFormatList extends Model
{
    use HasFactory;

    protected $table = 'group_notification_format_list';

    protected $fillable = [
        'group_id',
        'notification_format_id',
        'updated_by',
        'created_by',
    ];
}
