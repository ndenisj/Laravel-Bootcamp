@csrf
<p>
    <input value="{{ old('name') ?? $customer->name }}" type="text" name="name" autocomplete="off" placeholder="NAME" /><br>
    <span style="color: crimson">@error('name') {{$message}} @enderror</span>
</p>
<p>
    <input value="{{ old('email') ?? $customer->email }}" type="text" name="email" autocomplete="off" placeholder="EMAIL" /><br>
    <span style="color: crimson">@error('email') {{$message}} @enderror</span>
</p>