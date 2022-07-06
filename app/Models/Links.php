<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    protected $fillable = ['short_link', 'full_link', 'counter'];

    public function getShortLink()
    {
        return config('app.url').'/'.$this->short_link;
    }
}
