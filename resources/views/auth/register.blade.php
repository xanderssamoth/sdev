@extends('layouts.auth')

@section('auth-content')

                    <h2>Inscription</h2>
                </div>

                <div class="row g-lg-5">
                    <div class="col-lg-5 col-sm-7 mx-auto">
                        <form action="{{ route('register') }}" method="post">
    @csrf
                            <div class="row g-lg-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="register_firstname" id="register_firstname" class="form-control" placeholder="Prénom" aria-describedby="firstname_error_message" value="{{ !empty($inputs['firstname']) ? $inputs['firstname'] : '' }}" {{ !empty($inputs['firstname']) ? '' : 'autofocus' }}>
    @if (!empty($response_error) AND $response_error->message == $inputs['firstname'])
                                        <p id="firstname_error_message" class="small mt-1 text-center text-danger">{{ $response_error->data }}</p>
    @endif
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-lg-0 mt-3">
                                        <input type="text" name="register_lastname" id="register_lastname" class="form-control" placeholder="Nom" value="{{ !empty($inputs['lastname']) ? $inputs['lastname'] : '' }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-lg-3">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input type="text" name="register_surname" id="register_surname" class="form-control" placeholder="Post-nom" value="{{ !empty($inputs['surname']) ? $inputs['surname'] : '' }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <select name="register_gender" class="form-select">
                                            <option class="small" selected disabled>Sexe</option>
                                            <option value="M">Homme</option>
                                            <option value="F">Femme</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-lg-3">
                                <div class="col-lg-6 mx-auto">
                                    <div class="form-group mt-3">
                                        <input type="text" name="register_birthdate" id="register_birthdate" class="form-control" placeholder="Date de naissance">
                                    </div>
                                </div>
                            </div>

                            <div class="row g-lg-3">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input type="text" name="register_phone" id="register_phone" class="form-control" placeholder="Téléphone" aria-describedby="phone_error_message" value="{{ !empty($inputs['phone']) ? $inputs['phone'] : '' }}">
    @if (!empty($response_error) AND $response_error->message == $inputs['phone'])
                                        <p id="phone_error_message" class="small mt-1 text-center text-danger">{{ $response_error->data }}</p>
    @endif
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input type="text" name="register_email" id="register_email" class="form-control" placeholder="E-mail" aria-describedby="email_error_message" value="{{ !empty($inputs['email']) ? $inputs['email'] : '' }}">
    @if (!empty($response_error) AND $response_error->message == $inputs['email'])
                                        <p id="email_error_message" class="small mt-1 text-center text-danger">{{ $response_error->data }}</p>
    @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row g-lg-3">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input type="password" name="register_password" id="register_password" class="form-control" placeholder="Mot de passe" aria-describedby="password_error_message" {{ !empty($response_error) AND $response_error->message == $inputs['password'] ? 'autofocus' : '' }}>
    @if (!empty($response_error) AND $response_error->message == $inputs['password'])
                                        <p id="password_error_message" class="small mt-1 text-center text-danger">{{ $response_error->data }}</p>
    @endif
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirmer mot de passe" aria-describedby="confirm_password_error_message" {{ !empty($response_error) AND $response_error->message == $inputs['confirm_password'] ? 'autofocus' : '' }}>
    @if (!empty($response_error) AND $response_error->message == $inputs['confirm_password'])
                                        <p id="confirm_password_error_message" class="small mt-1 text-center text-danger">{{ $response_error->data }}</p>
    @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn w-100 btn-warning">Enregistrer</button>
                                <p class="mt-3 mb-0 text-center"><a href="{{ route('login') }}">Se connecter</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

@endsection