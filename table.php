<?php include('include/nav.php'); ?>

<h1 class="center p-5 m-5">Tabular Representation</h1>

<table class="table m-5" id="table_id">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>

    <tbody>

        <!-- your code goes here  -->
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
    </script>

<?php include('include/footer.php'); ?>