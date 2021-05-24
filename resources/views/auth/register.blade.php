@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register NGO') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                            <div class="col-md-6">
                                <select id="district" class="form-control " name="district" value="" required >
                                <option>select</option>
                                <option value="Dhenkanal">Dhenkanal</option>
                                <option value="Cuttack">Cuttack</option>
                                <option value="khordha">khordha</option>
                                <option value="Angul">Angul</option>
                                </select>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Organization_Name" class="col-md-4 col-form-label text-md-right">{{ __('Organization Name') }}</label>

                            <div class="col-md-6">
                                <input id="Organization_Name" type="text" class="form-control " name="organization_name" value="" required >

                            
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="organization_address" class="col-md-4 col-form-label text-md-right">{{ __('Organization Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="organization_address"  class="form-control" name="organization_address" value="" required ></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Organization Incorparate Certificate in PDF format') }}</label>

                            <div class="col-md-6">
                                <input id="org_ic_pdf" type="file" class="form-control" name="org_ic_pdf" value="" required  >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="address"  class="form-control " name="address" value="" required ></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Contact number') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required >

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mip_pdf" class="col-md-4 col-form-label text-md-right">{{ __('My Id proof in PDF') }}</label>

                            <div class="col-md-6">
                                <input id="mip_pdf" type="file" class="form-control @error('mip_pdf') is-invalid @enderror" name="mip_pdf" value="" required >

  
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wp_number" class="col-md-4 col-form-label text-md-right">{{ __('WhatsApp Number (Optional)') }}</label>

                            <div class="col-md-6">
                                <input id="wp_number" type="tel" class="form-control" name="wp_number" value="" >

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="md_org" class="col-md-4 col-form-label text-md-right">{{ __('My Designation in the organization') }}</label>

                            <div class="col-md-6">
                                <input id="md_org" type="text" class="form-control " name="md_org" value="" required >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select id="gender" type="" class="form-control " name="gender" value="" required>
                                <option value="">select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                                </select>

                            
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="org_logo" class="col-md-4 col-form-label text-md-right">{{ __('Organization Logo in PNG or JPEG') }}</label>

                            <div class="col-md-6">
                                <input id="org_logo" type="file" class="form-control " name="org_logo" value="" required >
                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
