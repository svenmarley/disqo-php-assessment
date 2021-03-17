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
     * @param Note $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource): string
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param Note $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource): array
    {
        return [
            'title' => $resource->title,
            'note' => $resource->note,
            'user_id' => $resource->user_id,
            'createdAt' => $resource->created_at,
            'updatedAt' => $resource->updated_at,
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships): array
    {
        return [
            'users' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ]
        ];
    }

}
