<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs;

/**
 * Error body returned by DeepL's edge infrastructure for failures that occur before a request reaches the API itself. The message is nested under `error`, unlike the application-level `ErrorResponse`. Clients that parse error bodies should handle both shapes.
 *
 */
final class InfrastructureErrorResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'error',
];

    public \DeepLSDK\DTOs\InfrastructureErrorResponse\ErrorDTO $error;

}
