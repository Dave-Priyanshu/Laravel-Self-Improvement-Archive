<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ffffff, #e3f2fd); /* White to light blue gradient */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333; /* Darker text for readability */
            position: relative; /* Added for positioning the About section */
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.9); /* Slightly opaque background */
            border-radius: 10px;
            padding: 50px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
            color: #1976d2; /* Blue color for the heading */
        }

        .link-card {
            background: rgba(240, 240, 240, 0.8); /* Light card background */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 30px;
            transition: transform 0.3s, background 0.3s;
            display: inline-block;
            width: 200px;
            text-align: center; /* Center text inside the card */
        }

        .link-card:hover {
            transform: translateY(-5px);
            background: rgba(240, 240, 240, 0.9); /* Slightly darker on hover */
        }

        .icon {
            font-size: 50px; /* Increased icon size */
            margin-bottom: 15px;
            color: #1976d2; /* Blue color for icons */
        }

        a {
            text-decoration: none;
            color: inherit; /* Inherit color from parent element */
            font-size: 1.2em;
            display: block; /* Make anchor tag block-level */
            height: 100%; /* Fill the entire card */
        }

        /* About section styles */
        .about {
            position: absolute; /* Position the About section at the top right */
            top: 20px;
            right: 20px;
            cursor: pointer; /* Change cursor to pointer for clickable icon */
            display: flex;
            align-items: center;
        }

        .about-dropdown {
            display: none; /* Initially hidden */
            position: absolute;
            top: 30px; /* Position dropdown below the icon */
            right: 0;
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 10; /* Ensure dropdown appears above other content */
        }

        .about-dropdown ul {
            list-style: none; /* Remove bullet points */
            padding: 0; /* Remove default padding */
            margin: 0; /* Remove default margin */
        }

        .about-dropdown li {
            margin: 5px 0; /* Spacing between items */
        }

        .about-dropdown li a {
            display: flex; /* Use flexbox for icon and text */
            align-items: center;
            padding: 5px; /* Add padding for better spacing */
            text-decoration: none; /* Remove underline */
            color: #1976d2; /* Link color */
            transition: background 0.2s; /* Smooth background transition */
        }

        .about-dropdown li a:hover {
            background: rgba(240, 240, 240, 0.5); /* Highlight on hover */
        }

        .social-links {
            margin-top: 10px;
            text-align: left; /* Align social links to the left */
        }

        .social-links a {
            display: flex; /* Use flexbox for icon and text */
            align-items: center;
            margin: 5px 0;
        }

        .social-links i {
            margin-right: 10px; /* Spacing between icon and text */
            color: #1976d2; /* Icon color */
        }

        .social-links img {
            width: 20px; /* Set a fixed width for icons */
            margin-right: 10px; /* Spacing between icon and text */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Portal</h1>
        <div class="link-card">
            <a href="{{ route('user.index') }}">
                <div class="icon">
                    <i class="fas fa-users"></i>  <!-- User Icon -->
                </div>
                Users
            </a>
        </div>
        <div class="link-card">
            <a href="{{ route('animals.index') }}">
                <div class="icon">
                    <i class="fas fa-paw"></i>  <!-- Animal Icon -->
                </div>
                Animals
            </a>
        </div>
        <div class="link-card">
            <a href="{{ route('queryBuilderExample') }}">
                <div class="icon">
                    <i class="fas fa-database"></i>  <!-- Database Icon -->
                </div>
                Query Builder
            </a>
        </div>
    </div>

    <!-- About Section -->
    <div class="about">
        <i class="fas fa-user-circle" style="font-size: 20px;"></i> <!-- Different About Icon -->
        <span style="margin-left: 5px;">About</span>
        <div class="about-dropdown">
            <p>Hello, myself <strong>Priyanshu Dave</strong>, hope you all are vibing!</p>
            <ul class="social-links">
                <li>
                    <a href="https://instagram.com/yourusername" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"> Instagram
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/in/yourusername" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Linkedin_icon.svg" alt="LinkedIn"> LinkedIn
                    </a>
                </li>
                <li>
                    <a href="https://github.com/yourusername" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub"> GitHub
                    </a>
                </li>
                <li>
                    <a href="https://notion.so/yourusername" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Notion_logo.svg" alt="Notion"> Notion
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('click', function(event) {
            const aboutDropdown = document.querySelector('.about-dropdown');
            const aboutSection = document.querySelector('.about');
            if (!aboutSection.contains(event.target)) {
                aboutDropdown.style.display = 'none'; // Hide dropdown if clicked outside
            }
        });

        // Show the dropdown when hovering over the about section
        const about = document.querySelector('.about');
        about.addEventListener('mouseenter', () => {
            document.querySelector('.about-dropdown').style.display = 'block';
        });
        about.addEventListener('mouseleave', () => {
            document.querySelector('.about-dropdown').style.display = 'none';
        });

        // Keep the dropdown open when hovering over the dropdown
        const dropdown = document.querySelector('.about-dropdown');
        dropdown.addEventListener('mouseenter', () => {
            dropdown.style.display = 'block';
        });
        dropdown.addEventListener('mouseleave', () => {
            dropdown.style.display = 'none';
        });
    </script>
</body>
</html>
