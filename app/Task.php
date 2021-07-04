<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'id', 'name', 'user_id', 'created_at', 'updated_at'
    ];

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Task' => 'App\Policies\TaskPolicy',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
