<form method="post" action="">
    Cidade:
    <input name="cidade">

    <button> Enviar </button>
</form>

<?php
 if(isset($_POST['cidade'])){
    echo $_POST['cidade'];
 }

?>

