<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("https://i.pinimg.com/564x/e2/bd/9d/e2bd9d02fe736ac633db47c7b57ced35.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
        }

        nav a:hover {
            background-color: #555;
        }

        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Transparent white background */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Improved box shadow */
        }

        .content h2 {
            color: #333; /* Dark text color for headings */
        }

        .content p {
            color: #555; /* Slightly darker text color for paragraphs */
        }
    </style>
</head>
<body>
    <?php include 'navbar.html'; ?>
    <div class="content">
        <h2>Welcome to our Property Stolen Information Center</h2>
        <p>
            We understand the distress caused by property theft. Our mission is to provide you with information, resources, and support to deal with such unfortunate events. Stay informed, report incidents, and get in touch with us for assistance.
        </p>
        <!-- Include your content here -->
    </div>
</body>
</html>
