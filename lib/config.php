<?php
/**
 * Centralized firm data — single source of truth for contact details,
 * address and SEO base URL. Update here and it propagates everywhere.
 */
function pfl_config(): array
{
    static $config = null;

    if ($config === null) {
        $config = [
            'name'       => 'F&P Legaltec',
            'baseUrl'    => 'https://pflegaltec.com',
            'phone'      => '+34676594016',
            'email'      => 'info@pflegaltec.com',
            'address'    => [
                'street'     => 'Cuesta de San Francisco nº 5 Entlo',
                'locality'   => 'Lorca',
                'region'     => 'Murcia',
                'postalCode' => '30800',
                'country'    => 'ES',
            ],
            'areaServed'   => ['Lorca', 'Murcia', 'España'],
            'priceRange'   => 'Consulta gratuita',
            'openingHours' => 'Mo-Fr 09:00-21:00',
        ];
    }

    return $config;
}
