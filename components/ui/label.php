<?php
/**
 * UI Component: label
 * Converted from src/components/ui/label.tsx
 */

function ui_label(string $text, string $for = "", string $class = "") {
    $forAttr = $for ? "for=\"{$for}\"" : "";
    return "<label {$forAttr} class=\"text-sm font-medium leading-none text-slate-700 peer-disabled:cursor-not-allowed peer-disabled:opacity-70 {$class}\">{$text}</label>";
}
