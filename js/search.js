$(document).ready(function () {
  $("#searchField").on("input", function () {
    var searchText = $(this).val().trim();
    $("#searchResults").load("./php/client/search.php", {
      s: searchText,
    });
  });
});
