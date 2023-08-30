<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	@vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-violet-50">
	<section class="container mx-auto px-4">
		<div class="w-[652px] lg:w-[95%] mx-auto mt-[15%] grid grid-cols-1 lg:grid-cols-2 bg-violet-100">
			<div class="w-[100%] mx-auto px-8 py-12 flex flex-col gap-y-6 bg-violet-200">
				<div class="w-[225px] mx-auto px-3 py-2 flex items-center gap-x-3 bg-violet-300">
					<div class="w-[32px] aspect-square bg-violet-400"></div>
					<div class="min-w-[100px] h-[28px] bg-violet-400 rounded-full"></div>
				</div>
				<div class="w-[225px] mx-auto px-3 py-2 flex items-center gap-x-3 bg-violet-300">
					<div class="w-[32px] aspect-square bg-violet-400"></div>
					<div class="min-w-[100px] h-[28px] bg-violet-400 rounded-full"></div>
				</div>
			</div>
			<div class="w-[100%] mx-auto px-8 py-12 flex flex-col gap-y-6 bg-violet-300">
				<form class="w-[225px] mx-auto px-3 py-2 flex flex-col gap-y-6">
					<input class="px-2 py-1" type="text" name="uname" placeholder="" />
					<input class="px-2 py-1" type="password" name="upass" placeholder="" />
					<input class="px-2 py-1 bg-violet-600" type="submit" name="login" value="" />
				</form>
			</div>
		</div>
	</section>
</body>
</html>