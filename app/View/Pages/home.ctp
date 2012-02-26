<?php
$this->Html->css("slider.css", null, array("inline" => false));
$this->Html->script("mocha.js", array("inline" => false));
?>
<!-- container -->

<div class="row">
	<div id="slider">
		<div id="gallery">
			<img id="img-slider" src="/img/slider1.jpg" />
		</div>
		<div id="next"></div>

	</div>

	<div class="hr"></div>
</div>

<div id="profile-options"  class="row">

	<div class="six columns">
		<div class="panel" align="center">
			<img src="/img/ic-search.png" alt="Search & watch documentaries"  title="Search & watch documentaries" />
			<h3>SEARCH & WATCH DOCUMENTARIES</h3>                        
			<input name="" type="text" size="40"><br><br>
			<a href="" rel="external" class="nice radius orange button medium">Search</a>
		</div>
	</div>


	<div class="six columns">
		<div class="panel"  align="center">
			<img src="/img/ic-director.png" alt="Upload your documentary!"  title="Upload your documentary!" />
			<h3>FILMMAKER:<br />UPLOAD YOUR DOCUMENTARY!</h3>
			<a href="" rel="external" class="nice radius orange button medium">Upload</a>
		</div>
	</div>

</div>
<!-- container -->