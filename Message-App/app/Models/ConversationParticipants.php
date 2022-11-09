<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ConversationParticipants extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'conversation_participants';

    protected $fillable = [
        'user_id',
        'conversation_id'
    ];

    public $timestamps = false;

    public function message(): HasMany
    {
        return $this->hasMany(Message::class, 'id', 'conversation_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }
}
