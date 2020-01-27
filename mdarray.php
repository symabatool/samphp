$std = array(
    array("name" => "rizwana","marks" => "500"),
    array("name" => "Ali","marks" => "600"),
    array("name" => "Ahsan","marks" => "800"),
    );
    // print_r($std);
    echo "<br/><br/><br/>";



    
$html = "<table border>";
    $html .= "<thead><tr>";
         $html .= "<th>Name</th>";  
         $html .= "<th>Marks</th>";  
    $html .= "</tr></thead><tbody>";
foreach($std as $key => $b){
    $html .= "<tr>";
    $html .= "<td>".$b["name"]."</td>";  
    $html .= "<td>".$b["marks"]."</td>";  
    $html .= "</tr>";
}
$html .= "</tbody></table>";
echo $html;
?>
<style>
table{
    border-collapse: collapse;
}
</style>
<!-- <form method="POST">
<label>Name</label>
<input type="text" name="fname">
<input type="submit" value="Send">
</form> -->