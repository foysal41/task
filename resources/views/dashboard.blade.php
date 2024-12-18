{{--  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
--}}


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

                </div>
              </div>
        </section>
    </div>
</div>



@endsection()



@push('scripts')
  <script>
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
  </script>
@endpush

