<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <form method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="first_name" class="col-4 col-form-label">Text Field</label>
                            <div class="col-8">
                                <input id="first_name" name="first_name" type="text" class="form-control" value="{{$actor->first_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-4 col-form-label">Text Field</label>
                            <div class="col-8">
                                <input id="last_name" name="last_name" type="text" class="form-control" value="{{$actor->last_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>