$(document).ready(function() {
    $('#ranking').DataTable();
} );
$('#ranking').dataTable( {
  "columns": [
    { "orderable": false },
    { "orderable": false },
    null,
    null
  ]
} );
