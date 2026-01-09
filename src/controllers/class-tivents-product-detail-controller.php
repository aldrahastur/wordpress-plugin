<?php

class Tivents_Product_Detail_Controller {
    public static function tivents_product_detail_shortcode($atts) {
        extract(shortcode_atts(array(
            'id' => '',
            'show_meta_tags' => 'false',
            'show_promotion' => 'false',
        ), $atts));

        $api_url = 'https://products.tivents.net/public/v1/' . $id;
        $product = tivents_call_api($api_url);

        if ($show_meta_tags === 'true') {
            add_action('wp_head', function() use ($product) {
                echo '<meta name="description" content="' . esc_attr($product['description']) . '">';
                echo '<meta property="og:title" content="' . esc_attr($product['name']) . '">';
                echo '<meta property="og:description" content="' . esc_attr($product['description']) . '">';
                echo '<script type="application/ld+json">' . json_encode(self::tivents_generate_schema_markup($product)) . '</script>';
            });
        }

        return Tivents_Product_Detail_View::tivents_set_product_detail_view($product, $show_meta_tags, $show_promotion);
    }

    private static function tivents_generate_schema_markup($product) {
        return array(
            "@context" => "https://schema.org",
            "@type" => "Event",
            "name" => $product['name'],
            "description" => $product['description'],
            "offers" => array(
                "@type" => "Offer",
                "price" => $product['price'],
                "priceCurrency" => "EUR",
                "availability" => "https://schema.org/InStock",
                "url" => $product['url']
            )
        );
    }
}