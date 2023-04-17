<?php
$Students = [
    [
        'id' => '1',
        'Name' => 'Abdelrahman Hathout',
    ],
    [
        'id' => '2',
        'Name' => 'Abdo Hamed',
    ],
    [
        'id' => '3',
        'Name' => 'Ahmed EL-Sayad',
    ],
    [
        'id' => '4',
        'Name' => 'Mohmed Abdallah',
    ],
    [
        'id' => '5',
        'Name' => 'Said Abo Donia',
    ],
    [
        'id' => '6',
        'Name' => 'Gala Sabir',
    ],
    [
        'id' => '7',
        'Name' => 'Yasser Rezk',

    ],
    [
        'id' => '8',
        'Name' => 'Eslam Rezk',
    ],
    [
        'id' => '9',
        'Name' => 'Abdo EL-Boray',

    ],
    [
        'id' => '10',
        'Name' => 'Mahmoud Kotb',
    ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        table,
        th,
        tr,
        td {
            border: solid 2px gray;
            color: white;
            padding: 10px;
            margin-bottom: 50px;

        }

        h1 {
            color: black;
            text-align: center;

        }

        .all_student_list {
            background-color: #0B2447;
            width: 100%;
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .all_student_list a {
            font-size: 20px;
            color: black;
            background-color: #16FF00;
            box-shadow: 0px 0px 20px 7px #888888;
            padding: 10px 80px;
            border-radius: 15px;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="all_student_list">
        <div class="list">

            <h1>List of Student </h1>
            <table>
                <tr>
                    <th>index</th>
                    <th>Name</th>
                </tr>
                <?php
                foreach ($Students as $student) {
                ?>
                    <tr>
                        <td><?php echo "{$student["id"]}" ?></td>
                        <td><?php echo "{$student["Name"]}" ?></td>
                    </tr>
                <?php } ?>
            </table>
            <a href="./index.html">Main Menu</a>
        </div>
    </div>
</body>