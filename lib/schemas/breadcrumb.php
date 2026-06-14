<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/config.php';

/**
 * Build a BreadcrumbList JSON-LD string from the same $breadcrumb array
 * used by partials/breadcrumb.php. Relative urls are resolved against the
 * configured base url; the last item falls back to $canonical (self).
 */
function pfl_breadcrumb_schema(array $breadcrumb, string $canonical = ''): string
{
    $c       = pfl_config();
    $baseUrl = rtrim($c['baseUrl'], '/');
    $items   = [];
    $last    = count($breadcrumb) - 1;

    foreach ($breadcrumb as $i => $item) {
        if (!empty($item['url'])) {
            $url = $baseUrl . $item['url'];
        } else {
            $url = ($i === $last && $canonical !== '') ? $canonical : $baseUrl . '/';
        }

        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $item['name'],
            'item'     => $url,
        ];
    }

    return json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
