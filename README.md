# 🧾 Sale Deed PDF Generator

This project is a simple PHP-based application that allows users to fill a form with personal and property details, and generate a downloadable Sale Deed PDF.

---

## 🚀 Features

- Collects user details: Full Name, Father's Name, Property Size, Sale Amount, and Date
- Inserts form data into an HTML template
- Converts the template into a PDF using [Dompdf](https://github.com/dompdf/dompdf)
- Allows instant PDF download after form submission

---

## 📁 Folder Structure

project/
│
├── index.php # Form page
├── generate_pdf.php # PDF generation logic
├── template.html # HTML template with placeholders
├── vendor/dompdf # Dompdf library folder (or use Composer)
├── README.md # Project documentation
├── composer.lock
└── composer.json

## ⚙️ Requirements

- PHP 7.1 or higher
- A local server (XAMPP, WAMP, MAMP, etc.)
- [Dompdf library](https://github.com/dompdf/dompdf)

---

## 📥 Installation

### Option 1: Manual

1. Download Dompdf from GitHub: https://github.com/dompdf/dompdf
2. Extract the `dompdf` folder and place it inside your project directory.

### Option 2: Composer

If you are using Composer:

```bash
composer require dompdf/dompdf

Update generate_pdf.php to:

php
Copy
Edit
require 'vendor/autoload.php';