$(document).ready(function () {
  var searchType = "movie";

  $("#movie").on("click", function () {
    $(this).addClass("live-search");
    searchType = "movie";
    $("#series").removeClass("live-search");
    sendSearchRequest();
  });

  $("#series").on("click", function () {
    $(this).addClass("live-search");
    searchType = "serie";
    $("#movie").removeClass("live-search");
    sendSearchRequest();
  });

  $("#searchField").on("input", function () {
    sendSearchRequest();
  });

  function sendSearchRequest() {
    var searchText = $("#searchField").val().trim();
    if (searchText !== "") {
      $("#searchResults").load("./php/client/search.php", {
        s: searchText,
        st: searchType,
      });
    } else {
      $("#searchResults").html(""); // Clear the content of searchResults
    }
  }
});
  