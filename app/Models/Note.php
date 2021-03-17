<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Note extends Model
{
    protected string $sFunc = 'Note';
    use HasFactory;

    protected $fillable = [
        'title',
        'note',
        //'user_id',
    ];

    public function __construct(array $attributes = [])
    {
        $sFunc = $this->sFunc . '.__construct()-->';

        Log::channel( 'debug' )->info( $sFunc . ' before the call to Note::find()' );
        $stuff = [ 'blah' ];
        //$stuff = User::find(3); // this works fine.

        Log::channel('debug')->info($sFunc . 'stuff', [$stuff]);

        parent::__construct($attributes);
    }

    public function users() {

        return $this->belongsTo( User::class );
    }

}
