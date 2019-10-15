<?php
/**
 * The Header for our theme.
 * @package IT Company
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'it-company' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header role="banner" class="header">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'it-company' ); ?></a>
    <div class="container">
      <div class="top-header">
        <div class="row m-0">
          <div class="col-lg-8 col-md-8">
            <div class="row">
              <div class="col-lg-4 col-md-4 pl-0">
                <?php if ( get_theme_mod('it_company_question','') != "" ) {?>
                  <div class="welcome">
                    <?php if ( get_theme_mod('it_company_question','') != "" ) {?>
                      <p><?php echo esc_html( get_theme_mod('it_company_question','') ); ?></p>
                    <?php }?>
                  </div>
                <?php }?>
              </div>
              <div class="col-lg-4 col-md-4 p-0">
                <div class="contact-details">
                  <div class="row">
                    <?php if ( get_theme_mod('it_company_email','') != "" ) {?>
                      <div class="col-lg-2 col-md-2 conatct-font">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="col-lg-10 col-md-10 p-0">
                        <?php if ( get_theme_mod('it_company_email','') != "" ) {?>
                          <p><?php echo esc_html( get_theme_mod('it_company_email','') ); ?></p>
                        <?php }?>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 p-0">
                <div class="contact-details">
                  <div class="row ">
                    <?php if ( get_theme_mod('it_company_call_number','') != "" ) {?>
                      <div class="col-lg-2 col-md-2 conatct-font ">
                        <i class="fa fa-phone"></i>
                      </div>
                      <div class="col-lg-10 col-md-10 p-0">
                        <?php if ( get_theme_mod('it_company_call_number','') != "" ) {?>
                          <p><?php echo esc_html( get_theme_mod('it_company_call_number','' )); ?></p>
                        <?php }?>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 pr-0">
            <div class="social-media">
              <?php if( get_theme_mod( 'it_company_facebook' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'it_company_facebook','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
              <?php } ?>
              <?php if( get_theme_mod( 'it_company_twitter' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'it_company_twitter','' ) ); ?>"><i class="fab fa-twitter"></i></a>
              <?php } ?>
              <?php if( get_theme_mod( 'it_company_googleplus' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'it_company_googleplus','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
              <?php } ?>
              <?php if( get_theme_mod( 'it_company_linkedin') != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'it_company_linkedin','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="header">
      <div class="container">
        <div class="menu-sec">
          <button role="tab" class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','it-company'); ?></a></button>
          <div class="row">
            <div class="col-lg-10 col-md-9">
              <div class="top-bar">
                <div class="row">
                  <div class="col-lg-3 col-md-3">
                    <div class="logo">
                      <?php if( has_custom_logo() ){ it_company_the_custom_logo();
                       }else{ ?>
                      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php $description = get_bloginfo( 'description', 'display' );
                      if ( $description || is_customize_preview() ) : ?> 
                        <p class="site-description"><?php echo esc_html($description); ?></p>
                      <?php endif; }?>
                    </div>
                  </div>
                  <div class="menubox col-lg-9 col-md-9 pr-0">
                    <nav class="nav" role="navigation">
                      <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 pl-0">
              <div class="search-box">
                <?php get_search_form();?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
</html>