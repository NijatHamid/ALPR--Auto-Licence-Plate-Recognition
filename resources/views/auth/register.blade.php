@extends('layouts.masterlogin')

@section('section')
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card ">
                    <div class="card-content">
                        <span class="card-title center">Register</span>
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' invalid' : '' }} ">
                                <label for="name" class="col-md-4 control-label">{{ __('Name') }}</label>

                                <div class="">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('surname') ? ' invalid' : '' }} ">
                                <label for="surname" class="col-md-4 control-label">Surname</label>

                                <div class="">
                                    <input id="surname" type="text"
                                           class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                           name="surname" required
                                           autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('email') ? ' invalid' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('student_id') ? ' invalid' : '' }}">
                                <label for="student_id" class="col-md-4 control-label">Student ID</label>

                                <div class="">
                                    <input id="student_id" type="text"
                                           class="form-control{{ $errors->has('student_id') ? ' is-invalid' : '' }}"
                                           name="student_id" value="{{ old('student_id') }}" required>

                                    @if ($errors->has('student_id'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('birth_date') ? ' invalid' : '' }}">
                                <label for="birthDate" class="col-md-4 control-label">birthDate</label>

                                <div class="">
                                    <input id="birth_date" type="text" class="datepicker" name="birth_date"
                                          required>

                                    @if ($errors->has('birth_date'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('phone_number') ? ' invalid' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                                <div class="">
                                    <input id="phone_number" type="text"
                                           class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                                           name="phone_number" value="{{ old('phone_number') }}" required>

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' invalid' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="">
                                    <input id="password" type="password"
                                           class=form-control{{ $errors->has('password') ? ' is-invalid' : '' }} name="password"
                                           required>

                                    @if ($errors->has('password'))
                                        <span class="help-block red-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class=" col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" name="submit" style="width: 100%">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
