<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class UserBlocks extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'user_blocks';

    protected $fillable = [
        'user_id',
        'target_user_id'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id',  'id');
    }

    public function userBlocked()
    {
        return $this->hasOne(User::class, 'id', 'target_user_id');
    }
}
