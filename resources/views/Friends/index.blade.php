@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<div class="row">

    @foreach ($friends as $friend)
    <div class="col-sm-4">
        <div class="card border-primary mb-3" style="max-width: 18rem;">

            <div class="card-body text-primary">
                <a href="/friends/{{$friend['id']}}" class="card-title">{{ $friend['nama'] }}</a>
                <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
                <p class="card-text">{{ $friend['alamat'] }}</p>
                <p class="card-text">{{ $friend['jenis_kelamin'] }}</p>
                <p class="card-text">{{ $friend['instagram'] }}</p>

                <a href="/friends/{{$friend['id']}}/edit" class="card-link btn-warning">Edit Teman</a>
                <form action="/friends/{{ $friend['id'] }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="card-link btn-danger">Delete Teman</b>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div>
    {{ $friends-> links() }}
</div>
</div>
@endsection
</div>