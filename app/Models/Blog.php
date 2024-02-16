<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Blog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function category()
    {
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }

    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = json_encode($value);
    }
   
    protected $guarded = [];
    
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'blog_category_id',
        'slug',
        'description',
        'image_alt_text',
        'tags',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
    ];
   
  
    public function scopeGetActive($q)
    {
        return $q->where('status','active');
    }
    public function scopeGetRecent($q)
    {
        return $q->getActive()->orderBy('id','desc')->latest();
    }
}
