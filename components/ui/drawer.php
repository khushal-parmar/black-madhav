<?php
/**
 * UI Component: drawer
 * Converted from src/components/ui/drawer.tsx
 */

function ui_drawer(string $id, string $title, string $content) {
    return "<div id=\"{$id}\" class=\"hidden fixed inset-0 z-50 flex flex-col justify-end\">
        <div class=\"absolute inset-0 bg-black/40 backdrop-blur-xs\"></div>
        <div class=\"relative z-10 w-full max-h-[85vh] rounded-t-3xl bg-white p-6 shadow-2xl overflow-y-auto\">
            <div class=\"mx-auto mb-4 h-1.5 w-12 rounded-full bg-slate-300\"></div>
            <h3 class=\"text-xl font-bold mb-4\">{$title}</h3>
            <div>{$content}</div>
        </div>
    </div>";
}
