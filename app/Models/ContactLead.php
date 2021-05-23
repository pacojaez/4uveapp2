<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLead extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $preferred = ['Email', 'Phone'];

    public function getPreferredAttribute(int $method)
    {
        return (\array_key_exists($method, $this->preferred)) ? $this->preferred[$method] : $this->preferred[0];
    }


}
