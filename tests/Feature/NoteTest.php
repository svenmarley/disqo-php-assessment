<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;


class NoteTest extends TestCase
{
    private $sFunc = 'TestCase';

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_note_attributes()
    {
        $debug = false;
        $sFunc = $this->sFunc . '.test_note_attributes()-->';
        $headers = [
            'Accept' => 'application/vnd.api+json, application/json',
            'Content-Type' => '',

            // apparently, doesn't need these to work
                //'Accept-Encoding' => 'gzip, deflate, br, *',
                //'Accept-Charset' => '*',
                //'Accept-Language' => '*',
        ];

        $response = $this->json('get', '/api/v1/notes', [], $headers);

        if ($debug) {
            Log::info($sFunc . 'response');
            $j = $response->json();
            Log::info($sFunc . 'j=' . print_r($j, true));
        }

        $response->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'attributes' => [
                            'Title',
                            'Note'
                        ]
                    ]
                ]
            ]);
    }
}
