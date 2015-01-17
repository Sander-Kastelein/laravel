<!doctype html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Technasium Online</title>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="/css/hover.min.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>
<body>

@include('components.menu')

<div class="container main">
	@include('components.alerts')
	{{$page}}
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>