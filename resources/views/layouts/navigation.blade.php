<div id="navbarNavDropdown" class="navbar-collapse collapse">
    <ul class="navbar-nav mr-auto">
      {{-- Pusta lista aby działało wyrownanie menu do prawej strony --}}
    </ul>

    <ul class="navbar-nav">
        @foreach($items as $menu_item)
            @if($menu_item->children->count())
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ $menu_item->title }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach($menu_item->children as $subItem)
                      <a class="dropdown-item" href="{{ $subItem->link() }}">{{ $subItem->title }}</a>
                  @endforeach
                </div>
              </li>
            @else
              <li class="nav-item"><a class="nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
            @endif
        @endforeach
    </ul>
</div>
