<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<body>
	<div id="container">
		<h1>Welcome to Home of CodeIgniter!</h1>

		<div>
			<p>This is a test for Codeigniter</p>
			<ul>
				<?php foreach ($menu as $item) : ?>
					<li>
						<a href="<?= $item['url'] ?>">
							<?= $item['title'] ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

</body>

</html>