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
					<textarea  name="message" class="form-control"  placeholder="Any questions or you can write down your budget here ..."></textarea>
					<input type="submit" class="form-control btn-success" value="Submit" />
				</div>
			</form>
		</div>
		<script>
		$(document).ready(function(){	
			$('input[type=submit]').click(function(e){
				var message = $('input[name="name"]').val()+' | '+$('input[name="phone"]').val()+' | '+$('input[name="email"]').val()+' | '+$('textarea[name="message"]').val()
				e.preventDefault();
				$('#quotes .body').html('<p style="margin-top:100px;text-align:center;color:#666;font-size:20px;">sending ...<br/>please be patient!</p>');
				$.post( 'includes/mail.php', { message : message })
					.done(function( data ) {
						$('#quotes .body').html('<p style="margin-top:80px;text-align:center;color:#666;font-size:20px;">sent!<br/>Thank you very much!<br/>We will get back to you ASAP.</p>');
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
		<li>I prefer per image price policy. Worry-free on your side. If you do not like any photo I take. Fine, you do not need to spend a dime.</li>
		<li>Reliable, strong working ethic. I believe these characteristics outweigh any sell skill for a business relationship in long term.</li>
		</p>
		<p>
		Rate:
		</br>
		Food Photography (retouch and usage fee included)
		</br>
		$70/image.
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
