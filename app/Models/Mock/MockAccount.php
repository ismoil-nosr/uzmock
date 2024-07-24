<?php

namespace App\Models\Mock;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $phone
 * @property string $name
 * @property string|null $surname
 * @property string|null $patronymic
 * @property Carbon|null $date_birth
 * @property string|null $address
 * @property string|null $email
 * @property string $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read User $user
 */
class MockAccount extends Model
{
    use HasFactory;

    protected $casts = [
        'date_birth' => Carbon::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
