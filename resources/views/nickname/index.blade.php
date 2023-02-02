@extends('layout.mainlayout')

@section('title', 'Cek Username')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card mt-5">
                    <div class="card-body">

                        <form action="/store" method="get">
                            {{-- @csrf --}}
                            <label for="">ID</label>
                            <input type="number" name="id" class="form-control" id="">
                            <label for="">ID Server</label>
                            <input type="number" name="server" class="form-control" id="">
                            <button type="submit" class="btn btn-primary mt-3">Search</button>
                            <p></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
