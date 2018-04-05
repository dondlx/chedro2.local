@extends ('layouts.master')

@section ('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js">
    </script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#contactlist').DataTable({
                "iDisplayLength" : 25
            });
        } );
    </script>
    <h2>Contacts</h2>
    <div class="table-responsive">
        <table class="table table-sm table-hover" id="contactlist">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Telephone</th>
             </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->designation }}</td>
                        <td>{{ $contact->telephone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection