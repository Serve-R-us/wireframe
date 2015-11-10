<?php include('config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php'); ?>

<link href="css/maps.css" rel="stylesheet">

<div class="container">

  <!-- Page header -->
  <div class="page-header">
    <h1>Team Route Selection <small>Maps</small></h1>
  </div>

  <!-- Route type selection -->
  <div class="maps-section">
    <div class="btn-group btn-group-justified route-type" role="group">
      <a class="btn btn-default" id="route-walking" role="button">Walking</a>
      <a class="btn btn-default" id="route-bus" role="button">Bus</a>
      <a class="btn btn-default" id="route-driving" role="button">Driving</a>
    </div>
  </div>

  <!-- Map -->
  <div class="maps-section">
    <div class="jumbotron maps-google-content">
      <h1>Select a route type above.</h1>
    </div>
  </div>

  <!-- Route selection: Fake example routes are used, would normally be dynamically allocated with js -->
  <div class="maps-section route-selection" style="display: none;">
    <!-- Walking route selection-->
    <div class="list-group panel items-walking" style="display: none;">
      <button href="#teams1" class="btn btn-default list-group-item full" data-toggle="collapse">
        <span class="badge">Full 5/5</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>1.</strong> Route A</li>
          <li><strong>Start Time:</strong> 5:30</li>
          <li><strong>Distance:</strong> 4km</li>
        </ul>
      </button>
      <div class="collapse" id="teams1">
        <span class="list-group-item">Teams currently on this route:</span>
        <span class="list-group-item"><strong>Team A</strong></span>
        <span class="list-group-item"><strong>Team B</strong></span>
      </div>
      <button class="btn btn-default list-group-item accessible">
        <span class="badge">0/6</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>2.</strong> Route B</li>
          <li><strong>Start Time:</strong> 5:30</li>
          <li><strong>Distance:</strong> 3km</li>
          <!-- Accessible icon -->
          <li><span class="glyphicon glyphicon-asterisk"></span></li>
        </ul>
      </button>
      <button href="#teams2" class="btn btn-default list-group-item" data-toggle="collapse">
        <span class="badge">1/7</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>3.</strong> Route C</li>
          <li><strong>Start Time:</strong> 6:30</li>
          <li><strong>Distance:</strong> 4km</li>
        </ul>
      </button>
      <div class="collapse" id="teams2">
        <span class="list-group-item">Teams currently on this route:</span>
        <span class="list-group-item"><strong>Team C</strong></span>
      </div>
      <button class="btn btn-default list-group-item accessible">
        <span class="badge">0/4</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>4.</strong> Route D</li>
          <li><strong>Start Time:</strong> 5:30</li>
          <li><strong>Distance:</strong> 1km</li>
          <!-- Accessible icon -->
          <li><span class="glyphicon glyphicon-asterisk"></span></li>
        </ul>
      </button>
    </div>

    <!-- Bus route selection-->
    <div class="list-group panel items-bus" style="display: none;">
      <button href="#teams3" class="btn btn-default list-group-item" data-toggle="collapse">
        <span class="badge">4/5</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>1.</strong> Route E</li>
          <li><strong>Start Time:</strong> 6:30</li>
          <li><strong>Distance:</strong> 4km</li>
        </ul>
      </button>
      <div class="collapse" id="teams3">
        <span class="list-group-item">Teams currently on this route:</span>
        <span class="list-group-item"><strong>Team D</strong></span>
      </div>
      <button class="btn btn-default list-group-item">
        <span class="badge">0/6</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>2.</strong> Route F</li>
          <li><strong>Start Time:</strong> 6:30</li>
          <li><strong>Distance:</strong> 3km</li>
        </ul>
      </button>
      <button href="#teams4" class="btn btn-default list-group-item" data-toggle="collapse">
        <span class="badge">2/4</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>3.</strong> Route G</li>
          <li><strong>Start Time:</strong> 5:30</li>
          <li><strong>Distance:</strong> 1km</li>
        </ul>
      </button>
      <div class="collapse" id="teams4">
        <span class="list-group-item">Teams currently on this route:</span>
        <span class="list-group-item"><strong>Team E</strong></span>
      </div>
    </div>

    <!-- Driving route selection-->
    <div class="list-group panel items-driving" style="display: none;">
      <button class="btn btn-default list-group-item">
        <span class="badge">0/5</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>1.</strong> Route H</li>
          <li><strong>Start Time:</strong> 6:30</li>
          <li><strong>Distance:</strong> 3km</li>
        </ul>
      </button>
      <button class="btn btn-default list-group-item">
        <span class="badge">0/6</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>2.</strong> Route I</li>
          <li><strong>Start Time:</strong> 6:30</li>
          <li><strong>Distance:</strong> 2km</li>
        </ul>
      </button>
      <button href="#teams6" class="btn btn-default list-group-item full accessible" data-toggle="collapse">
        <span class="badge">Full 4/4</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>3.</strong> Route J</li>
          <li><strong>Start Time:</strong> 5:30</li>
          <li><strong>Distance:</strong> 1km</li>
          <!-- Accessible icon -->
          <li><span class="glyphicon glyphicon-asterisk"></span></li>
        </ul>
      </button>
      <div class="collapse" id="teams6">
        <span class="list-group-item">Teams currently on this route:</span>
        <span class="list-group-item"><strong>Team F</strong></span>
      </div>
      <button class="btn btn-default list-group-item accessible">
        <span class="badge">0/7</span>
        <ul class="list-inline">
          <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></li>
          <li><strong>4.</strong> Route K</li>
          <li><strong>Start Time:</strong> 5:30</li>
          <li><strong>Distance:</strong> 1km</li>
          <!-- Accessible icon -->
          <li><span class="glyphicon glyphicon-asterisk"></span></li>
        </ul>
      </button>
    </div>

    <!-- Error: route full -->
    <div class="maps-section" id="error-full" style="display: none;">
      <div id="error" class="alert alert-danger" role="alert">
        <p><strong>Sorry</strong>, that route is full. Please select another route.</p>
      </div>
    </div>

    <!-- Route selection confirmation -->
    <div class="confirm">
      <span class="glyphicon glyphicon-asterisk"></span> Indicates accessible route.
      <button type="button" class="btn btn-success pull-right page-scroll">Confirm</button>
    </div>
  </div>

  <!-- footer image -->
  <div class="maps-section">
    <div class="center">
      <img src="images/logo.png">
    </div>
  </div>

  <!-- Normally the modals would be dynamic but the laziness sake there is three modals -->
  <!-- Route confirmation modal -->
  <div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="modal-success">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Success!</h4>
        </div>
        <div class="modal-body">
          You have successfully registered for your selected route.
        </div>
        <div class="modal-footer">
          <a href="teams.php" type="button" class="btn btn-primary">Return to Team Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Route error modal -->
  <div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-error">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Error!</h4>
        </div>
        <div class="modal-body">
          Please select a route.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Route accessibility warning modal -->
  <div class="modal fade" id="modal-warning" tabindex="-1" role="dialog" aria-labelledby="modal-warning">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Warning!</h4>
        </div>
        <div class="modal-body">
          You have selected a route that does not meet you accessibility needs. Continue anyway?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a type="button" class="btn btn-primary warning-continue" data-dismiss="modal">Continue</a>
        </div>
      </div>
    </div>
  </div>

<!-- /container -->
</div>

<?php include('templates/footer.php'); ?>

<!-- Maps javascript -->
<script src="javascript/maps.js"></script>