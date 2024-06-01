<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHomeModel extends Model
{
    use HasFactory;
    protected $table = "transactions";
    protected $primary_key = "id";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
