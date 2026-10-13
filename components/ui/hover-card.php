<?php
/**
 * UI Component: hover-card
 * Converted from src/components/ui/hover-card.tsx
 */

function ui_hover_card(string $trigger, string $content) {
    return "<div class=\"relative inline-block group\">
        <span class=\"cursor-pointer\">{$trigger}</span>
        <div class=\"invisible group-hover:visible absolute z-50 mt-2 w-64 rounded-xl border border-slate-200 bg-white p-4 shadow-lg\">
            {$content}
        </div>
    </div>";
}
