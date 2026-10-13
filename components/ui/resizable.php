<?php
/**
 * UI Component: resizable
 * Converted from src/components/ui/resizable.tsx
 */

function ui_resizable(string $leftContent, string $rightContent) {
    return "<div class=\"flex w-full border border-slate-200 rounded-xl overflow-hidden\">
        <div class=\"w-1/2 p-4 border-r border-slate-200\">{$leftContent}</div>
        <div class=\"w-1/2 p-4\">{$rightContent}</div>
    </div>";
}
