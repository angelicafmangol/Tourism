<?php
session_start();

// load XML file
$xml = simplexml_load_file("tourism.xml") or die("Error: Cannot create object");

// to handle carriage return character
$xml = simplexml_load_string(str_replace('&#13;', '', file_get_contents('tourism.xml')));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Page</title>
</head>
<body>
	<div class="Form">
		<h3 class="title"> - Insert New Content on XML File</h3>
        <div class="forms">
			<form method="POST" action="attach.php">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" required="required"/>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" name="image" required="required"/>
				</div>
				<div class="form-group">
					<label for="content">Content</label>
                    <textarea type="text" class="form-control" name="content" required="required"></textarea> 
				</div>
                <br/>
				<button class="btn btn-primary" name="insert">Insert</button>
			</form>
		</div>
        <div>
			<table>	
				<thead>
					<tr>
						<th>Title</th>
						<th>Image</th>
                        <th>Content</th>
					</tr>
				</thead>
				<tbody>
			<?php
			foreach($xml->municipality as $municipality){
				echo '
					<tr>
			    		<td>'.$municipality->title.'</td>
						<td>'.$municipality->image.'</td>
			    		<td>'.$municipality->content.'</td>
					</tr>
					';
    			}
?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>