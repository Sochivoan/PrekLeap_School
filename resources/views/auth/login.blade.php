
@extends('layout.template')
@section('form')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 content-frm">
                <h3>ចូលប្រើក្មមវិធី</h3><hr>
                <form action="{{ route('auth.check')}}" method="POST" class="register-form" id="register-form">
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">
                            អ៊ីមែល
                        </label>
                        <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="" value="{{ old('email')}}">
                        <span class="text-danger" style="color:red;">@error('email'){{$message}}@enderror</span>
                        </div>
                    </div>
                        <p>ពាក្យសម្ងាត់ត្រូវតែមាន យ៉ាងហោចណាស់ 8 - 12 តួអក្សរ </p>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">
                            ពាក្យសម្ងាត់
                        </label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="" value="{{ old('password')}}">
                        <span class="text-danger" style="color:red;">@error('password'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="btn btn-secondary active" value="ចូល"/>
                    </div>
                </form>
                <hr>
                <h2>តើអ្នកមកទីនេះជាលើកដំបូងឬ ?</h2>
                <div class="text-p">
                    ដើម្បីអាចចូលដំណើរការវគ្គសិក្សាបានពេញលេញបាន
                    អ្នកត្រូវចំណាយពេលបន្តិច ដើម្បីបង្កើតគណនីថ្មីសម្រាប់ខ្លួនអ្នក
                    នៅលើតំបន់បណ្ដាញនេះ។
                </div>
                <div class="form-group form-button">
                    <a href="{{ route('auth.register')}}">
                       <input type="submit" name="signup" id="signup" class="btn btn-secondary active" value="បង្កើតគណនីថ្មីរបស់ខ្ញុំ"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

