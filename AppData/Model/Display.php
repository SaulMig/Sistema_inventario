<?php
/**
 * Created by PhpStorm.
 * User: Sullivan
 * Date: 25/10/2019
 * Time: 12:30 PM
 */

namespace AppData\Model;


class Display
{
    private $tabla="monitor";
    private $id_monitor;
    private $id_modelo;
    private $pulgadas;
    function __construct()
    {
        $this->conexion= new conexion();
    }
    function get($atributo)
    {
        return $this->$atributo;
    }

    function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
    function getAll()
    {
        $sql="select monitor.pulgadas as pulgadas, modelo.descripcion as modelo, monitor.id_monitor as m
              from marca, modelo, monitor
              where monitor.id_modelo=modelo.id_modelo
              and modelo.id_marca=marca.id_marca";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function add()
    {
        $sql="insert into `monitor`(`id_monitor`,`pulgadas`,`id_modelo`) values ('0','{$this->pulgadas}','{$this->id_modelo}')";
        $this->conexion ->QuerySimple($sql);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_monitor='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function edit($id)
    {
        $sql="select id_monitor,pulgadas,id_modelo from {$this->tabla} where id_monitor='{$id}'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="SELECT * FROM modelo where id_monitor='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql = "update {$this->tabla} 
                set pulgadas='{$this->pulgadas}',id_modelo='{$this->id_modelo}'
               where id_monitor='{$this->id_monitor}'";
        $this->conexion->QuerySimple($sql);
    }

}