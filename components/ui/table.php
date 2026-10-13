<?php
/**
 * UI Component: table
 * Converted from src/components/ui/table.tsx
 */

function ui_table(array $headers, array $rows, string $class = "") {
    $html = "<div class=\"w-full overflow-x-auto rounded-xl border border-slate-200 bg-white {$class}\"><table class=\"w-full text-left text-sm\"><thead class=\"bg-slate-50 border-b border-slate-200 text-xs uppercase text-slate-500\"><tr>";
    foreach ($headers as $h) {
        $html .= "<th class=\"px-4 py-3 font-semibold\">{$h}</th>";
    }
    $html .= "</tr></thead><tbody class=\"divide-y divide-slate-100\">";
    foreach ($rows as $row) {
        $html .= "<tr class=\"hover:bg-slate-50/50\">";
        foreach ($row as $cell) {
            $html .= "<td class=\"px-4 py-3 text-slate-700\">{$cell}</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tbody></table></div>";
    return $html;
}
