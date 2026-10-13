<?php
/**
 * UI Component: progress
 * Converted from src/components/ui/progress.tsx
 */

function ui_progress(int $percent = 0, string $class = "") {
    $val = min(100, max(0, $percent));
    return "<div class=\"w-full h-2 rounded-full bg-slate-100 overflow-hidden {$class}\">
        <div class=\"h-full bg-blue-600 transition-all duration-300\" style=\"width: {$val}%;\"></div>
    </div>";
}
