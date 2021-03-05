
$result = $conn->query($sql)
if( $result -> num_row > 0 )
while($row = $result -> fetch_assoc()){
	echo("id : ". $row[entity gula ]);


}


again 

$result = $connection -> query(sql) ;

if( $result -> num_row > 0 )
{
	while( $row = $result ->fetch_assoc())
	{
		echo("the value is = ". $row['entity']);
	}
	
}