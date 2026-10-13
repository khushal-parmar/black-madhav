<?php
/**
 * UI Component: sonner
 * Converted from src/components/ui/sonner.tsx
 */

function ui_sonner(string $message, string $type = "info") {
    return "<div class=\"fixed bottom-4 right-4 z-50 rounded-xl bg-slate-900 text-white px-5 py-3 shadow-lg text-sm flex items-center gap-2\"><span>{$message}</span></div>";
}
