<?php
$this->set('title_for_layout', __('Payment', true));
?>
<!-- container -->

	    <div class="row">
                <div class="twelve columns">
                    <h1>Payment</h1>	
                </div>
            </div>
            
            
            
            <div class="row">
            	
                <div class="twelve columns">

                	<div class="panel">
                	<form>
                    	<div class="row">
                        	<div class="four columns">
                        		<label for="standardInput">Credit card number (no dashes):*</label>
                        	</div>
                            <div class="eight columns">
                        		<input type="text" id="standardInput" class="input-text">

                            </div>
                        </div>
                        <div class="hr"></div>
                        
                        <div class="row">
                        	<div class="four columns">
                        		<label for="standardDropdown">Card expiration date:*</label>
                        	</div>
                            <div class="eight columns">

                        		 <select id="standardDropdown">
                                    <option>Month</option>
                                    <option>01</option>
                                    <option>02</option>
                                </select>
                                
                                <select id="standardDropdown">
                                    <option>Year</option>

                                    <option>2013</option>
                                    <option>2014</option>
                                </select>	
                            </div>
                        </div>
                        <div class="hr"></div>
                        
                        <div class="row">
                        	<div class="four columns">

                        		<label for="mediumInput">Card billing zip code:</label>
                        	</div>
                            <div class="eight columns">
                        		<input type="text" id="mediumInput" class="small input-text">
                            </div>
                        </div>
                        <div class="hr"></div>                        
                        
                        <div align="center"><a href="/video/2" rel="external" class="nice radius orange button large">Submit and Upload Documentary</a></div>

				</form>
                </div>
                </div>
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