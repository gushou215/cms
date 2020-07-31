        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul id="menu_min_screen">
                    @foreach ( \HDModule::getMenus() as $name=>$groups)    
                        <li class="active"> 
                            <a href="#">
                                <span>{{$name}}</span>
                            </a>
                        </li>
                            
                        @foreach ($groups as $item)
                            
                            @if (\HDModule::hadPermission($item['permission'],'admin'))
                                <li class="submenu">
                                    <a href="#">
                                        <i class="{{$item['icon']}}"></i>
                                        <span> {{$item['title']}}</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul style="display: none;">
                                        
                                        @foreach ($item['menus'] as $val)
                                            @if (\HDModule::hadPermission($val['permission'],'admin'))
                                                <li>
                                                    <a href="{{$val['url']}}" pjax>{{$val['title']}}</a>
                                                </li>       
                                            @endif                               
                                        @endforeach
                                        
                                    </ul>
                                </li>
                            @endif    
                        @endforeach
                    @endforeach                  
                </ul>
                <ul id="menu_max_screen">
                    @if ($groups = \HDModule::getMenuByModule())
                        @foreach ($groups as $item)
                            @if (\HDModule::hadPermission($item['permission'],'admin'))
                                <li class="submenu">
                                    <a href="#">
                                        <i class="{{$item['icon']}}"></i>
                                        <span> {{$item['title']}}</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul style="display: none;">
                                        
                                        @foreach ($item['menus'] as $val)
                                            @if (\HDModule::hadPermission($val['permission'],'admin'))
                                                <li>
                                                    <a href="{{$val['url']}}" pjax>{{$val['title']}}</a>
                                                </li>       
                                            @endif                               
                                        @endforeach
                                        
                                    </ul>
                                </li>
                            @endif    
                        @endforeach
                        
                    @endif
                </ul>
            </div>
        </div>
