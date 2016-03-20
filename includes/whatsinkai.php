<div class="title">What's in Kai</div>
			<div class="divider"></div>
			<div class="whats-in-kai">
				<h3> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp; Most affordable price in town.<span class="mobile-hide"><br/></span>
				<a class="detail" href="#">Show detail</a></h3>
				<p style="display:none;">One of Kai's client said to Kai. He has worked with many food photographers before. Kai has the best price at this skill level.</p>
				<h3> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp; Specializes in food photography.<span class="mobile-hide"><br/></span>
				<a class="detail" href="#">Show detail</a></h3>
				<p style="display:none;">Kai has photographed many restaurants in New York. He has mastered lighting. No matter how dark your venue is, he can still make your food looks amazing in the photo.</p>
				<h3> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp; Too serious, lack of humor.<span class="mobile-hide"><br/></span>
				<a class="detail" href="#">Show detail</a></h3>
				<p style="display:none;">Kai is too serious because he takes your business seriously.</p>
			</div>
			<script>
			$(document).ready(function(){
				$( '.detail' ).click(function(e) {
					e.preventDefault();
					if($(this).parent().next('p').css('display') !== 'none') {
						$(this).text('Show detail');
						$(this).css('color','#337ab7').css('text-decoration','none');
					}else{
						$(this).text('Hide detail');
						$(this).css('color','#337ab7').css('text-decoration','none');
					}
				$(this).parent().next('p').slideToggle( "slow", function() {
						//NOTHING;
					});
				});
			});	
			</script>