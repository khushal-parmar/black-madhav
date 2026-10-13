<?php
/**
 * UI Component: calendar
 * Converted from src/components/ui/calendar.tsx
 */

function ui_calendar(string $selectedDate = "", string $class = "") {
    $now = $selectedDate ? strtotime($selectedDate) : time();
    $month = date("F Y", $now);
    return "<div class=\"p-4 rounded-xl border border-slate-200 bg-white shadow-xs max-w-xs {$class}\">
        <div class=\"flex justify-between items-center mb-4\">
            <span class=\"font-semibold text-slate-900\">{$month}</span>
        </div>
        <div class=\"grid grid-cols-7 gap-1 text-center text-xs text-slate-500 mb-2\">
            <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
        </div>
        <div class=\"grid grid-cols-7 gap-1 text-center text-sm\">
            " . implode("", array_map(function($d) { return "<button type=\"button\" class=\"h-8 w-8 rounded-full hover:bg-slate-100\">{$d}</button>"; }, range(1, 28))) . "
        </div>
    </div>";
}
