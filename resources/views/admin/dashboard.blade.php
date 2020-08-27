@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Score') }}</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('play',['id' => '5']) }}" style="margin-bottom: 20px;">
                        {{ __('Play') }}
                    </a>
                    <table class="table table-bordered" id="score-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Score</th>
                                <th>Level</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function() {
    var table = $('#score-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route("admin.dashboard")}}',
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            { data: 'name', name: 'name' },
            { data: 'score', name: 'score' },
            { data: 'level', name: 'level' },
            { data: 'date', name: 'date' }
        ],
    });

    $('.searchtype').on('change', function() {
        table.draw();
    });
});
</script>
@endsection