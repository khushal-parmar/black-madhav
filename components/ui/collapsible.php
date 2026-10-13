<?php
/**
 * UI Component: collapsible
 * Converted from src/components/ui/collapsible.tsx
 */

function ui_collapsible(string $trigger, string $content, string $class = "") {
    return "<details class=\"rounded-xl border border-slate-200 bg-white p-4 {$class}\">
        <summary class=\"cursor-pointer font-medium text-slate-900 select-none\">{$trigger}</summary>
        <div class=\"mt-3 text-sm text-slate-600\">{$content}</div>
    </details>";
}
