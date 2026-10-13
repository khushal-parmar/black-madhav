<?php
/**
 * Database and Persistence Layer for Black Madhav
 * Supports SQLite (PDO) with JSON fallback for full portability
 */

require_once __DIR__ . '/../config/config.php';

class Database {
    private static ?PDO $pdo = null;

    public static function getConnection(): PDO {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO('sqlite:' . DB_FILE);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                self::initTables();
            } catch (PDOException $e) {
                // If SQLite PDO extension fails or error occurs, log and rethrow
                error_log("Database connection error: " . $e->getMessage());
                throw $e;
            }
        }
        return self::$pdo;
    }

    private static function initTables(): void {
        $db = self::$pdo;
        
        // Contact Submissions table
        $db->exec("
            CREATE TABLE IF NOT EXISTS contact_submissions (
                id INTEGER PRIMARY KEY,
                name TEXT NOT NULL,
                business_name TEXT DEFAULT '',
                phone TEXT NOT NULL,
                email TEXT NOT NULL,
                service TEXT DEFAULT 'Web Development',
                project_details TEXT NOT NULL,
                submitted_at TEXT NOT NULL
            )
        ");

        // Blog Posts table
        $db->exec("
            CREATE TABLE IF NOT EXISTS blog_posts (
                id INTEGER PRIMARY KEY,
                title TEXT NOT NULL,
                excerpt TEXT NOT NULL,
                content TEXT NOT NULL,
                image TEXT DEFAULT NULL,
                created_at TEXT NOT NULL,
                updated_at TEXT DEFAULT NULL
            )
        ");
    }

    // ================= CONTACT SUBMISSIONS ================= //

    public static function getContactSubmissions(): array {
        try {
            $db = self::getConnection();
            $stmt = $db->query("SELECT * FROM contact_submissions ORDER BY id DESC");
            $rows = $stmt->fetchAll();
            return array_map(function($row) {
                return [
                    'id' => (int)$row['id'],
                    'name' => $row['name'],
                    'businessName' => $row['business_name'],
                    'phone' => $row['phone'],
                    'email' => $row['email'],
                    'service' => $row['service'],
                    'projectDetails' => $row['project_details'],
                    'submittedAt' => $row['submitted_at'],
                ];
            }, $rows);
        } catch (Exception $e) {
            // Fallback to JSON
            if (file_exists(JSON_CONTACTS_FILE)) {
                $data = json_decode(file_get_contents(JSON_CONTACTS_FILE), true);
                return is_array($data) ? $data : [];
            }
            return [];
        }
    }

    public static function addContactSubmission(array $data): array {
        $id = $data['id'] ?? (int)round(microtime(true) * 1000);
        $name = trim($data['name'] ?? '');
        $businessName = trim($data['businessName'] ?? $data['business_name'] ?? '');
        $phone = trim($data['phone'] ?? '');
        $email = trim($data['email'] ?? '');
        $service = trim($data['service'] ?? 'Web Development');
        $projectDetails = trim($data['projectDetails'] ?? $data['project_details'] ?? '');
        $submittedAt = $data['submittedAt'] ?? date('c');

        $submission = [
            'id' => $id,
            'name' => $name,
            'businessName' => $businessName,
            'phone' => $phone,
            'email' => $email,
            'service' => $service,
            'projectDetails' => $projectDetails,
            'submittedAt' => $submittedAt
        ];

        try {
            $db = self::getConnection();
            $stmt = $db->prepare("
                INSERT INTO contact_submissions (id, name, business_name, phone, email, service, project_details, submitted_at)
                VALUES (:id, :name, :business_name, :phone, :email, :service, :project_details, :submitted_at)
            ");
            $stmt->execute([
                ':id' => $id,
                ':name' => $name,
                ':business_name' => $businessName,
                ':phone' => $phone,
                ':email' => $email,
                ':service' => $service,
                ':project_details' => $projectDetails,
                ':submitted_at' => $submittedAt
            ]);
        } catch (Exception $e) {
            error_log("SQLite insert error: " . $e->getMessage());
        }

        // Keep JSON in sync
        $existing = [];
        if (file_exists(JSON_CONTACTS_FILE)) {
            $existing = json_decode(file_get_contents(JSON_CONTACTS_FILE), true) ?: [];
        }
        array_unshift($existing, $submission);
        file_put_contents(JSON_CONTACTS_FILE, json_encode($existing, JSON_PRETTY_PRINT));

        return $submission;
    }

    // ================= BLOG POSTS ================= //

    public static function getBlogPosts(): array {
        try {
            $db = self::getConnection();
            $stmt = $db->query("SELECT * FROM blog_posts ORDER BY id DESC");
            $rows = $stmt->fetchAll();
            return array_map(function($row) {
                return [
                    'id' => (int)$row['id'],
                    'title' => $row['title'],
                    'excerpt' => $row['excerpt'],
                    'content' => $row['content'],
                    'image' => $row['image'],
                    'createdAt' => $row['created_at'],
                    'updatedAt' => $row['updated_at']
                ];
            }, $rows);
        } catch (Exception $e) {
            // Fallback to JSON
            if (file_exists(JSON_BLOG_FILE)) {
                $data = json_decode(file_get_contents(JSON_BLOG_FILE), true);
                return is_array($data) ? $data : [];
            }
            return [];
        }
    }

    public static function getBlogPostById(int $id): ?array {
        $posts = self::getBlogPosts();
        foreach ($posts as $post) {
            if ((int)$post['id'] === $id) {
                return $post;
            }
        }
        return null;
    }

    public static function addBlogPost(array $data): array {
        $id = $data['id'] ?? (int)round(microtime(true) * 1000);
        $title = trim($data['title'] ?? '');
        $excerpt = trim($data['excerpt'] ?? '');
        $content = trim($data['content'] ?? '');
        $image = $data['image'] ?? null;
        $createdAt = $data['createdAt'] ?? date('c');

        $post = [
            'id' => $id,
            'title' => $title,
            'excerpt' => $excerpt,
            'content' => $content,
            'image' => $image,
            'createdAt' => $createdAt,
            'updatedAt' => null
        ];

        try {
            $db = self::getConnection();
            $stmt = $db->prepare("
                INSERT INTO blog_posts (id, title, excerpt, content, image, created_at, updated_at)
                VALUES (:id, :title, :excerpt, :content, :image, :created_at, NULL)
            ");
            $stmt->execute([
                ':id' => $id,
                ':title' => $title,
                ':excerpt' => $excerpt,
                ':content' => $content,
                ':image' => $image,
                ':created_at' => $createdAt
            ]);
        } catch (Exception $e) {
            error_log("SQLite blog insert error: " . $e->getMessage());
        }

        // Keep JSON in sync
        $existing = [];
        if (file_exists(JSON_BLOG_FILE)) {
            $existing = json_decode(file_get_contents(JSON_BLOG_FILE), true) ?: [];
        }
        array_unshift($existing, $post);
        file_put_contents(JSON_BLOG_FILE, json_encode($existing, JSON_PRETTY_PRINT));

        return $post;
    }

    public static function updateBlogPost(int $id, array $data): ?array {
        $title = trim($data['title'] ?? '');
        $excerpt = trim($data['excerpt'] ?? '');
        $content = trim($data['content'] ?? '');
        $image = $data['image'] ?? null;
        $updatedAt = date('c');

        try {
            $db = self::getConnection();
            $stmt = $db->prepare("
                UPDATE blog_posts 
                SET title = :title, excerpt = :excerpt, content = :content, 
                    image = COALESCE(:image, image), updated_at = :updated_at
                WHERE id = :id
            ");
            $stmt->execute([
                ':id' => $id,
                ':title' => $title,
                ':excerpt' => $excerpt,
                ':content' => $content,
                ':image' => $image,
                ':updated_at' => $updatedAt
            ]);
        } catch (Exception $e) {
            error_log("SQLite blog update error: " . $e->getMessage());
        }

        // Sync with JSON
        if (file_exists(JSON_BLOG_FILE)) {
            $existing = json_decode(file_get_contents(JSON_BLOG_FILE), true) ?: [];
            foreach ($existing as &$p) {
                if ((int)$p['id'] === $id) {
                    $p['title'] = $title;
                    $p['excerpt'] = $excerpt;
                    $p['content'] = $content;
                    if ($image !== null) {
                        $p['image'] = $image;
                    }
                    $p['updatedAt'] = $updatedAt;
                    break;
                }
            }
            file_put_contents(JSON_BLOG_FILE, json_encode($existing, JSON_PRETTY_PRINT));
        }

        return self::getBlogPostById($id);
    }

    public static function deleteBlogPost(int $id): bool {
        try {
            $db = self::getConnection();
            $stmt = $db->prepare("DELETE FROM blog_posts WHERE id = :id");
            $stmt->execute([':id' => $id]);
        } catch (Exception $e) {
            error_log("SQLite blog delete error: " . $e->getMessage());
        }

        // Sync with JSON
        if (file_exists(JSON_BLOG_FILE)) {
            $existing = json_decode(file_get_contents(JSON_BLOG_FILE), true) ?: [];
            $filtered = array_values(array_filter($existing, function($p) use ($id) {
                return (int)$p['id'] !== $id;
            }));
            file_put_contents(JSON_BLOG_FILE, json_encode($filtered, JSON_PRETTY_PRINT));
        }

        return true;
    }
}
