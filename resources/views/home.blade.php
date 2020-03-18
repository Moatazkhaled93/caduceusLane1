@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patient Detiels</div>

                <div class="card-body">
                    <form method="POST" action="/home/create" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="frist_name">Frist Name:</label>
                            <input type="text" class="form-control" id="frist_name" placeholder="Enter Frist Name" name="frist_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date Of Birth:</label>
                            <input type="date" class="form-control" id="date_of_birth" placeholder="Enter Date Of Birth" name="date_of_birth" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="occupation">Occupation:</label>
                            <input type="text" class="form-control" id="occupation" placeholder="Enter occupation" name="occupation" required>
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <select class="form-control" id="Country" name="country">
                                <option value="Egypt">Egypt</option>
                                <option value="UK">UK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">

                        <select class="form-control m-bot15" name="pain_id">
                            @if($pains)
                                @foreach($pains as $pain)
                                    <option value="{{$pain->id}}">{{$pain->name}}</option>
                                @endForeach
                            @else
                                No Record Found
                            @endif
                        </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
