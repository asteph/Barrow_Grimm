<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
	<title>Barrow &amp; Grimm - Home</title>
	<meta name="description" content="">
	<meta name="author" content="">

<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- FONT
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic' rel='stylesheet' type='text/css'>

<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/skeleton.css">

<!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="icon" type="image/png" href="/images/favicon.png">

<!-- Head information from each blade
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="/css/index_C.css">

	<!-- section outlines for developement -->
	<style>
		.column, .columns{
			border-style: solid;
		}
	</style>

</head>
<body>

<!-- Primary Page Layout
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="nav">
	    <div class="container">
			<div class="row">
				<div class="twelve columns">
					<h1>Logo and Navigation</h1>  
				</div>
			</div>
		</div>
	</div>
	<!-- green embelishment -->
	<div class="container">
		<div class="row">
			<div class="twelve columns green"></div> 
		</div>
	</div>
	<div class="hero section">
	    <div class="container">
			<div class="row">
				<div class="twelve columns hero-text">
					<span class="hero-heading">Counsel</span>
					<span class="hero-heading-small">FOR THE</span><br>
					<span class="hero-heading">Business of Life</span><br>
					<div>Find out how we can help you with your legal needs</div>
					<div class="button">Learn How</div>
				</div>
			</div>
		</div>
	</div>
	<!-- green embelishment -->
	<div class="container">
		<div class="row">
			<div class="twelve columns green"></div> 
		</div>
	</div>
	<div class="split">
		<div class="container">
			<div class="row">
				<div class="one-half column practice">
					<h2><span class="practice-title">Areas of Practice</span></h2>
					<a href="">Other Practice Areas </a>
					<hr class="solid">
					<div id="accordion">
						<h3>Business Litigation</h3>
						<div>
							<p>
								Litigation is an integral part of Barrow &amp; Grimm’s practice. The firm’s lawyers have earned excellent reputations and the respect of their peers by offering extensive experience and skill from the smallest to the most complex litigation issues..
								<div class="button">More Info</div>
							</p>
						</div>
						<h3>Estate Planning</h3>
						<div>
							<p>
								Litigation is an integral part of Barrow &amp; Grimm’s practice. The firm’s lawyers have earned excellent reputations and the respect of their peers by offering extensive experience and skill from the smallest to the most complex litigation issues..
							</p>
						</div>
						<h3>Labor &amp; Employment</h3>
						<div>
							<p>
								Litigation is an integral part of Barrow &amp; Grimm’s practice. The firm’s lawyers have earned excellent reputations and the respect of their peers by offering extensive experience and skill from the smallest to the most complex litigation issues..
							</p>
						</div>
						<h3>Tax Law</h3>
						<div>
							<p>
								Litigation is an integral part of Barrow &amp; Grimm’s practice. The firm’s lawyers have earned excellent reputations and the respect of their peers by offering extensive experience and skill from the smallest to the most complex litigation issues..
							</p>
						</div>
						<h3>Construction Litigation / Surety Law</h3>
						<div>
							<p>
								Litigation is an integral part of Barrow &amp; Grimm’s practice. The firm’s lawyers have earned excellent reputations and the respect of their peers by offering extensive experience and skill from the smallest to the most complex litigation issues..
							</p>
						</div>
						<h3>Alternatetive Dispute Resolution</h3>
						<div>
							<p>
								Litigation is an integral part of Barrow &amp; Grimm’s practice. The firm’s lawyers have earned excellent reputations and the respect of their peers by offering extensive experience and skill from the smallest to the most complex litigation issues..
							</p>
						</div>
					</div>
				</div>
				<div class="one-half column news">
					<!-- NEWS ARTICLES GO HERE -->
					<h2><span class="news-title">News</span></h2>
					<a href="">View More News</a>
				</div>
			</div>
		</div>
	</div>

	<footer>

	</footer>
<!-- End Document 
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
	$(function() {
		$( "#accordion" ).accordion({
			event: "click hoverintent",
			// allows accordian boxes to be different heights that fit content
			heightStyle: "content",
			collapsible: true,
			// starts with accordian closed
			active: false
		});
	});

	/*
	* hoverIntent | Copyright 2011 Brian Cherne
	* http://cherne.net/brian/resources/jquery.hoverIntent.html
	* modified by the jQuery UI team
	*/
	$.event.special.hoverintent = {
		setup: function() {
			$( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
		},
		teardown: function() {
			$( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
		},
		handler: function( event ) {
			var currentX, currentY, timeout,
			args = arguments,
			target = $( event.target ),
			previousX = event.pageX,
			previousY = event.pageY;

			function track( event ) {
				currentX = event.pageX;
				currentY = event.pageY;
			};

			function clear() {
				target
				.unbind( "mousemove", track )
				.unbind( "mouseout", clear );
				clearTimeout( timeout );
			}

			function handler() {
				var prop,
				orig = event;

				if ( ( Math.abs( previousX - currentX ) +
					Math.abs( previousY - currentY ) ) < 7 ) {
					clear();

				event = $.Event( "hoverintent" );
				for ( prop in orig ) {
					if ( !( prop in event ) ) {
						event[ prop ] = orig[ prop ];
					}
				}
				// Prevent accessing the original event since the new event
				// is fired asynchronously and the old event is no longer
				// usable (#6028)
				delete event.originalEvent;

				target.trigger( event );
				} else {
					previousX = currentX;
					previousY = currentY;
					timeout = setTimeout( handler, 100 );
				}
			}

			timeout = setTimeout( handler, 100 );
			target.bind({
				mousemove: track,
				mouseout: clear
			});
		}
	};
	</script>
</body>
</html>
