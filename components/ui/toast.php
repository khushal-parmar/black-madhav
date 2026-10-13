<?php
/**
 * UI Component: toast
 * Converted from src/components/ui/toast.tsx
 */

function ui_toast(string $title, string $description = "", string $type = "default") {
    $border = $type === "error" ? "border-rose-500" : "border-slate-200";
    return "<div class=\"pointer-events-auto flex w-full max-w-md rounded-2xl border {$border} bg-white p-4 shadow-xl\">
        <div><h5 class=\"text-sm font-semibold text-slate-900\">{$title}</h5>" . ($description ? "<p class=\"mt-1 text-xs text-slate-500\">{$description}</p>" : "") . "</div>
    </div>";
}
