$(document).ready(function() {
  /* route type selection */
  $(".route-type").on("click","> a", function(e) {
    /* hide error on new route type */
    $("#error-full").hide();
    var $this = $(this);
    $(".route-type").find(".active").removeClass("active");
    $this.addClass("active");
    $(".route-selection").show();
  });

  /* display routes based on route type selection */
  $(".route-type").click(function(e) {
    /* hide route types */
    $(".items-walking").hide();
    $(".items-bus").hide();
    $(".items-driving").hide();
    /* show desired route type */
    if(e.target.id == "route-walking") {
      $(".maps-google-content").html("<h1>Walking Map Here</h1><p>Google Maps example below, not active.</p><img src=\"images/busmap.jpg\">");
      $(".items-walking").show();
    }
    if(e.target.id == "route-bus") {
      $(".maps-google-content").html("<h1>Bus Map Here</h1><p>Google Maps example below, not active.</p><img src=\"images/busmap.jpg\">");
      $(".items-bus").show();
    }
    if(e.target.id == "route-driving") {
      $(".maps-google-content").html("<h1>Driving Map Here</h1><p>Google Maps example below, not active.</p><img src=\"images/busmap.jpg\">");
      $(".items-driving").show();
    }
  });

  /* route selection - set active choice */
  $(".list-group").on("click","> button", function(e) {
    /* hide error on new route selection */
    $("#error-full").hide();
    var $this = $(this);
    $(".list-group").find(".active").removeClass("active");
    $this.addClass("active");
  });

  /* confirm button */
  $(".btn-confirm").click(function() {
    /* check if selected route is full */
    if($(".list-group").find(".active").hasClass("full")) {
      $("#error-full").show();
      return;
    }
    /* check if route is not accessibile */
    if(!($(".list-group").find(".active").hasClass("accessible"))) {
      $('#modal-warning').modal("show");
      return;
    }
    /* check if a route is selected */
    if($(".list-group").find(".active").hasClass("active")) {
      $('#modal-success').modal("show");
    }
    /* else display error */
    else {
      $('#modal-error').modal("show");
    }
  });

  /* continue button from warning */
  $(".warning-continue").click(function() {
    $('#modal-success').modal("show");
  });
});