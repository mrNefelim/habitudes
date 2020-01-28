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
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Habitude onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habitude whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Habitude withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Habitude withoutTrashed()
 */
class Habitude extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'user_id'];

    public function todos(){
        return $this->hasMany('App\Todo');
    }
}
