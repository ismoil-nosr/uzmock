<?php

namespace App\Models\Click;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $domain
 * @property int $service_id
 * @property int $merchant_id
 * @property int $merchant_user_id
 * @property string $secret_key
 * @property string|null $prepare_url
 * @property string|null $complete_url
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read User $user
 */
class ClickMerchant extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
