<!DOCTYPE html>
<html>
<head>
	<title>Contoh Array Hewan dengan PHP</title>
</head>
<body>
	<h1>Hewan-Hewan</h1>
	<ul>
		<?php
			// Deklarasi array hewan
			$hewan = array('gajah', 'kucing', 'burung', 'harimau', 'ular');

			// Loop melalui array hewan dan tampilkan setiap hewan sebagai elemen <li>
			foreach ($hewan as $hewan_item) {
				echo '<li>' . $hewan_item . '</li>';
			}
		?>
	</ul>
</body>
</html>
