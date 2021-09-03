<?php
/**
* general site format is divided on main content section and constant sidebar.
* main container contains all content, offers, footer 
* search bar contains logo, main-menu, section search-bar
*/

/* Main container */
?>
<div class="container-fluid">
    <div class="row">
           <div class="col-md-3 col-md-push-9 col-sm-3 col-sm-push-9 searchbar-section">
               <nav>
                  
                   <header>
            <?php if ($logo): ?>           
                       <a href="<?php print $front_page; ?>"
                          title="<?php print t('Home'); ?>"
                          rel="home"
                          id="logo"
                          class="center-block">
                           <img src="<?php print $logo; ?>"
                                alt="<?php print t('Home'); ?>"/>
                       </a>
            <?php endif; ?>
        
            <?php if($main_menu || $secondary_menu): ?>
                <?php print theme('links__system_main_menu',
                        array (
                            'links' => $main_menu,
                            'attributes'=> array (
                                'id'=>'main-menu',
                                'class'=>array(
                                    'links', 'clearfix'
                                    )
                                ),
//'heading'=>t('Main menu') // if need menu name - uncomment
                            )
                        ); ?>
            <?php print theme('links__system_secondary_menu',
                    array (
                        'links' => $secondary_menu,
                        'attributes'=> array (
                            'id'=>'secondary-menu',
                            'class'=>array(
                                'links', 'clearfix'
                                )
                            ),
                        //'heading'=>t('Secondary menu') // if need menu name - uncomment beginning
                            )
                        ); ?>
            <?php endif; ?>
                   </header>

                    <section class="search-bar">
            <?php if ($page['search_bar']): ?>            
                <?php print render($page['search_bar']); ?>
            <?php endif; ?>
                    </section>
               </nav>
           </div>
        
      
        <div class="col-md-9 col-md-pull-3 col-sm-9 col-sm-pull-3 main-section">
   
       <?php if ($is_front): ?>
                <?php print render($page['home_banner']); ?>
       <?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    
                
            <h2>
            <?php print $title; ?>
            </h2>
                    </div>
            </div>
        <?php endif; ?>
        <?php print render ($title_suffix); ?>

        <?php if ($tabs): ?>
            <div>
                <?php print render ($tabs); ?>
            </div>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>

            <div class="row page-bottom">

                <div class="col-sm-3 col-xs-6">
                   <?php if ($page['bottom_one']): ?>  
               <?php print render($page['bottom_one']); ?>
            <?php endif; ?>
                </div>
                
                 <div class="col-sm-3 col-xs-6">
                    <?php if ($page['bottom_two']): ?>  
               <?php print render($page['bottom_two']); ?>
            <?php endif; ?>
                </div>
                 <div class="col-sm-3 col-xs-6">
                    <?php if ($page['bottom_three']): ?>  
               <?php print render($page['bottom_three']); ?>
            <?php endif; ?>
                </div>
                 <div class="col-sm-3 col-xs-6">
                    <?php if ($page['bottom_four']): ?>  
               <?php print render($page['bottom_four']); ?>
            <?php endif; ?>
                </div>
            </div>
            <footer class="row">
                    <?php if ($page['footer']): ?>  
               <?php print render($page['footer']); ?>
            <?php endif; ?>
             
            </footer>
    
            
        </div>  
    </div>
</div> 
