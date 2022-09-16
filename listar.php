<?php
global $wpdb;
$result = $wpdb->get_results ( "SELECT * FROM  person" );

echo "<body><table>";
echo "<tr><th>Id</th><th>Name</th><th>Email</th></tr>";
foreach ($result as $results )
{
    echo "<tr>";
    echo "<td>".$results->Id."</td>";
    echo "<td>".$results->Name."</td>";
    echo "<td>".$results->Email."</td>";
    echo "</tr>";
}
echo "</table></body>";
?>