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
                    <input type="submit" name="submit" class="btn btn-secondary btn-sm" />
                </div>
            </form>


            <div>
                <table class="table table-bordered ">
                    <thead class="bg-info text-white">
                        <th>Slno</th>
                        <th>Logo</th>
                        <th>Mobile</th>
                        <th>District</th>
                        <th class="text-center">Action</th>
                    </thead>
                    <tbody>
                        @foreach($response as $key =>$item)
                        @if ($item->role == 'ngo')
                        <tr>
                            <td>{{$key +1}}</td>
                            <td><img src="{{env('MIX_STORAGE_PATH').$item->org_logo}}" alt="logo" width="100px" height="50px" /></td>
                            <td><a href="tel: {{$item->mobile}}">{{$item->mobile}}</a></td>
                            <td>{{$item->district}}</td>
                            <td class="text-center"><a href="single/ngo/{{$item->id}}" class="btn btn-warning btn-sm">View</a>
                            </td>
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