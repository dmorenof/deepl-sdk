<?php

declare(strict_types=1);

namespace DeepLSDK\DTOs\Voice\Streaming;

final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'streaming_url',
    'token',
];

    /**
     * Internal use only. A unique identifier for the requested stream.
     *
     * Example: "4f911080-cfe2-41d4-8269-0e6ec15a0354"
     */
    public string $session_id;
    /**
     * The WebSocket URL to use for establishing [the stream connection](/api-reference/voice/websocket-streaming).
     *
     * Example: "wss://api.deepl.com/v3/voice/realtime/connect"
     */
    public string $streaming_url;
    /**
     * A unique ephemeral token for authentication with the streaming endpoint. Pass this as a query parameter when connecting to [the streaming URL](/api-reference/voice/websocket-streaming). This token is ephemeral and valid for a short time and one-time use only.
     *
     * Example: "VGhpcyBpcyBhIGZha2UgdG9rZW4K"
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'session_id' => is_string($value) ? $this->session_id = $value : parent::assignMember($name, $value),
            'streaming_url' => is_string($value) ? $this->streaming_url = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
