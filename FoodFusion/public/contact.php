<?php include __DIR__ . '/../config/auth_controller.php'; ?>

<?php
$contact_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['auth_action']) && $_POST['auth_action'] === 'submit_contact') {
    require_once __DIR__ . '/../config/db.php';

    $senderName = trim($_POST['sender_name'] ?? '');
    $senderEmail = trim($_POST['sender_email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $messageText = trim($_POST['message_text'] ?? '');

    if (!$senderName || !$senderEmail || !$subject || !$messageText) {
        $contact_error = 'All fields are required. Please fill out the entire form.';
    } elseif (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
        $contact_error = 'Please enter a valid email address.';
    } else {
        try {
            $pdo = Database::getInstance()->getConnection();
            $stmt = $pdo->prepare(
                'INSERT INTO contact_messages (sender_name, sender_email, subject, message_text, status)
                 VALUES (:sender_name, :sender_email, :subject, :message_text, "unread")'
            );
            $stmt->execute([
                ':sender_name' => $senderName,
                ':sender_email' => $senderEmail,
                ':subject' => $subject,
                ':message_text' => $messageText,
            ]);

            $_SESSION['flash_success'] = 'Message Sent Successfully! Thank you for your feedback.';
            header('Location: contact.php');
            exit;
        } catch (PDOException $e) {
            error_log('Database exception in submit_contact: ' . $e->getMessage());
            $contact_error = 'An internal database exception occurred. Please try again later.';
        }
    }
}
?>

<?php $activePage = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FoodFusion</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'components/header.php'; ?>

<main class="site-container contact-page-wrapper">
    <div class="contact-intro">
        <h1>Contact Us</h1>
    </div>

    <div class="contact-split-container">
        <div class="contact-info-column">
            <h2>Get In Touch</h2>
            <p>We review all entries within 24 hours. Whether you have a question about features, pricing, need a demo, or anything else, our team is ready to answer all your questions.</p>
            <p><strong>Email:</strong> <a href="mailto:support@foodfusion.com">support@foodfusion.com</a></p>
            <p><strong>Social:</strong> <a href="#">@FoodFusion</a></p>
            <p><strong>Office:</strong> 123 Culinary Avenue, Suite 400, San Francisco, CA 94105</p>
        </div>

        <div class="contact-form-column">
            <?php if (isset($_SESSION['flash_success'])): ?>
                <div class="flash-popup-toast"><?php echo $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?></div>
            <?php endif; ?>

            <?php if (isset($contact_error) && $contact_error): ?>
                <div class="form-error-message"><?php echo htmlspecialchars($contact_error); ?></div>
            <?php endif; ?>

            <form method="POST" action="contact.php" class="linear-contact-form">
                <input type="hidden" name="auth_action" value="submit_contact">

                <div class="form-row">
                    <label class="form-label" for="senderName">Name</label>
                    <input type="text" id="senderName" name="sender_name" class="form-control" placeholder="Enter your full name" required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="senderEmail">Email</label>
                    <input type="email" id="senderEmail" name="sender_email" class="form-control" placeholder="Enter your email address" required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="What is your inquiry regarding?" required>
                </div>

                <div class="form-row">
                    <label class="form-label" for="messageText">Message</label>
                    <textarea id="messageText" name="message_text" rows="6" class="form-control" placeholder="Write your message here..." required></textarea>
                </div>

                <button type="submit" class="btn-submit-contact">Submit</button>
            </form>
        </div>
    </div>
</main>

<?php include 'components/footer.php'; ?>
</body>
</html>
