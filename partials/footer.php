	</main>

  <script src="https://get.gridsetapp.com/34037/overlay/"></script>

	<script>
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});
		</script>

		<script>
			$( ".trigger" ).click(function() {
			  $( ".site-navigation-strip, .wireframe-title" ).toggle( "fast", function() {
			    // Animation complete.
			  });
			});
		</script>
	
</body>
</html>