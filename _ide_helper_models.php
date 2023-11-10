<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Laundry
 *
 * @property int $id
 * @property int $user_id
 * @property string $pick_up
 * @property string $sent_to
 * @property array $services
 * @property string|null $note
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $shop
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\LaundryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry query()
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry wherePickUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry whereSentTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry whereServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laundry whereUserId($value)
 */
	class Laundry extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

