<?php
/**
 * UI Component: checkbox
 * Converted from src/components/ui/checkbox.tsx
 */

function ui_checkbox(string $name, string $label = "", bool $checked = false, string $id = "") {
    $id = $id ?: "chk_" . uniqid();
    $chk = $checked ? "checked" : "";
    return "<label for=\"{$id}\" class=\"inline-flex items-center gap-2 cursor-pointer\">
        <input type=\"checkbox\" id=\"{$id}\" name=\"{$name}\" {$chk} class=\"h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500\"/>
        <span class=\"text-sm text-slate-700\">{$label}</span>
    </label>";
}
