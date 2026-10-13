<?php
/**
 * UI Component: switch
 * Converted from src/components/ui/switch.tsx
 */

function ui_switch(string $name, bool $checked = false, string $id = "") {
    $id = $id ?: "sw_" . uniqid();
    $chk = $checked ? "checked" : "";
    return "<label for=\"{$id}\" class=\"inline-flex items-center cursor-pointer\">
        <input type=\"checkbox\" id=\"{$id}\" name=\"{$name}\" {$chk} class=\"sr-only peer\"/>
        <div class=\"w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[\"\"] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600 relative\"></div>
    </label>";
}
