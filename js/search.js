$(document).ready(function () {
  $("#searchField").on("input", function () {
    var searchText = $(this).val().trim();
    if (searchText !== '') {
      $("#searchResults").load("./php/client/search.php", {
        s: searchText,
      });
    } else {
      $("#searchResults").html(''); // Clear the content of searchResults
    }
  });
});
