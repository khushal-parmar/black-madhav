<?php
/**
 * UI Component: toggle-group
 * Converted from src/components/ui/toggle-group.tsx
 */

function ui_toggle_group(array $items, string $selected = "") {
    $html = "<div class=\"inline-flex rounded-lg border border-slate-200 bg-white p-1\">";
    foreach ($items as $val => $label) {
        $active = ($val === $selected) ? "bg-slate-100 text-slate-900" : "text-slate-600 hover:text-slate-900";
        $html .= "<button type=\"button\" class=\"rounded-md px-3 py-1 text-xs font-medium {$active}\">{$label}</button>";
    }
    $html .= "</div>";
    return $html;
}
