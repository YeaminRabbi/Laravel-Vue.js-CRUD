@extends('layouts.app')

@section('content')
    <div id="vue-app">
        <student-form-component
            scope="{{ $scope }}"
            :id="{{ $id ?? 0 }}"

        >
        </student-form-component>
    </div>
@endsection