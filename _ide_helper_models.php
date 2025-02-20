<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Conference extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $tenant_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
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
	class Talk extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TFactory|null $use_factory
 * @method static \Database\Factories\TenantFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tenant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Tenant extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int|null $tenant_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TFactory|null $use_factory
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Talk> $talks
 * @property-read int|null $talks_count
 * @property-read \App\Models\Tenant|null $tenant
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTenantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace Modules\Order\Models{
/**
 * 
 *
 * @property-read \Modules\Order\Models\TFactory|null $use_factory
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order query()
 */
	class Order extends \Eloquent {}
}

namespace Modules\Product\Models{
/**
 * 
 *
 * @property-read \Modules\Product\Models\TFactory|null $use_factory
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 */
	class Product extends \Eloquent {}
}

namespace Modules\Shipment\Models{
/**
 * 
 *
 * @property-read \Modules\Shipment\Models\TFactory|null $use_factory
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shipment query()
 */
	class Shipment extends \Eloquent {}
}

