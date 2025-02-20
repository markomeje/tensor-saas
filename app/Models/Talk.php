<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $length
 * @property string $type
 * @property string $abstract
 * @property string $organizer_notes
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $author
 * @property-read \App\Models\TFactory|null $use_factory
 * @method static \Database\Factories\TalkFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereAbstract($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereOrganizerNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Talk whereUserId($value)
 * @mixin \Eloquent
 */
class Talk extends Model
{
    /** @use HasFactory<\Database\Factories\TalkFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
