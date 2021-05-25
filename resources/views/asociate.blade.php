@include('welcome')
<div class="container">
    <div class="">
        <div class="text-center mt-3">
            <h3>Asociate NGOs</h3>
        </div>

        <div class="mt-5">
            <form method="post" action="{{ route('asociate') }}">
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
                <table class="table table-bordered ">
                    <thead>
                        <th>Slno</th>
                        <th>Logo</th>
                        <th>Mobile</th>
                        <th>District</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($response as $key =>$item)
                        @if ($item->role == 'ngo')
                        <tr>
                            <td>{{$key +1}}</td>
                            <td><img src="{{asset('storage/'.$item->org_logo)}}" alt="logo" width="100px" height="50px" /></td>
                            <td><a href="tel: {{$item->mobile}}">{{$item->mobile}}</a></td>
                            <td>{{$item->district}}</td>
                            <td><a href="single/ngo/{{$item->id}}"><button class="btn btn-primary">View</button></a></td>
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