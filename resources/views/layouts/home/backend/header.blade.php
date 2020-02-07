@include('layouts.pago_libre.backend.menu')             
<header id="header-navbar" class="content-mini content-mini-full">    
    <ul class="nav-header pull-right">
        <li>
            <div class="btn-group">
                <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                    <img src="" alt="Avatar">                    
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">                    
                    <li>
                        <a tabindex="-1" href="">
                            <i class="si si-logout pull-right"></i>Configuración
                        </a>
                    </li>
                    <li>
                        <form class="" action="{{ route('logout') }}" method="post">
                            {{ csrf_field() }}
                            <button class="custom-logout" type="submit" name="logout"><i class="si si-logout pull-right"></i>Cerrar Sesión</button>
                        </form>                        
                    </li>
                </ul>
            </div>
        </li>                   
    </ul>    
    <ul class="nav-header pull-left">
        <li class="hidden-md hidden-lg">                        
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                <i class="fa fa-navicon"></i>
            </button>
        </li>
        <!-- <li class="hidden-xs hidden-sm">                        
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                <i class="fa fa-ellipsis-v"></i>
            </button>
        </li>                                -->
    </ul>    
</header>