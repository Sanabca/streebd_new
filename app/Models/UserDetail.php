<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use Cviebrock\EloquentSluggable\Sluggable;

class UserDetail extends Model
{

    use HasFactory;
     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    // protected $appends = [
    //     'user_count'
    // ];
    
    // public function user()
    // {
    //     return $this->hasMany(UserDetail::class,'user_id');
    // }

    // public function getUserCountAttribute()
    // {
    //    return $this->user()->getActive()->count();
    // }
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'mobile_number',
        'email',
        'username',
        'password',
        'status',
    ];
    // protected $guarded = [];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
    public function scopeGetActive($q)
    {
        return $q->where('status','active');
    }

}