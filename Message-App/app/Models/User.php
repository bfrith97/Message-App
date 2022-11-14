<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'chat_colour'
    ];

    public $timestamps = false;

    public function userBlock()
    {
        return $this->hasMany(UserBlocks::class, 'user_id', 'id');
    }

    public function userBlocked()
    {
        return $this->belongsTo(UserBlocks::class, 'target_user_id', 'id');
    }

    public function conversations() 
    {
        return $this->belongsToMany(Conversation::class, 'conversation_participants', 'user_id', 'conversation_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'user_id', 'id');
    }
}
