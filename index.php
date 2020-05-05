<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/link.php'; ?>
	<?php include 'css/style.php'; ?>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body onload="fetch()">

	<nav class="navbar navbar-expand-lg navbar-light nav_style P-3">
  <a class="navbar-brand pl-5"  href="#" >COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#abouteid">About</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#symid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">IndiaDayWiseReport</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">Indiacoronalive</a>
      </li>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>   
  </div>
</nav>



		<div class="main_header">
			<div class="row w-100 h-100">
				<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
					<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
						<img src="images/circle-cropped.png" width="300" height="300">
					</div>
				</div>

				<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">

					<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
						<h1> Let's Stay Safe Together Against Cor<span class="corona_image">   
						  <img src="images/coronaviruss.png"width="100" height="100"></span>na Virus</h1>
						
					</div>
					
				</div>
				
			</div>			
		</div>

<!-- ********************* corona lastest update***********		 -->

<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center"> COVID-19 LIVE UPDATES OF THE WORLD </h3>
	</div>

		<div class="table-responsive">
			<table class="table table-bordered table-striped" id="tbval">
				<tr>
					<th>Country</th>
					<th>TotalConfirmed</th>
					<th>TotalRecovered</th>
					<th>TotalDeaths</th>
					<th>NewConfirmed</th>
					<th>NewRecovered</th>
					<th>NewDeaths</th>
				</tr>
			</table>

		</div>



	<!-- <div class="d-flex justify-content-around align-items-center">
		<div>
			<h1 class="count">1,56,6253</h1>
			<p>passenger screening at airports</p>
		</div>
		<div>
			<h1 class="count">253</h1>
			<p>active covid 19 cases</p>
		</div>
		<div>
			<h1 class="count">56</h1>
			<p>cured discharge case</p>
		</div>
		<div>
			<h1 class="count">53</h1>
			<p>death cases</p>
		</div>
	</div> -->
</section>


<!-- ****************************About section*********************** -->

<div class="container-fluid sub_section pb-5 pt-5" id="abouteid">
	<div class="section_header text-center mb-5 mt-5">
		<h1>About COVID-19</h1>
	</div>

	<div class="row pt-5 pb-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5">
			<img src="images/structure_large.png" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19 (Corona-Virus)</h2>
			<p>Coronaviruses are a large family of viruses which may cause illness in animals or humans.  In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>
			<p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.</p>
		</div>
		
	</div>
	
</div>

<!-- ********************corona simption************************* -->


<div class="container-fluid  pb-5 pt-5" id="symid">
	<div class="section_header text-center mb-5 mt-5">
		<h1>Coronavirus Symptoms</h1>
	</div>

	<div class="container">
		<div class="row">			
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">			<figcaption> cough </figcaption>
			</figure>	
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/mucus.png" class="img-fluid" width="120" height="120">			<figcaption> runny nose </figcaption>
			</figure>	
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever.png" class="img-fluid" width="120" height="120">			<figcaption> fever </figcaption>
			</figure>	
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/flu.png" class="img-fluid" width="120" height="120">			<figcaption> cold </figcaption>
			</figure>	
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/tired.png" class="img-fluid" width="120" height="120">			<figcaption> tiredness </figcaption>
			</figure>	
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 mb-5">
				<figure class="text-center">
				<img src="images/breathing.png" class="img-fluid" width="120" height="120">			<figcaption> difficulty breathing </figcaption>
			</figure>	
			</div>


			
		</div>
		
	</div>

</div>


<!-- *************6 steps prevent coronavirus ...*********** -->


