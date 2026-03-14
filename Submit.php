<?php
// config.php me sirf connection hona chahiye, koi echo nahi
$conn = mysqli_connect("localhost", "root", "", "g7_database");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert query (subject remove kar diya kyunki form me nahi hai)
    $sql = "INSERT INTO contact_messages (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        // JS alert + redirect
        echo "<script>
              alert('Message sent successfully!');
              window.location.href='contact.html';
              </script>";
        exit(); // Ye ensure karta hai ke baki PHP code execute na ho
    } else {
        echo "DB Error: " . mysqli_error($conn);
    }
}
?>
