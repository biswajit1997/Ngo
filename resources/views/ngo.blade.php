<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body>
   
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <a href="javascript:history.back()" class="btn btn-secondary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill mr-2" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>back</a>

                <div class="card">
                    <div class="card-header d-flex justify-content-between">

                        <!-- <div>
                        <h3>{{ __('Profile') }}
                    </div> -->

                        <div class="text-left">
                            <img src="{{ env('MIX_STORAGE_PATH').$response->org_logo}}" alt="image" width="100px" height="50px">

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
                                    <label>Name</label> : {{$response->name}}
                                </div>
                                <div class="col-5">
                                    <label>Email</label> : {{$response->email}}
                                </div>
                                <div class="col-3">
                                    <label>District</label> : {{$response->district}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label>Organization Name</label> : {{$response->organization_name}}

                                </div>
                                <div class="col-6">
                                    <label>Organization Address</label> : {{$response->organization_address}}

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label>Address</label> : {{$response->address}}

                                </div>
                                <div class="col-4">
                                    <label>Mobile</label> : <a href="tel: {{$response->mobile}}">{{$response->mobile}}</a>
                                </div>
                                <div class="col-4">
                                    <label>Gender</label> : {{$response->gender}}

                                </div>

                            </div>
                            <div class="row">


                                <div class="col-4">
                                    <label>WhatsApp Number</label> : {{$response->wp_number}}

                                </div>
                                <div class="col-4">
                                    <label>Designation in the organization
                                    </label> : {{$response->md_org}}

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr />
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">

                        <div>{{ __('Documents') }}</div>




                    </div>


                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        Organization Incorparate Certificate
                                    </td>
                                    <td>
                                        <a href="{{ env('MIX_STORAGE_PATH').$response->org_ic_pdf}}" target="_blank" class="btn btn-warning btn-sm mr-3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill mr-2" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>View</a>
                                        <a href="{{ env('MIX_STORAGE_PATH').$response->org_ic_pdf}}" class="btn btn-primary btn-sm" download="Organization Incorparate Certificate"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill mr-2" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                            </svg>Download</a>
                                        <!-- {{$response->org_ic_pdf}} -->
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>
                                        Id proof
                                    </td>
                                    <td>


                                        <a href="{{ env('MIX_STORAGE_PATH').$response->mip_pdf}}" target="_blank" class="btn btn-warning btn-sm mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill mr-2" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>View</a>
                                        <a href="{{ env('MIX_STORAGE_PATH').$response->mip_pdf}}" class="btn btn-primary btn-sm" download="Id proof">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill mr-2" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                            </svg>Download</a>
                                        <!-- {{$response->mip_pdf}} -->
                                    </td>
                                </tr>
                            </tbody>

                        </table>




                    </div>

                </div>


            </div>
        </div>
    </div>


</body>

</html>