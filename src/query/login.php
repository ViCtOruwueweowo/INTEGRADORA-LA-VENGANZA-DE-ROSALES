<?php
namespace MyApp\Query;
use PDO;
use PDOException;
use MyApp\Data\Database;

class login
{
    
    public function verificalogin($usuario,$contraseña)
    {
        try
        {
            $pase=0;
            $cc= new Database("tbc","root","admin");
            $objetoPDO = $cc->getPDO();
            $admin='3';
            $query="SELECT* FROM usuario WHERE CORREO='$usuario' and NIVEL_USUARIO='$admin'";
            $consulta=$objetoPDO->query($query);
            while($renglon=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                if(password_verify($contraseña,$renglon['CONTRASEÑA']))
                {
                    $pase=1;
                }
            }
            if($pase>0)
            {
                session_start();
                $_SESSION["usuario"]=$usuario;
                echo "<div class='alet alet-succes'>";
                echo "<h2 align='center'>BIENVENIDO Admin </h2>";
                echo"</div";
                header("refresh:2 ../../admin.php");
            }
            $cc->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
   public function verificaemple($usuario,$contraseña)
    {
        try
        {
            $pase=0;
            $cc= new Database("tbc","root","admin");
            $objetoPDO = $cc->getPDO();
            $emple='2';
            $query="SELECT* FROM usuario WHERE CORREO='$usuario' and NIVEL_USUARIO='$emple'";
            $consulta=$objetoPDO->query($query);
            while($renglon=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                if(password_verify($contraseña,$renglon['CONTRASEÑA']))
                {
                    $pase=1;
                }
            }
            if($pase>0)
            {
                session_start();
                $_SESSION["usuario"]=$usuario;
                echo "<div class='alet alet-succes'>";
                echo "<h2 align='center'>BIENVENIDO Emplead@</h2>";
                echo"</div";
                header("refresh:2 ../../empleado.php");
            }

            $cc->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
    }
    public function verificausuario($usuario,$contraseña)
    {
        try
        {
            $pase=0;
            $cc= new Database("tbc","root","admin");
            $objetoPDO = $cc->getPDO();
            $usu='1';
            $query="SELECT* FROM Usuario WHERE CORREO='$usuario' and NIVEL_USUARIO='$usu'";
            $consulta=$objetoPDO->query($query);
            while($renglon=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                if(password_verify($contraseña,$renglon['CONTRASEÑA']))
                {
                    $pase=1;
                }
            }
            if($pase>0)
            {
                session_start();
                $_SESSION["usuario"]=$usuario;
                echo "<div class='alet alet-succes'>";
                echo "<h2 align='center'>BIENVENIDO ".$_SESSION["usuario"]."</h2>";
                echo"</div";
                header("refresh:2 ../../index.php");
            }
            $cc->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
    } 
    public function error($usuario,$contraseña)
    {

        try{
            $pase=0;
            $cc= new Database("tbc","root","admin");
            $objetoPDO = $cc->getPDO();
            $query="SELECT* FROM Usuario WHERE CORREO='$usuario'";
            $consulta=$objetoPDO->query($query);
            while($renglon=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                if(password_verify($contraseña,$renglon['CONTRASEÑA']))
                {
                    $pase=1;
                }
            }
            while($pase=0)
            {
                echo "<div class='alert alert-succes'>";
                echo "<h2 align='center'>USUARIO O PASSWORD INCORRECTO...</h2>";
                echo"</div";
                header("refresh:2 ../../views/scripts/FormLogin.php");
                
            }
    }
    catch(PDO $e)
    {
        echo $e->getMessage();
    }
    
}
    public function cerrarSesion()
{
    session_start();
    session_destroy();
    header("Location: ../../index.php");
}
}
