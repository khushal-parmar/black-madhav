<?php
/**
 * UI Component: button-group
 * Converted from src/components/ui/button-group.tsx
 */

function ui_button_group(array $buttons, string $class = "") {
    $html = "<div class=\"inline-flex rounded-md shadow-xs {$class}\" role=\"group\">";
    $total = count($buttons);
    foreach ($buttons as $i => $btn) {
        $rounded = $i === 0 ? "rounded-l-lg" : ($i === $total - 1 ? "rounded-r-lg" : "");
        $html .= "<button type=\"button\" class=\"border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 {$rounded}\">{$btn}</button>";
    }
    $html .= "</div>";
    return $html;
}
