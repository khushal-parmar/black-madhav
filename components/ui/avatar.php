<?php
/**
 * UI Component: avatar
 * Converted from src/components/ui/avatar.tsx
 */

function ui_avatar(string $src = "", string $fallback = "U", string $class = "") {
    if ($src) {
        return "<img src=\"{$src}\" alt=\"avatar\" class=\"inline-block h-10 w-10 rounded-full object-cover {$class}\"/>";
    }
    return "<div class=\"inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-200 font-semibold text-slate-700 {$class}\">{$fallback}</div>";
}
