<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<!-- custom css link -->
		<link rel="stylesheet" type="text/css" href="css/styles.css">



		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jquery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





		<title>Bootstrap Challenge</title>
	</head>
	<body>
		<!--nav bar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="jumbotron">
			<h1 class="display-3">Hello, world!</h1>
			<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<hr class="my-4">

			<p class="lead">
				<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			</p>
		</div>
		<div class="container">
			<div class="row"><!--first row-->
				<div class="col-md-3">
					<img src="http://loremflickr.com/220/220/dog" class="img-responsive" alt="dog" />
				</div><!--column-->
				<div class="col-md-9">
					<p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro. Nescio brains an Undead zombies. Sicut malus putrid voodoo horror. Nigh tofth eliv ingdead.</p>

					<p>Cum horribilem walking dead resurgere de crazed sepulcris creaturis, zombie sicut de grave feeding iride et serpens. Pestilentia, shaun ofthe dead scythe animated corpses ipsa screams. Pestilentia est plague haec decaying ambulabat mortuos. Sicut zeder apathetic malus voodoo. Aenean a dolor plan et terror soulless vulnerum contagium accedunt, mortui iam vivam unlife. Qui tardius moveri, brid eof reanimator sed in magna copia sint terribiles undeath legionis. Alii missing oculis aliorum sicut serpere crabs nostram. Putridi braindead odores kill and infect, aere implent left four dead.</p>
				</div><!--column-->
			</div><!--row-->



			<div class="row"><!--second row-->
				<div class="col-md-3">
					<img src="http://loremflickr.com/220/220/flower" class="img-responsive img-circle" alt="flower"/>
					<p>Skysail nipper hogshead cutlass Sea Legs fluke me stern Cat o'nine tails poop deck. Clap of thunder topgallant jury mast belay holystone clipper poop deck no prey, no pay spike aft. Nipperkin take a caulk jury mast Sail ho black jack bilge water black spot interloper draft aft.</p>

				</div><!--column-->
				<div class="col-md-3">
					<img src="http://loremflickr.com/220/220/duck" class="img-responsive img-circle" alt="duck"/>
					<p>Schooner come about pressgang pinnace chase port parley dance the hempen jig knave nipper. Boatswain nipperkin American Main to go on account lanyard spirits case shot belay coxswain Sail ho. Run a shot across the bow Brethren of the Coast smartly yawl barque grapple rum parley chase guns come about.</p>
				</div><!--column-->
				<div class="col-md-3">
					<img src="http://loremflickr.com/220/220/rain" class="img-responsive img-circle" alt="river"/>
					<p>Squiffy lee cutlass Letter of Marque chase guns cable rutters schooner line smartly. Swing the lead nipperkin fluke pink shrouds matey Privateer quarter Nelsons folly hogshead. Chantey gabion parley dead men tell no tales pressgang jolly boat splice the main brace tack fire ship Jack Ketch.</p>
				</div><!--column-->
				<div class="col-md-3">
					<img src="http://loremflickr.com/220/220/puppy" class="img-responsive img-circle" alt="puppy"/>
					<p>Bucko maroon belaying pin fore lookout list Sink me aft transom belay. Broadside yardarm Sea Legs avast fore gangway yawl spanker quarter squiffy. Pinnace hempen halter clap of thunder stern lanyard wench smartly ho Spanish Main dead men tell no tales.</p>
				</div><!--column-->
			</div><!--row-->

		</div><!--container-->

		<!--footer-->
		<footer>
			<div class="container">
				<div class="row footer1">
					<div class="col-sm-12">
						<p>This is some squiggly writing on the footer.</p>
					</div>
				</div>
			</div>
		</footer>




	</body>
</html>