<?php

namespace App\Models;

use App\Constants\DocumentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

/**
 * @property string name
 * @property string last_name
 * @property DocumentType document_type
 * @property string document_number
 * @property string phone
 * @property string email
 * @property Collection payments
 */
class Customer extends Model
{
    use Notifiable, HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'document_type',
        'document_number',
        'phone',
        'email',
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
