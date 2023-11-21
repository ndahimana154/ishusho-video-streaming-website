$(document).ready(function () {
  $("#menu-button").on("click", function () {
    $(".links").show();
    $("section").hide()
    $("footer").hide()
  });
  $("#closeLinks").on("click", function () {
    $(".links").hide();
    $("section").show()
    $("footer").show()
  });
});
