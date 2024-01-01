<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LdtaxHoldingUsableInformationTax extends Model
{
    use HasFactory;

    protected $table = 'ldtax_holding_usable_information_tax';

    protected $fillable = [
        'ldtax_holding_id',
        'office_id',
        'division_id',
        'district_id',
        'upazila_id',
        'mouja_id',
        'ldtax_holding_usable_information_id',
        'ldtax_holding_owner_id',
        'ldtax_holding_land_schedule_id',
        'dag_no',
        'yearly_demand',
        'due_demand',
        'second_year_due_demand',
        'third_year_due_demand',
        'before_third_year_due_demand',
        'due_interest',
        'second_year_due_interest',
        'third_year_due_interest',
        'before_third_year_due_interest',
        'comments',
        'created_by',
        'status',
        'created',
        'modified',
        'is_update',
    ];
}
