<?php
/**
 * UI Component: field
 * Converted from src/components/ui/field.tsx
 */

function ui_field(string $label, string $inputHtml, string $hint = "", string $error = "") {
    return "<div class=\"space-y-1\">
        <label class=\"block text-sm font-medium text-slate-700\">{$label}</label>
        {$inputHtml}
        " . ($error ? "<p class=\"text-xs text-red-600\">{$error}</p>" : ($hint ? "<p class=\"text-xs text-slate-500\">{$hint}</p>" : "")) . "
    </div>";
}
