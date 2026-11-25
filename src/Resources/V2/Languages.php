<?php

declare(strict_types=1);

namespace DeepLSDK\Resources\V2;

final class Languages extends \DeepLSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v2/languages',
        'security' => [
            [
                'auth_header' => [],
            ],
        ],
        'errors' => [
            400 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            403 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            404 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            413 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            429 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            456 => '\\DeepLSDK\\DTOs\\ErrorResponse',
            500 => null,
            504 => null,
            529 => '\\DeepLSDK\\DTOs\\ErrorResponse',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            413 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            456 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Languages\\LanguagesStatus500Response',
                'schemaNullable' => false,
            ],
            504 => [
                'type' => '\\DeepLSDK\\Responses\\Errors\\V2\\Languages\\LanguagesStatus504Response',
                'schemaNullable' => false,
            ],
            529 => [
                'type' => '\\DeepLSDK\\DTOs\\ErrorResponse',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\DeepLSDK\\Collections\\V2\\Languages\\Get\\LanguagesCollection',
        'responseHeaders' => [
            200 => [
                'X-Trace-ID' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Retrieve Supported Languages
     *
     * **Deprecated.** Use `GET /v3/languages?resource=translate_text` (or the appropriate resource)
     * instead. See the [migration guide](https://developers.deepl.com/docs/languages/migrating-from-v2-languages)
     * for details.
     *
     * @deprecated
     */
    public function get(?\DeepLSDK\GetParams\V2\Languages $params = null): \DeepLSDK\Collections\V2\Languages\Get\LanguagesCollection
    {
        /** @var \DeepLSDK\Collections\V2\Languages\Get\LanguagesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
