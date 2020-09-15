<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeHealthy</title>
    <script src="<?php echo base_url('assets/JS/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/Bootstrap/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/JS/croppie.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/Bootstrap/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/CSS/croppie.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/CSS/style_home.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        .Logout_btn {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <div class="left_area">
            <h3>Be<span>Healthy</span></h3>
        </div>
        <div class="right_area">
            <a href="<?php echo base_url('index.php/BLL_Usuarios/index') ?>" class='logout_btn text-decoration-none'>Login</a>
        </div>
    </header>
    <div class="sidebar">
        <center>
            <label for="upload_image" >
            <img id="Default" src="<?php echo base_url('assets/IMG/Clientes/default_user.png') ?>" class="profile_image">
            <img src="<?php echo base_url('assets/IMG/alt_img.png') ?>" class="Cam_IMG"></label>
            <h4 class="textCSS">Nome</h4>
        </center>
        <Div class="Itens-Side">
            <a href="#" class="text-decoration-none"><i class="fas fa-home"></i><span>Inicio</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-user"></i><span>Meu Perfil</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-shopping-cart"></i><span>Compras</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-shopping-bag"></i><span>Produtos</span></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-info-circle"></i><span>Informações</span></a>
        </Div>
    </div>

    <div class="content">
        <label for="check">
            <i class="fas fa-bars" class="space" id="sidebar_btn"></i>
        </label>
        <input type="file" name="upload_image" id="upload_image" />
        <center>
            <div class="cards_css">
                <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaTRCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f03e09659436c42bc504838952ac3a91c48b009e/Burn-hiit-zone-white-transparente.svg"><img class="Card_IMG" src="<?php echo base_url('assets/IMG/Card_1.png')?>"></a></div>
                <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaXdCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3a10305235f86ce0c815c54ab9f6c6a6b174b194/Race-bootcamp-white-transparente.svg" alt=""><img class="Card_IMG" src="<?php echo base_url('assets/IMG/Cardt_2.png')?>"></a></div>
                <div class="Img_hover"><a class="link-card" href="#"><img width="84px" class="Icon-Card" src="http://www.bioritmo.com.br/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBaThCIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--3745e3a8b40b6c5a28cf66c91d1d84b25ab2f961/Vidya-body-mind-white-transparente.svg"><img class="Card_IMG" src="<?php echo base_url('assets/IMG/Cardt_3.png')?>"></a></div>
            </div>
        </center>
    </div>
    <!-- <script src="<?php echo base_url('assets/JS/jquery/dist/jquery.js') ?>"></script> -->
    <!-- <script src="JS/validacoes.js"></script> -->
    <script src="<?php echo base_url('assets/JS/UploadImage.js') ?>"></script>
</body>
</html>


<!-- MODAL DE UPLOAD E AJUSTE DE IMAGEM - CROP.JS -->

<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Redimensionar Imagem e Carregar</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <div id="image_demo" style="width:350px; margin-top:30px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <br />
                        <br />
                        <br />
                        <button class="btn btn-success crop_image">Carregar</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>