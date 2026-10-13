<?php
/**
 * UI Component: accordion
 * Converted from src/components/ui/accordion.tsx
 */

function ui_accordion(array $items, string $class = "") {
    $html = "<div class=\"divide-y divide-slate-200 border-y border-slate-200 {$class}\">";
    foreach ($items as $i => $item) {
        $id = "acc_" . $i . "_" . uniqid();
        $title = htmlspecialchars($item["title"] ?? "");
        $content = htmlspecialchars($item["content"] ?? "");
        $html .= "<details class=\"group py-3\">
            <summary class=\"flex cursor-pointer list-none items-center justify-between font-medium text-slate-900 group-open:text-blue-600\">
                {$title}
                <svg class=\"h-5 w-5 transition-transform duration-200 group-open:rotate-180\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\"/></svg>
            </summary>
            <div class=\"pt-2 text-sm text-slate-600\">{$content}</div>
        </details>";
    }
    $html .= "</div>";
    return $html;
}
