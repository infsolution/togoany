<html>
	<body>
		<h1>Sites Cadastrados</h1>
		<table>
		<?php foreach ($sites as $site): ?>
		<tr>
			<td><?= $site->name ?> </td>
			<td><?= $site->url ?> </td>
		</tr>
		<?php endforeach ?>
		</table>
	</body>
</html>