@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Ads') }}</div>

                <div class="card-body">

                    <!--Ad1 Form-->
                    <form id="form1" method="post" action="/ad1">
                        @csrf

                        <div class="form-group row">
                            <label for="ad1" class="col-md-4 col-form-label text-md-right">{{ __('First Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad1" class="form-control" name="ad1" autocomplete="off">{{ old('ad1') }}</textarea>
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
                    
                    <!--Ad2 Form-->
                    <form id="form2" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="ad2" class="col-md-4 col-form-label text-md-right">{{ __('Second Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad2" class="form-control" name="ad2" autocomplete="off">{{ old('ad2') }}</textarea>
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

                    <!--Ad3 Form-->
                    <form id="form3" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="ad3" class="col-md-4 col-form-label text-md-right">{{ __('Third Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad3" class="form-control" name="ad3" autocomplete="off" required="">{{ old('ad3') }}</textarea>
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

                    <!--Ad4 Form-->
                    <form id="form4" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="ad4" class="col-md-4 col-form-label text-md-right">{{ __('Fourth Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad4" class="form-control" name="ad4" autocomplete="off">{{ old('ad4') }}</textarea>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
