<?php
/**
 * UI Component: popover
 * Converted from src/components/ui/popover.tsx
 */

function ui_popover(string $trigger, string $content) {
    return "<div class=\"relative inline-block group\">
        <span>{$trigger}</span>
        <div class=\"invisible group-hover:visible absolute z-50 mt-2 w-72 rounded-2xl border border-slate-200 bg-white p-4 shadow-xl\">
            {$content}
        </div>
    </div>";
}
