<?php
// 1. Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // 2. Safely check if a radio button was selected
    if (isset($_POST['contact_method'])) {
        $selected_method = htmlspecialchars($_POST['contact_method']);
        echo "<p style='color: green;'><strong>Success:</strong> You selected: " . $selected_method . "</p>";
    } else {
        echo "<p style='color: red;'><strong>Error:</strong> Please select a contact method.</p>";
    }
}
?>