<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'username',
        'karma_score',
        'position'
    ];
        /**
     * Get the phone associated with the user.
     */
    public function image()
    {
        // return $this->hasOne(Image::class);
        return $this->belongsTo(Image::class);
    }
    // public function getPositionAttribute($value)
    // {
    //     return $value;
    // }
    public $timestamps = false;
}
