<?php
/**
 * UI Component: empty
 * Converted from src/components/ui/empty.tsx
 */

function ui_empty(string $message = "No data found", string $description = "") {
    return "<div class=\"rounded-2xl border border-dashed border-slate-300 p-12 text-center\">
        <div class=\"mx-auto h-12 w-12 text-slate-400 mb-3\">
            <svg fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4\"/></svg>
        </div>
        <h4 class=\"text-base font-semibold text-slate-900\">{$message}</h4>
        " . ($description ? "<p class=\"mt-1 text-sm text-slate-500\">{$description}</p>" : "") . "
    </div>";
}
