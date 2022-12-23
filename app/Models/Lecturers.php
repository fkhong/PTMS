<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Lecturers extends Model
{
    use HasFactory;
    protected $table = 'lecturers';
    protected $primarykey = 'id';
    protected $fillable = ['staffId','name','email','contact','expertise','studentSupervised'];
}
