<?php
/**
 * UI Component: input-otp
 * Converted from src/components/ui/input-otp.tsx
 */

function ui_input_otp(int $length = 6, string $name = "otp") {
    $html = "<div class=\"flex gap-2 justify-center\">";
    for ($i = 0; $i < $length; $i++) {
        $html .= "<input type=\"text\" maxlength=\"1\" name=\"{$name}[]\" class=\"h-12 w-10 text-center font-bold text-lg rounded-lg border border-slate-300 focus:border-blue-500 outline-none\"/>";
    }
    $html .= "</div>";
    return $html;
}
