<?php

class Tivents_Product_Detail_View {
    public static function tivents_set_product_detail_view($product, $show_meta_tags, $show_promotion) {
        $html = '<div class="tivents-product-detail">';

        // Produktinformationen anzeigen
        $html .= '<h1>' . esc_html($product['name']) . '</h1>';
        $html .= '<p>' . esc_html($product['description']) . '</p>';
        $html .= '<p>Preis: ' . esc_html($product['price']) . '</p>';

        // Rabattcodes oder Sonderaktionen anzeigen, falls aktiviert
        if ($show_promotion === 'true' && isset($product['promotion'])) {
            $html .= '<div class="tivents-promotion">';
            $html .= '<span class="tivents-badge">Aktion</span>';
            $html .= '<p>' . esc_html($product['promotion']['discount']) . ' Rabatt mit Code <strong>' . esc_html($product['promotion']['code']) . '</strong> (gültig bis ' . esc_html($product['promotion']['valid_until']) . ')</p>';
            $html .= '</div>';
        }

        // Hervorhebung anzeigen, falls das Produkt als "Empfohlen" markiert ist
        if (isset($product['highlight']) && $product['highlight']) {
            $html .= '<div class="tivents-highlight">⭐ Empfohlen</div>';
        }

        $html .= '</div>';

        return $html;
    }
}