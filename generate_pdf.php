<?php
// require 'dompdf/autoload.inc.php';
require 'vendor/autoload.php';

use Dompdf\Dompdf;

// Get POST data
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$property_size = $_POST['property_size'];
$sale_amount = $_POST['sale_amount'];
$date = $_POST['date'];

// Load template
$template = file_get_contents("template.html");

// Replace placeholders
$placeholders = [
    '{{name}}' => htmlspecialchars($name),
    '{{father_name}}' => htmlspecialchars($father_name),
    '{{property_size}}' => htmlspecialchars($property_size),
    '{{sale_amount}}' => htmlspecialchars($sale_amount),
    '{{date}}' => htmlspecialchars($date),
];

foreach ($placeholders as $key => $value) {
    $template = str_replace($key, $value, $template);
}

// Initialize dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($template);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Output PDF
$dompdf->stream("sale_deed.pdf", ["Attachment" => 1]);
?>
