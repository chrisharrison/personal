<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chris Harrison CV</title>
    <link href="https://fonts.googleapis.com/css?family=Martel:300" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ink/3.1.10/css/ink.min.css">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cv.css') }}">
</head>
<body>

	<p id="strap">{{ $yearsExperience }} years experience</p>

	<h1>Chris Harrison</h1>
	<p><a href="https://chrisharrison.me.uk">chrisharrison.me.uk</a> / me@chrisharrison.me.uk / +44 (0)7871 562518</p>

	<section>
		<h2>Summary</h2>
		<ul>
	        <li>Started programming in BASIC on an Amstrad CPC microcomputer in 1997 at the age of 9.</li>
	        <li>Wrote my first HTML page in 1999.</li>
	        <li>I build responsive HTML/CSS frontends that are accessible and semantic. I have extensive experience with frontend Javascript frameworks.</li>
	        <li>I build backend websites and APIs using web frameworks. Focussed on performance and handling multiple req/sec without race conditions or concurrency issues.</li>
	        <li>I build applications that scale well over multiple machines using queues. Have designed and deployed application infrastructures in AWS and Azure.</li>
	        <li>I am a big Redis fan. I believe most relationships can work faster as a list or sorted set. I also write my own Lua scripts in Redis when atomicity is important.</li>
	        <li>Due to spending many years in Asia I am experienced in localisation and i18n.</li>
	        <li>Have worked in a test-driven-design enviroment.</li>
	    </ul>
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
	    <ul>
	        @foreach ($experience->items()->get() as $item)
	        <li>{{ $item->description }}</li>
	        @endforeach
	    </ul>
	    @endforeach
    </section>

    <section>
	    <h2>Education</h2>
	    <p>Bachelor of Arts Upper Second Class, Middlesex University (2009)</p>
    </section>

    <section>
	    <h2>Interests</h2>
	    <ul>
	    	<li>Badminton</li>
	    	<li>Politics</li>
	    	<li>Designer card games</li>
	    </ul>
    </section>

</body>
</html>