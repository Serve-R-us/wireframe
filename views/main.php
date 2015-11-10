<div class="container">
      
    <!-- php if statement -->
    <?php if (!isset($_SESSION['username'])) { ?>
    <!-- Main component for a primary marketing message or call to action -->
    <div class="center">
      <a href="?page=login"><button type="button" class="btn btn-primary">Login</button></a>
      <div class="divider"/></div>
      <a href="?page=signup"><button type="button" class="btn btn-primary">Sign Up</button></a>
    </div>
    
    <!-- php else statement -->
    <?php } else { ?>
            <?php include('templates/account_buttons.php'); ?>
    <?php } ?>
        

        <!-- Jumbotron -->
    </br>
    <div class="jumbotron"> 
      <div class="row">

        <div class="col-md-9">
          <h2>What is Trick Or Eat?</h2>
          <p>Trick or Eat is a youth-led national event that puts a new spin on the annual night of giving – Halloween! Thousands of Trick or Eaters across Canada, go door to door to collect food for local community organizations, and funds to support students advocating for good food for all. Trick or Eat is a national day of action, for young people to come together and actively show that they want to see a difference on the issue of hunger on their campuses and in their communities.</p>
          <p></p>
          <p>
            <a class="btn btn-primary" href="?page=about" role="button">Learn more</a>
          </p>
        </div>

        <div class="col-md-3">
          <div class="center">
            <img src="images/logo.png">
          </div>
        </div>

      </div>
    </div>

    <div class="row">
        <div class="col-md-5">
          <div class="jumbotron">  
            <h3>Other stuff</h3>
            <p1>Put anything else here</p1>
          </div>
        </div>

        <div class="col-md-7">
          <div class="jumbotron">  
            <h3>Did You Know?</h3>
            </br><p1>Serve R Us is the superior team in CIS3750.</p1>
            </br></br><p1>1 in 8 Canadian households experience food insecurity, meaning they don't have sufficient access to the food they need to meet their dietary needs.</p1>
            </br></br><p1>Almost 850,000 Canadians receive food from a food bank each month.</p1>
            </br></br><p1>Since 2008, food bank use has increased in every province and territory, except Newfoundland.</p1>
            </br></br><p1>More than a third of those helped by food banks are children.</p1>
            </br></br><p1>Healthcare costs are considerably greater for households facing food insecurity than those that are food secure.</p1>
          </div>
        </div>
    </div>
      
  </div> <!-- /container -->