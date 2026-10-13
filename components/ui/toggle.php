<?php
/**
 * UI Component: toggle
 * Converted from src/components/ui/toggle.tsx
 */

function ui_toggle(string $label, bool $pressed = false) {
    $active = $pressed ? "bg-slate-200 text-slate-900" : "text-slate-600 hover:bg-slate-100";
    return "<button type=\"button\" class=\"inline-flex items-center justify-center rounded-md p-2 text-sm font-medium {$active}\">{$label}</button>";
}
