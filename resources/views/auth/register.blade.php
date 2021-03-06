@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6" style="padding-top: 8px">
                                <input id="gender-m" type="radio" name="gender" value="male" class="@error('gender') is-invalid @enderror" {{ old("gender") == "male" ? 'checked':""}}>
                                <label for="gender-m">??????</label>
                                <input id="gender-f" type="radio" name="gender" value="female" class="@error('gender') is-invalid @enderror" {{ old("gender") == "female" ? 'checked':""}}>
                                <label for="gender-f">??????</label>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone_number" type="tel" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}"  autocomplete="telephone_number">

                                @error('telephone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth_year" class="col-md-4 col-form-label text-md-right">???????????? : ??? </label>

                            <div class="col-md-6">
                                <select name="birth_year" id="birth_year" class="form-control @error('birth_year') is-invalid @enderror" name="birth_year"  autocomplete="birth_year">
                                    <option value="">----</option>
                                </select>

                                @error('birth_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth_month" class="col-md-4 col-form-label text-md-right">???????????? : ??? </label>

                            <div class="col-md-6">
                                <select name="birth_month" id="birth_month" class="form-control @error('birth_month') is-invalid @enderror" name="birth_month"  autocomplete="birth_month">
                                    <option value="">--</option>
                                </select>

                                @error('birth_month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">???????????? : ??? </label>

                            <div class="col-md-6">
                                <select name="birth_date" id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date"  autocomplete="birth_date">
                                    <option value="">--</option>
                                </select>

                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

@section('js')
<script>
    $(function() {
        let time = new Date()
        let year = time.getFullYear()
        let month = time.getMonth() + 1
        let date = time.getDate()
        let seelcted_year
        let seelcted_month

        function isLeapYear(year, month) {
           return new Date(year, month, 0).getDate()
        }
        
        for (let i = year; i >= 1900; i--) {
            $('#birth_year').append('<option value="' + i + '">' + i + '</option>')
        }

        for (let j = 1; j <= 12; j++) {
            $('#birth_month').append('<option value="' + j + '">' + j + '</option>');
        }

        for (var k = 1; k <= 31; k++) {
            $('#date').append('<option value="' + k + '">' + k + '</option>')
        }

        $('#birth_year').change(function() {
            selected_year = $('#birth_year').val()

            // ????????????????????????????????????????????????????????? 1~???????????? ?????????
            // ????????????????????????1~12 ?????????
            let last_month = 12
            if (selected_year == year) {
                last_month = month
            }

            //??????????????????div????????????????????????h1 / p????????????????????????????????????????????????div????????????????????????remove()???????????????????????????div???????????????????????????????????????????????????
            $('#birth_month').children('option').remove()
            $('#birth_month').append('<option value="' + 0 + '">--</option>');
            for (let n = 1; n <= last_month; n++) {
                $('#birth_month').append('<option value="' + n + '">' + n + '</option>');
            }
        })

        $('#birth_year,#birth_month').change(function() {
            selected_year = $('#birth_year').val()
            selected_month = $('#birth_month').val()
            let last_date =  isLeapYear(selected_year, selected_month)

            $('#birth_date').children('option').remove();
            $('#birth_date').append('<option value="' + 0 + '">--</option>');
            for (var m = 1; m <= last_date; m++) {
                $('#birth_date').append('<option value="' + m + '">' + m + '</option>');
            }
        })
    });
</script>

@endsection
