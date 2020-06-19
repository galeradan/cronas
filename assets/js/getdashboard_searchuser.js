
$(document).ready(function(){

  // $('#dashboardTable').DataTable();

  $("#searchTable").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#resultTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
