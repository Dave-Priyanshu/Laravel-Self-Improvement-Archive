<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">

    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Lexend, sans-serif;
            background: linear-gradient(to right, #ffffff, #e3f2fd);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 50px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
            color: #1976d2;
        }

        .link-card {
            background: rgba(240, 240, 240, 0.8);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 30px;
            transition: transform 0.3s, background 0.3s;
            display: inline-block;
            width: 200px;
            text-align: center;
        }

        .link-card:hover {
            transform: translateY(-5px);
            background: rgba(240, 240, 240, 0.9);
        }

        .icon {
            font-size: 50px;
            margin-bottom: 15px;
            color: #1976d2;
        }

        a {
            text-decoration: none;
            color: inherit;
            font-size: 1.2em;
            display: block;
            height: 100%;
        }

        /* Styled About section */
        .about {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            background: #1976d2;
            color: white;
            padding: 10px 15px;
            border-radius: 20px;
            transition: background 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about:hover {
            background: #155b9a;
        }

        .about i {
            font-size: 20px;
            margin-right: 8px;
        }

        /* Dropdown styling */
        .about-dropdown {
            display: none;
            position: absolute;
            top: 50px;
            right: 0;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 250px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            z-index: 10;
            text-align: left;
        }

        .about-dropdown p {
            margin: 0;
            /* font-weight: bold; */
            color: #1976d2;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .social-links, .contact-info, .resume {
            margin-top: 10px;
            padding: 0
        }

        .social-links a, .contact-info a, .resume a {
            display: flex;
            align-items: center;
            padding: 8px 0;
            text-decoration: none;
            color: #1976d2;
            transition: background 0.3s ease, color 0.3s ease, box-shadow 0.3s ease; /* Updated transition */
            font-size: 1em;
        }

        .social-links a:hover, .contact-info a:hover {
            background: #f0f0f0;
            border-radius: 5px;
            padding: 8px;
            color: #155b9a; /* Change text color on hover for better contrast */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); /* Added box shadow */
        }

        .social-links i, .contact-info i,.resume i {
            margin-right: 10px;
            /* color: #1976d2; */
            color: #1976d2;
        }

        .social-links img {
            width: 20px;
            margin-right: 10px;
        }
        .email-icon {
            width: 20px;  /* Set a specific width for the icon */
            height: 20px; /* Set a specific height for the icon */
            margin-right: 8px; /* Add some space between the icon and text */
            vertical-align: middle; /* Aligns the icon with the text */
        }


        /* Notification styling */
        .notification {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #4caf50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .notification.show {
            display: block;
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Portal</h1>
        <div class="link-card">
            <a href="{{ route('user.index') }}">
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                Users
            </a>
        </div>
        <div class="link-card">
            <a href="{{ route('animals.index') }}">
                <div class="icon">
                    <i class="fas fa-paw"></i>
                </div>
                Animals
            </a>
        </div>
        <div class="link-card">
            <a href="{{ route('queryBuilderExample') }}">
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                Query Builder
            </a>
        </div>
    </div>

    <!-- About Section -->
    <div class="about" id="about-btn">
        <i class="fas fa-user-circle"></i>
        <span>About</span>
        <div class="about-dropdown" id="about-dropdown">
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
            {{-- <div class="resume contact-info">
                <a href="javascript:void(0);" onclick="writeText()">
                    <i class="fas fa-file-pdf"></i> Link to the Resume
                </a>
            </div> --}}
            <div class="contact-info">
                <a href="javascript:void(0);" onclick="writeText()">
                    <img src="{{ asset('assets/images/cv.png') }}" alt="CV Icon" class="email-icon"> Link to the Resume
                </a>
            </div>


            {{-- <div class="contact-info">
                <a href="javascript:void(0);" onclick="copyEmail()">
                    <i class="fas fa-envelope"></i> priyanshu@example.com
                </a>
            </div> --}}
            <div class="contact-info">
                <a href="javascript:void(0);" onclick="copyEmail()">
                    <img src="{{ asset('assets/images/gmail.png') }}" alt="Email Icon" class="email-icon"> priyanshu@example.com
                </a>
            </div>
            
        </div>
    </div>

    <div class="notification" id="resume-notification">
        Resume link clicked!
    </div>

    <!-- Notification Pop-up -->
    <div class="notification" id="notification">
        Email copied to clipboard!
    </div>

    <script>
        document.getElementById('about-btn').addEventListener('click', function(event) {
            event.stopPropagation();
            const aboutDropdown = document.getElementById('about-dropdown');
            aboutDropdown.style.display = aboutDropdown.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', function(event) {
            const aboutDropdown = document.getElementById('about-dropdown');
            if (aboutDropdown.style.display === 'block' && !event.target.closest('.about')) {
                aboutDropdown.style.display = 'none';
            }
        });

        function copyEmail() {  
            const email = "priyanshu@example.com";
            navigator.clipboard.writeText(email).then(() => {
                const notification = document.getElementById('notification');
                notification.classList.add('show');
                setTimeout(() => {
                    notification.classList.remove('show');
                }, 2000);
            });
        }

        function writeText() {
        const notification = document.getElementById('resume-notification');
        notification.classList.add('show');
        setTimeout(() => {
            notification.classList.remove('show');
        }, 2000);
    }
    </script>
</body>
</html>
