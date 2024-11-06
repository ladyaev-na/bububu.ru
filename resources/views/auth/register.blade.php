@extends('layouts.layout')
@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="register-surname">Surname *</label>
                                <input type="text" class="form-control" id="register-surname" name="surname" required>
                                @error('surname')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-name">Name *</label>
                                <input type="text" class="form-control" id="register-name" name="name" required>
                                @error('name')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-patronymic">Patronymic</label>
                                <input type="text" class="form-control" id="register-patronymic" name="patronymic">
                                @error('patronymic')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Sex *</label>
                                <div>
                                    <input type="radio" name="sex" value="1" checked> Мужской
                                    <input type="radio" name="sex" value="0"> Женский
                                </div>
                                @error('sex')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-birthday">Birthday *</label>
                                <input type="date" class="form-control" id="register-birthday" name="birthday" required>
                                @error('birthday')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-email">Email *</label>
                                <input type="email" class="form-control" id="register-email" name="email" required>
                                @error('email')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-password">Password *</label>
                                <input type="password" class="form-control" id="register-password" name="password" required>
                                @error('password')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-password-confirmation">Password confirmation *</label>
                                <input type="password" class="form-control" id="register-password-confirmation" name="password_confirmation" required>
                                @error('password')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-nickname">Nickname *</label>
                                <input type="text" class="form-control" id="register-nickname" name="nickname" required>
                                @error('nickname')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-avatar">Avatar</label>
                                <input type="file" class="form-control" id="register-avatar" name="avatar" accept="image/jpeg,image/png,image/svg+xml">
                                @error('avatar')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="register-phone">Phone</label>
                                <input type="tel" class="form-control" id="register-phone" name="phone" placeholder="+7(___)___-__-__">
                                @error('phone')
                                <p class="warning">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
