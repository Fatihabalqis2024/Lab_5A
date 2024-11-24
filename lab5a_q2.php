<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
        ];
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
            // Loop through each student and display the data
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>{$student['name']}</td>";
                echo "<td>{$student['program']}</td>";
                echo "<td>{$student['age']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
