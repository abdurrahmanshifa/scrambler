@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Score') }}</div>

                <div class="card-body">
                    <table class="table table-bordered" id="score-table">
                        <thead>
                            <tr>
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
            { data: 'name', name: 'name' },
            { data: 'score', name: 'score' },
            { data: 'level', name: 'level' },
            { data: 'date', name: 'date' }
        ],
        "columnDefs":[
          {
            targets:[1],
            orderable: false,
          }
        ],
    });

    $('.searchtype').on('change', function() {
        table.draw();
    });
});
</script>
@endsection