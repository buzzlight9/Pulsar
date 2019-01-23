<!DOCTYPE html>
<html lang="en">

  <head>

    @include("user/inc/head")

  </head>

  <body>

    @include("user/inc/navbar")
    @include("user/inc/header")

    @section("main-content")
      @show

    @include("user/inc/footer")

  </body>

</html>

