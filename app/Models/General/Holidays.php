<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\General\Holidays
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $type
 * @property float $rate
 * @property string $start_day
 * @property string $end_day
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\General\Holidays whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\General\Holidays whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\General\Holidays whereRate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\General\Holidays whereStartDay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\General\Holidays whereEndDay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\General\Holidays whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\General\Holidays whereUpdatedAt($value)
 */
class Holidays extends Model
{
    //
}