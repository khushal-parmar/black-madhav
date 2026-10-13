<?php
/**
 * UI Component: item
 * Converted from src/components/ui/item.tsx
 */

function ui_item(string $title, string $description = "", string $trailing = "") {
    return "<div class=\"flex items-center justify-between p-3 rounded-lg hover:bg-slate-50\">
        <div><p class=\"font-medium text-sm text-slate-900\">{$title}</p>" . ($description ? "<p class=\"text-xs text-slate-500\">{$description}</p>" : "") . "</div>
        " . ($trailing ? "<div>{$trailing}</div>" : "") . "
    </div>";
}
