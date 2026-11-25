<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DeepLSDK\Configuration;
use DeepLSDK\DeepLAPIDocumentationSDK;
use DeepLSDK\PostParams\V2\Translate as TranslateParams;
use DeepLSDK\Requests\V2\Translate\Post as TranslateRequest;
use DeepLSDK\V2\Translate;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration(); // Free plan: $configuration->baseUrl = 'https://api-free.deepl.com';
$configuration->securityCredentials = new SecurityCredentials(['auth_header' => 'DeepL-Auth-Key ' . (getenv('DEEPL_AUTH_KEY') ?: '')]);
DeepLAPIDocumentationSDK::configure($configuration);

$translation = Translate::post(new TranslateParams((object) [
    'body' => new TranslateRequest((object) ['text' => ['Hello, world'], 'target_lang' => 'ES']),
]));

echo json_encode($translation), "\n";
