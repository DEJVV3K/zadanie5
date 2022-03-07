<?php
$con = mysqli_connect('localhost', 'root','', 'egzamin') or die("Błąd");
mysqli_set_charset($con, 'utf8');

$zap1=mysqli_query($con,"SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;");
while($r = mysqli_fetch_assoc($zap1))
{
    echo "<tr>"."<th>".$r['czas']."</th>";
    echo "<th>".$r['kierunek']."</th>";
    echo "<th>".$r['nr_rejsu']."</th>";
    echo "<th>".$r['status_lotu']."</th>"."</tr>";
}
?>