<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="png" href="images/icon/favicon.png">
    <title>Report</title>
    <link rel="stylesheet" type="text/css" href="subjects/quizStyle.css">
    <script type="text/javascript" src="script.js"></script>
    <style>
        /* Form Styling */
        .title form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            display: grid;
            grid-gap: 15px;
            justify-items: center;
            width: 300px;
            margin: auto;
            font-family: 'Open Sans', sans-serif;
            color: #2E3D49;
        }

        .title form label {
            font-weight: 600;
            font-size: 14px;
            color: #DF2771;
            align-self: start;
        }

        .title form input[type="text"],
        .title form input[type="date"],
        .title form select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: 0.3s;
            font-family: 'Open Sans', sans-serif;
        }

        .title form input[type="text"]:focus,
        .title form input[type="date"]:focus,
        .title form select:focus {
            border-color: #DF2771;
            box-shadow: 0 0 8px rgba(223, 39, 113, 0.3);
        }

        .title form button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: #fff;
            background: linear-gradient(to right, #FA4B37, #DF2771);
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }

        .title form button:hover {
            opacity: 0.9;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <header>
        <div class="nav" id="nav">
            <div id="learned-logo">
                <a href="index.html"><img src="images/icon/New logo.png" style="width: 100px;"></a>
            </div>
            <div class="switch-tab" id="switch-tab" onclick="switchTAB()"><img src="../images/icon/menu.png"></div>
            <ul id="list-switch">
                <li><a href="jee.html"><img src="images/courses/d1.png" class="icon">JEE</a></li>
                <li><a href="gate.html"><img src="images/courses/paper.png" class="icon">GATE</a></li>
                <li><a href="computer_courses.html"><img src="images/courses/computer.png" class="icon">Computer Courses</a></li>
                <li><a href="computer_courses.html#data"><img src="images/courses/data.png" class="icon">Data Structures</a></li>
                <li><a href="computer_courses.html#algo"><img src="images/courses/algo.png" class="icon">Algorithm</a></li>
            </ul>
            <div class="search" id="search-switch">
                <input type="search" placeholder="Search" class="srch"><button id="srchbtn"><img src="images/icon/search.png"></button>
            </div>
        </div>
    </header>


    <!-- Form Section -->
    <div class="title" id="title">
        <form action="getReport.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="course">Course Details:</label>
            <select id="course" name="course">
                <option value="jee">JEE</option>
                <option value="gate">GATE</option>
                <option value="cs">Computer Science</option>
            </select>

            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <button type="submit">Get Report</button>
        </form>
    </div>

    <script type="text/javascript" src="script.js"></script>
</body>

</html>