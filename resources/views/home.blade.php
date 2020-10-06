@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Ads') }}</div>

                <div class="card-body">
                    <form id="form1" method="post" action="/ad1">
                        @csrf

                        <div class="form-group row">
                            <label for="ad1" class="col-md-4 col-form-label text-md-right">{{ __('First Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad1" class="form-control @error('ad1') is-invalid @enderror" name="ad1" autocomplete="off" required="">{{ old('ad1') }}</textarea>

                                @error('ad1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
