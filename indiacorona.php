<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/link.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">

	 <nav class="navbar navbar-expand-lg nav_style P-3">
  <a class="navbar-brand pl-5"  href="#" >COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8080/coronago/">Home <span class="sr-only">(current)</span></a>
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






<section class="corona_update container-fluid">
  <div class="my-5 ">
    <h3 class="text-uppercase text-center"> COVID-19 LIVE UPDATES OF THE INDIA </h3>
  </div>

    <div class="table-responsive">
      <table class="table table-bordered table-striped" >
        <tr>
          <th>LastUpdateTime</th>
          <th>State</th>
          <th>Confirmed</th>
          <th>Active</th>
          <th>Recovered</th>
          <th>Deaths</th>
        </tr>

        <?php

       $data = file_get_contents('https://api.covid19india.org/data.json');
       $corona = json_decode($data,true);
       $countcorina = count($corona['statewise']);

       $i = 1;
       while($i < $countcorina){

       ?>
          <tr>
            <td><?php echo $corona['statewise'][$i]['lastupdatedtime'];  ?></td>
            <td><?php echo $corona['statewise'][$i]['state'];  ?></td>
            <td><?php echo $corona['statewise'][$i]['confirmed'];  ?></td>
            <td><?php echo $corona['statewise'][$i]['active'];  ?></td>
            <td><?php echo $corona['statewise'][$i]['recovered'];  ?></td>
            <td><?php echo $corona['statewise'][$i]['deaths'];  ?></td>
          </tr>

        
      <!--   echo $corona['statewise'][$i]['state'];
        echo $corona['statewise'][$i]['confirmed'];
        echo $corona['statewise'][$i]['active'];
        echo $corona['statewise'][$i]['recovered'];
        echo $corona['statewise'][$i]['deaths']; -->



         <?php
        $i++;

     }




        ?>
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

































<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn"></i>
</div>



      <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
          <p>copyright by Bluemorpho</p>
        
      </div>
      </footer>


<script type="text/javascript">

 
  
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
