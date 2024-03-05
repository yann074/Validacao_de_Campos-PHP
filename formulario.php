
<?php 

    if(isset($_POST)){ //nome
        if(isset($_POST['nome'])){
            echo 'nome obrigatório';
        }
        if(!filter_input(INPUT_POST, "nascimento")){ //data certa
            $data = DateTime:: createFromFormat('d/m/Y', 'nascimento');
            if(!$data){
                echo 'esta errado';
            }
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ //email com @ e . .
            echo 'email errado';
        }
        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){ //link http://www.dsakmds.com
            echo 'site errado';
        }

        $salario = ["options" => [ 'decimal' => ',']];
        if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salario)){
           echo 'digite correto seu burro';
        }
    }
?>
<form action="#" method="post">
    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $_POST['nome']?>">
        <label for="nascimento">Data</label>
        <input type="text" id="nascimento" name="nascimento" value="<?= $_POST['nascimento']?>">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?= $_POST['email']?>">
        <label for="site">Site</label>
        <input type="text" id="site" name="site" value="<?= $_POST['site']?>">
        <label for="filhos">Qtd de filhos</label>
        <input type="number" id="filhos" name="filhos" value="<?= $_POST['filhos']?>">
        <label for="salario">Salario</label>
        <input type="text" id="salario" name="salario" value="<?= $_POST['salario']?>">
        
        <button>enviar</button>
        
        
    </div>
</form>