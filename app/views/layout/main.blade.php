<!doctype html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Technasium Online</title>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="/css/hover.min.css">
<link rel="stylesheet" type="text/css" href="/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<script src="/js/jquery.min.js"></script>
</head>
<body>

@include('components.menu')

<div class="container main">
	@include('components.alerts')
	{{$page}}
</div>


<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
</body>
</html>