@extends ('layouts.master')


@section ('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js">
    </script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#heilist').DataTable({
                "iDisplayLength" : 25
            });
        } );
    </script>
    <h2>HEIs</h2>
    <div class="table-responsive">
        <table class="table table-sm table-hover" id="heilist">
            <thead>
                <tr>
                    <th>HEI</th>
                    <th>Location</th>
                    <th>Head of Institution</th>
                    <th>Designation of Head</th>
             </tr>
            </thead>
            <tbody>
                @foreach ($hei_listings as $hei_listing)
                    <tr>
                        <td>{{ $hei_listing->name }}</td>
                        <td>
                            {{ $hei_listing->address . ", " . $hei_listing->city . ", " . $hei_listing->province }}
                        </td>
                        <td>{{ $hei_listing->head_of_institution }}</td>
                        <td>{{ $hei_listing->designation }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection