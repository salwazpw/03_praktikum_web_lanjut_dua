@extends('layouts.main')
@section('layouts.content')
<!-- contact header section -->
<div id="contact-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12"></div>
		</div>
	</div>
</div>
    <!-- contact section -->
<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Get in touch</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
			</div>
			<div class="col-md-8 col-sm-8 mt30">
				<form action="#" method="post" role="form">
					<div class="col-md-6 col-sm-6">
                        <label for="name">NAME</label>
                        <input name="name" type="text" class="form-control" id="name">
                      <label for="email">EMAIL</label>
                        <input name="email" type="email" class="form-control" id="email">
					</div>
					<div class="col-md-6 col-sm-6">
						<label for="message">MESSAGE</label>
						<textarea name="message" rows="6" class="form-control" id="message"></textarea>
					</div>
                    <div class="col-md-6 col-sm-6">
                    	<button type="submit" name="submit" class="btn btn-default">SEND</button>
                    </div>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 address">
				<div>
					<h3>Email</h3>
					<p>info@company.com</p>
				</div>
				<div>
					<h3>Phones</h3>
					<p>010-020-0340 | 090-080-0760</p>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 mt20">
            	<h3>Location</h3>
				<div class="google_map mt20">
					<div id="map-canvas"></div>
				</div>
			</div>
		</div>
	</div>
</div>	
@endsection