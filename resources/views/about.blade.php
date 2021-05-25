@include('welcome')
<div class="col-sm-8 offset-sm-2">
    <div class="card mt-4">
        @if(session()->has('message'))
        <div class="alert {{session('alert') ?? 'alert-info'}}">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <h5 class="card-header">Enquiry</h5>
        <div class="card-body">
            <form method="post" action="{{ route('enquiry') }}">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
