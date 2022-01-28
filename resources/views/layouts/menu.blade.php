<li class="menu-item"><a href="/" @if(request()->is('/')) id="active" @endif>Home</a></li>
<li class='menu-item'><a href="experiences" @if(request()->is('experiences')) id="active" @endif>Popular</a></li>
<li class='menu-item'><a href="around" @if(request()->is('around')) id="active" @endif>Around Perú</a></li>
<li class='menu-item'><a href='adventures' @if(request()->is('adventures')) id="active" @endif>Adventures</a></li>
<li class='menu-item'><a href='blog' @if(request()->is('blog')) id="active" @endif>blog</a></li>