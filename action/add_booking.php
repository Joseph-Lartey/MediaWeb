<?php
// Include database connection file
include "../settings/connection.php";

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);  // New phone number field
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare an SQL statement to insert the data
    $query = "INSERT INTO contact (name, email, phone_number, service_of_interest, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $name, $email, $phone, $service, $message);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        // Prepare the email
       

        try {

            require '../vendor/autoload.php';
            $mail = new PHPMailer(true);

            // Server settings
            $mail->isSMTP();                                      // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                       // Set the SMTP server to send through
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'cliffco24@gmail.com';         // SMTP username
            $mail->Password = 'nzqo jtlf kuau xtus';              // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption
            $mail->Port = 587;                                    // TCP port to connect to

            // Recipients
            $mail->setFrom('cliffco24@gmail.com', 'Lartey Studios');
            $mail->addAddress('juconzylartey@gmail.com'); // Add the admin's email

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'New Booking Request';
            $mail->Body    = "<div style='font-family: Poppins, Arial, sans-serif; color: #333; line-height: 1.6;'>
                                <h2 style='color: #00AEED; text-align: center;'>New Booking Request</h2>
                                <p style='font-size: 16px;'>Hello Admin,</p>
                                <p style='font-size: 16px;'>You have received a new booking request with the following details:</p>
                                <table style='width: 100%; border-collapse: collapse;'>
                                    <tr>
                                        <td style='padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9;'><strong>Name:</strong></td>
                                        <td style='padding: 8px; border: 1px solid #ddd;'>$name</td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9;'><strong>Email:</strong></td>
                                        <td style='padding: 8px; border: 1px solid #ddd;'>$email</td>
                                    </tr>
                                     <tr>
                                        <td style='padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9;'><strong>Email:</strong></td>
                                        <td style='padding: 8px; border: 1px solid #ddd;'>$phone</td>
                                    </tr>
                                    
                                    <tr>
                                        <td style='padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9;'><strong>Service:</strong></td>
                                        <td style='padding: 8px; border: 1px solid #ddd;'>$service</td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9;'><strong>Message:</strong></td>
                                        <td style='padding: 8px; border: 1px solid #ddd;'>$message</td>
                                    </tr>
                                </table>
                                <p style='font-size: 16px;'>Please reach out to the client to confirm the booking.</p>
                                <p style='font-size: 16px;'>Best regards,<br>Lartey Studios Team</p>
                              </div>";

            $mail->send();
            // Redirect to a thank you or success page
            header("Location: ../view/contact.php?msg=Booking request submitted successfully");
        } catch (Exception $e) {
            // Redirect back with an error message if email sending fails
            header("Location: ../view/contact.php?msg=Booking submitted but failed to send email: {$mail->ErrorInfo}");
        }
    } else {
        // Redirect back with an error message
        header("Location: ../view/contact.php?msg=Error submitting your booking request");
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted via POST, redirect back to the form
    header("Location: ../view/contact.php");
    exit();
}
?>
