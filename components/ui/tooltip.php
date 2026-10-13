<?php
/**
 * UI Component: tooltip
 * Converted from src/components/ui/tooltip.tsx
 */

function ui_tooltip(string $trigger, string $tooltipText) {
    return "<div class=\"relative inline-block group\">
        <span>{$trigger}</span>
        <div class=\"invisible group-hover:visible absolute bottom-full left-1/2 -translate-x-1/2 mb-2 rounded bg-slate-900 px-2 py-1 text-xs text-white shadow-xs whitespace-nowrap z-50\">
            {$tooltipText}
        </div>
    </div>";
}
