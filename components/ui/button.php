<?php
/**
 * UI Component: button
 * Converted from src/components/ui/button.tsx
 */

function ui_button(string $label, string $variant = "default", string $size = "default", string $type = "button", string $extra = "") {
    $variants = [
        "default" => "bg-slate-900 text-white hover:bg-slate-800",
        "primary" => "bg-blue-600 text-white hover:bg-blue-700",
        "secondary" => "bg-slate-100 text-slate-900 hover:bg-slate-200",
        "outline" => "border border-slate-300 bg-white text-slate-700 hover:bg-slate-50",
        "ghost" => "hover:bg-slate-100 text-slate-700",
        "destructive" => "bg-rose-600 text-white hover:bg-rose-700",
    ];
    $sizes = [
        "sm" => "h-8 px-3 text-xs",
        "default" => "h-10 px-4 py-2 text-sm",
        "lg" => "h-12 px-8 text-base",
    ];
    $vCls = $variants[$variant] ?? $variants["default"];
    $sCls = $sizes[$size] ?? $sizes["default"];
    return "<button type=\"{$type}\" class=\"inline-flex items-center justify-center rounded-lg font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-slate-400 disabled:pointer-events-none disabled:opacity-50 {$vCls} {$sCls} {$extra}\">{$label}</button>";
}
