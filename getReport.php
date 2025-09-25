<?php

include "config.php";
$name = "";
$course = "";
$course_id = "";
$date = "";

if (isset($_POST['name']) && isset($_POST['course']) && isset($_POST['course_id']) && isset($_POST['date'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $course_id = $_POST['course_id'];
    $date = $_POST['date'];
}

function generateRandomNumber()
{
    $numbers = range(10, 90, 10);
    return $numbers[array_rand($numbers)];
}

$courseProgress = generateRandomNumber();
$lastQuizScore = generateRandomNumber();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Report</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        h2 {
            color: #333;
        }

        .logo {
            width: 100px;
            /* Adjust this size as needed */
            margin: 0 auto 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        td {
            background-color: #fff;
        }

        .message {
            margin: 20px 0;
            font-size: 18px;
            color: #333;
            text-align: center;
        }

        .download-btn {
            padding: 10px 20px;
            background-color: #DF2771;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            margin-top: 20px;
        }

        .download-btn:hover {
            background-color: #FA4B37;
        }
    </style>
</head>

<body>

    <h2>Final Report</h2>

    <!-- Report content to be downloaded as PDF -->
    <div id="report-content">
        <!-- Logo image at the top of the table -->
        <img src="images/icon/New logo.png" alt="Logo" class="logo">

        <table>
            <tr>
                <th>Variable</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo htmlspecialchars($name); ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo htmlspecialchars($course); ?></td>
            </tr>
            <tr>
                <td>Course ID</td>
                <td><?php echo htmlspecialchars($course_id); ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><?php echo htmlspecialchars($date); ?></td>
            </tr>
            <tr>
                <td>Current Course Progress</td>
                <td><?php echo $courseProgress; ?>%</td>
            </tr>
            <tr>
                <td>Last Quiz Score</td>
                <td><?php echo $lastQuizScore; ?>%</td>
            </tr>
        </table>

        <p class="message">Best wishes and keep quizzing!</p>
    </div>

    <!-- Button to download PDF -->
    <button class="download-btn" onclick="downloadPDF()">Download PDF</button>

    <script>
        function downloadPDF() {
            const element = document.getElementById('report-content');

            const options = {
                margin: 0.5,
                filename: 'Final_Report.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            html2pdf().set(options).from(element).save();
        }
    </script>
</body>

</html>