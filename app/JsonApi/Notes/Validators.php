<?php

namespace App\JsonApi\Notes;

use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;
use Illuminate\Support\Facades\Log;

class Validators extends AbstractValidators
{
    protected string $sFunc = 'Notes.Validators';

    /**
     * The include paths a client is allowed to request.
     *
     * @var string[]|null
     *      the allowed paths, an empty array for none allowed, or null to allow all paths.
     */
    protected $allowedIncludePaths = [];

    /**
     * The sort field names a client is allowed send.
     *
     * @var string[]|null
     *      the allowed fields, an empty array for none allowed, or null to allow all fields.
     */
    protected $allowedSortParameters = [];

    /**
     * The filters a client is allowed send.
     *
     * @var string[]|null
     *      the allowed filters, an empty array for none allowed, or null to allow all.
     */
    protected $allowedFilteringParameters = [];

    protected $messages = [
        "title.required" => 'Your post must have a title.'
    ];


    /**
     * Get resource validation rules.
     *
     * @param mixed|null $record
     *      the record being updated, or null if creating a resource.
     * @param array $data
     *      the data being validated
     * @return array
     */
    protected function rules($record, array $data): array
    {
        $sFunc = $this->sFunc . '.rules()-->';
        Log::channel('debug')->info($sFunc . 'record, data', [$record, $data]);

        return [
            'title' => 'required|string|min:1|max:50',
            'note' => 'required|string|min:1|max:1000',
            //'user_id' => 'required|integer',
        ];
    }

    /**
     * Get query parameter validation rules.
     *
     * @return array
     */
    protected function queryRules(): array
    {
        $sFunc = $this->sFunc . '.queryRules()-->';

        Log::channel('debug')->debug( $sFunc . 'inside' );

        return [
            //
        ];
    }

}
