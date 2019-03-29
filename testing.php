<html>
<head>
    <title>GSA Tech Test</title>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
</head>
<body>
<?php
/*
  Part One

  Establish a connection to the following database using PDO or mysqli.

  host: dreamhostdb.greenstreetapps.com
  dbname: gsatechtest
  username: gsatechtest
  password: gr33nstr33t
*/
//try {
//    $pdo = new PDO('mysql:host=dreamhostdb.greenstreetapps.com; dbname=gsatechtest; charset=utf8', 'gsatechtest', 'gr33nstr33t');
//    $output = 'DB Connection established.';
//    echo $output;
//}
//catch (PDOException $e) {
//    $output = 'Unable to connect to the db server: ' .
//        $e->getMessage() . ' in ' .
//        $e->getFile() . ':' . $e->getLine();
//    echo $output;
//}

/*
  Part Two

  Using the `tblCustomer` tables in the gsatechtest database, write a query that finds the sum of the conversation
  minutes for each company in 2015 and returns these fields: company ID, company name, priority, total minutes
*/

$sql = "SELECT minutes, SUM(minutes) FROM gsatechtest.tblCustomerConversation WHERE YEAR(date) = YEAR(2015)";
/*
  Part Three

  Loop through the results from your query to build a table with the results.

  If your query did not return any results, please uncomment and use this array.
*/
$results = array(
    0 => array("ID" => 1, "CompanyName" => "Aberdeen America, Inc.", "Priority" => NULL, "Minutes" => "100"),
    1 => array("ID" => 3, "CompanyName" => "Aberforth Partners", "Priority" => NULL, "Minutes" => "4023"),
    2 => array("ID" => 4, "CompanyName" => "ABN", "Priority" => 1, "Minutes" => "3579"),
    3 => array("ID" => 5, "CompanyName" => "ABP Investments U.S.", "Priority" => 1, "Minutes" => "1278"),
    4 => array("ID" => 8, "CompanyName" => "Advantus Capital Management", "Priority" => 4, "Minutes" => "4992"),
    5 => array("ID" => 9, "CompanyName" => "Aeltus Investment Management, Inc.", "Priority" => 3, "Minutes" => "6823"),
    6 => array("ID" => 10, "CompanyName" => "AEW Capital Management, L.P.", "Priority" => 1, "Minutes" => "7"),
    7 => array("ID" => 12, "CompanyName" => "AIG Global Investment Corporation", "Priority" => NULL, "Minutes" => "360"),
    8 => array("ID" => 13, "CompanyName" => "AIM Management Group", "Priority" => NULL, "Minutes" => "15"),
    9 => array("ID" => 17, "CompanyName" => "Alliance Capital Management, L.P.", "Priority" => 3, "Minutes" => "996")
);


echo "<table id='table'>
          <thead>
            <tr>
              <th>Company Name</th>
              <th>Priority</th>
              <th>Minutes</th>
            </tr>
          </thead>
          <tbody>";
/* YOUR ANSWER HERE */
foreach ($results as $row) {
    $id = $row['ID'];
    $name = $row['CompanyName'];
    $priority = $row['Priority'];
    $mins = $row['Minutes'];
    echo "<tr>
                <td class='name'>$name</td>
                <td class='priority'>$priority</td>
                <td class='mins'>$mins</td>
             </tr>";
}
echo "</tbody></table>";
?>
<!--
  Part Four

  Write some css to change the background color of the odd rows to #eeeeee
-->

<style>
    tr:nth-child(odd) {
        background-color: #eeeeee;
    }
</style>

<!--
  Part Five

  Using javascript/jQuery, change the minutes in the table to the form "#h #m". For example, 365 minutes would display as "6h 5m".
-->
<script type="text/javascript">
    (function ($) {
        $("#table td:nth-child(3)").each(function () {
            let currentTd = $(this);
            let hours = Math.floor(currentTd.html() / 60);
            let minutes = currentTd.html() % 60;
            let output = "H:" + hours + " M:" + minutes;
            currentTd.text(output);
        });
    })(jQuery);
</script>
</body>
</html>
