<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contest';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['status','end_at', 'item_id', 'user_win_id', 'ticket_price','ticket_id_win','end_ticket'];

    public $timestamps = false;

}
