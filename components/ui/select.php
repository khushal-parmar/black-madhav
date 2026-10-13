<?php
/**
 * UI Component: select
 * Converted from src/components/ui/select.tsx
 */

function ui_select(string $name, array $options, string $selected = "", string $class = "") {
    $html = "<select name=\"{$name}\" class=\"w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20 {$class}\">";
    foreach ($options as $val => $lbl) {
        $sel = ($val === $selected || $lbl === $selected) ? "selected" : "";
        $html .= "<option value=\"{$val}\" {$sel}>{$lbl}</option>";
    }
    $html .= "</select>";
    return $html;
}
