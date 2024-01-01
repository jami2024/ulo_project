<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoujaList extends Model
{
    use HasFactory;

    protected $connection = 'mysql_land_rsk';

    protected $table = 'dglr_rs_mouja_details';

    protected $fillable = [
        'dglr_code',
        'division_id',
        'district_id',
        'upazila_id',
        'upazila_office_id',
        'office_id',
        'name_bd',
        'jl_no',
        'upazila_lisa_id',
        'status',
    ];
}
