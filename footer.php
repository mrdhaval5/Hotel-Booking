<!-- Admin footer-->

<!-- footer -->
<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Address</h4>
					</div>
					<div class="footer-grid-info">
						<p>Limbdi at Surendra Nagar
							<span>363421.</span>
						</p>
						<p class="phone">Phone : +91 6868454510
							<span>Email : <a href="#">honest@gmail.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navigation</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="admin_room.php">Add Room</a></li>
							<li><a href="view_room.php">View Room</a></li>
							<li><a href="admin_gallery.php">Add Gallery</a></li>
							<li><a href="view_gallery.php">View Gallery</a></li>
							<li><a href="view_review.php">Review</a></li>
							<li><a href="#">Log Out</a></li>

						</ul>
					</div>
				</div>
			
			
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2021 Hotel Honest . All Rights Reserved | Developed by <a href="#"> Dhaval vaghela</a> </p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
	<script src='js/jquery.typer.js'></script>
		<script>
						var win = $(window),
							foo = $('#typer');

						foo.typer(['Luxury Hotels', 'Hotels & Resorts', 'Luxury Resorts']);

						// unneeded...
						win.resize(function(){
							var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

							foo.css({
								fontSize: fontSize * .8 + 'px'
							});
						}).resize();
					</script>
					<!--tabs-->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true,   // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		activate: function(event) { // Callback function if tab is switched
		var $tab = $(this);
		var $info = $('#tabInfo');
		var $name = $('span', $info);
		$name.text($tab.text());
		$info.show();
		}
		});
		$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
		});
		});