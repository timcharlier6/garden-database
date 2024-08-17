<!-- resources/views/plants/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Plants</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container mt-5">
<h1>Garden Database</h1>
<table id="myDataTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Espece</th>
                <th>Variete</th>
                <th>Nom Francais</th>
                <th>Zone</th>
                <th>Taille</th>
                <th>Bouture</th>
                <th>Hauteur</th>
                <th>Nbre</th>
                <th>Gout</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plants as $plant)
                <tr>
                    <td>{{ $plant->espece }}</td>
                    <td>{{ $plant->variete }}</td>
                    <td>{{ $plant->nom_francais }}</td>
                    <td>{{ $plant->zone }}</td>
                    <td>{{ $plant->taille }}</td>
                    <td>{{ $plant->bouture }}</td>
                    <td>{{ $plant->hauteur }}</td>
                    <td>{{ $plant->nbre }}</td>
                    <td>{{ $plant->gout }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
    // Initialize DataTable
    $('#myDataTable').DataTable({
    paging: true, // Enable pagination
    searching: true, // Enable search
    ordering: true, // Enable sorting
    info: true, // Show information
    lengthChange: false, // Disable the "Show X entries" dropdown
    });
    });
    </script>
</body>
</html>

