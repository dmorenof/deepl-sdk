# DeepL SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/deepl-sdk.svg)](https://packagist.org/packages/dmorenof/deepl-sdk)

**DeepL text and document translation, glossaries and writing improvement as typed PHP.**

Translate text and documents, manage glossaries, read usage and languages, and use the writing assistant, all generated from the OpenAPI document DeepL publishes.

> Unofficial. Not affiliated with, endorsed by or supported by DeepL. See [NOTICE.md](NOTICE.md).

## Why this SDK

- 66 operations: translate, document, glossaries, languages, usage, admin and write.
- Free and Pro plans: switch with one setting.
- Typed requests catch a misspelled parameter before the network does.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/deepl-openapi.yaml` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 66 operations and 229 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/deepl-sdk
```

## Quick start

```php
<?php
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
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

66 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `glossaries` | 13 |
| `style_rules` | 10 |
| `spoken-terms` | 8 |
| `admin` | 7 |
| `translation_memories` | 7 |
| `style_profiles` | 5 |
| `document` | 3 |
| `languages` | 3 |
| `jobs` | 2 |
| `write` | 2 |
| `voice` | 2 |
| `quality-evaluations` | 1 |

…and 3 more areas; the full list is in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- DeepL publishes official libraries; this one is generated from the contract and is unofficial.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://developers.deepl.com/docs)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
