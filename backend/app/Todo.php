<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Todo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo query()
 * @mixin \Eloquent
 */
class Todo extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['habitude_id', 'user_id', 'date'];
}
