<?php
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
while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['ID'];
    $companyName = $row['CompanyName'];
    $priority = $row['Priority'];
    $minutes = $row['minutes'];

    echo "<tr>
                <td>$id</td>
                <td>$companyName</td>
                <td>$priority</td>
                <td>$minutes</td>
             </tr>";
}
echo "</tbody></table>";