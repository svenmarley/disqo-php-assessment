<?php

namespace App\JsonApi\Notes;

use Neomerx\JsonApi\Schema\SchemaProvider;
use App\Models\Note;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'notes';

    /**
     * @param \App\Note $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Note $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'Title' => $resource->Title,
            'Note' => $resource->Note,
            'createdAt' => $resource->created_at,
            'updatedAt' => $resource->updated_at,
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [
            'notes' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ]
        ];
    }

}
