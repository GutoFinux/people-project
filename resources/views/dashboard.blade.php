@extends('components.page')

@section('title')
    People Project - Dashboard
@endsection

@section('content')
    <div class="page-body">
        <div class="row">
            <!-- card1 start -->
            <div class="col-md-6 col-xl-12">
            <a href="{{ route('new_person') }}" class="btn btn-success">New Person</a>
                <div class="card widget-card-1">
                    <div class="card">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr align="center">
                                    <td><b>Name</b></td>
                                    <td><b>Options</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    <td>Otto</td>
                                    <td>
                                        <a type="button" class="btn btn-primary" href="{{ route('details_person') }}">Details</a>
                                        <a type="button" class="btn btn-warning" href="{{ route('edit_person') }}">Edit</a>
                                        <a type="button" class="btn btn-danger" href="#">Delete</a>
                                    </td>
                                </tr>
                                <tr align="center">
                                    <td>Thornton</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Details</button>
                                        <button type="button" class="btn btn-warning">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr align="center">
                                    <td>the Bird</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Details</button>
                                        <button type="button" class="btn btn-warning">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection