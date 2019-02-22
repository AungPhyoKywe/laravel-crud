<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/vendor//themify-icons/themify-icons.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/app.css">
	<title>Document</title>

	<style type="text/css">
		

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
		#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
	</style>
</head>
<body data-spy="scroll" data-target="#scrollspy" data-offset="55">

	<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
 
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
	<nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-sm fixed-top" data-spy="affix" data-offset-top="20">
		<a class="navbar-brand" href="#"><strong class="text-primary">RU</strong><span class="text-light">BIC</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#features">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#pricing">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#review">Reviews</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<header class="page-header">
		<div class="header-content">
			<h3 class="header-title"><strong class="text-primary">RU</strong><span>BIC</span></h3>
			<h4 class="header-subtitle">Creative Multi-purpose Bootstrap theme </h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores voluptatem voluptatum adipisci vel, beatae unde! Mollitia voluptatum, ullam quisquam optio!</p>
			<button class="btn btn-outline-light btn-flat" >Download</button>
		</div>	



		<form class="header-form"action="{{url('/admin')}}"id="login">
			<div class="head">Try your <span class="text-primary">Free</span> trial today.</div>
			<div class="body">
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email*"required="name">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password*"required="password">
				</div>
			</div>
			<div class="footer">
				<button class="btn btn-primary btn-block"

					onclick="myFunction()" style="margin:0;"

				>Login</button>
			</div>
		</form>	
	</header>
	<div class="social-wrapper" id="features">
		<div class="container">
			<div class="social-txt">
				<h6 class="title">Social Media</h6>
				<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus voluptate numquam sed expedita vitae ipsa?</p>
			</div>
			<div class="social-links">
				<a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
				<a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
				<a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
				<a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
				<a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
				<a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
			</div>
		</div>			
	</div>
	<section>
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-lg-8">
					<div class="tabs-container">
						<ul class="nav tab-nav" id="pills-tab">
							<li class="item">
								<a class="link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"aria-selected="true">Tab 1</a>
							</li>
							<li class="item">
								<a class="link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"aria-selected="false">Tab 2</a>
							</li>
							<li class="item">
								<a class="link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"aria-selected="false">Tab 3</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="pills-home">
								<h4 class="title">Some Title</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam repellendus esse consectetur possimus voluptatem veniam quas ducimus ullam deleniti? Possimus, unde eveniet suscipit perspiciatis dicta numquam voluptate fuga id, optio.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit tempore molestiae excepturi commodi ullam provident, optio dicta, nulla officiis consectetur soluta et officia neque odio blanditiis aspernatur cum cumque error?</p>

								<button class="btn btn-primary mt-3">Download</button>
							</div>
							<div class="tab-pane fade" id="pills-profile">
								<h4 class="title">Another Title</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit unde totam nostrum, sunt accusamus in delectus aspernatur, nisi eligendi ipsum eum! Aspernatur recusandae nihil rem qui quam vero, saepe inventore tempora? Necessitatibus corporis, nam minus reiciendis rerum? Eius voluptatem facilis, vitae minima modi corrupti ullam, temporibus vel eum fugit inventore obcaecati provident ratione, ab aliquid perspiciatis commodi, autem in nemo.</p>
								<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing.</strong></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit tempore molestiae excepturi commodi ullam provident, optio dicta, nulla officiis consectetur soluta et officia neque odio blanditiis aspernatur cum cumque error?</p>
							</div>
							<div class="tab-pane fade" id="pills-contact">
								<h4 class="title">Some Other </h4>
								<p>Consectetur amet architecto, temporibus, debitis impedit dolore eius. Enim alias beatae architecto iusto incidunt pariatur reprehenderit impedit ipsum ex at deserunt, inventore corrupti rerum eius obcaecati. Itaque repellendus illum aut beatae ex quasi doloremque voluptatem. Numquam at possimus, obcaecati, voluptas aut vel nam recusandae pariatur error illum quaerat sunt! Ipsam rerum enim hic atque nemo debitis, voluptate obcaecati inventore culpa. Odit adipisci eos natus fugiat. Id, deserunt qui aliquam? Provident tempora repellat, repellendus consequatur quia dolor at dolore temporibus esse in rem ea necessitatibus quo nesciunt eos a dolorum voluptates, tenetur non eius quasi! Autem provident amet, maiores tenetur, eveniet dicta, laborum odio velit sint consequatur beatae nemo at! Aperiam magnam eveniet rerum, optio consequuntur quas maiores ullam necessitatibus nesciunt.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-none d-lg-block align-self-center">
					<img src="assets/imgs/eiffel-tower.svg" alt="" class="img-responsive tower">
				</div>
			</div>					
		</div>						
	</section>

	<section>
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-5 align-self-center mb-4 mb-md-0">
					<img src="assets/imgs/img.jpg" alt="" class="shadow img-responsive">
				</div>
				<div class="col-md-6 col-lg-5">
					<h6 class="title">Section with Media list</h6>
					<p>Consectetur adipisicing elit. Quam odit odio et neque perferendis perspiciatis magnam hic ut facilis possimus!consectetur adipisicing elit. Impedit repellat ipsam quaerat error odit commodi.</p>
					<ul class="list-unstyled mt-4">
						<li class="media">
							<div class="circle-40 mr-3 mt-1"><i class="ti-gift"></i></div>
							<div class="media-body">
								<h6 class="mb-2">List-based media object</h6>
								<p>Cras sit amet nibh libero, in gravida nulla.</p>
							</div>
						</li>
						<li class="media">
							<div class="circle-40 mr-3 mt-1"><i class="ti-face-smile"></i></div>
							<div class="media-body">
								<h6 class="mb-2">Another one</h6>
								<p>Cras in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
							</div>
						</li>
						<li class="media">
							<div class="circle-40 mr-3 mt-1"><i class="ti-microphone"></i></div>
							<div class="media-body">
								<h6 class="mb-2">One more</h6>
								<p>Nulla vel metus scelerisque ante sollicitudin. Cras purus odio.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row justify-content-between">				
				<div class="col-md-6 col-lg-5 align-self-center">
					<h6 class="title">Standard Picture Section</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ut voluptatum ipsum. Rerum fuga cumque illo nihil nobis vero ducimus, animi voluptatum nemo facilis quae quia odit accusantium doloremque? Totam.</p>
					<p><strong>Adipisicing elit. Quos ad doloribus numquam cum odio dolorem!</strong></p>
					<p>Rerum fuga cumque consectetur adipisicing elit. Pariatur quis ipsum facere officiis magni ullam quasi fuga magnam dicta quas.</p>					
				</div>
				<div class="col-md-5 mt-4 mt-md-0">
					<img src="assets/imgs/img1.jpg" alt="" class="shadow img-responsive">
				</div>
			</div>
		</div>
	</section>

	<section id="about">
		<div class="container text-center">
			<h6 class="display-4 has-line">WHY THIS IS AWESOME</h6>
			<p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

			<div class="row">
				<div class="col-lg-4">
					<div class="circle-100 mb-3"><i class="ti-light-bulb"></i></div>
					<h6 class="title mb-3">Thoughtful Design</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eveniet laborum, vero doloremque sunt tempora.</p>
				</div>
				<div class="col-lg-4">
					<div class="circle-100 mb-3"><i class="ti-paint-bucket"></i></div>
					<h6 class="title mb-3">WELL CRAFTED</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eveniet laborum, vero doloremque sunt tempora.</p>
				</div>
				<div class="col-lg-4">
					<div class="circle-100 mb-3"><i class="ti-marker-alt"></i></div>
					<h6 class="title mb-3">EASY TO CUSTOMIZE</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eveniet laborum, vero doloremque sunt tempora.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="pricing">
		<div class="container text-center">
			<h6 class="display-4 has-line">PRICING OPTIONS</h6>
			<p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<div class="row pt-5">
				<div class="col-lg-4">
					<a href="javascript:void(0)" class="pricing-card">
						<div class="head">Basic</div>
						<div class="body">
							<h1><small>$</small>0</h1>
							<p>Free for Life</p>
						</div>
						<ul class="list-group">
							<li class="list-group-item">1 GB OF SPACE</li>
							<li class="list-group-item">10 GB OF BANDWIDTH</li>
							<li class="list-group-item">3 WEBSITES</li>
							<li class="list-group-item">BASIC CUSTOMIZATION</li>
							<li class="list-group-item">WORDPRESS INTEGRATION</li>
							<li class="list-group-item">EMAIL SUPPORT</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="javascript:void(0)" class="pricing-card popular">
						<div class="head">Professional</div>
						<div class="body">
							<h1><small>$</small>14.99</h1>
							<p>Monthly Payment</p>
						</div>
						<div class="popular-item">OUR MOST POPULAR</div>
						<ul class="list-group">
							<li class="list-group-item">5 GB OF SPACE</li>
							<li class="list-group-item">50 GB OF BANDWIDTH</li>
							<li class="list-group-item">10 WEBSITES</li>
							<li class="list-group-item">ADVANCED CUSTOMIZATION</li>
							<li class="list-group-item">WORDPRESS INTEGRATION</li>
							<li class="list-group-item">EMAIL SUPPORT</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="javascript:void(0)" class="pricing-card">
						<div class="head">Enterprise</div>
						<div class="body">
							<h1><small>$</small>99</h1>
							<p>Monthly Payment</p>
						</div>
						<ul class="list-group">
							<li class="list-group-item">UNLIMITED OF SPACE</li>
							<li class="list-group-item">UNLIMITED BANDWIDTH</li>
							<li class="list-group-item">120 WEBSITES</li>
							<li class="list-group-item">ADVANCED CUSTOMIZATION</li>
							<li class="list-group-item">WORDPRESS INTEGRATION</li>
							<li class="list-group-item">EMAIL SUPPORT</li>
						</ul>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="review">
		<div class="container text-center">
			<h6 class="display-4 has-line">WHAT OUR CUSTOMERS ARE SAYING</h6>
			<p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<div class="row text-left">
				<div class="col-md-4">
					<div class="testmonial">						
						<p class="description"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, eaque, repellat. Corporis facilis reprehenderit, cupiditate.</i></p>
						<div class="media">
							<img class="mr-3" src="assets/imgs/avatar1.jpg" width="60" alt="Generic placeholder image">
							<div class="media-body">
								<h6 class="title">Emma Re</h6>
								<p class="text-muted">Web Designer</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testmonial">						
						<p class="description"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, eaque, repellat. Corporis facilis reprehenderit, cupiditate.</i></p>
						<div class="media">
							<img class="mr-3" src="assets/imgs/avatar2.jpg" width="60" alt="Generic placeholder image">
							<div class="media-body">
								<h6 class="title">John Doe</h6>
								<p class="text-muted">Freelancer</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testmonial">						
						<p class="description"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, eaque, repellat. Corporis facilis reprehenderit, cupiditate.</i></p>
						<div class="media">
							<img class="mr-3" src="assets/imgs/avatar3.jpg" width="60" alt="Generic placeholder image">
							<div class="media-body">
								<h6 class="title">Emily Roe</h6>
								<p class="text-muted">Graphic Designer</p>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>

	<section class="has-img-bg text-center">
		<div class="container">
			<h6 class="display-3 has-line">STYLISH AXURE DESIGN</h6>
			<h5 class="mb-5 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, itaque.</h5>
			<button class="btn btn-outline-light btn-flat">Download</button>
		</div>
	</section>

	<section id="contact">
		<div class="container text-center">
			<h6 class="display-4 has-line">CONTACT US</h6>
			<p class="mb-5 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

			<form>
				<div class="row mb-4">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name">			
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email">			
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
					</div>
					<div class="col-md-6">
						<textarea name="" id="" cols="30" class="form-control" placeholder="Message"></textarea>
					</div>
				</div>
				<input type="submit" class="btn btn-primary" value="Send Message">
			</form>
		</div>
	</section>

	<footer>
		<p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com">DevCRUD</a></p>
		<div class="social-links">
			<a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
			<a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
			<a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
			<a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
			<a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
			<a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
		</div>
	</footer>

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/app.js"></script>
	<script>
        $(document).ready(function(){
          $(".navbar .nav-link").on('click', function(event) {

          if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 700, function(){
            window.location.hash = hash;
            });
          } 
          });
        });
    </script>
</body>
</html>