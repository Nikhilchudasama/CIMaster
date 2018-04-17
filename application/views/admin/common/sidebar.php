<!-- main sidebar -->
<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header">
          <span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="General"></i>
        </li>
        <li class="nav-item">
            <a href="<?= $this->adminURL; ?>Dashboard"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="ft-user"></i><span class="menu-title" data-i18n="">Users</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="<?= $this->adminURL; ?>Users/add">Add</a>
            </li>
            <li><a class="menu-item" href="<?= $this->adminURL; ?>Users">List</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
 <!-- main sidebar end -->

