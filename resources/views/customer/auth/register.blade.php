@extends('layouts.customer.app_only_content')

@section('title')
    会員登録
@endsection

@section('content')
<div class="container">
    <div class="card" style="width: 500px">
        <div class="card-body">
            <div class="font-weight-bold text-center border-bottom pb-3" style="font-size: 24px">会員情報登録</div>
            <form method="POST" action="{{ route('register') }}" class="p-5">
                @csrf

                <div class="form-group">
                    <label for="name">お客様氏名</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="氏名をご記入ください">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="お使いのメールアドレスをご記入ください">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tel">tel</label>
                    <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" required autocomplete="tel" placeholder="tel" value="{{ old('tel') }}">
                    @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="prefecture">prefecture</label>
                    <input id="prefecture" type="prefecture" class="form-control @error('prefecture') is-invalid @enderror" name="prefecture" required autocomplete="prefecture" placeholder="prefecture" value="{{ old('prefecture') }}">
                    @error('prefecture')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="city">city</label>
                    <input id="city" type="city" class="form-control @error('city') is-invalid @enderror" name="city" required autocomplete="city" placeholder="city" value="{{ old('city') }}">
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="street">street</label>
                    <input id="street" type="street" class="form-control @error('street') is-invalid @enderror" name="street" required autocomplete="street" placeholder="street" value="{{ old('street') }}">
                    @error('street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-secondary">
                        会員登録
                    </button>
                </div>

                <div>
                    アカウントをお持ちの方は<a href="{{ route('login') }}">こちら</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
