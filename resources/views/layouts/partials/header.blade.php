<header>PAGE EXAMPLE
    <nav>
        <ul>
            <li>
                <a href="/">
                    Inicio
                </a>
            </li>
            <li>
                <a class="{{request()->routeIs('x.*') ? 'active':''}}" href="{{route('x.index')}}">
                    X
                </a>
            </li>
            <li>
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active':''}}">
                    Nosotros
                </a>

            </li>
            
        </ul>
    </nav>

</header>