<?php
/**
 * UI Component: input
 * Converted from src/components/ui/input.tsx
 */

function ui_input(string $name, string $type = "text", string $value = "", string $placeholder = "", string $class = "") {
    return "<input type=\"{$type}\" name=\"{$name}\" value=\"{$value}\" placeholder=\"{$placeholder}\" class=\"w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100 {$class}\"/>";
}
