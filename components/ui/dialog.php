<?php
/**
 * UI Component: dialog
 * Converted from src/components/ui/dialog.tsx
 */

function ui_dialog(string $id, string $title, string $body, string $footer = "") {
    return "<div id=\"{$id}\" class=\"hidden fixed inset-0 z-50 flex items-center justify-center p-4\">
        <div class=\"modal-backdrop absolute inset-0 bg-black/50\"></div>
        <div class=\"relative z-10 w-full max-w-lg rounded-2xl bg-white p-6 shadow-2xl\">
            <h3 class=\"text-xl font-bold text-slate-900 mb-2\">{$title}</h3>
            <div class=\"text-sm text-slate-600 mb-6\">{$body}</div>
            " . ($footer ? "<div class=\"flex justify-end gap-3\">{$footer}</div>" : "") . "
        </div>
    </div>";
}
