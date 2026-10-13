<?php
/**
 * UI Component: slider
 * Converted from src/components/ui/slider.tsx
 */

function ui_slider(string $name, int $min = 0, int $max = 100, int $value = 50) {
    return "<input type=\"range\" name=\"{$name}\" min=\"{$min}\" max=\"{$max}\" value=\"{$value}\" class=\"w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-blue-600\"/>";
}
