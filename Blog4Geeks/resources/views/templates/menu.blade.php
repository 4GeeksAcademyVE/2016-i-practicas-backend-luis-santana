<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="{{url('/')}}">Home</a>
            <a class="blog-nav-item" href="{{url('/login')}}">Login</a>
            <a class="blog-nav-item" href="{{url('/register')}}">Register</a>
            <ul class="nav navbar">
                @if(Auth::guest())
                    <li>Bienvenido Anonimo</li>
                @else
                    <li>Bienvenido {{ Auth::user()->nombre . "" . Auth::user()->apellido }}</li>
                @endif
            </ul>
        </nav>
    </div>
</div>