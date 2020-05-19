<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'travel_packets_id', 'image'
    ];

    protected $hidden = [

    ];

    public function travel_packet(){
        return $this->belongsTo( TravelPacket::class, 'travel_packets_id', 'id' );
    }


}