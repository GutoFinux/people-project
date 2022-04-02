@extends('components.page')

@section('title')
    People Project - Details Person
@endsection

@section('content')
    <div class="page-body">
        <div class="row">
            <!-- card1 start -->
            <div class="col-md-6 col-xl-12">
                <div class="card widget-card-1">
                    <div class="card">
                        <form>
                            <div class="form-group" align="center">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="text-align:center;" disabled>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group" align="center">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="text-align:center;" disabled>
                                <small id="emailHelp" class="form-text text-muted">Letters and numbers.</small>
                            </div>
                            <div class="form-group" align="center">
                                <a class="btn btn-secondary" href="{{ route('dashboard') }}">
                                    << Back
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection