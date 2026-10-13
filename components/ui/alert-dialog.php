<?php
/**
 * UI Component: alert-dialog
 * Converted from src/components/ui/alert-dialog.tsx
 */

function ui_alert_dialog(string $id, string $title, string $description, string $confirmText = "Continue", string $cancelText = "Cancel") {
    return "<div id=\"{$id}\" class=\"hidden fixed inset-0 z-50 flex items-center justify-center\">
        <div class=\"absolute inset-0 bg-black/50 backdrop-blur-xs\"></div>
        <div class=\"relative z-10 w-full max-w-lg rounded-xl border border-slate-200 bg-white p-6 shadow-xl\">
            <h3 class=\"text-lg font-semibold text-slate-900\">{$title}</h3>
            <p class=\"mt-2 text-sm text-slate-600\">{$description}</p>
            <div class=\"mt-6 flex justify-end gap-3\">
                <button type=\"button\" class=\"btn-dialog-cancel rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium hover:bg-slate-50\">{$cancelText}</button>
                <button type=\"button\" class=\"btn-dialog-confirm rounded-lg bg-black px-4 py-2 text-sm font-medium text-white hover:bg-slate-800\">{$confirmText}</button>
            </div>
        </div>
    </div>";
}
