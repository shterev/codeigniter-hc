<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>untitled</title>
	
</head>
<body>
     <div id="container">
		<h1>Super Pagination with CodeIgniter</h1>
		<ul>
		<?php
			foreach($results as $data) {
				echo '<li>';				
				echo "<h2>$data->title</h2>";
				echo  $data->content;
				echo '</li>'; 		
			}
		?>
		</ul>
		<p><?php echo $links; ?></p>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>
</body>
</html>	