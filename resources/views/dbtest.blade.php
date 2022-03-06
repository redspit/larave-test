@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        @php ($i=1)
        @forelse ($users as $user)
            <div class="card mb-3 bg-warning" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-2">
                        <span class="h1 text-dark">{{ $i++}}</span>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            @if (Str::contains($user->name,'Mr. Luqman'))
                                <h4 class="card-title text-primary">{{ $user->name }}</h4>
                                <p class="card-text text-dark">{{ $user->email }}</p>
                            @else
                                <h4 class="card-title text-success">{{ $user->name }}</h4>
                                <p class="card-text text-dark">{{ $user->email }}</p>
                            @endif

                            {{-- @unless is oppisit of "if" f it is not empty show it--}}
                            @unless(empty($hi))
                             <span class="card-text text-dark"><small>{{ $hi }}</small></span>
                             @endunless
                            <span class="card-text text-dark"><small>{{ $user->id }}</small></span>

                        </div>
                    </div>

                </div>
            </div>
            @empty
            <div class="card mb-3 bg-warning" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                                <h4 class="card-title text-primary">No Users Found</h4>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
@stop

        {{-- @for ($i = 0; $i <= count($users) - 1; $i++)
            <div class="card mb-3 bg-warning" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <span class="h1 text-dark">{{ $users->id }}</span>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            @if ($users->name == 'Mr. Luqman')
                                <h4 class="card-title text-primary">{{ $users->name }}</h4>
                                <p class="card-text text-dark">{{ $users->email }}</p>
                            @else
                                <h4 class="card-title text-success">{{ $users->name }}</h4>
                                <p class="card-text text-dark">{{ $users->email }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endfor --}}

        {{-- @foreach ($users as $user)
            <div class="card mb-3 bg-warning" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <span class="h1 text-dark">{{ $user->id }}</span>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            @if ($user->name == 'Mr. Luqman')
                                <h4 class="card-title text-primary">{{ $user->name }}</h4>
                                <p class="card-text text-dark">{{ $user->email }}</p>
                            @else
                                <h4 class="card-title text-success">{{ $user->name }}</h4>
                                <p class="card-text text-dark">{{ $user->email }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}

        {{-- @switch($type)
            @case(1)

                 @break
             @case(2)

                 @break
             @default

             @endswitch --}}
