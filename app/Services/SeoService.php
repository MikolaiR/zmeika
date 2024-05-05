<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SeoService
{

    public static function createLdJson($product = null): array
    {
        return !is_null($product) && $product->price != 0 ?
            [
                '@context' => 'http://schema.org',
                '@type' => 'Product',
                'name' => $product->name,
                'description' => Str::limit($product->description, 100, '...'),
                'image' =>  Storage::url($product->image),
                'offers' => [
                    '@type' => 'Offer',
                    'priceCurrency' => 'USD',
                    'price' => $product->price,
                    'priceSpecification' => [
                        '@type' => 'PriceSpecification',
                        'price' => $product->price,
                        'priceCurrency' => 'USD'
                    ],
                    'availability' => 'http://schema.org/InStock',
                    'seller' => [
                        '@type' => 'Organization',
                        'name' => 'Zmeika.pro',
                        'address' => [
                            '@type' => 'PostalAddress',
                            'addressLocality' => 'Minsk',
                            'addressRegion' => 'Minsky',
                            'postalCode' => '220015',
                            'addressCountry' => 'BY',
                        ],
                        'contactPoint' => [
                            '@type' => 'ContactPoint',
                            'telephone' => '+375293328833',
                            'contactType' => 'manager',
                        ],
                    ],
                ],
            ]
            :
            [
                "@context" => "https://schema.org",
                "@type" => "PetStore",
                "@id" => "Zmeika.pro",
                "name" => "Zmeika.pro",
                "url" => "https://zmeika.pro/",
                "address" => [
                    "@type" => "PostalAddress",
                    "addressLocality" => "Minsk",
                    "addressCountry" => "BY"
                ],
                "description" => "Откройте для себя нашу эксклюзивную коллекцию змей от редких до декоративных видов. Идеальные питомцы, представленные в различных категориях, для начинающих и опытных любителей рептилий. Купите сейчас с гарантией здоровья и качества.",
                "email"=> "zmeika.pro@gmail.com",
                "image"=> "https://zmeika.pro/images/logo.webp",
                "telephone"=> "+375293328833",
                "openingHours"=> "Mo-Su 10:00-19:00"
            ];
    }

}
