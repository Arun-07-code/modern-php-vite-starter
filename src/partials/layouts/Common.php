<?php

namespace layouts;

class Common extends \HTML\Component {
	public function render() {
?>
		<!DOCTYPE html>
		<html lang="<?= $this->lang; ?>">

		<head>
			<meta charset="UTF-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />

			<title><?= $this->title; ?></title>

			<link href="/src/styles/tailwind.css" rel="stylesheet" />
			<link href="/src/styles/global.css" rel="stylesheet" />
		</head>

		<body class="w-screen h-screen flex items-center justify-center bg-neutral-50">
			<?= $this->children; ?>
		</body>

		</html>
<?php
	}
}
