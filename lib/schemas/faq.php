<?php
/**
 * Build a FAQPage JSON-LD string from an associative array of
 * question => answer. Use the same $faqs array to render the visible
 * accordion so the structured data never drifts from the page content.
 */
function pfl_faq_schema(array $faqs): string
{
    $mainEntity = [];

    foreach ($faqs as $question => $answer) {
        $mainEntity[] = [
            '@type'          => 'Question',
            'name'           => $question,
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $answer,
            ],
        ];
    }

    return json_encode([
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $mainEntity,
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
