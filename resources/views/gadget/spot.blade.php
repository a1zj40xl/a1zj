@extends('layouts.default')

@section('content')
<div class="row">
            <div class="col-md-6">
              <div class="card ">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">mail_outline</i>
                  </div>
                  <h4 class="card-title">Spot Remover</h4>
                </div>
                <div class="card-body ">
                  <form method="#" action="#">
                    <div class="form-group bmd-form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Enter your text here</label>
                      <input type="email" id="spot" class="form-control" id="exampleEmail">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="examplePass" class="bmd-label-floating">Password</label>
                      <input type="password" class="form-control" id="examplePass">
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value=""> Subscribe to newsletter
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </form>
                </div>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                </div>
              </div>
            </div>
	      </div>
@endsection
<script>
$( document ).ready( fucntion() {
alert('hi');
});

$( document ).ready(function() {
    console.log( "ready!" );
});



</script>