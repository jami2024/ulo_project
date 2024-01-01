<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationRecipientList extends Model
{
    use HasFactory;

    protected $table = 'notification_recipient_list';

    protected $fillable = [
        'notification_id',
        'recipient_id',
        'updated_by',
        'created_by',
    ];
}
