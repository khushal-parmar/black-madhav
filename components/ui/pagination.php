<?php
/**
 * UI Component: pagination
 * Converted from src/components/ui/pagination.tsx
 */

function ui_pagination(int $currentPage, int $totalPages, string $baseUrl = "?page=") {
    $html = "<div class=\"flex items-center justify-center space-x-1\">";
    for ($i = 1; $i <= $totalPages; $i++) {
        $active = ($i === $currentPage) ? "bg-black text-white" : "border border-slate-200 hover:bg-slate-50 text-slate-700";
        $html .= "<a href=\"{$baseUrl}{$i}\" class=\"h-9 w-9 rounded-md flex items-center justify-center text-sm font-medium {$active}\">{$i}</a>";
    }
    $html .= "</div>";
    return $html;
}
