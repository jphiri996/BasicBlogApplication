<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use MongoDB\Laravel\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title',
        'content','user_id'];

    protected static function booted()
    {
        static::creating(function(Post $post) {
            if (auth()->check()) {
                $post->user_id = Auth::id();
            } 
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}