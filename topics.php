<?php
	$title='Conference Topics - ICNTSE';
	$keywords='icntse,pua,kth,international conference,new trends,sustainable energy,science,extended abstract';
	$description='This page provides a list of ICNTSE Conference Topics.';
?>
<?php include 'header.php' ?>
  <body>
<?php include('navbar.php'); ?>
<!-- TODO: Fix messed up spacing and remove unnecessary br's -->
    <br />
    <br />
    <br />
    <div class="container">
        <div class="row">
		<h1 style="text-align:center;"><span class="gray">Conference Topics</span></h1>
	    <hr />
            <div class="col-xs-12 shadedgray" id="icntsefields"> 
		<ul class="green">
			<li onclick="toggle_visibility('icntsefield1')">Power and Energy Engineering &#9654;
			    <ol id="icntsefield1">
			        <li>Innovation in Energy Technology</li>
			        <li>Power Systems and Automation</li>
			        <li>Centralized and Decentralized Energy Systems</li>
			        <li>Power System Quality</li>
			        <li>Nuclear Power</li>
			        <li>Clean Coal Technologies in Power Generation</li>
			        <li>Energy Economics</li>
			    </ol>
			</li>
			<li onclick="toggle_visibility('icntsefield2')">Renewable Energy Technologies Applications and Integration &#9654;
			    <ol id="icntsefield2">
			        <li>Hybrid Power Systems</li>
			        <li>Photovoltaic Solar Power Systems</li>
			        <li>Thermal Solar Energy</li>
			        <li>Wind Energy Technology and Applications</li>
			        <li>Intelligent Control for Renewable Energy</li>
			        <li>Hydrogen fuel</li>
			        <li>Fuel Cells Technology and Applications</li>
			        <li>Smart Grids, Micro Grids, and others</li>
			    </ol>
			</li>
			<li onclick="toggle_visibility('icntsefield3')">Energy Management &#9654;
			    <ol id="icntsefield3">
			        <li>Energy and Sustainable Development</li>
			        <li>Green Energy Technologies</li>
			        <li>Energy and Environment</li>
			        <li>Clean Transportation Fuels</li>
			        <li>Energy challenges in the urbanization process</li>
			        <li>Building Efficiency Technologies</li>
			    </ol>
			</li>
			<li onclick="toggle_visibility('icntsefield4')">Energy & Sustainable Development &#9654;
			    <ol id="icntsefield4">
			        <li>Energy Audit and On-site Measurement</li>
			        <li>Energy Management & Policies</li>
			        <li>Energy Analysis & Energy Efficiency</li>
			        <li>Energy Sustainability in developing countries</li>
			        <li>National Energy Strategy and Decision making</li>
			        <li>Regional Issues, Economics & Policies</li>
			    </ol>
			</li>
			<li onclick="toggle_visibility('icntsefield5')">BioEnergy &#9654;
			    <ol id="icntsefield5">
			        <li>BioDiesel</li>
			        <li>BioFuels</li>
			        <li>BioRefinery</li>
			    </ol>
			</li>
		</ul>
            </div> 
        </div>	
    </div>
<?php include 'footer.php' ?>
