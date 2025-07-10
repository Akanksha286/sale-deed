<!DOCTYPE html>
<html>
<head>
    <title>Sale Deed Form</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #4e54c8;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #333;
        }

        input[type="text"], input[type="date"], input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="date"], input[type="number"]:focus {
            border-color: #4e54c8;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background: #4e54c8;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #3b40a0;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Sale Deed Form</h2>
        <form action="generate_pdf.php" method="post">
            <label>Full Name:</label>
            <input type="text" name="name" required>

            <label>Father's Name:</label>
            <input type="text" name="father_name" required>

            <label>Property Size (sq.ft.):</label>
            <input type="number" name="property_size" required>

            <label>Sale Amount (INR):</label>
            <input type="number" name="sale_amount" required>

            <label>Date:</label>
            <input type="date" name="date" required>

            <input type="submit" value="Generate PDF">
        </form>
    </div>
</body>
</html>
