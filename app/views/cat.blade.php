<h1>Dear Lord Otwell</h1>
<p>I hereby challenge you to a duel for the honour of Laravel.</p>

{{$squirrel}}
<p>{{ date('d/m/y') }}</p>
<p>{{ '<script>alert(“CHUNKY BACON!”);</script>' }}</p>
<p>{{{ '<script>alert("CHUNKY BACON!");</script>' }}}</p>
<p>&lt;script&gt;alert(&quot;CHUNKY BACON!&quot;);&lt;/script&gt;</p>
@if ($something)
    <p>Something is true!</p>
@else
    <p>Something is false!</p>
@endif

@for ($i = 0; $i < 999; $i++)
    <p>Even {{ $i }} red pandas, aren't enough!</p>
@endfor