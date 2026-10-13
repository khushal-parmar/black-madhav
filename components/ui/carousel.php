<?php
/**
 * UI Component: carousel
 * Converted from src/components/ui/carousel.tsx
 */

function ui_carousel(array $slides, string $class = "") {
    $html = "<div class=\"relative overflow-hidden rounded-2xl {$class}\"><div class=\"flex overflow-x-auto snap-x snap-mandatory scrollbar-none\">";
    foreach ($slides as $slide) {
        $html .= "<div class=\"w-full flex-shrink-0 snap-center p-2\">{$slide}</div>";
    }
    $html .= "</div></div>";
    return $html;
}
