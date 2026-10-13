<?php
/**
 * UI Component: command
 * Converted from src/components/ui/command.tsx
 */

function ui_command(string $placeholder = "Type a command or search...") {
    return "<div class=\"rounded-xl border border-slate-200 bg-white shadow-lg overflow-hidden\">
        <div class=\"flex items-center border-b border-slate-200 px-3\">
            <svg class=\"h-4 w-4 text-slate-400 mr-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"/></svg>
            <input type=\"text\" placeholder=\"{$placeholder}\" class=\"w-full py-3 text-sm outline-none bg-transparent\"/>
        </div>
    </div>";
}
