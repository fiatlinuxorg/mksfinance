<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'background',
        'number',
        'expiration',
        'cvv'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getNumberAttribute($value)
    {
        return decrypt($value);
    }

    public function setNumberAttribute($value)
    {
        $this->attributes['number'] = encrypt($value);
    }

    public function getExpirationAttribute($value)
    {
        return decrypt($value);
    }

    public function setExpirationAttribute($value)
    {
        $this->attributes['expiration'] = encrypt($value);
    }

    public function getCvvAttribute($value)
    {
        return decrypt($value);
    }

    public function setCvvAttribute($value)
    {
        $this->attributes['cvv'] = encrypt($value);
    }

    public function getBackgroundAttribute($value)
    {
        return decrypt($value);
    }

    public function setBackgroundAttribute($value)
    {
        $this->attributes['background'] = encrypt($value);
    }

    public function getTitleAttribute($value)
    {
        return decrypt($value);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = encrypt($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return decrypt($value);
    }

    public function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = encrypt($value);
    }

    public function getUpdatedAtAttribute($value)
    {
        return decrypt($value);
    }

    public function setUpdatedAtAttribute($value)
    {
        $this->attributes['updated_at'] = encrypt($value);
    }

    public function getDeletedAtAttribute($value)
    {
        return decrypt($value);
    }

    public function setDeletedAtAttribute($value)
    {
        $this->attributes['deleted_at'] = encrypt($value);
    }
}
