<?php
/**
 * UI Component: chart
 * Converted from src/components/ui/chart.tsx
 */

function ui_chart(string $title, array $data, string $class = "") {
    $html = "<div class=\"rounded-xl border border-slate-200 bg-white p-4 {$class}\"><h4 class=\"font-semibold mb-3\">{$title}</h4><div class=\"flex items-end gap-2 h-32\">";
    foreach ($data as $label => $val) {
        $height = min(100, max(10, (int)$val));
        $html .= "<div class=\"flex-1 flex flex-col items-center gap-1\"><div class=\"w-full bg-blue-600 rounded-t\" style=\"height: {$height}%;\"></div><span class=\"text-[10px] text-slate-500 truncate\">{$label}</span></div>";
    }
    $html .= "</div></div>";
    return $html;
}
