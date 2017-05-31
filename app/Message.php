<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Message
 *
 * @property int $id
 * @property int $profile_id
 * @property int $channel_id
 * @property string $content
 * @property string $created_ip
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Channel $channel
 * @property-read \App\Profile $profile
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereChannelId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereCreatedIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereProfileId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    protected $fillable = [
        'profile_id',
        'channel_id',
        'content',
        'created_ip',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
