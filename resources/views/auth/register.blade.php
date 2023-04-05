<h1>REGISTRATION</h1>

<form action="{{route('register')}}" method="post" novalidate>
    @csrf

<input type="text" id="name" name="name" />
<div class="absolute inset-y-0 right-0 flex items-center pr-3">
</div>

<input type="email" id="email" name="email" />
<div class="absolute inset-y-0 right-0 flex items-center pr-3">
</div>

<input type="password" id="password" name="password" />

<button type="submit">Register</button>
<a href=""></a>
<div class="absolute inset-y-0 right-0 flex items-center pr-3">
</div>
</form>