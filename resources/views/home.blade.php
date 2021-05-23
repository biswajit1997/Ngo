@extends('layouts.app')

@section('content')
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



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection