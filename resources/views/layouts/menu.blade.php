<nav id="sidebar">                
    <div id="sidebar-scroll">    
        <div class="sidebar-content">            
            <div class="side-header side-content bg-white-op">                
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>                            
                <a class="h5" href="{{ url('/') }}">
                    <img class="logo"src="{{ asset('img/logo.jpeg') }}" alt="">
                    <!-- <i class="fa fa-circle-k-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">KIO</span> -->
                </a>
            </div>            
            <div class="side-content">
                <ul class="nav-main">
                    <li>
                        <a class="active text-black" href="{{ url('/') }}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Escritorio</span></a>
                    </li>                                                                                                                                                   
                </ul>
            </div>            
        </div>        
    </div>    
</nav>