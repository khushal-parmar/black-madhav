<?php
/**
 * UI Component: form
 * Converted from src/components/ui/form.tsx
 */

function ui_form(string $action, string $content, string $method = "POST", string $class = "") {
    return "<form action=\"{$action}\" method=\"{$method}\" class=\"space-y-4 {$class}\">{$content}</form>";
}
