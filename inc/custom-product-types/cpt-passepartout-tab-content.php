<div id='passepartout_product_options' class='panel woocommerce_options_panel'><?php
	?><div class='options_group'><?php
        woocommerce_wp_select(
            array(
                'id' => 'passepartout_items_sizes',
                'name' => 'passepartout_items_sizes',
                'label' => __('Set size', 'photolab'),
                'class' => 'cb-admin-select',
                'selected' => true,
                'value'    => $get_current_size[0]->term_id,
                'options' => $gallery_sizes,
            )
        );
        ?>
	</div>
</div>
