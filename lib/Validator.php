<?php
/**
 * Validation and Sanitization utilities for Black Madhav
 */

class Validator {
    /**
     * Validate Contact Form submission matching React validation logic:
     * - Name, Email, Phone, Project Details must not be empty
     * - Phone number must be exactly 10 digits
     */
    public static function validateContact(array $data): array {
        $errors = [];

        $name = trim($data['name'] ?? '');
        $email = trim($data['email'] ?? '');
        $phone = trim($data['phone'] ?? '');
        $projectDetails = trim($data['projectDetails'] ?? $data['project_details'] ?? '');

        if ($name === '' || $email === '' || $phone === '' || $projectDetails === '') {
            $errors[] = "Please fill in all fields before submitting.";
        }

        // Digits check
        $digits = preg_replace('/\D/', '', $phone);
        if (strlen($digits) !== 10) {
            $errors[] = "Mobile number must be exactly 10 digits.";
        }

        if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Please enter a valid email address.";
        }

        return [
            'isValid' => empty($errors),
            'errors' => $errors,
            'firstError' => $errors[0] ?? null
        ];
    }

    /**
     * Validate Blog Post submission matching React validation logic:
     * - Title, Excerpt, Content must not be empty
     */
    public static function validateBlogPost(array $data): array {
        $errors = [];

        $title = trim($data['title'] ?? '');
        $excerpt = trim($data['excerpt'] ?? '');
        $content = trim($data['content'] ?? '');

        if ($title === '' || $excerpt === '' || $content === '') {
            $errors[] = "Title, excerpt, and content are required.";
        }

        return [
            'isValid' => empty($errors),
            'errors' => $errors,
            'firstError' => $errors[0] ?? null
        ];
    }

    public static function sanitizeString(string $input): string {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }
}
