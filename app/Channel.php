<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Channel
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Message[] $messages
 * @method static \Illuminate\Database\Query\Builder|\App\Channel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Channel whereName($value)
 * @mixin \Eloquent
 */
class Channel extends Model
{
    protected $fillable = [
        'name',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
