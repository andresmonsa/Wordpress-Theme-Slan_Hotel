<?php
/*
* Slan Hotel 
* @package Slan
* @subpackage Slan Hotel
* @since 1.0
* Esta es la sidebar
*/
?>



<aside class="sidebar">
    <?php 
        if( is_active_sidebar('main-sidebar') ) {

            dynamic_sidebar('main-sidebar');
        } 
    ?>
</aside>