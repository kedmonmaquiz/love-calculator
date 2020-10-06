@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(\Session::has('status'))
              <div class="alert alert-success py-2">{{Session('status')}}</div>
            @endif


            <div class="card">
                <div class="card-header bg-success text-white">{{ __('Ads Management') }}</div>

                <div class="card-body">

                    <!--Ad1 Form-->
                    <form id="form1" method="post" action="/ad">
                        @csrf
                        <div>
                            <input type="hidden" name="type" value="ad1">
                        </div>
                        <div class="form-group row">
                            <label for="ad" class="col-md-4 col-form-label text-md-right">{{ __('First Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad" class="form-control" {{\App\Models\Ad::where('type','ad1')->get()->count() == 1 ? '':'required'}} name="body" autocomplete="off">@if(\App\Models\Ad::where('type','ad1')->first()){{\App\Models\Ad::where('type','ad1')->first()->body}}@endif</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if(\App\Models\Ad::where('type','ad1')->get()->count() == 0 || \App\Models\Ad::where('type','ad1')->first()->body=="")
                                  <button type="submit" class="btn btn-success">
                                    {{ __('Save') }}
                                  </button>
                                  @else
                                  <button type="submit" class="btn btn-danger update-btn">
                                    {{ __('Update') }}
                                </button>
                                @endif
                            </div>
                        </div>

                    </form>

                    <hr>
                    
                    <!--Ad2 Form-->
                    <form id="form2" method="post" action="/ad">
                        @csrf
                        <div>
                            <input type="hidden" name="type" value="ad2">
                        </div>
                        <div class="form-group row">
                            <label for="ad" class="col-md-4 col-form-label text-md-right">{{ __('Second Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad" class="form-control" {{\App\Models\Ad::where('type','ad2')->get()->count() == 1 ? '':'required'}} name="body" autocomplete="off">@if(\App\Models\Ad::where('type','ad2')->first()){{\App\Models\Ad::where('type','ad2')->first()->body}}@endif</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if(\App\Models\Ad::where('type','ad2')->get()->count() == 0 || \App\Models\Ad::where('type','ad2')->first()->body=="")
                                  <button type="submit" class="btn btn-success">
                                    {{ __('Save') }}
                                  </button>
                                  @else
                                  <button type="submit" class="btn btn-danger update-btn">
                                    {{ __('Update') }}
                                </button>
                                @endif
                            </div>
                        </div>

                    </form>

                    <hr>

                    <!--Ad3 Form-->
                    <form id="form3" method="post" action="/ad">
                        @csrf
                        <div>
                            <input type="hidden" name="type" value="ad3">
                        </div>
                        <div class="form-group row">
                            <label for="ad" class="col-md-4 col-form-label text-md-right">{{ __('Third Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad" class="form-control" {{\App\Models\Ad::where('type','ad3')->get()->count() == 1 ? '':'required'}} name="body" autocomplete="off">@if(\App\Models\Ad::where('type','ad3')->first()){{\App\Models\Ad::where('type','ad3')->first()->body}}@endif</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if(\App\Models\Ad::where('type','ad3')->get()->count() == 0 || \App\Models\Ad::where('type','ad3')->first()->body=="")
                                  <button type="submit" class="btn btn-success">
                                    {{ __('Save') }}
                                  </button>
                                  @else
                                  <button type="submit" class="btn btn-danger update-btn">
                                    {{ __('Update') }}
                                </button>
                                @endif
                            </div>
                        </div>

                    </form>

                    <hr>

                    <!--Ad4 Form-->
                    <form id="form4" method="post" action="/ad">
                        @csrf
                        <div>
                            <input type="hidden" name="type" value="ad4">
                        </div>
                        <div class="form-group row">
                            <label for="ad" class="col-md-4 col-form-label text-md-right">{{ __('Fourth Ad') }}</label>

                            <div class="col-md-6">
                                <textarea id="ad" class="form-control" {{\App\Models\Ad::where('type','ad4')->get()->count() == 1 ? '':'required'}} name="body" autocomplete="off">@if(\App\Models\Ad::where('type','ad4')->first()){{\App\Models\Ad::where('type','ad4')->first()->body}}@endif</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                @if(\App\Models\Ad::where('type','ad4')->get()->count() == 0 || \App\Models\Ad::where('type','ad4')->first()->body=="")
                                  <button type="submit" class="btn btn-success">
                                    {{ __('Save') }}
                                  </button>
                                  @else
                                  <button type="submit" class="btn btn-danger update-btn">
                                    {{ __('Update') }}
                                </button>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
