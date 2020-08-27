@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Nouns') }}</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('admin.get-nouns') }}" style="margin-bottom: 20px;">
                        {{ __('Get Nouns') }}
                    </a>
                    <table class="table table-bordered" id="score-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Text</th>
                                <th>Jumlah Kata</th>
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
        ajax: '{{route("admin.nouns")}}',
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            { data: 'text', name: 'text' },
            { data: 'count', name: 'count' },
            { data: 'date', name: 'date' }
        ],
    });

    $('.searchtype').on('change', function() {
        table.draw();
    });
});
</script>
@endsection