<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    const DELETED_AT = 'deletedAt';

    public $incrementing = false;

    public $timestamps = false;

    protected $guarded = ['id'];

    /**
     * Boot config
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        self::creating(function (self $model) {
            $model->id        = (string) Str::uuid();
            $model->createdAt = now()->toDateTimeString();
            $model->updatedAt = now()->toDateTimeString();
        });

        self::created(function (self $model) {
            Mail::to('test@test.com')->send(new EventCreated($model));
        });
    }
}
