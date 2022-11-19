<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'surname',
        'email',
        'password',
        'phone',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function areas()
    {
        return $this->belongsToMany(Area::class,'area_users');
    }

    public function add_area($id)
    {
        $this->areas()->attach($id);
        return $this->areas()->get();
    }

    public function delete_area($id)
    {
        $this->areas()->detach($id);
        return $this->areas()->get();
    }

    public function add_areas($id_areas)
    {
        foreach ($id_areas as $id) {
            $this->areas()->attach($id);
        }
        return $this->areas()->get();
    }

    public function delete_areas($id_areas)
    {
        foreach ($id_areas as $id) {
            $this->areas()->detach($id);
        }
        return $this->areas()->get();
    }
}
