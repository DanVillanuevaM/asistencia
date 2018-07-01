

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="inicio" class=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <?php foreach ($menu as $key => $value) { ?>
                                <li>
                                <a href="#"><i class="fa fa-dashboard fa-fw"></i><?php echo $value->parent; ?></a>
                                <?php if (isset($value->childs)) { ?>   
                                    <ul class="nav nav-second-level">
                                        <?php foreach ($value->childs as $key => $child) { ?>
                                            <li>
                                                <a href="<?php echo $key ?>"><?php echo $child; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>

   

      