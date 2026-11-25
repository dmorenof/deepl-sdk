<?php

declare(strict_types=1);

namespace DeepLSDK\Responses\V1\QualityEvaluations\ByJobId\GetStatus200;

final class ByJobIdGetStatus200Response extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\DeepLSDK\DTOs\QualityEvaluation\Done::class, \DeepLSDK\DTOs\QualityEvaluation\Failed::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'QualityEvaluationDone',
        ],
        [
            'kind' => 'reference',
            'ref' => 'QualityEvaluationFailed',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'QualityEvaluationAppliedGlossaryTermPair' => [
            'kind' => 'object',
            'properties' => [
                'ranges' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'QualityEvaluationSpan',
                    ],
                ],
                'source_term' => [
                    'kind' => 'string',
                ],
                'target_term' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'ranges',
                'source_term',
                'target_term',
            ],
        ],
        'QualityEvaluationDone' => [
            'kind' => 'object',
            'properties' => [
                'job_id' => [
                    'kind' => 'string',
                ],
                'segments' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'QualityEvaluationSegment',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'done',
                    ],
                ],
            ],
            'required' => [
                'job_id',
                'segments',
                'status',
            ],
        ],
        'QualityEvaluationFailed' => [
            'kind' => 'object',
            'properties' => [
                'error' => [
                    'kind' => 'object',
                    'properties' => [
                        'code' => [
                            'kind' => 'string',
                        ],
                        'message' => [
                            'kind' => 'string',
                        ],
                    ],
                    'required' => [
                        'code',
                        'message',
                    ],
                ],
                'job_id' => [
                    'kind' => 'string',
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'error',
                    ],
                ],
            ],
            'required' => [
                'error',
                'job_id',
                'status',
            ],
        ],
        'QualityEvaluationIssue' => [
            'kind' => 'object',
            'properties' => [
                'explanation' => [
                    'kind' => 'string',
                ],
                'severity' => [
                    'kind' => 'string',
                    'enum' => [
                        'Critical',
                        'Major',
                        'Minor',
                    ],
                ],
                'source_spans' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'QualityEvaluationSpan',
                    ],
                ],
                'sub_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'Addition',
                        'Awkward',
                        'Character encoding',
                        'Grammar',
                        'Grammatical register',
                        'Inconsistency',
                        'Inconsistent style',
                        'Mistranslation',
                        'Omission',
                        'Over-translation',
                        'Punctuation',
                        'SegmentTooLarge',
                        'Spelling',
                        'Under-translation',
                        'Untranslated text',
                    ],
                ],
                'target_spans' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'QualityEvaluationSpan',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'Accuracy',
                        'Fluency',
                        'InternalTQEError',
                        'Miscellaneous',
                        'Style',
                    ],
                ],
            ],
            'required' => [
                'explanation',
                'severity',
                'source_spans',
                'sub_type',
                'target_spans',
                'type',
            ],
        ],
        'QualityEvaluationSegment' => [
            'kind' => 'object',
            'properties' => [
                'applied_glossary_term_pairs' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'QualityEvaluationAppliedGlossaryTermPair',
                    ],
                ],
                'errors' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'QualityEvaluationIssue',
                    ],
                ],
                'segment_index' => [
                    'kind' => 'integer',
                ],
                'segment_score' => [
                    'kind' => 'number',
                    'rules' => [
                        'minimum' => 0,
                        'maximum' => 100,
                    ],
                ],
                'source' => [
                    'kind' => 'string',
                ],
                'target' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'errors',
                'segment_index',
                'segment_score',
            ],
        ],
        'QualityEvaluationSpan' => [
            'kind' => 'object',
            'properties' => [
                'end' => [
                    'kind' => 'integer',
                ],
                'start' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'end',
                'start',
            ],
        ],
    ];
}
