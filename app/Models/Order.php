<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use Cviebrock\EloquentSluggable\Sluggable;

class Order extends Model
{
    use HasFactory;
     /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'order_count'
    ];
    
    public function order()
    {
        return $this->hasMany(Order::class,'order_id');
    }

    public function getOrderCountAttribute()
    {
       return $this->order()->getActive()->count();
    }
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'receiver_name',
        'mobile_number',
        'admin',
        'date',
        'bill_address',
        'note',
        'method',
        'amount',
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
                'source' => 'receiver_name'
            ]
        ];
    }
    
    public function scopeGetActive($q)
    {
        return $q->where('status','active');
    }
   
}
