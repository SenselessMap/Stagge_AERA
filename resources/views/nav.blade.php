<nav class="poppins-regular col">
    <div class="row">
        @if(!Request::is('/'))
            <h2><a href="{{ url('/') }}">Home</a></h2>
        @endif
        <h2><a href="{{ route('admin.dashboard') }}">Dashboard</a></h2>
    </div>
</nav>
<hr class="ligne">