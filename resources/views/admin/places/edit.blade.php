@extends('partials.master')

@section('content')
<h1>{{ __('Edit place') }} - Admin</h1>
<form action="{{ route('admin.places.update', $place) }}" method="post">
    @csrf
    @method('patch')

    @include('admin.places.form-fields')

    <div class="form-group form-group-actions">
        <button type="submit">{{ __('Update') }}</button>
    </div>
</form>

<h1>{{ __('Edit place') }}</h1>
<form class="form-place" action="{{ route('places.update', $place) }}" method="post">
    @csrf
    @method('patch')

    @include('places.form-fields')

    <div class="form-group form-group-actions">
        <button type="submit">{{ __('Update') }}</button>
    </div>
</form>
@endsection
