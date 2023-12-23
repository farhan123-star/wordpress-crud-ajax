<?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

get_header();

do_action( 'hestia_before_single_page_wrapper' );

?>
<div class="<?php echo hestia_layout(); ?>">
	<?php
	$class_to_add = '';
	if ( class_exists( 'WooCommerce', false ) && ! is_cart() ) {
		$class_to_add = 'blog-post-wrapper';
	}
	?>
	<div class="blog-post <?php esc_attr( $class_to_add ); ?>">
		<div class="container">
        <form id="frmContactUs">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" required/></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name" required/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" id="submit" name="submit"/></td>
        </tr>
    </table>
    <div id="result_msg">

    </div>
</form>
<style>
#frmContactUs table td{border:0px;}
#frmContactUs .false{color:red;}    
#frmContactUs .true{color:green;}    
</style>
<script>
jQuery('#frmContactUs').submit(function(event){
    event.preventDefault();
    // alert('success');
    jQuery('#result_msg').html('');
    var link="<?php echo admin_url('admin-ajax.php')?>";
    // alert(link);
    var form=jQuery('#frmContactUs').serialize();
    var formData=new FormData;
    formData.append('action','contact_us');
    formData.append('contact_us',form);
    jQuery('#submit').attr('disabled',true);
    jQuery.ajax({
        url:link,
        data:formData,
        processData:false,
        contentType:false,
        type:'post',
        success:function(result){
            // alert(result);
            jQuery('#submit').attr('disabled',false);
            if(result.success==true){
                jQuery('#frmContactUs')[0].reset();
            }
            jQuery('#result_msg').html('<span class="'+result.success+'">'+result.data+'</span>')    
            //result.success
            //result.data
        }
    });
});    
</script>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile;
				else :
					get_template_part( 'template-parts/content', 'none' );
			endif;
				?>
		</div>
	</div>
</div>
	<?php get_footer(); ?>
