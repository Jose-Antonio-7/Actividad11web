<nav>
    <ul>
        <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ Request::path() == 'photos' ? 'active' : '' }}"><a href="{{ route('photos') }}">Photos</a></li>
        <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

