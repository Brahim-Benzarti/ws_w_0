<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            *{
                margin: 1vh;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form id="myform" method="POST" action="{{route('casual')}}">
                @csrf
                <div class="row">
                    <h1 class="text-center">My awesome Email Client</h1>
                </div>
                {{-- subject --}}
                <div class="form-group row justify-content-around">
                    <label for="subject" class="col-md-4 col-form-label text-md-left">{{ __('Subject') }}</label>

                    <div class="col-md-6">
                        <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject">

                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- recipient --}}

                <div class="form-group row justify-content-around">
                    <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row justify-content-around">
                    <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- email body --}}
                <div class="form-group row justify-content-around">
                    <label for="email_body" class="col-md-4 col-form-label text-md-left">{{ __('Message') }}</label>

                    <div class="col-md-6">
                        <textarea class="form-control @error('email_body') is-invalid @enderror" name="email_body" id="email_body" cols="30" rows="10" required autocomplete="email_body">{{ old('email_body') }}</textarea>

                        @error('email_body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- submit --}}
                <div class="form-group row justify-content-around mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
