<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Profile
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property string $created_ip
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Message[] $messages
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Query\Builder|\App\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Profile whereCreatedIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Profile whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Profile whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Profile whereUserId($value)
 * @mixin \Eloquent
 */
class Profile extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'created_ip',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
