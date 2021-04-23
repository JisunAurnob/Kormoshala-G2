<?php
$mysqli = new mysqli("localhost", "root", "", "kormoshala");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$q=$_GET["q"];

$sql = "SELECT Job_id, JobTitle, JobDetail, EmployeeRequirement, Vacancy, Location, PostedBy
FROM jobs WHERE JobTitle LIKE '$q%' AND JobStatus = 'approved'";

$stmt = $mysqli->prepare($sql);
//$stmt->bind_param("s", $q);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($jid, $jtitle, $jdetail, $empreq, $vac, $loc, $postedby);
$stmt->fetch();
$stmt->close();

echo "<center><table>";
echo "<tr>";
echo "<th>Job ID</th>";
echo "<td>" . $jid . "</td>";
echo "<th>Job Title</th>";
echo "<td>" . $jtitle . "</td>";
echo "<th>Job Details</th>";
echo "<td>" . $jdetail . "</td>";
echo "<th>Employee Requirement</th>";
echo "<td>" . $empreq . "</td>";
echo "<th>Vacancy</th>";
echo "<td>" . $vac . "</td>";
echo "<th>Location</th>";
echo "<td>" . $loc . "</td>";
echo "<th>Posted By</th>";
echo "<td>" . $postedby . "</td>";
echo "</tr>";
echo "</table></center>";
?>