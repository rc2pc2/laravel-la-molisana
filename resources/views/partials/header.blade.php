<header>
    <div id="brand">
        <img src="{{ Vite::asset('resources/img/marchio-sito-test.png') }}" alt="La Molisana main logo">
    </div>
    <nav id="top-navbar">
        <ul>
            @foreach ( $headerLinks as $link)
                <li class="{{ ($link['active']) ? 'active' : '' }}">
                    <a href="{{ route($link['link']) }}">
                        {{ $link['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>