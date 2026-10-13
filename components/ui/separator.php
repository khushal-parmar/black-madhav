<?php
/**
 * UI Component: separator
 * Converted from src/components/ui/separator.tsx
 */

function ui_separator(string $orientation = "horizontal", string $class = "") {
    if ($orientation === "vertical") {
        return "<div class=\"inline-block h-full w-[1px] bg-slate-200 {$class}\"></div>";
    }
    return "<hr class=\"border-0 border-t border-slate-200 my-4 {$class}\"/>";
}
