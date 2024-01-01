<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationFormatList extends Model
{
    use HasFactory;

    protected $table = 'notification_format_list';

    protected $fillable = [
        'title',
        'body',
        'updated_by',
        'created_by',
        'type',
        'is_editable',
    ];
}
