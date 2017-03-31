@extends('layout.master')
@section('title','Inicio')

@section('cuerpo')

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div id="main-menu" data-scroll-to-active="true" class="main-menu menu-dark menu-fixed menu-shadow menu-accordion">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">5</span></a>
            <ul class="menu-content">
              <li><a href="index.html" data-i18n="nav.dash.project" class="menu-item">Project</a>
              </li>
              <li><a href="dashboard-ecommerce.html" data-i18n="nav.dash.ecommerce" class="menu-item">eCommerce</a>
              </li>
              <li><a href="dashboard-analytics.html" data-i18n="nav.dash.analytics" class="menu-item">Analytics</a>
              </li>
              <li><a href="dashboard-crm.html" data-i18n="nav.dash.crm" class="menu-item">CRM</a>
              </li>
              <li><a href="dashboard-fitness.html" data-i18n="nav.dash.fitness" class="menu-item">Fitness</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-note"></i><span data-i18n="nav.templates.main" class="menu-title">Templates</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.templates.vert.main" class="menu-item">Vertical</a>
                <ul class="menu-content">
                  <li><a href="../vertical-menu-template" data-i18n="nav.templates.vert.classic_menu" class="menu-item">Classic Menu</a>
                  </li>
                  <li><a href="../vertical-compact-menu-template" data-i18n="nav.templates.vert.compact_menu" class="menu-item">Compact Menu</a>
                  </li>
                  <li><a href="../vertical-content-menu-template" data-i18n="nav.templates.vert.content_menu" class="menu-item">Content Menu</a>
                  </li>
                  <li><a href="../vertical-overlay-menu-template" data-i18n="nav.templates.vert.overlay_menu" class="menu-item">Overlay Menu</a>
                  </li>
                  <li><a href="../vertical-multi-level-menu-template" data-i18n="nav.templates.vert.multi_level_menu" class="menu-item">Multi-level Menu</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" data-i18n="nav.templates.horz.main" class="menu-item">Horizontal</a>
                <ul class="menu-content">
                  <li><a href="../horizontal-menu-template" data-i18n="nav.templates.horz.classic" class="menu-item">Classic</a>
                  </li>
                  <li><a href="../horizontal-top-icon-menu-template" data-i18n="nav.templates.horz.top_icon" class="menu-item">Top Icon</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.layouts">Layouts</span><i data-toggle="tooltip" data-placement="right" data-original-title="Layouts" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Page layouts</span></a>
            <ul class="menu-content">
              <li><a href="layout-1-column.html" data-i18n="nav.page_layouts.1_column" class="menu-item">1 column</a>
              </li>
              <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">2 columns</a>
              </li>
              <li><a href="#" data-i18n="nav.page_layouts.3_columns.main" class="menu-item">Content Sidebar</a>
                <ul class="menu-content">
                  <li><a href="layout-content-left-sidebar.html" data-i18n="nav.page_layouts.3_columns.left_sidebar" class="menu-item">Left sidebar</a>
                  </li>
                  <li><a href="layout-content-left-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns.left_sticky_sidebar" class="menu-item">Left sticky sidebar</a>
                  </li>
                  <li><a href="layout-content-right-sidebar.html" data-i18n="nav.page_layouts.3_columns.right_sidebar" class="menu-item">Right sidebar</a>
                  </li>
                  <li><a href="layout-content-right-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns.right_sticky_sidebar" class="menu-item">Right sticky sidebar</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" data-i18n="nav.page_layouts.3_columns_detached.main" class="menu-item">Content Det. Sidebar</a>
                <ul class="menu-content">
                  <li><a href="layout-content-detached-left-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_left_sidebar" class="menu-item">Detached left sidebar</a>
                  </li>
                  <li><a href="layout-content-detached-left-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_left_sidebar" class="menu-item">Detached sticky left sidebar</a>
                  </li>
                  <li><a href="layout-content-detached-right-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_right_sidebar" class="menu-item">Detached right sidebar</a>
                  </li>
                  <li><a href="layout-content-detached-right-sticky-sidebar.html" data-i18n="nav.page_layouts.3_columns_detached.detached_sticky_right_sidebar" class="menu-item">Detached sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="layout-fixed-navbar.html" data-i18n="nav.page_layouts.fixed_navbar" class="menu-item">Fixed navbar</a>
              </li>
              <li><a href="layout-fixed-navigation.html" data-i18n="nav.page_layouts.fixed_navigation" class="menu-item">Fixed navigation</a>
              </li>
              <li><a href="layout-fixed-navbar-navigation.html" data-i18n="nav.page_layouts.fixed_navbar_navigation" class="menu-item">Fixed navbar &amp; navigation</a>
              </li>
              <li><a href="layout-fixed-navbar-footer.html" data-i18n="nav.page_layouts.fixed_navbar_footer" class="menu-item">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="layout-fixed.html" data-i18n="nav.page_layouts.fixed_layout" class="menu-item">Fixed layout</a>
              </li>
              <li><a href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout" class="menu-item">Boxed layout</a>
              </li>
              <li><a href="layout-static.html" data-i18n="nav.page_layouts.static_layout" class="menu-item">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="layout-light.html" data-i18n="nav.page_layouts.light_layout" class="menu-item">Light layout</a>
              </li>
              <li><a href="layout-dark.html" data-i18n="nav.page_layouts.dark_layout" class="menu-item">Dark layout</a>
              </li>
              <li><a href="layout-semi-dark.html" data-i18n="nav.page_layouts.semi_dark_layout" class="menu-item">Semi dark layout</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-navicon2"></i><span data-i18n="nav.navbars.main" class="menu-title">Navbars</span></a>
            <ul class="menu-content">
              <li><a href="navbar-light.html" data-i18n="nav.navbars.nav_light" class="menu-item">Navbar Light</a>
              </li>
              <li><a href="navbar-dark.html" data-i18n="nav.navbars.nav_dark" class="menu-item">Navbar Dark</a>
              </li>
              <li><a href="navbar-semi-dark.html" data-i18n="nav.navbars.nav_semi" class="menu-item">Navbar Semi Dark</a>
              </li>
              <li><a href="navbar-brand-center.html" data-i18n="nav.navbars.nav_brand_center" class="menu-item">Brand Center</a>
              </li>
              <li><a href="navbar-fixed-top.html" data-i18n="nav.navbars.nav_fixed_top" class="menu-item">Fixed Top</a>
              </li>
              <li><a href="navbar-hide-on-scroll.html" data-i18n="nav.navbars.nav_hide_on_scroll.main" class="menu-item">Hide on Scroll</a>
                <ul class="menu-content">
                  <li><a href="navbar-hide-on-scroll-top.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_top" class="menu-item">Hide on Scroll Top</a>
                  </li>
                  <li><a href="navbar-hide-on-scroll-bottom.html" data-i18n="nav.navbars.nav_hide_on_scroll.nav_hide_on_scroll_bottom" class="menu-item">Hide on Scroll Bottom</a>
                  </li>
                </ul>
              </li>
              <li><a href="navbar-components.html" data-i18n="nav.navbars.nav_components" class="menu-item">Navbar Components</a>
              </li>
              <li><a href="navbar-styling.html" data-i18n="nav.navbars.nav_styling" class="menu-item">Navbar Styling</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-panorama_vertical"></i><span data-i18n="nav.vertical_nav.main" class="menu-title">Vertical Nav</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.vertical_nav.vertical_navigation_types.main" class="menu-item">Navigation Types</a>
                <ul class="menu-content">
                  <li><a href="../vertical-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.verticle_menu" class="menu-item">Verticle Menu</a>
                  </li>
                  <li><a href="../vertical-multi-level-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.verticle_mmenu" class="menu-item">Verticle MMenu</a>
                  </li>
                  <li><a href="../vertical-overlay-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.verticle_overlay" class="menu-item">Verticle Overlay</a>
                  </li>
                  <li><a href="../vertical-compact-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.verticle_compact" class="menu-item">Verticle Compact</a>
                  </li>
                  <li><a href="../vertical-content-menu-template" data-i18n="nav.vertical_nav.vertical_navigation_types.verticle_content" class="menu-item">Verticle Content</a>
                  </li>
                </ul>
              </li>
              <li><a href="vertical-nav-fixed.html" data-i18n="nav.vertical_nav.vertical_nav_fixed" class="menu-item">Fixed Navigation</a>
              </li>
              <li><a href="vertical-nav-static.html" data-i18n="nav.vertical_nav.vertical_nav_static" class="menu-item">Static Navigation</a>
              </li>
              <li><a href="vertical-nav-light.html" data-i18n="nav.vertical_nav.vertical_nav_light" class="menu-item">Navigation Light</a>
              </li>
              <li><a href="vertical-nav-dark.html" data-i18n="nav.vertical_nav.vertical_nav_dark" class="menu-item">Navigation Dark</a>
              </li>
              <li><a href="vertical-nav-accordion.html" data-i18n="nav.vertical_nav.vertical_nav_accordion" class="menu-item">Accordion Navigation</a>
              </li>
              <li><a href="vertical-nav-collapsible.html" data-i18n="nav.vertical_nav.vertical_nav_collapsible" class="menu-item">Collapsible Navigation</a>
              </li>
              <li><a href="vertical-nav-flipped.html" data-i18n="nav.vertical_nav.vertical_nav_flipped" class="menu-item">Flipped Navigation</a>
              </li>
              <li><a href="vertical-nav-native-scroll.html" data-i18n="nav.vertical_nav.vertical_nav_native_scroll" class="menu-item">Native scroll</a>
              </li>
              <li><a href="vertical-nav-right-side-icon.html" data-i18n="nav.vertical_nav.vertical_nav_right_side_icon" class="menu-item">Right side icons</a>
              </li>
              <li><a href="vertical-nav-bordered.html" data-i18n="nav.vertical_nav.vertical_nav_bordered" class="menu-item">Bordered Navigation</a>
              </li>
              <li><a href="vertical-nav-disabled-link.html" data-i18n="nav.vertical_nav.vertical_nav_disabled_link" class="menu-item">Disabled Navigation</a>
              </li>
              <li><a href="vertical-nav-styling.html" data-i18n="nav.vertical_nav.vertical_nav_styling" class="menu-item">Navigation Styling</a>
              </li>
              <li><a href="vertical-nav-tags-pills.html" data-i18n="nav.vertical_nav.vertical_nav_tags_pills" class="menu-item">Tags &amp; Pills</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-panorama_horizontal"></i><span data-i18n="nav.horz_nav.main" class="menu-title">Horizontal Nav</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.horz_nav.horizontal_navigation_types.main" class="menu-item">Navigation Types</a>
                <ul class="menu-content">
                  <li><a href="../horizontal-menu-template" data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_left_icon_navigation" class="menu-item">Left Icon Navigation</a>
                  </li>
                  <li><a href="../horizontal-top-icon-menu-template" data-i18n="nav.horz_nav.horizontal_navigation_types.horizontal_top_icon_navigation" class="menu-item">Top Icon Navigation</a>
                  </li>
                </ul>
              </li>
              <li><a href="horizontal-nav-mega-menu.html" data-i18n="nav.horz_nav.horizontal_nav_mega_menu" class="menu-item">Mega Menu</a>
              </li>
              <li><a href="horizontal-nav-fixed.html" data-i18n="nav.horz_nav.horizontal_nav_fixed" class="menu-item">Fixed Navigation</a>
              </li>
              <li><a href="horizontal-nav-flipped.html" data-i18n="nav.horz_nav.horizontal_nav_flipped" class="menu-item">Flipped Navigation</a>
              </li>
              <li><a href="horizontal-nav-submenu-click.html" data-i18n="nav.horz_nav.horizontal_nav_submenu_click" class="menu-item">Submenu on Click</a>
              </li>
              <li><a href="horizontal-nav-submenu-hover.html" data-i18n="nav.horz_nav.horizontal_nav_submenu_hover" class="menu-item">Submenu on Hover</a>
              </li>
              <li><a href="horizontal-nav-light.html" data-i18n="nav.horz_nav.horizontal_nav_light" class="menu-item">Light Navigation</a>
              </li>
              <li><a href="horizontal-nav-dark.html" data-i18n="nav.horz_nav.horizontal_nav_dark" class="menu-item">Dark Navigation</a>
              </li>
              <li><a href="horizontal-nav-right-side-icons.html" data-i18n="nav.horz_nav.horizontal_nav_right_side_icons" class="menu-item">Right side icons</a>
              </li>
              <li><a href="horizontal-nav-no-dropdown.html" data-i18n="nav.horz_nav.horizontal_nav_no_dropdown" class="menu-item">No Dropdown Arrow</a>
              </li>
              <li><a href="horizontal-nav-disabled.html" data-i18n="nav.horz_nav.horizontal_nav_disabled" class="menu-item">Disabled Navigation</a>
              </li>
              <li><a href="horizontal-nav-tags-pills.html" data-i18n="nav.horz_nav.horizontal_nav_tags_pills" class="menu-item">Tags &amp; Pills</a>
              </li>
              <li><a href="horizontal-nav-styling.html" data-i18n="nav.horz_nav.horizontal_nav_styling" class="menu-item">Navigation Styling</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-header"></i><span data-i18n="nav.page_headers.main" class="menu-title">Page Headers</span></a>
            <ul class="menu-content">
              <li><a href="headers-breadcrumbs-basic.html" data-i18n="nav.page_headers.headers_breadcrumbs_basic" class="menu-item">Breadcrumbs basic</a>
              </li>
              <li><a href="headers-breadcrumbs-top.html" data-i18n="nav.page_headers.headers_breadcrumbs_top" class="menu-item">Breadcrumbs top</a>
              </li>
              <li><a href="headers-breadcrumbs-bottom.html" data-i18n="nav.page_headers.headers_breadcrumbs_bottom" class="menu-item">Breadcrumbs bottom</a>
              </li>
              <li><a href="headers-breadcrumbs-top-with-description.html" data-i18n="nav.page_headers.headers_breadcrumbs_top_with_description" class="menu-item">Breadcrumbs top with desc</a>
              </li>
              <li><a href="headers-breadcrumbs-with-button.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_button" class="menu-item">Breadcrumbs with button</a>
              </li>
              <li><a href="headers-breadcrumbs-with-round-button.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_round_button" class="menu-item">Breadcrumbs with button 2</a>
              </li>
              <li><a href="headers-breadcrumbs-with-button-group.html" data-i18n="nav.page_headers.headers_breadcrumbs_with_button_group" class="menu-item">Breadcrumbs with buttons</a>
              </li>
              <li><a href="headers-breadcrumbs-with-description.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_description" class="menu-item">Breadcrumbs with desc</a>
              </li>
              <li><a href="headers-breadcrumbs-with-search.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_search" class="menu-item">Breadcrumbs with search</a>
              </li>
              <li><a href="headers-breadcrumbs-with-stats.html" data-i18n="nav.page_headers.headers_breadcrumbs_breadcrumbs_with_stats" class="menu-item">Breadcrumbs with stats</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-vertical_align_bottom"></i><span data-i18n="nav.footers.main" class="menu-title">Footers</span></a>
            <ul class="menu-content">
              <li><a href="footer-light.html" data-i18n="nav.footers.footer_light" class="menu-item">Footer Light</a>
              </li>
              <li><a href="footer-dark.html" data-i18n="nav.footers.footer_dark" class="menu-item">Footer Dark</a>
              </li>
              <li><a href="footer-transparent.html" data-i18n="nav.footers.footer_transparent" class="menu-item">Footer Transparent</a>
              </li>
              <li><a href="footer-fixed.html" data-i18n="nav.footers.footer_fixed" class="menu-item">Footer Fixed</a>
              </li>
              <li><a href="footer-components.html" data-i18n="nav.footers.footer_components" class="menu-item">Footer Components</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.general">General</span><i data-toggle="tooltip" data-placement="right" data-original-title="General" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-paint-format"></i><span data-i18n="nav.color_palette.main" class="menu-title">Color Palette</span></a>
            <ul class="menu-content">
              <li><a href="color-palette-primary.html" data-i18n="nav.color_palette.color_palette_primary" class="menu-item">Primary palette</a>
              </li>
              <li><a href="color-palette-danger.html" data-i18n="nav.color_palette.color_palette_danger" class="menu-item">Danger palette</a>
              </li>
              <li><a href="color-palette-success.html" data-i18n="nav.color_palette.color_palette_success" class="menu-item">Success palette</a>
              </li>
              <li><a href="color-palette-warning.html" data-i18n="nav.color_palette.color_palette_warning" class="menu-item">Warning palette</a>
              </li>
              <li><a href="color-palette-info.html" data-i18n="nav.color_palette.color_palette_info" class="menu-item">Info palette</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="color-palette-red.html" data-i18n="nav.color_palette.color_palette_red" class="menu-item">Red palette</a>
              </li>
              <li><a href="color-palette-pink.html" data-i18n="nav.color_palette.color_palette_pink" class="menu-item">Pink palette</a>
              </li>
              <li><a href="color-palette-purple.html" data-i18n="nav.color_palette.color_palette_purple" class="menu-item">Purple palette</a>
              </li>
              <li><a href="color-palette-deep-purple.html" data-i18n="nav.color_palette.color_palette_deep_purple" class="menu-item">Deep Purple palette</a>
              </li>
              <li><a href="color-palette-indigo.html" data-i18n="nav.color_palette.color_palette_indigo" class="menu-item">Indigo palette</a>
              </li>
              <li><a href="color-palette-blue.html" data-i18n="nav.color_palette.color_palette_blue" class="menu-item">Blue palette</a>
              </li>
              <li><a href="color-palette-light-blue.html" data-i18n="nav.color_palette.color_palette_light_blue" class="menu-item">Light Blue palette</a>
              </li>
              <li><a href="color-palette-cyan.html" data-i18n="nav.color_palette.color_palette_cyan" class="menu-item">Cyan palette</a>
              </li>
              <li><a href="color-palette-teal.html" data-i18n="nav.color_palette.color_palette_teal" class="menu-item">Teal palette</a>
              </li>
              <li><a href="color-palette-green.html" data-i18n="nav.color_palette.color_palette_green" class="menu-item">Green palette</a>
              </li>
              <li><a href="color-palette-light-green.html" data-i18n="nav.color_palette.color_palette_light_green" class="menu-item">Light Green palette</a>
              </li>
              <li><a href="color-palette-lime.html" data-i18n="nav.color_palette.color_palette_lime" class="menu-item">Lime palette</a>
              </li>
              <li><a href="color-palette-yellow.html" data-i18n="nav.color_palette.color_palette_yellow" class="menu-item">Yellow palette</a>
              </li>
              <li><a href="color-palette-amber.html" data-i18n="nav.color_palette.color_palette_amber" class="menu-item">Amber palette</a>
              </li>
              <li><a href="color-palette-orange.html" data-i18n="nav.color_palette.color_palette_orange" class="menu-item">Orange palette</a>
              </li>
              <li><a href="color-palette-deep-orange.html" data-i18n="nav.color_palette.color_palette_deep_orange" class="menu-item">Deep Orange palette</a>
              </li>
              <li><a href="color-palette-brown.html" data-i18n="nav.color_palette.color_palette_brown" class="menu-item">Brown palette</a>
              </li>
              <li><a href="color-palette-blue-grey.html" data-i18n="nav.color_palette.color_palette_blue_grey" class="menu-item">Blue Grey palette</a>
              </li>
              <li><a href="color-palette-grey.html" data-i18n="nav.color_palette.color_palette_grey" class="menu-item">Grey palette</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-bulb"></i><span data-i18n="nav.starter_kit.main" class="menu-title">Starter kit</span></a>
            <ul class="menu-content">
              <li><a href="sk-1-column.html" data-i18n="nav.starter_kit.sk_1_column" class="menu-item">1 column</a>
              </li>
              <li><a href="sk-2-columns.html" data-i18n="nav.starter_kit.sk_2_columns" class="menu-item">2 columns</a>
              </li>
              <li><a href="#" data-i18n="nav.starter_kit.sk_3_columns.main" class="menu-item">Content Sidebar</a>
                <ul class="menu-content">
                  <li><a href="sk-content-left-sidebar.html" data-i18n="nav.starter_kit.sk_3_columns.sk_3_columns_left_sidebar" class="menu-item">Left sidebar</a>
                  </li>
                  <li><a href="sk-content-left-sticky-sidebar.html" data-i18n="nav.starter_kit.sk_3_columns.sk_3_columns_left_sticky_sidebar" class="menu-item">Left sticky sidebar</a>
                  </li>
                  <li><a href="sk-content-right-sidebar.html" data-i18n="nav.starter_kit.sk_3_columns.sk_3_columns_right_sidebar" class="menu-item">Right sidebar</a>
                  </li>
                  <li><a href="sk-content-right-sticky-sidebar.html" data-i18n="nav.starter_kit.sk_3_columns.sk_3_columns_right_sticky_sidebar" class="menu-item">Right sticky sidebar</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" data-i18n="nav.starter_kit.3_columns_detached.main" class="menu-item">Content Det. Sidebar</a>
                <ul class="menu-content">
                  <li><a href="sk-content-detached-left-sidebar.html" data-i18n="nav.starter_kit.3_columns_detached.sk_3_columns_detached_left_sidebar" class="menu-item">Detached left sidebar</a>
                  </li>
                  <li><a href="sk-content-detached-left-sticky-sidebar.html" data-i18n="nav.starter_kit.3_columns_detached.sk_3_columns_detached_sticky_left_sidebar" class="menu-item">Detached sticky left sidebar</a>
                  </li>
                  <li><a href="sk-content-detached-right-sidebar.html" data-i18n="nav.starter_kit.3_columns_detached.sk_3_columns_detached_right_sidebar" class="menu-item">Detached right sidebar</a>
                  </li>
                  <li><a href="sk-content-detached-right-sticky-sidebar.html" data-i18n="nav.starter_kit.3_columns_detached.sk_3_columns_detached_sticky_right_sidebar" class="menu-item">Detached sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="sk-fixed-navbar.html" data-i18n="nav.starter_kit.sk_fixed_navbar" class="menu-item">Fixed navbar</a>
              </li>
              <li><a href="sk-fixed-navigation.html" data-i18n="nav.starter_kit.sk_fixed_navigation" class="menu-item">Fixed navigation</a>
              </li>
              <li><a href="sk-fixed-navbar-navigation.html" data-i18n="nav.starter_kit.sk_fixed_navbar_navigation" class="menu-item">Fixed navbar &amp; navigation</a>
              </li>
              <li><a href="sk-fixed-navbar-footer.html" data-i18n="nav.starter_kit.sk_fixed_navbar_footer" class="menu-item">Fixed navbar &amp; footer</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="sk-fixed.html" data-i18n="nav.starter_kit.sk_fixed_layout" class="menu-item">Fixed layout</a>
              </li>
              <li><a href="sk-boxed.html" data-i18n="nav.starter_kit.sk_boxed_layout" class="menu-item">Boxed layout</a>
              </li>
              <li><a href="sk-static.html" data-i18n="nav.starter_kit.sk_static_layout" class="menu-item">Static layout</a>
              </li>
              <li class="navigation-divider"></li>
              <li><a href="sk-light.html" data-i18n="nav.starter_kit.sk_light_layout" class="menu-item">Light layout</a>
              </li>
              <li><a href="sk-dark.html" data-i18n="nav.starter_kit.sk_dark_layout" class="menu-item">Dark layout</a>
              </li>
              <li><a href="sk-semi-dark.html" data-i18n="nav.starter_kit.sk_semi_dark_layout" class="menu-item">Semi dark layout</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="changelog.html"><i class="icon-copy"></i><span data-i18n="nav.changelog.main" class="menu-title">Changelog</span><span class="tag tag tag-pill tag-danger float-xs-right">1.2.2</span></a>
          </li>
          <li class="disabled nav-item"><a href="#"><i class="icon-eye-disabled"></i><span data-i18n="nav.disabled_menu.main" class="menu-title">Disabled Menu</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-android-funnel"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Menu levels</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">Second level</a>
              </li>
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Second level child</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.main" class="menu-item">Third level child</a>
                    <ul class="menu-content">
                      <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1" class="menu-item">Fourth level</a>
                      </li>
                      <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2" class="menu-item">Fourth level</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.pages">Pages</span><i data-toggle="tooltip" data-placement="right" data-original-title="Pages" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Project</span></a>
            <ul class="menu-content">
              <li><a href="project-summary.html" data-i18n="nav.project.project_summary" class="menu-item">Project Summary</a>
              </li>
              <li><a href="project-tasks.html" data-i18n="nav.project.project_tasks" class="menu-item">Project Task</a>
              </li>
              <li><a href="project-bugs.html" data-i18n="nav.project.project_bugs" class="menu-item">Project Bugs</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="scrumboard.html"><i class="icon-android-checkbox-outline"></i><span data-i18n="nav.scrumboard.main" class="menu-title">Scrumboard</span><span class="tag tag tag-info float-xs-right">Update</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-file-subtract"></i><span data-i18n="nav.invoice.main" class="menu-title">Invoice</span></a>
            <ul class="menu-content">
              <li><a href="invoice-summary.html" data-i18n="nav.invoice.invoice_summary" class="menu-item">Invoice Summary</a>
              </li>
              <li><a href="invoice-template.html" data-i18n="nav.invoice.invoice_template" class="menu-item">Invoice Template</a>
              </li>
              <li><a href="invoice-list.html" data-i18n="nav.invoice.invoice_list" class="menu-item">Invoice List</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-film"></i><span data-i18n="nav.timelines.main" class="menu-title">Timelines</span></a>
            <ul class="menu-content">
              <li><a href="timeline-center.html" data-i18n="nav.timelines.timeline_center" class="menu-item">Timelines Center</a>
              </li>
              <li><a href="timeline-left.html" data-i18n="nav.timelines.timeline_left" class="menu-item">Timelines Left</a>
              </li>
              <li><a href="timeline-right.html" data-i18n="nav.timelines.timeline_right" class="menu-item">Timelines Right</a>
              </li>
              <li><a href="timeline-horizontal.html" data-i18n="nav.timelines.timeline_horizontal" class="menu-item">Timelines Horizontal</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-head"></i><span data-i18n="nav.users.main" class="menu-title">Users</span></a>
            <ul class="menu-content">
              <li class="active"><a href="user-profile.html" data-i18n="nav.users.user_profile" class="menu-item">Users Profile</a>
              </li>
              <li><a href="user-cards.html" data-i18n="nav.users.user_cards" class="menu-item">Users Cards</a>
              </li>
              <li><a href="users-contacts.html" data-i18n="nav.users.users_contacts" class="menu-item">Users List</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-image4"></i><span data-i18n="nav.gallery_pages.main" class="menu-title">Gallery</span></a>
            <ul class="menu-content">
              <li><a href="gallery-grid.html" data-i18n="nav.gallery_pages.gallery_grid" class="menu-item">Gallery Grid</a>
              </li>
              <li><a href="gallery-grid-with-desc.html" data-i18n="nav.gallery_pages.gallery_grid_with_desc" class="menu-item">Gallery Grid with Desc</a>
              </li>
              <li><a href="gallery-masonry.html" data-i18n="nav.gallery_pages.gallery_masonry" class="menu-item">Masonry Gallery</a>
              </li>
              <li><a href="gallery-masonry-with-desc.html" data-i18n="nav.gallery_pages.gallery_masonry_with_desc" class="menu-item">Masonry Gallery with Desc</a>
              </li>
              <li><a href="gallery-hover-effects.html" data-i18n="nav.gallery_pages.gallery_hover_effects" class="menu-item">Hover Effects</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-search7"></i><span data-i18n="nav.search_pages.main" class="menu-title">Search</span></a>
            <ul class="menu-content">
              <li><a href="search-page.html" data-i18n="nav.search_pages.search_page" class="menu-item">Search Page</a>
              </li>
              <li><a href="search-website.html" data-i18n="nav.search_pages.search_website" class="menu-item">Search Website</a>
              </li>
              <li><a href="search-images.html" data-i18n="nav.search_pages.search_images" class="menu-item">Search Images</a>
              </li>
              <li><a href="search-videos.html" data-i18n="nav.search_pages.search_videos" class="menu-item">Search Videos</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-unlock2"></i><span data-i18n="nav.login_register_pages.main" class="menu-title">Authentication</span></a>
            <ul class="menu-content">
              <li><a href="login-simple.html" data-i18n="nav.login_register_pages.login_simple" class="menu-item">Login Simple</a>
              </li>
              <li><a href="login-with-bg.html" data-i18n="nav.login_register_pages.login_with_bg" class="menu-item">Login with Bg</a>
              </li>
              <li><a href="login-with-bg-image.html" data-i18n="nav.login_register_pages.login_with_bg_image" class="menu-item">Login with Bg Image</a>
              </li>
              <li><a href="login-with-navbar.html" data-i18n="nav.login_register_pages.login_with_navbar" class="menu-item">Login with Navbar</a>
              </li>
              <li><a href="login-advanced.html" data-i18n="nav.login_register_pages.login_advanced" class="menu-item">Login Advanced</a>
              </li>
              <li><a href="register-simple.html" data-i18n="nav.login_register_pages.register_simple" class="menu-item">Register Simple</a>
              </li>
              <li><a href="register-with-bg.html" data-i18n="nav.login_register_pages.register_with_bg" class="menu-item">Register with Bg</a>
              </li>
              <li><a href="register-with-bg-image.html" data-i18n="nav.login_register_pages.register_with_bg_image" class="menu-item">Register with Bg Image</a>
              </li>
              <li><a href="register-with-navbar.html" data-i18n="nav.login_register_pages.register_with_navbar" class="menu-item">Register with Navbar</a>
              </li>
              <li><a href="register-advanced.html" data-i18n="nav.login_register_pages.register_advanced" class="menu-item">Register Advanced</a>
              </li>
              <li><a href="unlock-user.html" data-i18n="nav.login_register_pages.unlock_user" class="menu-item">Unlock User</a>
              </li>
              <li><a href="recover-password.html" data-i18n="nav.login_register_pages.recover_password" class="menu-item">recover-password</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-warning"></i><span data-i18n="nav.error_pages.main" class="menu-title">Error</span></a>
            <ul class="menu-content">
              <li><a href="error-400.html" data-i18n="nav.error_pages.error_400" class="menu-item">Error 400</a>
              </li>
              <li><a href="error-400-with-navbar.html" data-i18n="nav.error_pages.error_400_with_navbar" class="menu-item">Error 400 with Navbar</a>
              </li>
              <li><a href="error-401.html" data-i18n="nav.error_pages.error_401" class="menu-item">Error 401</a>
              </li>
              <li><a href="error-401-with-navbar.html" data-i18n="nav.error_pages.error_401_with_navbar" class="menu-item">Error 401 with Navbar</a>
              </li>
              <li><a href="error-403.html" data-i18n="nav.error_pages.error_403" class="menu-item">Error 403</a>
              </li>
              <li><a href="error-403-with-navbar.html" data-i18n="nav.error_pages.error_403_with_navbar" class="menu-item">Error 403 with Navbar</a>
              </li>
              <li><a href="error-404.html" data-i18n="nav.error_pages.error_404" class="menu-item">Error 404</a>
              </li>
              <li><a href="error-404-with-navbar.html" data-i18n="nav.error_pages.error_404_with_navbar" class="menu-item">Error 404 with Navbar</a>
              </li>
              <li><a href="error-500.html" data-i18n="nav.error_pages.error_500" class="menu-item">Error 500</a>
              </li>
              <li><a href="error-500-with-navbar.html" data-i18n="nav.error_pages.error_500_with_navbar" class="menu-item">Error 500 with Navbar</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-file2"></i><span data-i18n="nav.other_pages.main" class="menu-title">Others</span></a>
            <ul class="menu-content">
              <li><a href="coming-soon.html" data-i18n="nav.other_pages.coming_soon.main" class="menu-item">Coming Soon</a>
                <ul class="menu-content">
                  <li><a href="coming-soon-flat.html" data-i18n="nav.other_pages.coming_soon.coming_soon_flat" class="menu-item">Flat</a>
                  </li>
                  <li><a href="coming-soon-bg-image.html" data-i18n="nav.other_pages.coming_soon.coming_soon_bg_image" class="menu-item">Bg image</a>
                  </li>
                  <li><a href="coming-soon-bg-video.html" data-i18n="nav.other_pages.coming_soon.coming_soon_bg_video" class="menu-item">Bg video</a>
                  </li>
                </ul>
              </li>
              <li><a href="under-maintenance.html" data-i18n="nav.other_pages.under_maintenance" class="menu-item">Maintenance</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.ui">User Interface</span><i data-toggle="tooltip" data-placement="right" data-original-title="User Interface" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Cards</span><span class="tag tag tag-success float-xs-right mr-2">New</span></a>
            <ul class="menu-content">
              <li><a href="card-bootstrap.html" data-i18n="nav.cards.card_bootstrap" class="menu-item">Bootstrap</a>
              </li>
              <li><a href="card-advance.html" data-i18n="nav.cards.card_advance" class="menu-item">Advance</a>
              </li>
              <li><a href="card-headings.html" data-i18n="nav.cards.card_headings" class="menu-item">Headings</a>
              </li>
              <li><a href="card-options.html" data-i18n="nav.cards.card_options" class="menu-item">Options</a>
              </li>
              <li><a href="card-actions.html" data-i18n="nav.cards.card_actions" class="menu-item">Action</a>
              </li>
              <li><a href="card-draggable.html" data-i18n="nav.cards.card_draggable" class="menu-item">Draggable</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">Content</span></a>
            <ul class="menu-content">
              <li><a href="content-grid.html" data-i18n="nav.content.content_grid" class="menu-item">Grid</a>
              </li>
              <li><a href="content-typography.html" data-i18n="nav.content.content_typography" class="menu-item">Typography</a>
              </li>
              <li><a href="content-text-utilities.html" data-i18n="nav.content.content_text_utilities" class="menu-item">Text utilities</a>
              </li>
              <li><a href="content-syntax-highlighter.html" data-i18n="nav.content.content_syntax_highlighter" class="menu-item">Syntax highlighter</a>
              </li>
              <li><a href="content-helper-classes.html" data-i18n="nav.content.content_helper_classes" class="menu-item">Helper classes</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-grid2"></i><span data-i18n="nav.components.main" class="menu-title">Components</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Alerts</a>
              </li>
              <li><a href="component-callout.html" data-i18n="nav.components.component_callout" class="menu-item">Callout</a>
              </li>
              <li><a href="components-buttons.html" data-i18n="nav.components.components_buttons.main" class="menu-item">Buttons</a>
                <ul class="menu-content">
                  <li><a href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item">Basic Buttons</a>
                  </li>
                  <li><a href="component-buttons-extended.html" data-i18n="nav.components.components_buttons.component_buttons_extended" class="menu-item">Extended Buttons</a>
                  </li>
                </ul>
              </li>
              <li><a href="component-carousel.html" data-i18n="nav.components.component_carousel" class="menu-item">Carousel</a>
              </li>
              <li><a href="component-collapse.html" data-i18n="nav.components.component_collapse" class="menu-item">Collapse</a>
              </li>
              <li><a href="component-dropdowns.html" data-i18n="nav.components.component_dropdowns" class="menu-item">Dropdowns</a>
              </li>
              <li><a href="component-list-group.html" data-i18n="nav.components.component_list_group" class="menu-item">List Group</a>
              </li>
              <li><a href="component-modals.html" data-i18n="nav.components.component_modals" class="menu-item">Modals</a>
              </li>
              <li><a href="component-pagination.html" data-i18n="nav.components.component_pagination" class="menu-item">Pagination</a>
              </li>
              <li><a href="component-navs-component.html" data-i18n="nav.components.component_navs_component" class="menu-item">Navs Component</a>
              </li>
              <li><a href="component-tabs-component.html" data-i18n="nav.components.component_tabs_component" class="menu-item">Tabs Component</a>
              </li>
              <li><a href="component-pills-component.html" data-i18n="nav.components.component_pills_component" class="menu-item">Pills Component</a>
              </li>
              <li><a href="component-tooltips.html" data-i18n="nav.components.component_tooltips" class="menu-item">Tooltips</a>
              </li>
              <li><a href="component-popovers.html" data-i18n="nav.components.component_popovers" class="menu-item">Popovers</a>
              </li>
              <li><a href="component-tags.html" data-i18n="nav.components.component_tags" class="menu-item">Tags</a>
              </li>
              <li><a href="component-pill-tags.html" class="menu-item">Pill Tags</a>
              </li>
              <li><a href="component-progress.html" data-i18n="nav.components.component_progress" class="menu-item">Progress</a>
              </li>
              <li><a href="component-media-objects.html" data-i18n="nav.components.component_media_objects" class="menu-item">Media Objects</a>
              </li>
              <li><a href="component-scrollable.html" data-i18n="nav.components.component_scrollable" class="menu-item">Scrollable</a>
              </li>
              <li><a href="component-loaders.html" data-i18n="nav.components.component_loaders" class="menu-item">Loaders</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-diamond"></i><span data-i18n="nav.extra_components.main" class="menu-title">Extra Components</span></a>
            <ul class="menu-content">
              <li><a href="ex-component-sweet-alerts.html" data-i18n="nav.extra_components.ex_component_sweet_alerts" class="menu-item">Sweet Alerts</a>
              </li>
              <li><a href="ex-component-tree-views.html" data-i18n="nav.extra_components.ex_component_tree_views" class="menu-item">Tree Views</a>
              </li>
              <li><a href="ex-component-toastr.html" data-i18n="nav.extra_components.ex_component_toastr" class="menu-item">Toastr</a>
              </li>
              <li><a href="ex-component-ratings.html" data-i18n="nav.extra_components.ex_component_ratings" class="menu-item">Ratings</a>
              </li>
              <li><a href="ex-component-context-menu.html" data-i18n="nav.extra_components.ex_component_context_menu" class="menu-item">Context Menu</a>
              </li>
              <li><a href="ex-component-noui-slider.html" data-i18n="nav.extra_components.ex_component_noui_slider" class="menu-item">NoUI Slider</a>
              </li>
              <li><a href="ex-component-date-time-dropper.html" data-i18n="nav.extra_components.ex_component_date_time_dropper" class="menu-item">Date Time Dropper</a>
              </li>
              <li><a href="ex-component-lists.html" data-i18n="nav.extra_components.ex_component_lists" class="menu-item">Lists</a>
              </li>
              <li><a href="ex-component-toolbar.html" data-i18n="nav.extra_components.ex_component_toolbar" class="menu-item">Toolbar</a>
              </li>
              <li><a href="ex-component-unslider.html" data-i18n="nav.extra_components.ex_component_unslider" class="menu-item">Unslider</a>
              </li>
              <li><a href="ex-component-knob.html" data-i18n="nav.extra_components.ex_component_knob" class="menu-item">Knob</a>
              </li>
              <li><a href="ex-component-long-press.html" data-i18n="nav.extra_components.ex_component_long_press" class="menu-item">Long Press</a>
              </li>
              <li><a href="ex-component-offline.html" data-i18n="nav.extra_components.ex_component_offline" class="menu-item">Offline</a>
              </li>
              <li><a href="ex-component-zoom.html" data-i18n="nav.extra_components.ex_component_zoom" class="menu-item">Zoom</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-eye6"></i><span data-i18n="nav.icons.main" class="menu-title">Icons</span></a>
            <ul class="menu-content">
              <li><a href="icons-feather.html" data-i18n="nav.icons.icons_feather" class="menu-item">Feather</a>
              </li>
              <li><a href="icons-ionicons.html" data-i18n="nav.icons.icons_ionicons" class="menu-item">Ionicons</a>
              </li>
              <li><a href="icons-fps-line.html" data-i18n="nav.icons.icons_fps_line" class="menu-item">FPS Line Icons</a>
              </li>
              <li><a href="icons-ico-moon.html" data-i18n="nav.icons.icons_ico_moon" class="menu-item">Ico Moon</a>
              </li>
              <li><a href="icons-font-awesome.html" data-i18n="nav.icons.icons_font_awesome" class="menu-item">Font Awesome</a>
              </li>
              <li><a href="icons-meteocons.html" data-i18n="nav.icons.icons_meteocons" class="menu-item">Meteocons</a>
              </li>
              <li><a href="icons-evil.html" data-i18n="nav.icons.icons_evil" class="menu-item">Evil Icons</a>
              </li>
              <li><a href="icons-linecons.html" data-i18n="nav.icons.icons_linecons" class="menu-item">Linecons</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="animation.html"><i class="icon-spinner10 spinner"></i><span data-i18n="nav.animation.main" class="menu-title">Animation</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.forms">Forms</span><i data-toggle="tooltip" data-placement="right" data-original-title="Forms" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-paper"></i><span data-i18n="nav.form_elements.main" class="menu-title">Form Elements</span></a>
            <ul class="menu-content">
              <li><a href="form-inputs.html" data-i18n="nav.form_elements.form_inputs" class="menu-item">Form Inputs</a>
              </li>
              <li><a href="form-input-groups.html" data-i18n="nav.form_elements.form_input_groups" class="menu-item">Input Groups</a>
              </li>
              <li><a href="form-input-grid.html" data-i18n="nav.form_elements.form_input_grid" class="menu-item">Input Grid</a>
              </li>
              <li><a href="form-extended-inputs.html" data-i18n="nav.form_elements.form_extended_inputs" class="menu-item">Extended Inputs</a>
              </li>
              <li><a href="form-checkboxes-radios.html" data-i18n="nav.form_elements.form_checkboxes_radios" class="menu-item">Checkboxes &amp; Radios</a>
              </li>
              <li><a href="form-switch.html" data-i18n="nav.form_elements.form_switch" class="menu-item">Switch</a>
              </li>
              <li><a href="#" data-i18n="nav.form_elements.form_select.main" class="menu-item">Select</a>
                <ul class="menu-content">
                  <li><a href="form-select2.html" data-i18n="nav.form_elements.form_select.form_select2" class="menu-item">Select2</a>
                  </li>
                  <li><a href="form-selectize.html" data-i18n="nav.form_elements.form_select.form_selectize" class="menu-item">Selectize</a>
                  </li>
                  <li><a href="form-selectivity.html" data-i18n="nav.form_elements.form_select.form_selectivity" class="menu-item">Selectivity</a>
                  </li>
                  <li><a href="form-select-box-it.html" data-i18n="nav.form_elements.form_select.form_select_box_it" class="menu-item">Select Box It</a>
                  </li>
                </ul>
              </li>
              <li><a href="form-dual-listbox.html" data-i18n="nav.form_elements.form_dual_listbox" class="menu-item">Dual Listbox</a>
              </li>
              <li><a href="form-tags-input.html" data-i18n="nav.form_elements.form_tags_input" class="menu-item">Tags Input</a>
              </li>
              <li><a href="form-validation.html" data-i18n="nav.form_elements.form_validation" class="menu-item">Validation</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-wpforms"></i><span data-i18n="nav.form_layouts.main" class="menu-title">Form Layouts</span></a>
            <ul class="menu-content">
              <li><a href="form-layout-basic.html" data-i18n="nav.form_layouts.form_layout_basic" class="menu-item">Basic Forms</a>
              </li>
              <li><a href="form-layout-horizontal.html" data-i18n="nav.form_layouts.form_layout_horizontal" class="menu-item">Horizontal Forms</a>
              </li>
              <li><a href="form-layout-hidden-labels.html" data-i18n="nav.form_layouts.form_layout_hidden_labels" class="menu-item">Hidden Labels</a>
              </li>
              <li><a href="form-layout-form-actions.html" data-i18n="nav.form_layouts.form_layout_form_actions" class="menu-item">Form Actions</a>
              </li>
              <li><a href="form-layout-row-separator.html" data-i18n="nav.form_layouts.form_layout_row_separator" class="menu-item">Row Separator</a>
              </li>
              <li><a href="form-layout-bordered.html" data-i18n="nav.form_layouts.form_layout_bordered" class="menu-item">Bordered</a>
              </li>
              <li><a href="form-layout-striped-rows.html" data-i18n="nav.form_layouts.form_layout_striped_rows" class="menu-item">Striped Rows</a>
              </li>
              <li><a href="form-layout-striped-labels.html" data-i18n="nav.form_layouts.form_layout_striped_labels" class="menu-item">Striped Labels</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-paste"></i><span data-i18n="nav.form_wizard.main" class="menu-title">Form Wizard</span></a>
            <ul class="menu-content">
              <li><a href="form-wizard-circle-style.html" data-i18n="nav.form_wizard.form_wizard_circle_style" class="menu-item">Circle Style</a>
              </li>
              <li><a href="form-wizard-notification-style.html" data-i18n="nav.form_wizard.form_wizard_notification_style" class="menu-item">Notification Style</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="form-repeater.html"><i class="icon-repeat2"></i><span data-i18n="nav.form_repeater.main" class="menu-title">Form Repeater</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.tables">Tables</span><i data-toggle="tooltip" data-placement="right" data-original-title="Tables" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-table2"></i><span data-i18n="nav.bootstrap_tables.main" class="menu-title">Bootstrap Tables</span></a>
            <ul class="menu-content">
              <li><a href="table-basic.html" data-i18n="nav.bootstrap_tables.table_basic" class="menu-item">Basic Tables</a>
              </li>
              <li><a href="table-border.html" data-i18n="nav.bootstrap_tables.table_border" class="menu-item">Table Border</a>
              </li>
              <li><a href="table-sizing.html" data-i18n="nav.bootstrap_tables.table_sizing" class="menu-item">Table Sizing</a>
              </li>
              <li><a href="table-styling.html" data-i18n="nav.bootstrap_tables.table_styling" class="menu-item">Table Styling</a>
              </li>
              <li><a href="table-components.html" data-i18n="nav.bootstrap_tables.table_components" class="menu-item">Table Components</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-th"></i><span data-i18n="nav.data_tables.main" class="menu-title">DataTables</span></a>
            <ul class="menu-content">
              <li><a href="dt-basic-initialization.html" data-i18n="nav.data_tables.dt_basic_initialization" class="menu-item">Basic Initialisation</a>
              </li>
              <li><a href="dt-advanced-initialization.html" data-i18n="nav.data_tables.dt_advanced_initialization" class="menu-item">Advanced initialisation</a>
              </li>
              <li><a href="dt-styling.html" data-i18n="nav.data_tables.dt_styling" class="menu-item">Styling</a>
              </li>
              <li><a href="dt-data-sources.html" data-i18n="nav.data_tables.dt_data_sources" class="menu-item">Data Sources</a>
              </li>
              <li><a href="dt-api.html" data-i18n="nav.data_tables.dt_api" class="menu-item">API</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-th-large"></i><span data-i18n="nav.datatable_extensions.main" class="menu-title">DataTables Ext.</span></a>
            <ul class="menu-content">
              <li><a href="dt-extensions-autofill.html" data-i18n="nav.datatable_extensions.dt_extensions_autofill" class="menu-item">AutoFill</a>
              </li>
              <li><a href="#" data-i18n="nav.datatable_extensions.datatable_buttons.main" class="menu-item">Buttons</a>
                <ul class="menu-content">
                  <li><a href="dt-extensions-buttons-basic.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic" class="menu-item">Basic Buttons</a>
                  </li>
                  <li><a href="dt-extensions-buttons-html-5-data-export.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export" class="menu-item">HTML 5 Data Export</a>
                  </li>
                  <li><a href="dt-extensions-buttons-flash-data-export.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export" class="menu-item">Flash Data Export</a>
                  </li>
                  <li><a href="dt-extensions-buttons-column-visibility.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility" class="menu-item">Column Visibility</a>
                  </li>
                  <li><a href="dt-extensions-buttons-print.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print" class="menu-item">Print</a>
                  </li>
                  <li><a href="dt-extensions-buttons-api.html" data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api" class="menu-item">API</a>
                  </li>
                </ul>
              </li>
              <li><a href="dt-extensions-column-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_column_reorder" class="menu-item">Column Reorder</a>
              </li>
              <li><a href="dt-extensions-fixed-columns.html" data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns" class="menu-item">Fixed Columns</a>
              </li>
              <li><a href="dt-extensions-key-table.html" data-i18n="nav.datatable_extensions.dt_extensions_key_table" class="menu-item">Key Table</a>
              </li>
              <li><a href="dt-extensions-row-reorder.html" data-i18n="nav.datatable_extensions.dt_extensions_row_reorder" class="menu-item">Row Reorder</a>
              </li>
              <li><a href="dt-extensions-select.html" data-i18n="nav.datatable_extensions.dt_extensions_select" class="menu-item">Select</a>
              </li>
              <li><a href="dt-extensions-fix-header.html" data-i18n="nav.datatable_extensions.dt_extensions_fix_header" class="menu-item">Fix Header</a>
              </li>
              <li><a href="dt-extensions-responsive.html" data-i18n="nav.datatable_extensions.dt_extensions_responsive" class="menu-item">Responsive</a>
              </li>
              <li><a href="dt-extensions-column-visibility.html" data-i18n="nav.datatable_extensions.dt_extensions_column_visibility" class="menu-item">Column Visibility</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-table3"></i><span data-i18n="nav.handson_table.main" class="menu-title">Handson Table</span></a>
            <ul class="menu-content">
              <li><a href="handson-table-appearance.html" data-i18n="nav.handson_table.handson_table_appearance" class="menu-item">Appearance</a>
              </li>
              <li><a href="handson-table-rows-columns.html" data-i18n="nav.handson_table.handson_table_rows_columns" class="menu-item">Rows Columns</a>
              </li>
              <li><a href="handson-table-rows-only.html" data-i18n="nav.handson_table.handson_table_rows_only" class="menu-item">Rows Only</a>
              </li>
              <li><a href="handson-table-columns-only.html" data-i18n="nav.handson_table.handson_table_columns_only" class="menu-item">Columns Only</a>
              </li>
              <li><a href="handson-table-data-operations.html" data-i18n="nav.handson_table.handson_table_data_operations" class="menu-item">Data Operations</a>
              </li>
              <li><a href="handson-table-cell-features.html" data-i18n="nav.handson_table.handson_table_cell_features" class="menu-item">Cell Features</a>
              </li>
              <li><a href="handson-table-cell-types.html" data-i18n="nav.handson_table.handson_table_cell_types" class="menu-item">Cell Types</a>
              </li>
              <li><a href="handson-table-integrations.html" data-i18n="nav.handson_table.handson_table_integrations" class="menu-item">Integrations</a>
              </li>
              <li><a href="handson-table-utilities.html" data-i18n="nav.handson_table.handson_table_utilities" class="menu-item">Utilities</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="table-jsgrid.html"><i class="icon-table"></i><span data-i18n="nav.table_jsgrid.main" class="menu-title">jsGrid</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.addons">Add Ons</span><i data-toggle="tooltip" data-placement="right" data-original-title="Add Ons" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-edit2"></i><span data-i18n="nav.editors.main" class="menu-title">Editors</span></a>
            <ul class="menu-content">
              <li><a href="editor-quill.html" data-i18n="nav.editors.editor_quill" class="menu-item">Quill</a>
              </li>
              <li><a href="editor-ckeditor.html" data-i18n="nav.editors.editor_ckeditor" class="menu-item">CKEditor</a>
              </li>
              <li><a href="editor-summernote.html" data-i18n="nav.editors.editor_summernote" class="menu-item">Summernote</a>
              </li>
              <li><a href="editor-tinymce.html" data-i18n="nav.editors.editor_tinymce" class="menu-item">TinyMCE</a>
              </li>
              <li><a href="code-editor-codemirror.html" data-i18n="nav.editors.code_editor_codemirror.main" class="menu-item">Code Editor</a>
                <ul class="menu-content">
                  <li><a href="code-editor-codemirror.html" data-i18n="nav.editors.code_editor_codemirror.code_editor_codemirror" class="menu-item">CodeMirror</a>
                  </li>
                  <li><a href="code-editor-ace.html" data-i18n="nav.editors.code_editor_codemirror.code_editor_ace" class="menu-item">Ace</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-calendar5"></i><span data-i18n="nav.pickers.main" class="menu-title">Pickers</span></a>
            <ul class="menu-content">
              <li><a href="pickers-date-&amp;-time-picker.html" data-i18n="nav.pickers.pickers_date_time_picker" class="menu-item">Date &amp; Time Picker</a>
              </li>
              <li><a href="pickers-color-picker.html" data-i18n="nav.pickers.pickers_color_picker" class="menu-item">Color Picker</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-air-play"></i><span data-i18n="nav.jquery_ui.main" class="menu-title">jQuery UI</span></a>
            <ul class="menu-content">
              <li><a href="jquery-ui-interactions.html" data-i18n="nav.jquery_ui.jquery_ui_interactions" class="menu-item">Interactions</a>
              </li>
              <li><a href="jquery-ui-navigations.html" data-i18n="nav.jquery_ui.jquery_ui_navigations" class="menu-item">Navigations</a>
              </li>
              <li><a href="jquery-ui-date-pickers.html" data-i18n="nav.jquery_ui.jquery_ui_date_pickers" class="menu-item">Date Pickers</a>
              </li>
              <li><a href="jquery-ui-autocomplete.html" data-i18n="nav.jquery_ui.jquery_ui_autocomplete" class="menu-item">Autocomplete</a>
              </li>
              <li><a href="jquery-ui-buttons-select.html" data-i18n="nav.jquery_ui.jquery_ui_buttons_select" class="menu-item">Buttons &amp; Select</a>
              </li>
              <li><a href="jquery-ui-slider-spinner.html" data-i18n="nav.jquery_ui.jquery_ui_slider_spinner" class="menu-item">Slider &amp; Spinner</a>
              </li>
              <li><a href="jquery-ui-dialog-tooltip.html" data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip" class="menu-item">Dialog &amp; Tooltip</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="add-on-block-ui.html"><i class="icon-security"></i><span data-i18n="nav.add_on_block_ui.main" class="menu-title">Block UI</span></a>
          </li>
          <li class=" nav-item"><a href="add-on-image-cropper.html"><i class="icon-crop"></i><span data-i18n="nav.add_on_image_cropper.main" class="menu-title">Image Cropper</span></a>
          </li>
          <li class=" nav-item"><a href="add-on-drag-drop.html"><i class="icon-arrow-move"></i><span data-i18n="nav.add_on_drag_drop.main" class="menu-title">Drag &amp; Drop</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-cloud-upload3"></i><span data-i18n="nav.file_uploaders.main" class="menu-title">File Uploader</span></a>
            <ul class="menu-content">
              <li><a href="file-uploader-dropzone.html" data-i18n="nav.file_uploaders.file_uploader_dropzone" class="menu-item">Dropzone</a>
              </li>
              <li><a href="file-uploader-jquery.html" data-i18n="nav.file_uploaders.file_uploader_jquery" class="menu-item">jQuery File Upload</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-calendar4"></i><span data-i18n="nav.event_calendars.main" class="menu-title">Event Calendars</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.event_calendars.full_calender.main" class="menu-item">Full Calendar</a>
                <ul class="menu-content">
                  <li><a href="full-calender-basic.html" data-i18n="nav.event_calendars.full_calender.full_calender_basic" class="menu-item">Basic</a>
                  </li>
                  <li><a href="full-calender-events.html" data-i18n="nav.event_calendars.full_calender.full_calender_events" class="menu-item">Events</a>
                  </li>
                  <li><a href="full-calender-advance.html" data-i18n="nav.event_calendars.full_calender.full_calender_advance" class="menu-item">Advance</a>
                  </li>
                  <li><a href="full-calender-extra.html" data-i18n="nav.event_calendars.full_calender.full_calender_extra" class="menu-item">Extra</a>
                  </li>
                </ul>
              </li>
              <li><a href="calendars-clndr.html" data-i18n="nav.event_calendars.calendars_clndr" class="menu-item">CLNDR</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-table2"></i><span data-i18n="nav.internationalization.main" class="menu-title">Internationalization</span></a>
            <ul class="menu-content">
              <li><a href="i18n-resources.html" data-i18n="nav.internationalization.i18n_resources" class="menu-item">Resources</a>
              </li>
              <li><a href="i18n-xhr-backend.html" data-i18n="nav.internationalization.i18n_xhr_backend" class="menu-item">XHR Backend</a>
              </li>
              <li><a href="i18n-query-string.html" data-i18n="nav.internationalization.i18n_query_string" class="menu-item">Query String</a>
              </li>
              <li><a href="i18n-on-init.html" data-i18n="nav.internationalization.i18n_on_init" class="menu-item">On Init</a>
              </li>
              <li><a href="i18n-after-init.html" data-i18n="nav.internationalization.i18n_after_init" class="menu-item">After Init</a>
              </li>
              <li><a href="i18n-fallback.html" data-i18n="nav.internationalization.i18n_fallback" class="menu-item">Fallback</a>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i data-toggle="tooltip" data-placement="right" data-original-title="Charts &amp; Maps" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-bar-graph-2"></i><span data-i18n="nav.google_charts.main" class="menu-title">google Charts</span></a>
            <ul class="menu-content">
              <li><a href="google-bar-charts.html" data-i18n="nav.google_charts.google_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="google-line-charts.html" data-i18n="nav.google_charts.google_line_charts" class="menu-item">Line charts</a>
              </li>
              <li><a href="google-pie-charts.html" data-i18n="nav.google_charts.google_pie_charts" class="menu-item">Pie charts</a>
              </li>
              <li><a href="google-scatter-charts.html" data-i18n="nav.google_charts.google_scatter_charts" class="menu-item">Scatter charts</a>
              </li>
              <li><a href="google-bubble-charts.html" data-i18n="nav.google_charts.google_bubble_charts" class="menu-item">Bubble charts</a>
              </li>
              <li><a href="google-other-charts.html" data-i18n="nav.google_charts.google_other_charts" class="menu-item">Other charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-bubble_chart"></i><span data-i18n="nav.echarts.main" class="menu-title">Echarts</span></a>
            <ul class="menu-content">
              <li><a href="echarts-line-area-charts.html" data-i18n="nav.echarts.echarts_line_area_charts" class="menu-item">Line &amp; Area charts</a>
              </li>
              <li><a href="echarts-bar-column-charts.html" data-i18n="nav.echarts.echarts_bar_column_charts" class="menu-item">Bar &amp; Column charts</a>
              </li>
              <li><a href="echarts-pie-doughnut-charts.html" data-i18n="nav.echarts.echarts_pie_doughnut_charts" class="menu-item">Pie &amp; Doughnut charts</a>
              </li>
              <li><a href="echarts-scatter-charts.html" data-i18n="nav.echarts.echarts_scatter_charts" class="menu-item">Scatter charts</a>
              </li>
              <li><a href="echarts-radar-chord-charts.html" data-i18n="nav.echarts.echarts_radar_chord_charts" class="menu-item">Radar &amp; Chord charts</a>
              </li>
              <li><a href="echarts-funnel-gauges-charts.html" data-i18n="nav.echarts.echarts_funnel_gauges_charts" class="menu-item">Funnel &amp; Gauges charts</a>
              </li>
              <li><a href="echarts-combination-charts.html" data-i18n="nav.echarts.echarts_combination_charts" class="menu-item">Combination charts</a>
              </li>
              <li><a href="echarts-advance-charts.html" data-i18n="nav.echarts.echarts_advance_charts" class="menu-item">Advance charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stats-dots"></i><span data-i18n="nav.chartjs.main" class="menu-title">Chartjs</span></a>
            <ul class="menu-content">
              <li><a href="chartjs-line-charts.html" data-i18n="nav.chartjs.chartjs_line_charts" class="menu-item">Line charts</a>
              </li>
              <li><a href="chartjs-bar-charts.html" data-i18n="nav.chartjs.chartjs_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="chartjs-pie-doughnut-charts.html" data-i18n="nav.chartjs.chartjs_pie_doughnut_charts" class="menu-item">Pie &amp; Doughnut charts</a>
              </li>
              <li><a href="chartjs-scatter-charts.html" data-i18n="nav.chartjs.chartjs_scatter_charts" class="menu-item">Scatter charts</a>
              </li>
              <li><a href="chartjs-polar-radar-charts.html" data-i18n="nav.chartjs.chartjs_polar_radar_charts" class="menu-item">Polar &amp; Radar charts</a>
              </li>
              <li><a href="chartjs-advance-charts.html" data-i18n="nav.chartjs.chartjs_advance_charts" class="menu-item">Advance charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stats-bars2"></i><span data-i18n="nav.d3_charts.main" class="menu-title">D3 Charts</span></a>
            <ul class="menu-content">
              <li><a href="d3-line-chart.html" data-i18n="nav.d3_charts.d3_line_chart" class="menu-item">Line Chart</a>
              </li>
              <li><a href="d3-bar-chart.html" data-i18n="nav.d3_charts.d3_bar_chart" class="menu-item">Bar Chart</a>
              </li>
              <li><a href="d3-pie-chart.html" data-i18n="nav.d3_charts.d3_pie_chart" class="menu-item">Pie Chart</a>
              </li>
              <li><a href="d3-circle-diagrams.html" data-i18n="nav.d3_charts.d3_circle_diagrams" class="menu-item">Circle Diagrams</a>
              </li>
              <li><a href="d3-tree-chart.html" data-i18n="nav.d3_charts.d3_tree_chart" class="menu-item">Tree Chart</a>
              </li>
              <li><a href="d3-other-charts.html" data-i18n="nav.d3_charts.d3_other_charts" class="menu-item">Other Charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-arrow-graph-up-right"></i><span data-i18n="nav.c3_charts.main" class="menu-title">C3 Charts</span></a>
            <ul class="menu-content">
              <li><a href="c3-line-chart.html" data-i18n="nav.c3_charts.c3_line_chart" class="menu-item">Line Chart</a>
              </li>
              <li><a href="c3-bar-pie-chart.html" data-i18n="nav.c3_charts.c3_bar_pie_chart" class="menu-item">Bar &amp; Pie Chart</a>
              </li>
              <li><a href="c3-axis-chart.html" data-i18n="nav.c3_charts.c3_axis_chart" class="menu-item">Axis Chart</a>
              </li>
              <li><a href="c3-data-chart.html" data-i18n="nav.c3_charts.c3_data_chart" class="menu-item">Data Chart</a>
              </li>
              <li><a href="c3-grid-chart.html" data-i18n="nav.c3_charts.c3_grid_chart" class="menu-item">Grid Chart</a>
              </li>
              <li><a href="c3-transform-chart.html" data-i18n="nav.c3_charts.c3_transform_chart" class="menu-item">Transform Chart</a>
              </li>
              <li><a href="c3-other-charts.html" data-i18n="nav.c3_charts.c3_other_charts" class="menu-item">Other Charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stats-bars"></i><span data-i18n="nav.chartist.main" class="menu-title">Chartist</span></a>
            <ul class="menu-content">
              <li><a href="chartist-line-charts.html" data-i18n="nav.chartist.chartist_line_charts" class="menu-item">Line charts</a>
              </li>
              <li><a href="chartist-bar-charts.html" data-i18n="nav.chartist.chartist_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="chartist-pie-charts.html" data-i18n="nav.chartist.chartist_pie_charts" class="menu-item">Pie charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-timeline"></i><span data-i18n="nav.dimple_charts.main" class="menu-title">Dimple Charts</span></a>
            <ul class="menu-content">
              <li><a href="dimple-line-area-chart.html" data-i18n="nav.dimple_charts.dimple_line_area_chart" class="menu-item">Line &amp; Area Chart</a>
              </li>
              <li><a href="dimple-bar-column-chart.html" data-i18n="nav.dimple_charts.dimple_bar_column_chart" class="menu-item">Bar &amp; Column Chart</a>
              </li>
              <li><a href="dimple-pie-ring-chart.html" data-i18n="nav.dimple_charts.dimple_pie_ring_chart" class="menu-item">Pie &amp; Ring Chart</a>
              </li>
              <li><a href="dimple-step-chart.html" data-i18n="nav.dimple_charts.dimple_step_chart" class="menu-item">Step Chart</a>
              </li>
              <li><a href="dimple-scatter-chart.html" data-i18n="nav.dimple_charts.dimple_scatter_chart" class="menu-item">Scatter Chart</a>
              </li>
              <li><a href="dimple-bubble-chart.html" data-i18n="nav.dimple_charts.dimple_bubble_chart" class="menu-item">Bubble Chart</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="morris-charts.html"><i class="icon-graphic_eq"></i><span data-i18n="nav.morris_charts.main" class="menu-title">Morris Charts</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-pie-graph2"></i><span data-i18n="nav.flot_charts.main" class="menu-title">Flot Charts</span></a>
            <ul class="menu-content">
              <li><a href="flot-line-charts.html" data-i18n="nav.flot_charts.flot_line_charts" class="menu-item">Line charts</a>
              </li>
              <li><a href="flot-bar-charts.html" data-i18n="nav.flot_charts.flot_bar_charts" class="menu-item">Bar charts</a>
              </li>
              <li><a href="flot-pie-charts.html" data-i18n="nav.flot_charts.flot_pie_charts" class="menu-item">Pie charts</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="rickshaw-charts.html"><i class="icon-grain"></i><span data-i18n="nav.rickshaw_charts.main" class="menu-title">Rickshaw Charts</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-map22"></i><span data-i18n="nav.maps.main" class="menu-title">Maps</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.maps.google_maps.main" class="menu-item">google Maps</a>
                <ul class="menu-content">
                  <li><a href="gmaps-basic-maps.html" data-i18n="nav.maps.google_maps.gmaps_basic_maps" class="menu-item">Maps</a>
                  </li>
                  <li><a href="gmaps-services.html" data-i18n="nav.maps.google_maps.gmaps_services" class="menu-item">Services</a>
                  </li>
                  <li><a href="gmaps-overlays.html" data-i18n="nav.maps.google_maps.gmaps_overlays" class="menu-item">Overlays</a>
                  </li>
                  <li><a href="gmaps-routes.html" data-i18n="nav.maps.google_maps.gmaps_routes" class="menu-item">Routes</a>
                  </li>
                  <li><a href="gmaps-static-maps.html" data-i18n="nav.maps.google_maps.gmaps_static_maps" class="menu-item">Static Maps</a>
                  </li>
                  <li><a href="gmaps-utils.html" data-i18n="nav.maps.google_maps.gmaps_utils" class="menu-item">Utils</a>
                  </li>
                </ul>
              </li>
              <li><a href="#" data-i18n="nav.maps.vector_maps.main" class="menu-item">Vector Maps</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.maps.vector_maps.jquery_mapael.main" class="menu-item">jQuery Mapael</a>
                    <ul class="menu-content">
                      <li><a href="vector-maps-mapael-basic.html" data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic" class="menu-item">Basic Maps</a>
                      </li>
                      <li><a href="vector-maps-mapael-advance.html" data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance" class="menu-item">Advance Maps</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="vector-maps-jvector.html" data-i18n="nav.maps.vector_maps.jvector_maps" class="menu-item">jVector Map</a>
                  </li>
                  <li><a href="vector-maps-jvq.html" data-i18n="nav.maps.vector_maps.vector_maps_jvq" class="menu-item">JQV Map</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
          </li>
          <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="icon-support"></i><span data-i18n="nav.support_raise_support.main" class="menu-title">Raise Support</span></a>
          </li>
          <li class=" nav-item"><a href="http://demo.pixinvent.com/robust-admin/documentation"><i class="icon-document-text"></i><span data-i18n="nav.support_documentation.main" class="menu-title">Documentation</span></a>
          </li>
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <div class="main-menu-footer footer-close">
        <div class="header text-xs-center"><a href="#" class="col-xs-12 footer-toggle"><i class="icon-ios-arrow-up"></i></a></div>
        <div class="content">
          <div class="insights">
            <div class="col-xs-12">
              <p>Product Delivery</p>
              <progress value="25" max="100" class="progress progress-xs progress-success">25%</progress>
            </div>
            <div class="col-xs-12">
              <p>Targeted Sales</p>
              <progress value="70" max="100" class="progress progress-xs progress-info">70%</progress>
            </div>
          </div>
          <div class="actions"><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Settings"><span aria-hidden="true" class="icon-cog3"></span></a><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock"><span aria-hidden="true" class="icon-lock4"></span></a><a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout"><span aria-hidden="true" class="icon-power3"></span></a></div>
        </div>
      </div>
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12">
            <h3 class="content-header-title mb-0">User Profile</h3>
            <p class="text-muted mb-0">User profile page</p>
          </div>
          <div class="content-header-right col-md-6 col-xs-12">
            <div role="group" aria-label="Button group with nested dropdown" class="btn-group float-md-right mt-1">
              <div role="group" class="btn-group">
                <button id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-outline-primary dropdown-toggle dropdown-menu-right"><i class="icon-cog3 icon-left"></i> Settings</button>
                <div aria-labelledby="btnGroupDrop1" class="dropdown-menu"><a href="card-advance.html" class="dropdown-item">Advanced Card</a><a href="component-buttons-extended.html" class="dropdown-item">Buttons Extended</a></div>
              </div><a href="calendars-clndr.html" class="btn btn-outline-primary"><i class="icon-calendar5"></i></a><a href="timeline-center.html" class="btn btn-outline-primary"><i class="icon-bar-graph-2"></i></a>
            </div>
          </div>
          <div class="content-header-lead col-xs-12 mt-1">
            <p class="lead"></p>
          </div>
        </div>
        <div class="content-body"><div id="user-profile">
    <div class="row">
        <div class="col-xs-12">
            <div class="card profile-with-cover">
                <div class="card-img-top img-fluid bg-cover height-300" style="background: url('../../../robust-assets/images/carousel/22.jpg') 50%;"></div>
                <div class="media profil-cover-details">
                    <div class="media-left pl-2 pt-2">
                        <a href="#" class="profile-image">
                            <img src="../../../robust-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border height-100" alt="Card image">
                        </a>
                    </div>
                    <div class="media-body media-middle row">
                        <div class="col-xs-6">
                            <h3 class="card-title">Jose Diaz</h3>
                        </div>
                        <div class="col-xs-6 text-xs-right">
                            <button type="button" class="btn btn-primary hidden-xs-down"><i class="icon-plus4"></i> Follow</button>
                            <div class="btn-group hidden-md-down" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-success"><i class="icon-speech-bubble"></i> Message</button>
                                <button type="button" class="btn btn-warning"><i class="icon-cog3"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light navbar-profile">
                    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                        <ul class="nav navbar-nav float-xs-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="icon-content-left"></i> Timeline <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-head"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-briefcase4"></i> Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-heart6"></i> Favourites</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-bell4"></i> Notifications</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <section id="timeline" class="timeline-center timeline-wrapper">
        <h3 class="page-title text-xs-center">Timeline</h3>
        <ul class="timeline">
            <li class="timeline-line"></li>
            <li class="timeline-group">
                <a href="#" class="btn btn-primary"><i class="icon-calendar3"></i> Today</a>
            </li>
        </ul>
        <ul class="timeline">
            <li class="timeline-line"></li>
            <li class="timeline-item">
                <div class="timeline-badge">
                    <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Portfolio project work"><i class="icon-flight"></i></span>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <h4 class="card-title"><a href="#">Portfolio project work</a></h4>
                        <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">5 hours ago</span>
                        </p>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <img class="img-fluid" src="../../../robust-assets/images/portfolio/width-1200/portfolio-1.jpg" alt="Timeline Image 1">
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                <ul class="list-inline">
                                    <li class="pr-1"><a href="#" class=""><span class="icon-thumbs-o-up"></span> Like</a></li>
                                    <li class="pr-1"><a href="#" class=""><span class="icon-chat2"></span> Comment</a></li>
                                    <li><a href="#" class=""><span class="icon-share4"></span> Share</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer px-0 py-0">
                            <div class="card-block ">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <span class="avatar avatar-online"><img src="../../../robust-assets/images/portrait/small/avatar-s-1.png" alt="avatar"></span>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-bold-600 mb-0"><a href="#">Jason Ansley</a></p>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                        <ul class="list-inline">
                                            <li class="pr-1"><a href="#" class=""><span class="icon-thumbs-o-up"></span> Like</a></li>
                                            <li class="pr-1"><a href="#" class=""><span class="icon-chat2"></span> Reply</a></li>
                                        </ul>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <span class="avatar avatar-online"><img src="../../../robust-assets/images/portrait/small/avatar-s-18.png" alt="avatar"></span>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="text-bold-600 mb-0"><a href="#">Janice Johnston</a></p>
                                                <p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                                <ul class="list-inline">
                                                    <li class="pr-1"><a href="#" class=""><span class="icon-thumbs-o-up"></span> Like</a></li>
                                                    <li class="pr-1"><a href="#" class=""><span class="icon-chat2"></span> Reply</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-block">
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" class="form-control" placeholder="Write comments...">
                                    <div class="form-control-position">
                                        <i class="icon-speech-bubble"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-item mt-3">
                <div class="timeline-badge">
                    <span class="avatar avatar-online" data-toggle="tooltip" data-placement="left" title="Eu pid nunc urna integer"><img src="../../../robust-assets/images/portrait/small/avatar-s-14.png" alt="avatar"></span>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <h4 class="card-title"><a href="#">Sofia Orav</a></h4>
                        <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">8 hours ago</span>
                        </p>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe src="https://player.vimeo.com/video/118589137?title=0&byline=0"></iframe>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                <p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et? Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing adipiscing montes! Elementum risus adipiscing non, cras scelerisque risus penatibus? Massa vut, habitasse, tincidunt!</p>
                                <ul class="list-inline">
                                    <li class="pr-1"><a href="#" class=""><span class="icon-thumbs-o-up"></span> Like</a></li>
                                    <li class="pr-1"><a href="#" class=""><span class="icon-chat2"></span> Comment</a></li>
                                    <li><a href="#" class=""><span class="icon-share4"></span> Share</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer px-0 py-0">
                            <div class="card-block ">
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" class="form-control" placeholder="Write comments...">
                                    <div class="form-control-position">
                                        <i class="icon-speech-bubble"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-item block">
                <div class="timeline-badge">
                    <a title="" data-context="inverse" data-container="body" class="border-silc" href="#" data-original-title="block highlight"></a>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <div class="text-xs-center">
                            <p><i class="icon-bar-graph-2 font-medium-4"></i></p>
                            <h4>Campaign Report</h4>
                            <p class="timeline-date">18 hours ago</p>
                            <p>Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing adipiscing montes! Elementum risus adipiscing non, cras scelerisque risus penatibus? Massa vut, habitasse, tincidunt!</p>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <div class="chart-container">
                                <div id="stacked-column" class="height-400 overflow-hidden echart-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- 2016 -->
        <ul class="timeline">
            <li class="timeline-line"></li>
            <li class="timeline-group">
                <a href="#" class="btn btn-primary"><i class="icon-calendar3"></i> 2016</a>
            </li>
        </ul>
        <ul class="timeline">
            <li class="timeline-line"></li>
            <!-- /.timeline-line -->
            <li class="timeline-item">
                <div class="timeline-badge">
                    <span class="avatar avatar-online" data-toggle="tooltip" data-placement="right" title="Eu pid nunc urna integer"><img src="../../../robust-assets/images/portrait/small/avatar-s-5.png" alt="avatar"></span>
                </div>
                <div class="timeline-card card card-inverse">
                    <img class="card-img img-fluid" src="../../../robust-assets/images/portfolio/width-1200/portfolio-2.jpg" alt="Card image">
                    <div class="card-img-overlay bg-overlay">
                        <h4 class="card-title">Good Morning</h4>
                        <p class="card-text"><small>26 Aug, 2016 at 2.00 A.M</small></p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et? Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing adipiscing montes!</p>
                    </div>
                </div>
            </li>
            <li class="timeline-item mt-3">
                <div class="timeline-badge">
                    <span class="bg-teal bg-lighten-1" data-toggle="tooltip" data-placement="left" title="Nullam facilisis fermentum"><i class="icon-check2"></i></span>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <h4 class="card-title"><a href="#">Sofia Orav</a></h4>
                        <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                        </p>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                <ul class="list-group icheck-task">
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-1"> Cras justo odio</li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-2" checked> Dapibus ac facilisis in</li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-3"> Morbi leo risus</li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-4" disabled checked> Porta ac consectetur ac</li>
                                    <li class="list-group-item">
                                        <input type="checkbox" id="input-5"> Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer px-0 py-0">
                            <div class="card-block ">
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" class="form-control" placeholder="Write comments...">
                                    <div class="form-control-position">
                                        <i class="icon-speech-bubble"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-badge">
                    <span class="bg-purple bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Nullam facilisis fermentum"><i class="icon-target2"></i></span>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <h4 class="card-title"><a href="#">Non-ribbon Chord Chart</a></h4>
                        <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">6 Feb, 2016 at 6.00 A.M</span>
                        </p>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="reload"><i class="icon-repeat2"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                <div class="chart-container">
                                    <div id="non-ribbon-chord" class="height-400 overflow-hidden echart-container"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer px-0 py-0">
                            <div class="card-block ">
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" class="form-control" placeholder="Write comments...">
                                    <div class="form-control-position">
                                        <i class="icon-speech-bubble"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- 2015 -->
        <ul class="timeline">
            <li class="timeline-line"></li>
            <li class="timeline-group">
                <a href="#" class="btn btn-primary"><i class="icon-calendar3"></i> 2015</a>
            </li>
        </ul>
        <ul class="timeline">
            <li class="timeline-line"></li>
            <!-- /.timeline-line -->
            <li class="timeline-item block">
                <div class="timeline-badge">
                    <a title="" data-context="inverse" data-container="body" class="border-silc" href="#" data-original-title="block highlight"></a>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <div class="text-xs-center">
                            <p class="mt-1"><i class="icon-image4 font-medium-4"></i></p>
                            <h4>Media Gallery</h4>
                            <p class="timeline-date">July 1, 2015</p>
                            <p>Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et?</p>
                        </div>
                    </div>
                    <!-- Image grid -->
                    <div class="card-body collapse in">
                        <div class="card-block my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            <div class="row">
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/1.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/1.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/2.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/2.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/3.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/3.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/4.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/4.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                            </div>
                            <div class="row">
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/5.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/5.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/6.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/6.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/7.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/7.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/8.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/8.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                            </div>
                            <div class="row">
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/9.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/9.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/10.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/10.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/11.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/11.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                                <figure class="col-md-3 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="../../../robust-assets/images/gallery/12.jpg" itemprop="contentUrl" data-size="480x360">
                                        <img class="img-thumbnail img-fluid" src="../../../robust-assets/images/gallery/12.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <!--/ Image grid -->
                        <!-- Root element of PhotoSwipe. Must have class pswp. -->
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <!-- Background of PhotoSwipe. 
                     It's a separate element as animating opacity is faster than rgba(). -->
                            <div class="pswp__bg"></div>
                            <!-- Slides wrapper with overflow:hidden. -->
                            <div class="pswp__scroll-wrap">
                                <!-- Container that holds slides. 
                        PhotoSwipe keeps only 3 of them in the DOM to save memory.
                        Don't modify these 3 pswp__item elements, data is added later on. -->
                                <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                </div>
                                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">
                                        <!--  Controls are self-explanatory. Order can be changed. -->
                                        <div class="pswp__counter"></div>
                                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                        <button class="pswp__button pswp__button--share" title="Share"></button>
                                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                        <!-- element will get class pswp__preloader-active when preloader is running -->
                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                        <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                    </button>
                                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                    </button>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ PhotoSwipe -->
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-badge">
                    <span class="bg-warning bg-darken-1" data-toggle="tooltip" data-placement="right" title="Application API Support"><i class="icon-help2"></i></span>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <span class="avatar avatar-md avatar-busy"><img src="../../../robust-assets/images/portrait/small/avatar-s-18.png" alt="avatar"></span>
                                    <i></i>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title"><a href="#">Application API Support</a></h4>
                                <p class="card-subtitle text-muted mb-0 pt-1">
                                    <span class="font-small-3">15 Oct, 2015 at 8.00 A.M</span>
                                    <span class="tag tag-pill tag-default tag-warning float-xs-right">High</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <img class="img-fluid" src="../../../robust-assets/images/portfolio/width-1200/portfolio-3.jpg" alt="Timeline Image 1">
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula. Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                <ul class="list-inline">
                                    <li class="pr-1"><a href="#" class=""><span class="icon-chat2"></span> Comment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer px-0 py-0">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <span class="avatar avatar-online"><img src="../../../robust-assets/images/portrait/small/avatar-s-4.png" alt="avatar"></span>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-bold-600 mb-0"><a href="#">Crystal Lawson</a></p>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <span class="avatar avatar-online"><img src="../../../robust-assets/images/portrait/small/avatar-s-6.png" alt="avatar"></span>
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <p class="text-bold-600 mb-0"><a href="#">Rafila Găitan</a></p>
                                                <p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" class="form-control" placeholder="Write comments...">
                                    <div class="form-control-position">
                                        <i class="icon-speech-bubble"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="timeline-item mt-3">
                <div class="timeline-badge">
                    <span class="bg-amber bg-darken-1" data-toggle="tooltip" data-placement="left" title="Quote of the day"><i class="icon-smile"></i></span>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <h4 class="card-title"><a href="#">Quote of the day</a></h4>
                        <p class="card-subtitle text-muted mb-0 pt-1">
                            <span class="font-small-3">03 March, 2015 at 5 P.M</span>
                        </p>
                    </div>
                    <div class="card-body collapse in">
                        <img class="img-fluid" src="../../../robust-assets/images/portfolio/width-600/portfolio-3.jpg" alt="Timeline Image 1">
                        <div class="card-block">
                            <blockquote class="card-blockquote">
                                <p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et?</p>
                                <footer>Someone famous in
                                    <cite title="Source Title"> - Source Title</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- 2014 -->
        <ul class="timeline">
            <li class="timeline-line"></li>
            <li class="timeline-group">
                <a href="#" class="btn btn-primary"><i class="icon-calendar3"></i> 2014</a>
            </li>
        </ul>
        <ul class="timeline">
            <li class="timeline-line"></li>
            <!-- /.timeline-line -->
            <li class="timeline-item block">
                <div class="timeline-badge">
                    <a title="" data-context="inverse" data-container="body" class="border-silc" href="#" data-original-title="block highlight"></a>
                </div>
                <div class="timeline-card card border-grey border-lighten-2">
                    <div class="card-header">
                        <div class="text-xs-center">
                            <p><i class="icon-location4 font-medium-4"></i></p>
                            <h4>Moved to Brooklyn</h4>
                            <p class="timeline-date">Jan 1, 2014</p>
                            <p>Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc elit! Sociis in et? Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing adipiscing montes! Elementum risus adipiscing non, cras scelerisque risus penatibus? Massa vut, habitasse, tincidunt!</p>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <div id="moved-brooklyn" class="height-450"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- 2014 -->
        <ul class="timeline">
            <li class="timeline-line"></li>
            <li class="timeline-group">
                <a href="#" class="btn btn-primary"><i class="icon-calendar3"></i> Founded in 2012</a>
            </li>
        </ul>
    </section>
</div>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->



@endsection