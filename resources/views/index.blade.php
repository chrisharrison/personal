<!doctype html>
<html lang="en">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <title>Chris Harrison | Software and web development professional</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lte IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Martel:300" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ink/3.1.10/css/ink.min.css">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon-2016.ico') }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://chrisharrison.me.uk">
    <meta property="og:image" content="{{ asset('img/thumbnail.png') }}">
    <meta property="og:title" content="Chris Harrison">
    <meta property="og:description" content="Software and web development professional">

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-26987663-2', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>

    <section>
        <img src="{{ asset('img/chris-harrison.png') }}" id="avatar" alt="Chris Harrison (photo)">
        <h1>Chris Harrison</h1>
        <div id="shout-out">
            I am a web/software development professional with 7 years of experience. I'm currently based in <a href="https://www.flickr.com/photos/roger-fleet/10315851485/" target="_blank">Cornwall, UK</a> at <a href="http://microtest.co.uk" target="_blank">Microtest</a>, writing clinical software used by the NHS.
        </div>
        <nav id="buttons">
            <a href="{{ asset('chris-harrison-cv.pdf') }}" target="_blank" class="ink-button"><i class="fa fa-download" aria-hidden="true"></i> CV (PDF)</a>
            <a href="https://stackoverflow.com/users/198123/chris-harrison" target="_blank" class="ink-button"><i class="fa fa-stack-overflow" aria-hidden="true"></i> Stackoverflow</a>
            <a href="https://linkedin.com/in/chris-harrison" target="_blank" class="ink-button"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Linked In</a>
            <a href="https://github.com/chrisharrison" target="_blank" class="ink-button"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
        </nav>
    </section>

    <section>
        <h2>Skills</h2>
        <ul id="skills">
            @foreach ($skills as $skill)
            <li>{{ $skill->label }}</li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Experience</h2>
        
        @foreach ($experiences as $experience)
        <h3>{{ $experience->title }}</h3>
        <p class="timeline"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $experience->dateRange() }}</p>
        <p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $experience->location }}</p>
        <p>{{ $experience->items()->enabled()->ordered()->first()->description }}</p>
        @endforeach
        <p><a href="{{ asset('chris-harrison-cv.pdf') }}" target="_blank" class="ink-button"><i class="fa fa-download" aria-hidden="true"></i> Download complete CV</a></p>
    </section>

</body>
</html>