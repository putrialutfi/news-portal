<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <div class="profile-sidebar">
    <div class="profile-userpic">
      <img src="assets/img/admin_icon.png" class="img-responsive" alt="">
    </div>
    <div class="profile-usertitle">
      <div class="profile-usertitle-name">Admin</div>
      <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="divider"></div>
  <ul class="nav menu">
    <li class=<?php if($current_page == $dataDB->md5Conv('dashboard')){ echo "active";} ?>><a href="?page=<?php echo $dataDB->md5Conv('dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
    <li class=<?php if($current_page == $dataDB->md5Conv('table')){ echo "active";} ?>><a href="?page=<?php echo $dataDB->md5Conv('table'); ?>"><em class="fa fa-newspaper-o">&nbsp;</em> Berita</a></li>
  </ul>
</div>
