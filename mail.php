<?php
include('connection.php');
$rs1 = mysqli_query($con, "select * from mailing_list");
$array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);

$headers = array();
$headers[] = 'From: shopsustain12@gmail.com';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

foreach ($array as $value):
    $to = $value['email'];
    $subject = 'Hello!';
    
    $message = '
    <html>
    <head>
        <title>Review Request Reminder</title>
    </head>
    <body>
        <p>Here are the cases requiring your review in December:</p>
        <table>
            <tr>
                <th>Case title</th><th>Category</th><th>Status</th><th>Due date</th>
            </tr>
            <tr>
                <td>Case 1</td><td>Development</td><td>pending</td><td>Dec-20</td>
            </tr>
            <tr>
                <td>Case 2</td><td>DevOps</td><td>pending</td><td>Dec-21</td>
            </tr>
        </table>
    </body>
    </html>
    ';

    $result = mail($to, $subject, $message, implode("\r\n", $headers));

    if ($result) {
        echo 'Success sending email to ' . $to . PHP_EOL;
    } else {
        echo 'Error sending email to ' . $to . PHP_EOL;
    }
endforeach;
?>
