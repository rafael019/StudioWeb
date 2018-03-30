<?php

    function customizar_tema($wp_customize){
        
        //Seção copyright
        $wp_customize->add_section('sec_copyright', array(
            'title' => 'Copyright', // Nome da Aba
            'description' => 'Seção para o Copyright' // Descrição da Aba
        ));
        // Configuração copyright
        $wp_customize->add_setting('set_copyright', array(
            'type'    => 'theme_mod',
            'default' => 'Copyright - Todos os direitos reservados',
        ));
        // Controle Copyright
        $wp_customize->add_control('crtl_copyright', array(
            'label'       => 'Copyright',
            'description' => 'Informe o copyright',
            'section'     => 'sec_copyright',
            'settings'    => 'set_copyright',
            'type'        => 'text'
        ));

        //Seção serviços
        $wp_customize->add_section('sec_servicos', array(
            'title' => 'Serviços', // Nome da Aba
            'description' => 'Seção para os serviços' // Descrição da Aba
        ));

        // Imagem serviços 1
        $wp_customize->add_setting('set_servicos1', array(
            'default' => '',
        ));
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
            $wp_customize,'ctrl_servicos_item1',array(
                'label'       => 'Imagem do Serviço 1',
                'width'       => 200,
                'height'      => 200,
                'section'     => 'sec_servicos',
                'settings'    => 'set_servicos1'
            )));
        
        // Titulo
        $wp_customize->add_setting('set_servicos1_titulo', array(
            'default' => '',
        ));
        $wp_customize->add_control('crtl_servicos1_titulo', array(
            'label'       => 'Título para o Serviço 1',
            'description' => 'Informe o título',
            'section'     => 'sec_servicos',
            'settings'    => 'set_servicos1_titulo',
            'type'        => 'text'
        ));
        // Descrição
        $wp_customize->add_setting('set_servicos1_desc', array(
            'default' => '',
        ));
        $wp_customize->add_control('crtl_servicos1_desc', array(
            'label'       => 'Descrição para o Serviço 1',
            'description' => 'Descrição o título',
            'section'     => 'sec_servicos',
            'settings'    => 'set_servicos1_desc',
            'type'        => 'textarea'
        ));


        // Imagem serviços 2
        $wp_customize->add_setting('set_servicos2', array(
            'default' => '',
        ));
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
            $wp_customize,'ctrl_servicos_item2',array(
                'label'       => 'Imagem do Serviço 2',
                'width'       => 200,
                'height'      => 200,
                'section'     => 'sec_servicos',
                'settings'    => 'set_servicos2'
            )));
        // Titulo
        $wp_customize->add_setting('set_servicos2_titulo', array(
            'default' => '',
        ));
        $wp_customize->add_control('crtl_servicos2_titulo', array(
            'label'       => 'Título para o Serviço 2',
            'description' => 'Informe o título',
            'section'     => 'sec_servicos',
            'settings'    => 'set_servicos2_titulo',
            'type'        => 'text'
        ));
        // Descrição
        $wp_customize->add_setting('set_servicos2_desc', array(
            'default' => '',
        ));
        $wp_customize->add_control('crtl_servicos2_desc', array(
            'label'       => 'Descrição para o Serviço 2',
            'description' => 'Descrição o título',
            'section'     => 'sec_servicos',
            'settings'    => 'set_servicos2_desc',
            'type'        => 'textarea'
        ));

        //  Imagem serviços 3
        $wp_customize->add_setting('set_servicos3', array(
            'default' => '',
        ));
        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
            $wp_customize,'ctrl_servicos_item3',array(
                'label'       => 'Imagem do Serviço 3',
                'width'       => 200,
                'height'      => 200,
                'section'     => 'sec_servicos',
                'settings'    => 'set_servicos3'
            )));
        // Titulo
        $wp_customize->add_setting('set_servicos3_titulo', array(
            'default' => '',
        ));
        $wp_customize->add_control('crtl_servicos3_titulo', array(
            'label'       => 'Título para o Serviço 3',
            'description' => 'Informe o título',
            'section'     => 'sec_servicos',
            'settings'    => 'set_servicos3_titulo',
            'type'        => 'text'
        ));
        //Descrição
        $wp_customize->add_setting('set_servicos3_desc', array(
            'default' => '',
        ));
        $wp_customize->add_control('crtl_servicos3_desc', array(
            'label'       => 'Descrição para o Serviço 3',
            'description' => 'Descrição o título',
            'section'     => 'sec_servicos',
            'settings'    => 'set_servicos3_desc',
            'type'        => 'textarea'
        ));
        
    }

add_action('customize_register', 'customizar_tema');

?>