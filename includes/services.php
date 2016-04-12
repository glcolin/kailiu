<div class="gallery col-md-8 col-sm-12">	
<div class="tablet-only title highlight">About Kai</div>
<div class="divider"></div>	
<article class="kai">
		
		<h2>Service and Quotes</h2>
		
		<div class="services">
		
		<div id="quotes">
			<form>
				<div class="head">
					<h4>Get a Quote NOW!</h4> 
				</div>
				<div class="body">
					<input type="text" name="name" class="form-control" placeholder="Your Name" />
					<input type="text" name="phone" class="form-control" placeholder="Phone Number" />
					<input type="text" name="email" class="form-control" placeholder="Email Address" />
					<textarea  name="message" class="form-control"  placeholder="Feel free to message me ..."></textarea>
					<input type="submit" class="form-control btn-success" value="Submit" />
				</div>
			</form>
		</div>
		<script>
		$(document).ready(function(){	
			$('input[type=text]').focus(function(){
				$('input[type=text]').css('background','#FFF');
			});
			$('input[type=submit]').click(function(e){
				if($('input[name="name"]').val().trim()==''){$('input[name="name"]').css('background','#D00');return false;}
				if($('input[name="phone"]').val().trim()=='' && $('input[name="email"]').val().trim()==''){
					$('input[name="phone"]').css('background','#D00');$('input[name="email"]').css('background','#D00');return false
				}
				var message = $('input[name="name"]').val()+' | '+$('input[name="phone"]').val()+' | '+$('input[name="email"]').val()+' | '+$('textarea[name="message"]').val()
				e.preventDefault();
				$('#quotes .body').html('<p style="margin-top:100px;text-align:center;color:#666;font-size:13px;">sending ...<br/>please wait!</p>');
				$.post( 'includes/mail.php', { message : message })
					.done(function( data ) {
						setTimeout(function(){
						$('#quotes .body').html('<p style="margin-top:80px;text-align:center;color:#666;font-size:13px;">Message has been sent!<br/>Thank you very much!<br/>We will get back to you ASAP.</p>');
						}, 2000);
					});
			});
		});
		</script>
		
		<div class="content">
		
		<p>
		<ul>
		<li>Five years of experience</li>
		<li>Affordable, low cost rate, yet still providing great result.</li>
		<li>Fast turn around time.</li>
		<li>Excellent lighting skill and tethered screen for client's real time feedback</li>
		<li>I prefer per image price policy. Worry-free on your side. You control how much money you want to spend.</li>
		<li>Reliable, strong working ethic. I believe these characteristics outweigh any sell skill for a business relationship in long term.</li>
		</p>
		<p>
		Rate:
		</br>
		Food Photography (retouch and usage fee included)
		</br>
		$50-80/image
		</br>
		</br>
		Interior Photography (retouch and usage fee included)
		</br>
		$50/image
		</br>
		</br>
		Event Photography
		</br>
		$100/hour
		</br>
		</br>
		Video
		</br>
		Start from $125/hour
		
		
		
		
		</div>
		
		</div>
		
</article>
<div class="clear"></div>
<div class="divider"></div>
<p>&nbsp;</p>
</div>
