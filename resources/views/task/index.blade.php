@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <section class="section">
            <div class="section-header">
                <h1>Slider</h1>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                  <h4>Card Header</h4>
                  <div class="card-header-action">
                    <a href="{{ route('task.create') }}" class="btn btn-primary">
                     Create New
                    </a>
                  </div>
                </div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
              </div>
        </section>
    </div>
</div>



@endsection()



@push('scripts')
<script type="module">
    $(document).ready(function() {
        $('#task-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('task.index') }}', // Assuming you have the correct route
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush
