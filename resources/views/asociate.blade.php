@include('welcome')
<div class="container">
    <div class="row">
        <div class="text-center mt-3">
            <h3>Asociate NGOs</h3>
        </div>

        <table class="table table-bordered mt-5">
            <thead>
                <th>Slno</th>
                <th>Logo</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($response as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset('storage/'.$item->org_logo)}}" alt="logo" width="100px" height="50px" /></td>
                    <td>{{$item->mobile}}</td>
                    <td>{{$item->email}}</td>
                    <td><button class="btn btn-primary">View</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>