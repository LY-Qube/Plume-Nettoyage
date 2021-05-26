<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Class Contact
 * @property string name
 * @property string email
 * @property string phone
 * @package App\Models
 */

class Contact extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'phone'];

}
