        <!-- Bootstrap Core JavaScript -->
        <script src="<?=$my_root.'admin/asset';?>/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?=$my_root.'admin/asset';?>/vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?=$my_root.'admin/asset';?>/dist/js/sb-admin-2.js"></script>
        <script src="<?=$my_root.'admin/asset';?>/js/imageupload.js"></script>
        <script>
            initSample();
        </script>
        <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
        </script>
        <?php if(isset($f_img)):?>
            <script type="text/javascript">
                $('.post_thumb').prepend('<img src="<?php echo $my_root.'uploads/'.$f_img; ?>" width="100" height="100">');
            </script>
        <?php endif;?>
        <?php if(isset($h_img)):?>
            <script type="text/javascript">
                $('.post_thumb').prepend('<img src="<?php echo $my_root.'uploads/'.$h_img; ?>" width="100" height="100">');
            </script>
        <?php endif;?>
        <?php if(isset($b_img)):?>
            <script type="text/javascript">
                $('.post_thumb_b').prepend('<img src="<?php echo $my_root.'uploads/'.$b_img; ?>" width="100" height="100">');
            </script>
        <?php endif;?>

    </body>
</html>