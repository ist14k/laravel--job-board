<nav {{ $attributes }}>
  <ul class="flex items-center gap-2 text-slate-500">
    <li>
      <a href="/">Home</a>
    </li>

    @foreach ($links as $label => $link)
      <li>→</li>
      <li>
        <a href="{{ $link }}">
          {{ $label }}
        </a>
      </li>
    @endforeach
  </ul>
</nav>
