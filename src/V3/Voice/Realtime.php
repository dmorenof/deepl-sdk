<?php

declare(strict_types=1);

namespace DeepLSDK\V3\Voice;

final class Realtime extends \DeepLSDK\DeepLAPIDocumentationSDK
{
    /** GET /v3/voice/realtime [operationId: requestReconnection] */
    /**
     * Request Reconnection
     *
     * Exchange a session token for a fresh WebSocket URL and token so a client can rejoin a
     * voice session after the connection drops. Session options are carried over from the
     * original session.
     */
    public static function get(\DeepLSDK\GetParams\V3\Voice\Realtime $params): \DeepLSDK\DTOs\Voice\Streaming\Response
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Voice\Realtime::class)->get($params);
    }

    /** POST /v3/voice/realtime [operationId: getVoiceStreamingUrl] */
    /**
     * Get Streaming URL
     *
     * Create a real-time voice session and return the WebSocket URL and ephemeral token used
     * to stream audio. Session options such as languages, message format, and media types are
     * fixed at creation time. Invalid options are rejected with HTTP 400 before a session is
     * created.
     */
    public static function post(\DeepLSDK\PostParams\V3\Voice\Realtime $params): \DeepLSDK\DTOs\Voice\Streaming\Response
    {
        return self::client()->resource(\DeepLSDK\Resources\V3\Voice\Realtime::class)->post($params);
    }
}
