<?php
/**
 * UI Component: dropdown-menu
 * Converted from src/components/ui/dropdown-menu.tsx
 */

function ui_dropdown_menu(string $label, array $links, string $class = "") {
    $html = "<div class=\"relative inline-block text-left group {$class}\">
        <button type=\"button\" class=\"inline-flex items-center gap-1 text-sm font-medium text-slate-700 hover:text-black\">
            {$label}
            <svg class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\"/></svg>
        </button>
        <div class=\"invisible group-hover:visible absolute right-0 z-50 mt-2 w-48 rounded-md border border-slate-200 bg-white py-1 shadow-lg\">";
    foreach ($links as $name => $href) {
        $html .= "<a href=\"{$href}\" class=\"block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100\">{$name}</a>";
    }
    $html .= "</div></div>";
    return $html;
}
