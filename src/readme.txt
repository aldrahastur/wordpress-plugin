=== TIVENTS Products Feed ===

Contributors: aldrahastur, tivents
Tags: events, tickets, tivents, products, feed
Requires at least: 3.0.1
Tested up to: 6.8.3
Stable tag: 2.0.0
Requires PHP: 7.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Präsentieren Sie Ihre Produkte von TIVENTS innerhalb Ihrer Website mit einem Shortcode via TIVENTS Public API.

== Description ==

Mit TIVENTS können Sie Ihre Veranstaltungen und Gutscheine einfach verkaufen. Über unsere Plattform [https://tivents.de](https://tivents.de) können Sie einfach Ihre Produkte anbieten. Kosten entstehen Ihnen nur, wenn auch ein Verkauf getätigt wird. Mit diesem Plugin betten Sie ganz einfach die TIVENTS-Gutscheine und Events auf Ihrer Website ein. Sie entscheiden, ob Sie Gutscheine und Events, oder nur Gutscheine bzw. nur Events präsentieren möchten.

Sie benötigen Ihre Partner-ID. Diese finden Sie in Ihrem Partnerkonto ([https://manage.tivents.app](https://manage.tivents.app)).

== Features ==

* Einfache Integration von TIVENTS-Produkten in Ihre WordPress-Seite
* Unterstützung für Veranstaltungen, Gutscheine und Patenschaften
* Anpassbare Darstellung (Listenansicht, Kachelansicht, Kalenderansicht)
* SEO-Optimierung für Produktdetailseiten
* Unterstützung für Rabattcodes und Sonderaktionen
* Automatische Generierung von Meta-Tags und strukturierten Daten (Schema.org)

== Installation ==

1. Upload `tivents-products-feed` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Was brauche ich um das Plugin zu nutzen? =

Sie benötigen ein Partnerkonto auf TIVENTS und Ihre Partner-ID. Weitere Informationen erhalten Sie unter [https://tivents.info/faq](https://tivents.info/faq)

= Was kann ich anpassen? =

Sie können entscheiden, ob Sie alle Produkte, Gutscheine oder Events anzeigen möchten und die Primär- und Sekundärfarbe anpassen.

= Wie werden die Produkte eingebunden? =

Die Produkte werden durch einen Shortcode auf der gewünschten Seite eingebunden. Dabei wird unsere API aufgerufen, die Produkte zu Ihrer Partner ID geholt und dann in einem DIV-Container ausgegeben. Hierbei werden keine Daten der Nutzer oder Ihrer WordPress Seite an uns übermittelt.

= Werden Daten von den Webseitenbesuchern übertragen? =

Es werden keinerlei Daten von Besuchern an TIVENTS übertragen. Der Abruf der Produkte via API erfolgt nur in dem Moment, in der eine Seite mit einem der Shortcodes aufgerufen wird.

== Shortcodes ==

* `[tivents_products]` - Zeigt eine Liste von Produkten an.
* `[tivents_product_detail id="GLOBAL_PRODUCT_ID" show_meta_tags="true" show_promotion="true"]` - Zeigt eine Detailansicht für ein einzelnes Produkt an.

== Changelog ==

= 2.0.0 =
* Neue Funktion: Produktdetailseiten mit SEO-Optimierung und Promotion-Tools
* Unterstützung für Meta-Tags und strukturierte Daten (Schema.org)
* Integration von Rabattcodes und Sonderaktionen

= 1.6.7 =
* Anpassung des Modal-Verhaltens für Veranstaltungen im Kalender

= 1.6.6 =
* Fix für fehlende Veranstaltungen in der Kalenderansicht

= 1.6.5 =
* Kleine Klassenkorrekturen und Verbesserung der JSON-Verarbeitung für fehlende Veranstaltungen
