<?php
/**
 * UI Component: tabs
 * Converted from src/components/ui/tabs.tsx
 */

function ui_tabs(array $tabs, string $activeTab = "") {
    $html = "<div class=\"inline-flex rounded-xl bg-slate-100 p-1 mb-4\">";
    foreach ($tabs as $key => $label) {
        $active = ($key === $activeTab) ? "bg-white text-slate-900 shadow-xs" : "text-slate-600 hover:text-slate-900";
        $html .= "<button type=\"button\" class=\"rounded-lg px-4 py-2 text-sm font-medium transition {$active}\">{$label}</button>";
    }
    $html .= "</div>";
    return $html;
}
