<?php

	$mhs = [
		[
			'nim' => 'A12.2000.00001',
			'nama' => 'Joko',
			'alamat' => 'Semarang'
		],
		[

			'nim' => 'A12.2000.00002',
			'nama' => 'Fulan',
			'alamat' => 'Semarang'
		],
		[

			'nim' => 'A12.2000.00003',
			'nama' => 'Toni',
			'alamat' => 'Jakarta'
		]
	];

?>
<table border=1>
	<tr>
		<td>id</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>program studi</td>
		<td>Status</td>
	</tr>
	<?php
	foreach($mhs as $mahasiswa):
	?>
	<tr>
		<td><?php echo $mahasiswa['id']?></td>
		<td><?php echo $mahasiswa['NIM']?></td>
		<td><?php echo $mahasiswa['Nama']?></td>
		<td><?php echo $mahasiswa['alamat']?></td>
		<td><?php echo $mahasiswa['Program studi']?></td>
		<td><?php echo $mahasiswa['Status']?></td>
	</tr>
	<?php endforeach;?>

</table>