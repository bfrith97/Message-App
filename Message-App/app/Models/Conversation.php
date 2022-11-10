<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'conversations';

    protected $fillable = [
        'user1_id',
        'user2_id'
    ];

    public $timestamps = false;

    public function message(): HasMany
    {
        return $this->hasMany(Message::class, 'conversation_id', 'id');
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'conversation_participants', 'conversation_id', 'user_id');
    }
}
