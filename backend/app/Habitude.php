<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Habitude
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Habitude extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'user_id'];
}
