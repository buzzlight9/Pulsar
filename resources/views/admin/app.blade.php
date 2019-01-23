<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.inc.head")
</head>
<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        @include("admin.inc.header")
        @include("admin.inc.sidebar")
        @section("adminHome-content")
            @show
    </div>
    @include("admin.inc.footer")
</body>
</html>