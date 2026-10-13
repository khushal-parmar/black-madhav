<?php
/**
 * UI Component: aspect-ratio
 * Converted from src/components/ui/aspect-ratio.tsx
 */

function ui_aspect_ratio(string $content, float $ratio = 1.777) {
    $padding = (1 / $ratio) * 100;
    return "<div class=\"relative w-full overflow-hidden\" style=\"padding-bottom: {$padding}%;\"><div class=\"absolute inset-0\">{$content}</div></div>";
}
