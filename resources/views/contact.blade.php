@extends('layouts.app')

@section('content')

<div class="men">
	<div class="container">
	  <div class="register">
	  	<div class="contact_box">
	      <div class="col-md-8 contact-top">
			<h1>
	          Contact Form
	        </h1>
	        <div class="contact_grid">
			  <form method="post" action="{{asset('contact')}}">
					<div class="to">
                     	<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
					 	<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
					</div>
					<div class="text">
	                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                </div>
	                <div class="form-submit">
			          <input type="submit" value="Submit">
					</div>
					<div class="clearfix"></div>
               </form>
           </div>
       </div>
       <div class="col-md-4 contact-top_right">
		<h2>
          Address
        </h2>
        <ul class="list">
			<li>Phone:+8801920416419</li>
			<li>Fax:+257-587-1458</li>
			<li>Email:<a href="nazmul.islam.lotif@gmail.com">    TechLatif</a></li>
			<li>Dhaka, Bangladesh.</li>
		</ul>
	   </div>
	   <div class="clearfix"> </div>
	  </div>
	     <div class="map">
		     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
	     </div>
      </div>
	</div>
</div>

@endsection