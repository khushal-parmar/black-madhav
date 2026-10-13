<?php
/**
 * UI Component: sidebar
 * Converted from src/components/ui/sidebar.tsx
 */

function ui_sidebar(array $navItems, string $activePath = "") {
    $html = "<aside class=\"w-64 border-r border-slate-200 bg-slate-50 p-4 space-y-1 min-h-screen\">";
    foreach ($navItems as $name => $href) {
        $active = ($activePath === $href) ? "bg-black text-white" : "text-slate-600 hover:bg-slate-200";
        $html .= "<a href=\"{$href}\" class=\"flex items-center px-4 py-2.5 rounded-lg text-sm font-medium {$active}\">{$name}</a>";
    }
    $html .= "</aside>";
    return $html;
}
