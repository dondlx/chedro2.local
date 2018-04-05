@extends ('layouts.master')

@section ('content')
    <div class="row">
        <div class="col-md-8">
            <h2>{{ $hei->name }}</h2>
            <div class="row">
                <div class="col-md-3">Unique HEI ID</div>
                <div class="col-md-9">{{ $hei->code }}</div>
            </div>
            <div class="row">
                <div class="col-md-3">Form of Ownership</div>
                <div class="col-md-9">{{ $hei->form_of_ownership }}</div>
            </div>
        </div>
        <div class="col-md-4">
            Location
        </div>
    </div>
    <div class="row">
        <div class="program_offerings">
            <ul class="list-group">
                @foreach ($hei->program_offerings as $program_offering)
                    <li class="list-group-item">
                        <strong>
                            {{ $program_offering->name }}
                        </strong>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection