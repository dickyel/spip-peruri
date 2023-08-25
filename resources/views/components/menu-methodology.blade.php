<ul class="nav nav-pills nav-fill mb-4">
    <li class="nav-item">
    <a class="nav-link {{ (request()->is('methodology*')) ? 'active' : '' }}" href="{{ route('methodology.index') }}">Master Metodologi SPIP</a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ (request()->is('guide*')) ? 'active' : '' }}" href="{{ route('guide.index') }}">Master Pedoman SPIP</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Grafik & Table</a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ (request()->is('other*')) ? 'active' : '' }}" href="{{ route('other.index') }}" >Lain - lain</a>
    </li>
</ul>