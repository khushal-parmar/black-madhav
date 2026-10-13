<?php
/**
 * UI Component: breadcrumb
 * Converted from src/components/ui/breadcrumb.tsx
 */

function ui_breadcrumb(array $items) {
    $html = "<nav aria-label=\"Breadcrumb\"><ol class=\"flex items-center space-x-2 text-sm text-slate-500\">";
    $total = count($items);
    foreach ($items as $i => $item) {
        $isLast = ($i === $total - 1);
        $title = htmlspecialchars($item["title"] ?? "");
        $href = htmlspecialchars($item["href"] ?? "#");
        if ($isLast) {
            $html .= "<li class=\"font-semibold text-slate-900\">{$title}</li>";
        } else {
            $html .= "<li><a href=\"{$href}\" class=\"hover:text-slate-900\">{$title}</a></li><li>/</li>";
        }
    }
    $html .= "</ol></nav>";
    return $html;
}
