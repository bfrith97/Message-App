<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'messages';

    protected $fillable = [
        'user_id',
        'content'
    ];

    public $timestamps = false;
}
