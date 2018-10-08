<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cases';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','price', 'type', 'image', 'procent'];

    public $timestamps = false;
}
