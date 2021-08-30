<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="<?php echo SERVIDOR ?>">Tienda</a>
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Categorías  </a>
            <ul id="submenu" class="dropdown-menu ">
                <li>
                    <a href="<?php echo BLOG; ?>?categoria=Accesorios" id="btnSubmenu" 
                        class="dropdown-item" >Accesorios</a>
                </li>
                <li>
                    <a href="<?php echo BLOG; ?>?categoria=Aprender de licores" id="btnSubmenu" 
                        class="dropdown-item">Aprender de licores</a>
                </li>
                <li>
                    <a href="<?php echo BLOG; ?>?categoria=Cocteles" id="btnSubmenu" 
                        class="dropdown-item">Cocteles</a>
                </li>
                <li>
                    <a href="<?php echo BLOG; ?>?categoria=Maridajes" id="btnSubmenu" 
                        class="dropdown-item">Maridajes</a>
                </li>
                <li>
                    <a href="<?php echo BLOG; ?>?categoria=Momentos para compartir" id="btnSubmenu" 
                        class="dropdown-item">Momentos para compartir</a>
                </li>
                <li>
                    <a href="<?php echo BLOG; ?>?categoria=Expertos dicen" id="btnSubmenu" 
                        class="dropdown-item">Expertos dicen</a>
                </li>
            </ul>
        <a href="<?php echo SERVIDOR; ?>#blog">Blog</a>

    </div>
</div>

<div id="menu" >
    <span id="btn-menu" class="btnMenu" onclick="openNav()">&#9776; Menú</span>
</div>