<div class="container-fluid sub_section  pb-5 pt-5" id="preid">
	<div class="section_header text-center mb-5 mt-5">
		<h1> 6 Steps Prevention Against  Coronavirus </h1>
	</div>

	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/hand-wash.png" class="img-fluid" width="90" height="90">
			            </figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual </p>
					</div>
					
				</div>
				
			</div>


			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/mask.png" class="img-fluid" width="90" height="90">
			            </figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual </p>
					</div>
					
				</div>
				
			</div>


			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/quarantine.png" class="img-fluid" width="90" height="90">
			            </figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual </p>
					</div>
					
				</div>
				
			</div>


			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/stay-at-home.png" class="img-fluid" width="90" height="90">
			            </figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual </p>
					</div>
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/news.png" class="img-fluid" width="90" height="90">
			            </figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual </p>
					</div>
					
				</div>
				
			</div>


			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="images/feverr.png" class="img-fluid" width="90" height="90">
			            </figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual </p>
					</div>
					
				</div>
				
			</div>



			
		</div>
		
	</div>

</div>


<!-- *************Contact form ...*********** -->


<div class="container-fluid   pb-5 pt-5" id="contactid">
	<div class="section_header text-center mb-5 mt-5">
		<h1> Contact Us ASAP </h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">


<form action="" method="POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="username" autocomplete="off" placeholder="name" required>
  </div>

   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>
  
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" autocomplete="off" placeholder="mobile" required>
  </div>

  <div class="form-group">
		<label>Select Symtoms</label>  	<br>

		<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
			<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
			<label class="custom-control-label" for="customcheckbox1">Cold</label>			
		</div>

		<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
			<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
			<label class="custom-control-label" for="customcheckbox2">Fever</label>			
		</div>

		<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
			<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
			<label class="custom-control-label" for="customcheckbox3">Defficulty in Breath</label>			
		</div>

		<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
			<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
			<label class="custom-control-label" for="customcheckbox4">Felling </label>			
		</div>
  </div>


 <div class="form-group">
	  <label for="exampleFormControlTextarea1">Example textarea</label>
			    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
 </div>

<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

			</div>			
		</div>		
	</div>
</div>	


<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn"></i>
</div>



			<footer class="mt-5">
				<div class="footer_style text-white text-center container-fluid">
					<p>copyright by Bluemorpho</p>
				
			</div>
			</footer>


<script type="text/javascript">

	

	$('.count').counterUp({
    delay: 20,
    time:5000
});
	
	mybutton = document.getElementById("mybtn");
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	function topfunction(){
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}



	function fetch(){
		$.get(" https://api.covid19api.com/summary",

				function(data){

					console.log(data['Countries'].length);

					var tbval = document.getElementById('tbval');

					for(var i=1; i<(data['Countries'].length); i++){
						var x = tbval.insertRow();
						x.insertCell(0);
						tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
						tbval.rows[i].cells[0].style.background = '#7a4a91';
						tbval.rows[i].cells[0].style.color = '#fff';


						x.insertCell(1);
						tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
						tbval.rows[i].cells[1].style.background = '#4bb7d8';


						x.insertCell(2);
						tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
						tbval.rows[i].cells[2].style.background = '#4bb7d8';


						x.insertCell(3);
						tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
						tbval.rows[i].cells[3].style.background = '#f36e23';


						x.insertCell(4);
						tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
						tbval.rows[i].cells[4].style.background = '#4bb7d8';


						x.insertCell(5);
						tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
						tbval.rows[i].cells[5].style.background = '#9cc850';


						x.insertCell(6);
						tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
						tbval.rows[i].cells[6].style.background = '#f36e23';

					}
				}

			);
	}


</script>
</body>
</html>




<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

	 $username = $_POST['username'];

	 $email = $_POST['email'];
	 $mobile = $_POST['mobile'];
	 $symt = $_POST['coronasym'];
	 $msg = $_POST['msg'];

	$chk = "";

	foreach ($symt as $chk1){
		$chk .=$chk1.",";
	}

 $insertqurey = "INSERT INTO coronocase(username, email, mobile, symp, message) values('$username','$email','$mobile','$chk','$msg' )";

$query = mysqli_query($con, $insertqurey);

if($query){
	?>
	<script>
		alert("insert ok");
	</script>
	<?php
}else{
	?>
	 <script type="text/javascript">
		alert("insert fail");
	</script>
	<?php
}

}

?>