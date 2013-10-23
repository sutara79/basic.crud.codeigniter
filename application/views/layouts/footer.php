			<hr>
			<footer>
				<address>
					powered by <?php print anchor('http://getbootstrap.com/', 'Bootstrap') ?>
				</address>
			</footer>
		</div>
		<!-- JavaScript -->
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script>
			// 投稿を削除する処理
			function confirmDelete() {
				if (window.confirm('削除してよろしいですか?')) return true;
				return false;
			}

			// jQuery
			jQuery(document).ready(function($) {
			});
		</script>
	</body>
</html>
