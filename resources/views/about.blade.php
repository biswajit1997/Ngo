@include('welcome')
<div class="col-sm-8 offset-sm-2">
<div class="card mt-4">
@if(session()->has('message'))
            <div class="alert {{session('alert') ?? 'alert-info'}}">
                {{ session('message') }}
            </div>
 @endif
        <h5 class="card-header">Enquiry</h5>
        <div class="card-body">
            <form  method="post" action="{{ route('enquiry') }}" >
            @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="mobile">mobile</label>
                    <input type="tel" class="form-control" id="" name="mobile" placeholder="Enter mobile number">
                </div>
                <div class="form-group">
                    <label for="">District</label>
                    <select class="form-control" id="" name="district">
                        <option value="">select</option>
                        <option value="Cuttack">Cuttack</option>
                        <option value="Dhenkanal">Dhenkanal</option>
                        <option value="Angul">Angul</option>
                        <option value="Khordha">Khordha</option>
                        <option value="Kendrapada">Kendrapada</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Massage</label>
                    <textarea class="form-control" id="" name="massage" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>