@extends('master')

@section('title', 'Oritil')

@section('menu')

@section('homePage2')
<div class="main-background">
    <div class="company-name">
		<div id="part1">ORI</div>
		<div id="part2">TIL</div>
	</div>

	<div class="button-cointainer">
		<button class="button1 button2">Request Call</button>
		<button class="button1 button3">Live Chat</button>
	</div>
</div>
@endsection

@section('wwdPage')
<div class="bootstrap-controller">
    <div class="container-fluid">

		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 my-col"><img class="wwd-img" width="100px" height="100px" src="img/fix.jpg" /></div>

			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 my-col"><h1>We Fix Stuff!</h1></br><p>No matter if it is desktop PC, tablet or smart-phone we just fix it, so You don't have to waste Your time and energy.</p></div>

		</div>
		
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-push-10 col-md-2 col-lg-2 my-col-img"><img class="wwd-img" width="100px" height="100px" src="img/connect.jpg" /></div>
		
			<div class="col-xs-12 col-sm-12 col-md-pull-2 col-md-10 col-lg-10 my-col"><h1>We Connect Stuff!</h1></br><p>You need to set-up a network, but have no idea how to make it works as You imagine? It is not a problem for us if You want to connect devices at your home or small-office.</p></div>
		
		</div>
		
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 my-col-img"><img class="wwd-img" width="100px" height="100px" src="img/sos.jpg" /></div>

			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 my-col"><h1>We Save You Anytime!</h1></br><p>Our emergency service was created for You in the case something unexpectedly stops working.</p></div>

		</div>

	</div>
</div>
@endsection

@section('hwdPage')
<div class="hwdPage">
	<ul>
		<li><h1>We Talk</h1><p>The more we know the better we understand Your needs, so the solution can be found in the minutes. The more we know the better we understand Your needs, so the solution can be found in the minutes.</p></li>
		<li><h1>We Find Issue</h1><p>The more we know the better we understand Your needs, so the solution can be found in the minutes. The more we know the better we understand Your needs, so the solution can be found in the minutes.</p></li>
		<li><h1>We Fix</h1><p>The more we know the better we understand Your needs, so the solution can be found in the minutes. The more we know the better we understand Your needs, so the solution can be found in the minutes.</p></li>
		<li><h1>We Return</h1><p>The more we know the better we understand Your needs, so the solution can be found in the minutes. The more we know the better we understand Your needs, so the solution can be found in the minutes.</p></li>
	</ul>
</div>
@endsection

@section('faqPage')
<div class="bootstrap-controller">
    <div class="container-fluid">

		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>Any Guarantee?</h1></br><p>Our emergency service was created for You in the case something unexpectedly stops working.</p></div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>How Long To Fix?</h1></br><p>No matter if it is desktop PC, tablet or smart-phone we just fix it, so You don't have to waste Your time and energy.</p></div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>Expensive?</h1></br><p>No matter if it is desktop PC, tablet or smart-phone we just fix it, so You don't have to waste Your time and energy.</p></div>

		</div>
		
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>When Do I Need To Pay?</h1></br><p>Our emergency service was created for You in the case something unexpectedly stops working.</p></div>
		
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>Do You Fix Apples Devs?</h1></br><p>No matter if it is desktop PC, tablet or smart-phone we just fix it, so You don't have to waste Your time and energy.</p></div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>Are You On Social Media?</h1></br><p>No matter if it is desktop PC, tablet or smart-phone we just fix it, so You don't have to waste Your time and energy.</p></div>
		
		</div>
		
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>Other Services</h1></br><p>Our emergency service was created for You in the case something unexpectedly stops working.</p></div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>Opening Times</h1></br><p>Our emergency service was created for You in the case something unexpectedly stops working.</p></div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq" onclick="ani(event)"><h1>What Is Our Location</h1></br><p>No matter if it is desktop PC, tablet or smart-phone we just fix it, so You don't have to waste Your time and energy.</p></div>

		</div>

	</div>
</div>
@endsection
@section('contactPage')
<div class="bootstrap-controller">
<div class="container-fluid">
    <div class="row">
		<form role="form" class="col-xs-10 col-sm-3 col-md-3 col-lg-4 go-right my-contact">
			<h1>Send Message</h1>
			<div class="form-group">
			<input id="name" name="name" type="text" class="form-control" required>
			<label for="name">Your Name</label>
		</div>
		<div class="form-group">
			<input id="phone" name="phone" type="tel" class="form-control" required>
			<label for="phone">Primary Phone</label>
		</div>
		<div class="form-group">
			<textarea id="message" name="phone" class="form-control" required></textarea>
			<label for="message">Message</label>
		</div>
		</form>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-contact">
		<h1>Call Us</h1></br><p>07460860025</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 my-contact">
		<h1>Find Us</h1></br><p>10 Thistle Road</p></br><p>Gravesend</p></br><p>Kent</p></br><p>DA12 2JS</p></br><p>United Kingdom</p>
		</div>
	</div>
</div>
</div>
@endsection
@stop
