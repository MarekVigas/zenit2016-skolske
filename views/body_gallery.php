<div class="cont-2">
		<div class="container-backround">
			<h2 class="header2">Galéria</h2>
		</div>
	</div>
	<div clas="cont-gallery">
		<?php
		$dirs = array_filter(glob('*'), 'is_dir');
		foreach ($dirs as $dir) {
			echo '<h1>'.$dir.'</h1>';
			echo "<p>content</p>";
			echo '<img src="/gallery/'.$dir.'/thumb.jpg">';
			echo '<div class="mini">';
			for ($b=1; $b < 4; $b++) { 
				echo '<img src="/gallery/'.$dir.'/'.$b.'.jpg" class="mini_obrazky">';
			}
			echo '</div class>';
		}
		?>
	</div>
