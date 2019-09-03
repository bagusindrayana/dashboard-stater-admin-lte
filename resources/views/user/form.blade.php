@csrf
<div class="box-body">
    <div class="form-group">
        <label for="name" >{{ __('Name') }}</label>

        <div >
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',optional($data)->name) }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="email" >{{ __('E-Mail Address') }}</label>

        <div >
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',optional($data)->email) }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="no_telepon" >{{ __('No Telepon') }}</label>

        <div >
            <input id="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon',optional($data)->no_telepon) }}" required autocomplete="no_telepon">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    @if($data == null)
    <div class="form-group">
        <label for="password" >{{ __('Password') }}</label>

        <div >
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @endif

    <div class="form-group">
        <label for="role" >{{ __('Level/Role') }}</label>

        <div >
            <select name="role" class="form-control" required="">
                <option value="0" {{ old('role',optional($data)->role) == 0 ? 'selected' : ''  }}>User Biasa</option>
                <option value="1" {{ old('role',optional($data)->role) == 1 ? 'selected' : ''  }}>User Admin</option>
            </select>

            @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="password_baru" >{{ __('Password Baru') }}</label>

        <div >
            <input id="password_baru" type="password" class="form-control @error('password_baru') is-invalid @enderror" name="password_baru" value="" autocomplete="false">

            @error('password_baru')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>