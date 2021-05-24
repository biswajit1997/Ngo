@extends('layouts.app')

@section('content')
@if ($data->role == 'ngo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">

                    <div>{{ __('Dashboard') }}</div>

                    <div class="text-right">
                        <img src="{{ asset('storage/'.$data->org_logo)}}" alt="image" width="100px" height="50px">

                    </div>


                </div>


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <div>
                        <div class="row">
                            <div class="col-4">
                                <label>Name</label> : {{$data->name}}
                            </div>
                            <div class="col-5">
                                <label>Email</label> : {{$data->email}}
                            </div>
                            <div class="col-3">
                                <label>District</label> : {{$data->district}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label>Organization Name</label> : {{$data->organization_name}}

                            </div>
                            <div class="col-6">
                                <label>Organization Address</label> : {{$data->organization_address}}

                            </div>
                            <!-- <div class="col-4">
                                <label>Organization Certificate</label> : {{$data->org_ic_pdf}}

                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label>Address</label> : {{$data->address}}

                            </div>
                            <div class="col-4">
                                <label>Mobile</label> : {{$data->mobile}}

                            </div>
                            <div class="col-4">
                                <label>gender</label> : {{$data->gender}}

                            </div>

                        </div>
                        <div class="row">
                            <!-- <div class="col-4">
                                <label>mip_pdf</label> : {{$data->mip_pdf}}

                            </div> -->

                            <div class="col-4">
                                <label>WhatsApp Number</label> : {{$data->wp_number}}

                            </div>
                            <div class="col-4">
                                <label>md_org</label> : {{$data->md_org}}

                            </div>
                        </div>

                        <div class="text-right">
                            <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">

                    <div>{{ __(' Admin Dashboard') }}</div>




                </div>


                <div class="card-body">


                    <div class="mt-5">
                        <form method="post" action="{{ route('search') }}">
                            @csrf
                            <div class="d-flex">
                                <label>Choose District :</label>
                                <select class="form-control" id="district" name="dist">
                                    <option value="Angul">Anugul</option>
                                    <option value="Dhenkanal">Dhenkanal</option>
                                    <option value="Cuttack">Cuttack</option>
                                    <option value="Khordha">Khordha</option>
                                </select>
                            </div>
                            <div class="text-right mb-2">
                                <input type="submit" name="submit" class="btn btn-secondary" />
                            </div>
                        </form>


                        <div>
                            @if(session()->has('message'))
                            <div class="alert {{session('alert') ?? 'alert-info'}}">
                                {{ session('message') }}
                            </div>
                            @endif
                            <table class="table table-bordered ">
                                <thead>
                                    <th>Slno</th>
                                    <th>Logo</th>
                                    <th>Mobile</th>
                                    <th>District</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    @foreach($deta as $key => $item)
                                    @if ($item->role == 'ngo')
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img src="{{asset('storage/'.$item->org_logo)}}" alt="logo" width="100px" height="50px" /></td>
                                        <td>{{$item->mobile}}</td>
                                        <td>{{$item->district}}</td>
                                        <td class="text-center"><a href="single/ngo/{{$item->id}}"><button class="btn btn-primary">View</button></a></td>
                                        <td class="text-center"><a href="/home/ngo/delete/{{$item->id}}"><button class="btn btn-danger">Delete</button></a></td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
<!-- Button trigger modal -->

<!-- Modal -->
@if ($data->role == 'ngo')
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('update') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{$data->name}}" required>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{$data->email}}" required>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>

                        <div class="col-md-6">
                            <select id="district" class="form-control " name="district" value="{{$data->district}}" required>
                                <option>select</option>
                                <option value="Dhenkanal">Dhenkanal</option>
                                <option value="Cuttack">Cuttack</option>
                                <option value="khordha">khordha</option>
                                <option value="Angul">Angul</option>
                            </select>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Organization_Name" class="col-md-4 col-form-label text-md-right">{{ __('Organization Name') }}</label>

                        <div class="col-md-6">
                            <input id="Organization_Name" type="text" class="form-control " name="organization_name" value="{{$data->organization_name}}" required>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="organization_address" class="col-md-4 col-form-label text-md-right">{{ __('Organization Address') }}</label>

                        <div class="col-md-6">
                            <textarea id="organization_address" class="form-control" name="organization_address" value="{{$data->organization_address}}" required>{{$data->organization_address}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Organization Incorparate Certificate in PDF format') }}</label>

                        <div class="col-md-6">
                            <input id="org_ic_pdf" type="file" class="form-control" name="org_ic_pdf" value="" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            <textarea id="address" class="form-control " name="address" value="{{$data->address}}" required>{{$data->address}}</textarea>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Contact number') }}</label>

                        <div class="col-md-6">
                            <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ $data->mobile }}" required>

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
                            <input id="mip_pdf" type="file" class="form-control @error('mip_pdf') is-invalid @enderror" name="mip_pdf" value="" required>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="wp_number" class="col-md-4 col-form-label text-md-right">{{ __('WhatsApp Number (Optional)') }}</label>

                        <div class="col-md-6">
                            <input id="wp_number" type="tel" class="form-control" name="wp_number" value="{{$data->wp_number}}">


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="md_org" class="col-md-4 col-form-label text-md-right">{{ __('My Designation in the organization') }}</label>

                        <div class="col-md-6">
                            <input id="md_org" type="text" class="form-control " name="md_org" value="{{$data->md_org}}" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                        <div class="col-md-6">
                            <select id="gender" type="" class="form-control " name="gender" value="{{$data->gender}}" required>
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
                            <input id="org_logo" type="file" class="form-control " name="org_logo" value="" required>

                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@else
@endif