<?php
/**
 * UI Component: navigation-menu
 * Converted from src/components/ui/navigation-menu.tsx
 */

function ui_navigation_menu(array $links) {
    $html = "<nav class=\"flex items-center space-x-4\">";
    foreach ($links as $name => $href) {
        $html .= "<a href=\"{$href}\" class=\"text-sm font-medium text-slate-600 hover:text-black transition-colors\">{$name}</a>";
    }
    $html .= "</nav>";
    return $html;
}
