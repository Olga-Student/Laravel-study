<div class="menu">
    @foreach($menu as $item)
        <div>
            <nav>
                <a  href="{{route($item['alias'])}}">
                    {{$item['title']}}<br>
                </a>
            </nav>

        </div>
    @endforeach
</div>
<hr>
