<nav class="navbar navbar-default" role="navigation">
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Proveedores <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/fisica')}}">Persona fisica</a></li>
          <li><a href="{{url('/moral')}}">Persona moral</a></li>
        </ul>

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Generar Contratos <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{url('/contrato')}}">Persona fisica</a></li>
                <li><a href="{{url('/contratomoral')}}">Persona moral</a></li>
            </ul>

      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalogo <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/verfisica')}}">Persona fisica</a></li>
          <li><a href="{{url('/vermoral')}}">Persona moral</a></li>
        </ul>

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Recúperar Proveedores <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/recuperarfisica')}}">Persona fisica</a></li>
          <li><a href="{{url('/recuperarmoral')}}">Persona moral</a></li>
        </ul>

        {{--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Baja Proveedores <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/bajafisica')}}">Persona fisica</a></li>
          <li><a href="{{url('/baja')}}">Persona moral</a></li>
        </ul>--}}
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Ver contratos <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{url('/ver')}}">Persona fisica</a></li>
                <li><a href="{{url('/fcompra')}}">Persona fisica compra</a></li>
                <li><a href="{{url('/fisicacompra')}}">Persona moral compra</a></li>
                <li><a href="{{url('/moralservicio')}}">Persona moral servicio</a></li>

            </ul>

        <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contratos <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/contratofisicaservicio')}}">Persona fisica servicio</a></li>
          <li><a href="{{url('/contratofisicacompra')}}">Persona fisica conpra-venta</a></li>
          <li><a href="{{url('/contratomoralcompra')}}">Persona moral compra-venta</a></li>
          <li><a href="{{url('/contratomoralservicio')}}">Persona moral servicio</a></li>
        </ul> -->
        <li><a href="{{url('/login')}}">Salir</a></li>
    </ul>
</nav>