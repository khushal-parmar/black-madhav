<?php
/**
 * UI Component: scroll-area
 * Converted from src/components/ui/scroll-area.tsx
 */

function ui_scroll_area(string $content, string $height = "h-72", string $class = "") {
    return "<div class=\"overflow-y-auto {$height} rounded-lg border border-slate-200 p-4 scrollbar-thin {$class}\">{$content}</div>";
}
