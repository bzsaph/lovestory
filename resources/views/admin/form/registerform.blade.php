@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    <div class="col-md-6">
        <input type="hidden" name="id" value="{{ old('id') }}@isset($user) {{$user->id}}@endisset">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}@isset($user) {{$user->name}}@endisset"

         required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}@isset($user) {{$user->email}}@endisset" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
@isset($create)
<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
@endisset


<div class="form-group row">

    @foreach ($roles as $role)
    <div class="col-md-12" style="margin-left: 60px ">
        <input type="checkbox" value="{{$role->id}}" name="roles[]"
        @if(auth()->check())
             @foreach($roless as $userRole)
                 @if($userRole->id==$role->id) {{"checked"}}
                 @endif
             @endforeach
       @endif> {{$role->name}}

    </div>
    @endforeach

</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
