<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()-> is('Infosepeda') ? 'active' : ''}}"><a href="/Infosepeda"><i class="fa fa-search"></i> <span>Infosepeda</span></a></li>
        <li class="{{request()-> is('siswa') ? 'active' : ''}}"><a href="/siswa"><i class="fa fa-group"></i> <span>Sewa</span></a></li>
        <li class="{{request()-> is('user') ? 'active' : ''}}"><a href="/rekap_absensi"><i class="fa fa-reorder"></i> <span>Rekap Sewa</span></a></li>
        <li class="treeview">