<!DOCTYPE html>
<html>
<head>
  <title>Student Report</title>
  <style>

    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }

    .container h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="email"],
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group .error-msg {
      color: red;
      margin-top: 5px;
    }

    .form-group .success-msg {
      color: green;
      margin-top: 5px;
    }

    .form-group button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .report {
      margin-top: 30px;
    }

    .report h2 {
      text-align: center;
    }

    .report-table {
      width: 100%;
      border-collapse: collapse;
    }

    .report-table th,
    .report-table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .grade {
      font-weight: bold;
    }


  </style>
  
</head>
<body>
  <div class="container">
    <h2>Student Report</h2>

    <?php
    // Function to calculate grade based on percentage
    function calculateGrade($percentage) {
      if ($percentage >= 90) {
        return 'A+';
      } else if ($percentage >= 80) {
        return 'A';
      } else if ($percentage >= 70) {
        return 'B';
      } else if ($percentage >= 60) {
        return 'C';
      } else if ($percentage >= 50) {
        return 'D';
      } else {
        return 'F';
      }
    }

    // Retrieve form data
    $studentId = $_POST['studentId'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $batch = $_POST['batch'];
    $email = $_POST['email'];
    $english = $_POST['english'];
    $hindi = $_POST['hindi'];
    $math = $_POST['math'];
    $science = $_POST['science'];
    $history = $_POST['history'];
    $geography = $_POST['geography'];
    $remarks = $_POST['remarks'];

    // Calculate total marks and percentage
    $totalMarks = $english + $hindi + $math + $science + $history + $geography;
    $percentage = ($totalMarks / 600) * 100;
    $grade = calculateGrade($percentage);

    // Display the report
    echo '<table>';
    // echo '<tr><th>Field</th><th>Value</th></tr>';
    echo "<tr><td><strong>Student ID</strong></td><td>$studentId</td></tr>";
    echo "<tr><td><strong>First Name</strong></td><td>$firstName</td></tr>";
    echo "<tr><td><strong>Last Name</strong></td><td>$lastName</td></tr>";
    echo "<tr><td><strong>Batch/Class</strong></td><td>$batch</td></tr>";
    echo "<tr><td><strong>Email Address</strong></td><td>$email</td></tr>";
    echo "<tr><td><strong>English Score</strong></td><td>$english</td></tr>";
    echo "<tr><td><strong>Hindi Score</strong></td><td>$hindi</td></tr>";
    echo "<tr><td><strong>Math Score</strong></td><td>$math</td></tr>";
    echo "<tr><td><strong>Science Score</strong></td><td>$science</td></tr>";
    echo "<tr><td><strong>History Score</strong></td><td>$history</td></tr>";
    echo "<tr><td><strong>Geography Score</strong></td><td>$geography</td></tr>";
    echo "<tr><td><strong>Remarks</strong></td><td>$remarks</td></tr>";
    echo "<tr><td><strong>Total Marks</strong></td><td>$totalMarks</td></tr>";
    echo "<tr><td><strong>Percentage</strong></td><td>$percentage%</td></tr>";
    echo "<tr><td><strong>Grade</strong></td><td>$grade</td></tr>";
    echo '</table>';
    echo "<p><strong>Report Generated On:</strong> " . (date("Y-m-d")) . "</p>";
    date_default_timezone_set('Asia/Kolkata');
    echo "<p><strong>Time:</strong> " . date('h:i:sa') . "</p>";
    ?>
  </div>
</body>
</html>
