<?php

namespace common;

class Nav extends \HTML\Component {
	public function render() {
?>
		<nav id="nav" class="flex gap-10">
			<a href="%BASE%/">Home</a>
			<a href="%BASE%/about">About</a>
		</nav>

		<script src="/src/scripts/nav.ts" type="module"></script>
<?php
	}
}
