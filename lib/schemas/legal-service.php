<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/config.php';

/**
 * Build a LegalService JSON-LD string from the centralized firm config.
 * Only the page-specific name, description and url change per page.
 */
function pfl_legal_service_schema(string $name, string $description, string $url): string
{
    $c = pfl_config();

    return json_encode([
        '@context'    => 'https://schema.org',
        '@type'       => 'LegalService',
        'name'        => $name,
        'description' => $description,
        'url'         => $url,
        'telephone'   => $c['phone'],
        'email'       => $c['email'],
        'address'     => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => $c['address']['street'],
            'addressLocality' => $c['address']['locality'],
            'addressRegion'   => $c['address']['region'],
            'postalCode'      => $c['address']['postalCode'],
            'addressCountry'  => $c['address']['country'],
        ],
        'areaServed'   => $c['areaServed'],
        'priceRange'   => $c['priceRange'],
        'openingHours' => $c['openingHours'],
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
