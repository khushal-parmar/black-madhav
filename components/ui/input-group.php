<?php
/**
 * UI Component: input-group
 * Converted from src/components/ui/input-group.tsx
 */

function ui_input_group(string $prefix, string $inputHtml, string $suffix = "") {
    return "<div class=\"flex rounded-lg border border-slate-200 overflow-hidden focus-within:ring-2 focus-within:ring-blue-500\">
        " . ($prefix ? "<span class=\"inline-flex items-center px-3 bg-slate-50 text-slate-500 text-sm border-r border-slate-200\">{$prefix}</span>" : "") . "
        {$inputHtml}
        " . ($suffix ? "<span class=\"inline-flex items-center px-3 bg-slate-50 text-slate-500 text-sm border-l border-slate-200\">{$suffix}</span>" : "") . "
    </div>";
}
