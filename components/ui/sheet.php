<?php
/**
 * UI Component: sheet
 * Converted from src/components/ui/sheet.tsx
 */

function ui_sheet(string $id, string $title, string $content) {
    return "<div id=\"{$id}\" class=\"hidden fixed inset-0 z-50 flex justify-end\">
        <div class=\"absolute inset-0 bg-black/40 backdrop-blur-xs\"></div>
        <div class=\"relative z-10 w-full max-w-md bg-white p-6 shadow-2xl overflow-y-auto\">
            <h3 class=\"text-xl font-bold mb-4\">{$title}</h3>
            <div>{$content}</div>
        </div>
    </div>";
}
