<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $location
 * @property string $description
 * @property string $url
 * @property string $starts_at
 * @property string $ends_at
 * @property string $cfp_starts_at
 * @property string $cfp_ends_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TFactory|null $use_factory
 * @method static \Database\Factories\ConferenceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereCfpEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereCfpStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereStartsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Conference whereUrl($value)
 * @mixin \Eloquent
 */
class Conference extends Model
{
    use HasFactory;
}
