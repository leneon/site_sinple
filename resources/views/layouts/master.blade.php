<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Service</title>

		@include('layouts.partials.link')

    </head>
	<body>
        @include('layouts.partials.header')

        @include('layouts.partials.nav')


        @yield('content')


        @include('layouts.partials.footer')

		<!-- jQuery Plugins -->
        @include('layouts.partials.script')
	</body>
</html>
