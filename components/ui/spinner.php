<?php
/**
 * UI Component: spinner
 * Converted from src/components/ui/spinner.tsx
 */

function ui_spinner(string $size = "h-5 w-5", string $class = "") {
    return "<svg class=\"animate-spin text-current {$size} {$class}\" fill=\"none\" viewBox=\"0 0 24 24\"><circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle><path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8v8H4z\"></path></svg>";
}
