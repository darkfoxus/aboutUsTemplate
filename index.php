<?php
$team [] = array (
		'name' => 'Fernando Arango Isaza',
		'mail' => 'farango@unal.edu.co',
		'jobTitle' => 'Research Leader',
		'desciption' => 'description',
		'imgURL' => './images/demo/team-member2.jpg' 
);
$team [] = array (
		'name' => 'Danny Alvarez Eraso',
		'mail' => 'daalvareze@unal.edu.co',
		'jobTitle' => 'Researcher',
		'desciption' => 'description',
		'imgURL' => './images/demo/team-member2.jpg'
);
$team [] = array (
		'name' => 'Danny Alvarez Eraso',
		'jobTitle' => 'Researcher',
		'desciption' => 'description',
		'imgURL' => './images/demo/team-member2.jpg'
);
$team [] = array (
		'name' => 'Danny Alvarez Eraso',
		'jobTitle' => 'Researcher',
		'desciption' => 'description',
		'imgURL' => './images/demo/team-member2.jpg'
);
$team [] = array (
		'name' => 'Danny Alvarez Eraso',
		'jobTitle' => 'Researcher',
		'desciption' => 'description',
		'imgURL' => './images/demo/team-member2.jpg'
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN"
	dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Grupo de investigacion en Ingenieria de Software</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="imagetoolbar" content="no">
		<link href="./styles/demo.css" rel="stylesheet" type="text/css">
			<link href="./styles/framework.css" rel="stylesheet" type="text/css">
				<link href="./styles/about-us.css" rel="stylesheet" type="text/css">
					<style type="text/css">
#osfooter {
	display: block;
	position: fixed;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 300px;
	margin-bottom: -300px;
	overflow: hidden;
	background-color: transparent;
	z-index: 5000;
	text-indent: -5000px;
}

#osfooter div {
	margin-bottom: -1000px;
}

#osfooter a {
	display: block;
	text-indent: -5000px;
}
</style>
					<!--[if lte IE 6]><style type="text/css">#osfooter{position:absolute; display:none;}</style><![endif]-->
					<!-- <script async="" src="//www.google-analytics.com/analytics.js"></script> -->
					<!-- <script type="text/javascript" async="" src="./scripts/bsa.js"></script> -->
					<!-- <script type="text/javascript" id="_bsap_js_2cdb89802e2deca5991138bb3e47b146" src="./scripts/s_2cdb89802e2deca5991138bb3e47b146.js" async="async"></script> -->
					<!-- <script type="text/javascript" src="./scripts/pro.js" id="_bsap_premium_pro"></script> -->
					<!-- <script type="text/javascript" id="_bsaPRO_js" src="./scripts/resc.js" async="async"></script> -->

</head>

