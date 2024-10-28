<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Priyanshu Dave</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lexend', sans-serif;
            margin: 0;
            padding: 0;
            margin-bottom: 10px;
            background: #f3f6f9;
        }

        /* Profile Header */
        .profile-header {
            width: 100%;
            height: 200px;
            background-color: #0073b1;
            /* background-color: red; */
            position: relative;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            background-color: white;
            border: 4px solid white;
            position: absolute;
            left: 20px;
            top: 130px;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Profile Details */
        .profile-info {
            margin-left: 200px;
            margin-top: 30px;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .profile-info h1 {
            font-size: 2em;
            color: #333;
            margin: 0;
        }

        .profile-info .job-title {
            color: #555;
            font-size: 1.2em;
            margin-top: 5px;
        }

        .profile-info p {
            color: #666;
            margin: 5px 0;
        }

        .action-buttons {
            margin-top: 15px;
        }

        .action-buttons button {
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            background-color: #0073b1;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .action-buttons button:hover {
            background-color: #005582;
        }

        /* Section Styles */
        .section {
            margin-top: 20px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            font-size: 1.5em;
            color: #0073b1;
            margin-bottom: 10px;
        }

        .section p {
            color: #333;
            line-height: 1.5;
        }

        /* Skills Badges */
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-badge {
            padding: 8px 12px;
            background-color: #0073b1;
            color: #fff;
            border-radius: 15px;
            font-size: 0.9em;
        }

        /* Progress Bars for Skills */
        .skill-bar-container {
            margin-bottom: 10px;
        }

        .skill-bar {
            background-color: #ddd;
            border-radius: 8px;
            overflow: hidden;
            height: 20px;
            width: 100%;
            margin-top: 5px;
        }

        .skill-bar-fill {
            height: 100%;
            text-align: right;
            padding-right: 10px;
            color: #fff;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        /* Skill Levels */
        .laravel { width: 90%; background-color: #e67e22; }
        .magento { width: 85%; background-color: #d35400; }
        .php { width: 80%; background-color: #3498db; }
        .html { width: 75%; background-color: #e74c3c; }
        .css { width: 70%; background-color: #2ecc71; }
        .javascript { width: 60%; background-color: #f1c40f; }

    </style>
</head>
<body>

<div class="profile-header"></div>

<div class="profile-picture">
    <img src="{{ asset('assets/images/profile.png') }}" alt="Profile Picture">
</div>

<div class="profile-info">
    <h1>Priyanshu Dave</h1>
    <p class="job-title">Software Developer | Laravel & Magento Enthusiast</p>
    <p>Location: Anytown, India</p>
    <div class="action-buttons">
        <button>Connect</button>
        <button>Message</button>
    </div>
</div>

<div class="section">
    <h2>About</h2>
    <p>I’m a passionate software developer with experience in Laravel and Magento. I believe in the power of technology to bring positive changes and am dedicated to continuous improvement and learning.</p>
</div>

<div class="section">
    <h2>Experience</h2>
    <p><strong>Software Developer at XYZ Company</strong></p>
    <p>January 2022 - Present</p>
    <p>Developed and maintained web applications using Laravel and Magento.</p>
</div>

<div class="section">
    <h2>Education</h2>
    <p>Bachelor's in Computer Science from ABC University</p>
</div>

<div class="section">
    <h2>Skills</h2>
    <div class="skills-container">
        <span class="skill-badge">Laravel</span>
        <span class="skill-badge">Magento</span>
        <span class="skill-badge">PHP</span>
        <span class="skill-badge">HTML</span>
        <span class="skill-badge">CSS</span>
        <span class="skill-badge">JavaScript</span>
    </div>
    <div class="skill-bar-container">
        <label>Laravel</label>
        <div class="skill-bar">
            <div class="skill-bar-fill laravel">90%</div>
        </div>
        <label>Magento</label>
        <div class="skill-bar">
            <div class="skill-bar-fill magento">85%</div>
        </div>
        <label>PHP</label>
        <div class="skill-bar">
            <div class="skill-bar-fill php">80%</div>
        </div>
        <label>HTML</label>
        <div class="skill-bar">
            <div class="skill-bar-fill html">75%</div>
        </div>
        <label>CSS</label>
        <div class="skill-bar">
            <div class="skill-bar-fill css">70%</div>
        </div>
        <label>JavaScript</label>
        <div class="skill-bar">
            <div class="skill-bar-fill javascript">60%</div>
        </div>
    </div>
</div>

<div class="section">
    <h2>Projects</h2>
    <p><strong>Self-Improvement Archive</strong> - A repository consolidating learnings in Laravel and self-development. [<a href="#">View Project</a>]</p>
    <p><strong>Magento Customization</strong> - Custom features for a Magento 2 platform. [<a href="#">View Project</a>]</p>
</div>

<div class="section">
    <h2>Interests</h2>
    <p>Coding, Blogging, Open Source Contribution, AI & Machine Learning, Web Development</p>
</div>

</body>
</html>
