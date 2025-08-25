<footer>
	<div id="footer">

		<div class="flex">
						<h3 class="phone text-left">
							<small>Phone</small>
							<a href="tel:<?php $this->info("phone"); ?>"><?php $this->info("phone"); ?></a>
							<a href="tel:<?php $this->info("phone2"); ?>"><?php $this->info("phone2"); ?></a>
						</h3>
						<h3 class="email text-left">
							<small>Email</small>
							<a href="mailto:<?php $this->info("email"); ?>"><?php $this->info("email"); ?></a>
						</h3>
						<h3 class="location text-left">
							<small>Location</small>
							<span><?php $this->info("address"); ?></span>
						</h3>
					</div>

				<a href="home" class="h-logo"><img src="public/images/common/logo.jpg" alt="Logo"></a>

	

				<div class="copyrights">
					<p class="copy">
						© <?php echo date("Y"); ?>. <?php $this->info("company_name"); ?> All Rights Reserved. 
						<?php if( $this->siteInfo['policy_link'] ): ?>
							<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>. 
						<?php endif ?>
					</p>
					<p class="techno">
						<img class="lazy loaded" src="public/images/hd-logo.png" alt=""><a href="http://technodreamoutsourcing.com/">Web Design</a> Done by <a href="http://technodreamoutsourcing.com/"> TechnoDream LLC</a></p>
				</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if( $this->siteInfo['cookie'] ): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if(in_array($view,["home","contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function() {
			$('.g-recaptcha').each(function(index, el) {
				var recaptcha = grecaptcha.render(el, {'sitekey' : '<?php $this->info("site_key");?>'});
				$( '.destroy-on-load' ).remove();
			})
		};


		$('.consentBox').click(function () {
		    if ($(this).is(':checked')) {
		    	if($('.termsBox').length){
		    		if($('.termsBox').is(':checked')){
		        		$('.ctcBtn').removeAttr('disabled');
		        	}
		    	}else{
		        	$('.ctcBtn').removeAttr('disabled');
		    	}
		    } else {
		        $('.ctcBtn').attr('disabled', true);
		    }
		});

		$('.termsBox').click(function () {
		    if ($(this).is(':checked')) {
	    		if($('.consentBox').is(':checked')){
	        		$('.ctcBtn').removeAttr('disabled');
	        	}
		    } else {
		        $('.ctcBtn').attr('disabled', true);
		    }
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({ num_page_links_to_display : 3, items_per_page : 10 });
		$('.fancy').fancybox({
			helpers: {
				title : {
					type : 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<script>
    const burger = document.getElementById("burger");
    const menu = document.getElementById("menu");
    const burgerLines = burger.querySelectorAll("div");

    burger.addEventListener("click", () => {
      if (menu.classList.contains("show")) {
        menu.classList.remove("show");
        menu.classList.add("hide");
        setTimeout(() => menu.classList.remove("hide"), 400);
      } else {
        menu.classList.add("show");
      }
      burger.classList.toggle("active");
    });

    // Dynamic color switching based on scroll background brightness and scroll direction
    let lastScroll = 0;
    function getLuminance(rgb) {
      const r = rgb[0] / 255;
      const g = rgb[1] / 255;
      const b = rgb[2] / 255;
      return 0.299 * r + 0.587 * g + 0.114 * b;
    }

    function parseRGB(color) {
      const result = color.match(/rgb\\((\\d+), (\\d+), (\\d+)\\)/);
      return result ? [parseInt(result[1]), parseInt(result[2]), parseInt(result[3])] : [255,255,255];
    }

    window.addEventListener("scroll", () => {
      const currentScroll = window.scrollY;
      const scrollingUp = currentScroll < lastScroll;
      lastScroll = currentScroll;

      const section = document.elementFromPoint(window.innerWidth - 30, 30);
      if (section) {
        const style = window.getComputedStyle(section);
        const bgColor = style.backgroundColor;
        const rgb = parseRGB(bgColor);
        const luminance = getLuminance(rgb);
        if ((luminance > 0.5 && !scrollingUp) || (luminance <= 0.5 && scrollingUp)) {
          burgerLines.forEach(line => line.style.background = "#000");
          burgerLines.forEach(line => line.style.boxShadow = "0 0 6px rgba(255,255,255,0.6)");
        } else {
          burgerLines.forEach(line => line.style.background = "#fff");
          burgerLines.forEach(line => line.style.boxShadow = "0 0 6px rgba(0,0,0,0.6)");
        }
      }
    });
  </script>

<a class="cta" href="tel:<?php $this->info("phone") ;?>"><span style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>
</html>


