<?php
/**
 * UI Component: card
 * Converted from src/components/ui/card.tsx
 */

function ui_card(string $title, string $content, string $footer = "", string $class = "") {
    $html = "<div class=\"rounded-2xl border border-slate-200 bg-white p-6 shadow-sm {$class}\">";
    if ($title) {
        $html .= "<h3 class=\"text-xl font-bold text-slate-900 mb-2\">{$title}</h3>";
    }
    $html .= "<div class=\"text-slate-600 leading-relaxed\">{$content}</div>";
    if ($footer) {
        $html .= "<div class=\"mt-4 pt-4 border-t border-slate-100 flex items-center justify-between\">{$footer}</div>";
    }
    $html .= "</div>";
    return $html;
}
