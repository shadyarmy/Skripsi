 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="img/bs.jpeg" alt="Logo" width="200"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <?php if($_SESSION['jabatan'] == 'HRD') { ?>                        
                            <a href="?page=home">Home</a>
                            <a href="?page=data-pegawai">Data Pegawai</a>
                            <a href="logout.php">Logout</a>
                        <?php } else if ($_SESSION['jabatan'] == 'Admin') { ?>
                            <a href="#">Data Pelanggan</a>
                            <a href="logout.php">Logout</a>
                        <?php } ?>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->