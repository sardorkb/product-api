<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Product extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['title', 'quantity', 'price'];

    protected static $logAttributes = ['title', 'quantity', 'price'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnly(['title', 'quantity', 'price']);
    }

    protected static function booted()
    {
        static::created(function ($product) {
            activity()
                ->performedOn($product)
                ->log('Product created');
        });

        static::updated(function ($product) {
            activity()
                ->performedOn($product)
                ->log('Product updated');
        });

        static::deleted(function ($product) {
            activity()
                ->performedOn($product)
                ->log('Product deleted');
        });
    }
}
