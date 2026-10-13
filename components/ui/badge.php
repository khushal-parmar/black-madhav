<?php
/**
 * UI Component: badge
 * Converted from src/components/ui/badge.tsx
 */

function ui_badge(string $text, string $variant = "default", string $class = "") {
    $variants = [
        "default" => "bg-slate-900 text-white hover:bg-slate-800",
        "secondary" => "bg-slate-100 text-slate-900 hover:bg-slate-200",
        "destructive" => "bg-rose-500 text-white hover:bg-rose-600",
        "outline" => "border border-slate-300 text-slate-800",
    ];
    $vCls = $variants[$variant] ?? $variants["default"];
    return "<span class=\"inline-flex items-center rounded-md px-2.5 py-0.5 text-xs font-semibold tracking-wide transition-colors {$vCls} {$class}\">{$text}</span>";
}
