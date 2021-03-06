<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 *
 * This page template is a hybrid of
 * profiles/communications/themes/bootstrap/templates/system/page.tpl.php and
 * https://nrel.github.io/eere-app-template/example-1-level-navigation.html
 * (
 */
?>
<!--stopindex-->
<header id="navbar" role="banner">
  <div class="<?php print $container_class; ?>">
    <div class="row">
      <nav class="<?php print $navbar_classes; ?>">
        <div class="container">
          <div class="navbar-header">
            <?php if (!empty($primary_nav) || !empty($page['navigation'])): ?>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <?php endif; ?>
            <div class="navbar-brand">
              <?php if ($logo): ?>
                <span>
                  <img src="<?php print $logo; ?>" alt="" usemap="#logo" class="banner-logo">
                  <map name="logo">
                    <area shape="rect" coords="1,1,198,20" href="https://www.energy.gov" alt="Energy.gov">
                    <area shape="rect" coords="2,22,198,75" href="https://www.energy.gov/eere/office-energy-efficiency-renewable-energy" alt="Office of Energy Efficiency and Renewable Energy">
                  </map>
                </span>
              <?php endif; ?>
              <?php if (!empty($office)): ?>
                <span class="banner-title"><a href="<?php print $office_link; ?>"><?php print $office; ?></a></span>
              <?php endif; ?>
            </div>
          </div>

          <?php if (!empty($primary_nav) || !empty($page['navigation'])): ?>
            <div class="navbar-collapse collapse" id="navbar-collapse">
              <nav role="navigation">
                <?php if (!empty($primary_nav)): ?>
                  <?php print render($primary_nav); ?>
                <?php endif; ?>
                <?php if (!empty($page['navigation'])): ?>
                  <?php print render($page['navigation']); ?>
                <?php endif; ?>
              </nav>
            </div><!-- /.navbar-collapse -->
          <?php endif; ?>
        </div><!-- /.container -->
      </nav>
    </div><!-- /.row -->
    <?php if (!empty($secondary_nav)): ?>
      <div class="row">
        <div class="navbar navbar-default subnav">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#subnav" aria-expanded="false">
                <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>

            <div class="navbar-collapse collapse" id="subnav">
              <nav role="navigation">
               <?php print render($secondary_nav); ?>
              </nav>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
      </div><!-- /.row -->
    <?php endif; ?>
    <!-- end header -->
  </div><!-- /.container-->
</header>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
        <!-- BEGIN Breadcrumbs -->
        <div class="breadcrumbs">
      <?php if ($breadcrumb): ?>
          <?php print $breadcrumb; ?>
      <?php endif; ?>
        </div>
      <!-- END Breadcrumbs -->
      <?php if (isset($printable)): ?>
        <div class="printable">
          <?php print $printable; ?>
        </div>
      <?php endif; ?>
       <!-- END Printable -->
    </div>
  </div>
</div>
<!--startindex-->
<div id="maincontent" class="main-container <?php print $container_class; ?>">
  <div class="container">
    <header role="banner" id="page-header">
      <?php print render($page['header']); ?>
    </header> <!-- /#page-header -->

    <div class="row">

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

      <section<?php print $content_column_class; ?>>
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if (!empty($title)): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($page['help'])): ?>
          <?php print render($page['help']); ?>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </section>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>

    </div>
  </div>
</div>
<!--stopindex-->
<footer class="footer <?php print $container_class; ?>">
  <?php if (!empty($page['footer'])): ?>
    <?php print render($page['footer']); ?>
  <?php else: ?>
      <p class="footer-tagline"><?php print $site_name; ?> is a resource of the U.S. Department of Energy's <?php print $office; ?>.</p>
      <p class="footer-links">
          <a href="<?php print $contact_link; ?>">Contact Us</a> |
          <a href="<?php print $office_link; ?>"><?php print $office; ?></a> |
          <a href="https://www.energy.gov/eere/office-energy-efficiency-renewable-energy">Office of Energy Efficiency &amp; Renewable Energy</a>
        <?php global $base_path, $base_url;
        if (!user_is_logged_in()): ?>
          <?php if (module_exists('eere_mfa')): ?>
                | <a href="<?php print $base_url . '/mfa/login';?>">Admin Log In</a>
          <?php else: ?>
                | <a href="<?php print $base_url . '/user/login';?>">Admin Log In</a>
          <?php endif; ?>
        <?php endif; ?>
      </p>
      <p class="footer-links">
          <a href="https://www.energy.gov/about-us/web-policies">Web Policies</a> |
          <a href="https://www.energy.gov/about-us/web-policies/privacy">Privacy</a> |
          <a href="https://www.energy.gov/diversity/services/protecting-civil-rights/no-fear-act">No Fear Act</a> |
          <a href="https://www.energy.gov/whistleblower-protection-and-nondisclosure-agreements">Whistleblower Protection</a> |
          <a href="https://www.energy.gov/cio/department-energy-information-quality-guidelines">Information Quality</a> |
          <a href="https://www.energy.gov/open-government">Open Gov</a> |
          <a href="https://www.energy.gov/cio/office-chief-information-officer/services/assistive-technology/accessibility-standard-statement">Accessibility</a>
      </p>
  <?php endif; ?>
</footer>
<!--startindex-->
