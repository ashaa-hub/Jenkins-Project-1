<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/koneksi.php';

class KoneksiTest extends TestCase {

    public function test_database_connection() {
        $conn = koneksiDatabase(); // Pastikan fungsi sesuai di file kamu
        $this->assertNotNull($conn);
    }
}
