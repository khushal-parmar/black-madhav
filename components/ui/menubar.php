<?php
/**
 * UI Component: menubar
 * Converted from src/components/ui/menubar.tsx
 */

function ui_menubar(array $menus) {
    $html = "<div class=\"flex items-center space-x-1 rounded-lg border border-slate-200 bg-white p-1\">";
    foreach ($menus as $title => $items) {
        $html .= "<div class=\"relative group\"><button type=\"button\" class=\"rounded px-3 py-1.5 text-sm font-medium hover:bg-slate-100\">{$title}</button><div class=\"invisible group-hover:visible absolute left-0 mt-1 w-44 rounded-md border border-slate-200 bg-white p-1 shadow-md z-50\">";
        foreach ($items as $item) {
            $html .= "<a href=\"#\" class=\"block rounded px-2 py-1 text-xs text-slate-700 hover:bg-slate-100\">{$item}</a>";
        }
        $html .= "</div></div>";
    }
    $html .= "</div>";
    return $html;
}
