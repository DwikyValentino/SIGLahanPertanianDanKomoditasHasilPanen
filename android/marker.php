<?
require("server.php")

$query = mysqli_query($con, "SELECT * FROM tb_lahanpertanian ORDER BY namapemilik ASC");
	
$json = '{"tb_lahanpertanian": [';

// create looping dech array in fetch
while ($row = mysqli_fetch_array($query)){

// quotation marks (") are not allowed by the json string, we will replace it with the` character
// strip_tag serves to remove html tags on strings

	$char ='"';

	$json .= 
	'{
		"id_lahan":"'.str_replace($char,'`',strip_tags($row['id_lahan'])).'", 
		"namapemilik":"'.str_replace($char,'`',strip_tags($row['namapemilik'])).'",
		"luas":"'.str_replace($char,'`',strip_tags($row['luas'])).'",
		"meter":"'.str_replace($char,'`',strip_tags($row['meter'])).'",
		"desa":"'.str_replace($char,'`',strip_tags($row['desa'])).'",
		"kecamatan":"'.str_replace($char,'`',strip_tags($row['kecamatan'])).'",
		"latitude":"'.str_replace($char,'`',strip_tags($row['latitude'])).'",
		"longtitude":"'.str_replace($char,'`',strip_tags($row['longtitude'])).'",
		"foto":"'.str_replace($char,'`',strip_tags($row['foto'])).'"
	},';
}

// omitted commas at the end of the array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;
	
mysqli_close($con);

?>