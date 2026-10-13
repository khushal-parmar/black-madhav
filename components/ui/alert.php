<?php
/**
 * UI Component: alert
 * Converted from src/components/ui/alert.tsx
 */

function ui_alert(string $message, string $type = "info", string $title = "") {
    $colors = [
        "info" => "border-blue-200 bg-blue-50 text-blue-900",
        "error" => "border-red-200 bg-red-50 text-red-900",
        "warning" => "border-amber-200 bg-amber-50 text-amber-900",
        "success" => "border-emerald-200 bg-emerald-50 text-emerald-900",
    ];
    $cls = $colors[$type] ?? $colors["info"];
    $html = "<div class=\"rounded-xl border p-4 {$cls}\">";
    if ($title) {
        $html .= "<h5 class=\"mb-1 font-semibold leading-none\">{$title}</h5>";
    }
    $html .= "<div class=\"text-sm\">{$message}</div></div>";
    return $html;
}
