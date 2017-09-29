<?php wp_footer()?>

<hr>

<!-- script for header resizing -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 	<script src="https://shared.plainfieldcs.com/scripts/js/jquery.fittext.js" media="screen"></script>
	<script type="text/javascript">
       	$("#header1").fitText(2.2, { minFontSize: 26, maxFontSize: '72px' });
		$("#tagline").fitText(3, { minFontSize: 14, maxFontSize: '30px' });
		$("#article_title").fitText(1.2, { minFontSize: 24, maxFontSize: '36px' });
	</script>
<!-- /script for header resizing -->

<div id="spacer"></div>

<!-- Footer -->

<footer class="footer">
  <div class="row">
    <div class="twocol">
    </div>

    <div class="eightcol center">

				<p><a href="http://nocturnalgg.com/" target="_blank">Copyright 2017 &mdash; Nocturnal</a></p>

		</div>

		<div class="twocol last">
		</div>
	</div>
</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>
