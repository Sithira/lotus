<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\LeaveTypes
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\LeaveTypes whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\LeaveTypes whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\LeaveTypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Employee\LeaveTypes whereUpdatedAt($value)
 */
class LeaveTypes extends Model
{
    public $guarded = ['id'];
}