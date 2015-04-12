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

<div class="container main">
	@include('components.menu')
	@include('components.alerts')
	{{$page}}
</div>
<footer>
    Gemaakt door Hidde Zijlstra &amp; Sander Kastelein<br>
    Pagina gerenderd in <strong>{{ round((microtime(true) - LARAVEL_START)*1000) }}ms</strong>
</footer>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
jQuery(function($){
    $('.tooltip').tooltip({
        placement:"right"
    });
});
</script>
</body>
</html>