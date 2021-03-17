<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;


class User extends Authenticatable
{
    protected string $sFunc = 'User';
    use HasFactory, Notifiable;

    public function __construct(array $attributes = [])
    {
        $sFunc = $this->sFunc . '.__construct()-->';

        Log::channel( 'debug' )->info( $sFunc . ' before the call to Note::find()' );
        $stuff = ['blah'];
        //$stuff = Note::find(3);     // this does not return.
        Log::channel('debug')->info($sFunc . 'stuff', [$stuff]);


        parent::__construct($attributes);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function notes() {
        return $this->hasMany( Note::class );
    }

}
