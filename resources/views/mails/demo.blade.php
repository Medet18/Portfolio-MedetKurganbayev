Hello <i>{{ $demo->receive }}</i>,
<p>this is a demo emaoil for testig purposees! also , it's the HtML version.</p>

<p><u>Demo object values:</u></p>

<div>
    <p><b>Demo one:</b> &nbsp;{{ $demo->demo_one }}</p>
    <p><b>Demo two:</b> &nbsp;{{ $demo->demo_two }}</p>
</div>

<p><u> Values passed by with method:</u></p>


<div>
    <p><b>testVarOne:</b> &nbsp;{{ $testVarOne }}</p>
    <p><b>testVartwo:</b> &nbsp;{{ $testVartwo }}</p>
</div>

Thank You,
<br>
<i>{{ $demo->sender }}</i>