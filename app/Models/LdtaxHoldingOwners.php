<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LdtaxHoldingOwners extends Model
{
    use HasFactory;

    protected $table = 'ldtax_holding_owners';

    protected $fillable = [
        'citizen_id',
        'ldtax_holding_id',
        'office_id',
        'division_id',
        'district_id',
        'upazila_id',
        'mouja_id',
        'org_type',
        'org_name',
        'org_user_des',
        'org_user_numb',
        'name',
        'father_name',
        'address',
        'mobile_no',
        'email',
        'nid',
        'photo',
        'land_portion',
        'tax_clear_year',
        'created',
        'modified',
    ];
}
