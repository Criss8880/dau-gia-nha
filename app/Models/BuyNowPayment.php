<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyNowPayment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function auction()
    {
      return $this->belongsTo(Auction::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }


}
