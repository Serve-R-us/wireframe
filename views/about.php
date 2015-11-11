<div class="container">

	<!-- php if statement -->
	<?php if (!isset($_SESSION['username'])) {?>
	<!-- Main Component for a primary marketing message or call to action -->
	<div class="center">
		<a href="?page=login"><button type="button" class="btn btn-primary">Login</button></a>
		<div class="divider"/></div>
		<a href="?page=signup"><button type="button" class="btn btn-primary">Sign Up</button></a>
	</div>

	<!-- php else statement -->
	<?php } else { ?>
		<?php include('templates/account_buttons.php'); ?>
	<?php } ?>
	</br>
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-9">
				<h3>HUNGER IN CANADA</h3>
				<p>Despite living in one of the wealthiest countries in the world, far too many Canadians struggle with hunger and food insecurity. In order to end this problem, we have to have a good understanding of it</p>
				<br>
				<h3>WHAT IS FOOD SECURITY?</h3>
				<p>According to the Food and Agriculture Organization (FAO) of the United Nations, Food Security exists when:</p>
				<blockquote>“All people, at all times, have physical and economic access to sufficient, safe and nutritious food to meet their dietary needs and food preferences for an active and healthy life.”</blockquote>
				<p>Being food secure within Canada’s food system requires the following:</p>
				<ul>
					<li>We need to have access to food we can purchase or grow.</li>
					<li>We need to get to where the food is.</li>
					<li>We need to have enough money to buy it.</li>
					<li>We need to enjoy the food we eat and it has to be culturally acceptable.</li>
					<li>We need food that is produced in a way that sustains our environment.</li>
					<li>We need food that nourishes us and doesn’t jeopardize our health</li>
				</ul>
				<p>If any of these requirements were to not exist, food Insecurity would be the result.</p>
				<p>Food insecurity is often associated with a household's financial ability to access adequate food due to low income levels, poverty, the rising cost of food, geographic isolation and the lack of affordable transportation to get to food sources.</p>
			</div>
			<br>
			<div class="col-md-3">
				<div class="center">
					<img src="images/logo.png">
				</div>
			</div>
			<div class="col-md-13">
				<p>Food Insecurity:</p>
				<blockquote>"The inability to acquire or consume an adequate diet of quality or sufficient quantity of food in socially acceptable ways, or the uncertainty that one will be able to do so."</blockquote>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
					<h3>ARE FOOD BANKS SOLVING THE PROBLEM?</h3>
					<p>While food banks are an important part of emergency food relief system, not every community has a food bank, and an estimated 3/4 of households experiencing food insecurity do not use food banks (Tarasuk et al., 2011).</p>
					<p>As for those who are forced to access food banks to get the food they need to survive, they often feel diminished by the experience, and leave feeling far from nourished or hopeful. And they are often met with a lack of food choices with which to fulfill their needs for sufficient, healthy and culturally appropriate food.</p>
					<p>Although food banks started about three decades ago as a temporary response to a recession, Canadians have now grown accustomed to a permanent charitable food network in Canada, with millions donating to food drives and thousands volunteering to support their local food banks. However, the growth of food banks, combined with the growing problem of household food insecurity, shows that neither food banks nor other community-based approaches are able to adequately address this problem. (Food Banks Canada, 2012)</p>
				</div>
			</div>

			<div class="col-md-12">
				<h3>Want to learn more?</h3><br>
				<p><a href="http://www.conferenceboard.ca/e-library/abstract.aspx?did=5723">Conference Board of Canada – Enough for All: Household Food Security in Canada (2013)</a></p>
				<p><a href="http://www.foodbankscanada.ca/getmedia/76907192-263c-4022-8561-73a16c06dd2f/HungerCount_2014_EN_HR.pdf.aspx">Food Banks Canada - HungerCount (2014)</a></p>
				<p><a href="http://foodsecurecanada.org/sites/default/files/fsc-resetting2012-8half11-lowres-en.pdf">People’s Food Policy – Resetting the Table (2012)</a></p>
				<p><a href="http://nutritionalsciences.lamp.utoronto.ca/wp-content/uploads/2014/05/Household_Food_Insecurity_in_Canada-2012_ENG.pdf">PROOF Network – Household Food Insecurity in Canada (2011)</a></p>
				<p><a href="http://communityrenewal.ca/sites/all/files/resource/MW190313.pdf">Leslie Brown's - Redesigning Canada's Food System (2008)</a></p><br>
			</div>

			<div class="col-md">
				<div class="center">
					<img src="images/logo.png">
				</div>
			</div>
		</div>
	</div>
</div>