<body id="top">
	<script type="text/javascript">
		(function() {
			var bsa = document.createElement('script');
			bsa.type = 'text/javascript';
			bsa.async = true;
			bsa.src = './scripts/bsa.js';
			(document.getElementsByTagName('head')[0] || document
					.getElementsByTagName('body')[0]).appendChild(bsa);
		})();
	</script>
	<div class="wrapper row1"></div>
	<div class="wrapper row2">
		<div id="container" class="clear">
			<div id="about-us" class="clear">
				<div class="three_fifth first">

					<div id="about-intro" class="clear">
						<div class="panorama">
							<img width="560" height"auto" src="./images/logo-giis.png"
								class="imgholder" alt="Grupo de Investigacion en Ingenieria de Software">
						
						</div>
						<p>Praesent imperdiet justo at sem. Nam accumsan dui eget
							diam.Nulla quis ante eget pede fringilla rutrum. Proin mollis
							tristique orci. Nam est. Fusce felis nisl, volutpat vel,
							sollicitudin eu, luctus sit amet, sem.</p>
						<p>Curabitur risus erat, scelerisque sit amet, mollis id,
							consectetuer eu, neque. Curabitur sodales semper arcu. Sed
							ullamcorper arcu eu ante. Vestibulum sed lacus. Quisque vitae
							libero. Sed quis turpis vitae lectus vehicula tincidunt. Aliquam
							quam mi, rutrum malesuada, consequat vitae, accumsan ut, lacus.
							Nulla dictum vestibulum lorem.</p>
					</div>

					<div id="skillset" class="clear">
						<div class="fl_left first">
							<h2>Vivamuslibero Auguer</h2>
							<p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed
								do eiusmod tempor incididunt ut labore et dolore magna aliqua ut
								enim ad minim veniam.</p>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa
								qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="fl_left">
							<h2>Vivamuslibero Auguer</h2>
							<ol>
								<li><a href="http://www.os-templates.com/page-templates">Aliquam
										venenatis leo et orci.</a></li>
								<li><a href="http://www.os-templates.com/page-templates">Vivamus
										eleifend sollicitudin eros.</a></li>
								<li><a href="http://www.os-templates.com/page-templates">Maecenas
										vitae nunc.</a></li>
								<li><a href="http://www.os-templates.com/page-templates">Ut
										pretium odio eu nisi.</a></li>
								<li><a href="http://www.os-templates.com/page-templates">Nam
										condimentum mi id magna.</a></li>
								<li><a href="http://www.os-templates.com/page-templates">Pellentesque
										consectetuer, felis vel.</a></li>
							</ol>
						</div>
					</div>

				</div>

				<div id="team" class="two_fifth">
					<h2>Nuestro equipo de trabajo</h2>
					<ul>
					<?php
					foreach ( $team as $member ) 
					{
					?>
						<li>
							<div class="figure clear">
								<img height="110px" width="110px" src="<?php echo $member['imgURL']?>" alt="Team Member Image">
								<div class="figcaption">
									<p class="team_name"><?php echo $member['name']?> - <?php echo $member['mail']?></p>
									<p class="team_title"><?php echo $member['jobTitle']?></p>
									<p class="team_description"><?php echo $member['desciption']?></p>
								</div>
								
								
							</div>
						</li>
					<?php }	?>
						<li>
							<div class="figure clear">
								<img src="images/demo/team-member.gif" alt="Template Demo Image">
									<div class="figcaption">
										<p class="team_name">Name Goes Here</p>
										<p class="team_title">Job Title Here</p>
										<p class="team_description">Vestassapede et donec ut est
											liberos sus et eget sed eget. Quisqueta habitur augue magnisl
											magna phas ellus.</p>
									</div>
							
							</div>
						</li>
						<li>
							<div class="figure clear">
								<img src="images/demo/team-member.gif" alt="Template Demo Image">
									<div class="figcaption">
										<p class="team_name">Name Goes Here</p>
										<p class="team_title">Job Title Here</p>
										<p class="team_description">Vestassapede et donec ut est
											liberos sus et eget sed eget. Quisqueta habitur augue magnisl
											magna phas ellus.</p>
									</div>
							
							</div>
						</li>
						<li>
							<div class="figure clear">
								<img src="images/demo/team-member.gif" alt="Template Demo Image">
									<div class="figcaption">
										<p class="team_name">Name Goes Here</p>
										<p class="team_title">Job Title Here</p>
										<p class="team_description">Vestassapede et donec ut est
											liberos sus et eget sed eget. Quisqueta habitur augue magnisl
											magna phas ellus.</p>
									</div>
							
							</div>
						</li>
						<li>
							<div class="figure clear">
								<img src="images/demo/team-member.gif" alt="Template Demo Image">
									<div class="figcaption">
										<p class="team_name">Name Goes Here</p>
										<p class="team_title">Job Title Here</p>
										<p class="team_description">Vestassapede et donec ut est
											liberos sus et eget sed eget. Quisqueta habitur augue magnisl
											magna phas ellus.</p>
									</div>
							
							</div>
						</li>
					</ul>
				</div>

			</div>




		</div>
	</div>
</body>
</html>