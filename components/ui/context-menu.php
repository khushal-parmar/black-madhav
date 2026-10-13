<?php
/**
 * UI Component: context-menu
 * Converted from src/components/ui/context-menu.tsx
 */

function ui_context_menu(string $triggerContent, array $items) {
    $menuHtml = "<div class=\"context-menu hidden absolute z-50 rounded-lg border border-slate-200 bg-white p-1 shadow-lg\">";
    foreach ($items as $item) {
        $menuHtml .= "<a href=\"#\" class=\"block px-3 py-1.5 text-xs text-slate-700 hover:bg-slate-100 rounded\">{$item}</a>";
    }
    $menuHtml .= "</div>";
    return "<div class=\"context-menu-trigger relative\">{$triggerContent}{$menuHtml}</div>";
}
