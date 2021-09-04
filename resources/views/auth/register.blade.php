

@extends('layout.template')

@section('form')

    <div class="container">
        <div class="row">
            <div class="col-lg-6 content-frm">
                <h3>គណនីថ្មី</h3><hr>
                <h3>ព័ត៌មានលម្អិតបន្ថែម</h3>
            <form action="{{ route('auth.save')}}" method="POST" class="register-form" id="register-form">
                    @if(Session::get('successs'))
                        <div class="alert alert-success">
                            {{ Session::get('successs') }}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif

                @csrf
                <div class="form-group row">
                    <label for="f_name" class="col-sm-3 col-form-label">នាមខ្លួន</label>
                    <div class="col-sm-8">
                    <input type="first_name" class="form-control" name="first_name" placeholder="" value="{{ old('f_name')}}">
                    <span class="text-danger" style="color:red;">
                    @error('first_name')
                    <i class="icon fa fa-exclamation-circle text-danger fa-fw "></i>
                    -បាត់នាមខ្លួន
                     {{-- {{$message}} --}}
                     @enderror
                     </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="l_name" class="col-sm-3 col-form-label">នាមត្រកូល</label>
                    <div class="col-sm-8">
                    <input type="last_name" class="form-control" name="last_name" placeholder="" value="{{ old('l_name')}}">
                    <span class="text-danger" style="color:red;">
                    @error('last_name')
                    <i class="icon fa fa-exclamation-circle text-danger fa-fw "></i>
                    -បាត់នាមត្រកូល
                 {{-- {{$message}} --}}
                    @enderror
                    </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">
                        អ៊ីមែល
                    </label>
                    <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" placeholder="" value="{{ old('email')}}">
                    <span class="text-danger" style="color:red;">
                    @error('email')
                    <i class="icon fa fa-exclamation-circle text-danger fa-fw "></i>
                    -បាត់អ៊ីមែល
                    {{$message}}
                    @enderror
                    </span>
                    </div>
                </div>
                     <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-xs-right">អ្នកប្រើប្រាស់</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="user_type" id="user_type">
                                                <option selected>Open this select menu</option>
                                                <option>Teacher</option>
                                                <option>Student</option>
                                            </select>
                                        </div>
                                </label>
                            </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">
                        ពាក្យសម្ងាត់
                    </label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" placeholder="" value="{{ old('password')}}">
                    <span class="text-danger" style="color:red;">
                    @error('password')
                    <i class="icon fa fa-exclamation-circle text-danger fa-fw "></i>
                      -បាត់ពាក្យសម្ងាត់
                    {{-- {{$message}} --}}
                    @enderror
                    </span>
                    </div>
                </div>

                    <p>ពាក្យសម្ងាត់ត្រូវតែមាន យ៉ាងហោចណាស់ 6 - 12 តួអក្សរ </p>

                <div class="form-group row">
                    <label for="c_password" class="col-sm-3 col-form-label">
                        ពាក្យសម្ងាត់ (ម្តងទៀត)
                    </label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" name="password_confirm" placeholder="" value="{{ old('c_password')}}">
                    <span class="text-danger" style="color:red;"​​​​>
                    @error('password_confirm')
                    <i class="icon fa fa-exclamation-circle text-danger fa-fw "></i>
                      -បាត់ពាក្យសម្ងាត់ (ម្តងទៀត)
                     {{-- {{$message}} --}}
                     @enderror
                     </span>
                    </div>
                </div>
                <div class="form-group form-button">
                    <button type="submit" name="signin" id="signin" class="btn btn-secondary active">បង្កើតគណនីថ្មីរបស់ខ្ញុំ</button>
                    <a href="{{ route('auth.login') }}" class="btn btn-danger">ចូល</a>
                </div>
            </form>
                 <hr>
                <p>ប្រអប់ទិន្នន័យដែលទាមទារឲ្យអ្នកបញ្ចូល ត្រូវបានសម្គាល់ដោយ <i class="icon fa fa-exclamation-circle text-danger fa-fw " title="ប្រអប់ទិន្នន័យដែលបានទាមទារ" aria-label="ប្រអប់ទិន្នន័យដែលបានទាមទារ"></i></p>
            </div>
        </div>
    </div>
@endsection

