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
        'password'
    ];

    public $timestamps = false;

    // public function conversationMain(): HasMany
    // {
    //     return $this->hasMany(Conversation::class, 'id', 'user1_id');
    // }

    // public function conversationSecondary(): HasMany
    // {
    //     return $this->hasMany(Conversation::class, 'id', 'user2_id');
    // }

    public function conversations() 
    {
        return $this->belongsToMany(Conversation::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
