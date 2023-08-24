

<style>
		html, body{
			height: 100%;
		}
		main{
			min-height:100%;
			background-color:;
		}
		.footer{
			color:white;
			background-color:black;
			height:400px;
			position:relative;
			width:100%;
		}
		.footer .footer-content{
			height:350px;
			display:flex;
			color: white;
		}
		.footer .footer-content .footer-section{
			flex:1;
			padding:25px;
			color:white;
		}
		.footer .footer-content h1,
		.footer .footer-content h2{
			color:white;
		}
		.footer .footer-content .about h1 span{
			color:#05f7ff;
		}
		.footer .footer-content .about .contact span{
			display:block;
			font-size:1.1em;
			margin-bottom:8px;
			color:white;
		}
		.footer .footer-content .contact-form input,
		.footer .footer-content .contact-form textarea{
			color:white;
			background-color: ;
		}
		.footer .footer-content .contact-form .contact-input{
			background-color: #272727;
			color: #bebdbd;
			margin-bottom: 10px;
			line-height: 1.5rem;
			padding: .2rem .0rem;
			border: none;
			border-radius:5px;
		}
		.footer .footer-content .contact-form .test{
			padding: .5rem .0rem;
			line-height: 1.5rem;
			margin-bottom: 10px;
		}
		.btn-big{
			padding: .7rem 1.3rem;
			line-height: 1.3rem;
		}
		.contact-btn{
			float:right;
		}
		.footer .footer-content .contact-form .contact-input:focus{
			background-color:#1a1a1a
		}
		.footer .footer-content .about .socials a{
			border:1px solid grey;
			width:45px;
			height:41px;
			padding-top:5px;
			margin-right: 5px;
			text-align:center;
			display:inline-block;
			font-size:1.3em;
			border-radius:5px;
		}
		.footer .footer-content .about .socials a:hover{
			border:1px solid white;
			color:white;
			transition: all .3s;
		}
		.footer .footer-content .links ul a{
			display: block;
			margin-bottom: 10px;
			font-size: 1.2em;
			color:white;
			transition:all .3s;
		}
		.footer .footer-content .links ul a:hover{
			margin-left: 10px;
			color:white;
			transition:all .3s;
		}
		.footer .footer-bottom{
			height:50px;
			width:100%;
			text-align:center;
			position:absolute;
			bottom:0px;
			left:0px;
			padding-top:20px;
		}
		.brak{
			width:95%;
		}
	</style>
<footer class="footer">
	<!--<div class="center grey-text"><center>&copy copyright 2020 Dimejilike</center>
	</div>-->
		<div class="footer-content">
			<div class="footer-section about">
				<h1 class="logo-text"><span>Dimeji</span>Like</h1>
				<P>
					DimejiLike is a progreesive way of expressing the movement of ones mind by pushing to the point where you can reason on a different dimension, the perspective of things.
				</P>
				<div class="contact">
					<span> <i class="fas fa-phone"><img src="img/dl.jpg" height="16" width="16"></i>&nbsp; 123-456-789 </span>
					<span> <i class="fas fa-envelope"><img src="img/dl.jpg" height="16" width="16"></i>&nbsp; info@dimejilike.online </span>
				</div>
				<div class="socials">
					<a href="#"><i class="fab fa-facebook"><img src="img/dl.jpg" height="16" width="16"></i></a>
					<a href="#"><i class="fab fa-instagram"><img src="img/dl.jpg" height="16" width="16"></i></a>
					<a href="#"><i class="fab fa-twitter"><img src="img/dl.jpg" height="16" width="16"></i></a>
					<a href="#"><i class="fab fa-youtube"><img src="img/dl.jpg" height="16" width="16"></i></a>
				</div>
			</div>
			<div class="footer-section links">
				<h2>Quick Links</h2>
				<br>
				<ul>
					<a href="#"><li>Events</li></a>
					<a href="#"><li>Team</li></a>
					<a href="#"><li>Mentors</li></a>
					<a href="#"><li>Gallery</li></a>
					<a href="#"><li>Terms and condition</li></a>
				</ul>
			</br>
			</div>
			<div class="footer-section contact-form">
				<h2>Contact Us</h2>
				<form class="brak" action="" method="post">
					<input type="email" name="email" class="text-input contact-input" placeholder="Your Email"></input>
					<textarea name="message" class="text-input contact-input test" placeholder="Your message..."></textarea>
					<button type="submit" class="btn btn-big contact-btn">
						<i class="fas fa-envelope">
							<img src="img/dl.jpg" height="16" width="16">submit
						</i>
					</button>
				</form>
			</div>
		</div>

		<div class="footer-bottom">
			&copy copyright | Dimejilike.online
		</div>
</footer>





