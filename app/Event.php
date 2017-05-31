<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Event
 *
 * @property int $id
 * @property int $profile_id
 * @property string $title
 * @property string $image
 * @property string $content
 * @property string $location
 * @property string $begin_time
 * @property string $end_time
 * @property int $thumbs_up
 * @property string $created_ip
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereBeginTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereCreatedIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereEndTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereProfileId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereThumbsUp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Event extends Model
{
    protected $fillable = [
        'profile_id',
        'title',
        'content',
        'image',
        'location',
        'begin_time',
        'end_time',
        'thumbs_up',
        'created_ip',
    ];
}
