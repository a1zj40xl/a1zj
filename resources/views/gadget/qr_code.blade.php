@extends('layouts.default')


@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card ">
			<div class="card-header card-header-success card-header-icon">
				<div class="card-icon">
					<i class="material-icons"></i>
				</div>
				<h4 class="card-title">QR Code Generator</h4>
			</div>
			<div class="card-body ">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group bmd-form-group">
                          <input class="form-control" id="qr_code" type="text" name="content" required="true" aria-required="true" autocomplete="off">
                        </div>
						<div class="table-responsive table-sales">
							<div class="visible-print text-center">
								<h1>QR Code Generator</h1>
     
    								{!! QrCode::size(250)->generate('this is test file'); !!}
     
    							<p>text here</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection