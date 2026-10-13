<?php
/**
 * Simple, Safe Markdown to HTML parser for Blog posts
 */

class Markdown {
    public static function parse(string $markdown): string {
        $text = htmlspecialchars($markdown, ENT_NOQUOTES, 'UTF-8');

        // Code blocks
        $text = preg_replace_callback('/```(.*?)```/s', function($matches) {
            return '<pre class="bg-slate-900 text-slate-100 p-4 rounded-xl overflow-x-auto my-3"><code>' . trim($matches[1]) . '</code></pre>';
        }, $text);

        // Inline code
        $text = preg_replace('/`([^`]+)`/', '<code class="bg-slate-200 text-slate-800 px-1.5 py-0.5 rounded text-sm">$1</code>', $text);

        // Headings
        $text = preg_replace('/^### (.*$)/m', '<h3 class="text-lg font-bold text-slate-900 mt-4 mb-2">$1</h3>', $text);
        $text = preg_replace('/^## (.*$)/m', '<h2 class="text-xl font-bold text-slate-900 mt-5 mb-2">$1</h2>', $text);
        $text = preg_replace('/^# (.*$)/m', '<h1 class="text-2xl font-extrabold text-slate-900 mt-6 mb-3">$1</h1>', $text);

        // Bold and Italic
        $text = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $text);
        $text = preg_replace('/__(.*?)__/', '<strong>$1</strong>', $text);
        $text = preg_replace('/\*([^\*]+)\*/', '<em>$1</em>', $text);
        $text = preg_replace('/_([^_]+)_/', '<em>$1</em>', $text);

        // Blockquotes
        $text = preg_replace('/^\> (.*$)/m', '<blockquote class="border-l-4 border-blue-500 pl-4 py-1 italic text-slate-600 my-2">$1</blockquote>', $text);

        // Unordered lists
        $text = preg_replace('/^\* (.*$)/m', '<li class="ml-4 list-disc">$1</li>', $text);
        $text = preg_replace('/^- (.*$)/m', '<li class="ml-4 list-disc">$1</li>', $text);

        // Ordered lists
        $text = preg_replace('/^\d+\. (.*$)/m', '<li class="ml-4 list-decimal">$1</li>', $text);

        // Links
        $text = preg_replace('/\[(.*?)\]\((.*?)\)/', '<a href="$2" class="text-blue-600 underline hover:text-blue-800" target="_blank" rel="noopener">$1</a>', $text);

        // Paragraphs / newlines
        $paragraphs = explode("\n\n", $text);
        $output = [];
        foreach ($paragraphs as $para) {
            $para = trim($para);
            if ($para === '') continue;
            if (str_starts_with($para, '<h') || str_starts_with($para, '<pre') || str_starts_with($para, '<blockquote') || str_starts_with($para, '<li')) {
                $output[] = $para;
            } else {
                $output[] = '<p class="my-2 leading-relaxed text-slate-700">' . nl2br($para) . '</p>';
            }
        }

        return implode("\n", $output);
    }
}
