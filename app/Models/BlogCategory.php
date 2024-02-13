<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use Cviebrock\EloquentSluggable\Sluggable;

class BlogCategory extends Model
{
    use HasFactory;
   /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'blog_count'
    ];
    
    public function blog()
    {
        return $this->hasMany(Blog::class,'blog_category_id');
    }

    public function getBlogCountAttribute()
    {
       return $this->blog()->getActive()->count();
    }
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_name',
        'category_description',
        'slug',
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
                'source' => 'category_name'
            ]
        ];
    }
    
    public function scopeGetActive($q)
    {
        return $q->where('status','active');
    }
   
}
