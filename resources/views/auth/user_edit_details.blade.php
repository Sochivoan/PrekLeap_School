
@extends('layout.template')
@section('form')

<div class="container-1">
     <div class="container" id="user_profile">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-6">
                           <h3>ព័ត៌មានលំអិត</h3>
               <form name="item" action="{{ route('auth.update','user_id')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<div class="card" id="userDetails">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0"> នាមខ្លួន</h6>
								</div>
                                <input type="hidden" name="user_edit_details" id="user_edit_details" value= "session('user_id')">
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{session('first_name')}}">
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0"> នាមត្រកូល</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{session('last_name')}}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0"> អ៊ីមែល</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{session('email')}}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">អ្នកប្រើប្រាស់</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{session('user_type')}}">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-success px-4" value="រក្សាទុក">
                                    <a href="{{ route('auth.index')}}" title="Back" class="btn btn-info px-4">ត្រលប់</a>
								</div>
							</div>
						</div>
					</div>
                </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


