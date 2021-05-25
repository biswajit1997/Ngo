@extends('layouts.app')

@section('content')
@if (Auth::user()->role == 'admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="mb-2">
        <a href="{{url('/home')}}" class="btn btn-secondary"><--back</a>
        </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">

                    <div>{{ __(' Enquiry List') }}</div>




                </div>


                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">District</th>
                                <th scope="col">Massage</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($response as $key => $item)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td><a href="tel: {{$item->mobile}}">{{$item->mobile}}</a></td>
                                <td>{{$item->district}}</td>
                                <td><textarea readonly>{{$item->massage}}</textarea></td>
                                <td>{{$item->created_at}}</td>

                            </tr>
                         @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection