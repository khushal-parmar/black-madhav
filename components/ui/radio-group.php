<?php
/**
 * UI Component: radio-group
 * Converted from src/components/ui/radio-group.tsx
 */

function ui_radio_group(string $name, array $options, string $selected = "") {
    $html = "<div class=\"space-y-2\">";
    foreach ($options as $val => $lbl) {
        $chk = ($val === $selected) ? "checked" : "";
        $id = "rad_" . $val . "_" . uniqid();
        $html .= "<label for=\"{$id}\" class=\"flex items-center gap-2 cursor-pointer\">
            <input type=\"radio\" id=\"{$id}\" name=\"{$name}\" value=\"{$val}\" {$chk} class=\"h-4 w-4 border-slate-300 text-blue-600 focus:ring-blue-500\"/>
            <span class=\"text-sm text-slate-700\">{$lbl}</span>
        </label>";
    }
    $html .= "</div>";
    return $html;
}
