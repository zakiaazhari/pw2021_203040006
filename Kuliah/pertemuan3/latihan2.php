<html>
<head>
	<title></title>
	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0">

	<?php for($i = 1; $i <= 5; $i++ ) { ?>

		<?php if($i % 2 == 0) : ?>
		<tr class="warna-baris">
		<?php else : ?>
			<tr>
		<?php elseif : ?>

			<?php for($j = 1; $j <=5; $j++ ) { ?>
				<td><?php echo "$i, $j"; ?></td>
			<?php } ?>
		</tr>

	<?php } ?>	


	</table>
</body>