<?php

namespace App\JsonApi\Notes;

use CloudCreativity\LaravelJsonApi\Eloquent\AbstractAdapter;
use CloudCreativity\LaravelJsonApi\Pagination\StandardStrategy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class Adapter extends AbstractAdapter
{
    protected string $sFunc = 'Notes.Adapter';

    /**
     * Mapping of JSON API attribute field names to model keys.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Mapping of JSON API filter names to model scopes.
     *
     * @var array
     */
    protected $filterScopes = [];

    /**
     * Adapter constructor.
     *
     * @param StandardStrategy $paging
     */
    public function __construct(StandardStrategy $paging)
    {
        parent::__construct(new \App\Models\Note(), $paging);
    }

    /**
     * @param Builder $query
     * @param Collection $filters
     * @return void
     */
    protected function filter($query, Collection $filters)
    {
        $this->filterWithScopes($query, $filters);
    }

    protected function xdeserializeUserIdField( $value ) {
        $sFunc = $this->sFunc . '.deserializeUserIdField()-->';

        Log::channel('debug')->debug( $sFunc . 'inside  value',[$value]);
        return( $value * 1 );
    }


    public function user(){
        return $this->hasOne();
    }
}
