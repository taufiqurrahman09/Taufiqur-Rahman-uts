<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangani data form yang dikirim
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Cek jika ada input kosong
    if (empty($name) || empty($email)) {
        echo "Nama dan email harus diisi!";
    } else {
        // Menampilkan hasil pengolahan data
        echo "<h2>Terima kasih, " . $name . "!</h2>";
        echo "<p>Email Anda: " . $email . "</p>";
    }
}
?>
