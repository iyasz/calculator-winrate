@extends('layout.mainlayout')

@section('title', 'Winrate')

@section('content')
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="/cekwr" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Total Pertandingan</label>
                                <input type="number" value="{{ old('tPer') }}" class="form-control" autocomplete="off" name="tPer" id="">
                                @error('tPer') <p class="mb-0 mt-2">{{$message}}</p> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Total Winrate </label>
                                <input type="float" value="{{ old('tWr') }}" class="form-control" autocomplete="off" name="tWr" id="">
                                @error('tWr') <p class="mb-0 mt-2">{{$message}}</p> @enderror
                            </div>
                            <div class="">
                                <label for="">Winrate Yang Diinginkan </label>
                                <input type="float" value="{{ old('reqWr') }}" class="form-control" autocomplete="off" name="reqWr" id="">
                                @error('reqWr') <p class="mb-0 mt-2">{{$message}}</p> @enderror
                            </div>
                            <p class="mb-0 pt-2"> @if(SESSION('data')) {{SESSION('data')}} @endif </p>
                            <button class="btn btn-primary w-100 mt-3">Hasil</button>
                        </form>
                    </div>
                </div>
@endsection
