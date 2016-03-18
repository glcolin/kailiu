<div class="title">What's in Kai</div>
			<div class="divider"></div>
			<div class="whats-in-kai">
				<h3> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp; Most affordable price in town.<span class="mobile-hide"><br/></span>
				<a class="detail" href="#">Show detail</a></h3>
				<p style="display:none;">The .slideToggle() method animates the height of the matched elements. This causes lower parts of the page to slide up or down, appearing to reveal or conceal the items. If the element is initially displayed, it will be hidden; if hidden, it will be shown. The display property is saved and restored as needed. If an element has a display value of inline, then is hidden and shown, it will once again be displayed inline. When the height reaches 0 after a hiding animation, the display style property is set to none to ensure that the element no longer affects the layout of the page.</p>
				<h3> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp; Specializes in food photography.<span class="mobile-hide"><br/></span>
				<a class="detail" href="#">Show detail</a></h3>
				<p style="display:none;">The .slideToggle() method animates the height of the matched elements. This causes lower parts of the page to slide up or down, appearing to reveal or conceal the items. If the element is initially displayed, it will be hidden; if hidden, it will be shown. The display property is saved and restored as needed. If an element has a display value of inline, then is hidden and shown, it will once again be displayed inline. When the height reaches 0 after a hiding animation, the display style property is set to none to ensure that the element no longer affects the layout of the page.</p>
				<h3> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp; Too serious, lack of humor.<span class="mobile-hide"><br/></span>
				<a class="detail" href="#">Show detail</a></h3>
				<p style="display:none;">The .slideToggle() method animates the height of the matched elements. This causes lower parts of the page to slide up or down, appearing to reveal or conceal the items. If the element is initially displayed, it will be hidden; if hidden, it will be shown. The display property is saved and restored as needed. If an element has a display value of inline, then is hidden and shown, it will once again be displayed inline. When the height reaches 0 after a hiding animation, the display style property is set to none to ensure that the element no longer affects the layout of the page.</p>
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