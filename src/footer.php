		</div><!--end #main-->
	</div><!--end #main-wrap-->

	<footer>
		<p class="copyright">Version <a href="https://github.com/pvpoke/pvpoke/releases"><?php echo $SITE_VERSION; ?></a> &copy; 2019, released under the <a href="https://opensource.org/licenses/MIT" target="_blank">MIT license</a> | <a href="<?php echo $WEB_ROOT;?>privacy/">Privacy Policy</a></p>
		<p>Pokémon and Pokémon GO are copyright of The Pokémon Company, Niantic, Inc., and Nintendo. All trademarked images and names are property of their respective owners, and any such material is used on this site for educational purposes only.</p>
	</footer>

	<!--Global script-->
	<script>
		$(".hamburger").click(function(e){
			$("header .menu").slideToggle(125);
		});

		// Submenu interaction on desktop

		$(".menu .parent-menu").on("mouseover click", function(e){
			$(".submenu").removeClass("active");
			$(this).find(".submenu").addClass("active");
		});

		$("body").on("mousemove click", function(e){
			if($(".submenu:hover, .parent-menu:hover").length == 0){
				$(".submenu").removeClass("active");
			}
		});

		// Auto select link

		$(".share-link input").click(function(e){
			this.setSelectionRange(0, this.value.length);
		});

		// Link share copying

		$("body").on("click", ".share-link .copy", function(e){
			var el = $(e.target).prev()[0];
			el.focus();
			el.setSelectionRange(0, el.value.length);
			document.execCommand("copy");
		});

		// Toggleable sections

		$("body").on("click", ".toggle", function(e){
			e.preventDefault();

			$(e.target).closest(".toggle").toggleClass("active");
		});

		// Service worker handler
		if ('serviceWorker' in navigator) {
			console.log("Attempting to register service worker");
			navigator.serviceWorker.register('service-worker.js')
			  .then(function(reg){
				console.log("Service worker registered.");
			  }).catch(function(err) {
				console.log("Service worker failed to register:", err)
			  });
		}

		<?php if($performGroupMigration) : ?>
			// One-time custom group migration from cookies to localstorage

			var jsonToMigrate = [];

			<?php
			// Display custom groups

			foreach($_COOKIE as $key=>$value){
				if(strpos($key, 'custom_group') !== false){
					$data = json_decode($value, true);

					echo "jsonToMigrate.push({$value});";
				}
			}

			?>

			// Migrate custom groups to local storage

			for(var i = 0; i < jsonToMigrate.length; i++){
				window.localStorage.setItem(jsonToMigrate[i].name, jsonToMigrate[i].data);
			}

		<?php endif; ?>

	</script>
</body>
</html>
