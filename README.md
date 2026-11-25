# DeepL SDK

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)

Unofficial PHP SDK for the DeepL API (text and document translation, glossaries, usage, languages and writing improvement).
The code in `src/` is **generated** from `contract/` by [sdk-generator](https://github.com/dmorenof/sdk-generator) and runs on
[sdk-runtime](https://github.com/dmorenof/sdk-runtime): typed models and collections, one exception type per kind of failure. Nothing in `src/` is edited by hand.

## Installation

PHP 8.4 or later.

```bash
composer require dmorenof/deepl-sdk
```

## Setup

```php
use DeepLSDK\Configuration;
use DeepLSDK\DeepLAPIDocumentationSDK;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['auth_header' => 'DeepL-Auth-Key ' . $authKey]);
DeepLAPIDocumentationSDK::configure($configuration);
```

`Configuration` also takes `httpClient` (any PSR-18 client), `middleware`, `retryPolicy` and `redirectPolicy`. The operations are the classes and resources under `src/`; the contract they follow is in `contract/`.

## License

MIT (see [LICENSE.md](LICENSE.md)). See [NOTICE.md](NOTICE.md) for the status of the API itself.
