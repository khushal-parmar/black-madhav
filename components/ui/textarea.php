<?php
/**
 * UI Component: textarea
 * Converted from src/components/ui/textarea.tsx
 */

function ui_textarea(string $name, string $value = "", string $placeholder = "", int $rows = 4, string $class = "") {
    return "<textarea name=\"{$name}\" rows=\"{$rows}\" placeholder=\"{$placeholder}\" class=\"w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100 {$class}\">{$value}</textarea>";
}
