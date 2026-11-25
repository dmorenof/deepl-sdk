# DeepL SDK for PHP: operations

66 operations. Each is a static method of a facade class (`DeepLSDK\...`); configure the SDK once with `DeepLAPIDocumentationSDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Create a voice translation job | POST | `/v1/jobs/voice/translate` | `V1\Jobs\Voice\Translate::post()` |
| Get voice translation job status | GET | `/v1/jobs/voice/translate/{job_id}` | `V1\Jobs\Voice\Translate::getByJobId()` |
| Poll for the evaluation result | GET | `/v1/quality-evaluations/{job_id}` | `V1\QualityEvaluations::getByJobId()` |
| Get usage statistics as an admin | GET | `/v2/admin/analytics` | `V2\Admin\Analytics::get()` |
| Get custom tag usage statistics as an admin | GET | `/v2/admin/analytics/custom-tags` | `V2\Admin\Analytics\CustomTags::get()` |
| Get all developer keys as an admin | GET | `/v2/admin/developer-keys` | `V2\Admin\DeveloperKeys::get()` |
| Create a developer key as an admin | POST | `/v2/admin/developer-keys` | `V2\Admin\DeveloperKeys::post()` |
| Deactivate a developer key as an admin | PUT | `/v2/admin/developer-keys/deactivate` | `V2\Admin\DeveloperKeys\Deactivate::put()` |
| Rename a developer key as an admin | PUT | `/v2/admin/developer-keys/label` | `V2\Admin\DeveloperKeys\Label::put()` |
| Set developer key usage limits as an admin | PUT | `/v2/admin/developer-keys/limits` | `V2\Admin\DeveloperKeys\Limits::put()` |
| Upload and Translate a Document | POST | `/v2/document` | `V2\Document::post()` |
| Check Document Status | POST | `/v2/document/{document_id}` | `V2\Document::postByDocumentId()` |
| Download Translated Document | POST | `/v2/document/{document_id}/result` | `V2\Document\ByDocumentId\Result::post()` |
| List all Glossaries | GET | `/v2/glossaries` | `V2\Glossaries::get()` |
| Create a Glossary | POST | `/v2/glossaries` | `V2\Glossaries::post()` |
| Delete a Glossary | DELETE | `/v2/glossaries/{glossary_id}` | `V2\Glossaries::deleteByGlossaryId()` |
| Retrieve Glossary Details | GET | `/v2/glossaries/{glossary_id}` | `V2\Glossaries::getByGlossaryId()` |
| Retrieve Glossary Entries | GET | `/v2/glossaries/{glossary_id}/entries` | `V2\Glossaries\ByGlossaryId\Entries::get()` |
| List Language Pairs Supported by Glossaries | GET | `/v2/glossary-language-pairs` | `V2\GlossaryLanguagePairs::get()` |
| Retrieve Supported Languages | GET | `/v2/languages` | `V2\Languages::get()` |
| Request Translation | POST | `/v2/translate` | `V2\Translate::post()` |
| Check Usage and Limits | GET | `/v2/usage` | `V2\Usage::get()` |
| Correct text | POST | `/v2/write/correct` | `V2\Write\Correct::post()` |
| Improve text | POST | `/v2/write/rephrase` | `V2\Write\Rephrase::post()` |
| List all Glossaries | GET | `/v3/glossaries` | `V3\Glossaries::get()` |
| Create a Glossary | POST | `/v3/glossaries` | `V3\Glossaries::post()` |
| Delete a Glossary | DELETE | `/v3/glossaries/{glossary_id}` | `V3\Glossaries::deleteByGlossaryId()` |
| Retrieve Glossary Details | GET | `/v3/glossaries/{glossary_id}` | `V3\Glossaries::getByGlossaryId()` |
| Edit glossary details | PATCH | `/v3/glossaries/{glossary_id}` | `V3\Glossaries::patchByGlossaryId()` |
| Deletes the dictionary associated with the given language pair with the given glossary ID. | DELETE | `/v3/glossaries/{glossary_id}/dictionaries` | `V3\Glossaries\ByGlossaryId\Dictionaries::delete()` |
| Replaces or creates a dictionary in the glossary with the specified entries. | PUT | `/v3/glossaries/{glossary_id}/dictionaries` | `V3\Glossaries\ByGlossaryId\Dictionaries::put()` |
| Retrieve Glossary Entries | GET | `/v3/glossaries/{glossary_id}/entries` | `V3\Glossaries\ByGlossaryId\Entries::get()` |
| Retrieve Languages | GET | `/v3/languages` | `V3\Languages::get()` |
| Retrieve Language Resources | GET | `/v3/languages/resources` | `V3\Languages\Resources::get()` |
| List all Spoken Terms collections | GET | `/v3/spoken-terms` | `V3\SpokenTerms::get()` |
| Create Spoken Terms collection | POST | `/v3/spoken-terms` | `V3\SpokenTerms::post()` |
| Delete Spoken Terms collection | DELETE | `/v3/spoken-terms/{spoken_terms_id}` | `V3\SpokenTerms::deleteBySpokenTermsId()` |
| Retrieve Spoken Terms collection details | GET | `/v3/spoken-terms/{spoken_terms_id}` | `V3\SpokenTerms::getBySpokenTermsId()` |
| Edit Spoken Terms collection details | PATCH | `/v3/spoken-terms/{spoken_terms_id}` | `V3\SpokenTerms::patchBySpokenTermsId()` |
| Retrieve Spoken Terms entries | GET | `/v3/spoken-terms/{spoken_terms_id}/entries` | `V3\SpokenTerms\BySpokenTermsId\Entries::get()` |
| Delete a term list | DELETE | `/v3/spoken-terms/{spoken_terms_id}/term-lists` | `V3\SpokenTerms\BySpokenTermsId\TermLists::delete()` |
| Replace or create a term list | PUT | `/v3/spoken-terms/{spoken_terms_id}/term-lists` | `V3\SpokenTerms\BySpokenTermsId\TermLists::put()` |
| List style profiles | GET | `/v3/style_profiles` | `V3\StyleProfiles::get()` |
| Create a style profile | POST | `/v3/style_profiles` | `V3\StyleProfiles::post()` |
| Delete a style profile | DELETE | `/v3/style_profiles/{style_profile_id}` | `V3\StyleProfiles::deleteByStyleProfileId()` |
| Retrieve a style profile | GET | `/v3/style_profiles/{style_profile_id}` | `V3\StyleProfiles::getByStyleProfileId()` |
| Update a style profile | PATCH | `/v3/style_profiles/{style_profile_id}` | `V3\StyleProfiles::patchByStyleProfileId()` |
| Retrieve style rule lists | GET | `/v3/style_rules` | `V3\StyleRules::get()` |
| Create a style rule list | POST | `/v3/style_rules` | `V3\StyleRules::post()` |
| Delete a style rule list | DELETE | `/v3/style_rules/{style_id}` | `V3\StyleRules::deleteByStyleId()` |
| Get a style rule list | GET | `/v3/style_rules/{style_id}` | `V3\StyleRules::getByStyleId()` |
| Update a style rule list's name | PATCH | `/v3/style_rules/{style_id}` | `V3\StyleRules::patchByStyleId()` |
| Replace configured rules for a style rule list | PUT | `/v3/style_rules/{style_id}/configured_rules` | `V3\StyleRules\ByStyleId\ConfiguredRules::put()` |
| Create a custom instruction | POST | `/v3/style_rules/{style_id}/custom_instructions` | `V3\StyleRules\ByStyleId\CustomInstructions::post()` |
| Delete a custom instruction | DELETE | `/v3/style_rules/{style_id}/custom_instructions/{instruction_id}` | `V3\StyleRules\ByStyleId\CustomInstructions::deleteByInstructionId()` |
| Get a custom instruction | GET | `/v3/style_rules/{style_id}/custom_instructions/{instruction_id}` | `V3\StyleRules\ByStyleId\CustomInstructions::getByInstructionId()` |
| Replace a custom instruction | PUT | `/v3/style_rules/{style_id}/custom_instructions/{instruction_id}` | `V3\StyleRules\ByStyleId\CustomInstructions::putByInstructionId()` |
| List translation memories | GET | `/v3/translation_memories` | `V3\TranslationMemories::get()` |
| Import a translation memory | POST | `/v3/translation_memories/import` | `V3\TranslationMemories\Import::post()` |
| Retrieve an import or export job | GET | `/v3/translation_memories/jobs/{job_id}` | `V3\TranslationMemories\Jobs::getByJobId()` |
| Delete a translation memory | DELETE | `/v3/translation_memories/{translation_memory_id}` | `V3\TranslationMemories::deleteByTranslationMemoryId()` |
| Retrieve a translation memory | GET | `/v3/translation_memories/{translation_memory_id}` | `V3\TranslationMemories::getByTranslationMemoryId()` |
| Export a translation memory | POST | `/v3/translation_memories/{translation_memory_id}/export` | `V3\TranslationMemories\ByTranslationMemoryId\Export::post()` |
| List translation memory segments | GET | `/v3/translation_memories/{translation_memory_id}/segments` | `V3\TranslationMemories\ByTranslationMemoryId\Segments::get()` |
| Request Reconnection | GET | `/v3/voice/realtime` | `V3\Voice\Realtime::get()` |
| Get Streaming URL | POST | `/v3/voice/realtime` | `V3\Voice\Realtime::post()` |
